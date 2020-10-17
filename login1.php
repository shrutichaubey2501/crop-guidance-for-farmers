<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login & signup form</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="wrapper">
        <div class="title-text">
            <div class="title login">Login Form</div>
            <div class="title signup">Signup Form</div>
        </div>
        <div class="form-container">
            <div class="slide-controls">
                <input type="radio" name="slider" id="login" checked>
                <input type="radio" name="slider" id="signup">
                <label for="login" class="slide login">Login</label>
                <label for="signup" class="slide signup">Signup</label>
                <div class="slide-tab"></div>
            </div>
            <div class="form-inner">
                <form method="post" action="result.php" class="login">
                    <div class="field">
                        <input type="text" name="id" placeholder="Email Address" required>
                    </div>
                    <div class="field">
                        <input type="password" name="pwd" placeholder="Password" required>
                    </div>
                    <div class="pass-link"><a href="#">Forgot Password?</a></div>
                    <div class="field">
                        <input type="submit" value="Login">
                    </div>
                    <div class="signup-link">Not a member?<a href="#">Signup now</a></div>
                </form>
                <form method="post" action="result1.php" class="signup">
                    <div class="field">
                        <input type="text" name="id" placeholder="Email Address" required>
                    </div>
                    <div class="field">
                        <input type="password" name="pwd" placeholder="Password" required>
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
    <script>
        const loginForm = document.querySelector("form.login");
        const signupForm = document.querySelector("form.signup");
        const loginBtn = document.querySelector("label.login");
        const signupBtn = document.querySelector("label.signup");
        const signupLink = document.querySelector(".signup-link a");
        const loginText = document.querySelector(".title-text .login");
        const signupText = document.querySelector(".title-text .signup");
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