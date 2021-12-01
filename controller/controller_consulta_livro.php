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
        <title>Livros Criados</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>

    <body>
        <?php
        include("../view/nav.php");
        ?>
        <div class="grid grid-cols-3 items-center justify-center">
        <?php
        include_once("../Model/conexao.php");

        $conn = conectar();

        $livro = "SELECT * FROM livro ORDER BY cod_trecho";

        $resultado_livro = mysqli_query($conn, $livro);

        while ($row_livro = mysqli_fetch_assoc($resultado_livro)) {
          
        ?>
          <div class="flex flex-col p-3 space-y-5 rounded-lg shadow-md hover:scale-105 transition transform duration-500 cursor-pointer m-4">
            <section class="text-sm font-thin text-orange-400">
              <?php echo $row_livro['data']; ?> | CÓD <?php echo $row_livro['cod_trecho']; ?>
            </section>
            <section class="text-3xl font-bold">
              <?php echo $row_livro['titulo_trecho']; ?>
            </section>
            <section class="font-normal text-md text-gray-700">
              <?php echo $row_livro['trecho']; ?>
            </section>
            <section class="font-bold text-lg text-blue-900">
              <?php echo $row_livro['autor']; ?>
            </section>
          </div>
        <?php } ?>
        </div>
  </body>

  </html>
<?php }
