<?php 
    $title = "String Manipulation";
    include 'includes/header.php' 
?>
    <h1> <?php echo $title?></h1>
    <?php
    //Concatenation of strings
        $phrase1 = "Student who came late for class";
        $phrase2 = " will stand with Rock";
        $name = "dwayne richards";
        echo $phrase1 . " " . $phrase2 . " " ."Student Name is: Dwayne";
        echo '<br/>';
        echo '<hr/>';

    //String Transformation
         echo 'Uppercase first letter: ' . ucfirst($name). '<br/>';
         echo 'Uppercase first letter of each word: ' . ucwords($name). '<br/>';
         echo 'Upper case : ' . strtoupper($name). '<br/>';
         echo 'Lower case : ' . strtolower("THIS WAS ALL UPPER CASE"). '<br/>';
         echo '<hr/>';

        echo 'Repeat String: ' . str_repeat('a', 5).'</br>';
        echo 'Repeat String - Nested Function: ' . strtoupper(str_repeat('a', 5)).'</br>';
        echo '<hr/>';

        echo 'Get a Substring: ' . substr($name, 7, 4). '<br/>';

        echo 'Get position of string: ' . strpos($name, 'r'). '<br/>';
        //Return NULL
        // echo 'Get position of string: ' . strpos($combine, 'z'). '<br/>';
        echo 'Find Character "R": ' . strchr($name, 'R'). '<br/>';
        echo 'Find Character "r": ' . strchr($name, 'r'). '<br/>';
        echo 'Find Character "s": ' . strchr($name, 's'). '<br/>';
        echo 'Find Character "e": ' . strchr($name, 'e'). '<br/>';
        echo '<hr/>';

        echo 'Find Length of String: ' . strlen($name) . '<br/>';
        
        echo 'Without Trim: '. "A" . " B C D " . "E" . '<br/>';
        echo 'Trim spaces on both sides: '. "A" . trim(" B C D ") . "E" . '<br/>';
        echo 'Trim spaces on both left: '. "A" . ltrim(" B C D ") . "E" . '<br/>';
        echo 'Trim spaces on both right: '. "A" . rtrim(" B C D ") . "E" . '<br/>';
        echo '<hr/>';

        echo 'Replace string with another: ' . str_replace("stand", "sit", $phrase2) . '<br/>';


    ?>
<?php
    require 'includes/footer.php'
   ?>