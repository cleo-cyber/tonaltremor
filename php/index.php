
<?php include 'head.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
         .close{
    width: 25px;
    height: 25px;
    background-image: url("../images/close2.png");
    background-size: cover;
    background-repeat: no-repeat;
    position: fixed;
    top: 5vh;
    left: 5px;
    z-index: 1050;
    cursor: pointer;
    background-color: #fff;
    border-radius: 30%;

}
 .close:hover{
    transition: 0.25s;
    transform: rotate(45deg);
    transform: scale(1.1);
    opacity: 0.7;
}
    </style>
    <title>Document</title>
</head>

<body>
 <?php include 'header.php'?>
 <div class="close" onclick="toggleMenu()"></div>
   <section id="hero_section">
    <div class="sidebar">
        
        <h3>Explore</h3>
       
   <ul>
       <li><a href="#"><i class='bx bx-equalizer bx-flip-vertical' ></i>Recent</a></li>
        <li><a href="#"><i class='bx bxs-music'></i>Popular</a></li>
        <li><a href="#"><i class='bx bx-trending-up'></i>Trending</a></li>
        <li><a href="#"><i class='bx bxs-right-arrow'></i>Most Listned to</a></li>
    </ul>
   
    <div class="signup">
        <button><a href="#">Login</a></button>
   
    </div>
    </div>

    <!-- <div class="cards" style="position: absolute;left:25.9vw;top:13vh">
    <div class="slider" style="display: flex; margin-left:5vw" >
        <img src="../images/back1.jpg" alt="">
        <img src="../images/stage.avif" alt="">
        <img src="../images/concert.avif" alt="">
        <img src="../images/guitar.avif" alt="">
        <img src="../images/sing.avif" alt="">
    </div>
    </div> -->
   </section> 

 <script>
 var toggleStatus=1;
 function toggleMenu(){
    if(toggleStatus==1){
        document.getElementsByClassName('sidebar').style.left="-25vw";
        toggleStatus=0;
    }else if(toggleStatus==0){
        document.getElementsByClassName('sidebar').style.left="25vw";
        toggleStatus=1;
    }
 }
 </script>
</body>
</html>