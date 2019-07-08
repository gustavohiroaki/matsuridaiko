<!DOCTYPE html>
<html>
<?php 
    require '../../config/const.php';
    $apiConnect = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    $apiConnect->set_charset("utf8");
    $sql = "SELECT * FROM events";
    $qry = $apiConnect->query($sql);
?>
<head>
<meta charset='utf-8' />
<link href='packages/core/main.css' rel='stylesheet' />
<link href='packages/daygrid/main.css' rel='stylesheet' />
<link href='packages/timegrid/main.css' rel='stylesheet' />
<script src='packages/core/main.js'></script>
<script src='packages/interaction/main.js'></script>
<script src='packages/daygrid/main.js'></script>
<script src='packages/timegrid/main.js'></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    
    
    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
      editable: true,
      locale: 'pt-br',
      eventLimit: true, // allow "more" link when too many events
      views: {
        timeGrid: {
          eventLimit: 5
        }
      },
      height: 500,
      header: {
        left: 'prev,next today myCustomButton',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek'
      },
      events: [
        
        <?php while($data = $qry->fetch_assoc()){ ?>
        {
          title: '<?php echo $data["name_event"]; ?>',
          start: '<?php echo $data["dateinit_event"]; ?>',
          end:   '<?php echo $data["datefin_event"]; ?>',
          url:   "<?php echo BASE_URL ?>events/details/<?php echo $data["id_event"]; ?>",
        },
        <?php } ?>
      ]
    });

    calendar.render();
  });

</script>
<style>

  body {
    margin: 40px 10px;
    padding: 0;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
  }

  #calendar {
    max-width: 900px;
    margin: 0 auto;
  }

</style>
</head>
<body>

  <div id='calendar'></div>

</body>
</html>
