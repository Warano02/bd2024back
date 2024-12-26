<?php
session_start();
require("../function/r.php");

if(isset($_GET)){

    $data=get4User($_SESSION["mat"]);

    echo json_encode($data);
}