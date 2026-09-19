<?php


function getconnexion(){
    $host = "localhost";
    $dbname = "snbanquedb";
    $username="root";
    $password = null;
    try {
        $db = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
        //echo "connexion reussi";
        return $db;
    }catch (PDOException $ex){
        $ex->errorInfo;
        echo "connexion échoué";
    }
}

function adduser($prenom,$nom,$datenaissance,$adresse,$telephone,$nationalite,$profession,$email,$motdepasse){

    $db = getconnexion();

    //$db->query("insert into utilisateur values(null,$prenom,...)");
    try {
        $statement = $db->prepare("INSERT INTO utilisateur values(null,?,?,?,?,?,?,?,?,?)");
        $statement->execute(array($prenom,$nom,$telephone,$adresse,$nationalite,$profession,$datenaissance,$email,$motdepasse));
        return true;
    }catch (Exception $e){
        echo  $e->getMessage();
        return false;
    }

}

function connexion($email,$motdepasse){

    $db = getconnexion();
    $statement = $db->prepare("select * from utilisateur where email=? and motdepasse=? ");
    $statement->execute(array($email,$motdepasse));
    return $statement->fetch();
}

function getCompte($idu){
    $db = getconnexion();
    $statement = $db->prepare("select * from compte where idu = ? ");
    $statement->execute(array($idu));
    return $statement->fetch();
}

function getLastCompte(){
    $db = getconnexion();
    $statement = $db->prepare("select max(id) as id from compte ");
    $statement->execute();
    return $statement->fetch();
}

function addCompte($numero,$type,$solde,$idu){

    $db = getconnexion();

    //$db->query("insert into utilisateur values(null,$prenom,...)");
    try {
        $statement = $db->prepare("INSERT INTO compte values(null,?,?,?,?)");
        $statement->execute(array($numero,$type,$solde,$idu));
        return true;
    }catch (Exception $e){
        echo  $e->getMessage();
        return false;
    }

}