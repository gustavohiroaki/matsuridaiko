<?php 
    $data = $this->params;
    // echo '<pre>';
    // print_r($data);
?>

<div class="row">

    <div class="col s12 m4 l4">
        <div class="card teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center">Próximos Eventos</span>
                <div class="center" style="overflow-y: scroll;height: 80px">
                
                    <ul>
                        <?php foreach($data["events"] as $event){ ?>
                            <li><a href="#" style="color: white;">
                                <?php echo $event->name_event; ?>
                            </a></li>
                        <?php } ?>
                    </ul>
                
                </div>
            </div>

            <div class="card-action center">
                <a class="center" id="table-events">Tabela de Eventos</a>
            </div>
        </div>
    </div>

    <div class="col s12 m4 l4">
        <div class="card teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center">Recados Dados</span>
            <div class="center" style="overflow-y: scroll;height: 80px" >
                <ul>
                    <?php foreach($data["message"] as $message){ ?>
                        <li><a href="#" style="color: white;">
                            <?php echo $message->message; ?>
                        </a></li>
                    <?php } ?>
                </ul>
            </div>
            </div>

            <div class="card-action center">
                <a class="center" id="table-messages">Tabela de Recados</a>
            </div>
        </div>
    </div>

    <div class="col s12 m4 l4">
        <div class="card teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center">Próximos Treinos</span>
            <div class="center" style="overflow-y: scroll;height: 80px" >
                <ul>
                    <?php foreach($data["training"] as $training){ ?>
                        <li><a href="#" style="color: white;">
                            <?php echo $training->place_training; ?>
                        </a></li>
                    <?php } ?>
                </ul>
            </div>
            </div>
    
            <div class="card-action center">
                <a class="center" id="table-training">Tabela de Treinos</a>
            </div>
        </div>
    </div>

</div>



<!-- Table -->

<table class="centered responsive-table teal lighten-4">
        <thead>
          <tr>
              <th>Nome do Evento</th>
              <th>Data do Evento</th>
              <th>Número de pessoas</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Festival do Japão</td>
            <td>12/07/2019</td>
            <td>20</td>
          </tr>
          <tr>
            <td>Okinawa Festival</td>
            <td>15/05/2019</td>
            <td>30</td>
          </tr>
          <tr>
            <td>Pageant</td>
            <td>09/12/2019</td>
            <td>80</td>
          </tr>
        </tbody>
      </table>

<!-- /Table -->
