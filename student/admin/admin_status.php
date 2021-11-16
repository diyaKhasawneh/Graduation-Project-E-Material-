<?php
include "navbar.php";
include "connection.php";
?>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

     <title>feras</title>

</head>
<body>
    <!--__________________search bar_______________________-->
    <div container></div>
    <h2 style="float: left;">Search one username at a time to approve the request.</h2>
    <div style="float:right;" class="srch">
        <form action="" class="navbar-form" method="post" name="form1">
            
                <input class="form-control" type="text" name="search"
                placeholder="Student username.." required="">
                <button style="background-color:#6495ED;" type="submit" name="submit"
                 class="btn btn-default">
                 <span class="glyphicon glyphicon-search"></span>
                 </button>
        </form>
    </div>
    <br><br><br><h2>New Requests</h2>
    <?php /*this is the search */
    if(isset($_POST['submit']))
        {$q=mysqli_query($db,"SELECT first,last,username,email,contact FROM admin where username 
        like'%$_POST[search]%' and status='' ");
            if(mysqli_num_rows($q)==0)
            {
                echo"Soory No New request found with that username. Try searching again.";

            }
            else
            {
            echo "<table class='table table-bordered table-hover'>";
     echo"<tr style='background-color:#6495ED;'>";
       //Table header
        echo"<th>"; echo "First Name" ; echo "</th>";
        echo"<th>"; echo "Last Name" ; echo "</th>";
        echo"<th>"; echo "Username" ; echo "</th>";
        echo"<th>"; echo "Email" ; echo "</th>";
        echo"<th>"; echo "Contact" ; echo "</th>";
        echo"</tr>";
        while($row=mysqli_fetch_assoc($q))
        { 
            $_SESSION['test_name']=$row['username'];
            echo "<tr>";
				echo "<td>"; echo $row['first']; echo "</td>";
				echo "<td>"; echo $row['last']; echo "</td>";
				echo "<td>"; echo $row['username']; echo "</td>";
				echo "<td>"; echo $row['email']; echo "</td>";
				echo "<td>"; echo $row['contact']; echo "</td>";
            echo"</tr>";
            }
        echo "</table>";
        ?>
        <form method="post">
        <button type="submit" name="submit1"  class="btn btn-default"><span style="color:red;" class="glyphicon glyphicon-remove-sign">&nbsp;Remove</span></button>
        <button type="submit" name="submit2" class="btn btn-default"><span style="color:green;" class="glyphicon glyphicon-ok-sign">&nbsp;approve</span></button>
        </form>
        
            <?php
                                                 
            }

        }
        /*if button is not pressed.*/
        else
        {
        $res=mysqli_query($db,"SELECT first,last,username,email,contact FROM admin where status='';");
        echo "<table class='table table-bordered table-hover'>";
        echo"<tr style='background-color:#6495ED;'>";
        //Table header
        echo"<th>"; echo"First Name" ; echo "</th>";
        echo"<th>"; echo"Last Name" ; echo "</th>";
        echo"<th>"; echo"Username" ; echo "</th>";
        echo"<th>"; echo"Email" ; echo "</th>";
        echo"<th>"; echo"Contact" ; echo "</th>";
        echo"</tr>";
        while($row=mysqli_fetch_assoc($res))
            {
                echo"<tr>";                
                echo"<td>"; echo $row['first'];echo"</td>";
                echo"<td>"; echo $row['last'];echo"</td>";
                echo"<td>"; echo $row['username'];echo"</td>";
                echo"<td>"; echo $row['email'];echo"</td>";
                echo"<td>"; echo $row['contact'];echo"</td>";
                echo"</tr>";
            }
            echo"</table>";
    }
    if (isset($_POST['submit1'])) 
                 {mysqli_query($db,"DELETE from admin where username='$_SESSION[test_name]' and status='';");
                     unset($_SESSION['test_name']); 
                 }
                 if (isset($_POST['submit2']))
                  {
                 mysqli_query($db,"UPDATE admin set status='yes' where username='$_SESSION[test_name]';");
                 unset($_SESSION['test_name']);
                 }

   ?>
    
</body>
</html>