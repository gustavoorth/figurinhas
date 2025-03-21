<?php

class DatabaseService {
    // Configurações de conexão
    private $host = 'localhost';
    private $dbname = 'figa';
    private $username = 'root';
    private $password = '';
    private $connection = null;

    // Método para conectar ao banco de dados
    public function connect() {
        try {
            // Cria uma nova instância PDO (PHP Data Object) para conectar ao banco
            $dsn = "mysql:host={$this->host};dbname={$this->dbname}";
            $this->connection = new PDO($dsn, $this->username, $this->password);
            
            // Definir o modo de erro do PDO para exceção
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->connection;
        } catch (PDOException $e) {
            // Caso ocorra erro na conexão, exibe uma mensagem
            echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
            return null;
        }
    }

    // Método para fechar a conexão
    public function close() {
        $this->connection = null;
    }
}
