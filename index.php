<?php
ob_start();
?>

<!DOCTYPE html> 
<html>
<head> 
<title>Hypotheekvitaal</title> 
<link rel="icon" href="images/LogoHyp.svg">
</head> 
<body>

<?php 
if (stristr($_SERVER['HTTP_USER_AGENT'], "iPhone")  
|| strpos($_SERVER['HTTP_USER_AGENT'], "iPod") 
|| strpos($_SERVER['HTTP_USER_AGENT'], "Android") ) 
{ 

	header('Location:Home');
	ob_end_flush();
}
else {?>	
<div class = "wait">
	<img src="images/LogoHyp.svg" alt="Logo Compagny">
	<h1> Hypotheekvitaal </h1>
	<p> We will arrive soon ! </p>
	<p> In the meantime you can connect on your phone </p>
</div>
<style>
	.wait{
		position: relative;
		width : 100%;
		text-align : center;
		top : 70px;
	}
	.wait img{ width : 10%;}
	h1{ color: #009353;}
</style>
<?php } ?>

</body></html>