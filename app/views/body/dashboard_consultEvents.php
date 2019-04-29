<?php 
    $data=$this->params;
 ?>
<div class="row">
<h3>Consulta de Eventos</h3>

<div style="
    width: 100%;
    overflow: hidden;
    border: 1px solid rgba(0,0,0,.5);
    padding: 10px;
    border-radius: 5px;
">
<form class="col s12" id="filter_events">
      <div class="row">

        <div class="input-field col s6">
            <input name="name" id="name" type="text">
            <label for="name">Nome</label>
        </div>

        <div class="input-field col s6 m6 l6">
            <input class="datepicker" type="text" name="date" id="date">
            <label for="date">Date</label>
        </div>


        <input class="btn right" value="Filtrar" type="submit">
        
      </div>
    </form>

</div>


<table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Data</th>
                <th>Cidade</th>
                <th>Responsável</th>
                <th>Anotações</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($data["events"] as $count){ ?>
                <tr>
                <td><?php echo $count->name_event; ?></td>
                <td><?php echo $count->date_init; ?></td>
                <td><?php echo $count->city_event; ?></td>
                <td><?php echo $count->responsible_event; ?></td>
                <td><?php echo $count->annotation_event; ?></td>
                <td><a href="<?php echo BASE_URL.'update/event/'.$count->id_event; ?>"><i class="material-icons">create</i></a></td>
            </tr>
            <?php } ?>
        </tbody>
</table>

</div>