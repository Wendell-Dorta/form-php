<!-- PDO = PHP Data Objetc -->
<?php  

// configuração da DB
$host = 'localhost'; // se fo em server coloca o ip
$db = 'cadastro'; // nome do banco
$user = 'root'; // coloca o usuario que vai te q loga no banco
$pass = ''; // se na instalação configuro uma senha coloca ela

try {
    
    // conexão com o banco
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // verifica se os dados foram enviados
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        
        $nome = $_POST['nome'];
        $data_nascimento = $_POST['data_nascimento'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco']; 

        // preparar instrução SQL
        $sql = "INSERT INTO usuarios (nome,data_nascimento,cpf,email,endereco) VALUES (:nome,:data_nascimento,:cpf,:email,:endereco)";
        $stmt = $pdo->prepare($sql);

        // preparar parametros aos valores recebidos do formulário
        $stmt -> bindParam(':nome',$nome);
        $stmt -> bindParam(':data_nascimento',$data_nascimento);
        $stmt -> bindParam(':cpf',$cpf);
        $stmt -> bindParam(':email',$email);
        $stmt -> bindParam(':endereco',$endereco);

        // executar a instrução sql
        $stmt -> execute();
        echo ("Usuário cadastrado com sucesso");


    }
    

} catch (PDOException $e) {

    echo "Erro " . $e->getMessage();


}


?>