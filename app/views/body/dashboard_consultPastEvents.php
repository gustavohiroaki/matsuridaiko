<?php $data=$this->params; ?>
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
            <?php foreach($data["pastEvents"] as $count){ ?>
                <tr>
                <td><?php echo $count->name_event; ?></td>
                <td><?php echo $count->date_init; ?></td>
                <td><?php echo $count->city_event; ?></td>
                <td><?php echo $count->responsible_event; ?></td>
                <td><?php echo $count->annotation_event; ?></td>
                <td><a href="<?php echo BASE_URL.'details/pastEvents/'.$count->id_event; ?>"><i class="material-icons">create</i></a></td>
            </tr>
            <?php } ?>
        </tbody>
</table>