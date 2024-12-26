<?php
session_start();
require("../function/r.php");
$data = json_decode(file_get_contents("php://input"), true);

if (isset($data)) {
    $objet = htmlspecialchars($data['objet']);
    $text = htmlspecialchars($data['text']);
    $date = $data['date'];
    $code = htmlspecialchars($data['code']);

    try {
        createRequest($code, $objet, $text, $date, $_SESSION['mat']);
    } catch (Exception $e) {
        echo json_encode(array("err" => true, "msg" => "Une erreur est survenue lors de la creation de votre requête" . $e->getMessage()));
    }
}
