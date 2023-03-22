<html>
<body>

<?php 
/*THIS CODE HAS BEEN WRITTEN BY ME: ACZW860*/
session_start();
$db = new mysqli('fareham.city.ac.uk', 'aczw860', '190011984', 'aczw860');

mysqli_select_db($db, 'aczw860');

/*User signup input*/
$name = $_POST["fname"];
$lname = $_POST["lname"];
$uname = $_POST["uname"];
$pass = $_POST["pwd"];
$pass2 = $_POST["pwd2"];
$email = $_POST["email"];
$sex = $_POST["sex"];

/*Hash password*/
$pwd = md5($pass);

/*Check if user has missed an entry of data*/
  if (empty($name) || empty($lname)||empty($uname)||empty($pwd)||empty($email)||empty($sex)) {
    header("location:../login.html?error=emptyfields&fname=".$name."&lname=".$lname."&email=".$email."&sex=".$sex."&uname=".$uname);
    exit();
} 

/*Check for valid email*/
else if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
    header("location:../login.html?error=invalidemail&uname=".$uname);
    exit();
}

/*check if user's passwords match*/
else if ($pass !==$pass2){

    header("location:../login.html?error=passnotmatching&uname=".$uname."&email=".$email);
   exit();

}
else {
    /*Check if usrname is available*/
    $checkavailability = "SELECT *FROM `students` WHERE `username` LIKE '$uname'";

    $rtrn = mysqli_query($db, $checkavailability);

    $rowd = mysqli_num_rows($rtrn);

    if($rowd == 1){
        /*Username not unique, sends user back with error value username taken*/
        header("location:../login.html?error=usernametaken");

    } else {
        
            /*Username unique, sends user info to database and writes it*/
            $sql = "INSERT INTO students (fname, lname, email, username, sex, pwd) VALUES ('$name', '$lname',  '$email','$uname', '$sex', '$pwd');";
            
        header("location:../main.html?signup=success");
        
            }

    }


   

    
    
    /*If data submission fails then notify*/
    if(!mysqli_query($db,$sql)){
    
        echo 'not inserted';
    }

?>

</body>
</html>