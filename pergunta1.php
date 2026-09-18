<?php
session_start();           // abre a "mochila" de sessão
include 'layout.php';      // carrega o visual reutilizável

$erro = "";

// Se o usuário clicou em "Próximo" (enviou o formulário)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['resposta'])) {
        $erro = "Selecione uma opção antes de continuar.";
    } else {
        $_SESSION['q1'] = $_POST['resposta']; // guarda a resposta na sessão
        header('Location: pergunta2.php');    // vai para a próxima página
        exit;
    }
}

abrirPagina("Pergunta 1 de 3");
?>
    <h2>Como você avalia o atendimento no geral?</h2>

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
