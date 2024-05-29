<?php
$xml = simplexml_load_file('http://rsvt.co.kr/data/room_xml/skycamping_room_info.xml', 'SimpleXMLElement', LIBXML_NOCDATA);
$json = json_encode($xml);
$info = json_decode($json,TRUE);

$countObjext = 0;
$rooms['type1'] = [];
foreach($info as $index => $value) {
  // if ($countObjext != 0) {
  //   if ($countObjext > 0 && $countObjext < 6) {
  //     $rid = (string) $value->attributes()->rid;
  //     $rooms['type1'][$rid] = $value;
  //   }
  // }
  // $countObjext++;
  var_dump($value[0]);
}
var_dump($rooms);
?>
