<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>

    <?php
    //Set session variables
    $_SESSION["username"] = "sushant";
    $_SESSION["roll.number"] = "23024";
    echo "Session variables are set.";
    ?>
</body>
</html>