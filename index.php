<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- links css -->
    <link rel="stylesheet" href="assets/css/index.css">
    <!-- import bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- links php -->
    <?php 
        // require 'assets/php/processa.php';
        require 'assets/php/pdo.php';
    ?>
    <title>Cadastro</title>
</head>

<body>

    <h2>Formulário de Cadastro</h2>

    <form action="assets/php/pdo.php" method="post">

        <label for="nome">Nome: </label><br>
        <input type="text" name="nome" id="nome" require><br><br>

        <label for="data_nascimento">Data de Nascimento: </label> <br>
        <input type="date" name="data_nascimento" id="data_nascimento" require><br><br>

        <label for="cpf">CPF: </label><br>
        <input type="text" name="cpf" id="cpf" require><br><br>

        <label for="email">Email: </label><br>
        <input type="text" name="email" id="email" require><br><br> <!-- se de ruim troca o type de email pra text -->

        <label for="endereco">Endereço: </label><br>
        <input type="text" name="endereco" id="endereco" require><br><br>

        <input type="submit" value="Cadastrar">

    </form>




    <!-- import bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>