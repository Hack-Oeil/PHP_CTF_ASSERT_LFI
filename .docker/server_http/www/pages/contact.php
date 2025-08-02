<header>
    <h1>Les DéméNageurs</h1>
    <p>Les rois du carton et du papier bulles !</p>
</header>
<nav>
    <a href="?page=home">Accueil</a>
    <a href="?page=services">Nos services</a>
    <a href="?page=devis">Devis gratuit</a>
    <a href="?page=contact">Contact</a>
</nav>
<?php
    if(sizeof($_POST) > 0) {
        echo '<section class="hero"><div class="alert alert-primary" role="alert"> Soyez sûr de l\'interet que nous porterons à votre message </div></section>';
    }
?>
<section class="services">
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
    <br />
    <button type="submit" name="submit" class="btn btn-primary">Envoyer le message</button>
  </form>
</section>
