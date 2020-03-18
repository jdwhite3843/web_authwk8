<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

    <!-- PHP include to inject head of document-->
    <?php include("./includes/head.php")?>

<body>
<?php include("./includes/product_data.php") ?>
    <div class="wrapper">
    <img src="./images/logos/logo.png" alt="logo">
        <!-- Navigation with element injected via PHP-->
        <?php include("./includes/nav.php")?>

        <!-- Top Container-->
        <section class="top-container">
            <header class="showcase1">
                <h1>We got the Gear!</h1>
            </header>
        
        </section>

        <!-- Boxes section-->
        <section class="boxes">
        <?php
        foreach ($ranged_products as $items){
            echo '<div class="box"><h2>' . $items['name'] . '</br>' . $items['description'] . '</br>'
            . $items['image'] . '</br>' . $items['unitprice'] . '.00' . '</br>' . calTax($items['unitprice'], 1.07)
            . '</br>Available: ' . $items['location']
            . '</h2></div>' 
            ;}
        ?> 
        </section>

        <!-- info section-->
        <section>
            <div>
                <h1>Appreciation of the Martial Arts</h1>
                <h3>Centering body and spirit together to bring perfection in all aspects of life.</h3>
            </div>
        </section>

    
        
        <!-- footer -->
        <?php include("./includes/footer.php")?>

    </div>

        <!-- wrapper ends-->
</body>
</html>