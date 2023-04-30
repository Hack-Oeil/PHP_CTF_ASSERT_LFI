<?php

    if(sizeof($_POST) > 0) {
        echo '<div class="alert alert-primary" role="alert"> Soyez sûr de l\'interet que nous porterons à votre message </div>';
        echo '<span style="font-size:12px;color:#000;"><strong style="display:inline;font-size:12px;">E_WARNING : </strong>The message was successfully deleted, but the trash is soon full!</span><br /><br /><br />';
    }
?>
<form method="post">
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Votre adresse Email">
  </div>
  <div class="form-group">
    <label for="subject">Sujet</label>
    <input type="text" class="form-control" id="subject" placeholder="Sujet">
  </div>

  <div class="form-group">
    <label for="message">Message</label>
    <textarea class="form-control" id="message" placeholder="Votre message"></textarea>
  </div>
  <br /><br />
  <button type="submit" name="submit" class="btn btn-primary">Envoyer le message</button>
</form>