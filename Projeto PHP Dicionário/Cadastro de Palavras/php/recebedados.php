<?php
  echo "ÁREA DE INSERÇÃO DE INFORMAÇÃO DO CÓDIGO";
  
  echo "<br/>
  
  <br/> Obs: Update Inexistente !";


  echo "<br />";
   $portugues = $_GET["portugues"];
  $haitiano = $_GET["haitiano"];
  
  
  echo  "<br /> <br />";
  echo "<b> Português </b> = ", $portugues, "<br /> <br />";
  echo "<b> Haitiano </b> = ", $haitiano, "<br />";

  $hostName = "localhost";
  $databaseName = "cadastrodepalavras";
  $databaseUser = "root";
  $databasepassword= "ifsp";

  $dbconnection = mysqli_connect($hostName, $databaseUser, $databasepassword, $databaseName);
  if (mysqli_connect_error()){ 
    echo "<br />Erro na Conexão com o banco de Dados"; 
    echo mysqli_connect_error();    
  }else{
    $query = "insert into dicionario (portugues, haitiano) values('".$portugues."','".$haitiano."');";
    
    $res = mysqli_query($dbconnection, $query);

    if(mysqli_error($dbconnection)){
      echo "<br />";
      echo "Problemas ao gravar o registro no banco de dados:";
      echo mysqli_error($dbconnection);
    }else{
      echo "<h2> Registro armazenado com sucesso </h2>";
    }

  }
  
  echo "Voltar para a página principal: <a href='http://localhost:3000/'> Voltar </a>"
?>
