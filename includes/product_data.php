
<?php 

$wearables = ["<h2>black and white</h2>","<h2>green</h2>","<h2>white</h2>"];
$melle = ["sword", "nunchuks", "Bo-staff"];
$ranged = ["bow", "blow gun" , "ninja stars"];

$wearables_prices = [20.00,22.00,25.00];
$melle_prices = [100.00,50.00,60.00];
$ranged_prices = [90.00,35.00,15.00];

$wearables_desc = [
    "A sleek black and white suit comes in child and adult sizes",
    "For the urban ninja, comes in all sizes.",
    "The winter ninja suit standard is adult sizes only."
];
$ranged_desc = ["Archery is an ancient skill to many cultures","Blow guns are a great small game hunting tool","Ninja stars the most iconic ninja weapon"];
$melle_desc = ["For up close encounters nothing beats a sword.","Bludgeoning with chucks was bruce's fav.","The staff, melle with some reach is a good bet."];

$img_wearables1 = "<img src='images/blacknwhite.JPG'>";
$img_wearables2 = "<img src='images/green_suit.JPG'>";
$img_wearables3 = "<img src='images/white_suit.JPG'>";

$img_melle1 = "<img src='images/sword.jpg'>";
$img_melle2 = "<img src='images/nunchucks.jpg'>";
$img_melle3 = "<img src='images/bostaff.jpg'>";

$img_ranged1 = "<img src='images/bow.jpg'>";
$img_ranged2 = "<img src='images/blowgun.jpg'>";
$img_ranged3 = "<img src='images/stars.jpg'>";

$wearables_imgs = [$img_wearables1, $img_wearables2, $img_wearables3];
$melle_imgs = [$img_melle1, $img_melle2, $img_melle3];
$ranged_imgs = [$img_ranged1, $img_ranged2, $img_ranged3];

?>



<?php 
    $wearable_products = array(
        array(
            'image' => $wearables_imgs[0],
            'name' => $wearables[0],
            'unitprice' => $wearables_prices[0],
            'location' => 'online only',
            'description' => $wearables_desc[0]
            ),
            array(
                'image' => $wearables_imgs[1],
                'name' => $wearables[1],
                'unitprice' => $wearables_prices[1],
                'location' => 'online only',
                'description' => $wearables_desc[1]
                ),
                array(
                    'image' => $wearables_imgs[2],
                    'name' => $wearables[2],
                    'unitprice' => $wearables_prices[2],
                    'location' => 'online only',
                    'description' => $wearables_desc[2]
                    ),
    
    )
?>

<?php 
    $ranged_products = array(
        array(
            'image' => $ranged_imgs[0],
            'name' => $ranged[0],
            'unitprice' => $ranged_prices[0],
            'location' => 'online only',
            'description' => $ranged_desc[0]
            ),
            array(
                'image' => $ranged_imgs[1],
                'name' => $ranged[1],
                'unitprice' => $ranged_prices[1],
                'location' => 'online only',
                'description' => $ranged_desc[1]
                ),
                array(
                    'image' => $ranged_imgs[2],
                    'name' => $ranged[2],
                    'unitprice' => $ranged_prices[2],
                    'location' => 'online only',
                    'description' => $ranged_desc[2]
                    ),
    
    )
?>
<?php 
    $melle_products = array(
        array(
            'image' => $melle_imgs[0],
            'name' => $melle[0],
            'unitprice' => $melle_prices[0],
            'location' => 'online only',
            'description' => $melle_desc[0]
            ),
            array(
                'image' => $melle_imgs[1],
                'name' => $melle[1],
                'unitprice' => $melle_prices[1],
                'location' => 'online only',
                'description' => $melle_desc[1]
                ),
                array(
                    'image' => $melle_imgs[2],
                    'name' => $melle[2],
                    'unitprice' => $melle_prices[2],
                    'location' => 'online only',
                    'description' => $melle_desc[2]
                    ),
          
    
    )
?>
<?php 
// my tax function
            function calTax($price, $tax){
                $taxtotal = $price * $tax;
                return 'The total cost with tax is: $' . number_format($taxtotal, 1) ."0";
             }
        ?>
<?php
// a custom distance function
function getDistanceBetweenPointsNew($latitude1, $longitude1, $latitude2, $longitude2) {
    $theta = $longitude1 - $longitude2;
    $miles = (sin(deg2rad($latitude1)) * sin(deg2rad($latitude2))) + (cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * cos(deg2rad($theta)));
    $miles = acos($miles);
    $miles = rad2deg($miles);
    $miles = $miles * 60 * 1.1515;
    $feet = $miles * 5280;
    $yards = $feet / 3;
    $kilometers = $miles * 1.609344;
    $meters = $kilometers * 1000;
    return compact('miles','feet','yards','kilometers','meters'); 
}
?>