<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/app.css" rel="stylesheet">
        <link href="css/myStyle.css" rel="stylesheet">
    </head>
 <body>
 <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-fixed-top">
     <a class="navbar-brand" href="#">Mon projet</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbarCollapse">
         <ul class="navbar-nav mr-auto">
             <li class="nav-item active">
                 <a class="nav-link" href="saisieProduit.php">Saisir un produit <span class="sr-only">(current)</span></a>
             </li>
             <li>
                 <a class="nav-link" href="listeProduits.php">Gestions des articles</a>
             </li>
             <li>
                 <a class="nav-link" href="listeUtilisateurs.php">Gestions des utilisateurs</a>
             </li>
             <?php if (isset($_SESSION['auth'])) : ?>
                 <li class="nav-item">
                     <a class="nav-link" href="logout.php">Déconnexion</a>
                 </li>
             <?php endif; ?>
         </ul>

     </div>
 </nav>
 <br><br><br>
