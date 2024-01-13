<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title> Gestão de clientes</title>
    </head>
    <body>
        <h1>Listagem dos Manuais</h1><br>
        <?php 
        
        include 'liga_bd.php';
        $sql="SELECT * FROM t_manual";

        // esta variavel resultado vai armazenar todos os registos existentes na base de dados
        $resultado = mysqli_query($ligacao,$sql) or die (mysqli_error($ligacao));
        // variavel para controlar o numero de registos que tem na bd
        $numreg = 0;
        
        // enquanto houver registos
        while($linha=mysqli_fetch_assoc($resultado)){
            echo "<b>ID:</b>" . $linha['id'] . "<br/>";
            echo "<b>Titulo:</b>" . $linha['titulo'] . "<br/>";
            echo "<b>Num.páginas:</b>" . $linha['num_pag'] . "<br/>";
            echo "<b>Descrição:</b>" . $linha['text_descr'] . "<br/>";
            echo "<b>Peso:</b>" . $linha['peso_kb'] . "<br/>";
            echo "<b>Autor:</b>" . $linha['autor'] . "<br/>";
            echo "<hr>";
            $numreg++;
        }
        echo "<br> Número de registos na base de dados: " . $numreg;
        mysqli_close($ligacao);

        // fechar o php
        ?>
        <br><br>
        <a href="index.html" target="_self" class="btn">Voltar</a>
        <br><br>
    </body>
</html>