<?php
include "navbar.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        background-image: url(admin/images/uni.JPG);
        background-repeat: no-repeat;
        /* background-position: center; */
        background-size:cover;
    }
        a{
            color: #00FFFF;
            text-decoration: none;
        }
        a:hover{
            color: #ff4d4d;
            text-decoration: none;
        }
    /* About section */

.about{

}
.about-cotent{
    overflow: hidden;
}
.about-item{
    width: 30%;
    float: left;
    text-align: center;
    border: 1px solid black;
    padding: 50px 20px;
    /* display: inline-block; */
}
.ltr-effect{
    position: relative;
}
.ltr-effect:after{
position: absolute;
content:"";
width: 0;
top: 0;
left: 0;
right: 0;
bottom: 0;
background-color: #FFFAF0;
z-index:-1;
transition: width 0.5s;

}
.ltr-effect:hover::after{
    width: 100%;
    
}
.about-item.mg{
    margin: 0 5%;
}
.about-item .icon{
    color: red;
    margin-bottom: 10px;
}
.about-title{  
    text-transform: capitalize;
    margin-bottom: 10px;
}
.about-item-desc{
    line-height: 1.6;
    margin-bottom: 10px;
}
.f{
margin: 2% 0;
margin-left: -340px;
}
    
    </style>
</head>
<body>
<h1>OUR collage</h1>
<div class="about">
    <div class="section-header">
    <span class="line"></span>
    </div><!-- .section-header -->
    <a href="it.php">
   <div class="container">
    <div class="about-content">
        <div class="about-item ltr-effect">
            <i class="fa fa-cogs"></i>
            <h2 class="about-item-title">IT</h2>
            <p class="about-item-desc">
               
            </p>
            

        </div><!-- ./about-item -->
        </a>
        <a href="money and business.php">
        <div class="about-item mg ltr-effect">
            <i class="fa fa-cogs">المال والاعمال</i>
            <h2 class="about-item-title"></h2>
            <p class="about-item-desc">
              
            </p>
            

        </div><!-- ./about-item -->
        </a>
        <a href="">
        <div class="about-item ltr-effect ">
            <i class="fa fa-cogs">كلية الشريعة</i>
            <h2 class="about-item-title"></h2>
       
            <br>

        </div><!-- ./about-item -->
        </a>

        <a href="taj.php">
        <div class="about-item ltr-effect f">
            <i class="fa fa-cogs">كلية الأداب والعلوم</i>
            <h2 class="about-item-title"></h2>
            
            

        </div><!--./about-item-->
        </a>
       
        <div class="clear"></div>
    </div><!-- ./about-content -->
   </div><!-- ./container -->
</div><!-- ./about -->
</body>
</html>