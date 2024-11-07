<?php
class ConexaoBD{
    public static function getConexao():PDO{
        $conexao = new PDO("mysql:host=localhost;dbname=skincarepro","root","Batman");
        return $conexao;
    }
}
ConexaoBD::getConexao(); 