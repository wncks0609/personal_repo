var slideIndex = 0;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("floor");
    if (n > x.length) 
    {
        slideIndex = 1
    } 
    if (n < 1) {slideIndex = x.length} ;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) 
    {
        slideIndex = 1;
    } 
    x[slideIndex-1].style.display = "block"; 

}

function changeRoomNumber(e) {

    $(".roomPrice").empty();
    
    let secondF = ["Choose a room","201","202","203","204","205","206","207","208","209","210","211","222","212","213","214","215","216","217","218","219","220","221"];
    let thirdF = ["Choose a room","311","312","313","314","333","315","316","317","318"];
    let forthF = ["Choose a room","421","422","423","424","425","477","426","427","428","429","430","431"];
    let target = document.getElementById("roomChoose");
    let insert = "";

    if(e.value == "2F")  insert  = secondF;
    else if(e.value == "3F")  insert = thirdF;
    else if(e.value == "4F")  insert = forthF;

    target.options.length = 0;
    for (x in insert) {
        var opt = document.createElement("option");
        opt.value = insert[x];
        opt.innerHTML = insert[x];
        opt.setAttribute('value',insert[x]);
        target.appendChild(opt);
    } 
}

function setPrice(selectedRoom) {
    var floor = $('#floorChoose').val();
    
    var div = document.getElementsByClassName('roomPrice')[0];

    $(".roomPrice").empty();
        

    if(floor == "2F")
    {   
        if(selectedRoom.value != "222")
        {                
            var roomPrice = document.createElement("p");
            var tax = document.createElement("p");
            var cleaningFee = document.createElement("p");
            var total = document.createElement("p");
            total.setAttribute("id","totalPrice");
        
            var roomPriceDetail = document.createTextNode("Room price : $250 CA");
            var taxDetail = document.createTextNode("Tax : $50 CAD");
            var cleaningFeeDetail = document.createTextNode("Cleaning fee : $64 CAD");
            var totalDetail = document.createTextNode("Your total : $364 CAD");
            roomPrice.appendChild(roomPriceDetail);
            tax.appendChild(taxDetail);
            cleaningFee.appendChild(cleaningFeeDetail);
            total.appendChild(totalDetail);

            div.appendChild(roomPrice);
            div.appendChild(tax);
            div.appendChild(cleaningFee);
            div.appendChild(total);
            
        }
        else 
        {
            var roomPrice = document.createElement("p");
            var tax = document.createElement("p");
            var cleaningFee = document.createElement("p");
            var total = document.createElement("p");
            total.setAttribute("id","roomPrice");

        
            var roomPriceDetail = document.createTextNode("Room price : $295 CA");
            var taxDetail = document.createTextNode("Tax : $56 CAD");
            var cleaningFeeDetail = document.createTextNode("Cleaning fee : $64 CAD");
            var totalDetail = document.createTextNode("Your total : $415 CAD");
            roomPrice.appendChild(roomPriceDetail);
            tax.appendChild(taxDetail);
            cleaningFee.appendChild(cleaningFeeDetail);
            total.appendChild(totalDetail);

            div.appendChild(roomPrice);
            div.appendChild(tax);
            div.appendChild(cleaningFee);
            div.appendChild(total);
        }
    }
    if(floor == "3F")
    {
        if(selectedRoom.value != "333")
        {
            var roomPrice = document.createElement("p");
            var tax = document.createElement("p");
            var cleaningFee = document.createElement("p");
            var total = document.createElement("p");
            total.setAttribute("id","roomPrice");

        
            var roomPriceDetail = document.createTextNode("Room price : $300 CA");
            var taxDetail = document.createTextNode("Tax : $64 CAD");
            var cleaningFeeDetail = document.createTextNode("Cleaning fee : $75 CAD");
            var totalDetail = document.createTextNode("Your total : $439 CAD");
            roomPrice.appendChild(roomPriceDetail);
            tax.appendChild(taxDetail);
            cleaningFee.appendChild(cleaningFeeDetail);
            total.appendChild(totalDetail);

            div.appendChild(roomPrice);
            div.appendChild(tax);
            div.appendChild(cleaningFee);
            div.appendChild(total);
        }
        else
        {
            var roomPrice = document.createElement("p");
            var tax = document.createElement("p");
            var cleaningFee = document.createElement("p");
            var total = document.createElement("p");
            total.setAttribute("id","roomPrice");

        
            var roomPriceDetail = document.createTextNode("Room price : $349 CA");
            var taxDetail = document.createTextNode("Tax : $67 CAD");
            var cleaningFeeDetail = document.createTextNode("Cleaning fee : $75 CAD");
            var totalDetail = document.createTextNode("Your total : $491 CAD");
            roomPrice.appendChild(roomPriceDetail);
            tax.appendChild(taxDetail);
            cleaningFee.appendChild(cleaningFeeDetail);
            total.appendChild(totalDetail);

            div.appendChild(roomPrice);
            div.appendChild(tax);
            div.appendChild(cleaningFee);
            div.appendChild(total);
        }
    }
    if(floor == "4F")
    {
        if(selectedRoom.value != "477" && selectedRoom.value != "422" && selectedRoom.value != "429")
        {
            var roomPrice = document.createElement("p");
            var tax = document.createElement("p");
            var cleaningFee = document.createElement("p");
            var total = document.createElement("p");
            total.setAttribute("id","roomPrice");

        
            var roomPriceDetail = document.createTextNode("Room price : $399 CA");
            var taxDetail = document.createTextNode("Tax : $72 CAD");
            var cleaningFeeDetail = document.createTextNode("Cleaning fee : $85 CAD");
            var totalDetail = document.createTextNode("Your total : $556 CAD");
            roomPrice.appendChild(roomPriceDetail);
            tax.appendChild(taxDetail);
            cleaningFee.appendChild(cleaningFeeDetail);
            total.appendChild(totalDetail);

            div.appendChild(roomPrice);
            div.appendChild(tax);
            div.appendChild(cleaningFee);
            div.appendChild(total);
        }
        else 
        {
            var roomPrice = document.createElement("p");
            var tax = document.createElement("p");
            var cleaningFee = document.createElement("p");
            var total = document.createElement("p");
            total.setAttribute("id","roomPrice");

        
            var roomPriceDetail = document.createTextNode("Room price : $449 CA");
            var taxDetail = document.createTextNode("Tax : $75 CAD");
            var cleaningFeeDetail = document.createTextNode("Cleaning fee : $85 CAD");
            var totalDetail = document.createTextNode("Your total : $609 CAD");
            roomPrice.appendChild(roomPriceDetail);
            tax.appendChild(taxDetail);
            cleaningFee.appendChild(cleaningFeeDetail);
            total.appendChild(totalDetail);

            div.appendChild(roomPrice);
            div.appendChild(tax);
            div.appendChild(cleaningFee);
            div.appendChild(total);
        }
    }   
}
$(document).ready(function() {
    $('#reserve').click(function(){
        var price = $("#totalPrice").html();
        var floor = $("#floorChoose").val();
        var room = $("#roomChoose").val();
        price = price.match(/[0-9]/g);
        price = price.join('');

        $.ajax({
            method: "post",
            url : "reservationData.php",
            data : {
                floorChoose:floor,
                roomChoose:room,
                totalPrice:price
            }
        }).done(function(data){
            alert(data);
        });
    });
});
