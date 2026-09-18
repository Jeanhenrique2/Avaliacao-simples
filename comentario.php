<?php
session_start();
include 'layout.php';

if (empty($_SESSION['q3'])) {
    header('Location: pergunta3.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['comentario'] = htmlspecialchars(trim($_POST['comentario'] ?? ''));
    header('Location: finalizar.php');
    exit;
}

abrirPagina("Comentário");
?>
    <h2>Algo a comentar?</h2>
    <form method="POST">
        <textarea name="comentario" rows="3" placeholder="Conte um pouco mais... (opcional)"></textarea>
        <button type="submit">Enviar avaliação</button>
    </form>
<?php
fecharPagina();
