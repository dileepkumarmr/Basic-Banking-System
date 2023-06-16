<?php


$connection = mysqli_connect('localhost','root','mani@ramu123', 'bank_db');

if (!$connection) {
    die("Could not connect to the Bank server  ".mysqli_connect_error());
}


?>