<?php
session_start();
if (!isset($_SESSION["connexion"])){
    header("location:connexion.php");
}
?>


<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SnBanque</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">SNBANQUE</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            </ul>
            <form action="authController.php" method="post" class="d-flex" role="search">
                <input type="hidden" id="fromdeconnexion" name="fromdeconnexion" value="deconnexion">
                <button type="submit" class="btn btn-outline-danger" onclick="confirm('Voulez-vous vraiment vous deconnecter?')" >Deconnexion</button>
            </form>
        </div>
    </div>
</nav>

<div class="container">


<p style="font-size: 50px;">Veuillez creer votre compte <a href="">ici </a>  </p>

<div class="row" style="font-size: 30px;">
    <div class="col-md-4"  >C. Numero: XXXXXXXX</div>
    <div class="col-md-4">Type: Courant</div>
    <div class="col-md-4">Solde: 10 000 000 FCFA</div>
</div>
<br>

<div class="row" style="font-size: 30px;">
    <div class="col-md-4">Nb. transaction: 53</div>
    <div class="col-md-4"> M.T. Retiré: 2 000 000 FCFA</div>
    <div class="col-md-4"> M.T. Deposé: 12 000 000</div>
</div>
<br>

<div class="row">
    <div class="col-md-4">
        <a href="" class="btn btn-primary btn-lg" >Depot</a>
    </div>
    <div class="col-md-4">
        <a href="" class="btn btn-success btn-lg" >Retrait</a>
    </div>
    <div class="col-md-4">
        <a href="" class="btn btn-warning btn-lg" >Transfert</a>

    </div>
</div>

</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>