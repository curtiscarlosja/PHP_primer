<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php_primer-forloop</title>
</head>
<body>
<?php 
     $title = "For Loops";
    include 'includes/header.php' ?>
    <h1>For Loops</h1>

    <?php 
        // For Loops
        for($i = 0; $i< 10; $i++){
            echo '<p> solrac is a rock star </p>';
        }
        
        for($i = 0; $i < 10; $i++){
            echo "<p>The Count is: $i</p>";
        }
    ?>
 <?php require 'includes/footer.php' ?>   
</body>
</html>