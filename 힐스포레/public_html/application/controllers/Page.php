<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() 
	{
		parent::__construct();
		$this -> DB = $this -> load -> database('default', TRUE);
		$this -> load -> model('data_model');
		$this -> load -> library('user_agent');
	}
	 
	function _remap($method) 
	{		
		$data['separator1'] = $this -> uri -> segment('1');
		$data['separator2'] = $this -> uri -> segment('2');
		if ($this -> agent -> is_mobile()) $data['is_mobile'] = true;
		else $data['is_mobile'] = false;
		$data['url'] = "http://hillsforet.kr";
		$data['title'] = "힐스포레";
		$data['keyword'] = "힐스포레,공주힐스포레,공주가볼만한곳,공주갈만한곳,공주펜션,공주풀빌라,공주애견펜션,공주애견풀빌라,공주캠핑,공주캠핑장,공주리조트,공주레지던스,공주호텔,공주명품한우,공주한우식당,공주대형카페";	
			

		if ($method == 'room' || $method == 'preview' || $method =='special2' || $method=='map' || $method =='map2') {
			$data['categoryName'] = "rooms";
		}
		$this -> load -> view('include/header', $data);
		if (method_exists($this, $method)) $this -> {"{$method}"}();
		$this -> load -> view('include/footer', $data);
		
	} 	  

	public function index()
	{
		if ($this -> agent -> is_mobile()) {
			$file = $_SERVER['DOCUMENT_ROOT']."/images/main/m/01_*.jpg";
			$data['chkMobile'] = true;
		}
		else {
			$file = $_SERVER['DOCUMENT_ROOT']."/images/main/01_*.jpg";
			$data['chkMobile'] = false;
		}
		$files = glob($file);
    	if ($files !== false) $data['imgCount'] = count($files);
    	//$sql = "SELECT * FROM `popup` WHERE startime <= NOW() AND endtime >= NOW() ORDER BY `idx` ASC";
		//$data['popups'] = $this -> data_model -> getList($sql, 'DB');
		$this->load->view('welcome_message', $data);
	}
	
	public function about()
	{
		if ($this -> agent -> is_mobile()) {
			$file = $_SERVER['DOCUMENT_ROOT']."/images/about/m/01_*.jpg";
		}
		else {
			$file = $_SERVER['DOCUMENT_ROOT']."/images/about/01_*.jpg";
		}
		$files = glob($file);
    if ($files !== false) $data['imgCount'] = count($files);	
		$this->load->view('about', $data);
	}
	
	public function room()
	{
		$cate = $data['cate'] = $this -> uri -> segment('2');	
		switch ($cate) {
			case "1":
				$data['roomId'] = "191975";
				$data['typeId'] = "115578";
			break;
			case "2":
				$data['roomId'] = "";
				$data['typeId'] = "115579";
			break;
			case "3":
				$data['roomId'] = "";
				$data['typeId'] = "115581";
			break;
			case "4":
				$data['roomId'] = "";
				$data['typeId'] = "217758";
			break;
			case "5":
				$data['roomId'] = "";
				$data['typeId'] = "217732";
			break;
			case "6":
				$data['roomId'] = "";
				$data['typeId'] = "99773";
			break;
		}
		$data['subNum'] = $subNum = sprintf('%02d', $cate);
		
		if ($this -> agent -> is_mobile()) {
			$file = $_SERVER['DOCUMENT_ROOT']."/images/room".$subNum."/m/01_*.jpg";
		}
		else {
			$file = $_SERVER['DOCUMENT_ROOT']."/images/room".$subNum."/01_*.jpg";
		}
		$files = glob($file);
    if ($files !== false) $data['imgCount'] = count($files);	
		$this->load->view('room', $data);
	}

	public function preview()
	{
		if ($this -> agent -> is_mobile()) {
			$file = $_SERVER['DOCUMENT_ROOT']."/images/room/m/01_*.jpg";
		}
		else {
			$file = $_SERVER['DOCUMENT_ROOT']."/images/room/01_*.jpg";
		}
		$files = glob($file);
    if ($files !== false) $data['imgCount'] = count($files);
	
		$this->load->view('preview', $data);
	}

public function special2(){
	$cate = $this -> uri -> segment('2');
	switch ($cate) {
		case "01":
			$subNum = "01";
			$data['title'] = "바비큐";
			$data['content'] = "
			풀빌라 객실에 한하여 개별 바비큐장 이용<br>
			참숯(국내산) + 그릴 제공<br>
			이용요금 : 2~3인 30,000원 / 4~6인 40,000원 / 숯 추가 15,000원<br>
			";
		break;
		case "2":
			$subNum = "02";
			$data['title'] = "개별수영장";
			$data['content'] = "
			풀빌라 객실에 한하여 개별 수영장 이용 가능(레지던스, 오토캠핑장 이용 불가)<br>
			1일 전 사전예약 시 이용가능(당일 신청 시, 신청 후 4시간 이후부터 이용 가능)<br>
			미온수 이용금액 : 1박당 미온수 70,000원 / 찬물 30,000원 / 현장결제<br>
			입실시부터 22:00까지 이용가능<br>
			수영복 또는 래시가드, 물빠짐 없는 옷 착장<br>
			*사전예약시 미온수가 준비되며, 미예약시 수영장 물 없음
			";
		break;
		case "3":
			$subNum = "03";
			$data['title'] = "야외수영장";
			$data['content'] = "
			하절기에 한하여 운영(홈페이지 별도공지 예정)<br>
			야외수영장 크기 10m * 5m<br>
			이용요금(현장결제)<br>
			(1)4인 기준 80,000원(몽골텐트, 썬베드, 테이블 제공), 인원 추가 시 1인당 15,000원<br>
			(2)취사도구(버너 및 휴대용 가스 제공) 15,000원<br>
			(3)썬베드 추가 시 15,000원
			";
		break;
		case "4":
			$subNum = "04";
			$data['title'] = "애견입실";
			$data['content'] = "
			<span style='font-weight:bold;'>큐브풀빌라 1008~1010호에 한하여 애견동반 입실 가능</span><br>
			객실당 2마리까지 입실 가능<br>
			1마리 입실시 최대 15kg, 2마리 입실시 2마리 모두 10kg 이하에 한하여 입실가능<br>
			애견 입실 시 1마리당(1박당) 30,000원(현장결제)<br>
			애견운동장(펜스 및 어질리티), 배변패드, 애견식기, 애견방석 구비완료
			";
		break;
		case "5":
			$subNum = "05";
			$data['title'] = "몽골텐트(단체바비큐)";
			$data['content'] = "
			바비큐 그릴세트, 테이블/의자, 냉장고, 전자레인지 제공<br>
			30명 이용가능하며, 30명 초과시 1인당 10,000원 추가비용 발생<br>
			사전예약(선착순)에 한하여 이용 가능<br>
			이용문의 1533-1283
			";
		break;
	}
		$data['subNum'] = $subNum = sprintf('%02d', $cate);
		if ($this -> agent -> is_mobile()) {
			$file = $_SERVER['DOCUMENT_ROOT']."/images/special2/m/".$subNum."_*.jpg";
		}
		else {
			$file = $_SERVER['DOCUMENT_ROOT']."/images/special2/".$subNum."_*.jpg";
		}
		$files = glob($file);
    if ($files !== false) $data['imgCount'] = count($files);	
		$this->load->view('special2', $data);
	}
	


	public function special()
	{
		$cate = $this -> uri -> segment('2');	
		switch ($cate) {
			case "1":
			$subNum = "01";
			$data['title'] = "베이커리 카페";
			$data['content'] = "
				이른 새벽, 제빵 명인의 준비로 시작하는 베이커리는 친환경 천연발효 수제빵으로 40년 한 길을 걸어온 명인의 손길에서 나오는 맛과 풍미를 즐길 수 있으며, 35년 경력의 바리스타가 커피 원산지 포인트 별로 매일 직접 로스팅하여 깊고 풍미가 가득한 커피를 제공합니다.<br class='none1024'>
				1층, 2층과 루프탑 등 약 300평 규모의 전체 150석으로 대형 야자수와 다양한 식물의 실내정원이 조성되어 자연과 함께 휴식할 수 있는 특별하고 스페셜한 공간입니다.<br class='none1024'>
<br><br>

				- 장소 : 충남 공주시 신풍명 심방울1길 19-24 베이커리 카페(힐스포레 단지 내 위치하며, 정문에서 도보로 5분 거리에 있습니다.)<br>
				- 이용안내 : 단체 이용 및 포장, 예약가능<br>
				- 운영시간 : 10:00 ~ 21:00<br>
				- 문의전화 : 041-841-0877<br>
				- 카페 : <a href='https//thesingles.quv.kr' target='_blank' style='color:#000;'>https://thesingles.quv.kr</a>
				
			";
		break;
			case "2":
				$subNum = "02";
				$data['title'] = "미트(명품한우식당)";
				$data['content'] = "
					농림축산식품부에서 인증한 안심식당으로 신선한 고기를 바로 제공해드리는 정육식당입니다.<br>
					공주시의 특산품인 명품 한우 브랜드인 공주알밤한우를 맛 보실 수 있습니다.<br>
					원하시는 고기를 구매하시면 상차림 하여 드실 수 있고, 육개장과 갈비탕, 냉면으로 간단한 식사도 가능합니다.<br><br>

					- 장소 : 충남 공주시 신풍면 심방울1길 19-34 명품한우(힐스포레 단지 내 위치하며, 정문에서 차량이동 시 1분거리에 있습니다.)<br>
					- 이용안내 : 단체 이용 및 포장, 예약가능<br>
					- 운영시간 : 10:00 ~ 22:00<br>
					- 문의전화 : 041-841-7773<br>
				";
			break;
			case "3":
				$subNum = "03";
				$data['title'] = "장어";
				$data['content'] = "
				현재 준비중 입니다.<br>
				";
			break;
			case "4":
				$subNum = "04";
				$data['title'] = "힐스포레 본관";
				$data['content'] = "
				본관 1층은 100명 수용가능한 세미나실로써 빔프로젝터와 대형 스크린이 설치되어 있으며<br>
				2층과 3층은 중,소 규모의 미팅룸과 강의실, 체험학습실 등이 조성되어 있습니다.<br>
				특히 생태계 및 자연환경, 농업에 대한 학습적 동기부여와 올바른 가치관 형성을 위해 교육 및 체험 프로그램을 운영합니다.<br>
				·이용문의 1533-1283
				";
			break;
			case "5":
				$subNum = "05";
				$data['title'] = "팜갤러리(공연장)";
				$data['content'] = "
				5000여점의 다육식물과 다양한 수종이 어우러진 공간에서 문화예술 공연을 즐길 수 있는 공연장을 겸비한 식물 갤러리입니다.
				";
			break;
			case "6":
				$subNum = "06";
				$data['title'] = "패션관";
				$data['content'] = "
				이태리 가방 및 여성의류, 액세서리 등 여행이 일상이 되어 여유와 멋을 느낄 수 있는 새로운 쉼터입니다.
				";
			break;
			case "7":
				$subNum = "07";
				$data['title'] = "스크린골프&노래방";
				$data['content'] = "
				가족, 친구, 연인 우리만을 위한 스크린 골프도 치고 영화관람, 노래방, 게임을 즐길 수 있는 멀티스페이스 입니다.
				";
			break;
			case "8":
				$subNum = "08";
				$data['title'] = "힐링센터(문화강좌)";
				$data['content'] = "
				건강강좌, 공예체험, 베이커리 강의 등 이론과 실기를 같이 수강할 수 있는 공간이 준비되어 누구나 힐링수업을 들을 수 있습니다.
				";
			break;
			case "9":
				$subNum = "09";
				$data['title'] = "K-POP스쿨";
				$data['content'] = "
				국내 연예 기획사와 협업하여 중국, 태국, 베트남, 필리핀 등 K-POP의 노래와 춤을 배우고 싶은 학생들을 대상으로 전문 강사진에게 배우는 교육장과 호텔을 운영하고 있습니다.<br>
				";
			break;
			case "10":
				$subNum = "10";
				$data['title'] = "어드벤처";
				$data['content'] = "
				관람열차, 에어바운스 플레이그라운드, 트램펄린 등 힐스포레에 방문하는 어린이와 청소년이 즐겁게 즐길 수 있는 시설이 준비되어 있습니다.
				";
			break;
			case "11":
				$subNum = "11";
				$data['title'] = "더 싱글즈 in 힐스포레";
				$data['content'] = "
				결혼을 하고싶은 이성 간의 만남의 기회를 제공하고 결혼에 대한 긍적적 가치관을 확산해 가족친화적인 사회 분위기를 조성하고자 개최되는 미혼남녀 싱글탈출프로젝트!<br>
				인연이 연인으로, 진정한 내 짝을 찾고 싶으시다면 신청해보세요!<br><br>
				월 1회 이상 힐스포레에서 정기모입 행사 개최(최대 3회, 토요일 / 공휴일, 공지게시판 및 개별 안내예정)<br>
				참여대상 : 공주/충성시에 주소 또는 직장을 둔 만 25세~49세 미혼남여<br>
				접수방법 : 이메일 spwindmill@daum.net / 팩스 041-751-2567로 접수 / 공식홈페이지에서 신청 방문<br>
				신청서류 : 참가신청서 [양식 다운로드] / 개인정보제공동의서 [양식 다운로드] / 최종학력증명서 [양식 다운로드] / 재직증명서 [양식 다운로드] / 혼인관계증명서 (전부사항 기재) / 주민등록등복 각 1부<br><br>
				※주의사항<br>
				최종 대상자는 사연과 연령 그리고 학력 등을 고려하여 선정됩니다.<br>
				참여 목표 인원에 도달할 경우 선정되지 못할 수 있음을 양해 부탁드립니다.<br>
				행사 진행 7일~10일 전 개별 통보를 해드립니다.<br>
				최종 선정자는 참가비 30,000원을 내시면 행사에 참여하실 수 있습니다.
				";
			break;
			case "12":
				$subNum = "12";
				$data['title'] = "아담한이브의정원";
				$data['content'] = "
				오색찬란한 아름다운 빛을 머금은 정원에서 소중한 사람과 거닐며 행복과 추억을 만들어보세요.
				";
			break;
		}
		$data['subNum'] = $subNum = sprintf('%02d', $cate);
		if ($this -> agent -> is_mobile()) {
			$file = $_SERVER['DOCUMENT_ROOT']."/images/special/m/".$subNum."_*.jpg";
		}
		else {
			$file = $_SERVER['DOCUMENT_ROOT']."/images/special/".$subNum."_*.jpg";
		}
		$files = glob($file);
    if ($files !== false) $data['imgCount'] = count($files);	
		$this->load->view('special', $data);
	}

	public function travel()
	{
		$this->load->view('travel');
	}

	public function reservation()
	{
		$this->load->view('reservation');
	}
	public function reserve()
	{
		$this->load->view('reserve');
	}
	public function map()
	{
		$this->load->view('map');
	}
	public function map2()
	{
		$this->load->view('map2');
	}

}
