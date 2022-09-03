<?php

ini_set("display_erros", 1);

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $link = mysqli_connect('127.0.0.1', 'root', '171000', 'ccs');
    $nome = $_GET['nome_produto'];
    $query = "SELECT productID FROM products WHERE Description LIKE '%$nome%'";
    $result = mysqli_query($link, $query);
    echo"<pre>";
    print_r($result);exit;
}

?>

<html>
    <head>
        <h2>Resultado</h2>
    </head>
    <body>
    </body>
</html>