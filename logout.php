<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
 echo '<script type="text/javascript">alert("Logout Suceesfully");window.location=\'Index.php\';</script>';
}
?>  
