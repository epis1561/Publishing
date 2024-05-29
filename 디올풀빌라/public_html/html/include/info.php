<?

$xml_id = trim($id);

$xml_file = "http://staywith.net/map/".$xml_id.".xml"; 
$xml_file = "http://staywith.net/info1/".$xml_id.".xml";
$xml_file = "http://staywith.net/info2/".$xml_id.".xml";

$xml= simplexml_load_file("http://staywith.net/map/".$config['cf_1'].".xml");
$xml= simplexml_load_file("http://staywith.net/info1/".$config['cf_1'].".xml");
$xml= simplexml_load_file("http://staywith.net/info2/".$config['cf_1'].".xml");
$xml_count=count($xml->peninfo);

for ($i = 0 ; $i < $xml_count ; $i++){
 $Records[$i][penname] = $xml->peninfo[$i]->penname;
 $Records[$i][penadd] = $xml->peninfo[$i]->penadd;
 $Records[$i][penx] = $xml->peninfo[$i]->penx;
 $Records[$i][peny] = $xml->peninfo[$i]->peny;
 $Records[$i][peninfo1] = $xml->peninfo[$i]->peninfo1;
 $Records[$i][peninfo2] = $xml->peninfo[$i]->peninfo2;
}
?>