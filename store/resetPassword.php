<?php

session_start();
if (!isset($_SESSION['store_id'])) {
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
        <link rel="stylesheet" href="../style/store/resetPassword.css">
        <link rel="shortcut icon" href="../src/image/ico.png" type="image/x-icon">
        <title>店家後台系統 | 變更密碼</title>
    </head>

    <body class="text-center">
        <div class="option-list fixed-top mb-5 mt-2 me-2 d-flex justify-content-end">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    選項
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="./index.php">主頁</a></li>
                    <li><a class="dropdown-item" href="./editProfile.php">變更店家資訊</a></li>
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
                        密碼變更成功
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
                    <div class="modal-body" id="modal-error-text"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="modal-submit-btn">
                            關閉
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Form -->
        <main class="form-register">
            <form action="../backend/store/setPassword.php" method="POST">
                <img src="../src/image/logo.png" class="w-25 mb-2">
                <h1 class="fs-4 mb-3 fw-normal">變更密碼</h1>

                <div class="form-floating">
                    <input type="password" name="old_password" class="form-control input-old-password" id="input-old-password" placeholder="請輸入店家名稱" required />
                    <label for="floatingInput">請輸入舊密碼</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="new_password" class="form-control input-new-password" id="input-new-password" placeholder="請輸入店家地址" required />
                    <label for="floatingPassword">請輸入新密碼</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="new_password_confirm" class="form-control input-new-password-confirm" id="input-new-password-confirm" placeholder="請輸入店家地址" required />
                    <label for="floatingPassword">請再次輸入新密碼</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">變更</button>
            </form>
        </main>
        <!-- Google api jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- Custom JS -->
        <script src="../script/store/resetPassword.js"></script>
    </body>

    </html>

<?php

}

?>