<!DOCTYPE html>
<html lang="en">

<?php $this->load_head(); ?>

<body>


<!-- nav -->
<nav id="home">
<div class="nav-wrapper container">
    
        <a href="<?php echo BASE_URL ?>" class="brand-logo"><img class="logo" src="<?php echo BASE_URL_ASSETS ?>_img/logo.png" alt="Matsuridaiko Logo"></a>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>

        <ul class="right hide-on-med-and-down">
            <li><a href="<?php echo BASE_URL ?>">Home</a></li>
            <!-- <li><a href="<?php echo BASE_URL ?>about">Sobre</a></li> -->
            <li><a href="<?php echo BASE_URL ?>contact">Contato</a></li>
            <li><a href="<?php echo BASE_URL ?>login">Login</a></li>
        </ul>


    <ul id="nav-mobile" class="sidenav">
        <li><a href="<?php echo BASE_URL ?>">Home</a></li>
        <!-- <li><a href="<?php echo BASE_URL ?>about">Sobre</a></li> -->
        <li><a href="<?php echo BASE_URL ?>contact">Contato</a></li>
        <li><a href="<?php echo BASE_URL ?>login">Login</a></li>
    </ul>
</div>
</nav>
<!-- /nav -->



<?php $this->load_body(); ?>





<?php $this->load_script(); ?>
</body>
</html>