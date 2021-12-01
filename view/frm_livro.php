<?php

session_start();
$_SESSION['usuarioNome'];
$_SESSION['usuarioEmail'];
$_SESSION['usuarioSenha'];



if (!isset($_SESSION["usuarioEmail"]) || !isset($_SESSION["usuarioSenha"])) {

    header("Location: frm_logar.php");

    exit;
} else {
    $nome = "<div class='text-center mt-2 text-3xl font-medium'>" . $_SESSION['usuarioNome'] . "</div>";
    $email = "<div class='text-center mt-2 font-light text-sm'>" . $_SESSION['usuarioEmail'] . "</div>";
?>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>

    <body>
        <?php
        include("./nav.php");
        ?>
        <div class="grid grid-cols-2 items-center justify-center">
            <a href="frm_cadastro_livro.php" class="m-4 p-6 bg-white flex items-center space-x-6 rounded-lg shadow-md hover:scale-105 transition transform duration-500 cursor-pointer">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div>
                    <h1 class="text-xl font-bold text-gray-700 mb-2">Insira trechos de sua autoria</h1>
                    <p class="text-gray-600 w-80 text-sm">Crie, recrie e crie de novo!</p>
                </div>
            </a>
            <a href="../controller/controller_consulta_livro.php" class="m-4 p-6 bg-white flex items-center space-x-6 rounded-lg shadow-md hover:scale-105 transition transform duration-500 cursor-pointer">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                </div>
                <div>
                    <h1 class="text-xl font-bold text-gray-700 mb-2">Consulte trechos de sua autoria</h1>
                    <p class="text-gray-600 w-80 text-sm">Tudo que você já criou e mais um pouco!</p>
                </div>
            </a>
            <a href="frm_alterar.php" class="m-4 p-6 bg-white flex items-center space-x-6 rounded-lg shadow-md hover:scale-105 transition transform duration-500 cursor-pointer">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                    </svg>
                </div>
                <div>
                    <h1 class="text-xl font-bold text-gray-700 mb-2">Altere trechos de sua autoria</h1>
                    <p class="text-gray-600 w-80 text-sm">Altere tudo a qualquer momento!</p>
                </div>
            </a>
            <a href="frm_excluir.php" class="m-4 p-6 bg-white flex items-center space-x-6 rounded-lg shadow-md hover:scale-105 transition transform duration-500 cursor-pointer">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </div>
                <div>
                    <h1 class="text-xl font-bold text-gray-700 mb-2">Exclua trechos de sua autoria</h1>
                    <p class="text-gray-600 w-80 text-sm">Não se preocupe com os erros, aqui você pode apaga-los!</p>
                </div>
            </a>
        </div>
    <?php } ?>