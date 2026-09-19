<?php
require_once "../model/dao.php";

if (isset($_POST["creationcompte"])){
session_start();
    $type = $_POST["type"];
    $solde = $_POST["solde"];
    $res = getLastCompte();
    //var_dump($res);
    //echo $res["id"];
    //die();
    $num = 0;
    if ($res == null){
        $num = 1;
    }else{
        $num = $res["id"] + 1;
    }
    $numcompt = format($num);
    $idu = $_SESSION["idu"];

    if (addCompte($numcompt,$type,$solde,$idu)){
        header("location:../view/home.php");
    }else{
        header("location:../view/creationCompte.php");
    }




}



function format($num){


   if (($num/1000) >= 1){
       return "SN".$num;
   }elseif (($num/100) >= 1){
       return "SN0".$num;
   }elseif (($num/10) >= 1){
       return "SN00".$num;
   }else{
       return "SN000".$num;
   }

}