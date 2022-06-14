<?php
  echo "Informações Inseridas ao Banco de Dados:";
  echo "<br /> <br />";
  
 
$nome = $_GET["nome"];
$idade = $_GET["idade"];
$pais = $_GET["pais"];
$formacao = $_GET["formacao"];
$profissao = $_GET["profissao"];
$idiomas = $_GET["idiomas"];
$email = $_GET["email"];


echo "Nome = ", $nome, "<br />";
echo "Idade = ", $idade, "<br />";
echo "Pais de Origem = ", $pais, "<br />";
echo "Formação Acadêmica = ", $formacao, "<br />";
echo "Habilidades Profissionais = ", $profissao, "<br />";
echo "Idiomas Conhecidos = ", $idiomas, "<br />";
echo "E-mail para contato = ", $email, "<br />";

 
  $hostName = "localhost";
  $databaseName = "dbestrangeiro";
  $databaseUser = "leticia";
  $databasepassword= "motta";

  $dbconnection = mysqli_connect($hostName, $databaseUser, $databasepassword, $databaseName);
  if (mysqli_connect_error()){ 
    echo "<br />Erro na Conexão com o banco de Dados"; 
    echo mysqli_connect_error();    
  }else{
    $query = "insert into estrangeiros (nome, idade, pais, formacao, profissao, idiomas, email) values('".$nome."','".$idade."','".$pais."','".$formacao."','".$profissao."','".$idiomas."','".$email."');";
    
    $res = mysqli_query($dbconnection, $query);

    if(mysqli_error($dbconnection)){
      echo "<br />";
      echo "Problemas ao gravar o registro no banco de dados:";
      echo mysqli_error($dbconnection);
    }else{
      echo "<h2>Registro armazenado com sucesso/h2>";
    }
    
  }
  echo "Voltar para a página principal: <a href='http://localhost:3000/'> Voltar </a>"
?>
