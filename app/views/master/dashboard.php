<!DOCTYPE html>
<html lang="en">
<?php $this->load_head();?>
<body>

<!-- Sidenav -->

<ul class="sidenav sidenav-fixed collapsible">
    <div class="sidenav-prop">
        <div id="avatar">
            <img id="avatar-img" src="https://picsum.photos/300/300" alt="">
            <h4 id="avatar-name">Gustavo Hiroaki Imafuku</h4>
            <h5 id="avatar-branch">Guarulhos</h5>
        </div>
    </div>
    
    <li><a class="waves-effect collapsible-header">Integrantes</a>
        <div class="collapsible-body">
            <ul>
                    <li><a href="<?php echo BASE_URL ?>register/member" class="red lighten-5">Cadastro de Integrantes</a></li><!-- Only for admin -->
                <li><a href="<?php echo BASE_URL ?>consult/member">Membros</a></li>
                <li><a href="<?php echo BASE_URL ?>consult/junior">Juniors</a></li>
                <li><a href="<?php echo BASE_URL ?>consult/shinjin">Shinjins</a></li>
            </ul>
        </div>
    </li>

    <li><a class="waves-effect collapsible-header">Eventos</a>
        <div class="collapsible-body">
            <ul>
                    <li><a href="<?php echo BASE_URL ?>register/event" class="red lighten-5">Cadastro de Eventos</a></li><!-- Only for admin -->
                    <li><a href="<?php echo BASE_URL ?>register/event" class="red lighten-5">Alteração de dados de Eventos</a></li><!-- Only for admin -->
                <li><a href="<?php echo BASE_URL ?>consult/pastEvents">Eventos Anteriores</a></li>
                <li><a href="<?php echo BASE_URL ?>consult/nextEvents">Próximos Eventos</a></li>
            </ul>
        </div>
    </li>

    <li><a class="waves-effect collapsible-header">Repertório Musical</a>
        <div class="collapsible-body">
            <ul>
                    <li><a href="#" class="red lighten-5">Cadastro de Repertório</a></li><!-- Only for admin -->
                    <li><a href="#" class="red lighten-5">Cadastro de Downloads</a></li><!-- Only for admin -->
                    <li><a href="#" class="red lighten-5">Cadastro de Repertório Global</a></li><!-- Only for admin -->
                <li><a href="#">Repertório Atual</a></li>
                <li><a href="#">Download de Músicas</a></li>
                <li><a href="#">Repertório Global</a></li>
                <li><a href="#">Disponibilidade dos Membros</a></li>
            </ul>
        </div>
    </li>

    <li><a class="waves-effect collapsible-header">Requisições</a>
        <div class="collapsible-body">
            <ul>
                    <li><a href="#" class="red lighten-5">Consulta de Requisições</a></li><!-- Only for admin -->
                <li><a href="#">Uniforme</a></li>
            </ul>
        </div>
    </li>

    <li><a class="waves-effect collapsible-header">Pagamentos</a>
        <div class="collapsible-body">
            <ul>
                <li><a href="#">Pagamentos Efetuados</a></li>
            </ul>
        </div>
    </li>
    
    
</ul>


<ul id="slide-out" class="sidenav collapsible hide-on-large-only">
    <div class="sidenav-prop">
        <div id="avatar">
            <img id="avatar-img" src="https://picsum.photos/300/300" alt="">
            <h3 id="avatar-name">Gustavo Hiroaki Imafuku</h3>
            <h5 id="avatar-branch">Guarulhos</h5>
        </div>
    </div>


    <li><a class="waves-effect collapsible-header">Integrantes</a>
        <div class="collapsible-body">
            <ul>
                    <li><a href="<?php echo BASE_URL ?>register/member" class="red lighten-5">Cadastro de Integrantes</a></li><!-- Only for admin -->
                <li><a href="<?php echo BASE_URL ?>consult/member">Membros</a></li>
                <li><a href="<?php echo BASE_URL ?>consult/junior">Juniors</a></li>
                <li><a href="<?php echo BASE_URL ?>consult/shinjin">Shinjins</a></li>
            </ul>
        </div>
    </li>

    <li><a class="waves-effect collapsible-header">Eventos</a>
        <div class="collapsible-body">
            <ul>
                    <li><a href="<?php echo BASE_URL ?>register/event" class="red lighten-5">Cadastro de Eventos</a></li><!-- Only for admin -->
                    <li><a href="<?php echo BASE_URL ?>consult/pastEvents">Eventos Anteriores</a></li>
                <li><a href="<?php echo BASE_URL ?>consult/nextEvents">Próximos Eventos</a></li>
            </ul>
        </div>
    </li>

    <li><a class="waves-effect collapsible-header">Repertório Musical</a>
        <div class="collapsible-body">
            <ul>
                    <li><a href="#" class="red lighten-5">Cadastro de Repertório</a></li><!-- Only for admin -->
                    <li><a href="#" class="red lighten-5">Cadastro de Downloads</a></li><!-- Only for admin -->
                    <li><a href="#" class="red lighten-5">Cadastro de Repertório Global</a></li><!-- Only for admin -->
                <li><a href="#">Repertório Atual</a></li>
                <li><a href="#">Download de Músicas</a></li>
                <li><a href="#">Repertório Global</a></li>
                <li><a href="#">Disponibilidade dos Membros</a></li>
            </ul>
        </div>
    </li>

    <li><a class="waves-effect collapsible-header">Requisições</a>
        <div class="collapsible-body">
            <ul>
                    <li><a href="#" class="red lighten-5">Consulta de Requisições</a></li><!-- Only for admin -->
                <li><a href="#">Uniformes</a></li>
            </ul>
        </div>
    </li>

    <li><a class="waves-effect collapsible-header">Pagamentos</a>
        <div class="collapsible-body">
            <ul>
                <li><a href="#">Pagamentos Efetuados</a></li>
            </ul>
        </div>
    </li>

    
    <li id="sidenav-logout"><a href="<?php echo BASE_URL.'login/logout'; ?>" class="waves-effect"><i class="material-icons left">vpn_key</i>Logout</a></li>
</ul>

<!-- /Sidenav -->



<!-- Nav -->
<div class="navbar-fixed">
<nav class="white">
    <div class="nav-wrapper">
        <a href="#" data-target="slide-out" class="sidenav-trigger hide-on-large-only"><i class="material-icons">menu</i></a>
        <a href="<?php echo BASE_URL ?>dashboard" class="brand-logo"><img class="logo" src="<?php echo BASE_URL_ASSETS ?>_img/logo.png" alt="Logo Matsuridaiko"></a>
        
        
        <ul class="right">
            <li class="hide-on-med-and-down"><a class="dropdown-trigger" data-target="dropdown-notification"><i class="material-icons left">notifications</i><span class="red lighten-2 new badge">2</span></a></li>

                <ul id="dropdown-notification" class="dropdown-content">
                    <li><a href="#">Notificacao 1</a></li>
                    <li><a href="#"> Notificacao 2</a></li>
                </ul>


            <li class="hide-on-med-and-down"><a href="<?php echo BASE_URL.'login/logout'; ?>"><i class="material-icons left">vpn_key</i>Logout</a></li>
        </ul>


    </div>
</nav>
</div>
<!-- /Nav -->
<main class="dash-container">
<?php $this->load_body(); ?>

<?php $this->load_script(); ?>
</main>
</body>
</html>