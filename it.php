<?php
include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    *{
    margin: 0 0;
    padding: 0 0;
    font-family: Arial, Helvetica, sans-serif;
}
.specialties-menu{
    background-color: #ececec;
    padding: 4% 0;
    }
.specialties-menu-box{
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
.specialties-menu-desc{
    width: 70%;
    float: left;
    margin-left: 8%;
} 
a{
    text-decoration: none;
    
}
h2:hover{
    cursor: pointer;
}
    </style>
</head>
<body>
    <section class="specialties-menu">
    <div class="container">
    <h2 class="text-center">Specialties Menu</h2>
    <div class="specialties-menu-box">
    <div class="specialties-menu-desc">
    <a href=""><h2>SOFTWARE ENGINEERING</h2></a>
    </div>
    
    </div>
   
    <div class="specialties-menu-box">
    <div class="specialties-menu-desc">
    <a href=""><h2>COMPUTER SCIENCE</h2></a>
    </div>
    
    </div>

    <div class="specialties-menu-box">
    <div class="specialties-menu-desc">
    <a href=""><h2>Information systems and networks</h2></a>
    </div>
    </div>

    </div>
    </div>
    </section>
</body>
</html>