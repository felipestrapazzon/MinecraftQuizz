<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Remover Questões</title>
</head>

<body>
    <header>
        <?php
        include "incs/navbar.html";
        ?>
    </header>

    <div class="container spaccingL">

        <div class="spaccingB">
            <h1 class="tittle">Remover Perguntas</h1>
        </div>
        <form action="./src/remover.php" method="POST">

            <div class="spaccingB spaccingT">
                <label class="label" for="">ID Da Pergunta</label>
                <input type="number" class="input" style="padding-right: 26%;" id="input" name="idquestao" placeholder="" require>
            </div>

            <div class="box">
                <button class="button-9-R objeto-a-flutuar" type="submit" role="button"><b>Remover</button>
            </div>
    </div>
    </form>
</body>

</html>