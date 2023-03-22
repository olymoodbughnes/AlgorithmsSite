<?php
/*THIS CODE HAS BEEN WRITTEN BY ME: ACZW860*/

/*Log user out of session and send them back to login page*/
session_start();
session_unset();
session_destroy();

header("location:../index.php");



?>