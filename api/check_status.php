<html>
<head>
    <title>Đổi Thẻ Cào</title>
    <meta charset="utf-8">
</head>
<body>
<?php
include 'config.php';
include 'card_charging_api.php';

// Call lib
try {
    $api = new Card_charging_api($config);
}
catch (Card_charging_Exception $e) {
    exit($e->getMessage());
}
/*
stdClass Object
(
    [type] => Vinaphone //Loại thẻ
    [code] => 124353234123 //Mã thẻ
    [serial] => 124353234589 //serial
    [status] => completed //Trạng thái ('pending', 'completed', 'failed') tương đương với ('Chờ xử lý', 'Thành công', 'Thất bại')
    [message] => Hoàn thành
    [fee] => 28.00 // Phí gạch thẻ (%)
    [amount] => 100,000đ //Mệnh giá thẻ
    [amount_pay] => 72,000đ //Số tiền thực nhận
    [notice] => // Ghi chú
    [created] => 28-06-2018 - 14:51:36 //Ngày gạch thẻ
)
*/

//Thẻ thành công
$key	    = 'vina'; //loai the cua nha mang
$code	    = '124353234123'; // ma the
$serial		= '124353234589'; //serial the
$card       = $api->check_status($key, $code, $serial);
echo '<pre>';
print_r($card);


//Thẻ thành công nhưng gửi sai mệnh giá
$key	    = 'vina'; //loai the cua nha mang
$code	    = '123456789125'; // ma the
$serial		= '123456789125'; //serial the
$card       = $api->check_status($key, $code, $serial);
echo '<pre>';
print_r($card);

//Thẻ thất bại
$key	    = 'vina'; //loai the cua nha mang
$code	    = '123456789123'; // ma the
$serial		= '123456789123'; //serial the
$card       = $api->check_status($key, $code, $serial);
echo '<pre>';
print_r($card);
?>
</body>
</html>