<?php
session_start();
require("../security/connexion.php");
require("../function/valid.php");
$data = json_decode(file_get_contents("php://input"), true);


if (isset($data)) {
    $id = htmlspecialchars($data["id"]);
    $msg = htmlspecialchars($data["msg"]);
    $statut = htmlspecialchars($data["statut"]);
    $date = htmlspecialchars($data["date"]);
    
    $update_request=VR($id, $statut,$msg,$date);
    if (!$update_request) {
        echo json_encode(array("err" => true, "msg" => "La requête que vous souhaitez traiter n'existe plus ! " ));
    } else {
        echo json_encode(array("err" => false, "msg" =>  $update_request ));
    }
}
