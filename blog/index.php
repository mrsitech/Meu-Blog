<?php

require 'config.php';
include 'src/Artigo.php';

$artigo = new Artigo($mysql);
$artigos = $artigo->exibirTodos();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Meu Blog</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="container">
        <h1>Pacientes</h1>
        <?php foreach ($artigos as $artigo) : ?>
        <h2>
            <a href="artigo.php?id=<?php echo $artigo['id']; ?>">
                <?php echo $artigo['titulo']; ?>
            </a>
        </h2>
        <p>
            <!--A função nl2br() troca espaços por br/ do html-->
            <?php echo nl2br($artigo['conteudo']); ?>
        </p>
        <?php endforeach; ?>
    </div>
</body>

</html>