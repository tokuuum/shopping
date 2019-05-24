<?php
include ('../lib/common.php');

$mode = get_mode();

//////////////////////////
// 確認ボタン押下時処理
//////////////////////////
if ($mode == "send") {
    echo 'send';
    $count = isset($_POST['count']) ? $_POST['count'] : "";
    $customer = isset($_POST['customer']) ? $_POST['customer'] : "";
    $postcode = isset($_POST['postcode']) ? $_POST['postcode'] : "";
    $address = isset($_POST['address']) ? $_POST['address'] : "";

    //////////////////////////
    // 入力チェック
    //////////////////////////
    $error = array();
    if (!$count) {
        $error['count'] = "個数を入力してください。";
    }
    if (!$customer) {
        $error['customer'] = "氏名を入力してください。";
    }
    if (!$postcode) {
        $error['postcode'] = "郵便番号を入力してください。";
    }
    if (!$address) {
        $error['address'] = "住所を入力してください。";
    }

    //////////////////////////
    // エラーチェック
    //////////////////////////
    if ($error) {
        // エラーがある場合
        // 同じ画面でエラーを出力
        include ('../lib/order/index.php');
    }
    else {
        // エラーがない場合
        // 確認画面に遷移
        include ('../lib/order/confirm.php');
    }
}

//////////////////////////
// 初期表示処理
//////////////////////////
else{
    $count = "";
    $customer = "";
    $postcode = "";
    $address = "";
    include ('../lib/order/index.php');
}
?>