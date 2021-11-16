<title>College of Islamic Arts and Architecture</title>
<?php
include "navbar.php";
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <style>
    *{
    margin: 0 0;
    padding: 0 0;
    font-family: Arial, Helvetica, sans-serif;
}
.collage-menu{
    background-color: #ececec;
    padding: 4% 0;
    }
.collage-menu-box{
    width: 43%;
    margin: 1%;
    padding: 2%;
    float: left;
    background-color: white;
    border-radius: 15px;
}
.container{
    width: 80%;
    margin: 0 auto;
    padding: 1%;
}
.text-center{
    text-align: center;
}
.collage-menu-desc{
    width: 70%;
    float: right;
    margin-left: 8%;
} 
a{
    text-decoration: none;
    
}
h2:hover{
    cursor: pointer;
}
button{
    background-color: white;
    border: 0;
}
    </style>
</head>
<body>
<form action="" method="post">
    <section class="collage-menu">
    <div class="container">
    <h2 class="text-center">Majors menu</h2>
    <div class="collage-menu-box">
    <div class="collage-menu-desc">
    <a href=""><button name="software"><h4>قسم الفنون الإسلامية
</button></h2></a>
    </div>
    
    </div>
   
    <div class="collage-menu-box">
    <div class="collage-menu-desc">
    <a href=""><h4><button name="cs">قسم العمارة الاسلامية والتصميم الداخلي</button></h4></a>
    </div>    
    </div>
    </div>
    </div>
    </section>
    </form>
</body>
</html>
