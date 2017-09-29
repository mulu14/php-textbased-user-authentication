<?php
session_start();
// start session
?>

<html>
    <head>
        <meta charset="UTF-8">
       <link rel='stylesheet' type='text/css' href='style.css' />; 
    </head>
    <body>
        <div class="container">
    <div class="header">
        <nav>
      <ul>
           <li><a href="index.php">Index</a> </li> <!--add link of index page      -->
            <li><a href="mainpage.php">Main page</a> </li> <!--add link of main page      -->
            <li><a href="logout.php">Log out</a></li> <!--add link of logout page      -->
            <li><a href="register.php">Register</a></li>
      </ul> 
        </nav>
    </div>
            <div class="body">
    <?php
if(!isset($_SESSION['username'])){    // check session set 
    header('location:index.php');  // if is not set direct page to index page 
}
echo "<h1>"."Welcome". "  " . $_SESSION['username']."</h1>";
?>
                
            </div>
            </div>
    </body>
</html>


