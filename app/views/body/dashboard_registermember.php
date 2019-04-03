<?php 
// dd($datas["member_type"]);
$data = $this->params;
?>

<main class="dash-container">
<h2>Cadastro de Integrantes</h2>

<form id="input-member" name="input-member">
    <div class="row">
        <div class="input-field col l12 m12 s12">
            <label for="name_member">Nome do Integrante</label>
            <input type="text" id="name_member" name="name_member">
        </div>
        <div class="input-field col l8 m12 s12">
            <label for="username_member">Nome de usuário do Integrante</label>
            <input type="text" id="username_member" name="username_member">
        </div>
        <div class="input-field col l4 m12 s12">
            
            <select id="type_member" name="type_member">
                <?php 
                foreach($data["member_type"] as $count){?>
                    <option value="<?php echo $count->id_type; ?>"><?php echo $count->name_type; ?></option>

                <?php }?> 
            <label>Tipo membro</label>
            </select>
        </div>
        <div class="input-field col l6 m6 s6">
            <label for="pass_member">Senha</label>
            <input type="password" id="pass_member" name="pass_member">
        </div>

        <div class="input-field col l6 m6 s6">
            <label for="pass2_member">Confirmação de Senha</label>
            <input type="password" id="pass2_member">
        </div>

        <div class="input-field col l3 m4 s6">
            <select id="permission_member" name="permission_member">
                <?php
                foreach($data["member_permission"] as $count){?>
                    <option value="<?php echo $count->permission_level; ?>"><?php echo $count->role_member; ?></option>

                <?php }?> 
            </select>
            <label>Permissão membro</label>
        </div>

        <div class="input-field col l3 m4 s6">
            <label for="id_branch">Filial</label>
            <input type="number" id="id_branch" name="id_branch">
        </div>

        <div class="input-field col l3 m4 s6">
            <input type="text" class="datepicker" id="entrydate_member" name="entrydate_member">
            <label for="entrydate_member">Data de Ingresso</label>
        </div>

        <div class="input-field col l3 m6 s6">
            <input type="text" class="datepicker" id="birth_member" name="birth_member">
            <label for="birth_member">Data de Nascimento</label>
        </div>

        <div class="input-field col l6 m6 s12">
            <label for="tel_member">Telefone do Integrante</label>
            <input type="text" id="tel_member" name="tel_member">
        </div>

        <div class="input-field col l6 m12 s12">
            <label for="rg_member">RG do Integrante</label>
            <input type="text" id="rg_member" name="rg_member">
        </div>

        <div class="input-field col l4 m12 s12">
            <label for="zip_member">CEP</label>
            <input type="text" id="zip_member" name="zip_member">
        </div>

        <div class="input-field col l4 m6 s12">
            <label for="state_member">Estado</label>
            <input type="text" id="state_member" name="state_member">
        </div>

        <div class="input-field col l4 m6 s12">
            <label for="city_member">Cidade</label>
            <input type="text" id="city_member" name="city_member">
        </div>
        
        <div class="input-field col l4 m6 s12">
            <label for="neighboorhood_member">Bairro</label>
            <input type="text" id="neighboorhood_member" name="neighboorhood_member">
        </div>

        <div class="input-field col l8 m6 s12">
            <label for="complement_member">Complemento</label>
            <input type="text" id="complement_member" name="complement_member">
        </div>

        <div class="input-field col l1 m2 s4">
            <label for="status_member">Status</label>
            <input type="text" id="status_member" name="status_member">
        </div>


    
        <input type="submit" class="btn" value="Enviar">

    </div>
</form>

</main>