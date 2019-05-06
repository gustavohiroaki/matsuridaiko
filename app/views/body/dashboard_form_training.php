<?php  
  $data = $this->params;
  if(isset($data["training"])){$training = $data["training"][0];}
?>
<h3><?php echo $this->viewTitle; ?></h3>
<div class="row" style="padding: 10px">
  <form id="input-training">
  <input type="hidden" name="id_training" value="<?php if(isset($data["training"])){echo $training->id_training;} ?>">
  <div class="input-field col s12 m12 l12">
      <input id="date_training" name="date_training" class="datepicker" type="text" value="<?php if(isset($data["training"])){echo formatDate($training->date_training,"BR");} ?>">
      <label for="date_training">Data do Treino</label>
    </div>

    <div class="input-field col s12 m12 l12">
      <input id="place_training" name="place_training" type="text" value="<?php if(isset($data["training"])){echo $training->place_training;} ?>">
      <label for="place_training">Local de Treino</label>
    </div>

    <div class="input-field col s12 m12 l12">
      <input id="organizer_training" name="organizer_training" type="text" value="<?php if(isset($data["training"])){echo $training->organizer_training;} ?>">
      <label for="organizer_training">Organizador(es) do Treino</label>
    </div>

    <div class="input-field col s12">
        <textarea id="annotation_training" name="annotation_training" class="materialize-textarea"><?php if(isset($data["training"])){echo $training->annotation_training;} ?></textarea>
        <label for="annotation_training">Anotações do Treino</label>
    </div>

    <div class="input-field col s12">
            <select name="training_branch[]" id="training_branch" multiple>
            <option value="" disabled selected>Choose your option</option>
            <?php 
                foreach($data["training_branch"] as $count){?>
                    <option <?php if(isset($data["training"])){if(in_array_r((int)$count->id_branch,$data["select_branch"])){echo 'selected';}} ?>  value="<?php echo $count->id_branch;?>" <?php if(isset($data["training_branch"])) ?>><?php echo $count->name_branch; ?></option>

                <?php }?> 
            </select>
            <label>Filiais que necessitam da notificação</label>
        </div>
    
    <input type="submit" class="btn right">
  </form>

</div>
