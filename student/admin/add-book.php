<?php
include "connection.php";
include "navbar.php";
?>
<form action="" method="post" enctype="multipart/form-data">
                        <table class="table table-bordered">
                            <tr>
                                <td>
                                   <input type="text" class="form-control" name="material" placeholder="material name" required=""> 
                                </td>
                            </tr>
                         
                            <tr>
                                <td>
                                    <input type="text" class="form-control" name="doctor" placeholder="doctor" required="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" class="form-control" name="department" placeholder="department" required="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" class="form-control" name="Major" placeholder="major" required="">
                                </td>
                            </tr>
                        </table>
                        <div class="submit mt-20">
                        	<input type="submit" name="submit" class="btn btn-info submit" value="Add Book">
                        </div>
                	</form>
                    <?php

            if (isset($_POST["submit"])) {

                 mysqli_query($db, "insert into material values('','$_POST[material]','$_POST[doctor]',
                 '$_POST[department]','$_POST[Major]')");

                echo "<h>Complated</h>";
            } 
            ?>