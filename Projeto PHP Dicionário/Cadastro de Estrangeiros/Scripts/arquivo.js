validaNome = (event) => {
    let nome = event.target.value;
    console.log(nome.length);
    if(nome.length > 10) {
            
        alert(" Aceitamos de preferência 10 caracteres! Dê OK PARA CONTINUAR ACIMA DOS 10 DÍGITOS!   "); 
        document.getElementById("nome").focus();        

    }
}
 //Todos os campos ficaram com a variável NOME em ID//
 