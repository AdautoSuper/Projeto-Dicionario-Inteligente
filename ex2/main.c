#include <stdio.h>
#include <stdlib.h>

int main()
{
    int soma, sub, n1, n2, opcao;
printf("\n1 - soma");
printf("\n2 - subtrair");
printf("\n3 - finalizar");
printf("\nescolha uma opcao: ");
scanf("%d", &opcao);
while(opcao!=3){
switch(opcao){
case 1:
printf("\ndigite o primeiro numero que voce quer somar: ");
scanf("%d", &n1);
printf("\ndigite o segundo numero que voce quer somar: ");
scanf("%d", &n2);
soma=n1+n2;
printf("\na soma dos numeros eh: %d\n", soma);
break;

case 2:
printf("\ndigite o primeiro numero que voce quer subtrair: ");
scanf("%d", &n1);
printf("\ndigite o segundo numero que voce quer subtrair: ");
scanf("%d", &n2);
sub=n1-n2;
printf("\na subtracao dos numeros eh: %d\n", sub);
break;
}
printf("\n1 - soma");
printf("\n2 - subtrair");
printf("\n3 - finalizar");
printf("\nescolha uma opcao: ");
scanf("%d", &opcao);
}
    return 0;
}
