<?php 

$data = $this->params;

?>

<main class="dash-container">
<h2 class="center"><?php echo $this->viewTitle; ?></h2>

<form id="input-member" name="input-member">
<h3 class="center">Dados Pessoais</h3>
    <div class="row">
        
        <div class="input-field col l12 m12 s12">
            <label for="name_member">Nome do Integrante</label>
            <input type="text" id="name_member" name="name_member" value="<?php if(isset($data["member_info"])){echo $data["member_info"]->name_member;} ?>">
        </div>
        <div class="input-field col l8 m12 s12">
            <label for="username_member">Nome de usuário do Integrante</label>
            <input type="text" id="username_member" name="username_member" value="<?php if(isset($data["member_info"])){echo $data["member_info"]->username_member;} ?>">
        </div>
        <div class="input-field col l4 m12 s12">
            
            <select id="id_type" name="id_type">
                <?php 
                foreach($data["member_type"] as $count){?>
                    <option value="<?php echo $count->id_type;?>" <?php if(isset($data["member_info"])){if($count->id_type == $data["member_info"]->id_type){echo 'selected';}} ?>><?php echo $count->name_type; ?></option>

                <?php }?> 
            </select>
            <label>Tipo membro</label>
        </div>
        <div class="input-field col l6 m6 s6">
            <label for="pass_member">Senha</label>
            <input type="password" id="pass_member" name="pass_member" value="<?php if(isset($data["member_info"])){echo $data["member_info"]->pass_member;} ?>">
        </div>

        <div class="input-field col l6 m6 s6">
            <label for="pass2_member">Confirmação de Senha</label>
            <input type="password" id="pass2_member" value="<?php if(isset($data["member_info"])){echo $data["member_info"]->pass_member;} ?>">
        </div>
    </div>
    <h3 class="center">Dados Membros</h3>
    <div class="row">

        <div class="input-field col l3 m4 s6">
            <select id="permission_member" name="permission_member">
                <?php
                foreach($data["member_permission"] as $count){?>
                    <option value="<?php echo $count->permission_level; ?>" <?php if(isset($data["member_info"])){if($count->permission_level == $data["member_info"]->permission_member){echo 'selected';}} ?>><?php echo $count->role_member; ?></option>

                <?php }?> 
            </select>
            <label>Permissão membro</label>
        </div>

        <div class="input-field col l3 m4 s6">
            <select name="member_branch" id="member_branch">
                <?php 
                foreach($data["member_branch"] as $count){?>
                    <option value="<?php echo $count->id_branch;?>" <?php if(isset($data["member_info"])){if($count->id_branch == $data["member_info"]->id_branch){echo 'selected';}} ?>><?php echo $count->name_branch; ?></option>

                <?php }?> 
            </select>
            <label>Filial</label>
        </div>

        <div class="input-field col l3 m4 s6">
            <input type="text" class="datepicker" id="entrydate_member" name="entrydate_member" value="<?php if(isset($data["member_info"])){echo formatDate($data["member_info"]->entrydate_member,"BR");}?>">
            <label for="entrydate_member">Data de Ingresso</label>
        </div>

        <div class="input-field col l3 m6 s6">
            <input type="text" class="datepicker" id="birth_member" name="birth_member" value="<?php if(isset($data["member_info"])){echo formatDate($data["member_info"]->birth_member,"BR");}?>">
            <label for="birth_member">Data de Nascimento</label>
        </div>

        <div class="input-field col l6 m6 s12">
            <label for="tel_member">Telefone do Integrante</label>
            <input type="text" id="tel_member" name="tel_member" value="<?php if(isset($data["member_info"])){echo $data["member_info"]->tel_member;} ?>">
        </div>

        <div class="input-field col l6 m12 s12">
            <label for="rg_member">RG do Integrante</label>
            <input type="text" id="rg_member" name="rg_member" value="<?php if(isset($data["member_info"])){echo $data["member_info"]->rg_member;} ?>">
        </div>
    </div>
    <h3 class="center">Endereço</h3>
    <div class="row">

        <div class="input-field col l4 m12 s12">
            <label for="zip_member">CEP</label>
            <input type="text" id="zip_member" name="zip_member" value="<?php if(isset($data["member_info"])){echo $data["member_info"]->zip_member;} ?>">
        </div>

        <div class="input-field col l4 m6 s12">
            <label for="state_member" class="active">Estado</label>
            <input type="text" id="state_member" name="state_member" value="<?php if(isset($data["member_info"])){echo $data["member_info"]->state_member;} ?>">
        </div>

        <div class="input-field col l4 m6 s12">
            <label for="city_member" class="active">Cidade</label>
            <input type="text" id="city_member" name="city_member" value="<?php if(isset($data["member_info"])){echo $data["member_info"]->city_member;} ?>">
        </div>
        
        <div class="input-field col l4 m6 s12">
            <label for="neighboorhood_member" class="active">Bairro</label>
            <input type="text" id="neighboorhood_member" name="neighboorhood_member" value="<?php if(isset($data["member_info"])){echo $data["member_info"]->neighboorhood_member;} ?>">
        </div>

        <div class="input-field col l8 m6 s12">
            <label for="street_member">Rua</label>
            <input type="text" id="street_member" name="street_member" value="<?php if(isset($data["member_info"])){echo $data["member_info"]->street_member;} ?>">
        </div>

        <div class="input-field col l12 m12 s12">
            <label for="complement_member">Complemento</label>
            <input type="text" id="complement_member" name="complement_member" value="<?php if(isset($data["member_info"])){echo $data["member_info"]->complement_member;} ?>">
        </div>

        <div class="input-field col l1 m2 s4">
            <label for="status_member">Status</label>
            <input type="text" id="status_member" name="status_member" value="<?php if(isset($data["member_info"])){echo $data["member_info"]->status_member;} ?>">
        </div>


    
        <input type="submit" class="btn" value="Enviar">

    </div>
</form>

</main>