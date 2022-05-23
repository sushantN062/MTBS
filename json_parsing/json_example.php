<?php
$json ='{"Peter":65, "Harry":80,"John:78, "Clark":90}';
$arr = json_decode($json, associative:true);
foreach($arr as $key=>$value)
   echo $key . "=>" . $value . "<br>";
}
echo "<hr>"
$obj = json_decode($json);


?>