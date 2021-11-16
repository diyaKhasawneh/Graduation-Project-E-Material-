<?php
include "connection.php";
include "navbar.php";
?>
<?php
        $email_err=$password_err=$c_password_err=$match_err=$sql=$run=$msg=$error='';
            if(isset($_POST['submit'])){
                $email =$_POST['email'];
                $password=$_POST['password'];
                $c_password=$_POST['cpassword'];
                $query ="select * FROM admin WHERE email='$email'";
                $run=mysqli_query($db,$query);
                $row=mysqli_num_rows($run);   
                if($row==0){
                    $email_err="Email id does not exist";
                }
                elseif($password==''){
                    $password_err="PlEAS ENTER YOUR NEW PASSWORD";

                }
                elseif($c_password==''){
                    $c_password_err="PlEAS RE-ENTER YOUR NEW PASSWORD";

                }
                elseif($c_password !== $password){
                    $match_err="Password dont match";

                }
                else{
                    $sql="Update admin set password='$password' where email='$email'";
                    $run=mysqli_query($db,$sql);
                    if($run){
                        $msg="Password changed successfully";
                    }
                    else{
                        $error="Unable to change password";
                    }
                }


            }    
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <style type="text/css">
      *{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}
body{
    background-color: #e4e4e4;

}
.form-container{
    display: flex;
    height: 70%;
    width: 100%;
    justify-content: center;
    align-items: center;
}
.form-container .form-warp{
    background-color: #fff;
    width: 40%;
    padding: 15px 20px;
}
.form-container .form-warp h2{
    text-align: center;
    margin: 0px 0px 15px;
    font-size: 19px;
}
.form-container .form-warp .form-box{
    margin: 0px 0px 15px;

}
.form-container .form-warp .form-box input[type="text"]{
    padding: 5px 8px;
    border-radius: 3px;
    width: 100%;
 }
 .form-container .form-warp .form-submit{
     display: flex;
     justify-content: center;
     
 }

 .form-container .form-warp .form-submit input[type="submit"]{
     padding: 4px 10px;
     border: none;
     border-radius: 2px;
     background-color: #353535;
     color: #fff;
     font-weight: 800;
     cursor: pointer;
     font-size: 16px;
     width: 70;
     height: 30;
 }
 .form-container .form-warp .form-submit input[type="submit"]:hover{
     /* background-color: rbg(0,0,0,0.5); */
     font-size: 17px;
 }
 /* p{
     margin:0 0 0 0;
     padding:30px;
 } */

    </style>
</head>
<body>
<div class="form-container">
        <form action="" method="post" class="form-warp">
            <h2>Forgot Password</h2>
            <span class="flot-right text-danger font-weight-bold"><?php echo $email_err ?></span>
            <input type="text" name="email" class="form-control" placeholder="Email" required=""><br>
            <span class="flot-right text-danger font-weight-bold"><?php echo $password_err ?></span>
			<input type="password" name="password" class="form-control" placeholder="New Password" required=""><br>
            <span class="flot-right text-danger font-weight-bold"><?php echo $c_password_err;
             echo $match_err ?></span>
            <input type="password" name="cpassword" class="form-control" placeholder="re password" required=""><br>
            <p class="text-center font-weight-bold"><?php echo $msg; echo $error; ?></p>
            <div class="form-submit">
            <input type="submit" value="Send" name="submit">
            </div>
        </form>
        
    </div>
</body>
</html>