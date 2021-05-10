<?php  
 //entry.php  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("location:in.php?action=login");  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title></title>  
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
                echo '<h1 style="color : black; font-size : bold; background-color:white;">Welcome - '.$_SESSION["username"].'</h1>';  
                echo '<label style="background-color: green; "><a href="lg.php">Logout</a></label><br><br>';
                echo '<label style="background-color: green;><a href="tax.php">Tax calculator</a></label>';  
                ?>  
           </div>  
      </body>  
 </html>  