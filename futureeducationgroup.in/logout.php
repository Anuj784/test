<?php
   session_start();
   
   if(session_destroy()) {
        header("Location: login2.php");
        echo '<script language="javascript">';
        echo 'alert("Logout successful")';
        echo '</script>';

   }
?>