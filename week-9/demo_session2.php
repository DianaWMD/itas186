<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "<h1>Favorite color is " . $_SESSION["favcolor"] . "</h1>";
echo "<h1>Favorite animal is " . $_SESSION["favanimal"] . "</h1>";

print_r($_SESSION);

echo "<br>";

echo "Session file is in " . session_save_path();

// to change a session variable, just overwrite it
$_SESSION["favcolor"] = "yellow";

// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>

</body>
</html>