<?php

session_start();
require_once __DIR__ . "/../backend/model/model.php";
$model = new Model();

if (!isset($_SESSION['employee_ssn'])) {
    header("Location: login.php");
} else {
    if (!isset($_GET['id']) || empty($_GET['id'])) {
        header("Location: manageStore.php");
    }
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
        <link rel="stylesheet" href="../style/manage/viewStore.css?2022062101">
        <link rel="shortcut icon" href="../src/image/ico.png" type="image/x-icon">
        <title>業務後台系統 | 主頁</title>
    </head>

    <body>
        <!-- Modal -->
        <div class="modal fade text-start" id="modal-error" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">詳細資訊</h5>
                    </div>
                    <div class="modal-body" id="modal-text"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="modal-submit-btn">
                            關閉
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="option-list mb-5 mt-2 me-2 d-flex justify-content-end">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    選項
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="./index.php">主頁</a></li>
                    <li><a class="dropdown-item" href="./manageStore.php">管理店家</a></li>
                    <li><a class="dropdown-item" href="#">我的組織 (尚未開放)</a></li>
                    <li><a class="dropdown-item" href="./editProfile.php">變更個人資訊</a></li>
                    <li><a class="dropdown-item" href="./resetPassword.php">變更密碼</a></li>
                    <li><a class="dropdown-item" href="./logout.php">登出</a></li>
                </ul>
            </div>
        </div>
        <h1 class="text-center" id="store-name"></h1>
        <p class="text-center">地址：<a id="store-address"></a><br>優惠碼：<a id="promo-code"></a></p>
        <div class="d-flex w-100 justify-content-center mb-3">
            <div class="badge bg-primary text-wrap fw-normal py-2 px-3 lh-base">目前統計報名人數：<a id="register-count"></a> 人<br>平均報名人數：<a id="average-count"></a> 人 / 每日</div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>家長姓名</th>
                    <th>家長電話</th>
                    <th>報名時間</th>
                </tr>
            </thead>
            <tbody id="register-table">
            </tbody>
        </table>

        <!-- Google api jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- Custom JS -->
        <script src="../script/manage/viewStore.js?2022062102"></script>
    </body>

<?php
}
?>