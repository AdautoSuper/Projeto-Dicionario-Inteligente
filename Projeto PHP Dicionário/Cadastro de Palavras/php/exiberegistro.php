<?php

     echo "Script Exibe Registro <br />";
     $url= $_SERVER["REQUEST_URI"];
     $posicao = strpos($url, '?');
     $id = substr($url,$posicao+1,2);
 
     $portugues = $_GET["portugues"];
     
     $haitiano  =  $_GET["haitiano"];
     
     
     $hostName = "localhost";
     $databaseName = "cadastrodepalavras";
     $databaseUser = "root";
     $databasepassword="ifsp";
     $dbconnection = mysqli_connect($hostName, $databaseUser, $databasepassword,$databaseName);
     if(mysqli_connect_error()){
          echo "<br />Erro na conexão com o banco de dados.<br />";
          echo mysqli_connect_error();
    } else{
         
        $query = "select * from dicionario where id=$id";
        $res = mysqli_query($dbconnection,$query);
        $html ='';
        $html='<form action="alteraregistro.php" method="get">';
        while($row = mysqli_fetch_row($res)){
               $html.='<label for="id">Id</label>';
               $html.='<input type="text" id="id" nome="id" value='.$row[0].'><br />';
               $html.= '<label for="nome">portugues</label>';
               $html.='<input type="text" class="campo" id="portugues" name="nome" placeholder="Nome"value='.$row[1].'/><br />';
               $html.='<label for="haitiano">Haitiano</label>';
               $html.='<input type="text" class="campo" id="haitiano" name="haitiano"
               placeholder="Haitiano" value='.$row[2].'> <br />';
              
               
               $html.='<input type="submit" class="botao" id="botao" name="botao" value="Enviar"/>';
          }    
            
         echo $html;
     }
     echo"voltar para a página principal: <a href='http://localhost:3000/'> voltar </a>"
     
?>