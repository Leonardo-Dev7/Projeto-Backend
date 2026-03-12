<?php
require_once 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: cadastro.php');
    exit;
}

$nome = trim($_POST['nome'] ?? '');
$cpf = preg_replace('/\D/', '', $_POST['cpf'] ?? '');
$email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
$senha = $_POST['senha'] ?? '';
$confirmar = $_POST['confirmar_senha'] ?? '';
$termos = isset($_POST['termos']) ? 1 : 0;
$novidades = isset($_POST['novidades']) ? 1 : 0;

if (!$nome || !$cpf || !$email || !$senha || !$confirmar) {
    $msg = 'Preencha todos os campos obrigatórios.';
    header('Location: cadastro.php?error=' . urlencode($msg));
    exit;
}

if ($senha !== $confirmar) {
    $msg = 'As senhas não coincidem.';
    header('Location: cadastro.php?error=' . urlencode($msg));
    exit;
}

$stmt = $conexao->prepare('SELECT id FROM usuarios WHERE email = ? LIMIT 1');
$stmt->bind_param('s', $email);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows > 0) {
    $stmt->close();
    $msg = 'Email já cadastrado.';
    header('Location: cadastro.php?error=' . urlencode($msg));
    exit;
}
$stmt->close();

$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

$insert = $conexao->prepare('INSERT INTO usuarios (nome, cpf, email, senha_hash, termos_aceito, novidades, criado_at) VALUES (?, ?, ?, ?, ?, ?, NOW())');
$insert->bind_param('ssssii', $nome, $cpf, $email, $senha_hash, $termos, $novidades);
if ($insert->execute()) {
    $insert->close();
    header('Location: login.php?success=' . urlencode('Cadastro realizado com sucesso.'));
    exit;
} else {
    $insert->close();
    header('Location: cadastro.php?error=' . urlencode('Erro ao salvar. Tente novamente.'));
    exit;
}
