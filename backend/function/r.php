<?php


// Function qui crée une nouvelle requête

function createRequest($code_ue, $objet, $text, $date, $mat)
{
    require("../security/connexion.php");
    $time = time();
    $un_id = rand($time, 100000000);

    $req = $access->prepare("INSERT INTO requete(un_id,code_ue,objet,text,date,mat) VALUES(?,?,?,?,?,?)");
    $req->execute(array($un_id, $code_ue, $objet, $text, $date, $mat));
    return true;
}

function getWithId($id)
{
    require("../security/connexion.php");
    $req = $access->prepare("SELECT * FROM requete WHERE un_id=?");
    $req->execute(array($id));
    $result = $req->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getRequest()
{
    require("../security/connexion.php");
    $req = $access->prepare("SELECT * FROM requete WHERE statut <> ? ORDER BY id DESC");
    $req->execute(array("e"));
    $result = $req->fetchAll();
    return $result;
}

function get4User($mat)
{
    require("../security/connexion.php");
    $req = $access->prepare("SELECT * FROM requete WHERE mat=? ORDER BY id DESC");
    $req->execute(array($mat));
    $result = $req->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function deleteR($id)
{
    require("../security/connexion.php");
    try {
        $req = $access->prepare("DELETE FROM `requete` WHERE `requete`.`un_id` = ?");
        $req->execute(array($id));
        return true;
    } catch (Exception $th) {
        return false;
    }
}

function updateStatut($id, $statut)
{
    require("../security/connexion.php");
    $req = $access->prepare("UPDATE requete SET statut = ? WHERE un_id = ?");
    $req->execute(array($statut, $id));
    return true;
}

function updateText($id, $text)
{
    require("../security/connexion.php");
    $req = $access->prepare("UPDATE requete SET text= ? WHERE `requete`.`un_id` = ?");
    $req->execute(array($text, $id));
    return true;
}
function updateMsg($id, $msg)
{
    require("../security/connexion.php");
    $req = $access->prepare("UPDATE requete SET msg= ? WHERE un_id = ?");
    $req->execute(array($msg, $id));
    return true;
}
