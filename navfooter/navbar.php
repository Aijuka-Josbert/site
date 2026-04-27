<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<header class="site-header">
    <nav class="site-nav" aria-label="Main navigation">
        <div class="nav-inner">
            <a class="brand" href="index.php">BeyondCode</a>

            <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-menu">
                <span class="sr-only">Toggle navigation</span>
                &#9776;
            </button>

            <ul id="primary-menu" class="menu">
                <li><a class="<?php echo $currentPage === 'index.php' ? 'is-active' : ''; ?>" href="index.php">Home</a></li>
                <li><a class="<?php echo $currentPage === 'about.php' ? 'is-active' : ''; ?>" href="about.php">About</a></li>
                <li><a class="<?php echo $currentPage === 'service.php' ? 'is-active' : ''; ?>" href="service.php">Service</a></li>
                <li><a class="<?php echo $currentPage === 'blog.php' ? 'is-active' : ''; ?>" href="blog.php">Blog</a></li>
            </ul>

            <form class="search-container" action="blog.php" method="get" role="search">
                <label class="sr-only" for="site-search">Search site</label>
                <input id="site-search" type="search" name="q" placeholder="Search">
                <button class="search-btn" type="submit">Search</button>
            </form>

            <a class="login-btn" href="register.php">Login</a>
        </div>
    </nav>
</header>