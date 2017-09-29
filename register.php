

<html>
    <head>
        <meta charset="UTF-8">
        <link rel='stylesheet' type='text/css' href='style.css' />;
        <title></title>
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
            <h1> Register new user</h1>
            <form method="POST" action="register.php" class="form">
            <label>User name </label> <!--user input for username -->
            <input type="text" name="username"><br>
            <label>Password </label><!--user input filed for password filed    -->
            <input type="text" name="password"><br>
            <input type="submit" name="register"><!--submit  button     -->
            <input type="reset" id="reset" value="reset"> <!--reset  button     -->
        </form> 
         <?php
// register new password and user name in file 
if(isset($_POST['register']) && isset($_POST['username']) && isset($_POST['password'])){ 
    // check if submit button is clicked, username &password filed are  filled/inserted
  
        $user = $_POST['username'];   // save password in $user variable 
        $password = $_POST['password'].PHP_EOL; // save password in $password varibale 
        $fp= fopen("userPass.txt", "a+");  // using built in library function, open file name userPass 
        fwrite($fp, $user.":".$password); //using built in library function, write pass word and user name separated by space 
        fclose($fp); // using built in library function,close the writing when it is finished 
}
?>
        </div>
        </div>
    </body>
</html>



