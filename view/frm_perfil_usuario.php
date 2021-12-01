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
		<title>Perfil do Usuário</title>
		<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
	</head>

	<body>
		<?php
		include("./nav.php");
		?>
		<div>
			<div class="bg-white font-sans h-3/4 w-full flex flex-row justify-center items-center">
				<div class="card w-96 mx-auto bg-white shadow-xl hover:shadow">
					<img class="w-32 h-32 mx-auto rounded-full -mt-20 border-8 border-white" src="https://images.unsplash.com/photo-1532012197267-da84d127e765?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="">
					<?php echo $nome; ?>
					<?php echo $email; ?>
					<hr class="mt-8">
					<div class="flex p-4">
						<div class="w-1/2 text-center">
							<span class="font-bold">0</span> Seguidores
						</div>
						<div class="w-0 border border-gray-300">

						</div>
						<div class="w-1/2 text-center">
							<span class="font-bold">0</span> Seguindo
						</div>
					</div>
				</div>
			</div>
		<?php } ?>