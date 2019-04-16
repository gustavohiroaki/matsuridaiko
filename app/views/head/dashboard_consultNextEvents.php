<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Compiled and minified CSS -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo BASE_URL_ASSETS ?>_css/_include/materialize.css">
        <link rel="stylesheet" href="<?php echo BASE_URL_ASSETS ?>_css/global.css">
        <link rel="stylesheet" href="<?php echo BASE_URL_ASSETS ?>_css/dashboard.css">
        <style>
        .iframe-container {


        position: relative;
        }
        
        .iframe-container iframe {
            padding: 15px;
        border: 0;
        height: 1000px;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
        }
        
        /* 4x3 Aspect Ratio */
        .iframe-container-4x3 {
        padding-top: 75%;
        }
        </style>


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
            document.getElementById('calendar-frame').location.reload();
        </script>


    <title>Matsuridaiko Management</title>

    
</head>