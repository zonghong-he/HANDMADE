<?php

if(!isset($_POST["id"])){
    echo "沒有參數";
    exit;
}

require("../db-connect.php");

$data=[
    ':id'=>$_POST["id"],
    ':name'=>$_POST["name"],
    ':content'=>$_POST["content"],
    ':product_discount'=>$_POST["product_discount"],
    ':start_date'=>$_POST["start_date"],
    ':end_date'=>$_POST["end_date"],
];

$sql = "UPDATE discount SET 
name=:name, content=:content, product_discount=:product_discount,
start_date=:start_date, end_date=:end_date
WHERE id=:id";
$stmt = $db_host->prepare($sql);

try {
    $stmt->execute($data);
    // echo "成功";
    
} catch (PDOException $e) {
    echo "預處理陳述式執行失敗！ <br/>";
    echo "Error: " . $e->getMessage() . "<br/>";
    $db_host = NULL;
    exit;
}

header("location: discount.php");
?>