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
    
    overflow: hidden; 
}
.navbar{
    margin: 0;
    
}
.majors-menu{
    /* background-color: #ececec; */
    
    padding: 4% 0;
    background-image: url(images/AI-is-coming-—-and-HR-is-not-prepared.JPG);
    background-size: cover;
    background-position:center ;
    
    background-repeat:no-repeat ;
    opacity: 0.8;
    }
.majors-menu-box{
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
    color: black;
    padding-right: 90;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-size: 60px;
    
}
.majors-menu-desc{
    width: 70%;
    float: left;
    margin-left: 8%;
} 
a{
    text-decoration: none;
    
}
h2{
    font-size: 25px; font-family: 'Times New Roman', Times, serif;
}
h2:hover{
    cursor: pointer;
    color: blue;
}
button{
    background-color: white;
    border: 0;
}


    </style>
</head>
<body>
<form action="" method="post">
    <section class="majors-menu">
    <div class="container">
    <h3 class="text-center">majors Menu</h3>
    <div class="majors-menu-box">
    <div class="majors-menu-desc">
    <a href=""><button name="software"><h2>Software engineer</button></h2></a>
    </div>
    
    </div>
   
    <div class="majors-menu-box">
    <div class="majors-menu-desc">
    <a href=""><h2><button name="cs">computer science</button></h2></a>
    </div>
    
    </div>

    <div class="majors-menu-box">
    <div class="majors-menu-desc">
    <a href=""><h2><button name="Networks"> Information systems and networks</button></h2></a>
    </div>
    </div>
    <div class="majors-menu-box">
    <div class="majors-menu-desc">
    <a href=""><h2><button name="cyber_security"> Information Security and Confidentiality Department</button></h2></a>
    </div>
    </div>
    </div>
    </div>
    </section>
    </form>
</body>
</html>
<?php
if(isset($_POST["cyber_security"])){
   
?>
<script>
window.location="cyber security.php";
</script>


<?php
}

?>
<?php
if(isset($_POST["cs"])){

?>
<script>
    window.location="computer_science.php";

</script>
<?php
}
?>
<?php
if(isset($_POST["Networks"])){
   
?>
<script>
window.location="networks.php";
</script>

<?php
}
if(isset($_POST["software"])){
    ?>
<script>
window.location="software.php";
</script>
<?php
}
?>