<?php include 'includes/header.php'?>
    <!-- Basic HTML -->
    <h1>Hello HTML - PHP Primer</h1>
    <br/>
    <?php  
        //Printing to HTML using echo
        echo 'Hello PHP!';
        // echo HTML tags
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';
    
        // Variables need a '$'. They are not strongly typed
        $name = 'Carlos Curtis';
        $age = 37;
        // echo variable
        echo $name;
        echo '<h1>My Name Is: '.$name.' </h1>';
        echo '<h1>I am : '.$age.' year old </h1>';
        // Echo using double quotes and interpolation
        echo "<h1>My Name is: $name </h1>";
    ?>
    <button type="button" class="btn btn-dark">CLICK ME!</button>

    <?php
        require 'includes/footer.php' 
    ?> 
</body>
</html>
