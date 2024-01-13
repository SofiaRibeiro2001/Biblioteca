<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title> Alterar Manual</title>
    </head>
    <body>
        <h1>Alterar Manuais</h1>
        <hr><br>

    <form method="post" action="alterar2.php">
        <p> Qual o manual a alterar: <select name="cp_id">
    <?php
    include 'liga_bd.php';

    $sql="SELECT * FROM t_manual ORDER BY titulo";
    $resultado=mysqli_query($ligacao, $sql) or die (mysqli_error($ligacao));

    while($linha=mysqli_fetch_assoc($resultado)){
        echo"<option value='" .$linha['id']."'>".$linha['titulo']."</option>";
    }
    mysqli_close($ligacao);
    ?>
    </select>
        <input class="btn" type="submit" value="Alterar">
        </form>
        <br/>
        <a class="btn"href="index.html" target="_self">Volta ao Menu</a>
    </body>
</html>