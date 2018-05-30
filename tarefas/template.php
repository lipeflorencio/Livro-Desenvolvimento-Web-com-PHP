<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Gerenciador de Tarefas</title>
        <link rel="stylesheet" type="text/css" href="tarefas.css">
    </head>
    <body>
        <h1>Gerenciador de Tarefas</h1>
        
        <?php include('formulario.php'); ?>
        
        <?php if ($exibir_tabela) : ?>
            <?php include('tabela.php'); ?>
        <?php else : ?>
            <a href="tarefas.php">Cancelar</a>
        <?php endif; ?>

    </body>
</html>