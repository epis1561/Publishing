<?php include('header2.php'); ?>
<head>
<meta name="viewport" content="width=device-width,user-scalable=yes,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<link rel="stylesheet" href="/css/check.css">
<style>
  
</style>
</head>


    <div class="check-wrap">
        <div class="top">
            <h3>예약확인</h3>
            <button type="button">전체</button>
            <button type="button">이용 전</button>
            <button type="button">이용 후</button>
            <button type="button">취소</button>
        </div>
    
        <div class="flex-all">
            <div class="leftbox">
                <div class="flex_wrap">
                    <div class="left_flex" id="bef">
                        <div class="box1">
                            <p>이용 전</p>
                            <div class="photo">
                                <img src="/images/roompre/room01.jpg" alt="">
                            </div>
                            <div class="buttons">
                                <a href="">홈페이지</a>
                                <a href="">숙소문의</a>
                            </div>
                        </div>
                        <div class="box2">
                            <ul>
                                <li id="rc_accom">숙 소 명<span>:</span>미라몬티 풀빌라</li>
                                <li id="rc_room">객 실 명<span>:</span>풀빌라1,풀빌라2</li>
                                <li id="rc_checkIn">체 크 인<span>:</span>2023.08.14(월) 15:00</li>
                                <li id="rc_checkOut">체크아웃<span>:</span>2023.08.15(화) 11:00</li>
                                <li id="rc_discount">할인금액<span>:</span><span style="color:#FF0000;" class="none">53,000원</span></li>
                            </ul>
                        </div>
                        <div class="box3">
                            <span class="detail">예약 상세 ></span>
                        </div>
                    </div>
                </div>
    
                <div class="flex_wrap">
                    <div class="left_flex" id="aft">
                        <div class="box1">
                            <p>이용 후</p>
                            <div class="photo">
                                <img src="/images/roompre/room01.jpg" alt="">
                            </div>
                            <div class="buttons">
                                <a href="">홈페이지</a>
                                <a href="">숙소문의</a>
                            </div>
                        </div>
                        <div class="box2">
                            <ul>
                                <li id="rc_accom">숙 소 명<span>:</span>미라몬티 풀빌라</li>
                                <li id="rc_room">객 실 명<span>:</span>풀빌라1,풀빌라2</li>
                                <li id="rc_checkIn">체 크 인<span>:</span>2023.08.14(월) 15:00</li>
                                <li id="rc_checkOut">체크아웃<span>:</span>2023.08.15(화) 11:00</li>
                                <li id="rc_discount">할인금액<span>:</span><span style="color:#FF0000;" class="none">53,000원</span></li>
                            </ul>
                        </div>
                        <div class="box3">
                            <span class="detail">예약 상세 ></span>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="rightbox" id="before">
                <div class="right-all">
                    <div class="title">
                        <h3 id="rc_accom">미라몬티 풀빌라</h3>
                        <div class="button">
                            <button type="button" id="rc_cancel">예약취소</button>
                        </div>
                    </div>
                    <p id="rc_address">경기도 가평군 북면 가화로 1364-59</p>
                    <div class="box">
                        <h4>예약정보</h4>
                        <ul>
                            <li id="rc_num">· 예약번호<span>:</span>202304071512</li>
                            <li id="rc_checkIn">· <span class="text_between">체크인</span><span class="text2">:</span>2023.08.14(월) 15:00</li>
                            <li id="rc_checkOut">· 체크아웃<span>:</span>2023.08.15(화) 11:00</li>
                            <li id="rc_days">· 숙박일수<span>:</span>1박</li>
                            <li id="rc_room">· <span class="text_between">객실명</span><span class="text2">:</span>풀빌라1, 풀빌라2</li>
                            <li id="rc_name">· 예약자명<span>:</span>홍길동</li>
                            <li id="rc_tel">· 전화번호<span>:</span>010-1234-5678</li>
                        </ul>
                    </div>
                    <div class="box">
                        <h4>결제정보</h4>
                        <ul>
                            <li id="rc_book">· 결제일시<span>:</span>2023.07.03(수) 21:08</li>
                            <li id="rc_price">· 상품가격<span>:</span>720,000원</li>
                            <li id="rc_coupon">· 할인내용<span>:</span>회원가 적용 / 할인쿠폰 10% 사용</li>
                            <li id="rc_pay">· 결제금액<span>:</span>648,000원</li>
                            <li id="rc_method">· 결제수단<span>:</span>신용카드</li>
                        </ul>
                    </div>
                </div>
            </div>
    
            <div class="rightbox" id="after">
                <div class="right-all">
                    <div class="title">
                        <h3 id="rc_accom">미라몬티 풀빌라</h3>
                        <div class="button">
                            <button type="button" style="color:#0044FF; margin-left:10px;" id="rc_rebook">재예약</button>
                        </div>
                    </div>
                    <p>경기도 가평군 북면 가화로 1364-59</p>
                    <div class="box">
                        <h4>예약정보</h4>
                        <ul>
                            <li>· 예약번호<span>:</span><span id="rc_num">202304071512</span></li>
                            <li>· <span class="text_between">체크인</span><span class="text2">:</span><span id="rc_checkIn">2023.08.14(월) 15:00</span></li>
                            <li>· 체크아웃<span>:</span><span id="rc_checkOut">2023.08.15(화) 11:00</span></li>
                            <li>· 숙박일수<span>:</span><span id="rc_days">1박</span></li>
                            <li>· <span class="text_between">객실명</span><span class="text2">:</span><span id="rc_room">풀빌라1, 풀빌라2</span></li>
                            <li>· 예약자명<span>:</span><span id="rc_name">홍길동</span></li>
                            <li>· 전화번호<span>:</span><span id="rc_tel">010-1234-5678</span></li>
                        </ul>
                    </div>
                    <div class="box">
                        <h4>결제정보</h4>
                        <ul>
                            <li>· 결제일시<span>:</span><span id="rc_book">2023.07.03(수) 21:08</span></li>
                            <li>· 상품가격<span>:</span><span id="rc_price">720,000원</span></li>
                            <li>· 할인내용<span>:</span><span id="rc_coupon">회원가 적용 / 할인쿠폰 10% 사용</span></li>
                            <li>· 결제금액<span>:</span><span id="rc_pay">648,000원</span></li>
                            <li>· 결제수단<span>:</span><span id="rc_method">신용카드</span></li>
                        </ul>
                    </div>
                </div>
            </div>
    
    
        </div>
        <div class="flex-all-m">
            <div class="topbox_m">
                <h4>이용 전</h4>
                <img src="/images/roompre/room01.jpg" alt="">
                <div class="buttons-m">
                    <a href="">홈페이지</a>
                    <a href="">숙소문의</a>
                </div>
                <div class="flex-m">
                    <ul>
                        <li>숙 소 명 &nbsp;&nbsp;: </li>
                        <li>객 실 명 &nbsp;&nbsp;: </li>
                        <li>체 크 인 &nbsp;&nbsp;: </li>
                        <li>체크아웃 : </li>
                        <li>할인금액 : </li>
                    </ul>
                    <ul>
                    <li id="rc_accom">미라몬티 풀빌라</li>
                    <li id="rc_room">풀빌라1</li>
                    <li id="rc_checkIn">2023.08.14(월) 15:00</li>
                    <li id="rc_checkOut">2023.08.15(화) 11:00</li>
                    <li style="color:#DF0000;" id="rc_discount">53,000원</li>
                    </ul>
                </div>
                <div class="detail-m">
                    <h4 id="rc_accom">미라몬티 풀빌라</h4>
                    <p id="rc_address">경기도 가평군 북면 가화로 1364-59</p>
    
                    <ul class="detail-m1">
                        예약정보
                        <li>· 예약번호 : <span id="rc_num">202304071512</span></li>
                        <li>· 체 크 인 : <span id="rc_checkIn">2023.08.14(월) 15:00</span></li>
                        <li>· 체크아웃 : <span id="rc_checkOut">2023.08.15(화) 11:00</span></li>
                        <li>· 숙박일수 : <span id="rc_days">1박</span></li>
                        <li>· 객 실 명 : <span id="rc_room">풀빌라1</span></li>
                        <li>· 예약자명 : <span id="rc_name">홍길동</span></li>
                        <li>· 전화번호 : <span id="rc_tel">010-1234-5566</span></li>
                    </ul>
    
                    <ul>
                        결제정보
                        <li>· 결제일시 : <span id="rc_book">2023.07.03(수) 21:08</span></li>
                        <li>· 상품가격 : <span id="rc_price">720,000원</span></li>
                        <li>· 할인내용 : <span id="rc_coupon">회원가 적용 / 할인쿠폰 10% 사용</span></li>
                        <li>· 결제금액 : <span id="rc_pay">648,000원</span></li>
                        <li>· 결제수단 : <span id="rc_method"> 신용카드</span></li>
                    </ul>
                    <button id="rc_cancel_m">예약취소</button>
                </div>
                <button>예약 상세<span>〉</span></button>
            </div>
            <div class="topbox_m">
                <h4>이용 후</h4>
                <img src="/images/roompre/room01.jpg" alt="">
                <div class="buttons-m">
                    <a href="">홈페이지</a>
                    <a href="">숙소문의</a>
                </div>
                <div class="flex-m">
                    <ul>
                        <li>숙 소 명 &nbsp;&nbsp;: </li>
                        <li>객 실 명 &nbsp;&nbsp;: </li>
                        <li>체 크 인 &nbsp;&nbsp;: </li>
                        <li>체크아웃 : </li>
                        <li>할인금액 : </li>
                    </ul>
                    <ul>
                    <li id="rc_accom">미라몬티 풀빌라</li>
                    <li id="rc_room">풀빌라1</li>
                    <li id="rc_checkIn">2023.08.14(월) 15:00</li>
                    <li id="rc_checkOut">2023.08.15(화) 11:00</li>
                    <li style="color:#DF0000;" id="rc_discount">53,000원</li>
                    </ul>
                </div>
                <div class="detail-m">
                    <h4>미라몬티 풀빌라</h4>
                    <p>경기도 가평군 북면 가화로 1364-59</p>
    
                    <ul class="detail-m1">
                        예약정보
                        <li>· 예약번호 : <span id="rc_num">202304071512</span></li>
                        <li>· 체 크 인 : <span id="rc_checkIn">2023.08.14(월) 15:00</span></li>
                        <li>· 체크아웃 : <span id="rc_checkOut">2023.08.15(화) 11:00</span></li>
                        <li>· 숙박일수 : <span id="rc_days">1박</span></li>
                        <li>· 객 실 명 : <span id="rc_room">풀빌라1</span></li>
                        <li>· 예약자명 : <span id="rc_name">홍길동</span></li>
                        <li>· 전화번호 : <span id="rc_tel">010-1234-5566</span></li>
                    </ul>
    
                    <ul>
                        결제정보
                        <li>· 결제일시 : <span id="rc_book">2023.07.03(수) 21:08</span></li>
                        <li>· 상품가격 : <span id="rc_price">720,000원</span></li>
                        <li>· 할인내용 : <span id="rc_coupon">회원가 적용 / 할인쿠폰 10% 사용</span></li>
                        <li>· 결제금액 : <span id="rc_pay">648,000원</span></li>
                        <li>· 결제수단 : <span id="rc_method">신용카드</span></li>
                    </ul>
                    <button id="rc_rebook_m">재예약</button>
                </div>
                <button>예약 상세<span>〉</span></button>
            </div>
        </div>
    </div>

<div class="refund">
        <form action="">
            <h3>예약정보 및 취소 사유</h3>
            <ul class="refund_text">
                <li>업체명 : <span>미라몬티 풀빌라</span></li>
                <li>일정 : <span>2023.08.14 월(1박)</span></li>
                <li>환불예정금액 : <span>558,000원</span></li>
            </ul>
            <ul class="reasons">
                <li><label for="reason1"><input type="checkbox" name="reason1" id="reason1">단순변심</label></li>
                <li><label for="reason2"><input type="checkbox" name="reason2" id="reason2">예약정보 변경(일정,객실 등)</label></li>
                <li><label for="reason3"><input type="checkbox" name="reason3" id="reason3">결제수단 변경</label></li>
                <li><label for="reason4"><input type="checkbox" name="reason4" id="reason4">이용불만</label></li>
                <li><label for="reason5"><input type="checkbox" name="reason5" id="reason5">기타</label></li>
            </ul>
            <div class="flex">
               <input type="submit" value="예약취소"><button>닫기</button>
            </div>
        </form>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

<script>
$(document).ready(function(){
    
    $('.top button').css('display', 'inline-block');
    
    $('.top button').click(function() {
        
        $('.top button').css({"background-color": "#fff", "color": "rgba(135, 102, 232, 1)"});
        
        
        $(this).css({"background-color": "rgba(135, 102, 232, 1)", "color": "rgba(255, 255, 255, 1)"});
    });
    $('#bef .detail').click(function(event){
        $('#after').hide();
        $('#before').slideToggle();
        event.stopPropagation();
      
    });

    $('#aft .detail').click(function(event){
        $('#before').hide();
        $('#after').slideToggle();
        event.stopPropagation(); 
    });
});

var rotationDegree = 90; 

$('.topbox_m button').click(function(){
    var topboxM = $(this).closest('.topbox_m');
    topboxM.find('.detail-m').fadeToggle();

    
    rotationDegree += 180;
    if (rotationDegree % 180 === 0) {
        rotationDegree = 0;
    }
    $(this).find('span').css('transform', 'rotate(' + rotationDegree + 'deg)');
});


$('.reasons input[type="checkbox"]').click(function(){
    if($(this).prop('checked')){
        $('.reasons input[type="checkbox"]').prop('checked',false);
        $(this).prop('checked',true); 
    }
});

$('#rc_cancel').click(function(){
    $('.refund').show();
    $('.cover').css('background-color','rgba(255,255,255,0.8)');
})

$('#rc_cancel_m').click(function(){
    $('.refund').show();
    $('.cover').css('background-color','rgba(255,255,255,0.8)');
})
</script>