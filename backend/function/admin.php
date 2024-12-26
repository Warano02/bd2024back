<?php

function getAdmin($email)
{
    require("../security/connexion.php");
    $req = $access->prepare("SELECT * FROM admin WHERE email=?");
    $req->execute(array($email));
    $data = $req->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
function testAdmin($email)
{
    require("../security/connexion.php");
    $req = $access->prepare("SELECT * FROM admin WHERE email=?");
    $req->execute(array($email));
    return $req->rowCount() == 0;
}
