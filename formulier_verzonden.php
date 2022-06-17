<?php 

if (stristr($_SERVER['HTTP_USER_AGENT'], "iPhone")  
|| strpos($_SERVER['HTTP_USER_AGENT'], "iPod") 
|| strpos($_SERVER['HTTP_USER_AGENT'], "Android") ) 
{ ?>

<!DOCTYPE html>
<html lang="NL">

<head>	
	<title> Hypotheekvitaal - Hypotheek </title>	
	<META	NAME="author"	CONTENT="NAPIERALA Lisa">	
	<META	NAME="description"	CONTENT="Hypotheek">	
	<META	NAME="geography"	CONTENT="Rotterdam,	South-Holland,	Nertheland">	
	<META	NAME="keywords"	CONTENT="Rotterdam, Hypotheek">	
	<META	NAME="subject"	CONTENT="Hypotheek">	

  <!-- CSS link -->
	<link rel="stylesheet" href="css/hypotheek_verzonden.css">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	
  <link rel="icon" href="images/LogoHyp.svg">
</head>	

<body>

    <!-- Header -->
  <?php require('Action/header.php'); ?>

  <!-- PHP - Link with the DataBase-->
  <?php require('Action/db_contact.php'); ?>


  <!-- Body -->
  <!-- htmlspecialchars allow to have the character < and no execution of html code -->
  <div class ="block_text">
  <p class="title1"> <?= htmlspecialchars($_POST['fname']) ?> uw formulier is verzonden</p>
  <p class="title2"> Wij nemen zo snel mogelijk contact met u op ! </p>
  <!-- Button -->
  <a href="Home.php"><button class="button"  role="button" >Terug naar Home</button></a>
  
  </div>

  <div id="container">
   <div id="main"></div>

   <!--Footer-->
  <?php include('Action/footer.php'); ?>
</div>
</body>
</html>

<?php	
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