<?php

//ALL FUNCTIONS HERE...

// require_once "ConexaoBD.php";

// class ProdutoDAO {

//     public static function cadastrar($dados){

//         $nome = $dados['nome'];
//         $valor = $dados['valor'];
//         $quantidade = $dados['quantidade'];
//         $marca = $dados['marca'];
        
//         //INSERIR DADOS NO SQL
    
//         $sql = "insert into produto (nome, valor, quantidade, marca) values ('$nome', $valor, $quantidade, '$marca')";
    
//         $conexao = ConexaoBD::conectar();
    
//         $conexao->exec($sql);
        
        
    
//     }


//     public static function deletar($idproduto){
    
//         //DELETAR DADOS NO SQL
    
//         $sql = "delete from produto where idproduto = $idproduto";
    
//         $conexao = ConexaoBD::conectar();
    
//         $conexao->exec($sql);

//     }

//     public static function consultar(){

//         $conexao = ConexaoBD::conectar();

//         $sql = "select * from store3a.produto";

//         $produto = $conexao->query($sql);
        
//         return $produto;

        
//     }

//     public static function pesquisar($key){

//         $conexao = ConexaoBD::conectar();
//         $sql = "select * from store3a.produto where nome like '%$key%'";
//         $produtos = $conexao->query($sql);
//         return $produtos;
//     }

//     public static function valor($min, $max){

//         $conexao = ConexaoBD::conectar();
//         $sql = "select * from store3a.produto where valor >= '$min' and valor <= '$max'";
//         $produtos = $conexao->query($sql);
//         return $produtos;
//     }
// }

