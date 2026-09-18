<?php
session_start();
include 'layout.php';

if (empty($_SESSION['q3'])) {
    header('Location: pergunta1.php');
    exit;
}

// Monta uma linha com todas as respostas e salva num arquivo .txt
$linha = date("Y-m-d H:i:s")
    . " | Pergunta 1: " . $_SESSION['q1']
    . " | Pergunta 2: " . $_SESSION['q2']
    . " | Pergunta 3: " . $_SESSION['q3']
    . " | Comentário: " . ($_SESSION['comentario'] ?? '(sem comentário)')
    . PHP_EOL;

file_put_contents('avaliacoes.txt', $linha, FILE_APPEND);

abrirPagina("Obrigado!");
?>
    <h2>✅ Obrigado pela sua avaliação!</h2>
    <p>Suas respostas foram registradas com sucesso.</p>
<?php
fecharPagina();

// Limpa a sessão para permitir uma nova avaliação
session_unset();
session_destroy();
