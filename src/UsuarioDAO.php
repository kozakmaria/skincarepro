<?php
require_once "ConexaoBD.php";
class UsuarioDAO {
    public static function autenticarUsuario($login, $senha) {
        $senha = md5($senha);
        $sql = "select * from usuarios where email='$login' and senha='$senha'";
        $conexao = ConexaoBD::getConexao();
        $resultado = $conexao->query($sql);
        return $resultado->fetch(PDO::FETCH_ASSOC);
    }

   
}