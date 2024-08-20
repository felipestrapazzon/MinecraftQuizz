<?php
require_once "./PerguntasDAO.php";
    
PerguntasDAO::remover($_POST['idquestao']);

header("Location:../remove.php");