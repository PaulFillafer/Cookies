<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
echo 'Session Seite <br>';
//echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
//echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br>";

print_r($_SESSION);
echo "Session variables are set.";
?>
<br>
<br>
<a href="login.php">login</a>
<br>
<a href="logout.php">logout</a>
<br>
<a href="aenderung.php">aenderung</a>

</body>
</html>