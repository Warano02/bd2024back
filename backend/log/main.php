<?php

function FETCH(){
    require("../security/connexion.php");
    $req=$access->prepare("SELECT * FROM requete ORDER BY id DESC");
    $req->execute();
    $result=$req->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

echo json_encode(FETCH());