<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title>Gestão de Manuais</title>
        <meta http-equiv="refresh" content="5;url=index.html">
    </head>
    <body>
        <h1>Alterar Manuais</h1>
        <?php
        include 'liga_bd.php';
        $sql ="UPDATE t_manual SET
        titulo='$_POST[titulo]',
        num_pag='$_POST[num_pag]',
        text_descr='$_POST[text_descr]',
        peso_kb='$_POST[peso_kb]',
        autor='$_POST[autor]'  WHERE id=$_POST[cp_id]";

        // caso consiga executar a ação mostra a mensagem de sucesso
        if (mysqli_query($ligacao, $sql))
            echo "<h3>Cliente alterado com sucesso!</h3>"; 
        mysqli_close($ligacao); echo "<br/>";
        ?>
        <br/><h4>Aguarde que vai ser redirecionado</h4>
        <a class="btn" href="index.html" target="_self">Volta</a>
    </body>
</html>