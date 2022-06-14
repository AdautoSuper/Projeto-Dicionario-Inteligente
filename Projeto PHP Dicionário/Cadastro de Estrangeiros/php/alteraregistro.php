<?php
     echo "Script Exibe Registro <br />";
     $url= $_SERVER["REQUEST_URI"];
     $posicao = strpos($url, '?');
     $id = substr($url,$posicao+1,2);
     $hostName = "localhost";
     $databaseName = "dbestrangeiro";
     $databaseUser = "leticia";
     $databasepassword="motta";
     $dbconnection = mysqli_connect($hostName, $databaseUser, $databasepassword,$databaseName);
     if(mysqli_connect_error()){
          echo "<br />Erro na conexão com o banco de dados.<br />";
          echo mysqli_connect_error();
    } else{
        $query = "update * from estrangeiros where id=$id";
        $res = mysqli_query($dbconnection,$query);
        $html ='';
        $html ='<form action="alteraregistro.php" method="get">';
        while($row = mysqli_fetch_row($res)){
               $html.='<label for="id">Id</label>';
               $html.='<input type="text" id="id" nome="id" value='.$row[0].'><br />';
               $html.= '<label for="nome">Nome</label>';
               $html.='<input type="text" class="campo" id="nome" name="nome" placeholder="Nome"value='.$row[1].'/><br />';
               $html.='<label for="idade">Iidade</label>';
               $html.='<input type="text" class="campo" id="idade" name="idade"
               placeholder="idade" value='.$row[2].'><br />';
               $html.='<label for="pais">País"</label>';
               $html.='<input type="text" class="campo" id="pais" name="pais"placehomeolder="Pais"
               value='.$row[3].'><br />';
               $html.='<label for="password">Passworrd"</label>';
               $html.='<input type="text" class="campo" id="password" name="password"
               placeholder="password"value='.$row[4].'><br />';
               $html.='<label for="facebook">Facebook"</label>';
               $html.='<input type="text" class="campo" id="facebook" name="facebook"
               placeholder="facebook"value='.$row[5].'><br />';
               $html.='<label for="nome">twitter</label>';
               $html.='<input type="text" class="campo" id="twitter" name="twitter"
               placeholder="twitter"
               value='.$row[6].'><br />';
               
               $html.='<input type="submit" class="botao" id="botao" name="botao" value="Enviar"/>';
          }    
               $html .="</form>";
         echo $html;
     }
     echo"voltar para a página principal: <a href='http://localhost:3000/'> voltar </a>"
?>