<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    <title>Registrar Perguntas</title>
</head>

<body class="">

    <header>
        <?php
        include "incs/navbar.html";
        ?>
    </header>

    <main>

        <div class="container spaccingL">

            <div class="spaccingB">
                <h1 class="tittle">Cadastrar Perguntas</h1>
            </div>
            <form action="./src/cadastrar.php" method="POST">

                <div class="spaccingB spaccingT col-6">
                    <label class="label" for="">Pergunta</label>
                    <input type="text" class="input" style="padding-right: 26%;" id="input" name="pergunta" placeholder="" require>
                </div>

                <div class="clearfix spaccingB col-6">
                    <label class="label" for="">Alternativa A</label>
                    <input type="text" class="input" name="a" placeholder="" require>
                </div>

                <div class="clearfix spaccingB col-6">
                    <label class="label" for="">Alternativa B</label>
                    <input type="text" class="input" name="b" placeholder="" require>
                </div>

                <div class="clearfix spaccingB col-6">
                    <label class="label" for="">Alternativa C</label>
                    <input type="text" class="input" name="c" placeholder="" require>
                </div>

                <div class="clearfix spaccingB col-6">
                    <label class="label" for="">Alternativa D</label>
                    <input type="text" class="input" name="d" placeholder="" require>
                </div>


                <div class="resposta">
                    <div class="box spaccingB">
                        <label for="" class="label">Resposta</label>
                        <select name="resposta" id="">
                            <option value="">Selecione a resposta correta</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>

                    <div class="box">
                        <button class="button-9 objeto-a-flutuar" type="submit" role="button"><b>Cadastrar</button>
                    </div>
                </div>
            </form>



        </div>
    </main>
</body>

</html>