<?php
    session_start();
    if (!isset($_SESSION["login_user"])) {
        ?>
        <script type="text/javascript">
            window.location="admin_login.php";
        </script>
        <?php
    }

include "connection.php";
    if (isset($_GET["email"])) {
        $email = $_GET["email"];
        mysqli_query($db, "DELETE FROM `student` WHERE `email`='ferasmahfouz3@gmail.com'");

        ?>
        
        <script type="text/javascript">
            alert("delete successful");
            window.location="student.php";
        </script>
        <?php
    }



?>