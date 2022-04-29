<?php
$username= 'root';
$password= '';
$db= 'tesat';

$con = new mysqli('localhost', $username,$password, $db) or die("Unable to connect");
 echo "Connected Successfully";