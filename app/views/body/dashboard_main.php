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
                <a style="cursor: pointer" id="table-events">Tabela de Eventos</a>
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
                <a style="cursor: pointer" id="table-messages">Tabela de Recados</a>
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
                <a style="cursor: pointer" id="table-training">Tabela de Treinos</a>
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
        <?php foreach($data["events"] as $event){ ?>
          <tr>
            <td><?php echo $event->name_event; ?></td>
            <td><?php echo $event->date_init; ?></td>
            <td><?php echo $event->numbermember_event; ?></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>

<!-- /Table -->
