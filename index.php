<?php
// Verifica se o método da requisição é POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    die('Method Not Allowed');
}

// Obtém os dados do formulário
$nome = isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : '';
$email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
$telefone = isset($_POST['telefone']) ? htmlspecialchars($_POST['telefone']) : '';
$serie = isset($_POST['série']) ? htmlspecialchars($_POST['série']) : '';
$data_nascimento = isset($_POST['data_nascimento']) ? htmlspecialchars($_POST['data_nascimento']) : '';
$endereco = isset($_POST['endereço']) ? htmlspecialchars($_POST['endereço']) : '';
$cidade = isset($_POST['cidade']) ? htmlspecialchars($_POST['cidade']) : '';
$estado = isset($_POST['estado']) ? htmlspecialchars($_POST['estado']) : '';

// Validação dos dados
$erros = [];

if (empty($nome)) {
    $erros[] = 'Nome é obrigatório.';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erros[] = 'Email inválido.';
}

// ... (adicione outras validações) ...

if (!empty($erros)) {
    foreach ($erros as $erro) {
        echo '<p style="color: red;">' . $erro . '</p>';
    }
    exit;
}

// Configurações do banco de dados (use um arquivo de configuração seguro)
$servername = "127.0.0.1";
$username = "root";
$password = ""; // Insira sua senha, se necessário.
$dbname = "alunos";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

try {
    // Prepara e executa a query SQL
    $sql = "INSERT INTO inscritos (nome, email, telefone, serie, data_nascimento, endereco, cidade, estado) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $nome, $email, $telefone, $serie, $data_nascimento, $endereco, $cidade, $estado);

    if ($stmt->execute()) {
        // echo "Dados inseridos com sucesso!";
    } else {
        throw new Exception("Erro ao inserir dados: " . $stmt->error);
    }

    $stmt->close();
    $conn->close();

    // Redireciona para a página inicial
    header("Location: pagina_teste.html");
    exit;

} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
    if (isset($stmt)){
        $stmt->close();
    }
    $conn->close();
    exit;
}
?>