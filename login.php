<?php
$conn = mysqli_connect("localhost","root","","business");

if(!$conn){
 die("Connection Lost");
}

$mobilenumber = $_POST['mobilenumber'];
$password = $_POST['password'];
$sql = "SELECT * FROM loginform WHERE mobilenumber='$mobilenumber' AND password='$password'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    header("location: page");
    exit();
}
else{
    echo"Login Failed";
}
mysqli_close($conn);
?>