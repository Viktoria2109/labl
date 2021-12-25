<?php
 include 'core/db.php';
global $pdo;
$pdo = new PDO(
   dsn: 'mysql:host=localhost:3306;dbname=test;',
   username: "root",
    password: "qwerty"
);
$pdo->exec("set names utf8");

function query($request, $result = []){
    
    $product_id = $_GET['product_id'];
    $product = getKFCProductById($product_id);
    addKFCProduct($product);

    function addKFCProduct($item) {
        $request = "INSERT INTO `cart`(`id`, `product_id`) VALUES (NULL,'".$item["id"]."')";
        $sth = $pdo->prepare($request);
        $result = $sth->execute($result);
        var_dump($result);


    }

    function getKFCProductById($id){
        $request = "SELECT * FROM kfc_products WHERE id=".$id;
        $sth = $pdo->prepare($request);
        $result = $sth->execute($result);
        return result;
    }}
?>