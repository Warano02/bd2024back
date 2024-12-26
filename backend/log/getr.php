<?php
require("../function/r.php");
$data = json_decode(file_get_contents("php://input"), true);

if (isset($_GET)) {
    $objet = htmlspecialchars($_GET['id']);
    echo json_encode(array("err" => false, "msg" => getWithId($objet)));
}
