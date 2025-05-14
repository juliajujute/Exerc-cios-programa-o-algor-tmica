var media= 0
var soma= 0
for(contador = 1; contador <= 4; contador++){
var nota= parseFloat(prompt("insira o valor da sua nota: "));
soma= soma + nota
}
media= soma/ 4
alert(" a sua média é :"+ media)