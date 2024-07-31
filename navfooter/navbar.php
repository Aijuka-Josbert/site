<?php

?>



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="technology,website development,webhosting services,software creation,Application development" />
    <title class="title" >BeyondCode</title>
   <!-- <link rel="stylesheet" href="style.css">-->
    <?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='navbar.css' />";

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playwrite+PL:wght@100..400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<script src="https://kit.fontawesome.com/e8d40fc3d7.js" crossorigin="anonymous"></script>


    <nav>
        <div class="menu-block">
            <div class="logo">
            <a href="index.php">BeyondCode</a>
            </div>
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                           
                <li><a href="service.php">Service</a> 
                <div class="dropdown">                      
                <ul class="dropdown-content">
                            <li><a href="webdev.php">Web Development</a></li>
                            <li><a href="appdev.php">App Development</a></li>
                            <li><a href="consulting.php">Consulting</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="blog.php">Blog</a></li>
            </ul>
            <div class="search-container">
                <input type="text" placeholder="Search" name="search">
                <button class="search-btn">Search</button>
            </div>
            <div class="login">
                <a href="./register.php">Login</a>
            </div>
            <button class="menu-toggle">&#9776;</button>
        </div>
    </nav>
    </head>

    <script src="navbar.js"></script>   
    </html>