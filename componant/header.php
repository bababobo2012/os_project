<?php session_start(); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">OS_project</a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-item nav-link text-uppercase active" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-item nav-link text-uppercase " href="about.php">About</a>
            </li>
        </ul>
        <?php if(!isset($_SESSION['user_id'])){ ?>
            <a class="nav-item nav-link text-uppercase " href="login.php">login</a>
        <?php }else{ ?>
            <a><?php print($_SESSION['username']); ?></a>
            <a href="php_backend/php_logout.php"> logout</a>
        <?php } ?>
    </div>
</nav>