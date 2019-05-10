<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Compiled and minified CSS -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo BASE_URL_ASSETS ?>_css/_include/materialize.css">
        <link rel="stylesheet" href="<?php echo BASE_URL_ASSETS ?>_css/global.css">
        <link rel="stylesheet" href="<?php echo BASE_URL_ASSETS ?>_css/dashboard.css">

        <!-- Scripts -->
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script>
            $(document).ready(function(){
                $('.sidenav').sidenav();
                $('.collapsible').collapsible({
                    draggable: true
                });
                $('.dropdown-trigger').dropdown();
            });

        </script>


    <title>Matsuridaiko Management - Dashboard</title>

    
</head>