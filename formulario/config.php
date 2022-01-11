<?php

$dbHost = 'localHost';
$dbUsername = 'root';
$dbPassword = 'root';
$dbName = 'Formulario-php';

// conexão com banco de dados
$connection = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// verificação de connection
if ($connection->connect_errno) {
  echo "Erro de conexão";
} else {
  echo "Conexão efetuada com sucesso";
}
