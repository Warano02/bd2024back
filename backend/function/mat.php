<?php
require("./auth.php");
$data = json_decode(file_get_contents("php://input"), true);

if(isset($data) && isset($data["test"])) {
    $mat = htmlspecialchars($data["test"]);
    
    // Vérifiez si le matricule existe
    if (v($mat)) {
        echo json_encode(array("err" => true, "msg" => "Un compte avec le matricule $mat existe déjà."));
    } else {
        echo json_encode(array("err" => false, "msg" => "Matricule valide."));
    }
} else {
    echo json_encode(array("err" => true, "msg" => "Données invalides."));
}