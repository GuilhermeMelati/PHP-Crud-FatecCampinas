<?php
session_start();

$_SESSION['usuarioEmail'];
$_SESSION['usuarioSenha'];

if (!isset($_SESSION["usuarioEmail"]) || !isset($_SESSION["usuarioSenha"])) {

    header("Location: frm_logar.php");

    exit;
} else {

?>

    <html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Perfil do Usuário</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>

    <body>
        <?php
        include("./nav.php");
        ?>
        <div class="bg-white font-sans h-3/4 w-full flex justify-center items-center mt-8">
            <form class="formulario" method="POST" action="../controller/controller_alterar.php">
                <input type="text" id="trecho" name="codigo_trecho" placeholder="Digite o Código do trecho" class="mb-5 p-3 w-80 focus:border-gray-700 rounded border-2 outline-none" required />
                <input type="text" id="titulo_trecho" name="titulo_trecho" placeholder="Digite o Título do trecho" class="mb-5 p-3 w-80 focus:border-gray-700 rounded border-2 outline-none" required />
                <input type="text" id="trecho" name="trecho" placeholder="Insira o trecho" class="mb-5 p-3 w-80 focus:border-gray-700 rounded border-2 outline-none" required />
                <div class='flex justify-center '>
                    <button class="
                        bg-gray-600
                        hover:bg-gray-900
                        text-white
                        font-bold
                        p-2
                        rounded
                        w-80" type="submit" name="acao">
                        <span>Alterar</span>
                    </button>
                </div>

            </form>

        </div>
    </body>

    </html>
<?php } ?>