<?php

include_once "banco.php";

$dbService = new DatabaseService();

// Tentar conectar ao banco de dados
$connection = $dbService->connect();

$sql = "INSERT INTO usuario (email, senha) VALUES (:email, :senha)";
            
// Prepara a declaração
$stmt = $connection->prepare($sql);

// Fazendo o hash da senha para segurança

// Vincula os parâmetros aos valores fornecidos
$stmt->bindParam(':email', $_POST["email"]);
$stmt->bindParam(':senha', $_POST["senha"]);

// Executa a consulta
$stmt->execute();

echo "Usuário adicionado com sucesso!";

