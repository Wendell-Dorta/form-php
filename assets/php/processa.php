<?php 
// configuração da DB
$servername = "localhost"; // se fo em server coloca o ip
$username = "root"; // coloca o usuario que vai te q loga no banco
$password = ""; // se na instalação configuro uma senha coloca ela
$dbname = "cadastro"; // nome do banco

// criando conexão com a DB
$conn = new mysqli($servername,$username,$password,$dbname);

// verificando a conexão
if ($conn -> connect_error) {
    die("Connection Failed: " . $conn -> connect_error);
}

// obtendo os dados do formulário
$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];

// preparando consulta('Querry');
$sql = "INSERT INTO usuarios(nome,data_nascimento,cpf,email,endereco) VALUES (?,?,?,?,?)";
$stmt = $conn -> prepare($sql);
$stmt -> bind_param("sssss", $nome,$data_nascimento,$cpf,$email,$endereco);

// executar a querry
if ($stmt -> execute()) {
    echo ("Cadastrado realizado com Sucesso!");
} else {
    echo ("Erro: " . $sql . "<br>" . $conn -> error);
}

// fechar a conexão
$stmt -> close();  // no php a seta | -> | e para executar algo
$conn -> close();

?>