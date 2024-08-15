<?php 
    
    require_once "ProdutoDAO.php";

    ProdutoDAO::deletar($_GET['idproduto']);
    
    
    header("Location:../confirm.html");
    

    