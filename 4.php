<?php

function sortArray($data){
 	sort($data);
	for($i=0;$i<count($data);$i++){
		sort($data[$i]);
	}

	var_dump($data);
}
$data = [
['d','c','e','b','a'],
['k','i','j']
];

$datalain = [
             ['g','h','i','j'],
['a','c','b','e','d'],
['g','e','f']
];


echo sortArray($data)."<br>";
echo sortArray($datalain);

 ?>
