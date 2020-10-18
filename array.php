<?php
    $title = "Arrays and Printouts";
    include 'includes/header.php' 
 ?>
    <h1><?php echo $title?></h1>

    <?php
        //A Variable
        $num = 3;


        // An Array
        // Only One Datatype
        $numbers = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);

        echo $numbers[5];
    
        echo "<p>$numbers[9]</p>";

        $size = count($numbers);
        echo "<p> The Size Of The Array Is: $size</p> ";

        for($count = 0; $count < $size; $count++){
            echo "<p>$numbers[$count]</p>";
        }
    
    ?>
<?php
    require 'includes/footer.php'
   ?>