<?php
// Este arquivo guarda pedaços de HTML que se repetem em todas as páginas,
// assim não precisamos copiar e colar o mesmo estilo várias vezes.

function abrirPagina($titulo) {
    echo "<!DOCTYPE html>
    <html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <title>$titulo</title>
        <style>
            body { font-family: Arial, sans-serif; background: #f4f6f8; display: flex; justify-content: center; padding: 40px; }
            .card { background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); width: 100%; max-width: 420px; }
            h2 { color: #2c3e50; margin-top: 0; }
            label { display: block; margin: 8px 0; font-size: 15px; cursor: pointer; }
            textarea { width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 6px; box-sizing: border-box; }
            button { background: #2e86de; color: #fff; border: none; padding: 10px 18px; border-radius: 6px; cursor: pointer; font-size: 15px; margin-top: 16px; }
            button:hover { background: #1b6fc9; }
            .erro { background: #ffecec; border: 1px solid #ff4d4f; padding: 10px; border-radius: 6px; color: #a8071a; margin-bottom: 12px; font-size: 14px; }
        </style>
    </head>
    <body>
    <div class='card'>";
}

function fecharPagina() {
    echo "</div></body></html>";
}
