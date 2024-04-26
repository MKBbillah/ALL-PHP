<?php

$birthdate = new DateTime("04/01/1990");

$todate=new DateTime();

echo $todate->formate("d/m/y");

echo "</br> ############";

$age = $todate->diff($birthdate); 
 echo $age->format("my age is %Y years, %m Months, %d days old"); //"d/m/y", $age);
?>