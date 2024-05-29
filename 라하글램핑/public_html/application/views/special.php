<link rel="stylesheet" href="/css/special.css">
<?php
include('header.php');
?>
<?php
$folderName="special";
$topArea="special";
$cate = $_GET['cate'];
$pageNum="2$cate";
$subNum="$cate";
$src="/images/$folderName$cate/";
switch ($cate) {
    case "01":
		
		$specialName="<span>Finnish sauna</span><br>사우나";

        $specialText ="라하만의 특별한 ‘휴식’<br>핀란드식 사우나<br>최고급 적삼목을 이용한 설계로 자연 그대로의 향을 전합니다.<br>
                    <span class='light'>(숙박 예약 고객 외 일반고객도 이용 가능합니다.)</span>
        <br><br>";

        $specialInfo="
        - 사우나 시설 7동<br>
        - 이용시간 10:00 ~ 22:00<br>
        - 2인기준, 1회(약 3시간) 4만원 / 1인 추가시마다 1만원<br>
        - 사우나 1동 당 최대 4인까지 이용 가능<br>
        - 이용 고객 전원 사우나 옷, 수건 제공 및 샤워실 이용 가능<br>
        - 현장결제<br>
    ";
	break;


    case "02":
		
		$specialName="<span>Private BBQ</span><br>개별바베큐";

        $specialText ="즐거운 여행의 ‘맛’, 바비큐<br>아름다운 달빛 아래 편리한 시설의 개별 바베큐장에서 소중한 사람들과 맛있는 식사를 하며 여행의 꽃을 피워 보세요!
        <br><br>";

        $specialInfo="
            - 숯+그릴 : 30,000원<br>
            - 그리들(해바라기버너) : 20,000원<br>
            - 숯+그릴,그리들(해바라기버너) 모두 이용 시 40,000원<br>
            - <span style='color:red;'>개인화기 및 숯 장작 반입불가</span> / 현장결제<br>
        ";
	break;


    case "03":
		
		$specialName="<span>Campfire</span><br>불멍";

        $specialText ="라하에서 느끼는 특별한 ‘명상’의 시간, 불멍<br>소리 없는 불꽃이 마음의 휴식을 찾아드립니다.<br>조용한 밤의 경치를 바라보며 소중한 사람들과의 낭만을 간직하세요.<br><br>";

        $specialInfo="
        - 장작 1망 : 20,000원<br>
        - 장작 추가시 10,000원<br>
        - 현장결제<br>
    ";
	break;


    case "04":
		
		$specialName="<span>Breakfast</span><br>조식";

        $specialText ="라하가 준비한 여유 있는 아침의 ‘휴식’, 조식<br>늦잠도 걱정 없이 눈부신 햇살 아래 산뜻하고 든든한 식사를 제공해 드립니다.<br><br>";

        $specialInfo="
        - 유료,사전예약필수(준비중)<br>
        - 도시락형(9시~10시 선택, 글램핑 각 동에 배달)<br>
        - 매장형(10시~12시 그린 테라스 방문)<br>
    ";
	break;


    case "05":
		
		$specialName="<span>Cafeteria</span><br>카페";

        $specialText ="진정한 ‘쉼’의 향기, 커피<br>라하와 함께하는 그린테라스에서 여유의 향기와 맛을 느껴보세요!<br>풍미 넘치는 음식과 함께 완벽한 휴식이 완성됩니다.<br><br>";
        $specialInfo="
        - 운영시간 09:00 ~ 22:00<br>
        - 오픈 준비중<br>
    ";
	break;


    case "06":
		
		$specialName="초록상회(매점)";

        $specialText ="부족한 준비에도 라하에선 ‘안심’할 수 있도록 준비된, 매점<br>모자람 없는 완벽한 하루를 제공해 드리고자 라하와 ‘초록 상회’가 함께합니다.<br>머무시는 동안 부족함 없이 채워가세요~!<br><br>";

        $specialInfo="
        - 운영시간 09:00 ~ 22:00<br>
        - 판매품목 : 주류, 음료, 스낵, 라면, 아이스크림, 얼음컵, 각종조미료, 고기, 불멍가루, 일회용품, 냉동식품 등등<br>
    ";
	break;

    case "07":
		
		$specialName="<span>Trail & Stream</span><br>계곡/둘레길";

        $specialText ="라하에서 만나는 자연이 빚어준 ‘꾸밈없는’ 휴식처, 치악산<br>치악산 자락 온전히 자연을 만끽할 수 있는 계곡과 둘레길이 펼쳐져 있습니다.<br>숲길을 거닐며 계곡과 자연의 소리에 귀 기울이면 완성된 ‘휴식’을 마주할 수 있습니다.<br><br>";

        $specialInfo="
       
    ";
	break;
    }

?>
<div class="special_slide">
    <div class="textbox">
        <h2><?php echo $specialName?></h2> 
    </div>
    <? include_once ('topArea.php'); ?>
</div>
<div class="special_list">
    <h2><?php echo $specialName?></h2>
    <div class="flex">
        <div class="leftbox"><img src="<?php echo $src ?>img01.jpg" alt=""></div>
        <div class="rightbox">
            <!-- <h3>이용 시 유의 사항</h3> -->
            <p><?php echo $specialText ?></p>
            <?php echo $specialInfo ?>
            <?php
            if($cate=="07"){
                echo"<div class='routes'>
                    <a href='http://chiaktrail.kr/course/course.html?cid=1' target='_blank'>1코스 꽃밭머리길 코스보기(행구동 → 라하)</a>
                    <a href='http://chiaktrail.kr/course/course.html?cid=2' target='_blank'>2코스 구룡길 코스보기(라하 → 정상 → 라하)</a>
                </div>";
            }
            ?>
        </div>
    </div>
</div>
<div class="spList1">
    <?php
      include('spList.php');
      ?>
</div>
  <?php
  include('footer.php');
?>