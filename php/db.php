<?php
$server='localhost';
$user='root';
$pwd='';
$dbname='tonaltremor';
$conn=mysqli_connect($server,$user,$pwd,$dbname);
if(!$conn){
   die("connection unsuccessfull".mysqli_connect_error());
}

if(isset($_POST['submit'])){
    $phone=trim(htmlentities($_POST['phoneNumber']));
    $username=trim(htmlentities($_POST['userName']));
    $pass=trim(htmlentities($_POST['password']));
    $pass2=trim(htmlentities($_POST['confirmPass']));
    
if(strlen($pass)>=6 && strlen($pass)<=16){
  if($pass===$pass2){
     $hashPass=password_hash($pass,PASSWORD_DEFAULT);
     $confirmHash=password_hash($pass2,PASSWORD_DEFAULT);
    $sql="INSERT INTO signup(phone_number,pa_ssword,confirm_pass,Username)VALUES('$phone','$hashPass','$confirmHash','$username')";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        die("unssuccessfull entry".mysqli_connect_error());
    }
  header("location:login.php");
  }
}




}
?>