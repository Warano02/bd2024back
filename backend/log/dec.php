<?php
session_start();

if(isset($_GET)){
    session_destroy();
    echo json_encode(array("err"=>false,"msg"=>"Utilisateur déconnecter avec succès !"));
}