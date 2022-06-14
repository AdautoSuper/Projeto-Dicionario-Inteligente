<!DOCTYPE html>
<html lang="pt-BR">

<head>
   <meta charset="UTF-8">
   <title>Cadastro de Palavras</title>
   <link rel="stylesheet" type="text/css" href="CSS/style.css"/>
   <script src="JS/Script.js"></script>
</head> 

<body>
    <div class="area">
        <h1 class="Title">Cadastro de Palavras</h1>
            <div class="Inclusão" id="Inclusão">
            <h2 class="Cont"> Insira as Palavras</h2>
                <div class="Formulario">
                    <form action="php/recebedados.php"method="get">
                    <fieldset class="area">


<legend> <br> Busque as Palavras Correspondentes <br> </legend>	
<label for="nome">Português</label>
<input class="Campo" type="text" id="nome" name="portugues" placeholder="Insira uma palavra">
<br>
<label for="nome">Haitiano</label>
<input type="text" class="Campo" id="nome" name="haitiano" placeholder="Enskri yon mo">
</fieldset>	 				
<fieldset class="area">
<legend>Utilize os Botões Abaixo</legend>	
<input type="reset" class="Botao" id="botao" name="LIMAR"value="LIMPAR"> 
<!-- <input type="submit" class="Botao" id="botao" name="enviar"value="Cadastrar"> -->
<input type="submit" class="Botao" id="botao" name="enviar"value="CADASTRAR"> 

</fieldset> 
</form>
                </div>  
            </div>
            </div class="Consulta" id="Consulta">
              <h2 > Palavras Cadastradas </h2>
               <table>
                  <th >Id</th>
                  <th >Portugues</th>
                  <th >Haitiano</th>
                   <?php              
//Conexão com o Banco
$hostName = "localhost";
$databaseName = "cadastrodepalavras";
$databaseUser = "root";
$databasePassword = "ifsp";

$dbconnection = mysqli_connect($hostName, $databaseUser,  $databasePassword, 
$databaseName);
if(mysqli_connect_error()){
    echo "Erro na conexão com o banco de dados.";
    echo mysqli_connect_error();
   }else{  
     $query = "select * from dicionario;";
     $resultados = mysqli_query($dbconnection, $query);
     $html = null;

     while($row = mysqli_fetch_row($resultados)){
        $html .= '<tr>';
        $html .= '<td>'.$row[0].'</td>';
        $html .= '<td>'.$row[1].'</td>';
        $html .= '<td>'.$row[2].'</td>';
        $html .= '<td>'.$row[3].'</td>';
        $html .= '<td>'.'<a href="php/apagaregistro.php?'.$row[0].'">'.'Remover'.'</a>'.'</td>';
        $html .= '</tr>'; 
       }
       echo $html;
                                                
   }

?>                                            
</table>
</div>
</div>            
</body>
</html>
