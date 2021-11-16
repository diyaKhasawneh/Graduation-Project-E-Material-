<title>Student Registration</title>
<?php 
include "connection.php";
include "navbar.php";
?>

<html lang="en">
<head>
    
    <link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <style type="text/css">
        section{
            margin-top: -20px;
            width: 100%;
            
        }
        
     
         </style>
     </head>
     <body>
    <section>
        <div class="reg_img">
                
            <div class="box2">
                <h1 style="text-align: center; font-size: 35px;font-family:lucide Console ;">
                wise course e- material</h1>
                <h1 style="text-align: center;font-size: 25px;">User Registration Form</h1> 
                <form name="Registration" action="" method="post">
                    
                    <div class="login">
                        <input class="form-control" type="text" name="first" placeholder="First Name" id="" required="">   
                        <br>
                        <input class="form-control" type="text" name="last" placeholder="Last Name" id="" required="">   
                        <br>
                        <input class="form-control" type="text" name="username" placeholder="username" required="">
                        <br>
                        <input class="form-control" type="password" name="password" placeholder="password"required="">
                        <br>
                        <input class="form-control" type="email" name="email" placeholder="Email" required="">
                        <br>
                        <input class="btn btn-default" type="submit" name="submit" value="Sign Up"
                        style="color: black; width: 70px; height: 30px;">
                    </div>

                </form>
               

            </div>
        </div>

    </section>
    <?php
     if(isset($_POST['submit']))
    {
        $count=0;
        $sql="SELECT username from STUDENT";
        $res=mysqli_query($db,$sql);
        while($row=mysqli_fetch_assoc($res))
        {
            if($row['username']==$_POST['username']){
                $count=$count+1;
            }
        }
        if($count==0){
        mysqli_query($db,"INSERT INTO STUDENT VALUES('$_POST[first]','$_POST[last]'
        ,'$_POST[username]','$_POST[password]','$_POST[email]','$_POST[contact]','profile-placeholder-3.jpg');");
?>
         <script type="text/javascript">
         window.location="../login.php";
        </script>
        <?php
} 
  else 
  {
    ?>
    <script type="text/javascript">
       alert("The username alreday exist.");
    </script>
        <?php

  }
}
    ?>

    </body>
    </html>