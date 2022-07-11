<?php


require("../../db-connect.php");
// $sql="SELECT * FROM category WHERE id =$id AND valid=1";
// $result = $db_host->prepare($sql);
// $userCount=$result->num_rows;
?>
<!doctype html>
<html lang="en">
  <head>
    <title>第二頁</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/c927f90642.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../../css/style.css">
   <style>
    :root {
    --bg-color: #eee6de;
    --main-color: #e65947;
    --line-color: #ddb9a2;
    --main-word-color: #3F3F3F;
    --header-hieght: 100px;
}

.title {
    font-size: 26px;
    color: var(--main-word-color);
}

.table-head {
    background-color: var(--line-color);
}

.blogs {
    margin-top: 100px;
}

.btn-members-list {
    margin-top: 60px;
    background: var(--main-color);
    font-weight: bolder;
    color: white;
    padding: .5rem 1rem;
}

.cancel-btn-line-color {
    background: var(--line-color);
}

.save-btn-main-color {
    background: var(--main-color);
}

.table {
    min-height: 200px;
}

.bg-mask {
    display: none;
    opacity: 0.5;
    background: var(--main-word-color);
    width: 100%;
    height: 100%;
    position: absolute;
    z-index: 1;
}

.edit-member-card {
    z-index: 2;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-weight: bolder;
    display: none;
    min-width: 600px;
}
.tabs {
    display: block;
}

.btn-main-color {
    background: var(--main-color);
    font-weight: bolder;
    color: white;
    padding: .5rem 1rem;
}
   </style> 
    </head>

  <body>
    <?php
    require("../main-menu.html");
    ?>
    <main>
             <!-- 這邊的超連結會回去users.php製作的表格中  -->
        </div>
        <div class="container">
        <div class="py-2">
   
             <!-- 這邊的超連結會回去users.php製作的表格中  -->
        </div>
       <div class="mt-3 ms-3 container-fluid d-flex">
            <div class="member-card col-5">
                <p class="title fw-bold">基本資料</p>
                <table class="table table-borderless">
                    <tr>
                        <th>序號</th>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th>類別</th>
                        <td>2</td>
                    </tr>
                    <tr>
                        <th>英文名字</th>
                        <td>3</td>
                    </tr>
    
                </table>
                <div class="mx-2">
                <a href="brand-list.php" 
                class="return-btn me-2 btn btn-members-list">回到類別管理</a>
                <a href="brand-edit.php" class="edit-btn btn btn-main-color me-2 btn-members-list"
                 >修改</a>
                </div>
      </div>
   </main>
     </body>
</html>