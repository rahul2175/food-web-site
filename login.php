<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VRfodie login</title>
    <script src="https://kit.fontawesome.com/80a20c93f8.js" crossorigin="anonymous"></script>
    <style>
        
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

:root{
    --crimson:#eb153d;
    --black:#192a56;
    --light-color:#666;
    --box-shadow:0 .5rem 1.5rem rgba(0,0,0,.1);
}


*{
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
/*----------- Login page css start here ----------------*/
.main-content{
    display: grid;
    height: 100vh;
    width: 100%;
    place-items: center;
    /* background: #eee; */
    background-image: url("/images/bg1.jpg");
    background-position: center;
    background-size: cover;
}
.wrapper{
    overflow: hidden;
    max-width: 390px;
    background: #fff;
    padding: 30px;
    border-radius: 5px;
    box-shadow: 0 15px 20px rgba(0, 0, 0, 0.1);
}

.wrapper .tittle-text{
    display: flex;
    width: 200%;
}

.wrapper .tittle-text .tittle{
    width: 50%;
    font-size: 35px;
    font-weight: 600;
    text-align: center;
    transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .form-container{
    width: 100%;
    overflow: hidden;
}

.form-container .slide-control{
    position: relative;
    display: flex;
    height: 50px;
    width: 100%;
    overflow: hidden;
    border-radius: 5px;
    margin: 30px 0 10px 0;
    justify-content: space-between;
    border: 1px solid lightgray;
}

.slide-control .slide{
    height: 100%;
    width: 100%;
    z-index: 1;
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    text-align: center;
    line-height: 50px;
    cursor: pointer;
    transition: all 0.6s ease;
}

.slide-control .signup{
    color: #000;
}
.slide-control .slide-tab{
    position: absolute;
    height: 100%;
    width: 50%;
    left: 0;
    z-index: 0;
    border-radius: 5px;
    transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    background: -webkit-linear-gradient(left, #a445f2, #fa4299);
}

input[type="radio"]{
    display: none;
}
#signup:checked ~ .slide-tab{
    left: 50%;
}
#signup:checked ~ .signup{
    color: #fff;
}
#signup:checked ~ .login{
    color: #000;
}
.form-container .form-inner{
    display: flex;
    width: 200%;
}
.form-container .form-inner form{
    width: 50%;
    transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.form-inner form .field{
    height:50px;
    width: 100%;
    margin-top: 20px;

}

.form-inner form .field input{
    height: 100%;
    width: 100%;
    outline: none;
    padding-left: 15px;
    font-size: 17px;
    border-radius: 5px;
    border: 2px solid lightgray;
    border-bottom-width: 2px;
    transition: all 0.4s ease;
}

.form-inner form .field input:focus{
    border-color: #fc83bb;
}
.form-inner form .pass-link{
    margin-top: 5px;
}

.form-inner form .pass-link a,
.form-inner form .signup-link a{
    color: #fa4299;
    text-decoration: none;
    font-size: 14px;
}

.form-inner form .signup-link{
    font-size: 15px;
    text-align: center;
    margin-top: 30px;
}
.form-inner form .pass-link a:hover,
.form-inner form .signup-link a:hover{
    text-decoration: underline;
}

form .field input[type="submit"]{
    color: #fff;
    font-size: 20px;
    font-weight: 500;
    padding-left: 0px;
    border: none;
    cursor: pointer;
    background: -webkit-linear-gradient(left, #a445f2, #fa4299);
}

    </style>

</head>
<body>
    <?php require "partials/_nav.php" ?>
    
    <!-- header section starts      -->

<header>

    <a href="#" class="logo"><i class="fas fa-utensils"></i>VRfodie</a>

    <nav class="navbar">
        <a href="/coderahul/loginsys/login.php">home</a>
    </nav>

    <div class="icons">
        <a href="login.php" id="logIn" class="active">LogIn</a>
    </div>

</header>

    
<div class="main-content">
    <div class="wrapper">
        <div class="tittle-text">
            <div class="tittle login">Login</div>
            <div class="tittle signup">Signup</div>
        </div>
        
        <div class="form-container">
        <div class="slide-control">
               <input type="radio" name="slider" id="login" checked>
               <input type="radio" name="slider" id="signup">
               <label for="login" class="slide login">Login</label>
               <label for="signup" class="slide signup">Signup</label>
                <div class="slide-tab"></div>
        </div>


            <div class="form-inner">
                <form action="#" class="Login">
                    <div class="field">
                        <input type="text" placeholder="Email/Phone no." required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Password" required>
                    </div>

                    <div class="pass-link"><a href="#">Forgot Password</a></div>
                    
                    <div class="field">
                        <input type="submit" value="Login">
                    </div>

                    <div class="signup-link">Not a Member?<a href="#">Signup</a></div>
                    
                </form>


                <form action="#" class="Signup">
                    <div class="field">
                        <input type="text" placeholder="Email Address" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Password" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Confirm Password" required>
                    </div>
                    
                    <div class="field">
                        <input type="submit" value="Signup">
                    </div>

                    
                    
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    const loginForm = document.querySelector("form.Login");
    const signupForm = document.querySelector("form.Signup");
    const loginBtn = document.querySelector("label.login");
    const signupBtn = document.querySelector("label.signup");
    const signupLink = document.querySelector(".signup-link a");
    const loginText = document.querySelector(".tittle-text .login");
    const signupText = document.querySelector(".tittle-text .signup");
    signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
    });
    loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
    });
    signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
    });
    


</script>

</body>

</html>