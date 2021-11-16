<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wise course e- material</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="style1.css">
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
    <!-- Header -->
	<Header>
    <div class="header">
        <div class="container">
            <div class="header-content">
    
                <div class="logo">
                    <img src="images/liblog.png" alt="image zoro" draggable="false">
                    
                </div>
                <?php
                if(isset($_SESSION['login_user']) )
                {?>
                    <ul class="nav">
                        <li><a href="index.php" class="active">Home</a></li>
                        <li><a href="material.php">material</a></li>
                        <li><a href="../logout.php">LOGOUT</a></li>
                        <li><a href="collage.php">Collage</a></li>
                        <li><a href="feedback.php">FEEDBACK</a></li>
                    </ul> 
                    <div class="clear"></div>    
                <?php
                }
                else
                {?>
                    <ul class="nav">
                        <li><a href="index.php" class="active">Home</a></li>
                        <li><a href="material.php">MATERIAL</a></li>
                        <li><a href="admin_login.php">LOGIN</a></li>
                        <!-- <li><a href="#">Admin login</a></li> -->
                        <li><a href="collage.php">Collage</a></li>
                        <li><a href="feedback.php">FEEDBACK</a></li>
                        <!-- <ul class="dropdown-menu">
                        <li><a href="#">blog post</a> </li></ul>
                    </li>
                    -->
                    </ul> 
                    <div class="clear"></div>    
                    
                <?php 
                }
            
            ?>
            </div> <!--/.content --> 
        </div> <!--./container  -->
    </div> <!-- ./header -->
	</Header>
    <!-- Home section -->
	<section>
    <div class="home">
        <div class="overlay">
            <div class="home-content">
                <h1 class="title">Welcome to library</h1> 
                <p class="home-desc">
                    for more information About libaray sent for this email:Diaa Pain@gmail.com
                </p>
                
              
                


            </div><!-- ./home-contebt -->

        </section>
		
        </div><!-- ./overlay -->
        
</div><!-- ./home -->
<!-- Section header -->
<!-- <dir class="section-header">
    <h2 class="section-title">wellcome to website</h2>
    <span class="line"></span>
</dir> -->
<!-- About section -->


	


</body>
</html>