<?php
 include "connection.php";
include "navbar.php";
    

    
    ?>
    
    <!doctype html>
    <html>
        <head>
            <title>material</title>
            
            <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style type="text/css">
        .srch{
            /* padding-left:1000px; */
        }


    </style>
        </head>
        <body >
        <!--__________________search bar_______________________-->
    <div class="srch">
        <form action="" class="navbar-form" method="post" name="form1">
            
                <input class="form-control" type="text" name="search" 
                placeholder="search book.." required="">
                <button style="background-color:#6495ED;" type="submit" name="submits"
                 class="btn btn-default">
                 <span class="glyphicon glyphicon-search"></span>
                 </button>
                 
        </form>
        <h2>List of material</h2>
    <?php /*this is the search */
        if(isset($_POST['submits']))
        {
            $q=mysqli_query($db,"SELECT * FROM material where name like'%$_POST[search]%' ");
            if(mysqli_num_rows($q)==0)
            {
                echo"Soory No book found. Try searching again.";

            }
            else
            {
                echo "<table class='table table-brodered table-hover'>";
                echo"<tr style='background-color:#6495ED;'>";
       //Table header
        echo"<th>"; echo"NO" ; echo "</th>";
        echo"<th>"; echo"Name" ; echo "</th>";
        echo"<th>"; echo"doctor" ; echo "</th>";
        echo"<th>"; echo"Department" ; echo "</th>";
        echo"<th>"; echo"Major" ; echo "</th>";
        echo"<th>"; echo"matril_file" ; echo "</th>";
        echo"<th>"; echo"Download" ; echo "</th>";
        echo"</tr>";
            
        while($row=mysqli_fetch_assoc($q))
        {
            echo"<tr>";
            echo "<td>"; echo $row['bid'];echo"</td>";
            echo"<td>"; echo $row['name'];echo"</td>";
            echo"<td>"; echo $row['doctor'];echo"</td>";
            echo"<td>"; echo $row['Major'];echo"</td>";
            echo"<td>"; echo "<div>";
          foreach($files as $item){
                echo "<div class='filethumb'>";
                //echo "<div>" . $item . "</div>";
                echo "<a href='" .$item. "' target='_blank'><div><i class='fa fa-file' style='font-size: 40px;'></i></div>";
              
                echo "</div>";"</td>";
                echo"<td>"; 
               }     ?>
                
            <!-- Form -->
                        <form method='post' action='' enctype='multipart/form-data'>
                            <input type='hidden' value='<?= $username ?>' name='username' >
                            <input type="file" name="file" id="file" >
                            <input type='submit' name='submit' value='Upload'>
                        </form>
                        <?php
                echo"</td>";
                
             
          
            }
            echo"</table>";
        }
        }
        /*if button is not pressed.*/
        
        
        
        else
        {

        $fetch_user=mysqli_query($db,"SELECT * FROM material ORDER BY material.name ASC;");
       
                
            
        echo "<table class='table table-bordered table-hover'>";
        echo"<tr style='background-color:#6495ED;'>";
        echo "<table class='table table-bordered table-hover'>";
        echo"<tr style='background-color:#6495ED;'>";
        //Table header
        echo"<th>"; echo"NO" ; echo "</th>";
        echo"<th>"; echo"Name" ; echo "</th>";
        echo"<th>"; echo"doctor" ; echo "</th>";
        echo"<th>"; echo"Department" ; echo "</th>";
        echo"<th>"; echo"Major" ; echo "</th>";
        
        echo"<th>"; echo"Dowload" ; echo "</th>";
                    echo"</tr>";
            
            while($row = mysqli_fetch_assoc($fetch_user)){
                $username = $row['name'];
                echo"<tr>";
                echo "<td>"; echo $row['bid'];echo"</td>";
                echo"<td>"; echo $row['name'];echo"</td>";
                echo"<td>"; echo $row['doctor'];echo"</td>";
                echo"<td>"; echo $row['department'];echo"</td>";           
                echo"<td>"; echo $row['Major'];echo"</td>";           
                
                echo"<td>";
                $dirpath = "admin/uploads/".$username ;
    $files = array();
    $files = glob($dirpath);
    usort($files, function($x, $y) {
        return filemtime($x) < filemtime($y);
    });
    
    echo "<div>";
    foreach($files as $item){
        if(is_file($item)){
            echo $item, '<br>'; 
        }   
    
        echo "<div class='filethumb'>";
        //echo "<div>" . $item . "</div>";
        $files2 = scandir($dirpath, 1);
        
        echo "<a href='" .$item. "' target='_blank'><div><i class='fa fa-folder' style='font-size: 40px;'></i></div>";
       
        
        echo "</div>";
    
    }
                echo"</td>";
                
                           }
                echo"</table>";
                 }?>
                        
          


                        

                        