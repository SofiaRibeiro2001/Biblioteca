<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title>Alterar Manual</title>
    </head>
    <body>
        <h1>Alterar Manuais</h1>
        <?php
        include 'liga_bd.php';
        $sql ="SELECT * FROM t_manual WHERE id=$_POST[cp_id]";
        $resultado =mysqli_query($ligacao, $sql) or die(mysqli_error($ligacao)); 
        $linha = mysqli_fetch_assoc($resultado);
?>
        <form action="alterar3.php" method="post">
            <p>Id:<input type="text" name="cp_id" size="11" readonly value="<?php echo $linha['id'];?>"></p>
            <p>Título: <input type="text" name="titulo" size="40" required  value="<?php echo $linha['titulo'];?>"></p>
            <p>Num. páginas: <input type="text" name="num_pag" size="11" required  value="<?php echo $linha['num_pag'];?>"></p>
            Descrição:<input type="text" name="text_descr" size="80" required  value="<?php echo $linha['text_descr'];?>"><br><br>
            Peso Kb:<input type="text" name="peso_kb" size="8" required  value="<?php echo $linha['peso_kb'];?>"><br><br>
            Autor:<input type="text" name="autor" size="20" required  value="<?php echo $linha['autor'];?>">
            
            <input class="btn" type="submit" value="Alterar">
            <br><br>
            <a class="btn" href="index.html" target="_self">Voltar ao menu</a>
        </form>
<?php
 mysqli_close($ligacao);
 ?>
    </body>
</html>