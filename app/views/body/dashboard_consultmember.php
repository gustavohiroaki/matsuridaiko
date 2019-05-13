<?php $data = $this->params;
// echo "<pre>";
// dd($data);
?>
<table class="responsive-table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Tipo</th>
            <th>Filial</th>
            <th>Inscrição</th>
            <th>Aniversário</th>
            <th>Detalhes</th>
            <?php if((int)$_SESSION["permission"]>=500){ ?>    
            <th>Alterar</th>
            <th>Deletar</th>
            <?php } ?>
        </tr>
    </thead>

    <tbody>
        <?php foreach($data["members"] as $count){ ?>
            <tr>
                <td><?php echo $count->name_member; ?></td>
                <td><?php echo $count->name_type; ?></td>
                <td><?php echo $count->name_branch; ?></td>
                <td><?php echo $count->entrydate_member; ?></td>
                <td><?php echo $count->birth_member; ?></td>
                <td><a href="<?php echo BASE_URL.'details/member/'.$count->id_member; ?>"><i class="material-icons">details</i></a></td>
                <?php if((int)$_SESSION["permission"]>=500){ ?>
                <td><a href="<?php echo BASE_URL.returnUpdate($count->id_type).$count->id_member; ?>"><i class="material-icons">create</i></a></td>
                <td><a href="#" title="<?php echo $count->id_member; ?>" class="delete"><i class="material-icons">delete</i></a></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </tbody>
</table>
