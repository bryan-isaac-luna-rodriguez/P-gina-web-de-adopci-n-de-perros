<?php

function dispError(){ 
    return mysql_error() . "(" . mysql_errno() . ")"; 
}

$conex = mysql_connect("localhost", "root", "Eq104)op7A#");

if (!$conex) { 
    dispError(); 
    exit(); 
}

$dbName = 'eq10adopta';

mysql_select_db($dbName, $conex);

?>