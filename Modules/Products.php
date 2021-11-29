<?php
// TODO Zorg dat de methodes goed ingevuld worden met de juiste queries.
function getProducts(int $categoryId)
{
    global $pdo;
    $query = $pdo->prepare( "SELECT * FROM products WHERE category_id = $categoryId");
    $query->execute();
    $result =  $query->fetchAll(PDO::FETCH_CLASS, 'Product');
    return $result;
}

function getProduct(int $productId)
{
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM product WHERE id = :id");
    $query->bindParam("id ", $productId);
    $query->execute();
    $request = $query->fetch(SQLSRV_FETCH_ASSOC);

    return $request;
}
