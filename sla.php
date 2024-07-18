<?php
// Configurações do banco de dados
$host = 'localhost';
$db = 'cadastro';
$user = 'root';
$pass = '';

try {
    // Conexão com o banco de dados usando PDO
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verifica se os dados do formulário foram enviados
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recebe os dados do formulário
        $nome = $_POST['nome'];
        $data_nascimento = $_POST['data_nascimento'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];

        // Prepara a instrução SQL de inserção
        $sql = "INSERT INTO usuarios (nome, data_nascimento, cpf, email, endereco) 
                VALUES (:nome, :data_nascimento, :cpf, :email, :endereco)";
        $stmt = $pdo->prepare($sql);

        // Vincula os parâmetros aos valores recebidos
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':data_nascimento', $data_nascimento);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':endereco', $endereco);

        // Executa a instrução SQL
        $stmt->execute();

        echo "Usuário cadastrado com sucesso!";
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
