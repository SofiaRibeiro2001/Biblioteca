<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title> Eliminar Manual</title>
    </head>
    <body>
        <h1>Eliminação de Manuais</h1>
        <hr><br>

    <form method="post" action="eliminar2.php">
    Qual o Manual a eliminar: <select name="cp_id">
    <?php
    include 'liga_bd.php';

    $sql ="SELECT * FROM t_manual ORDER BY titulo";
    $resultado=mysqli_query($ligacao, $sql) or die (mysqli_error($ligacao));

    while($linha=mysqli_fetch_assoc($resultado)){
        echo"<option value='".$linha['id']."'>".$linha['titulo']."</option>";
    }
    mysqli_close($ligacao);
    ?>
    </select>
        <input class="btn" name="submit" type="submit" value="Eliminar"/>
        <br><br>
        <a class="btn" href="index.html" target="_self">Voltar</a>
        <br><br>
    </form>
    </body>
</html>
