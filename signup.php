<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signupS</title>
</head>
<body>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VRfodie login</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="https://kit.fontawesome.com/80a20c93f8.js" crossorigin="anonymous"></script>

</head>
<body>
    
    <!-- header section starts      -->

<header>

    <a href="#" class="logo"><i class="fas fa-utensils"></i>VRfodie</a>

    <nav class="navbar">
        <a href="/coderahul/loginsys/signup.php">signup</a>
        <a href="/coderahul/loginsys/signup.php">signup</a>
    </nav>

    <div class="icons">
        <a href="login.html" id="logIn" class="active">LogIn</a>
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
    
</body>
</html>