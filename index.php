<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Slide Animation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="all.min.css">
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="sign_up_in.php" class="sign-in-form" method="post">
                    <h2 class="title">Sign In</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username or Email" required name="username"/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" class="pass-input" required name="password"/>
                        <i class="fas fa-eye toggle-pass" style="cursor: pointer; color: #acacac;"></i>
                    </div>
                    
                    <input type="submit" value="Login" class="btn solid" name="signin"/>
                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon google"><i class="fab fa-google"></i></a>
                        <a href="#" class="social-icon linkedin"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </form>

                <form action="sign_up_in.php" class="sign-up-form" method="post">
                    <h2 class="title">Sign Up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" required name="username"/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" required name="email"/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" class="pass-input" required name="password"/>
                        <i class="fas fa-eye toggle-pass" style="cursor: pointer; color: #acacac;"></i>
                    </div>
                    
                    <input type="submit" class="btn" value="Sign up" name="signup"/>
                    <p class="social-text">Or Sign up with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon google"><i class="fab fa-google"></i></a>
                        <a href="#" class="social-icon linkedin"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here?</h3>
                    <p>Sign up and join us</p>
                    <button class="btn transparent" id="sign-up-btn">Sign Up</button>
                </div>
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us?</h3>
                    <p>Login with your account</p>
                    <button class="btn transparent" id="sign-in-btn">Sign In</button>
                </div>
            </div>
        </div>
    </div>
    <script src="design.js"></script>
</body>
</html>