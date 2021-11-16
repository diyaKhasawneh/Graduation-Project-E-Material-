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
    width: 20%;
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
.specialties-menu-desc{
    width: 70%;
    float: right;
    margin-left: 5%;
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
    <a href=""><button name=""><h3>قسم الخدمات الأكاديمية</button></h3></a>
    </div>
    
    </div>
   
    <div class="specialties-menu-box">
    <div class="specialties-menu-desc">
    <a href=""><h3><button name="">قسم اللغة الانجليزية</button></h3></a>
    </div>
    
    </div>

    <div class="specialties-menu-box">
    <div class="specialties-menu-desc">
    <a href=""><h3><button name="">قسم اللغة العربية وآدابها</button></h3></a>
    </div>
    </div>
    <div class="specialties-menu-box">
    <div class="specialties-menu-desc">
    <a href=""><h3><button name="">قسم العلوم الانسانية</button></h3></a>
    </div>
    </div>
    <div class="specialties-menu-box">
    <div class="specialties-menu-desc">
    <a href=""><h3><button name="">قسم التاريخ والحضارة الإسلامية</button></h3></a>
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
    
while($row=mysqli_fetch_assoc($q))
        { $username = $row['name'];
            echo"<tr>";
            echo "<td>"; echo $row['bid'];echo"</td>";
            echo"<td>"; echo $row['name'];echo"</td>";
            echo"<td>"; echo $row['doctor'];echo"</td>";
            echo"<td>"; echo $row['department'];echo"</td>";            
            echo"<td>"; echo $row['Major'];echo"</td>";
            echo"<td>"; 
                
               }  
?>
<script>
window.location="software.php";
</script>
<?php
}

?>
