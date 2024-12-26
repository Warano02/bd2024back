<?php

function VR($id, $statut, $msg, $date)
{
    require("../security/connexion.php");

    try {
        // Recuperation des informations sur celui qui a envoyer la requete
        $req = $access->prepare("UPDATE requete SET statut = ?,msg=?,ans=? WHERE un_id = ?");
        $req->execute(array($statut, $msg, $date, $id));

        $req = $access->prepare(
            "SELECT requete.mat, users.email AS em,users.nom AS n 
                              FROM requete INNER JOIN users ON requete.mat = users.mat 
                              WHERE requete.un_id=?"
        );
        $req->execute(array($id));
        $data = $req->fetch();
        return $data;
    } catch (\Throwable $th) {
        return false;
    }
}

