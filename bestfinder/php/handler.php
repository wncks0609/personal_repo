<?php

/** * 
 * Handler is a class to handle requests, responses and the connection with Sabre API Provider.
 * 
 * @author Daniel Son
 * @var client_id is an ID provided by Sabre
 * @var client_secret is a pasword provided by Sabre
 * @var url is the base endpoint provided by Sabre
*/ 
class Handler {
    private $client_id = 'V1:k9k7rfwmzpz18k2v:DEVCENTER:EXT';
    private $client_secret = 'DteR61aL';
    private $url = 'https://api-crt.cert.havail.sabre.com/v2/shop/flights/fares?';


    /**
     *  This function creates credential to get token from sabre and returns token
     * 
     *  @return access_token is the token created from curl request.
     * */ 
    private function create_access_token() {
        $credentials = base64_encode(base64_encode($this->client_id).':'.base64_encode($this->client_secret));

        $ch = curl_init("https://api-crt.cert.havail.sabre.com/v2/auth/token");
        $vars ="grant_type=client_credentials";
        $header =array(
            'Authorization: Basic '.$credentials,
            'Accept: */*',
            'Content-Type: application/x-www-form-urlencoded'
        );
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $vars);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $res= curl_exec($ch);
        curl_close($ch);

        return json_decode($res)->access_token;
    }

    /**
     *  This function returns the base endpoint
     * 
     *  @return url is the base endpoint url, which is a private variable
     * */ 
    public function getUrl() {
        return $this->url;
    }

    /**
     *  This function requests the API to get itinerary information.
     * 
     *  @param url is the url with queries
     *  @return content is the formatted response in json string.
     * */ 
    public function request($url) {

        $token = $this->create_access_token();

        $header = [
            "Authorization: Bearer " . $token,
            "Content-Type: application/json",
            "Accept: application/json",
        ];

        $ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER,$header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
 
        $content = curl_exec($ch);
        curl_close($ch);

        return $this->formatResponse($content);
    }

    /**
     *  This function reformats the response from Sabre to get only needed data.
     *  if request was not successful, it returns json string with error message.
     * 
     *  @param response is the response from request function
     *  @return response_array is the json format string of the formatted response .
     * */ 
    private function formatResponse($response) {
        $decoded_response = json_decode($response);

        $response_array = array();

        //checks if request was successful.
        if(isset($decoded_response->FareInfo)) {
            $response_array['status'] = 'success';
            
            //main object
            $obj = new stdClass();
            $obj->origin = $decoded_response->OriginLocation;
            $obj->destination = $decoded_response->DestinationLocation;
            $obj->Fares = array();
            $obj->LowestFare = new stdClass();

            foreach($decoded_response->FareInfo as $i=>$fare) {
                
                //check if the need data exists, and proceed if it exists.
                if(isset($fare->LowestFare->AirlineCodes) && $fare->LowestFare->AirlineCodes != null && number_format($fare->LowestFare->Fare,2) != '0.00') {

                    //fare object
                    $fare_info = new stdClass();

                    $fare_info->Airlines = $fare->LowestFare->AirlineCodes;
                    $fare_info->Amount = number_format($fare->LowestFare->Fare,2);
                    $fare_info->Currency = $fare->CurrencyCode;
    
                    $fare_info->Departure = explode("T",$fare->DepartureDateTime)[0];
                    $fare_info->Return = explode("T",$fare->ReturnDateTime)[0];
                    

                    //insert the lowest fare
                    if($i == 0) {
                        $obj->LowestFare = $fare_info;
                    } else {
                        //need to convert to float. 
                        //string comparison should be okay, but converted to avoid any possible erros.
                        if((float)$fare_info->Amount < (float)$obj->LowestFare->Amount) 
                        $obj->LowestFare = $fare_info;
                    }

                    //store the object into the array
                    $obj->Fares[] = $fare_info;
    
                    /**
                     * unset is not needed at this point. 
                     * However, I prefer to unset variable when it is not needed in furture for loop
                     * Also I have experienced errors due to not unsetting when response was huge.
                     */
                    unset($fare_info);
                }
            }
            
            $response_array['response'] = json_encode($obj);

            return json_encode($response_array);
        } else {
            $response_array['status'] = (isset($decoded_response->status) ? $decoded_response->status: "Not Processed");
            $response_array['error'] = $decoded_response;

            return json_encode($response_array);
        }
    }

    /**
     *  This function builds final endpoint with queries
     * 
     *  @param query is array with post data from the form.
     *  @return url_array is an array containing final endpoint or error status if exists.
     * */ 
    public function buildURL($query) {
    
        $url_array = array();

        $origin = $query['origin'];
        $destination = $query['destination'];
        $duration = $query['days_of_stay'];

        //check if origin is valid.
        //and get only airport code
        if(strlen($origin) >= 3 ) {
            $origin = explode(" ", $origin)[0];
        } else {
            $url_array['error'] = 'Invalid length of origin';
        }

        //check if destination is valid.
        //and get only airport code
        if(strlen($destination) >= 3) {
            $destination = explode(" ", $destination)[0];
        } else {
            $url_array['error'] .= '\n Invalid length of destination';
        }

        //check if duration is vaild
        if((int)$duration > 6) {
            $url_array['error'] .= '\n Days of stay can not be over 6 nights';
        }


        //if no error encountered, creates an url object.
        if(isset($url_array['error'])) {
            $url_array['url'] = 'url can not be created.';
            $url_array['status'] = 'failed';
            return $url_array;
        } else {
            $url = $this->getUrl();

            $url .= 'origin='.strtoupper($origin).'&';
            $url .= 'destination='.strtoupper($destination).'&';
            $url .= 'lengthofstay='.$duration;

            $url_array['url'] = $url;

            return $url_array;
        }
    }


}

?>