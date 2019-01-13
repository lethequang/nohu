<?php

/**Function to get the client IP address
 * @return array|false|string
 */
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

/**
 * Ip của key24h, để bảo mật chỉ cho phép dữ liệu được gửi sang từ IP này
 * Khi key24h thay đổi domain sẽ thông báo lại cho đối tác
 */
$ipkey24h = '149.28.134.195';


//Kiểm tra IP gửi sang
$ipPost = get_client_ip();
if( $ipPost != $ipkey24h) {
    echo 'IP không phải là của key24h gửi sang';
    return false;
}

$input = $_POST;

/**
 * Các dữ liệu mà key24h sau khi xử lý xong sẽ gửi sang cho bên bạn
 */
$params = array(
    'request_id', //đây là mã yêu cầu mà bên bạn lúc gửi thẻ sang
    'status', //trạng thái bên key24h xử lý ('pending', 'completed', 'failed', 'canceled')
    'amount', //mệnh giá thẻ
    'type', //Loại thẻ
    'code', //mã thẻ
    'serial', // serial
    'message', //
    'notice', // Thông báo
    'PartnerKey' // PartnerKey do key24h cung cấp cho bạn, đây là thông tin kết nối
);
$errors = [];
$data   = [];
foreach ($params as $key) {
    if(!isset($input[$key])) {
        $errors[$key] = 'empty';
    }else{
        $data[$key] = trim($input[$key]);
    }
}

if(!empty($errors)) {
    print_r($errors); // thiếu thông tin dữ liệu gửi sang
    return false;
}



/**
 * Đây là PartnerKey mà key24h tạo cho bạn,
 * Để bảo mật bạn cần kiểm tra PartnerKey này có khớp với PartnerKey mà key24 cung cấp hay không
 */
$PartnerKey = 'htt546gyg65gth555';
if($data['PartnerKey'] != $PartnerKey) {
    echo 'PartnerKey không hợp lệ';
    return false;
}

/**
 * Kiểm tra trạng thái bên key24h, nếu = pending thì vẫn là đang xử lý
 */
if($data['status'] == 'pending') {
    return false; //cái này tùy vào từng bên đối tác có xử lý tiếp hay không
}


if($data['status'] == 'completed' &&  $data['amount'] > 0) {
    $topup_amount = floatval($data['amount']);
    echo 'Thành công, mệnh giá thẻ là : '.$data['amount'];
    //xu ly tiep....
}else {
    $notice = $data['notice'];
    echo 'Thất bại: '.$notice;
    //xu ly tiep....
}
