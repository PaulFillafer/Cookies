<?php
$cookie_name = "user";
$cookie_value = "Paul";
setcookie($cookie_name, $cookie_value, time() + (86400), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
</body>
</html>