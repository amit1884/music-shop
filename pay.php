<?php 
include_once 'header.php';
 if(isset($_SESSION['u_id'])){
            echo ' <form method="POST" action="includes/logout.inc.php">
            <button type = "submit" name = "submit">Logout</button>
    </form>';
    ?>