<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>강촌테마랜드 예약확인</title>
	<link rel="stylesheet" href="/CSS/check2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/CSS/nav.css"> 
	<link rel="stylesheet" href="/CSS/footer.css">
</head>
<?php
include('nav.php');

$res_no = $this -> input -> post('res_no', TRUE);
$name = $this -> input -> post('name', TRUE);
$goodsname = "";

$sql = "SELECT * FROM `reserve` WHERE `res_no` = '$res_no' and `name` = '$name' ";
$data['slist'] = $this -> data_model -> getList($sql, 'DB');


foreach ($data['slist'] as $row)
{
	$res_date = $row['leisure_time'];
	$goods = $row['goods'];
	$headcount = $row['headcount'];
	$price = $row['price'];
	$name = $row['name'];
	$phone = $row['phone'];
	$status = $row['status'];
}

switch ( $status ) {
    case 1:
      $status = "예약 완료";
      break;
    case 0:
		$status = "취소 완료";
      break;
    case 2:
		$status = "취소 요청중";
      break;
    default:
		$status = "예약 완료";
  }

$sql = "SELECT * FROM `goods` WHERE `seq` = '$goods' ";
$data['slist'] = $this -> data_model -> getList($sql, 'DB');

foreach ($data['slist'] as $row)
{
	$goodsname = $row['name'];
}

?>
<body>
	<div class="main-wrap">
	<div class="logo">
				<a href="/welcome" id="logo">
				</a>
			</div>
		<div class="menu-btn">
			<a href="#"><img src="/images/common/nav-bar.png" alt=""></i></a>
		</div> 
		<div class="textbox">
			<h1>예약확인 및 취소</h1>
			<p>|&nbsp&nbsp Reservation &nbsp&nbsp|</p>
		</div>
	</div>

	<div class="gnbwrap">
		<div class="gnb">
			<ul>
				<li><a href="/reserve">예약하기</a></li>
				<li><a href="/check">예약확인 및 취소</a></li>
			</ul>
		</div>
	</div>
	

	<div class="user-form">
		<div class="container">
            <h1>예약확인 및 취소</h1>
            <p class="left-text">예약확인 및 취소를 확인하세요.</p>
			<h3>예약자 정보 확인</h3>
			<div class="notice"  style="height: 500px;">
				<ul>
					<li>예약 번호: </li>
					<li>예약날짜: </li>
					<li>예약자: </li>
					<li>예약상태: </li>
					<li>예약상품: </li>
					<li>인원수: </li>
					<li>결제가격: </li>
				</ul>
				<div class="detail">
					<ul id="detail">
						<li><?php echo $res_no ?></li>
						<li><?php echo $res_date ?></li>
						<li><?php echo $name ?> / <?php echo $phone ?></li>
						<li><?php echo $status ?></li>						
						<li><?php echo $goodsname ?></li>
						<li><?php echo $headcount ?> (명)</li>
						<li><?php echo $price ?> 원</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="submit">
			<div class="submit-btn" onclick="submit()">취소하기</div>
		</div>
	</div>


	<script src='https://code.jquery.com/jquery-1.9.1.min.js'></script>
	<script type="text/javascript" src="../../Js/calendar.js"></script>

	<script>
				$(document).ready(function(){
	$('.gnb li').eq(1).css("border-bottom","3px solid #978d6e");
	$('.Packagewrap .wowrap').eq(0).addClass('active');
})

// 다음 li들 차례로 호버시에 어떻게될지
 $('.gnb li').eq(0).hover(function(){
 $(this).css({"margin-bottom":"-6px","border-bottom":"3px solid #978d6e"});

}
,function(){
	$(this).css({"margin-bottom":"-6px","border-bottom":"none"})
});
$(function () {
	$('.cancel-btn').hover(function(){
			$(this).css({'background-color':'#686459','color':'#fff','cursor':'pointer'})	
			},function(){
				$(this).css({'background-color':'#fff','color':'#686459'})
			});
			$('.submit-btn').hover(function(){
			$(this).css({'background-color':'#686459','color':'#fff','cursor':'pointer'})	
			},function(){
				$(this).css({'background-color':'#fff','color':'#686459'})
			});
		});

	</script>
	<script type="text/javascript" language="javascript">
		function check_accept() {
			//alert(url);
	 
			if (document.getElementById('check1').checked) {
				return true;
			}
			else {
				alert("개인정보 수집 및 이용에 대한 안내를 동의해 주세요.");
				getFocus();
				return false;
			}
		}

		function submit(){
			if("<?php echo $status ?>" != "예약 완료"){
				alert("취소 또는 취소 요청중 인 예약 입니다.");
				return;
			}
			if(confirm("정말 취소 하시겠습니까 ?") == true){

		$.ajax({
			url: "Database/check_cancle",
			type: "post",
			async:false, 
			dataType		: 'json',
			data: {
				res_no: "<?php echo $res_no ?>"
			},
			success : function(result) {
				alert('취소 요청 하였습니다.');
				
			}
		});
		history.go(0);

    	    
    	}
    	else{
        	return ;
    	}
		}
	</script>
</body>

</html>
<?php include "footer.php" ?>