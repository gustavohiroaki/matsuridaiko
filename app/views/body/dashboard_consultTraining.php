<?php $data = $this->params; ?>
<h3><?php echo $this->viewTitle; ?></h3>

<div class="row">

<table>
        <thead>
            <tr>
                <th>Lugar do Treino</th>
                <th>Data do Treino</th>
                <th>Anotações</th>
                <th>Organizador</th>
                <th>Alterar</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($data["training"] as $count){ ?>
            <tr>
                <td><?php echo $count->place_training; ?>...</td>
                <td><?php echo formatDate($count->date_training,"BR"); ?></td>
                <td><?php echo $count->annotation_training; ?></td>
                <td><?php echo $count->organizer_training; ?></td>
                <td><a href="<?php echo BASE_URL.'update/training/'.$count->id_training; ?>"><i class="material-icons">create</i></a></td>
            </tr>
            <?php } ?>
        </tbody>
</table>

</div>

<?php 
  
?>