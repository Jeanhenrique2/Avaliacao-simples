<?php
include 'layout.php';
abrirPagina("Respostas recebidas");

$arquivo = 'avaliacoes.txt';
?>
    <h2>📊 Avaliações recebidas</h2>

    <?php
    // Verifica se o arquivo existe e se tem alguma resposta salva
    if (!file_exists($arquivo) || filesize($arquivo) === 0) {
        echo "<p>Nenhuma avaliação foi enviada ainda.</p>";
    } else {
        // Lê o arquivo linha por linha (cada linha é uma avaliação)
        $linhas = file($arquivo, FILE_IGNORE_NEW_LINES);

        echo "<table style='width:100%; border-collapse: collapse; font-size: 13px;'>";
        echo "<tr style='background:#f0f2f5; text-align:left;'>
                <th style='padding:8px;'>Data</th>
                <th style='padding:8px;'>Pergunta 1</th>
                <th style='padding:8px;'>Pergunta 2</th>
                <th style='padding:8px;'>Pergunta 3</th>
                <th style='padding:8px;'>Comentário</th>
              </tr>";

        foreach ($linhas as $linha) {
            // Cada linha tem o formato:
            // 2026-09-18 13:30:00 | Pergunta 1: Bom | Pergunta 2: Ótimo | Pergunta 3: Regular | Comentário: texto
            $partes = explode(" | ", $linha);

            echo "<tr style='border-bottom:1px solid #eee;'>";
            foreach ($partes as $parte) {
                // Remove o rótulo (ex: "Pergunta 1: ") e deixa só o valor
                $valor = strpos($parte, ": ") !== false
                    ? substr($parte, strpos($parte, ": ") + 2)
                    : $parte;
                echo "<td style='padding:8px;'>" . htmlspecialchars($valor) . "</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    }
    ?>

    <br>
    <a href="pergunta1.php">← Preencher nova avaliação</a>
<?php
fecharPagina();