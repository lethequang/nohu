<?php
if(isset($_POST['type']) && isset($_POST['code']) && isset($_POST['serial']) && isset($_POST['amount']))
{
    include 'config.php';
    include 'card_charging_api.php';
    
    
    // Call lib
    try {
        $api = new Card_charging_api($config);
    }
    catch (Card_charging_Exception $e) {
        exit($e->getMessage());
    }
    
    $type	    = $_POST['type']; //loai the cua nha mang
    $code	    = $_POST['code']; // ma the
    $serial		= $_POST['serial']; //serial the
    $amount		= $_POST['amount']; // Mệnh giá
    $request_id = time(); //Mã tự sinh trong mỗi giao dịch và không giống nhau (Chúng tôi sẽ lưu lại mã này để đối chiếu khi có khiếu nại)

    $res = $api->check_card($type, $code, $serial, $amount, $request_id);
    //var_dump($res);
    
    //echo '<pre>';
    //print_r($res);


    if(isset($res->status) && $res->status == '30')
    {
        echo 'Thông tin thẻ không chính xác hoặc đã được sử dụng. Vui lòng kiểm tra lại.';
    } else if (isset($res->status) && $res->status == '0') {
        echo 'Nạp nổ thành công. Vui lòng chờ hệ thống xử lý.';
    } else
    {
        echo 'Hệ thống đang có lỗi. Vui lòng thử lại sau.';
    }
}else{
    echo 'Kiem tra lai du lieu';
}

		