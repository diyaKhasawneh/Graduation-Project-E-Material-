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
    if (isset($_GET["bid"])) {
        $id = $_GET["bid"];
        mysqli_query($db, "delete from material where bid=$id");

        ?>
        
        <script type="text/javascript">
            alert("delete successful");
            window.location="material.php";
        </script>
        <?php
    }



?>