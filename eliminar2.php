<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <meta http-equiv="refresh" content="5;url=index.html"/>
        <title>Eliminação de Manuais</title>
    </head>
    <body>
        <h1>Eliminação de Manuais</h1>
        <hr>
        <?php
            $cp_id=$_POST['cp_id'];
            include 'liga_bd.php';

            $sql ="DELETE FROM t_manual WHERE id=".$cp_id;
            if (mysqli_query($ligacao, $sql)){
                echo "<h2>Manual apagado com sucesso!</h2>";
            }
            else{
                echo "Erro! " . mysli_error($ligacao);
            }

        mysqli_close($ligacao);
        ?>
    <p>
        <h4>Aguarde, vai ser redirecionado</h4>
    </body>
</html>