<?php
session_start();

function upp($url)
{
    require("../security/connexion.php");
    try {
        $req = $access->prepare("UPDATE users SET pp = ? WHERE mat = ?");
        $req->execute(array($url, $_SESSION["mat"]));
        $_SESSION["pp"] = $url;
        echo json_encode(array("err" => false, "msg" => "Profil mis a jour avec succès"));
    } catch (\Throwable $th) {
        echo json_encode(array("err" => true, "msg" => "Erreur survenue lors de la mise a jours de votre pp"));
    }
}


$data = json_decode(file_get_contents("php://input"), true);

if (isset($data)) {
    $url = htmlspecialchars($data["url"]);
    upp($url);
}
