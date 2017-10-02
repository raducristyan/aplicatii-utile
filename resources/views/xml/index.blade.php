<?php

$initTime = microtime(true);
$xml=new DOMDocument();
$xml->load("P2000.xml");
$domXpath = new DOMXpath($xml);
$bunuri = $domXpath->query('./*');
$totalPlata = $xml->documentElement->getAttribute("totalPlata_A");
$deletedItems = 0;

for($i = 0; $i < $bunuri->length; $i++){
	$cnp = $bunuri->item($i)->getElementsByTagName("Proprietar")->item(0)->getAttribute("Cnp_cui");
	$registru = $bunuri->item($i)->getElementsByTagName("Registru")->item(0)->getAttribute("Id_Registru");
	if (!validateCif($cnp) && !validateCnp($cnp)){
		$bunuri->item($i)->parentNode->removeChild($bunuri->item($i));
		$deletedItems += 1;
	};

	$dataModif = new DateTime($bunuri->item($i)->getElementsByTagName("Registru")->item(0)->getAttribute("Data_modif"));
	if ($dataModif > new DateTime('2017-01-01')){
		//echo $dataModif->format("Y-m-d H:i:s")."<br>";
	}
};

$totalPlata -= $deletedItems;
$xml->documentElement->setAttribute("totalPlata_A", $totalPlata);
$xml->normalizeDocument();
$endTime = microtime(true);
$xml->save("P2000-valid.xml");
$timeDiff = $endTime - $initTime;
echo $initTime;
echo "<br>";
echo round($timeDiff, 3);
echo "<br>";
echo $endTime;
