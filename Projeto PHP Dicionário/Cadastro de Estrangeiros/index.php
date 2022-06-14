<!DOCTYPE html>
<html lang="pt-BR">

<head>
<head>
		<meta charset="utf-8">
		<title>Estrangeiros</title>
		<link rel="stylesheet" href="Style/style.css">
		<script src="Scripts/arquivo.js" > </script>
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<style>
	.botaoCalcular {
background-color: black;
    }
</style>
	
</head> 

<body>
    <div class="container">
        <h1 class="Title">  </h1>
            <div class="Inclusão" id="Inclusão">
            <h2 div aling="center"> Formulário de Cadastro para Estrangeiros</h2>
                <div class="Formulario">
                    <form action="php/recebedados.php"method="get">
         

	</style>
	</head>
	</head>
	<body>
		<h1 id="tituloPrincipal" class="Title" >LETÍCIA DE OLIVEIRA MOTTA</h1>
 		<form action="php/recebedados.php"  method="POST">

			<div class="centro">

		<fieldset class="area">


				<legend class="mercado"> <br> Queremos saber mais sobre sua história para ajudá-lo no Mercado de Trabalho! <br> </legend>	

				<label for="nome">Nome Completo</label>
				<input class="Campo" type="text"  id="nome" name="nome" placeholder="Qual seu nome completo? (Use menos de 10 Caracteres se conseguir!)" Onchange="validaNome (event);">
	          <br>
                <label for="peso">Idade</label>
				<br>

				<input type="text" class="Campo" id="nome" name="idade" placeholder="Qual a sua idade?"Onchange="validaNome (event);"/>
				<br>

				<label for="nome">País de Origem</label>
				<input class="Campo" type="text" id="nome" name="pais" placeholder="Qual seu país de origem?" Onchange="validaNome (event);">
				<br>

                <label for="peso">Formação Acadêmica</label>
               
				<input type="text" class="Campo" id="nome" name="formacao" placeholder="Qual último ano de seus estudos ou se está cursando? " Onchange="validaNome (event);"/>

				<br>
                <label for="peso">Habilidades Profissionais</label>
               
				<input type="text" class="Campo" id="nome" name="profissao" placeholder="Quais profissões você exerceu ao longo da vida?"Onchange="validaNome (event);"/>
		
				<br>
                <label for="peso">Idiomas Conhecidos</label>
               
				<input type="text" class="Campo" id="nome" name="idiomas" placeholder="Quais idiomas você conhece além do nativo?"Onchange="validaNome (event);"/>
		
				<br>
                <label for="peso">E-mail para contato</label>
               
				<input type="text" class="Campo" id="nome" name="email" placeholder="Informe seu e-mail para receber nosso feedback!"Onchange="validaNome (event);"/>
		 	 				
		</fieldset>	 				
			<fieldset class="area1">
			<legend class="hoje">Envie as Informações no Botão Abaixo</legend>
	
			<!----	<input type="submit" class="Botao" id="botao" name="enviar"value="Validar"> -->
				<input type="submit" class="Botao" id="botao" name="enviar"value="Cadastrar"> 
			<!---- <input type="submit" class="Botao" id="botao" name="enviar"value="CONSULTAR"> -->

			</fieldset> 
</form>
                </div>  
            </div>
            </div class="Consulta" id="Consulta">
           <h2> Consulta do Banco de Dados </h2>
               <table>
                  <th>Id</th>
                  <th>Nome</th>
				  <th>Idade</th>
				  <th>País</th>
                  <th>Formação</th>
				  <th>Habilidade</th>
				  <th>Idiomas</th>
                  <th>E-mail</th>
				  <th></th>
                  <?php              

$hostName = "localhost";
$databaseName = "dbestrangeiro";
$databaseUser = "leticia";
$databasePassword = "mottta";

$dbConnection = mysqli_connect($hostName, $databaseUser,  $databasePassword, 
$databaseName);
if(mysqli_connect_error()){
    echo "Erro na conexão com o banco de dados.";
    echo mysqli_connect_error();
   }else{  
     $query = "select * from estrangeiros;";
     $resultados = mysqli_query($dbConnection, $query);
     $html = null;

     while($row = mysqli_fetch_row($resultados)){
		$html .= '<tr>';
		$html .= '<td>'.$row[0].'</td>';
        $html .= '<td>'.$row[1].'</td>';
        $html .= '<td>'.$row[2].'</td>';
		$html .= '<td>'.$row[3].'</td>';
		$html .= '<td>'.$row[4].'</td>';
        $html .= '<td>'.$row[5].'</td>';
        $html .= '<td>'.$row[6].'</td>';
		$html .= '<td>'.$row[7].'</td>';
  		
        $html .= '<td>'.'<a href="php/alteraregistro.php?'.$row[1].'">Alterar'.'</a>'.'</td>';
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

