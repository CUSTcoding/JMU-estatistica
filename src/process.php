<?php

    // Incluir o arquivo de configuração do banco de dados
require_once '../db/db.conf.php';

// Verifica se o formulário foi submetido corretamente
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $nome_completo   = $_POST["nome_completo"] ?? "Não informado";
    $sexo            = $_POST["sexo"] ?? "Não informado";
    $data_nascimento = $_POST["data_nascimento"] ?? "Não informado";
    $naturalidade    = $_POST["naturalidade"] ?? "Não informado";
    $nacionalidade   = $_POST["nacionalidade"] ?? "Não informado";
    $cargo_pastoral  = $_POST["cargo_pastoral"] ?? "Não informado";
    $igreja_local    = $_POST["igreja_local"] ?? "Não informado";
    $classe          = $_POST["classe"] ?? "Não informado";
    $estado_civil    = $_POST["estado_civil"] ?? "Não informado";
    $formacao_teologica = $_POST["formacao_teologica"] ?? "Não informado";
    $formacao_academica = $_POST["formacao_academica"] ?? "Não informado";
    $cargo_igreja    = $_POST["cargo_igreja"] ?? "Não informado";  // Corrigido nome do campo
    $status_membro   = $_POST["status_membro"] ?? "Não informado";
    $feedback        = $_POST["feedback"] ?? "Não informado";
   

    // Verifique se a conexão PDO foi estabelecida
    if (isset($pdo)) {
        // Preparar o SQL para inserir os dados no banco
        $sql = "INSERT INTO membros (
                    nome_completo, sexo, data_nascimento, naturalidade, nacionalidade, 
                    cargo_pastoral, igreja_local, classe, estado_civil, formacao_teologica, 
                    formacao_academica, cargo_igreja, status_membro, feedback
                ) 
                VALUES (
                    :nome_completo, :sexo, :data_nascimento, :naturalidade, :nacionalidade, 
                    :cargo_pastoral, :igreja_local, :classe, :estado_civil, :formacao_teologica, 
                    :formacao_academica, :cargo_igreja, :status_membro, :feedback
                )";

        // Preparar a execução do SQL com os dados
        $stmt = $pdo->prepare($sql);
        
        // Vincular os parâmetros à consulta
        $stmt->bindParam(':nome_completo', $nome_completo);
        $stmt->bindParam(':sexo', $sexo);
        $stmt->bindParam(':data_nascimento', $data_nascimento);
        $stmt->bindParam(':naturalidade', $naturalidade);
        $stmt->bindParam(':nacionalidade', $nacionalidade);
        $stmt->bindParam(':cargo_pastoral', $cargo_pastoral);
        $stmt->bindParam(':igreja_local', $igreja_local);
        $stmt->bindParam(':classe', $classe);
        $stmt->bindParam(':estado_civil', $estado_civil);
        $stmt->bindParam(':formacao_teologica', $formacao_teologica);
        $stmt->bindParam(':formacao_academica', $formacao_academica);
        $stmt->bindParam(':cargo_igreja', $cargo_igreja);
        $stmt->bindParam(':status_membro', $status_membro);
        $stmt->bindParam(':feedback', $feedback);
        
        // Executar a consulta
        try {
            $stmt->execute();
            echo "Dados inseridos com sucesso!";
        } catch (PDOException $e) {
            echo "Erro ao inserir dados: " . $e->getMessage();
        }
    } else {
        echo "Erro na conexão com o banco de dados!";
    }

} else {
    // Redireciona para o formulário caso o usuário tente acessar diretamente esta página
    header("Location: ../public/index.php");
    exit();
}



?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Custódio Titosse (Fullstack) e Jemisse Zeca (Frontend)">
    <meta name="email" content="custodiotitossetitosse@email.com, jemissezeca07s3@email.com">
    <meta name="copyright" content="Desenvolvido por Custódio Titosse  e Jemisse Zeca">
    <title>Dados Submetidos - JMU</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="css/style.css">

    <style>
        /* Estilos personalizados para melhorar a aparência */
        body {
            background-color: #f8f9fa;
        }

        .card {
            border-radius: 1rem;
        }

        .table th {
            background-color: #007bff;
            color: white;
        }

        .table td {
            background-color: #f8f9fa;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .btn {
            padding: 10px 20px;
            font-size: 16px;
        }

        .table-responsive {
            max-height: 500px;
            overflow-y: auto;
        }

        .text-center {
            margin-top: 20px;
        }

        .footer {
            margin-top: 40px;
            text-align: center;
        }

        .footer p {
            font-size: 14px;
            color: #6c757d;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h2 class="text-center text-primary fw-bold mb-3">Dados Submetidos</h2>
        <p class="text-center text-muted mb-4">Confira as informações que você preencheu:</p>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>Nome Completo:</th>
                        <td><?= htmlspecialchars($nome_completo); ?></td>
                    </tr>
                    <tr>
                        <th>Sexo:</th>
                        <td><?= htmlspecialchars($sexo); ?></td>
                    </tr>
                    <tr>
                        <th>Data de Nascimento:</th>
                        <td><?= htmlspecialchars($data_nascimento); ?></td>
                    </tr>
                    <tr>
                        <th>Naturalidade:</th>
                        <td><?= htmlspecialchars($naturalidade); ?></td>
                    </tr>
                    <tr>
                        <th>Nacionalidade:</th>
                        <td><?= htmlspecialchars($nacionalidade); ?></td>
                    </tr>
                    <tr>
                        <th>Cargo Pastoral:</th>
                        <td><?= htmlspecialchars($cargo_pastoral); ?></td>
                    </tr>
                    <tr>
                        <th>Igreja Local:</th>
                        <td><?= htmlspecialchars($igreja_local); ?></td>
                    </tr>
                    <tr>
                        <th>Classe:</th>
                        <td><?= htmlspecialchars($classe); ?></td>
                    </tr>
                    <tr>
                        <th>Estado Civil:</th>
                        <td><?= htmlspecialchars($estado_civil); ?></td>
                    </tr>
                    <tr>
                        <th>Formação Teológica:</th>
                        <td><?= htmlspecialchars($formacao_teologica); ?></td>
                    </tr>
                    <tr>
                        <th>Formação Acadêmica:</th>
                        <td><?= htmlspecialchars($formacao_academica); ?></td>
                    </tr>
                    <tr>
                        <th>Cargo na Igreja:</th>
                        <td><?= htmlspecialchars($cargo_igreja); ?></td>
                    </tr>
                    <tr>
                        <th>Status de Membro:</th>
                        <td><?= htmlspecialchars($status_membro); ?></td>
                    </tr>
                    <tr>
                        <th>Feedback:</th>
                        <td><?= nl2br(htmlspecialchars($feedback)); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="text-center mt-4">
            <a href="../public/index.php" class="btn btn-secondary">Voltar</a>
            <button onclick="window.print()" class="btn btn-primary">Imprimir</button>
        </div>
    </div>
</div>

<div class="footer">
    <p>&copy; 2025 JMU - Todos os direitos reservados.</p>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>

