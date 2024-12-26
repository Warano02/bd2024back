<?php
require("../function/r.php");
$data = json_decode(file_get_contents("php://input"), true);

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    
    if (deleteR($id)) {
        echo json_encode(array("err" => false, "msg" => "Requete supprimer avec succès !"));

    } else {
        echo json_encode(array("err" => true, "msg" => "Une erreur est survenue lors de la suppression de votre requête !"));

    }
    
}
 