<?php session_start();?>
<!-- Header.php -->

  <!-- CSS link -->

  <link rel="stylesheet" href="../css/header.css">



<nav id="navbar">
      <!-- Create three divs to represent the three-line dropdown menu bar -->
      <input type="checkbox" id="active">
      <label for="active" class="menu-btn"><span></span></label>
      <label for="active" class="close"></label>
  
      <!-- Add your navigations here -->
      <div class="wrapper">
        <ul>
          <li><a href="Home+Login_EN.php">Home</a></li>
          <li><a href="Team_EN.php">Team</a></li>
          <li><a href="Contact_EN.php">Contact</a></li>
      
        
          <!-- Check if this still work when it will be online -->
          <li> <a href="" class="english" > EN </a> <a href="<?php echo "../".rtrim( basename($_SERVER['PHP_SELF']), "_EN.php").".php" ; ?>"> NL |</a></li>
              
              
        </ul>
      </div>
  
      <!-- Logos for the navigation bar *-->
      <div class ="greenLine"></div>
      
      <div class="compagnyLogo">
        <a href="Home+Login_EN.php"><img src="../images/LogoHyp.svg" alt="Logo Compagny" style="width:280%;height:280%;"> </a>
      </div>

      

</nav>