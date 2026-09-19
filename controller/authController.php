<?php
require_once "../model/dao.php";

if (isset($_POST["forminscription"])){
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $telephone = $_POST["telephone"];
    $adresse = $_POST["adresse"];
    $datenaissance = $_POST["datenaissance"];
    $nationalite = $_POST["nationalite"];
    $profession = $_POST["profession"];
    $email = $_POST["email"];
    $motdepasse = $_POST["motdepasse"];
    $motdepasseconfirm = $_POST["motdepasseconfirm"];

    if ($motdepasse != $motdepasseconfirm){
        header("location:inscription.php");

    }else{
        $res = adduser($prenom,$nom,$datenaissance,$adresse,$telephone,$nationalite,$profession,$email,$motdepasse);
        if ($res){
            header("location:successinscription.php");
        }else{
            header("location:inscription.php");
        }
    }

}

if (isset($_POST["formconnexion"])){
    $email = $_POST["email"];
    $motdepasse = $_POST["motdepasse"];

    $res = connexion($email,$motdepasse);


    if ($res == null){
        header("location:../view/connexion.php");
    }else{
        session_start();
        $_SESSION["connexion"] = 1;
        $_SESSION["idu"]  =$res["id"];
        $_SESSION["nom"] = $res["prenom"];

        header("location:../view/home.php");
    }
}

if (isset($_POST["fromdeconnexion"])){
    session_start();
    $_SESSION["connexion"] = null;
    header("location:connexion.php");
}