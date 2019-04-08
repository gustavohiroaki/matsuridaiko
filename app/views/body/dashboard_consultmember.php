<main class="dash-container">
<?php $data = $this->params;?>
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Tipo</th>
            <th>Filial</th>
            <th>Alterar</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($data["members"] as $count){ ?>
            <tr>
                <td><?php echo $count->name_member; ?></td>
                <td><?php echo $count->name_type; ?></td>
                <td><?php echo $count->name_branch; ?></td>
                <td><a href="<?php echo BASE_URL.'update/member/'.$count->id_member; ?>"><i class="material-icons">create</i></a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
</main>