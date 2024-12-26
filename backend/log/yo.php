<?php
session_start();
require("../function/r.php");



    $data=get4User($_SESSION["mat"]);

    echo json_encode($_SESSION);
