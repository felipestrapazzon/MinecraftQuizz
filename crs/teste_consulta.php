<?php 

require_once "src/ConexaoBD.php";

$conexao = ConexaoBD::conectar();

$sql = "select * from store3a.produto";

$produto = $conexao->query($sql);

foreach ($produto as $produtos) {
    
    echo "ID:  {$produto['idproduto']} . \n";
    echo "Nome:  {$produtos['nome']} . \n";
    echo "Valor:  {$produtos['valor']} . \n"; 
    echo "Quantidade:  {$produtos['quantidade']} \n";
    echo "Marca:  {$produtos['marca']} . \n";
    echo "======================================" . "\n";

}





