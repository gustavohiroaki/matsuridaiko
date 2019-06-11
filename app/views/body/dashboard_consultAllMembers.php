<?php  
    $data = $this->params;
    
?>
<h3>Pesquisa de Membros</h3>

 <div class="row">

 <div style="
    width: 100%;
    overflow: hidden;
    border: 1px solid rgba(0,0,0,.5);
    padding: 10px;
    border-radius: 5px;
">
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
                <option value="<?php echo $row->id_branch; ?>" <?php if($row->id_branch == $_SESSION['branch_id']){echo "selected";} ?>><?php echo $row->name_branch; ?></option>
                <?php } ?>
            </select>
            <label for="filter_branch">Filial</label>
        </div>


        <input class="btn right" value="Filtrar" type="submit">
        
      </div>
    </form>
</div>

    <table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Tipo</th>
            <th>Filial</th>
            <th>Inscrição</th>
            <th>Aniversário</th>
            <?php if((int)$_SESSION["permission"]>=500){ ?>    
            <th>Alterar</th>
            <th>Deletar</th>
            <?php } ?>
        </tr>
    </thead>

    <tbody>
        <?php foreach($data["all_members"] as $count){ ?>
            <tr>
                <td><?php echo $count->name_member; ?></td>
                <td><?php echo $count->name_type; ?></td>
                <td><?php echo $count->name_branch; ?></td>
                <td><?php echo $count->entrydate_member; ?></td>
                <td><?php echo $count->birth_member; ?></td>
                <?php if((int)$_SESSION["permission"]>=500){ ?>    
                <td><a href="<?php echo BASE_URL.returnUpdate($count->id_type).$count->id_member; ?>"><i class="material-icons">create</i></a></td>
                <td><a href="#" title="<?php echo $count->id_member; ?>" class="delete"><i class="material-icons">delete</i></a></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </tbody>
</table>

  </div>
