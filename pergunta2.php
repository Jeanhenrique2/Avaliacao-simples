<?php
session_start();
include 'layout.php';

// Se a pergunta 1 ainda não foi respondida, volta para ela
if (empty($_SESSION['q1'])) {
    header('Location: pergunta1.php');
    exit;
}

$erro = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['resposta'])) {
        $erro = "Selecione uma opção antes de continuar.";
    } else {
        $_SESSION['q2'] = $_POST['resposta'];
        header('Location: pergunta3.php');
        exit;
    }
}

abrirPagina("Pergunta 2 de 3");
?>
    <h2>O atendente foi cordial e atencioso?</h2>

    <?php if ($erro): ?>
        <div class="erro"><?php echo $erro; ?></div>
    <?php endif; ?>

    <form method="POST">
        <label><input type="radio" name="resposta" value="Ótimo"> Ótimo</label>
        <label><input type="radio" name="resposta" value="Bom"> Bom</label>
        <label><input type="radio" name="resposta" value="Regular"> Regular</label>
        <label><input type="radio" name="resposta" value="Ruim"> Ruim</label>
        <button type="submit">Próximo</button>
    </form>
<?php
fecharPagina();
