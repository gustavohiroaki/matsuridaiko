<!DOCTYPE html>
<html lang="en">
<?php $this->load_head(); ?>
<body>


<!-- nav -->
<nav id="home">
<div class="nav-wrapper container">
    
        <a href="<?php echo BASE_URL ?>" class="brand-logo"><img class="logo" src="<?php echo BASE_URL ?>assets/_img/logo.png" alt="Matsuridaiko Logo"></a>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>

        <ul class="right hide-on-med-and-down">
            <li><a href="<?php echo BASE_URL ?>">Home</a></li>
            <li><a href="<?php echo BASE_URL ?>about">Sobre</a></li>
            <li><a href="<?php echo BASE_URL ?>contact">Contato</a></li>
            <li><a href="<?php echo BASE_URL ?>login">Login</a></li>
        </ul>
</nav>

    <ul id="nav-mobile" class="sidenav">
        <li><a href="<?php echo BASE_URL ?>index">Home</a></li>
        <li><a href="<?php echo BASE_URL ?>about">Sobre</a></li>
        <li><a href="<?php echo BASE_URL ?>contact">Contato</a></li>
        <li><a href="<?php echo BASE_URL ?>login">Login</a></li>
    </ul>
</div>

<!-- /nav -->

<?php $this->load_body(); ?>

<!-- footer -->
<footer class="page-footer white">
    <div class="container row">
        <div class="col s12 l6"><h5>Matsuridaiko Guarulhos</h5></div>

        <div class="col s12 l6">
                <h5>Links</h5>
                <ul>
                  <li><a href="#!">Link 1</a></li>
                  <li><a href="#!">Link 2</a></li>
                </ul>
        </div>

    </div>
</footer>
<!-- /footer -->


<?php $this->load_script(); ?>
</body>
</html>