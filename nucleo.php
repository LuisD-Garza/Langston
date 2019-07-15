<?php
session_start();
$mysqli = new mysqli("localhost", "mercadot_luis", "Z~}jJIUx{eCj", "mercadot_langston");
$path = "http://mercadotecniamix.mx/Langston-3/admin/";

$ipgeneral = "127.0.0.1";

if(isset($_SESSION['ticket']))
{
	$login = true;
} else {
	$login = false;
}
?>