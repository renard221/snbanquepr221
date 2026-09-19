<?php
require_once "../model/dao.php";
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
            <form action="../controller/authController.php" method="post" class="d-flex" role="search">
                <input type="hidden" id="fromdeconnexion" name="fromdeconnexion" value="deconnexion">
                <button type="submit" class="btn btn-outline-danger" onclick="confirm('Voulez-vous vraiment vous deconnecter?')" >Deconnexion</button>
            </form>
        </div>
    </div>
</nav>

<div class="container">

    <div class="panel">
        <div class="panel-heading">
            Creation de compte
        </div>
        <br>
        <div class="panel-body">

            <form action="../controller/compteController.php" method="post">

                <input type="hidden"  name="creationcompte" />

                <div class="mb-3 ">
                <label class="panel-heading">
                    Type de Compte
                </label>
                <select class="form-select"  name="type" aria-label="Default select example">
                    <option selected disabled>Choisir...</option>
                    <option value="epargne">Epargne</option>
                    <option value="courant">Courant</option>
                </select>
                <label class="panel-heading">
                    Solde de base
                </label>
                <input type="number" class="form-control" name="solde" value="0" />

                </div>
                <button type="submit" class="btn btn-primary">
                    Creer
                </button>
                <button type="reset" class="btn btn-default">
                    Annuler
                </button>
            </form>
        </div>


    </div>

</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>