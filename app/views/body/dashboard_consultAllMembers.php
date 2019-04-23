<?php  
    $data = $this->params;
    
?>
<h3>Pesquisa de Membros</h3>
<div style="
    width: 100%;
    height: 150px;
    border: 1px solid rgba(0,0,0,.5);
    padding: 10px;
    border-radius: 5px;
">
 <div class="row">
    <form class="col s12" id="filter_member">
      <div class="row">

        <div class="input-field col s6">
            <input name="name" id="name" type="text">
            <label for="name">Nome</label>
        </div>

        <div class="input-field col s6 m6 l6">
            <select name="filter_branch" id="filter_branch">
                <option value="">Nenhuma</option>
                <?php foreach($data["filter_branch"] as $row){ ?>
                <option value="<?php echo $row->id_branch; ?>"><?php echo $row->name_branch; ?></option>
                <?php } ?>
            </select>
            <label for="filter_branch">Filial</label>
        </div>


        <input class="btn right" value="Filtrar" type="submit">
        
      </div>
    </form>

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
        <?php foreach($data["all_members"] as $count){ ?>
            <tr>
                <td><?php echo $count->name_member; ?></td>
                <td><?php echo $count->name_type; ?></td>
                <td><?php echo $count->name_branch; ?></td>
                <td><a href="<?php echo BASE_URL.returnUpdate($count->id_type).$count->id_member; ?>"><i class="material-icons">create</i></a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

  </div>
</div>