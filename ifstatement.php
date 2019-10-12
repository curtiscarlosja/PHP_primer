<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>php_primer-ifstatements </title>
  <?php include 'includes/header.php'?>
 </head>
 <body>
      <h3 style = "color:red"></h3>
      <h1> If statement </h1>
    <?php
    
    //an if statement to carries out a function

      
     
        $grade = 65;

            if($grade >= 50){

                echo"<h3 style = 'color:green' > congratulations you have passed </h3>";
            }
             else {
                echo"<h3 style = 'color:red'>  you have failed </h3>";
             }
             $grade ='d';
             // If then else
             if($grade == 'A'){
                echo "<h2 style = 'color:green'> you are a superstar</h2>";
             }
             elseif($grade == 'B'){
                echo "<h2 style = 'color:blue'> you did well</h2>";
             }
             else{
                echo "<h2 style = 'color:red'> YOU HAVE FAILED, TRY AGAIN </h2>";
             }
        require 'includes/footer.php' 
    
    ?>
     
 </body>
 </html>
