<?php

ini_set('max_execution_time', 0);

$xml=new DOMDocument();
$xml->load("P2000-1.xml");
$xml->preserveWhiteSpace = false;
$xmlDoc = $xml->documentElement;
$tags = ["Auto", "Teren", "Cladire"];

foreach ($tags as $tag) {
	$bunuri = $xmlDoc->getElementsByTagName($tag);
	for ($i = 1; $i < $bunuri->length; $i++) {
		$proprietar = $bunuri->item($i)->getElementsByTagName("Proprietar");
		$cnp = $proprietar->item(0)->getAttribute("Cnp_cui");
		if (!validateCif($cnp) && !validateCnp($cnp)){
			$valid = false;
		}else {
			$valid = true;
		};
		if (!$valid) {
			$xmlDoc->removeChild($bunuri[$i]);
		}
	}
}

$xml->normalizeDocument();
$xml->save("p2000-2.xml");
