


<?php


$nome = $_POST['inputNome'];
$sobrenome = $_POST['inputSobrenome'];
$email = $_POST['inputEmail'];
$login = $_POST['inputLogin'];
$senha = $_POST['inputSenha'];





try{
    $conexao = new PDO('mysql:host=localhost; dbname=usuario',"root","ifpe");
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    
  }catch(PDOException $e){

    echo $e->getMessage();
  } 


try{
$stmt = $conexao->prepare ("insert into usuario values(nome,sobrenome,email,login,senha) values(?,?,?,?,?)");
    stmt->bindParam(1,$nome);
    stmt->bindParam(2,$sobrenome);
    stmt->bindParam(3,$email);
    stmt->bindParam(4,$login);
    stmt->bindParam(5,$senha);
    stmt->execute();


}catch(PDOException $e){

    echo $e->getCode(); echo $e->getMessage();


}

echo "<script>alert('Tudo ok!');</script>";




?>

