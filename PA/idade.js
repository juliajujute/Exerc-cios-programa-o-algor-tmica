const idade=parseInt(prompt("Digite a sua idade:"));
if((idade<18) && (idade!=0)){
    alert("criança")
}
else if ((idade>=18) && (idade<65)){
    alert("adulto ou jovem")
    
}
else if  (idade>65){
    alert("idoso") 
}else 
alert("ser inexistente")
