<?php 
error_reporting(0);
session_start();
include 'config.php';
if($_SESSION['user'] != ''){
header('location: vic.php');
}


?>





<html>
<head>
<style>
body{
font-fampily:comic sans ms;}
*{outline:none; outline:0;}
.evpass{border:1px solid orange; padding:3px; color:orange;}
.evil{padding:3px; cursor:pointer; background:orange; color:white; border:1px solid orange;}
</style>
</head>
<body>
<center>
 
 <h2>Copy of MegaMass Evil to <b><?php echo $name; ?> </b>.</h2>
<form action="" method="post">

<input type="password" required name="user_pass" class="evpass" placeholder="Password">
<input type="submit" name="evil" class="evil" value=" login ">
</form> 
<?php 

if(isset($_POST['evil'])){
	$evil = $_POST['user_pass'];
	if($evil == $pass OR $evil == $name){
		$_SESSION['user'] = $evil;
		header("location: vic.php?log=in");
	}
	else{
	echo "<font color='red'> Wrong password</font>";
	}
}

?>
