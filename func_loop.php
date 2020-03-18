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
        
            </header>
            <div class="top-box top-box-a">
                <article>
                <!-- a standard while loop-->
                    <h3>while loops execute until a sentinel condition is reached. Infinite loops occur without a sentinel. </h3>
                    <?php 
                        $num = 1;
                        while($num <= 5){   
                            echo "<p>The loop number is: $num</p>";
                            $num += 1;
                        } 
                    ?>           
                </article>
            </div>
                            <!-- a standard do while loop-->
            <div class="top-box top-box-b">
                <article>
                    <h3>"Do while" Loops execute until a sentinel condition is reached. Essentially its the same. </h3>
                    <?php 
                        $num = 5;
                        do{   
                            echo "<p>The loop number is: $num</p>";
                            $num -= 1;
                        }while($num > 0) 
                    ?>           
                </article>
            </div>
        </section>

        <!-- Boxes section-->
        <section class="boxes">
            <div class="box">
            <article>
            <!-- a standard for loop-->
                    <h3>The for loop has its sentinel declared as a parameter, and behaves the same. </h3>
                    <?php 
                        for($i = 1; $i <= 5; $i++){
                            echo "<p> The value of the sentinel is: $i</p>";
                        }
                    ?>           
                </article>
            </div>
            <div class="box">
            <article>
                        <!-- iterating through an array-->
                    <h3>"for each" is typically used to iterate through an array </h3>
                    <?php 
                        $employees = array("Name" => "Bigboss", "Position" => "owner", "Age" => "immortal", "Status" => "Ominpresent", "Shift" => "Infinite");
                        foreach($employees as $key => $value){
                            echo "<p>$key : $value</p>";
                        }
                    ?>           
                </article>
            </div>
            <div class="box">
            <article>
                     <!--a custom distance function -->
                     <?php 
                         echo "<p>The distance between two longitude and latitude points..</p>";
                        $point1 = array('lat' => 40.770623, 'long' => -73.964367);
                        $point2 = array('lat' => 40.758224, 'long' => -73.917404);
                        $distance = getDistanceBetweenPointsNew($point1['lat'], $point1['long'], $point2['lat'], $point2['long']);
                        foreach ($distance as $unit => $value) {
                            echo $unit.': '.number_format($value,4).'<br />';
                        }
                     ?>  
                </article>
            </div>
        </section>
        <div class="box">
            <article>
            <!-- a built in php function-->
                    <h3>"An example of a PHP built in function call" </h3>
                    <?php 
                        $days = cal_days_in_month(CAL_GREGORIAN,7,1776);
                        ECHO "<p>In July of 1776, there were $days days in that month.</p>";
                    ?>           
                </article>
            </div>
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