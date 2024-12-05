<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Animais - Dados Recebidos</title>
    <link rel="stylesheet" href="estilo.css"> <!-- Link para o CSS -->
</head>
<body>
    <!-- Cabeçalho -->
    <header>
        <h1>Cadastro de Animais</h1>
    </header>

    <!-- Menu de Navegação -->
    <nav>
        <ul>
            <li><a href="index.html">Página Inicial</a></li>
            <li><a href="server.php">Exibir Dados</a></li>
            <li><a href="desenv.html">Desenvolvedores</a></li>
        </ul>
    </nav>

    <!-- Área Principal -->
    <main>
    <?php
        // Verifica se o formulário foi enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Coleta os dados do formulário
            $nome = isset($_POST['nome']) ? $_POST['nome'] : 'Não informado';
            $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : 'Não informado';
            $idade = isset($_POST['idade']) ? $_POST['idade'] : 'Não informado';
            $cor = isset($_POST['cor']) ? $_POST['cor'] : 'Não informado';
            $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : 'Não informado';
            $saude = isset($_POST['saude']) ? $_POST['saude'] : 'Não informado';
            $descricao = isset($_POST['descricao']) ? $_POST['descricao'] : 'Não informado';
            $data_nascimento = isset($_POST['data_nascimento']) ? $_POST['data_nascimento'] : 'Não informado';
            $email_contato = isset($_POST['email_contato']) ? $_POST['email_contato'] : 'Não informado';
            $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : 'Não informado';
            
           
            $preferencias_alimentares = isset($_POST['preferencias_alimentares']) ? (array) $_POST['preferencias_alimentares'] : [];

            // Processa o upload da foto
            $foto_nome = "Nenhuma foto enviada";
            if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
                $foto_nome = $_FILES['foto']['name'];
            }

            // Exibe os dados
            echo "<h2>Dados do Cadastro</h2>";
            echo "<p><strong>Nome do Animal:</strong> $nome</p>";
            echo "<p><strong>Tipo:</strong> $tipo</p>";
            echo "<p><strong>Idade:</strong> $idade</p>";
            echo "<p><strong>Cor:</strong> $cor</p>";
            echo "<p><strong>Sexo:</strong> $sexo</p>";
            echo "<p><strong>Saúde:</strong> $saude</p>";
            echo "<p><strong>Descrição:</strong> $descricao</p>";
            echo "<p><strong>Data de Nascimento:</strong> $data_nascimento</p>";
            echo "<p><strong>E-mail de Contato:</strong> $email_contato</p>";
            echo "<p><strong>Telefone de Contato:</strong> $telefone</p>";

            // Exibe as preferências alimentares
            if (is_array($preferencias_alimentares) && !empty($preferencias_alimentares)) {
                echo "<p><strong>Preferências Alimentares:</strong> " . implode(", ", $preferencias_alimentares) . "</p>";
            } else {
                echo "<p><strong>Preferências Alimentares:</strong> Não especificadas</p>";
            }

          
            echo "<p><strong>Foto:</strong> $foto_nome</p>";
        } else {
            echo "<p>Nenhum dado enviado.</p>";
        }
    ?>

    </main>

    <!-- Rodapé -->
    <footer>
        <p>IFRN - Campus Santa Cruz</p>
        <p>Trabalho de Autoria Web</p>
        <p>Prof. Marcelo Figueiredo Barbosa Júnior</p>
        <p>Equipe: Ana Beatriz Silva de Oliveira, Julia Medeiros Gomes de Oliveira, Mariany da Silva</p>
    </footer>
</body>
</html>
