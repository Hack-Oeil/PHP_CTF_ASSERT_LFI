<?php
ini_set('display_errors', '0');
ini_set('display_startup_errors', '0');
error_reporting(0);

require '../vendor/autoload.php';
new Yoop\Kernel(); // On doit charger le .env

$output = null;
if(isset($_GET['page']) && is_string($_GET['page'])) {
    $page = dirname(__DIR__) . '/pages/'.$_GET['page'].'.php';
    ob_start();
    // Avec assert on vérifie que le fichier ne contient pas 2 points
    assert("strpos('$page', '..') === false") or die("Oups nous avons détecté une tentative de Directory Traversal, heuresement que nous avons vérifié avec un assert !");
    if(file_exists($page)) {    
        include $page;
    } else {
        include  dirname(__DIR__) . '/pages/error_404.php';
    }
    $output = ob_get_contents();
    ob_end_clean();
   
    $helper = new App\Service\HelperController();
    // Remplacer la chaîne par ton message personnalisé
    $output = str_replace(
        "DEFAULT_CTF_FLAG=212f177cac6b8de6dd6aa04681c7badf6874289e",
        "Bien joué le flag est : " . $helper->flag(),
        $output
    );

      $output = str_replace(
        "REVGQVVMVF9DVEZfRkxBRz0yMTJmMTc3Y2FjNmI4ZGU2ZGQ2YWEwNDY4MWM3YmFkZjY4NzQyODll",
        base64_encode("Bien joué le flag est : " . $helper->flag()),
        $output
    );
}

if($output === null) {
    ob_start();
    include  dirname(__DIR__) . '/pages/home.php';
    $output = ob_get_contents();
    ob_end_clean();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Les DéméNageurs</title>
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
  <?php echo $output; ?>
  
  <section class="footer">
    <p>&copy; <?= date("Y"); ?> DéméNageurs. Tous droits réservés.</p>
  </section>
</body>
</html>