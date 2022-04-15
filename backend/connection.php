<?php

// $hostname = 'localhost';
// $user = 'root';
// $pass = '';
// $database = 'php_newtab';
// $port = 3306;

// Para conectar com um banco é preciso passar no construtor os seguintes parametros: 'host', 'usuario', 'senha', 'nome do banco'
$db = new mysqli('localhost', 'root', '', 'crudphp');

// mensagem de erro caso a conexão com o banco falhe
if ($db->connect_errno) {
    echo "<p>Falha ao conectar com o banco de dados!</p>";
}

// querys para compatibilidade em utf8
$db->query("SET NAMES 'utf8'");
$db->query("SET character_set_connection=utf8");
$db->query("SET character_set_client=utf8");
$db->query("SET character_set_results=utf8");
