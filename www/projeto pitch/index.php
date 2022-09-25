<?php
require_once "./conexao1.php";
$conexao = new conexao();
$reg = $conexao->executeSelect("select * from cliente");

?>

<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Formulário de Login e Registro com HTML5 e CSS3</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
     
    <div class="content">      
      
      <div id="login">
        <form method="post" action="pagina.php"> 
          <h1>Login</h1> 
          <p> 
            <label for="nome_login">Seu e-mail</label>
            <input id="nome_login" name="nome_login" required="required" type="text" placeholder="ex. searchcare@gmail.com"/>
          </p>
           
          <p> 
            <label for="email_login">Sua senha</label>
            <input id="email_login" name="email_login" required="required" type="password" placeholder="ex. 1234" /> 
          </p>
           
          <p> 
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
            <label for="manterlogado">Manter-me logado</label>
          </p>
           
          <p> 
            <input type="submit" value="Logar" />
            <a href ="pagina.php" class= "cadastrin">Esqueceu a senha</a> 
          </p>
           
          <p class="link">
            Ainda não tem conta?
            <a href="#paracadastro">Cadastre-se</a>
          </p>
        </form>
      </div>
 
      <div id="cadastro">
        <form method="post" action="index.php"> 
          <h1>Cadastro</h1> 
           
          <p> 
            <label for="nome_cad">Seu nome</label>
            <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="nome" />
          </p>
           
          <p> 
            <label for="email_cad">Seu e-mail</label>
            <input id="email_cad" name="email_cad" required="required" type="email" placeholder="contato@htmlecsspro.com"/> 
          </p>
           
          <p> 
            <label for="senha_cad">Sua senha</label>
            <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="ex. 1234"/>
          </p>
           
          <p> 
            <input name = "butao" type="submit" value="Cadastrar"/> 
          </p>
           
          <p class="link">  
            Já tem conta?
            <a href="#paralogin"> Ir para Login </a>
          </p>
          <tbody>
         
    

        </form>
      </div>
    </div>
  </div>  
</body>
</tbody>
</html>

<?php
    
    
    require_once "./conexao1.php";
    $conexao = new conexao();
    $reg = $conexao->executeSelect("select * from cliente");
  
    if(isset($_POST["butao"])){
        $conexao->executeQuery("insert into cliente values(null,'".$_POST["nome_cad"]."','".$_POST["email_cad"]."','".$_POST["senha_cad"]."')");
       echo "<script>alert('Cadastro Feito com sucesso!')</script>";
        ;}
  
  
  ?>