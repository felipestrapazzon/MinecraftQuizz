<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Quiz - Minecraft</title>
</head>


<body>


    <header>
        <?php
        include "incs/navbar.html";
        ?>
    </header>

    <div class="spaccingB spaccingL">
        <h1 class="tittle">Lista de Perguntas</h1>
    </div>

    <div class="spaccingL spaccingTT left">
        <table class="">
            <thead>
                <tr>
                    <th>Pergunta</th>
                    <th>Opção A</th>
                    <th>Opção B</th>
                    <th>Opção C</th>
                    <th>Opção D</th>
                    <th>Resposta</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once "./src/PerguntasDAO.php";
                $perguntas = PerguntasDAO::listarPergunta();
                foreach($perguntas as $pergunta){
                    ?>
                    <tr>
                        <td><?=$pergunta['questao']?></td>
                        <td><?=$pergunta['opcaoA']?></td>
                        <td><?=$pergunta['opcaoB']?></td>
                        <td><?=$pergunta['opcaoC']?></td>
                        <td><?=$pergunta['opcaoD']?></td>
                        <td><?=$pergunta['resposta']?></td>
                    </tr>
                    <?php
                };
                    ?>
            </tbody>
        </table>
    </div>
</body>
</html>