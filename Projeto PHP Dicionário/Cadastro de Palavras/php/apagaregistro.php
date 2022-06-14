<?php
echo "Script para apagar registro <br />";
$url = $_SERVER["REQUEST_URI"];
$posicao = strpos($url, '?');
$id = substr($url,$posicao+1, 2);

  $hostName = "localhost";
  $databaseName = "cadastrodepalavras";
  $databaseUser = "root";
  $databasepassword="ifsp";
$dbConnection = mysqli_connect($hostName, $databaseUser, $databasepassword,$databaseName);
if(mysqli_connect_error()){
    echo "<br />Erro na conexão com o banco de dados.<br />";
    echo mysqli_connect_error();
}else{
    echo "<br /> Conexão efetuada com sucesso <br />";
    $query = "delete from dicionario where id=$id";
    $res = mysqli_query($dbConnection, $query);
    echo "Resultado da remoção".$res;
    echo mysqli_error($dbConnection);
}
echo"voltar para a página principal: <a href='http://localhost:3000/'> <b> voltar </b> </a>"
?>