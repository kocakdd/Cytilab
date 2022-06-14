<?php session_start();?>
<!-- Header.php -->

  <!-- CSS link -->

  <link rel="stylesheet" href="css/header.css">
  
  <link rel="stylesheet" href="https://use.typekit.net/hmw2slg.css">
  <link rel="stylesheet" href="https://fontsgeek.com/yu-gothic-font">
  
  <div id="loader" class="loader"></div>
  <script>
  document.onreadystatechange = function() 
  {
    if (document.readyState != "complete") 
    {
      document.querySelector("body").style.visibility = "hidden";
      document.querySelector("#loader").style.visibility = "visible";
    } 
    else 
    {
      document.querySelector("#loader").style.display = "none";
      document.querySelector("body").style.visibility = "visible";
    }
  };
  </script>
<nav id="navbar">
      <!-- Create three divs to represent the three-line dropdown menu bar -->
      <input type="checkbox" id="active">
      <label for="active" class="menu-btn"><span></span></label>
      <label for="active" class="close"></label>
  
      <!-- Add your navigations here -->
      <div class="wrapper">
        <ul>
          <li><a href="Home+Login.php">Home</a></li>
          <li><a href="Team.php">Team</a></li>
          <li><a href="Contact.php">Contact</a></li>

          <!-- Check if this still work when it will be online -->
          <li><a href="#">NL |</a>  <a href="<?php echo "PHP_EN/".rtrim( basename($_SERVER['PHP_SELF']), ".php")."_EN.php" ; ?>" class="english" > EN </a> 
          </li>
              
              
        </ul>
      </div>
  
      <!-- Logos for the navigation bar *-->
      <div class ="greenLine"></div>
      
      <div class="compagnyLogo">
        <a href="Home+Login.php"><img src="images/LogoHyp.svg" alt="Logo Compagny" style="width:280%;height:280%;"> </a>
      </div>

      
</nav>