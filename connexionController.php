<?php
require_once "dao.php";

$email = $_POST["email"];
$motdepasse = $_POST["motdepasse"];

$res = connexion($email,$motdepasse);

if ($res == null){
    header("location:connexion.php");
}else{
    header("location:home.php");
}
