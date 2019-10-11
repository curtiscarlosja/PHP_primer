<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php_primer-Stringmanip</title>
</head>
<body>
<?php 
     $title = "PHP String Manipulations";
    include 'includes/header.php' ?>

    <h1>PHP String Manipulation</h1>
    <?php 
    //Concatenation of strings
        $phrase1 = "is a ace php programer";
        $IDnum = '1500175993';
        $name = "Carlos Curtis";
        echo $phrase1 . ", named Tiffany, ". $IDnum;
        echo '<br/>';
        echo '<hr/>';
        //String tansformation
        echo 'Uppercase first letter: ' . ucfirst($name).'<br/>';
        echo 'Uppercase first letter of each word: ' . ucwords($name).'<br/>';
        echo 'Upper case: '. strtoupper($name).'<br/>';
        echo 'Lower case: '. strtolower("THIS WAS ALL UPPER CASE").'<br/>';
        echo '<hr/>';
        echo 'Repeat String: ' . str_repeat('a',10) . '<br/>';
        echo 'Repeat String - Nested Function: ' . strtoupper(str_repeat('a',10)) . '<br/>';
        echo 'Get a Substring: ' . substr($name, 3, 5).'<br/>';
        echo 'Get position of string: ' . strpos($name,'l').'<br/>';
        // Returns NULL 
        // echo 'Get position of string: ' . strpos($combine,'z').'<br/>';
        echo 'Find Character "l": ' . strchr($name, 'l').'<br/>';
        echo 'Find Character "r": ' . strchr($name, 'r').'<br/>';
        echo 'Find Character "s": ' . strchr($name, 's').'<br/>';
        echo 'Find Character "a": ' . strchr($name, 'a').'<br/>';
        echo 'Find Length of String: ' . strlen($name) .'<br/>';
        
        echo 'Without Trim: '. "A" . " B C D " . "s" . '<br/>';
        echo 'Trim spaces on both sides: '. "A" . trim(" B C D ") . "E" . '<br/>';
        echo 'Trim spaces to the left: '. "A" . ltrim(" B C D ") . "E" . '<br/>';
        echo 'Trim spaces to the right: '. "A" . rtrim(" B C D ") . "E" . '<br/>';
        echo ' Replace string with another: '. str_replace("ace", "intermediate", $phrase1 ) . '<br/>';
    ?>
 <?php require 'includes/footer.php' ?>   
</body>
</html>