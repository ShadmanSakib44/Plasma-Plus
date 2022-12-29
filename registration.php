<?php
session_start();
include('include/db_connect.php');

$Username= $_POST['Username'];
// $Password=md5($_POST['Password']);
$Password =md5( $_POST['Password']);

// // Check if password is long enough (minimum 8 characters)
// if (strlen($Password) < 8) {
    
//   echo "<script>alert('Error: Password must be at least 8 characters long.')</script>";
//   exit;
  
  
// //   echo '<script>window.open("login.html","_self")</script>';
// }
// // echo '<script>window.open("login.html","_self")</script>';
// // // header("Location: login.html");

// // Check if password has at least one uppercase letter
// if (!preg_match('/[A-Z]/', $Password)) {
//     echo "<script>alert('Error: Password must contain at least one uppercase letter.')</script>";
//     header("Location: login.html");
  
//   exit;
// }
// // else
// // {
// //     echo '<script>window.open("login.html","_self")</script>';
// // }

// // Check if password has at least one lowercase letter
// if (!preg_match('/[a-z]/', $Password)) {
//     echo "<script>alert('Error: Password must contain at least one lowercase letter.')</script>";
//     header("Location: login.html");
  
//   exit;
// }

// // Check if password has at least one digit
// if (!preg_match('/\d/', $Password)) {
//     echo "<script>alert('Error: Password must contain at least one digit.')</script>";
//     header("Location: login.html");
  
//   exit;
// }


// Password passed all checks, so proceed with hashing it
// $Password =md5( $_POST['Password']);
// $hashedPassword = md5($Password);




$Email = $_POST['Emailid'];
$Phoneno = $_POST['Phonenumber'];
$Country=$_POST['Country'];
$Gender = $_POST['Gender'];

$Username_checking = "select * from Signup where Username='$Username'" ;
$result = mysqli_query($con, $Username_checking);
$num = mysqli_num_rows($result);

if ($Gender=='Male'){
    $profileimg='images/men.jpg';
}
else{
    $profileimg='images/women.jpg';
}

if($num==1)
{
    echo '<script>alert("username already taken")</script>';	
	echo '<script>window.open("login.html","_self")</script>';
    exit();
}
else
{
    $reg="insert into Signup(Username,Password,Email,Phoneno,Country,Gender,Profile,Wallpaper) values ('$Username','$Password','$Email','$Phoneno','$Country','$Gender','$profileimg','f2f2f2')";
    $query=mysqli_query($con,$reg);
    if($query){
        	echo '<script>alert("Congratulations ,Your account has been created ")</script>';
            echo '<script>window.open("login.html","_self")</script>';
    }
    else{
        echo '<script>alert("Registration Failed ,Try Again!!..")</script>';
    }

	
      
}




?>