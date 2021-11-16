<?php
include"connection.php";
include"navbar.php";


?>
<html>
<head>
<title>Profile</title>
<link rel="stylesheet" href="style2.css">
<style type="text/css">
*{
    margin:0;
    padding:0;
    background-size:cover;
}
body{
    color:#000;
}
.wrapper{
    width: 400px;
    height: 280px;
    margin:0 auto;
    background-color: #8778c3;
    position: relative;
    
}

.wrapper b{
    color:white;

}

.clear{
    clear: both;
}
    /* .container{
        margin:0;
        padding:0;
        width: 100%;
    } */

    table tr ,td{
        border: 2px solid  #3812d8;
    }
	.box{
     opacity:1;
	background: #8778c3;
    }
</style>
</head>
<body style="background-color:#fff" ><!-- #535a8a -->

<div class="container">
    <form action="" method="post">
        <button class="btn btn-defualt" style="float:right; width:70;" name="submit1" type="submit">
        Edit
        </button>
    </form>
    <div class="wrapper">
    <?php
    if(isset($_POST['submit1'])){
        ?>
        <script type="text/javascript">
            window.location="edit.php"
        </script>
    <?php
    }
      $q=mysqli_query($db,"SELECT *FROM admin WHERE username='$_SESSION[login_user]'");     
    ?>
    <?php
      $row=mysqli_fetch_assoc($q);
    ?>
    <?php
 				echo "<b>";
                 echo "<h1>Personal info</h1>";
 				echo "<table class='table '>";
	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> First Name: </b>";
	 					echo "</td>";

	 					echo "<td>";
	 						echo $row['first'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Last Name: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['last'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> User Name: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['username'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Password: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['password'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Email: </b>";	
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['email'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Contact: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['contact'];
	 					echo "</td>";
	 				echo "</tr>";

	 				
 				echo "</table>";
 				echo "</b>";
    
    ?><?php include"proimg.php";?>
   
    
       
    <div class="clear"></div>
    </div>
</div>

    
</body>
</html>