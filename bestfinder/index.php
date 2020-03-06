<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colrolib Templates">
    <meta name="author" content="Colrolib">
    <meta name="keywords" content="Colrolib Templates">

    <!-- Title Page-->
    <title>Lowest Price Ticket Finder</title>
   
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="page-wrapper bg-color-1 p-t-165 p-b-100">
        <div class="wrapper wrapper--w680">
            <div class="card card-2">
                <div class="card-body">
                    <ul class="tab-list">
                        <li class="tab-list__item active">
                            <a class="tab-list__link" href="#tab3" data-toggle="tab">FInd the lowest flight in next 192 calendar days</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab3">
                            <form id="form">
                                <div class="input-group">
                                    <label class="label">origin:</label>
                                    <input class="input--style-1 airport" type="text" name="origin" autocomplete="off" placeholder="Airport" required="required">
                                </div>
                                <div class="input-group">
                                    <label class="label">destination:</label>
                                    <input class="input--style-1 airport" type="text" name="destination" autocomplete="off" placeholder="Airport" required="required">
                                </div>
                                <div class="input-group">
                                    <label class="label">Days of staying:</label>
                                    <div class="input-group-icon" id="js-select-special">
                                        <input class="input--style-1" type="text" value="1 Day" disabled="disabled" id="days">
                                        <i class="zmdi zmdi-chevron-down input-icon"></i>
                                    </div>
                                    <div class="dropdown-select">
                                        <ul class="list-room">
                                            <li class="list-room__item">
                                                <span class="list-room__name">Days</span>
                                                <ul class="list-person">
                                                    <li class="list-person__item">
                                                        <span class="name">Days</span>
                                                        <div class="quantity quantity1">
                                                            <span class="minus">-</span>
                                                            <input class="" id="day_value" value="1" name="days_of_stay">
                                                            <span class="plus">+</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <button class="btn-submit" type="submit">search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="display:none; margin-bottom:80px;" class="container col-sm-4 col-md-7 col-lg-12 mt-5">

    <div class="panel_c article-p1" style="display: flex; align-items: center; font: 16px/24px 'Roboto', sans-serif; width: 350px; padding: 14px; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);">
        <div>
            <p id="best_offer_price" class="panel-count" style=" color: #0277BD; font-size: 25px;"></p>
            <p id="best_offer_detail" class="panel-exp" style="color: #595959; font-size: 18px; line-height: 1; margin-top: 4px;"></p>
            <p id="best_offer_airline" class="panel-exp" style="color: #595959; font-size: 18px; line-height: 1; margin-top: 4px;"></p>
        </div>
    </div>

    <div class="card">
        <h3 class="card-header" id="monthAndYear"></h3>
        <table class="table table-bordered table-responsive-sm" id="calendar">
            <thead>
            <tr>
                <th>Sun</th>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
            </tr>
            </thead>

            <tbody id="calendar-body">

            </tbody>
        </table>

        <div class="form-inline">

            <button class="btn btn-outline-primary col-sm-6" id="previous" onclick="previous()">Previous</button>

            <button class="btn btn-outline-primary col-sm-6" id="next" onclick="next()">Next</button>
        </div>
        <br/>
        <form class="form-inline">
            <label class="lead mr-2 ml-2" for="month">Jump To: </label>
            <select class="form-control col-sm-4" name="month" id="month" onchange="jump()">
                <option value=1>Jan</option>
                <option value=2>Feb</option>
                <option value=3>Mar</option>
                <option value=4>Apr</option>
                <option value=5>May</option>
                <option value=6>Jun</option>
                <option value=7>Jul</option>
                <option value=8>Aug</option>
                <option value=9>Sep</option>
                <option value=10>Oct</option>
                <option value=11>Nov</option>
                <option value=12>Dec</option>
            </select>


            <label for="year"></label><select class="form-control col-sm-4" name="year" id="year" onchange="jump()">
            <option value=1990>1990</option>
            <option value=1991>1991</option>
            <option value=1992>1992</option>
            <option value=1993>1993</option>
            <option value=1994>1994</option>
            <option value=1995>1995</option>
            <option value=1996>1996</option>
            <option value=1997>1997</option>
            <option value=1998>1998</option>
            <option value=1999>1999</option>
            <option value=2000>2000</option>
            <option value=2001>2001</option>
            <option value=2002>2002</option>
            <option value=2003>2003</option>
            <option value=2004>2004</option>
            <option value=2005>2005</option>
            <option value=2006>2006</option>
            <option value=2007>2007</option>
            <option value=2008>2008</option>
            <option value=2009>2009</option>
            <option value=2010>2010</option>
            <option value=2011>2011</option>
            <option value=2012>2012</option>
            <option value=2013>2013</option>
            <option value=2014>2014</option>
            <option value=2015>2015</option>
            <option value=2016>2016</option>
            <option value=2017>2017</option>
            <option value=2018>2018</option>
            <option value=2019>2019</option>
            <option value=2020>2020</option>
            <option value=2021>2021</option>
            <option value=2022>2022</option>
            <option value=2023>2023</option>
            <option value=2024>2024</option>
            <option value=2025>2025</option>
            <option value=2026>2026</option>
            <option value=2027>2027</option>
            <option value=2028>2028</option>
            <option value=2029>2029</option>
            <option value=2030>2030</option>
        </select></form>
    </div>
</div>
    <!-- Main JS-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" /> -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">




<script>
        let state;
        let today = new Date();

        /**
         * Modified because it was getting the previous month
         * from 
         *  let currentMonth = today.getMonth(); 
         * to 
         *  let currentMonth = today.getMonth() + 1;
         */
        let currentMonth = today.getMonth() + 1;
        let currentYear = today.getFullYear();
        let selectYear = document.getElementById("year");
        let selectMonth = document.getElementById("month");

        months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
        
        monthAndYear = document.getElementById("monthAndYear");        
        
        /**
         * Modified because it was getting incorrect month and to pass state
         * from 
         *  currentYear = (currentMonth === 11) ? currentYear + 1 : currentYear;
            currentMonth = ((currentMonth) % 11);
            showCalendar(currentMonth, currentYear);

         * to 
         *  currentYear = (currentMonth === 12) ? currentYear + 1 : currentYear;
            currentMonth = ((currentMonth) % 12)+1;
            showCalendar(currentMonth, currentYear, state);

         */
        function next() {
            currentYear = (currentMonth === 12) ? currentYear + 1 : currentYear;
            currentMonth = ((currentMonth) % 12)+1;

            showCalendar(currentMonth, currentYear, state);
        }
        

        /**
         * Modified because it was getting incorrect month and to pass state
         * from 
        *   currentYear = (currentMonth === 0) ? currentYear - 1 : currentYear;
            currentMonth = (currentMonth === 0) ? 12 : currentMonth - 1;
            showCalendar(currentMonth, currentYear);

         * to 
         *  currentYear = (currentMonth === 1) ? currentYear - 1 : currentYear;
            currentMonth = (currentMonth === 1) ? 12 : currentMonth - 1;
            showCalendar(currentMonth, currentYear, state);
         */
        function previous() {
            currentYear = (currentMonth === 1) ? currentYear - 1 : currentYear;
            currentMonth = (currentMonth === 1) ? 12 : currentMonth - 1;
            showCalendar(currentMonth, currentYear, state);
        }
        
         /**
         * Modified to pass state
         * from 
            showCalendar(currentMonth, currentYear);

         * to 
            showCalendar(currentMonth, currentYear, state);
         */
        function jump() {
            currentYear = parseInt(selectYear.value);
            currentMonth = parseInt(selectMonth.value);
            showCalendar(currentMonth, currentYear, state);
        }
        
        function showCalendar(month, year, response) {
        
            let firstDay = (new Date(year, month-1)).getDay();
            tbl = document.getElementById("calendar-body"); // body of the calendar
        
            // clearing all previous cells
            tbl.innerHTML = "";
        
            // filing data about month and in the page via DOM.

            /*
             * Modified ince months[month] was getting the next month.
             * from 
             *  months[month] 
             * to 
             *  months[month-1] s
            */
            monthAndYear.innerHTML = months[month-1] + " " + year;
            selectYear.value = year;
            selectMonth.value = month;
        
            // creating all cells
            let date = 1;
            for (let i = 0; i < 6; i++) {
                // creates a table row
                let row = document.createElement("tr");
        
                //creating individual cells, filing them up with data.
                for (let j = 0; j < 7; j++) {

                    if (i === 0 && j < firstDay) {
                        cell = document.createElement("td");
                        cellText = document.createTextNode("");
                        cell.appendChild(cellText);
                        row.appendChild(cell);
                    }

                    else if (date > daysInMonth(month, year)) {
                        break;
                    }
        
                    else {
                        /********************* ADDED by Daniel Son  *********************************/
                        let full_date = year+'-'+((month < 10)? '0'+month:month) +'-'+((date < 10)? '0'+date:date)

                        let fare_container;
                        let fare_subcontainer;
                        let price;
                        let airline;

                        response.Fares.map(function(fare){
                            if(fare.Return == full_date) {
                                fare_container = document.createElement("div");
                                fare_container.className = "panel_c article-p1";
                                fare_container.setAttribute('style', 'display: flex; align-items: center; font: 16px/24px "Roboto", sans-serif; width: 150px; padding: 14px; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);')

                                fare_subcontainer = document.createElement("div");

                                price = document.createElement("p");
                                price.className = "panel-count";
                                price.setAttribute('style','color: #0277BD; font-size: 20px;');

                                airline = document.createElement("p");
                                airline.className = "panel-exp";
                                airline.setAttribute('style', 'color: #595959; font-size: 10px; line-height: 1; margin-top: 4px;');


                                price.appendChild(document.createTextNode(fare.Amount +" "+fare.Currency));

                                let airline_text = '';

                                fare.Airlines.map(function(airline_code) {
                                    airline_text += airline_code+" ";
                                })
                                airline.appendChild(document.createTextNode("Enjoy flight with "+airline_text));
                            }
                        })
                        if(fare_container) {
                            fare_subcontainer.appendChild(price);
                            fare_subcontainer.appendChild(airline);
                            fare_container.appendChild(fare_subcontainer)
                        }
                       
                        /********************* ADDED by Daniel Son END  *********************************/


                        cell = document.createElement("td");
                        cellText = document.createElement("p").appendChild(document.createTextNode(date));

                        if (date === today.getDate() && year === today.getFullYear() && month === today.getMonth()+1) {
                            cell.classList.add("bg-info");
                        } 


                        

                        cell.appendChild(cellText);

                        //Added by Daniel
                        if(fare_container) {
                            cell.appendChild(fare_container);
                        }
                        ////////

                        row.appendChild(cell);
                        date++;
                    }
                }
                
        
                tbl.appendChild(row); // appending each row into calendar body.
            }
        
        }
        
        
        // check how many days in a month code from https://dzone.com/articles/determining-number-days-month
        function daysInMonth(iMonth, iYear) {
            return 32 - new Date(iYear, iMonth, 32).getDate();
        }




    /********************* ADDED by Daniel Son  *********************************/
    $(function() {

        $('#days').click(function() {
            $('dropdown-select').css('display', 'block');
        })

        $('.minus').click(function() {
            let day_value = $("#day_value").val();

            if(Number(day_value) > 1) {
                let new_value = Number(day_value) - 1;
                $("#day_value").val(new_value).toString();
                $("#days").val(new_value + " Days");
            }
        })
        
        $('.plus').click(function() {
            let day_value = $("#day_value").val();

            if(Number(day_value) < 6) {
                let new_value = Number(day_value) +1;
                $("#day_value").val(new_value.toString());
                $("#days").val(new_value +" Days");
            }

        })

        $( "#form" ).submit(function( event ) {
 
            event.preventDefault();

            $.ajax({
                type: "POST",
                url: 'php/receiver.php',
                data: $('#form').serialize()
              }).done(function (res) {

                try {
                    let response = JSON.parse(res);

                    if(response.status == 'success') {
                        state = JSON.parse(response.response);

                        let best_offer_airlines = '';
                        state.LowestFare.Airlines.map(function(airline) {
                            best_offer_airlines += airline + " ";
                        })

                        document.getElementById('best_offer_price').innerHTML = "Best Offer : " + state.LowestFare.Amount + " " + state.LowestFare.Currency;
                        document.getElementById('best_offer_detail').innerHTML = "From : "+  state.LowestFare.Departure + "<br>" + "To : " + state.LowestFare.Return;
                        document.getElementById('best_offer_airline').innerHTML = "Carried by "+  best_offer_airlines;
                        document.getElementsByClassName('container')[0].style.display = "block";
                        showCalendar(currentMonth, currentYear, state);

                        window.scrollTo({ top: 900, behavior: 'smooth' })

                    } else {
                        let error = response.error;

                        if(error.message) {
                            alert(error.message);
                        } else {
                            alert(error);
                        }
                    }
                }catch(e) {
                    alert("Sorry! somethin went bad! Try another location or change days of stay.");
                }
                
              });
          });

        $('.airport').autocomplete({
            source: function (request, response) {
                $.getJSON("json/airports.json", function (data) {
                    response($.map(data, function (value, key) {
                        let str = value.VENDOR_CODE + " " + value.POI_NAME + " " + value.COUNTRY_CODE;
                        if(str.toLowerCase().includes(request.term.toLowerCase())) {
                            return str;
                        }
                    }));
                });
            },
            minLength: 2,
            delay: 0
        });

        $(".airport").change(function() {
            $(".ui-helper-hidden-accessible").css('display','none');
            $(".ui-menu").css('list-style-type', 'none');
            $(".ui-menu-item-wrapper").css('width', "500px");
            $(".ui-menu-item-wrapper").css('background-color', "white");

        })

      });
/********************* ADDED by Daniel Son END *********************************/

</script>

    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
