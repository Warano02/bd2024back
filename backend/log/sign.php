<?php
session_start();
require("../function/auth.php");
$data = json_decode(file_get_contents("php://input"), true);

if ( isset($data)) {
    $username =  htmlspecialchars($data["name"]);
    $password = htmlspecialchars( $data["pwd"]);
    $mat = htmlspecialchars( $data["mat"]);
    $email =  htmlspecialchars($data["email"]);
    $fil =  htmlspecialchars($data["fil"]);
    $code = htmlspecialchars( $data["code"]);
    $niv =  htmlspecialchars($data["niv"]);
    $o =  htmlspecialchars($data["o"]);
  
    $test=v($mat); // Vérifie si  l'utilisateur existe deja 

    if(!$test){
     createUser($o, $mat, $email, $username, $niv, $password, $fil, $code);
     $_SESSION['wa']=true;
     $_SESSION["name"]=$username;
     $_SESSION["mat"]=$mat;
     $_SESSION["email"]=$email;
     $_SESSION["code"]=$code;
     $_SESSION["pp"]="admin.jpg"; // Cas ou il s'agit d'un enseignant
     echo json_encode(array("err"=> false,"msg"=> "Votre compte a été crée avec success"));
    }else{
        echo json_encode(array("err"=> true,"msg"=> "Cet utilisateur existe deja"));
    }
}
