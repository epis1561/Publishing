<?php
$xml = simplexml_load_file('http://rsvt.co.kr/data/room_xml/skycamping_room_info.xml', 'SimpleXMLElement', LIBXML_NOCDATA);
$json = json_encode($xml);
$info = json_decode($json,TRUE);
unset($info['chargename']);

$count = 0;
$countObjext = 0;
$roomsData = [];
$split = [2, 3, 5, 3, 3, 5];
$count_value = $split[0];
foreach($info as $index => $roomsArr) {
  foreach($roomsArr as $index2 => $room) {
      if ($countObjext >= 0 && $countObjext < $count_value) {
        $roomsData['type'.$count][$index2] = $room;
        if ($countObjext === $count_value - 1) {
          $count++;
          $count_value = isset($split[$count]) ? $count_value + $split[$count] : $split[0];
        }
      }
      $countObjext++;
  }
  $count++;
}
?>
