<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $password1 = $_POST['password'];
    $password2 = $_POST ['confirm_password'];

    if ($password1 == $password2) {
        echo "Password match";
    }
    else{
        echo "What the hell bro";
    }
}
?>

<head>
    <title>Document</title>
</head>
<body>
<form>
    <input type = "password" name = "password" placeholder = "Password">
    <input type = "password" name = "confirm_password" placeholder="confirm_password">
    <input type = "submit" value = "Check Password">
</form>
</body>
</html>


