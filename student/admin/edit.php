<?php
include "connection.php";
include "navbar.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>edit profile</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <style>
    *{
    margin:0;
    padding:0;
    background-size:cover;
}
    .form-control{
        width:250px;
        height: 38px;
        
    }
    form{
        padding-left:550px ;
    }
    .box{
        margin-top:-560px;
        opacity:1;
    }
    </style>
</head>
<body style="background-color:#fff" ><!-- #535a8a -->
    <h2 style="text-align: center;color: #fff;">Edit Information</h2>
    <?php
		
		$sql = "SELECT * FROM admin WHERE username='$_SESSION[login_user]'";
		$result = mysqli_query($db,$sql) or die (mysql_error());

		while ($row = mysqli_fetch_assoc($result)) 
		{
			$first=$row['first'];
			$last=$row['last'];
			$username=$row['username'];
			$password=$row['password'];
			$email=$row['email'];
			$contact=$row['contact'];
		}

	?>
    
    <div class="form1">
    <form action="" method="post" enctype="multipart/form-data">
    <input class="form-control" type="file" name="file">
    
        <label for=""><h4><b>First Name</b></h4></label>
        <input class="form-control" type="text" name="first" value="<?php echo $first;?>">
        
        <label for=""><h4><b>Last Name: </b></h4></label>
        <input class="form-control" type="text" name="last" value="<?php echo $last;?>">
        <label for=""><h4><b>Username: </b></h4></label>
        <input class="form-control" type="text" name="username" value="<?php echo $username;?>">
        <label for=""><h4><b>Password: </b></h4></label>
        <input class="form-control" type="text" name="password" value="<?php echo $password; ?>">
        <label for=""><h4><b>Email: </b></h4></label>
        <input class="form-control" type="text" name="email" value="<?php echo $email;?>">
        <label for=""><h4><b>Contact No: </b></h4></label>
        <input class="form-control" type="text" name="contact" value="<?php echo $contact;?>"><br>
        <button class="btn btn-default" type="submit" name="submit">save</button>
        <?php include"proimg.php";?>
    </form>
</div>
    <?php
    if(isset($_POST['submit']))
    {
         move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']['name']);
        $first=$_POST['first'];
        $last=$_POST['last'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];   
        $pic=$_FILES['file']['name'];
        $sql1= "UPDATE admin SET pic='$pic', first='$first', last='$last', username='$username',
        password='$password', email='$email', contact='$contact' WHERE username='".$_SESSION['login_user']."';";
        
        if(mysqli_query($db,$sql1))
        {
            ?>
            <script type="text/javascript">
            alert("saved Successfully. ");
            window.location="profile.php";
            </script>
            <?php
        }
    }
    
    ?>
</body>
</html>