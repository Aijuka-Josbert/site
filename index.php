<?php
session_start();
 include('config/db_connect.php');
// session_start();

?>

<!DOCTYPE html>

<html lang="en">
<?php include('navfooter/navbar.php');  ?>
<?php echo "<link rel='stylesheet' type='text/css' href='navfooter/navbar.css' />"; ?>
<?php echo "<link rel='stylesheet' type='text/css' href='inde.css' />";  ?>
<!-- <div style="text-align: center; padding: 5%;">
    <p style="font-size: 20px; font-weight:bold;">
        
    <?php
        // if(isset($_SESSION['email'])){
        //     $email = $_SESSION['email'];
        //     $query = mysqli_query($conn, "SELECT * FROM users WHERE Email='$email'");
        //     while ($row = mysqli_fetch_array($query)) {
        //         echo $row['FirstName'] . ' ' . $row['LastName'];
        //     }
        // }
        ?>
        
    </p>
     <a href="logout.php">logout</a>
 </div  -->

<section class="home" id="home">
        <div class="container">
            <div class="sideimage1">
                <img src="./indimges/welcomerimg.jpeg" alt="there's an image here" width="500" height="200">
            </div>
            <div class="content">
                <h1>WELCOME OUR CLIENTS</h1>
                <h4>A Software Development Company </h4>
                <p>Engage With Us, <span>We Build Your Imagination.</span></p>
                <a href="about.php" class="btn">About Us</a>
                <a href="tel:+256759420168"><button class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-forward-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zm10.761.135a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708"/>
                        </svg>Contact Us</button></a>
            </div>
        </div>
    </section>

    <section class="some-info" id="some-info">
        <h4 class="center green-text">Details On Us</h4>
        <div class="some-content">
            <p>We are a software company ready to serve you in all of technological help you may need be <em>website development, mobile Application, webhosting, Domain services and any other <br>software you may be interested in we got you.</em></p>
            <p>Come we work on customer Imagination into reality at the cheap affordable prices in Uganda trust us with your project we deliver it with best quality as we have the best designers and programmers to make sure it happens. <br>We will be happy when you our dear client reaches on to us.<br>We are Located on Kyaliwajjala-Namugongo road opposite crane gardens.</p>
        </div>
    </section>

    <section class="product">
        <div class="container-1">
            <div class="products">
                <h5 class="center green-text">Our Products</h5>
                <div class="product-content">
                    <div class="product-list">
                        <div class="product-item">
                            <ul>
                                <li>Domain Services</li>
                                <li>Web Hosting</li>
                                <li>Website Development</li>
                                <li>Mobile Application Development</li>
                                <li>Software Development</li>
                                <li>Web Designing</li>
                            </ul>
                        </div>
                    </div>
                    <a href="service.php"> <button class="center btn">Click here for More Info.</button></a>
                </div>
            </div>
        </div>
    </section>

    <section class="feedback" name="feedback">
        <h5 class="center green-text">Feedback From Some Of Our Clients</h5>
        <div class="row row-cols-1 row-cols-md-3 g-4 card-container">
            <div class="col">
                <div class="card h-100">
                    <img src="./indimges/card/samie.png" class="card-img-top" alt="samie" height="150" width="150">
                    <div class="card-body">
                        <h5 class="card-title">Deputy UBOS</h5>
                        <p class="card-text">I reached out to them to build a website for our business and can't believe their work as they truly outdid themselves and made it in a way that is user friendly. Thanks.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="./indimges/card/comfy.png" class="card-img-top" alt="comfy" height="150" width="150">
                    <div class="card-body">
                        <h5 class="card-title">Lawyer At Uganda High court</h5>
                        <p class="card-text">I can't believe their work as they met every request I made and turned great as well as they are easily accessed in need of changes.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="./indimges/card/hamza.png" class="card-img-top" alt="Hamza" height="150" width="150">
                    <div class="card-body">
                        <h5 class="card-title">CEO MultiTech</h5>
                        <p class="card-text">Incredible work as I reached out to them in need of a banking system. It was done on time and perfected as well as taught us how to operate it. Great work.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="./indimges/card/esi.png" class="card-img-top" alt="esi" height="150" width="150">
                    <div class="card-body">
                        <h5 class="card-title">Marketing Director Aviation</h5>
                        <p class="card-text">Amazing team work and commitment from them. I give them a five star for their cooperation.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sponsor" name="sponsor">
        <h5 class="center green-text">Some Of Our Partners Include</h5>
        <div class="img-sponsor">
            <img src="./indimges/products/sponsors/airbnb.png" alt="airbnb" width="150" height="120" title="airbnb.com">
            <img src="./indimges/products/sponsors/nasa.png" alt="nasa" width="150" height="120" title="nasa.gov">
            <img src="./indimges/products/sponsors/slack.png" alt="slack" width="150" height="120" title="slack.com">
            <img src="./indimges/products/sponsors/umu.png" alt="uganda martyrs university" width="150" height="120" title="umu.ac.ug">
            <img src="./indimges/products/sponsors/x.png" alt="x" width="150" height="120" title="x.com">
            <img src="./indimges/products/sponsors/thinkx.png" alt="Thinkx software compny" width="150" height="120" title="thinkxsoftware.com">
        </div>
    </section>

<script src="inde.js"></script>
<?php include('<navfooter/footer.php');  ?>


</html>