<?php $data = $this->params; ?>
<h3><?php echo $this->viewTitle; ?></h3>
<div id="complete_message">
</div>
<div class="row">




<table>
        <thead>
            <tr>
                <th>Mensagem</th>
                <th>Enviada por</th>
                <th>Data de Mensagem</th>
                <th>Mensagem válida até</th>
                <?php if((int)$_SESSION["permission"]>=500){ ?>
                <th>Alterar</th>
                <th>Deletar</th>
                <?php } ?>
            </tr>
        </thead>

        <tbody>
            <?php foreach($data["messages"] as $count){ ?>
            <tr title="<?php echo $count->id_message; ?>">
                <td><?php echo $count->message; ?>...</td>
                <td><?php echo $count->message_by; ?></td>
                <td><?php echo formatDate($count->date_init,"BR"); ?></td>
                <td><?php echo formatDate($count->date_fin,"BR"); ?></td>
                <?php if((int)$_SESSION["permission"]>=500){ ?>
                <td><a href="<?php echo BASE_URL.'update/message/'.$count->id_message; ?>"><i class="material-icons">create</i></a></td>
                <td><a href="#" title="<?php echo $count->id_message; ?>" class="delete"><i class="material-icons">delete</i></a></td>
                <?php } ?>
            </tr>
            <?php } ?>
        </tbody>
</table>

</div>

<?php 
  
?>