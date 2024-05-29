<?
  //XML파일 갱신시 /data/file/info.xml 파일 삭제후 페이지 재실행시 갱신된 파일을 생성함
  $xmlurl = 'http://staywith.net/xml/'.$config['cf_1'].'.xml';

  // $roomOrder = '1,2,3,4,5,6';
  // 옵션 1 : 옵션 우선순위 1순위
  // 사용법 : 사용시 주석삭제, 비사용시 주석유지
  // 자료형은 문자형. 변경할 순서대로 콤마로 구분해 입력.

  // $roomExcept = '1,3,5';
  // 옵션 2 : 옵션 우선순위 2순위
  // 사용법 : 사용시 주석삭제, 비사용시 주석유지
  // 자료형은 문자형. 제외할 방 번호를 콤마로 구분.

  // $shortenMenu = "(";
  // 옵션 3 : 사용시 주석삭제, 비사용시 주석유지
  // 메뉴 텍스트에서 삭제할 기준 문자 뒤의 문자열은 모두 삭제됨
  // "(" 입력시 예제 : 방1번(room1) = 방1번
  // 이때 변수는 $roomname이 아닌 $roomname2 을 생성하므로 메뉴를 뿌릴 때 $roomname 이 아닌 $roomname2로 사용하면 됨.
  //XML이 없을 경우 원본 복제 생성, 있을 경우 생성된 XML 이용.


  // 옵션4 : 방 메뉴 제외시, 이름이 이 옵션으로 변경된 방도 제외됨.
  // 사용법 : 사용시 주석삭제, 비사용시 주석유지
  // 자료형은 문자형. 콤마(,)로 구분하여 방이름을 기입하면 기입한 순서대로 방이름으로 사용가능한 변수 $roomname3 생성
  $original = file_get_contents($xmlurl);
  if (!file_exists($rootdir.'/data/file/xml/')) {
    mkdir($rootdir.'/data/file/xml/', 0777, true);
    chmod($rootdir.'/data/file/xml/', 0777);
  }
  if (!file_exists($rootdir.'/data/file/xml/info.xml')) {
    file_put_contents($rootdir.'/data/file/xml/info.xml', $original);
  }

  //XML 파싱
  $xmlurl2 = $rootdir.'/data/file/xml/info.xml';
  $xml = simplexml_load_file($xmlurl2) or die("객체 생성 불가");
  $count = $xml->count();

  //방순서변경 사전설정
  $changeroom = false;
  if (isset($roomOrder) == true) {
    $roomOrder = explode(',',$roomOrder);
    if (count($roomOrder) == $count) {
      $changeroom = true;
    }
  }

  //방제외 사전설정
  $roomExceptOn= false;
  if (isset($roomExcept) == true) {
    $roomExcept = explode(',', $roomExcept);
    $roomExceptOn = true;
  }
  $roomindex = 0;

  //1차 배열담기
  $customMenu = explode(',', $customMenu);
  foreach($xml->children() as $roominfos) {
    $valueorder = $changeroom == true ? (int)$roomOrder[$roomindex] - 1 : $roomindex;
    $roomid[$roomindex] = $xml->roominfo[$valueorder]->roomno;
    $roomname[$roomindex] = $xml->roominfo[$valueorder]->roomname;
    $roomname2[$roomindex] = $xml->roominfo[$valueorder]->roomname;
    $roomname3[$roomindex] = $roomname2[$roomindex];
    if($customMenu[$roomindex]){
      $roomname3[$roomindex] = $customMenu[$roomindex];
    }
    $roomindex++;
  }
  //방제외시 배열 재정리
  if ($roomExceptOn == true) {
    foreach ($roomExcept as $key => $val) {
      unset($roomid[$val-1]);
      unset($roomname[$val-1]);
      unset($roomname2[$val-1]);
      unset($roomname3[$val-1]);
    }
      $roomid = array_values($roomid);
      $roomname = array_values($roomname);
      $roomname2 = array_values($roomname2);
      $roomname3 = array_values($roomname3);
  }
  //방제목 자를시 이름배열 수정
  if (isset($shortenMenu) == true) {
    foreach ($roomname as $key => $val) {
      $resultName = explode($shortenMenu,$roomname[$key]);
      $roomname2[$key] = $resultName[0];
    }
  }

  // 사용가능 변수
  // $roomid = 객실아이디(번호)
  // $roomname = 원본 방이름(모든 문자)
  // $roomname2 = 원본 방이름에서 옵션값에 따라 문자열을 자름. 옵션이 없을 땐 $roomname과 동일
  // $roomname3 = 방이름($roomname2)를 기준으로 방이름을 변경. 문자열 입력방식으로 입력하되, 변경할 순서대로 콤마(,)로 구분하여 입력. 방 제외 옵션 사용시 이 메뉴에도 적용됨

  $roomnum = $_GET[roomnum];
  foreach ($roomid as $key => $val) {
    if ($roomnum == $val) {
      $pageTitle02=$roomname2[$key];
    }
  }
  //객실 페이지 <title></title>에 들어갈 변수 앞으로 뺌
?>
