<?php
require_once  "dao.php";

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

