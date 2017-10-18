<?php
    $var = $_POST["par"];
    require_once("conexao.php");
    $conexao = new conexao;
    $arr = $conexao-> conect();
    echo json_encode($arr);
?>