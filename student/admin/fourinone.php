    <?php
include "navbar.php";
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    *{
    margin: 0 0;
    padding: 0 0;
    font-family: Arial, Helvetica, sans-serif;
    overflow: hidden;
}
.collage-menu{
    background-color: #2E8B57;
    padding: 4% 0;
    }
.collage-menu-box{
    width: 43%;
    margin: 1%;
    padding: 2%;
    float: right;
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
.navbar{
    margin: 0;
}
    </style>
</head>
<body>
<form action="" method="post">
    <section class="collage-menu">
    <div class="container">
    <h2 class="text-center" style="margin-right: 100;">collage menu</h2>
    <div class="collage-menu-box">
    <div class="collage-menu-desc">
    <a href=""><button name="Sheikh_Nouh_Al-Qudah_College_of_Sharia_and_Law"><h2>كلية الشيخ نوح القضاة للشريعة والقانون 
</button></h2></a>
    </div>
    </div>
   

    <div class="collage-menu-box">
    <div class="collage-menu-desc">
    <a href=""><h2><button name="College_of_Islamic_Arts_and_Architecture">كلية الفنون و العمارة الاسلامية </button></h2></a>
    </div>
    </div>
    <div class="collage-menu-box">
    <div class="collage-menu-desc">
    <a href=""><h2><button name="College_of_Dawah_and_Fundamentals_of_Religion">كلية الدعوة وأصول الدين</button></h2></a>
    </div>
    </div>


    <div class="collage-menu-box">
    <div class="collage-menu-desc">
    <a href=""><h2><button name="College_of_Islamic_Arts_and_Architecture">كلية الفنون والرسم </button></h2></a>
    </div>
    </div>


    </div>
    </div>
    </section>
    </form>
</body>
</html>
<?php
if(isset($_POST["College_of_Dawah_and_Fundamentals_of_Religion"])){
    header("Location:College of Dawah and Fundamentals of Religion.php");
}

if(isset($_POST["Sheikh_Nouh_Al-Qudah_College_of_Sharia_and_Law"])){
    header("Location:Sheikh Nouh Al-Qudah College of Sharia and Law.php");
}
if(isset($_POST["College_of_Islamic_Arts_and_Architecture"])){
    header("Location:College of Islamic Arts and Architecture.php");
}
?>


