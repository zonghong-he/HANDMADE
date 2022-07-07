<?php
require("../db-connect.php");


//每頁顯示的資料
$sql = "SELECT * FROM discount WHERE state!=0";
$result= $db_host->prepare($sql);
$result->execute();
$rows = $result->fetchAll(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="tw-zh">

<head>
    <title>一般折扣-手手</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/c927f90642.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/style.css">
        <style>
          tbody td{
            vertical-align: middle;
          }
          tbody td a{
            color: #D7BAA5;
          }
          tbody td a:hover{
            vertical-align: middle;
            color: #D6624F;
          }

        
        </style>
</head>

<body>
    <?php
    require("./main-menu.html");
    ?>
    <main>
      <div class="mb-4">
        <?php 
        require("./mod/status-bar-discount.php");
        ?>
      </div>
        
        <div class="container-fluid">
            <div class="d-flex justify-content-between">
                <p class="title"></p>
                <p>顯示 
                  <select class="count-bg text-center" aria-label="Default select example" method="POST">
                    <option value="1" name="p5" selected>5</option>
                    <option value="2" name="p10">10</option>
                  </select> 
                  筆數
                </p>
            </div>
            <?php require("./mod/search-bar-sale.php") ?>
            <div class="text-end my-4">
              <a href="discount-create.php" class="text-main-color m-2"><i class="fa-solid fa-square-plus m-2"></i>新增折扣</a>
            </div>
            <table class="table">
              <thead class="table-head">
                <tr class="text-center">
                  <td class="col-3">活動名稱</td>
                  <td class="col-1">折數</td>
                  <td class="col-3">活動期間</td>
                  <td class="col-2">狀態</td>
                  <td class="col-1">操作</td>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($rows as $row): ?>
                  <tr class="text-center">
                    <td><?=$row["name"]?></td>
                    <td><?=$row["product_discount"]?></td>
                    <td><?=$row["start_date"]?> - <?=$row["end_date"]?></td>
                    <td><?=$row["state"]?></td>
                    <td>
                        <a href="discount-edit.php?id=<?=$row["id"]?>" name="edit">編輯</a> <br>
                        <a href="discount-doDelete.php?id=<?=$row["id"]?>" name="delete">刪除</a>
                    </td>
                  </tr>
              <?php endforeach; ?>
              </tbody>
            </table>
            <?php require("./mod/page-number-sale.php") ?>
            
        </div>
    </main>
</body>

</html> 