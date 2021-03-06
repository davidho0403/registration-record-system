<?php

session_start();
if (!isset($_SESSION['employee_ssn'])) {
    header("Location: login.php");
} else {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
        <link rel="stylesheet" href="../style/manage/editProfile.css">
        <link rel="shortcut icon" href="../src/image/ico.png" type="image/x-icon">
        <title>業務後台系統 | 變更個人資訊</title>
    </head>

    <body class="text-center">
        <div class="option-list fixed-top mb-5 mt-2 me-2 d-flex justify-content-end">
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
        <!-- Modal -->
        <div class="modal fade text-start" id="modal-success" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">提醒</h5>
                    </div>
                    <div class="modal-body">
                        變更成功
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="modal-submit-btn" onclick="window.location = './index.php'">
                            關閉
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade text-start" id="modal-error" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">提醒</h5>
                    </div>
                    <div class="modal-body">
                        變更失敗
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="modal-submit-btn">
                            關閉
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Form -->
        <main class="form-edit-profile">
            <form action="../backend/manage/setProfile.php" method="POST">
                <img src="../src/image/logo.png" class="w-25 mb-2">
                <h1 class="fs-4 mb-3 fw-normal">編輯個人資料</h1>

                <div class="form-floating">
                    <input type="text" name="employee_name" class="form-control input-employee-name" id="input-employee-name" placeholder="請輸入姓名" required />
                    <label for="floatingInput">姓名</label>
                </div>
                <div class="form-floating">
                    <input type="email" name="employee_email" class="form-control input-employee-email" id="input-employee-email" placeholder="請輸入電子信箱" required />
                    <label for="floatingPassword">電子信箱</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit" id="submit-btn" disabled>變更</button>
            </form>
        </main>
        <!-- Google api jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- Custom JS -->
        <script src="../script/manage/editProfile.js"></script>
    </body>

    </html>

<?php

}

?>