<link rel="stylesheet" href="/css/footer.css">
<div class="Info">
   Info.
</div>
<div class="detail">
    <div class="infoclose">돌아가기</div>
    <div class="detailwrap">
        업체명 : (주)여행의 완성<br>
        주소 : 강원특별자치도 춘천시 김유정로 1861, 3층<br>
        사업자등록번호 : 000-0000-0000<br>
        대표전화 : 070-4468-1610<br>
        <a href="">개인정보처리방침</a>
    </div>

</div>

<script>
   $('.Info').click(function(){
    $(this).hide();
    $('.detail').show();
   })
   $('.infoclose').click(function(){
    $('.detail').hide();
    $('.Info').show();
   })
</script>