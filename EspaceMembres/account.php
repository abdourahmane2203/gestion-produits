<?php require_once 'include/functions.php';
 require_once 'include/header.php';
      logged_only();
?>

<h2>Bonjour <?= $_SESSION['auth']->prenom;?>  <?= $_SESSION['auth']->nom; ?> </h2>

<?php require_once 'include/footer.php'; ?>