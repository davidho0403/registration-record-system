<?php

session_start();
if (!isset($_SESSION['store_id'])) {
    header("Location: ../../store/login.php");
}

if (isset($_POST["store_name"]) && isset($_POST["store_address"])) {
    $store_name = $_POST["store_name"];
    $store_address = $_POST["store_address"];
    if (empty($store_name) || empty($store_address)) {
        header("Location: ../../store/editProfile.php?state=false");
    } else {
        $store_id = $_SESSION['store_id'];
        require_once __DIR__ . "/../model/model.php";
        $model = new Model();
        $sql = $model->update(["store_name" => $store_name, "store_address" => $store_address], "store_list") . $model->where("store_id", "=", $store_id);
        $result = $model->execute($sql);
        if ($result) {
            header("Location: ../../store/editProfile.php?state=true");
        } else {
            header("Location: ../../store/editProfile.php?state=false");
        }
    }
} else {
    // 參數傳遞失敗
    header("Location: ../../store/editProfile.php?state=false");
}
