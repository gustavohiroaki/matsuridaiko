<main class="dash-container">
<?php $data = $this->params;?>
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Tipo</th>
            <th>Filial</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($data["members"] as $count){ ?>
            <tr>
                <td><?php echo $count->name_member; ?></td>
                <td><?php echo $count->name_type; ?></td>
                <td><?php echo $count->name_branch; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
</main>