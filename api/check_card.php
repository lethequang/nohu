<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
    
    echo '<pre>';
    print_r($res);



    //thành công
    if(isset($res->status) && $res->status == '0')
    {
        $amount     = $res->amount; //mệnh giá thẻ mà bạn gưi sang
        $type       = $res->type; //Loại thẻ mà bạn gưi sang
        $serial     = $res->serial; //serial mà bạn gưi sang
        $code       = $res->code; //mã thẻ mà bạn gưi sang
        $request_id = $res->request_id; //request_id ma đối tác gửi sang
        $transid    = $res->transid; //mã giao dịch bên key24h.com
        
        echo 'Bạn đã gửi thành công thẻ '.$type .' mệnh giá '.number_format($amount).' đ';
    }
    //có lỗi
    else
    {
        echo isset($res->message) ? $res->message : 'Loi khong xac dinh';
    }
}else{
    echo 'Kiem tra lai du lieu';
}
      
		