<?php
    $title = "Index";
    include 'includes/header.php' 
?>

<!-- Basic HTML -->
    <h1>Hello HTML - PHP Primer</h1>
    <br/>

    <?php 
    //Printing to HTML using echo
        echo 'Hello PHP!';
    //You can echo HTML tags
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';
    ?>

    <?php 
        //Variable need a '$' . They are not strongly typed
        $name = 'Dwayne Richards';
        $age = 30;
        // echo variable 
        echo $name;
        echo '<h1>My Name Is: '. $name.' </h1>';
        echo '<h1>My Age Is: '. $age.' </h1>';
        // echo using double quotes and interpolation 
        echo "<h1>My Name is: $name </h1>";
    ?>
    <button type="button" class="btn btn-dark">CLICK ME!</button>
    <button type="button" class="btn btn-primary">CLICK ME!</button>
    <button type="button" class="btn btn-success">CLICK ME!</button>
    <a href= "https://www.heroku.com" target= "blank" class="btn btn-danger">Heroku.com</a>
   <?php
    require 'includes/footer.php'
   ?>