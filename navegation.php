<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minecraft Site</title>
</head>

<body>
    <main>
        <nav>
            <ol>
                <li><a href="register.php" class="lista">Cadastrar</a></li>
                <li><a href="remove.php" class="lista">Remover</a></li>
                <li><a href="questions.php" class="lista">Perguntas</a></li>
                <li><a href="game.php" class="lista">Jogo</a></li>
            </ol>
        </nav>
    </main>

    <style>

        @font-face {
            font-family: MineFont;
            src: url(fonts/Minecraft.ttf);
        }

        * {
        margin: 0;
        padding: 0;
        }

        html, body {
            display:flex;
            justify-content:center;
            align-items:center;
            font-family: MineFont;
            font-size: 32px;
            line-height: 2;
            height: 100%;
            background-color: #1B121E;
            text-transform: uppercase;
            letter-spacing: 6px;
        }

        li {

            color: greenyellow;
        }

        li a {
            color: white;
            cursor: pointer;
            padding-right: 10px;
            transition: all 0.5s ease; /* Transição para entrada e saída */
            position: relative;
            display: block;
            text-decoration: none;
        }

        li a::after {
            content: '';
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            width: 2px;
            background-color: greenyellow;
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        li a:hover::after {
            animation: Pisca 1s infinite;
            opacity: 1;
        }

        li a:hover {
            background-color: rgba(0, 0, 0, 0.2);
            padding-left: 10px;
            padding-top: 5px;
            border-radius: 10px;
        }

        @keyframes Pisca {
            0% { opacity: 0; }
            50% { opacity: 1; }
            100% { opacity: 0; }
        }

        
    </style>
</body>

</html>