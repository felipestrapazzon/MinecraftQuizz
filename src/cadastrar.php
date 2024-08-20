<?php

require_once './PerguntasDAO.php';

PerguntasDAO::cadastrarPergunta($_POST);

header("Location:../register.php");