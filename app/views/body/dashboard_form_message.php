<?php  
  $data = $this->params;
?>
<h3><?php echo $this->viewTitle; ?></h3>
<div class="row" style="padding: 10px">
  <form id="input-message">
    <div class="input-field col s12 m12 l12">
      <input id="date_init" name="date_init" class="datepicker" type="text">
      <label for="date_init">Notificação a Partir de:</label>
    </div>

    <div class="input-field col s12 m12 l12">
      <input id="date_fin" name="date_fin" class="datepicker" type="text">
      <label for="date_fin">Notificação até:</label>
    </div>

    <div class="input-field col s12">
            <select name="message_branch[]" id="message_branch" multiple>
            <option value="" disabled selected>Choose your option</option>
            <?php 
                foreach($data["message_branch"] as $count){?>
                    <option value="<?php echo $count->id_branch;?>" <?php if(isset($data["event_branch"])) ?>><?php echo $count->name_branch; ?></option>

                <?php }?> 
            </select>
            <label>Filiais que necessitam da notificação</label>
        </div>

    <div class="input-field col s12">
        <textarea id="message" name="message" class="materialize-textarea"></textarea>
        <label for="message">Textarea</label>
    </div>
    
    <input type="submit" class="btn right">
  </form>

</div>
