<?php 

$data = $this->params;

?>


<h2 class="center"><?php echo $this->viewTitle; ?></h2>

<form id="input-member" name="input-member" autocomplete="off">
<h3 class="center">Dados Pessoais</h3>
    <div class="row">
        <input disabled type="hidden" id="id_member" name="id_member" value="<?php if(isset($data["member_info"])){echo $data["member_info"]->id_member;} ?>">
        
        <div class="input-field col l12 m12 s12">
            <label for="name_member">Nome do Integrante</label>
            <input disabled required type="text" id="name_member" name="name_member" value="<?php if(isset($data["member_info"])){echo $data["member_info"]->name_member;} ?>">
        </div>

        <div class="input-field col l12 m12 s12">
            
            <select disabled id="id_type" name="id_type">
                <?php 
                foreach($data["member_type"] as $count){?>
                    <option value="<?php echo $count->id_type;?>" <?php if(isset($data["member_info"])){if($count->id_type == $data["member_info"]->id_type){echo 'selected';}} ?>><?php echo $count->name_type; ?></option>

                <?php }?> 
            </select>
            <label>Tipo membro</label>
        </div>


    </div>
    <h3 class="center">Dados Membros</h3>
    <div class="row">

        <div class="input-field col l3 m4 s6">
            <select disabled id="permission_member" name="permission_member">
                <?php
                foreach($data["member_permission"] as $count){?>
                    <option value="<?php echo $count->permission_level; ?>" <?php if(isset($data["member_info"])){if($count->permission_level == $data["member_info"]->permission_member){echo 'selected';}} ?>><?php echo $count->role_member; ?></option>

                <?php }?> 
            </select>
            <label>Permissão membro</label>
        </div>

        <div class="input-field col l3 m4 s6">
            <select disabled name="member_branch" id="member_branch">
                <?php 
                foreach($data["member_branch"] as $count){?>
                    <option value="<?php echo $count->id_branch;?>" <?php if(isset($data["member_info"])){if($count->id_branch == $data["member_info"]->id_branch){echo 'selected';}} ?>><?php echo $count->name_branch; ?></option>

                <?php }?> 
            </select>
            <label>Filial</label>
        </div>

        <div class="input-field col l3 m4 s6">
            <input disabled required type="text" class="datepicker date" id="entrydate_member" name="entrydate_member" value="<?php if(isset($data["member_info"])){echo formatDate($data["member_info"]->entrydate_member,"BR");}?>">
            <label for="entrydate_member">Data de Ingresso</label>
        </div>

        <div class="input-field col l3 m6 s6">
            <input disabled required type="text" class="datepicker date" id="birth_member" name="birth_member" value="<?php if(isset($data["member_info"])){echo formatDate($data["member_info"]->birth_member,"BR");}?>">
            <label for="birth_member">Data de Nascimento</label>
        </div>



    </div>

    </div>
</form>

