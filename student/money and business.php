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
    width: 24%;
    margin: 1%;
    padding: 1%;
    float: right;
    background-color: white;
    border-radius: 15px;
}
.container{
    width: 70%;
    margin: 0 auto;
    padding: 1%;
}
.text-center{
    text-align: center;
}
.specialties-menu-desc{
    width: 50%;
    float: right;
    margin-left: 8%;
} 
a{
    text-decoration: none;
    
}
h3:hover{
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
    <section class="specialties-menu">
    <div class="container">
    <h2 class="text-center">Majors menu</h2>
    

    <div class="specialties-menu-box">
    <div class="specialties-menu-desc">
    <a href=""><h3><button name="ins"> قسم نظم المعلومات الادارية</button></h3></a>
    </div>
    </div>

    <div class="specialties-menu-box">
    <div class="specialties-menu-desc">
    <a href=""><h3><button name="cs">قسم العلوم المالية والمصرفية</button></h3></a>
    </div>
    </div>
    <div class="specialties-menu-box">
    <div class="specialties-menu-desc">
    <a href=""><h3><button name="cs">قسم المصارف الاسلامية</button></h3></a>
    </div>
    </div>
    <div class="specialties-menu-box">
    <div class="specialties-menu-desc">
    <a href=""><h3><button name="administration Department">قسم الادارة</button></h3></a>
    </div>
    
    </div>
   
    <div class="specialties-menu-box">
    <div class="specialties-menu-desc">
    <a href=""><h3><button name="cs">قسم المحاسبة</button></h3></a>
    </div>
    
    </div>
    </div>
    </div>
    </section>
    </form>
</body>
</html>
<?php
if(isset($_POST["ins"])){
   
?>
<script>
window.location="material.php";
</script>
<?php
}
?>
<?php
if(isset($_POST["cs"])){

?>
<script>
window.location="material.php";
</script>
<?php
}
?>

<?php
if(isset($_POST["software"])){
    $q=mysqli_query($db,"SELECT*FROM material WHERE Major='software'");
?>
<script>
window.location="software.php";
</script>
<?php
}

?>
