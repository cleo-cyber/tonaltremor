<?php
include 'db.php';
if(isset($_POST['login'])){
    $loginUser=htmlentities($_POST['username']);
    $loginPass=htmlentities($_POST['password']);
    $loginUser=trim($loginUser);
    $loginPass=trim($loginPass);
    $loginsql="SELECT username,pa_ssword FROM signup where username='$loginUser' AND pa_ssword='$loginPass' LIMIT 1";
    $loginresult=mysqli_query($conn,$loginsql);
  if(mysqli_num_rows($loginresult)==1){
      $row=mysqli_fetch_assoc($loginresult);
      $hashedpasword=$row['pa_ssword'];
      if(password_verify($loginPass,$hashedpasword)){
          echo "there was a password match";
      }
      else{
          echo "passwords dont match";
      }
  }
  else{
      echo mysqli_num_rows($loginresult);
  }
}
?>