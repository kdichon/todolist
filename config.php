<?php

// chemin acceès physique
$dir_fs = $_SERVER['DOCUMENT_ROOT'];    // ."/todolist/"

// chemin acceès virtuel
$dir_ws = '/todolist/';

$dir_common = $dir_fs."/common/";

// Parametres de connexion de MySQL DB
$dbHost = "localhost";
$dbUser = "root";
$dbPwd = "";
$dbName = "todolist";
?>