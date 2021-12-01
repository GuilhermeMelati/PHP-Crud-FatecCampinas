<?php
echo <<< EOF
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades PI</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <header class="bg-gray-800">
        <nav class="flex items-center bg-gray-800 flex-col text-center sm:flex-row sm:text-left sm:justify-between py-1 px-6 shadow sm:items-baseline w-full">
            <div class="flex items-center">
                <p class="block text-2xl font-bold text-center text-white lg:text-3xl">Clube do Livro</p>
                <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-20 w-20 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
              </svg>
            </div>
            <div class="flex items-center">
                <a href="/view/frm_livro.php" class="text-2xl border-b-2 border-transparent hover:text-white text-white hover:border-white mx-1.5 sm:mx-6">Livros</a>
                <form action="/view/sair.php">
                <input class="mt-4 text-xl border-b-2 border-transparent hover:text-white text-white hover:border-white bg-transparent" type="submit" value="Sair" name="deslogar">
                </form>
            </div>
        </nav>
    </header>
</body>

</html>
EOF;
