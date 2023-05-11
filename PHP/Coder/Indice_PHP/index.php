<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css" class="css">
    <title>Curso de PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso em PHP</h1>
        <h2>Indice de Exercícios</h2>
    </header>
       
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <?php
                for($c=1;$c<=9; $c++){    
                    echo "
                    <div class='modulo'>
                        <h3>Módulo $c</h3>
                        <ul>
                            <li><a href='#'>Exercicio A</a></li>
                            <li><a href='#'>Exercicio B</a></li>
                            <li><a href='#'>Exercicio C</a></li>
                        </ul>
                    </div>
                    ";
                }
                ?>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        <?php echo "D20 - SOLUCOES EM TECNOLOGIA © ". date("Y"); ?> 
    </footer>
</body>
</html>