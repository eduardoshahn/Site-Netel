<?php

namespace APP\Controller;

// Se vc vai utilizar algo de outra classe ou fora do escopo da classe "use"
use APP\Model\Product;
use APP\Model\Provider;
use APP\Utils\Redirect; 
use APP\Model\Validation;


require_once '../../vendor/autoload.php'; // carrega os arquivos dos direórios da linha 5

if(empty($_POST)){
    Redirect::redirect(
        message: 'Requisição inválida!',
        type: 'error',
    );
}

$productBarCode = $_POST['barCode'];
$productName = $_POST['name'];
$productProvider = $_POST['provider'];
$productCost = $_POST['cost'];
$productQuantity = $_POST['quantity'];

$error = array();

if(!Validation::validateBarCode($productBarCode)){
    array_push($error, "O código de barra do produto é inválido!");
};
if(!Validation::validateName($productName)){
    array_push($error, "O nome está com menos de 5 caracteres!");
};
if(!Validation::validateNumber($productQuantity)){
    array_push($error, "A quantidade está inválida! Deve ser maior que zero!");
}
if(!Validation::validateNumber($productCost)){
    array_push($error, "O custo está inválido! Deve ser maior que zero!");
}

if($error){ // se o array não estiver vazio
    Redirect::redirect(
        message:$error,
        type:'warning'
    );
}else{
    $product = new Product();
    $product->barCode = $productBarCode;
    $product->name = $productName;
    $product->stock = $productQuantity;
    $product->provider = new Provider;
    $product->price = 0;
    
    echo '<pre>';
    var_dump($product);
    echo '</pre>';
    
    Redirect::redirect('Produto cadastrado com sucesso!');
}
