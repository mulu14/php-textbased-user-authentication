
<?php
//session start
session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel='stylesheet' type='text/css' href='style.css'/>;
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
           <h1> Authentication</h1>
         <form  method="post" action="index.php" class="form"> <!--form that user insert user and password    -->
            <label>User name </label> <!--user input for username -->
            <input type="text" name="username"><br>
            <label>Password </label><!--user input filed for password filed    -->
            <input type="password" name="password"><br>
            <input type="submit" name="submit"><!--submit  button     -->
        </form>
  <?php       
if(isset($_POST['submit'])){  // check the if the submitt button is click 
    $user_input = $_POST['username']; // user name from user
    $password_input = $_POST['password'];  // user password
    if($user_input == '' &&  $password_input != '' ){
        echo 'No given username';  
    }
    elseif($password_input == '' && $user_input != '' ){
         echo 'No password is given';  
    }
    else{
        
    $file = fopen('userPass.txt', 'r');  // open the file and read
    while(!feof($file)){  // while it is not end of the file
    $line = fgets($file); // get line by line 
    list($user, $password) = explode(':', $line); //  explode each line and save in a variable 
    if(trim($user) == $user_input && trim($password) == $password_input){
        $_SESSION['username'] = $_POST['username'];  // session set to username variable
        header('location:mainpage.php');  // redirect to mainapage 
        
    }
    else if(trim($user) != $user_input && trim($password) != $password_input){ 
        // if user name and pass word is not match print wrong password or user name 
        echo 'Wrong password or username';
       
    }
    else{
        echo 'There is problem in login';
    }
 
} } }

 


 ?>
           

        </div>
        </div>
    </body>
</html>


