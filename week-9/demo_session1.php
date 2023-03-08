<?php
session_start();

?>


<html>
   
   <head>
      <title>Setting up a PHP session</title>
   </head>
   
   <body>
   <?php
        // Set session variables
        $_SESSION["favcolor"] = "red";
        $_SESSION["favanimal"] = "cat";
        echo "Session variables are set.";
        ?>
   </body>
   
</html>