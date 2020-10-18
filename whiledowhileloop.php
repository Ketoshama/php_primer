<?php 
    $title = "While/Do While Loops";
    include 'includes/header.php' 
?>
    <h1 style="color: teal "><?php echo $title?></h1>

    <?php

        $grade = 0;
        //Infinate Loop
       // while($grade < 10){
       //     echo '<p>I AM LESS THAN 10!</p>';
       // }
//Pre-Condition Loop
       While($grade < 10){
           echo '<p>I AM LESS THAN 10!</p>';
           $grade++;
         }

         echo '<h2 style="color: red"> EXIT LOOP!!...</h2>';
     
    
    ?>

    <h1 style="color: Orange">Do - While Loop</h1>
    <?php
    //Post-Condition Loop

         $grade = 0;
        do{

            echo '<p> I AM DO WHILE</p>';
            $grade++;

        }while($grade < 10);

        echo '<h2 style="color: red"> EXIT LOOP!!...</h2>';
    
    ?>

<?php
    require 'includes/footer.php'
   ?>