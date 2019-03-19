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






?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">

    <!-- Link BootStrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!--Fim BootStrap-->
    
    
    <title>Cadastro  Usuario</title>
</head>
<body>

        <nav class="navbar navbar-default">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <a class="navbar-brand" href="#">WebSiteName</a>
                  </div>
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>
                  </ul>
                </div>
              </nav>






    <div class="jumbotron">
    <form class="form-horizontal" action="cadastro.php" method="POST">
        <fieldset>
        
        <!-- Form Name -->
        <legend><h1> Crie Sua Conta</h1></legend>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Nome">Nome</label>  
          <div class="col-md-4">
          <input id="Nome" name="inputNome" type="text" placeholder="Nome" class="form-control input-md" required="" maxlength="30">
            
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Sobrenome</label>  
          <div class="col-md-4">
          <input id="textinput" name="inputSobrenome" type="text" placeholder="Sobrenome" class="form-control input-md" required="" maxlength="30">
            
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Email</label>  
          <div class="col-md-4">
          <input id="textinput" name="inputEmail" type="email" placeholder="aaaa@bbb.com" class="form-control input-md" required="">
            
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Login</label>  
          <div class="col-md-4">
          <input id="textinput" name="inputLogin" type="text" placeholder="Login" class="form-control input-md" required="" maxlength="10">
            
          </div>
        </div>
        
        <!-- Password input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="passwordinput">Senha</label>
          <div class="col-md-4">
            <input id="passwordinput" name="inputSenha" type="password" placeholder="Senha" class="form-control input-md" required="" maxlength="6">
            
          </div>
        </div>
        
        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="singlebutton"></label>
          <div class="col-md-4">
            <button id="singlebutton" type="submit" class="btn btn-info">Salvar</button>
          </div>
        </div>
        
        </fieldset>
        </form>
    </div>   


</body>



</html>