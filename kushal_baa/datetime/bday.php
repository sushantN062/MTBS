<?php
$birthday = mktime(0,0,0,01,20,2023);// modify the birth day 12/31/2013
$today = time();
$real_day = ($birthday - $today);
$days = (int)($real_day/86400);
print "Your birthday is after : $days days!"."\n";
?><?php
