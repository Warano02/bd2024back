<?php
session_start();
require("../security/connexion.php");
require("../function/admin.php");
$data = json_decode(file_get_contents("php://input"), true);


if (isset($data)) {
    $bossa = htmlspecialchars($data["email"]);
    $password = htmlspecialchars($data["pwd"]);

    if (testAdmin($bossa)) {
        echo json_encode(array("err" => true, "msg" => "Veuillez verifier l'email " . $bossa));
    } else {
        $d = getAdmin($bossa);
        $d=$d[0];
        $pwrd = $d["pwd"];
        if (password_verify($password, $pwrd)) {
            $_SESSION['a'] = true;
            $_SESSION["name"] = $d["nom"];
            $_SESSION["email"] = $d['email'];
            $_SESSION["pp"] = $d["pp"];
            echo json_encode(array("err" => false, "msg" => "Vous êtes désormais connecter"));
        } else {
            echo json_encode(array("err" => true, "msg" => "Mot de passe incorrect !"));
        }
    }
}
