<?php
session_start();
require("../function/auth.php");
$element=getHist($_SESSION["mat"]);

echo json_encode($element);


