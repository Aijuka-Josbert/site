<?php
// include('config/db_connect.php');
// session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php include('navfooter/navbar.php');  ?>
<?php echo "<link rel='stylesheet' type='text/css' href='navfooter/navbar.css' />"; ?>
<?php echo "<link rel='stylesheet' type='text/css' href='register.css' />";  ?>

<!-- <div style="text-align: center; padding: 5%;">
    <p style="font-size: 20px; font-weight:bold;">
        
         <?php
        // if(isset($_SESSION['email'])){
        //     $email = $_SESSION['email'];
        //     $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
        //     while ($row = mysqli_fetch_array($query)) {
        //         echo $row['firstName'] . ' ' . $row['lastName'];
        //     }
        // }
        ?>
        
    </p>
     <a href="logout.php">logout</a> -->
<!-- </div> --> 

<div class="container8" id="signUp" style="display:none;">
    <h1 class="form-title">Register</h1>
    <form action="authentication.php" method="post" name="signUp">
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="fname" id="fname" placeholder="First Name" required>
            <label for="fname">First Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lname" id="lname" placeholder="Last Name" required>
            <label for="lname">Last Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
        <input type="submit" class="btn-5" value="Sign Up" name="signUp">
    </form>
    <p class="or">
        <span class="line"></span>
        <span class="text">or</span>
    </p>
    <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-linkedin"></i>
        <i class="fab fa-facebook"></i>
    </div>
    <div class="links">
        <p>Already Have An Account?</p>
        <button id="signInButton">Sign In</button>
    </div>
</div>

<div class="container8" id="signIn">
    <h1 class="form-title">Sign In</h1>
    <form action="authentication.php" method="post" name="signIn">
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" >
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password">
            <label for="password">Password</label>
        </div>
        <p class="recover">
            <a href="#">Forgot Password?</a>
        </p>
        <input type="submit" class="btn-5" value="Sign In" name="signIn">
    </form>
    <p class="or">
        <span class="line"></span>
        <span class="text">or</span>
    </p>
    <div class="icons">
        <a href="google.com"><i class="fab fa-google"></i></a>
        <a href="linkedin.com"><i class="fab fa-linkedin"></i></a>
        <a href="facebook.com"><i class="fab fa-facebook"></i></a>
    </div>
    <div class="links">
        <p>Don't Have An Account Yet?</p>
        <button id="signUpButton">Sign Up</button>
    </div>
</div>
<script language="JavaScript" src="register.js"></script>
<?php include('navfooter/footer.php'); ?>
</html>