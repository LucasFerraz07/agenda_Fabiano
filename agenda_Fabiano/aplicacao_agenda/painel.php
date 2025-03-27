<?php 

    include('protect.php');

    include('conexao.php');

if(isset($_POST['data_evento'])) {

    $data_evento = $mysqli->real_escape_string($_POST['data_evento']);
    
    
    if (!strtotime($data_evento)) {
        die("Data inválida");
    }
    

    $data_formatada = date('Y-m-d', strtotime($data_evento));


    $sql_insert = "INSERT INTO usuario (nome, senha) VALUES ('$nome', '$senha')";
            if ($mysqli->query($sql_insert)) {
                echo "<script>alert('Operação realizada com sucesso!');</script>";
            } else {
                echo "<script>alert('Erro na inserção!');</script>";
            }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>
        <form>
            <label for="titulo">Título: </label>
            <input type="text" name="titulo" id="titulo" required>

            <label for="data_evento">Data do Evento</label>
            <input type="date" name="data_evento" id="data_evento" required>

        </form>
    </div>

    <a href="logout.php">Sair</a>
</body>
</html>