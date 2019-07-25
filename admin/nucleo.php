<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "mercadot_langston");
//$mysqli = new mysqli("localhost", "mercadot_luis", "Z~}jJIUx{eCj", "mercadot_langston");
$path = "/Langston-3/admin/";

if(isset($_SESSION['ticket']))
{
	$login = true;
} else {
	$login = false;
}
?>