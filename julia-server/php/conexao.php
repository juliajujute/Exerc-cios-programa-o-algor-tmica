<?php
// todo código php vai ficar aqui
$host = 'localhost';
$nome = 'db_website';
$usuario = 'root';
$senha = '';

// vai criar um objeto de conexão com o banco
try{
    $conexao = new PDO(
        "msql:host=$host;
        dbname=$nomeBanco;charset=UTF8",
        $usuario,
        $senha
);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão realizada com sucesso";
}catch(PODException $e){
    echo "ERRO: " .$e->getMensage();
}

?>