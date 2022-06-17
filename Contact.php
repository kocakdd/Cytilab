<?php 

if (stristr($_SERVER['HTTP_USER_AGENT'], "iPhone")  
|| strpos($_SERVER['HTTP_USER_AGENT'], "iPod") 
|| strpos($_SERVER['HTTP_USER_AGENT'], "Android") ) 
{ ?>


<!DOCTYPE html>
<html lang="NL">

<head>	
	<title> Hypotheekvitaal - Contact </title>	
	<META	NAME="author"	CONTENT="NAPIERALA Lisa">	
	<META	NAME="description"	CONTENT="Contact">	
	<META	NAME="geography"	CONTENT="Rotterdam,	South-Holland,	Nertheland">	
	<META	NAME="keywords"	CONTENT="Rotterdam, Contact">	
	<META	NAME="subject"	CONTENT="Contactformulier">	


  <!-- CSS link -->
	<link rel="stylesheet" href="css/Contact.css">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	

  <link rel="icon" href="images/LogoHyp.svg">
</head>	

<body>
    
  <!-- Header -->

  <?php include_once('Action/header.php'); ?>

  <!-- Content --> 

  <img class="contact-image" src="images/contact.png" alt="Font Image">
  
  <div class="first-text-block">
    <h1 class="title"> Contact </h1>
    <h2 class="title1"> Neem contact op</h2>
    <p class="text1"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum</p>
  </div>

  <!--Contact Formulier -->

  <div class="formulier">
    <h2 > ContactFormulier </h2>

    <form action="formulier_verzonden.php" method="post">

    <label for="fname"> Voor- & Achternaam </label>
      <input type="text" name="fname" placeholder="Voornaam placeholder" pattern="[a-zA-Z- ]{1,60}" autofocus required>

      <label for="email"> E-mailadres </label>
      <input type="email" name="email" placeholder="E-mail placeholder" pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}" required>

      <label for="tel"> Telefoonnummer </label>
      <input type="tel" name="tel" placeholder="Telefoonnummer placeholder" pattern="^(?:0|\(?\+31\)?\s?)[1-9](?:[\.\-\s]?\d\d){4}$" required>

      <label for="text"> Redeen voor contact </label>
      <textarea rows="3" name="text" placeholder="Textarea placeholder" required></textarea>

      <label for="time"> Selecteer een dag en tijdvak</label> 
      <input type="date" id="datefield" name="date"  placeholder="Date" min="<?= date('Y-m-d'); ?>" required>

      <select id="time" name="time" class="time"  required>
        <optgroup class="opt" >
      <option value=""  disabled selected><h1>Selecteer</h1></option>
      <option value="9-12">9:00-12:00</option>
      <option value="12-15">12:00-15:00</option>
      <option value="15-18">15:00-18:00</option>
      <option value="18-20">18:00-20:00</option>
        </optgroup>
    </select>

      <input type="submit" value="Verstuur Formulier"> <!-- Lien vers Formulier_verdonzen-->
    </form>
  </div>
  
  <div class="form-end">
    <img class="form-image" src="images/group.png" alt="Font Image">
  </div>
  
  <!--Footer-->    
  
  <?php include('Action/footer.php'); ?>

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