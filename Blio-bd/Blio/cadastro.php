<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Biblioteca Online</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
    <main>
        <div class="principal">
            <?php
                include "connect.php";

                // Verifica se os dados foram enviados via POST
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $usuario = $_POST['nome'];
                    $email = $_POST['email'];
                    $senha = $_POST['senha'];

                    // Query SQL corrigida
                    $sql = "INSERT INTO cadastra (nome, email, senha) VALUES ('$usuario', '$email', '$senha')";

                    if (mysqli_query($conn, $sql)) {
                        echo "$usuario cadastrado com sucesso";
                    } else {
                        echo "Erro ao cadastrar $usuario: " . mysqli_error($conn);
                    }
                } else {
                    echo "Formulário não submetido corretamente.";
                }
            ?>
        </div>
    </main>
</body>
</html>
