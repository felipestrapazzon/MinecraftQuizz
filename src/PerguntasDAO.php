<?php   
session_start();

require_once 'ConexaoBD.php';

class PerguntasDAO{

public static function listarPergunta() {

    $sql = "select * from questoes where idtema=11";
    
        $conexao = ConexaoBD::conectar();
    
        $perguntas = $conexao->query($sql);

        return $perguntas;


}

public static function cadastrarPergunta($dados){
    $pergunta = $dados['pergunta'];
    $a = $dados['a'];
    $b = $dados['b'];
    $c = $dados['c'];
    $d = $dados['d'];
    $resposta = $dados['resposta'];

    $sql = "insert into questoes (questao,opcaoA,opcaoB,opcaoC,opcaoD,resposta,idtema) values ('$pergunta','$a','$b','$c','$d','$resposta','11')";
    
        $conexao = ConexaoBD::conectar();
    
        $conexao->exec($sql);
}

public static function remover($idquestao)
    {
        $sql = "delete from questoes where idquestao='$idquestao'";

        $conexao = ConexaoBD::conectar();
        $conexao->exec($sql);
    }

}