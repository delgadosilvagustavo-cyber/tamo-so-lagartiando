-- 1. Cria o banco de dados (schema) se ele não existir
CREATE DATABASE IF NOT EXISTS gerartxt
DEFAULT CHARACTER SET utf8mb4
DEFAULT COLLATE utf8mb4_general_ci;

-- 2. Seleciona o banco de dados para uso
USE gerartxt;

-- 3. Cria a tabela de usuários
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL, -- Tamanho ideal para guardar o hash do password_hash
    nascimento DATE NULL,
    genero VARCHAR(20) NOT NULL,
    observacao TEXT NULL,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;