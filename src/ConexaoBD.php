<?php 

class ConexaoBD {
    public static function conectar(){

        $conexao = new PDO("mysql:host=172.16.1.85;dbname=ifquiza","Aluno","Coringa");
        return $conexao;
    }
}



