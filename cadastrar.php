<?php
require_once "src/ConexaoBD.php";

$nome = $_GET['nome'];
$cpf = $_GET['cpf'];
$datanasc = $_GET['data_nascimento'];
$estado = $_GET['estado'];
$cidade = $_GET['cidade'];
$endereco = $_GET['endereco'];
$telefone = $_GET['telefone'];
$email = $_GET['email'];
$senha = md5($_GET['senha']);
$sql = "insert into usuarios (nome, cpf, data_nascimento, estado, cidade, endereco, telefone, email, senha) values ('$nome', '$cpf', '$datanasc', '$estado', '$cidade', '$endereco', '$telefone', '$email', '$senha')";
$conexao = ConexaoBD::getConexao();
$conexao->exec($sql);
echo "Usuario cadastrado!";

/*
CÓDIGO PARA CRIAÇÃO DA TABELA DE CADASTRO

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    cpf VARCHAR(14),
    data_nascimento DATE,
    estado VARCHAR(255),
    cidade VARCHAR(255),
    endereco TEXT,
    telefone VARCHAR(255),
    email VARCHAR(255),
    senha VARCHAR(255)
);
*/