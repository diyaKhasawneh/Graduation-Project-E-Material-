<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="box">
<?php
        echo "<img class='box-img' alt='profile' src='images/".$_SESSION['pic']."'>";?>
    <!-- <img src="images/prof.png" alt="profile" class="box-img"> -->
    <p>profile</p>
    <hr style="width:80%;text-align:right;margin-right:0">
    <b>Wellcome, </b>
   <h4>
   <?php echo $_SESSION['login_user'];?>
   </h4>
    <!-- <hr style="height:2px;border-width:0;color:gray;background-color:gray"> --> 
</div>
</body>
</html>