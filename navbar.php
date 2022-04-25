
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
    
        <a href="" class="navbar-brand"><?php echo $app_name ?></a>
        <div class="">
            <ul class="navbar-nav">
                <?php if (empty($_SESSION)) : ?>
                    <li class="nav-item">
                        <a href="register.php" class="nav-link">Register</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">Login</a>
                    </li>
                <?php else : ?>
                   
                <?php endif; ?>

            </ul>
        </div>

    </div>
</nav>
