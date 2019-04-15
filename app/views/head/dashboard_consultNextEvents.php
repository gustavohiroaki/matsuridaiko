<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Compiled and minified CSS -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo BASE_URL_ASSETS ?>_css/_include/materialize.css">
        <link rel="stylesheet" href="<?php echo BASE_URL_ASSETS ?>_css/global.css">
        <link rel="stylesheet" href="<?php echo BASE_URL_ASSETS ?>_css/dashboard.css">
        <link rel="stylesheet" href="<?php echo BASE_URL_ASSETS ?>fullCalendar/core/main.css">
        <link rel="stylesheet" href="<?php echo BASE_URL_ASSETS ?>fullCalendar/daygrid/main.css">

        <!-- Scripts -->
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="<?php echo BASE_URL_ASSETS ?>fullCalendar/daygrid/main.js"></script>
        <script src="<?php echo BASE_URL_ASSETS ?>fullCalendar/interaction/main.js"></script>
        <script src="<?php echo BASE_URL_ASSETS ?>fullCalendar/core/main.js"></script>
        <script>



            // FullCalendar v4

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: [ 'dayGrid' ]
            });

            calendar.render();
        });

        </script>


    <title>Matsuridaiko Management</title>

    
</head>