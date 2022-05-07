<?php
include 'head.php';
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <style>
form{
    box-shadow: 0 2px 5px #fff;
    width: 60%;
    margin: 0 auto;
    margin-top: 12%;
    height: 60vh;
    background-color: #fff;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    /* justify-content: space-between; */
}
 form input[type="text"],input[type="password"]{
    margin-left: 5%;
    margin-top: 5%;
    margin-right: 5%;
    height: 4vh;
    outline: none;
    border-radius: 20px;
    text-align: center;
    background-color: lightgrey;
    border: 0;

}
form h2{
    margin: 0 auto;
    text-transform: uppercase;
    color: rgb(165, 109, 5);
    background-color: #000;
    height: 7vh;
    width: 100%;
    border-top-left-radius: 18px;
    border-top-right-radius: 18px;
    text-align: center;
}
form input[type="submit"]{
    margin-left: 20%;
    margin-top: 5%;
    margin-right: 20%;
    height: 4vh;
    outline: none;
    border-radius: 20px;
    text-align: center;
    /* background-color: lightgrey; */
    border: 1px solid #000;
    background-color: transparent;
    color:rgb(61, 3, 61) ;
}
form input[type="submit"]:hover{
    transition: 0.25s ease-in-out;
    background-color: #000;
    color: white;
}
form input:focus::placeholder{
    transition: 0.25s ease-in-out;
transform: translateY(-10vh);
/* transform:translateX(-40vw) */
}
    </style>
    <title>Sign Up</title>
</head>
<body>
    <form action="db.php" method="post">
        <h2>Sign up</h2>
        <div>
        
        </div>
        <input type="text" name="phoneNumber" placeholder="Your phone number">
        <input type="text" name="userName" placeholder="Username">
        <input type="password" name="password" placeholder="Password(6-16) alphaneumerics">
        <input type="password" name="confirmPass" placeholder="confirm password">
        <input type="submit" name="submit">
    </form>
</body>
</html>