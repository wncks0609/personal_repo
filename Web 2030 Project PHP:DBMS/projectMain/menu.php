<?php
class foods {
    public $name, $price;
}

class souvenirs {
    public $name, $price;
}

    $dimsum = new foods; $dimsum->name = "Dimsum"; $dimsum->price = 7.99;
    $chowmein = new foods; $chowmein->name = "Chow Mein"; $chowmein->price =  9.99;
    $cookie = new foods; $cookie->name = "Fortune Cookie"; $cookie->price = 4.99;
    $duck = new foods; $duck->name = "Beijing Duck"; $duck->price =  32.99;
    $friedRice = new foods; $friedRice->name = "Fried Rice"; $friedRice->price =  13.99;
    $noodles = new foods; $noodles->name = "Noodles in soup"; $noodles->price = 11.99;
    $sweetPork = new foods; $sweetPork->name ="Sweet Sour Pork"; $sweetPork->price = 15.99;
    $thickNoodles = new foods; $thickNoodles->name = "Thick Noodles in soup"; $thickNoodles->price =  13.99;

    $bottles = new souvenirs; $bottles->name = "Chinese Traditional Whiskey"; $bottles->price = "328.99";
    $dolls = new souvenirs; $dolls->name = "Dolls"; $dolls->price = "13.99";
    $drawing = new souvenirs; $drawing->name = "Drawing"; $drawing->price = "149.99";
    $dreamCatcher = new souvenirs; $dreamCatcher->name = "Dream Catcher"; $dreamCatcher->price = "19.99";
    $fortune = new souvenirs; $fortune->name = "Maneki-neko "; $fortune->price = "65.99";
    $giftCard = new souvenirs; $giftCard->name = "Gift Card"; $giftCard->price = "100.00";
    $teaSet = new souvenirs; $teaSet->name = "Tea Set"; $teaSet->price = "145.99";

?>