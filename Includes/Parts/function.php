<?php
// functions file for the portfolio project

// this file contains different functions

// function to connect to database server
// returns database object

function dBconnect()
{
	$host   = "localhost";
    $user   = "root";
    $pass   = "";
    $dB     = "portfolio";

    $connect = mysqli_connect($host,$user, $pass, $dB) or false;
	
	return $connect;
}

function email()
{
	
}
?>