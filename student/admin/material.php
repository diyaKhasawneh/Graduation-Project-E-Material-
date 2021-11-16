<title>material</title>
<?php

 include "connection.php";
include "navbar.php";

    
    if (!isset($_SESSION["login_user"])) {
        ?>
        <script type="text/javascript">
            window.location="admin_login.php";
        </script><?php
    }
    if(isset($_POST['submit'])){

        # Username
        $username = $_POST['username'];
    
        # Getting file name
        $filename = $_FILES['file']['name'];
    
        # Getting File size
        $filesize = $_FILES['file']['size'];
    
        # Location
        $location = "uploads/".$username;
    
        # create directory if not exists in upload/ directory
        if(!is_dir($location)){
            mkdir($location, 0755);
        }
    
        $location .= "/".$filename;
    
        # Upload file
        move_uploaded_file($_FILES['file']['tmp_name'],$location);
    




        $total = isset($_FILES["myVar"]) ? count($_FILES["myVar"]["name"]) : 0; // count how many files

// iterate over each of the files
for ($i = 0; $i < $total; $i++)
{
 // there isn't an error
 if ($_FILES["myVar"]["error"][$i] == UPLOAD_ERR_OK)
 {
 $folderLocation = $location; // a relative path. (could be "path/to/file" for example)
 
 // if the folder doesn't exist then make it
 if (!file_exists($folderLocation)) mkdir($folderLocation);
 // move the file into the folder
 move_uploaded_file($_FILES["myVar"]["tmp_name"][$i], "$folderLocation/" .
basename($_FILES["myVar"]["name"][$i]));
 }
 // else report the error
 else switch ($_FILES["myVar"]["error"][$i])
 {
 case UPLOAD_ERR_INI_SIZE:
 echo "Value: 1; The uploaded file exceeds the upload_max_filesize directive in
php.ini.";
 break;
 case UPLOAD_ERR_FORM_SIZE:
 echo "Value: 2; The uploaded file exceeds the MAX_FILE_SIZE directive that was
specified in the HTML form.";
 break;
 case UPLOAD_ERR_PARTIAL:
 echo "Value: 3; The uploaded file was only partially uploaded.";
 break;
 case UPLOAD_ERR_NO_FILE:
 echo "Value: 4; No file was uploaded.";
 break;
 case UPLOAD_ERR_NO_TMP_DIR:
 echo "Value: 6; Missing a temporary folder. Introduced in PHP 5.0.3.";
 break;
 case UPLOAD_ERR_CANT_WRITE:
 echo "Value: 7; Failed to write file to disk. Introduced in PHP 5.1.0.";
 break;
 case UPLOAD_ERR_EXTENSION:
 echo "Value: 8; A PHP extension stopped the file upload. PHP does not provide a way to
ascertain which extension caused the file upload to stop; examining the list of loaded extensions
with phpinfo() may help. Introduced in PHP 5.2.0.";
 break;
 
 default:
 echo "An unknown error has occurred.";
 break;
 }
}
    }
    
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
            padding-left:1000px;
        }
        .hide{
            display: none;
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
                 <button ><a href="add-book.php"style="">add</a></button>
        </form>
    </div>
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
        echo"<th>"; echo"Delete book" ; echo "</th>";
        
        echo"</tr>";
            
        while($row=mysqli_fetch_assoc($q))
        { $username = $row['name'];
            echo"<tr>";
            echo "<td>"; echo $row['bid'];echo"</td>";
            echo"<td>"; echo $row['name'];echo"</td>";
            echo"<td>"; echo $row['doctor'];echo"</td>";
            echo"<td>"; echo $row['department'];echo"</td>";            
            echo"<td>"; echo $row['Major'];echo"</td>";
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
            echo"<td>";
            $dirpath = "uploads/".$username;
            $files = array();
            $files = glob($dirpath);
            usort($files, function($x, $y) {
                return filemtime($x) < filemtime($y);
            });
            
            echo "<div>";
            foreach($files as $item){
                echo "<div class='filethumb'>";
                //echo "<div>" . $item . "</div>";
                echo "<a href='" .$item. "' target='_blank'><div><i class='fa fa-folder' style='font-size: 40px;'></i></div>";
                echo "<div>" . str_replace("uploads/", "", $item) . "</div></a>";
                echo "<a href='?filestorage&delete=" .str_replace("uploads/", "", $item). "'><div style='color: red; margin-top: 20px; font-size: 10px;'><i class='fa fa-trash'></i> Delete</div></a>";
                echo "</div>";
                
                echo"<td>"; 'Delete book';echo"</td>";
             
          
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
        echo"<th>"; echo"matril_file" ; echo "</th>";
        echo"<th>"; echo"Dowload" ; echo "</th>";
        echo"<th>"; echo"Delete book" ; echo "</th>";
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
              
                ?>
                
                        <!-- Form -->
                        <form method='post' action='' enctype='multipart/form-data'>
                            <input type='hidden' value='<?= $username ?>' name='username' >
                            <input type="file" name="file" id="file" class="hide">
                            <input type="file" name="myVar[]" multiple="multiple" />
                            <input type='submit' name='submit' value='Upload'>
                        </form>
                        <!-- Form -->
                   
                   
                   
                <?php
                echo"</td>";
                echo"<td>";
                
                $dirpath = "uploads/".$username ;
    $files = array();
    $files = glob($dirpath);
    usort($files, function($x, $y) {
        return filemtime($x) < filemtime($y);
    });
    
    echo "<div>";
    foreach($files as $item){
        echo "<div class='filethumb'>";
        //echo "<div>" . $item . "</div>";
        echo "<a href='" .$item. "' target='_blank'><div><i class='fa fa-folder' style='font-size: 40px;'></i></div>";
        echo "<div>" . str_replace("uploads/", "", $item) . "</div></a>";
        echo "</div>";
    
    }
                echo"</td>";
                
                echo "<td>";?>
                
                <a href="delete-book.php?bid=<?php echo $row["bid"]; ?> "><i class="fa fa-trash-o"></i></a><?php
                echo "</td>";
            }
                echo"</table>";
                 }?>
                        
          


                        

                        