<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sign in or create a BeyondCode account.">
    <title>BeyondCode | Register</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="navfooter/navbar.css">
    <link rel="stylesheet" href="navfooter/footer.css">
    <link rel="stylesheet" href="register.css">
</head>
<body>
<div class="page-wrap">
    <?php include('navfooter/navbar.php'); ?>

    <main class="auth-main">
        <section class="auth-panel" aria-label="Authentication forms">
            <div class="auth-intro">
                <p class="hero-kicker">Account Access</p>
                <h1>Welcome back to BeyondCode</h1>
                <p>Sign in to manage your requests, or create a new account to start a project with us.</p>
            </div>

            <div class="auth-card" id="signIn">
                <h2>Sign In</h2>
                <form action="authentication.php" method="post" name="signIn" class="auth-form">
                    <label for="signin-email">Email</label>
                    <input type="email" name="email" id="signin-email" placeholder="you@example.com" required>

                    <label for="signin-password">Password</label>
                    <input type="password" name="password" id="signin-password" placeholder="Enter password" required>

                    <p class="recover"><a href="#">Forgot Password?</a></p>

                    <button type="submit" class="btn form-submit" name="signIn">Sign In</button>
                </form>

                <div class="auth-switch">
                    <p>Don't have an account yet?</p>
                    <button id="signUpButton" type="button">Sign Up</button>
                </div>
            </div>

            <div class="auth-card" id="signUp" style="display:none;">
                <h2>Create Account</h2>
                <form action="authentication.php" method="post" name="signUp" class="auth-form">
                    <label for="signup-fname">First Name</label>
                    <input type="text" name="fname" id="signup-fname" placeholder="First name" required>

                    <label for="signup-lname">Last Name</label>
                    <input type="text" name="lname" id="signup-lname" placeholder="Last name" required>

                    <label for="signup-email">Email</label>
                    <input type="email" name="email" id="signup-email" placeholder="you@example.com" required>

                    <label for="signup-password">Password</label>
                    <input type="password" name="password" id="signup-password" placeholder="Create password" required>

                    <button type="submit" class="btn form-submit" name="signUp">Sign Up</button>
                </form>

                <div class="auth-switch">
                    <p>Already have an account?</p>
                    <button id="signInButton" type="button">Sign In</button>
                </div>
            </div>
        </section>
    </main>

    <?php include('navfooter/footer.php'); ?>
</div>

<script src="navfooter/navbar.js"></script>
<script src="register.js"></script>
</body>
</html>