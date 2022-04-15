<?php

$hostname = 'localhost';
$user = 'root';
$pass = '';
$database = 'php_newtab';
$port = 3306;

// Para conectar com um banco é preciso passar no construtor os seguintes parametros: 'host', 'usuario', 'senha', 'nome do banco'
$banco = new mysqli('localhost', 'root', '', 'php_relational');

// mensagem de erro caso a conexão com o banco falhe
if ($banco->connect_errno) {
    echo "<p>Falha ao conectar com o banco de dados!</p>";
}

// querys para compatibilidade em utf8
$banco->query("SET NAMES 'utf8'");
$banco->query("SET character_set_connection=utf8");
$banco->query("SET character_set_client=utf8");
$banco->query("SET character_set_results=utf8");
