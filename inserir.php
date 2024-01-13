<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <meta http-equiv="refresh" content="5;url=index.html" />
        <title> Gestão da Biblioteca</title>
    </head>
    <body>
        <h1>Inserir Manuais</h1><br>
        <?php
        include 'liga_bd.php';
        // instrução para adicionar 
        $sql="INSERT INTO t_manual (titulo, num_pag, text_descr, peso_kb, autor) VALUES
        ('$_POST[titulo]','$_POST[num_pag]','$_POST[text_descr]', '$_POST[peso_kb]','$_POST[autor]')";
        
        if (mysqli_query($ligacao, $sql)){
            echo "<h3>Livro inserido com Sucesso!</h3>";
        }
        mysqli_close($ligacao);
        echo "<br/>";
        ?>
        <h4> Aguarde que vai ser redirecionado</h4>
        <a href="index.html" target="_self">Voltar</a>
    </body>
</html>