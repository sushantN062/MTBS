 <?php
// Defining constant
define("SITE_URL","kalilinux");
// Using constant
echo 'My operating system is ' . SITE_URL;
?>



 <?php
 echo $_SERVER['PHP_SELF'];// Returns the filename of the currently
 executing script
echo $_SERVER['SERVER_NAME'];//Returns the name of the host server
echo $_SERVER['HTTP_HOST'];//Returns the Host header from the current
request
echo $_SERVER['HTTP_USER_AGENT'];//It is an optional parameter which
specifies the name of an HTTP user agent.
echo $_SERVER['SCRIPT_NAME'];//Returns the path of the current script
?>