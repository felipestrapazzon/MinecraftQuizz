<?php 
    
    require_once "ProdutoDAO.php";

    ProdutoDAO::cadastrar($_GET);
    
    header("Location:../confirm.html");    

    