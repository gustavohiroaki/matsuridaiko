<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Compiled and minified CSS -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo BASE_URL_ASSETS ?>_css/_include/materialize.css">
        <link rel="stylesheet" href="<?php echo BASE_URL_ASSETS ?>_css/_include/jquery-ui.min.css">
        <link rel="stylesheet" href="<?php echo BASE_URL_ASSETS ?>_css/_include/jquery.simple-dtpicker.css">
        <link rel="stylesheet" href="<?php echo BASE_URL_ASSETS ?>_css/global.css">
        <link rel="stylesheet" href="<?php echo BASE_URL_ASSETS ?>_css/dashboard.css">

        
<style>
.row{
    padding: 20px 10px 0 10px;
    border: 1px solid rgba(0,0,0,.45);
    border-radius: 3px;
}
</style>
        <!-- Scripts -->
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="<?php echo BASE_URL_ASSETS ?>_js/_include/jquery-ui.min.js"></script>
<script src="<?php echo BASE_URL_ASSETS ?>_js/_include/jquery.simple-dtpicker.js"></script>
<script src="<?php echo BASE_URL_ASSETS ?>_js/_include/jquery.mask.min.js"></script>
<script>
      $(document).ready(function(){
        //Materialize
        
        $('.sidenav').sidenav();
        $('.collapsible').collapsible({
            draggable: true
        });
        $('.dropdown-trigger').dropdown();
        $(document).ready(function(){
            $('select').formSelect();
        });

        $('.datepicker').datepicker({ dateFormat: 'dd-mm-yy' });
        // Materialize


    });

</script>

    <title>Matsuridaiko Management</title>

    
</head>