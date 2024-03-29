<?php

$GLOBALS_Variable;
/*
$_SERVER;
$_REQUEST;
$_POST;
$_GET;
$_FILES;
$_ENV;
$_SESSION;
$_COOKIE
*/
$person_name = "Mukarram";

function getname(){
    //global $person_name;
    echo $GLOBALS['person_name'];
}

getname();

?>