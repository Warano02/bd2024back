<?php

// Verification si le matricule existe deja

function v($mat)
{
    require("../security/connexion.php");
    $req = $access->prepare("SELECT * FROM users WHERE mat=?");
    $req->execute(array($mat));
    return $req->rowCount() !== 0;
}

//fonction qui permet de créer l'utilisateur dans la bd

function createUser($o, $mat, $email, $nom, $niv, $pwrd, $fil, $code)
{
    require("../security/connexion.php");

    if ($o == "no") {
        $req = $access->prepare("INSERT INTO users(mat,email,nom,fil,pwd,pp,niv) VALUES (?,?,?,?,?,?,?) ");
        $req->execute(array($mat, $email, $nom, $fil, password_hash($pwrd, PASSWORD_DEFAULT), "https://i.ibb.co/4gMfWh3/PXL-20240304-151352716-PORTRAIT.jpg", $niv));
        return true;
    }else{
        $req = $access->prepare("INSERT INTO users(mat,email,nom,fil,pwd,pp,code) VALUES (?,?,?,?,?,?,?) ");
        $req->execute(array($mat, $email, $nom, $fil,  password_hash($pwrd, PASSWORD_DEFAULT),  "https://i.ibb.co/4gMfWh3/PXL-20240304-151352716-PORTRAIT.jpg", $code));
        return true;
    }
}


// Insérer historique de connexion

function addHist($mat,$date,$app){
    require("../security/connexion.php");
    $req = $access->prepare("INSERT INTO his(mat,date,app) VALUES (?,?,?) ");
    $req->execute(array($mat,$date,$app));
    return true;
}


function getHist($mat){
    require("../security/connexion.php");
    $req=$access->prepare("SELECT * FROM his WHERE mat=?");
    $req->execute(array($mat));
    $data=$req->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

// function d recuperation de donnee

function fetchData($mat){
    require("../security/connexion.php");
    $req=$access->prepare("SELECT * FROM users WHERE mat=?");
    $req->execute(array($mat));
    $data=$req->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
