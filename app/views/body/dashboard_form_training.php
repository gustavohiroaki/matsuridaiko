<?php  
  $data = $this->params;
?>
<h3><?php echo $this->viewTitle; ?></h3>
<div class="row" style="padding: 10px">
  <form>
  <div class="input-field col s12 m12 l12">
      <input id="date_training" name="date_training" class="datepicker" type="text">
      <label for="date_training">Data do Treino</label>
    </div>

    <div class="input-field col s12 m12 l12">
      <input id="place_training" type="text">
      <label for="place_training">Local de Treino</label>
    </div>

    <div class="input-field col s12 m12 l12">
      <input id="organizer_training" type="text">
      <label for="organizer_training">Organizador(es) do Treino</label>
    </div>

    <div class="input-field col s12">
        <textarea id="annotation_training" name="annotation_training" class="materialize-textarea"></textarea>
        <label for="annotation_training">Anotações do Treino</label>
    </div>

    <div class="input-field col s12">
            <select name="nexttraining_branch[]" id="nexttraining_branch" multiple>
            <option value="" disabled selected>Choose your option</option>
            <?php 
                foreach($data["training_branch"] as $count){?>
                    <option value="<?php echo $count->id_branch;?>" <?php if(isset($data["training_branch"])) ?>><?php echo $count->name_branch; ?></option>

                <?php }?> 
            </select>
            <label>Filiais que necessitam da notificação</label>
        </div>
    
    <input type="submit" class="btn right">
  </form>

</div>
