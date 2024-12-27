<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Pre:wght@400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/exercicios.css">
    <title>Exercício </title>
</head>
<body class="exercicio"> 
    <header class="cabecalho">
        <h1>curso PHP</h1>
        <h2>Visualização de exercício</h2>
    </header>
    <nav class= "navegacao">
        <a href = <?= "{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde"> Sem fromatação</a>
        <a href = "index.php" class="vermelho"> Voltar</a>
    </nav>
    <main class="principal">
            <div class="conteudo">
               <?php
                    include(__DIR__."/{$_GET['dir']}/{$_GET['file']}.php");
               ?>
            </div>
    </main>
    <footer class="rodape">
        AL3X! & ALEX ₢ <?= date('y'); ?>
    </footer>

</body>
</html>