<?php   

require_once './ConexaoBD.php';

class PerguntasDAO{

public static function listarPergunta() {

    $random = rand(1,20);

    $sql = "select ";
    
        $conexao = ConexaoBD::conectar();
    
        $conexao->exec($sql);

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
        $sql = "delete from produto where idproduto='$idquestao'";

        $conexao = ConexaoBD::conectar();
        $conexao->exec($sql);
    }

}