
<?php
session_start();
?>
<!doctype html>
<html
<body>
<?php
//Echo session variables that wereset on previous page
echo"My name  is".$_SESSION["username"].".<br>";
echo"My roll is".$_SESSION["roll.number"].".";
?>
</body>
</html>