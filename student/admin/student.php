<?php
include "connection.php";
include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Information</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <style type="text/css">
        .srch{
            padding-left:900px;
        }


    </style>
</head>
<body>
    <!--__________________search bar_______________________-->
    <div class="srch">
        <form action="" class="navbar-form" method="post" name="form1">
            
                <input class="form-control" type="text" name="search"
                placeholder="Student username.." required="">
                <button style="background-color:#6495ED;" type="submit" name="submit"
                 class="btn btn-default">
                 <span class="glyphicon glyphicon-search"></span>
                 </button>
        </form>
    </div>
    <h2>List of Student</h2>
    <?php /*this is the search */
        if(isset($_POST['submit']))
        {
            $q=mysqli_query($db,"SELECT
            first,last,username,roll,email,contact FROM student
             where username like'%$_POST[search]%' ");
            if(mysqli_num_rows($q)==0)
            {
                echo"Soory No Student found with that username. Try searching again.";

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
            echo"<tr >";
            echo "<tr>";
				echo "<td>"; echo $row['first']; echo "</td>";
				echo "<td>"; echo $row['last']; echo "</td>";
				echo "<td>"; echo $row['username']; echo "</td>";
				echo "<td>"; echo $row['email']; echo "</td>";
				echo "<td>"; echo $row['contact']; echo "</td>";
            echo"</tr>";
            }
        echo "</table>";

            }

        }
        /*if button is not pressed.*/
        else
        {
        $res=mysqli_query($db,"SELECT first,last,username,email,contact FROM student ;");
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
  
        ?>
    
</body>
</html>