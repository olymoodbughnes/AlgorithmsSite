<?php
/*THIS CODE HAS BEEN WRITTEN BY ME: ACZW860*/
/*start user session*/
session_start();
/*Every time user submits in index.php this code will run*/
if (isset($_POST['submitlog'])){
require 'getdb.php';
    
$uname = $_POST["uname"];

$pass = $_POST["pwd"];

$upass = md5($pass);

/*Catch first error and send the user back with an error value*/
if (empty($uname) || empty($pass)){

    header("location:../index.php?error=emptyfields");
    exit();

}
else{
    /*Check database for user*/
    $checkavailability = "SELECT *FROM `students` WHERE `username` LIKE '$uname'";

    $rtrn = mysqli_query($db, $checkavailability);

    $rowd = mysqli_num_rows($rtrn);

    if($rowd == 1){
        /*Check database for matching hashed passowrd*/
        $checkpwd = "SELECT * FROM `students` WHERE `pwd` = '$upass' ";

        $result = mysqli_query($db, $checkpwd);
        $fin = mysqli_num_rows($result);
      /*log user in if a match has been found*/
     if ($fin == 1){

            $_SESSION['currentusername'] = $uname; 
            
            header("location:../main.html?index.php?login=success".$_SESSION['currentusername']);

            exit();
        } else {
            /*If a password hasn't been found then send user back with error value set to wrongpass*/
            header("location:../index.php?error=wrongpass");
            
            exit();
        }


        

    }
    else{
        /*In this instance user is sent back with error value nouser*/
        header("location:../index.php?error=nouser");
        exit();

    }

}

}

else{
    /*user will be sent to main.html*/
    header("location:../main.html");
    exit();
}

?>