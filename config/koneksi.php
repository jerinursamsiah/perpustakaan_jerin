<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "perpustakaan_jerin";

$db = mysqli_connect($host,$username,$password,$database);

if(!$db){
	die("database tidak terhubung");
}