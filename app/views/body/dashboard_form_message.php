<?php  
  $data = $this->params;
  if(isset($data["message"])){$message = $data["message"][0];}
?>
<h3><?php echo $this->viewTitle; ?></h3>
<div class="row" style="padding: 10px">
  <form id="input-message">
    <input type="hidden" name="id_message" value="<?php if(isset($data["message"])){echo $message->id_message;} ?>">
    <div class="input-field col s12 m12 l12">
      <input id="date_init" name="date_init" class="datepicker" type="text" value="<?php if(isset($data["message"])){echo formatDate($message->date_init,"BR");} ?>">
      <label for="date_init">Notificação a Partir de:</label>
    </div>

    <div class="input-field col s12 m12 l12">
      <input id="date_fin" name="date_fin" class="datepicker" type="text" value="<?php if(isset($data["message"])){echo formatDate($message->date_fin,"BR");} ?>">
      <label for="date_fin">Notificação até:</label>
    </div>

    <div class="input-field col s12">
            <select name="message_branch[]" id="message_branch" multiple>
            <option value="" disabled selected>Choose your option</option>
            <?php
                foreach($data["message_branch"] as $count){?>
                    <option <?php if(isset($data["message"])){if(in_array_r((int)$count->id_branch,$data["select_branch"])){echo 'selected';}} ?> value="<?php echo $count->id_branch;?>" <?php if(isset($data["event_branch"])) ?>><?php echo $count->name_branch; ?></option>

                <?php }?> 
            </select>
            <label>Filiais que necessitam da notificação</label>
        </div>

    <div class="input-field col s12">
        <textarea id="message" name="message" class="materialize-textarea"><?php if(isset($data["message"])){echo $message->completeMessage;} ?></textarea>
        <label for="message">Textarea</label>
    </div>
    
    <input type="submit" class="btn right">
  </form>

</div>
