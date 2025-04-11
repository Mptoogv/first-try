<?php

include "db.php";
$message="";

$mail ="";
$username="";
$passwords="";


if(isset($_POST['register'])){

    $mail=$_POST['email'];
    $passwords =$_POST['password'];
    $username =$_POST['username'];

    // $see="SELECT* FROM our-user";
    // $saw=mysqli_query($con, $see);
    // $sawl=mysqli_fetch_array($saw);


    // echo $mail; echo $username; echo $passwords;

    // echo $_POST['password'];
    // if(empty($mail) && empty($username) && empty($passwords))  {
    //     $message ="all fields required";
    // }elseif (empty($mail)){
    //     $message ="email required";
    // }elseif (empty($username)){
    //     $message ="username required";
    // }elseif (empty($passwords)){
    //     $message ="input a secured password";
    // }else{

    
//    if ($username== $sawl['username']){;

//     $message='username exist';
// }else{

    $sql = "INSERT INTO our_user (email, password, username) VALUES ('$mail', '$passwords', '$username')";
    $result= mysqli_query($con, $sql);

    if($result){

        // echo "<script>alert ('registration successful')</script>";

       $message = "registration succesful";

    }else{
        
        // echo "<script>alert ('registration fail')</script>";
       $message = "registration fail";

    }
}
//     }

// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="POST">
        <div class="left">
            <h3>Sign-up</h3>
            <p>Sign-up if you do not have an account</p>
            <div class="message"><?php echo $message;  ?></div>
            <label for="">Email</label><br>
            <input type="email" name="email" placeholder="Enter Email" id="" value="<?php echo $mail; ?>" > <br>
            <label for="">Username</label><br>
            <input type="text" name="username" placeholder="Enter Username"  value="<?php echo $username; ?>" ><br>
            <label for="">Password</label><br>
            <input type="password" name="password" placeholder="Enter Password" id=""><br>
            <button name="register">Sign-up</button>
        </div>
        <div class="right">
            <h3>Login</h3>
            <p>Please login here</p>
            <label for="">Username</label><br>
            <input type="text" placeholder="Enter Username"><br>
            <label for="">Password</label><br>
            <input type="password" name="" placeholder="Enter Password" id="">
            <br>
            <button>Login</button>
        </div>
    </form>
</body>
</html>