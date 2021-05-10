<?php  
 $connect = mysqli_connect("localhost", "root", "", "tax");  
 session_start();  
 if(isset($_SESSION["username"]))  
 {  
      header("location:entry.php");  
 }  
 if(isset($_POST["register"]))  
 {  
      if(empty($_POST["username"]) && empty($_POST["password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $password = md5($password);  
           $query = "INSERT INTO users (username, password) VALUES('$username', '$password')";  
           if(mysqli_query($connect, $query))  
           {  
                echo '<script>alert("Registration Done")</script>';  
           }  
      }  
 }  
 if(isset($_POST["login"]))  
 {  
      if(empty($_POST["username"]) && empty($_POST["password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $password = md5($password);  
           $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";  
           $result = mysqli_query($connect, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                $_SESSION['username'] = $username;  
                header("location:entry.php");  
           }  
           else  
           {  
                echo '<script>alert("Wrong User Details")</script>';  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>login form</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body style="background-image: linear-gradient(rgba(0,0,0,0.35),rgba(0,0,0,0.35)),url(tax.JPG);">  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center"></h3>  
                <br />  
                <?php  
                if(isset($_GET["action"]) == "login")  
                {  
                ?>  
                 
                <form method="post" style="height: 450% ; width : 100%  ; opacity: 0.7; background-color: white;"> 
                <h3 align="center" style="color: black">Login</h3>  
                <br />  
                     <label style="color: black;font-weight: bold;" >Enter Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br />  
                     <label style="color: black;font-weight: bold;" >Enter Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="login" value="Login" class="btn btn-info" />  
                     <br />  
                     <p align="center" style="font-weight: bold"><a href="in.php">Register</a></p>  
                </form>  
                <?php       
                }  
                else  
                {  
                ?>  
                 
                <form method="post"  style="height: 450% ; width : 100%  ; opacity: 0.7; background-color: white;"> 
                <h3 align="center" style="color: black;font-weight: bold;" >Register</h3>  
                <br />  
                     <label style="color: black;font-weight: bold;" >Enter Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br />  
                     <label style="color: black;font-weight: bold;" >Enter Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="register" value="Register" class="btn btn-info" />  
                     <br />  
                     <p align="center" style="font-weight: bold;"><a href="in.php?action=login">Login</a></p>  
                </form>  
                <?php  
                }  
                ?>  
           </div>  
      </body>  
 </html>  
