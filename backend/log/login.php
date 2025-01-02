<?php
session_start();
require("../security/connexion.php");
require("../function/auth.php");
$data = json_decode(file_get_contents("php://input"), true);


if (isset($data)) {
    $bossa = htmlspecialchars($data["mat"]);
    $password = htmlspecialchars($data["psw"]);
    $app = htmlspecialchars($data["app"]);

    if (!v($bossa)) {
        echo json_encode(array("err" => true, "msg" => "Aucun utilisateur inscrit avec le matricule " . $bossa));
    } else {
        $d = fetchData($bossa);
        $d=$d[0];
        $pwrd = $d["pwd"];
        if (password_verify($password, $pwrd)) {
            addHist($bossa,date("d/m/Y"),$app);
            $_SESSION['wa'] = true;
            $_SESSION["name"] = $d["nom"];
            $_SESSION["mat"] = $bossa;
            $_SESSION["email"] = $d['email'];
            $_SESSION["pp"] = $d["pp"];
            echo json_encode(array("err" => false, "msg" => "Vous êtes désormais connecter", "data" => array("nom" => $d["nom"], "pp" => $d["pp"], "email" => $d["email"], "mat" => $bossa)));
        } else {
            echo json_encode(array("err" => true, "msg" => "Mot de passe incorrect !"));
        }
    }
}
