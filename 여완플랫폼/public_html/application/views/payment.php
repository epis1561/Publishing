<?php
include('header2.php');
?>
<link rel="stylesheet" href="/css/pay.css">

<div class="pay-wrap">
    <form action="" method="post">

    <div class="p-box box1">
        <h3>예약정보</h3>
        <table class="tg" style="undefined;table-layout: fixed; width: 100%">
<colgroup>
<col style="width: 30%">
<col style="width: 60%">
</colgroup>
<thead>
  <tr>
    <th class="tg-4ogm">업체명</th>
    <th class="tg-4wtg"id="p_accom">프리미엄키즈풀빌라</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-4ogm">객실명</td>
    <td class="tg-4wtg" id="p_room">독채1</td>
  </tr>
  <tr>
    <td class="tg-4ogm">체크인</td>
    <td class="tg-4wtg" id="p_day1">2023.09.03(일)</td>
  </tr>
  <tr>
    <td class="tg-4ogm">체크아웃</td>
    <td class="tg-4wtg" id="p_day2">2023.09.04(월)</td>
  </tr>
  <tr>
    <td class="tg-4ogm">숙박일수</td>
    <td class="tg-4wtg" id="p_days">1박</td>
  </tr>
  <tr>
    <td class="tg-4ogm">예약자명</td>
    <td class="tg-4wtg" id="p_people">홍길동</td>
  </tr>
  <tr>
    <td class="tg-4ogm">전화번호</td>
    <td class="tg-4wtg" id="p_tel">010-3333-2222</td>
  </tr>
</tbody>
</table>
    </div>
    <div class="p-box box2">
        <div class="flex spflex">
          <h3>이용정보</h3><label for="same_info"><input type="checkbox" name="same_info" id="same_info">예약자와 동일</label>
        </div>
        <div class="flex">
            <label for="p_name">이용자명</label>
            <input type="text" name="p_name" id="p_name" required>
        </div>
        <div class="flex">
            <label for="p_phone">전화번호</label>
            <input type="tel" name="p_phone" id="p_phone" required pattern="(010)-\d{3,4}-\d{4}" title="형식 010-0000-0000">
        </div>
    </div>

    <div class="p-box box3">
        <h3>결제금액</h3>
        <div class="flex">
          <span>상품금액</span><p id="p_price">150,000</p>
        </div>
        <div class="flex">
          <span>할인금액</span><p id="p_discount">-15,000</p>
        </div>
        <div class="flex" style="color:#8766e8;">
          <span>총 결제 금액</span><p id="p_total">135,000</p>
        </div>
    </div>

  <div class="p-box box4">

      <h3>결제수단 선택</h3>
    <div class="flex">
    <label for="p_card"><input type="checkbox" name="p_card" id="p_card">신용/체크카드</label>
    <label for="p_account"><input type="checkbox" name="p_account" id="p_account">실시간 계좌이체</label>
    </div>
  </div>
  <div class="p-box box5">

  <h3>현금영수증 신청</h3>

  <div class="flex"><label for="p_receipts1"><input type="checkbox" name="p_receipts1" id="p_receipts1">개인 소득공제용</label><input type="tel" name="" id=""></div>
  <div class="flex"><label for="p_receipts2"><input type="checkbox" name="p_receipts2" id="p_receipts2">사업자증빙용</label><input type="text" name="" id=""></div>
  </div>


    <div class="p-box box6">
    <div class="flex"><label for="p_term1"><input type="checkbox" name="p_term1" id="p_term1" required>이용 규칙 및 취소/환불</label><a href="">[보기]</a></div>
    <div class="flex"><label for="p_term2"><input type="checkbox" name="p_term2" id="p_term2" required>개인정보 수집 및 이용</label><a href="">[보기]</a></div>
    <div class="flex"><label for="p_term3"><input type="checkbox" name="p_term3" id="p_term3" required>개인정보 제 3자 제공</label><a href="">[보기]</a></div>

    </div>
  <input type="submit" value="결제하기">
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script>
$('.p-box.box4 .flex label input').click(function(){
    var label = $(this).closest('label');
    
    $('.p-box.box4 .flex label input').not(this).prop('checked', false);
    
    if ($(this).prop('checked')) {
        $('.p-box.box4 .flex label').css({"color":"", "background-color":""});
        label.css({"color":"#fff", "background-color":"#8766e8"});
    } else {
        label.css({"color":"", "background-color":""});
    }

    if ($(this).is('#p_account')) {
        $('.box5').slideToggle();
    }
});
$('.box5 input').click(function() {
  var index = $(this).index();

  
  $('.box5 input').prop('checked', false);

  
  $(this).prop('checked', true);
});
</script>