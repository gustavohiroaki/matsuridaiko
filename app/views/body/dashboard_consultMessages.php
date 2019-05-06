<?php $data = $this->params; ?>
<h3><?php echo $this->viewTitle; ?></h3>

<div class="row">

<table>
        <thead>
            <tr>
                <th>Mensagem</th>
                <th>Enviada por</th>
                <th>Data de Mensagem</th>
                <th>Mensagem válida até</th>
                <th>Alterar</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($data["messages"] as $count){ ?>
            <tr>
                <td><?php echo $count->message; ?>...</td>
                <td><?php echo $count->message_by; ?></td>
                <td><?php echo formatDate($count->date_init,"BR"); ?></td>
                <td><?php echo formatDate($count->date_fin,"BR"); ?></td>
                <td><a href="<?php echo BASE_URL.'update/message/'.$count->id_message; ?>"><i class="material-icons">create</i></a></td>
            </tr>
            <?php } ?>
        </tbody>
</table>

</div>

<?php 
  
?>