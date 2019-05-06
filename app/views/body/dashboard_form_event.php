<?php  
    $data = $this->params;
    if(isset($data["event"])){
        $data["event"] = $data["event"][0];
    }
    // if(isset($data["event_branch"])){
    //     $data["event_branch"] = $data["event_branch"][0];
    // }
?>
<h2><?php echo $this->viewTitle; ?></h2>

<form id="input-member" name="input-member" autocomplete="off">
    <div class="row">
        <input type="hidden" name="id_event" id="id_event" value="<?php if(isset($data["event"])){echo $data["event"]->id_event;} ?>">
        <div class="input-field col l12 m12 s12">
            <label for="name_event">Nome do Eventos</label>
            <input type="text" id="name_event" name="name_event" value="<?php if(isset($data["event"])){echo $data["event"]->name_event;} ?>">
        </div>

        <div class="input-field col l12 m12 s12">
            <label for="date_init">Data do Início do evento</label>
            <input class="datepicker" type="text" id="date_init" name="date_init" value="<?php if(isset($data["event"])){echo $data["event"]->date_init;} ?>">
        </div>

        <div class="input-field col l12 m12 s12">
            <label for="hour_init">Horário do Início do evento</label>
            <input type="time" id="hour_init" name="hour_init" value="<?php if(isset($data["event"])){echo $data["event"]->hour_init;} ?>">
        </div>

        <div class="input-field col l12 m12 s12">
            <label for="date_fin">Data do Final do evento</label>
            <input class="datepicker" type="text" id="date_fin" name="date_fin" value="<?php if(isset($data["event"])){echo $data["event"]->date_fin;} ?>">
        </div>

        <div class="input-field col l12 m12 s12">
            <label for="hour_fin">Horário do Final do evento</label>
            <input type="time" id="hour_fin" name="hour_fin" value="<?php if(isset($data["event"])){echo $data["event"]->hour_fin;} ?>">
        </div>

        <div class="input-field col l12 m12 s12">
            <label for="numbermember_event">Número de Memberos Necessários</label>
            <input type="number" id="numbermember_event" name="numbermember_event" value="<?php if(isset($data["event"])){echo $data["event"]->numbermember_event;} ?>">
        </div>

        <div class="input-field col l12 m12 s12">
            <label for="zip_event">CEP</label>
            <input type="text" id="zip_event" name="zip_event" value="<?php if(isset($data["event"])){echo $data["event"]->zip_event;} ?>">
        </div>

        <div class="input-field col l12 m12 s12">
            <label for="state_event">Estado</label>
            <input type="text" id="state_event" name="state_event" value="<?php if(isset($data["event"])){echo $data["event"]->state_event;} ?>">
        </div>

        <div class="input-field col l12 m12 s12">
            <label for="city_event">Cidade</label>
            <input type="text" id="city_event" name="city_event" value="<?php if(isset($data["event"])){echo $data["event"]->city_event;} ?>">
        </div>
        
        <div class="input-field col l12 m12 s12">
            <label for="neighboorhood_event">Bairro</label>
            <input type="text" id="neighboorhood_event" name="neighboorhood_event" value="<?php if(isset($data["event"])){echo $data["event"]->neighboorhood_event;} ?>">
        </div>

        <div class="input-field col l12 m12 s12">
            <label for="street_event">Rua</label>
            <input type="text" id="street_event" name="street_event" value="<?php if(isset($data["event"])){echo $data["event"]->street_event;} ?>">
        </div>

        <div class="input-field col l12 m12 s12">
            <label for="complement_event">Complemento</label>
            <input type="text" id="complement_event" name="complement_event" value="<?php if(isset($data["event"])){echo $data["event"]->complement_event;} ?>">
        </div>

        <div class="input-field col l12 m12 s12">
            <label for="annotation_event">Anotações</label>
            <input type="text" id="annotation_event" name="annotation_event" value="<?php if(isset($data["event"])){echo $data["event"]->annotation_event;} ?>">
        </div>

        <div class="input-field col l12 m12 s12">
            <label for="responsible_event">Responsável</label>
            <input type="text" id="responsible_event" name="responsible_event" value="<?php if(isset($data["event"])){echo $data["event"]->responsible_event;} ?>">
        </div>

        <div class="input-field col s12">
            <select name="event_branch[]" id="event_branch" multiple>
            <option value="" disabled selected>Choose your option</option>
            <?php 
                foreach($data["event_branch"] as $count){?>
                    <option <?php if(isset($data["event"])){if(in_array_r((int)$count->id_branch,$data["select_branch"])){echo 'selected';}} ?> value="<?php echo $count->id_branch;?>" <?php if(isset($data["event_branch"])) ?>><?php echo $count->name_branch; ?></option>
                    
                <?php }?> 
            </select>
            <label>Filiais que participarão</label>
        </div>

        <div class="input-field col l12 m12 s12">
            <label for="status_event">Status</label>
            <input type="text" id="status_event" name="status_event" value="<?php if(isset($data["event"])){echo $data["event"]->status_event;} ?>">
        </div>


        <input type="submit" class="btn" value="Enviar">

    </div>
</form>

