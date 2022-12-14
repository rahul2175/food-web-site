<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <script src="https://kit.fontawesome.com/80a20c93f8.js" crossorigin="anonymous"></script>
    
 <style>@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

:root{
    --crimson:#eb153d;
    --black:#192a56;
    --light-color:#666;
    --box-shadow:0 .5rem 1.5rem rgba(0,0,0,.1);
}


*{
    box-sizing: border-box;
    font-family: 'Nunito', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    text-decoration: none;
    outline: none; border:none;
    text-transform: capitalize;
    transition: all .2s linear;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 5.5rem;
    scroll-behavior: smooth;
}

section{
    padding:2rem 9%;
}

section:nth-child(even){
    background:#eee;
}

.sub-heading{
    text-align: center;
    color:var(--crimson);
    font-size: 2rem;
    padding-top: 1rem;
}

.heading{
    text-align: center;
    color:var(--black);
    font-size: 3rem;
    padding-bottom: 2rem;
    text-transform: uppercase;
}

.btn{
    margin-top: 1rem;
    display: inline-block;
    font-size: 1.7rem;
    color:#fff;
    background: var(--black);
    border-radius: .5rem;
    cursor: pointer;
    padding:.8rem 3rem;
}

.btn:hover{
    background: var(--crimson);
    letter-spacing: .1rem;
}

header{
    position: fixed;
    top:0; left: 0; right:0;
    background: #fff;
    padding:1rem 7%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 1000;
    box-shadow: var(--box-shadow);
}

header .logo{
    color:var(--black);
    font-size: 2.5rem;
    font-weight: bolder;
}

header .logo i{
    color:var(--crimson);
}

header .navbar a{
    font-size: 1.7rem;
    border-radius: .5rem;
    padding:.5rem 1.5rem;
    color:var(--light-color);
}

header .navbar a.active,
header .navbar a:hover{
    color:#fff;
    background: var(--crimson);
}

header .icons i,
header .icons a{
    cursor: pointer;
    margin-left: .5rem;
    height:4.5rem;
    line-height: 4.5rem;
    width:4.5rem;
    text-align: center;
    font-size: 1.7rem;
    color:var(--black);
    border-radius: 50%;
    background: #eee;
}
#logIn{
    font-size: 1.7rem;
    border-radius: 0.5rem;
    padding: 0.5rem 1.5rem;
}

header .icons i:hover,
header .icons a:hover{
    color:#fff;
    background: var(--crimson);
    transform: rotate(360deg);
}

header .icons #menu-bars{
    display: none;
}


/* -------About css start here------------- */

.container{
    width: 100%;
    height: 100vh;
    background-image: url("/images/bg1.jpg");
    background-position: center;
    background-size: cover;
    display: flex;
    align-items: center;
    justify-content: center;
}

.card{
    width: 90%;
    max-width: 390px;
    color: black;
    background: #eee;
    margin: 0 10px;
    text-align: center;
    padding: 50px 35px;
    /* border: 1px solid red; */
    border-radius: 15px;
}

.card img{
    width: 150px;
    border-radius: 50%;
}
.card h2{
    font-size: 40px;
    font-weight: 500;
    margin-top: 15px;
}
.card p{
    font-size: 15px;
    margin: 10px auto;
    max-width: 330px;
}
.card .links img{
    width: 60px;
    border-radius: 50%;
    margin: 10px 5px;
    transition: background 0.5s;
    /* filter: invert(100%); */
}
.card .links img:hover{
    background: skyblue;
}
</style>

</head>
<body>
<?php require "partials/_nav.php" ?>
    
    <!-- header section starts      -->

<header>

    <a href="#" class="logo"><i class="fas fa-utensils"></i>VRfodie</a>

    <nav class="navbar">
        <a href="/coderahul/loginsys/about.php">about</a>
    </nav>

    <div class="icons">
        <a href="loginsys/about.php" id="logIn" class="active">LogIn</a>
    </div>

</header>

    <div class="container">
        <div class="card">
            <img src="images/vcpost.jpg">
            <h2>Gahininath Nisargandh</h2>
          
            <div class="links">
                <a href="https://www.instagram.com/oye_its_your_vish/" target="_blank"><img src="images/inst.png"></a>
                <a href="https://twitter.com/oyeitsyourvish" target="_blank"><img src="images/twi.png"></a>
                <a href="https://www.linkedin.com/in/vishal-chinchane03/" target="_blank"><img src="images/link.png"></a>
                <a href="https://www.facebook.com/vishal.chinchane.589/" target="_blank"><img src="images/face.png"></a>
            </div>
            <button class="btn"> Founder </button>
        </div>
        <div class="card">
            <img src="images/vcpost.jpg">
            <h2>Vishal <br> Chinchane</h2>
            <div class="links">
                <a href="https://www.instagram.com/oye_its_your_vish/" target="_blank"><img src="images/inst.png"></a>
                <a href="https://twitter.com/oyeitsyourvish" target="_blank"><img src="images/twi.png"></a>
                <a href="https://www.linkedin.com/in/vishal-chinchane03/" target="_blank"><img src="images/link.png"></a>
                <a href="https://www.facebook.com/vishal.chinchane.589/" target="_blank"><img src="images/face.png"></a>
            </div>
            <button class="btn"> Founder </button>
        </div>
        <div class="card">
            <img src="images/ra.jfif">
            <h2>Rahul <br> Bhagat</h2>
            <div class="links">
                <a href="https://www.instagram.com/oye_its_your_vish/" target="_blank"><img src="images/inst.png"></a>
                <a href="https://twitter.com/oyeitsyourvish" target="_blank"><img src="images/twi.png"></a>
                <a href="https://www.linkedin.com/in/vishal-chinchane03/" target="_blank"><img src="images/link.png"></a>
                <a href="https://www.facebook.com/vishal.chinchane.589/" target="_blank"><img src="images/face.png"></a>
            </div>
            <button class="btn"> Founder </button>
        </div>
    </div>




</body>

</html>