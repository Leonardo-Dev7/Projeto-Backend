<?php
$DB_HOST = 'localhost';
$DB_NAME = 'sistema_login';
$DB_USER = 'sistema_user';   
$DB_PASS = 'lorenasenai';    

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conexao = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    $conexao->set_charset('utf8mb4');
} catch (Exception $e) {
    http_response_code(500);
    echo "Erro de conexão com o banco: " . htmlspecialchars($e->getMessage());
    exit;
}