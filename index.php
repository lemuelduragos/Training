<?php
$counter=0;
$word='HELLO WORLD';
$letters=str_split($word);
$lettersCount=sizeof($letters)-1;
while($lettersCount>=0) {
	echo $letters[$lettersCount];
	$lettersCount--;
}
echo "<br>";
echo "<br>";
$returnQuantity=10;
$ctr=1;
$firstNumber=0;
$secoundNumber=1;
$sum=1;
while($ctr<=$returnQuantity) {
	echo $sum." ";
	$sum = $firstNumber + $secoundNumber;
	$firstNumber = $secoundNumber;
	$secoundNumber = $sum;
	$ctr++;
}
echo "<br>";
echo "<br>";


function checkArray2($array1,$array2) {
 $array3 = array_intersect($array1, $array2);
print_r(array_values($array3)); 
}

$array1 = array('alpha', 'beta', 'charlie', 'delta', 'foxtrot', 'golf', 'india');
$array2 = array('alpha', 'charlie', 'india', 'hotel', 'test');

checkArray2($array2,$array1);



echo "<br>";
echo "<br>";
$var = false;
echo gettype($var);




/*
function checkArray() {
	$array1 = array('alpha', 'beta', 'charlie', 'delta', 'foxtrot', 'golf', 'india');
	$array2 = array('alpha', 'charlie', 'india', 'hotel', 'test');
	$array2Count = sizeof($array2)-1;
	$checkCounter=0;

	while($checkCounter<=$array2Count) {
		if(in_array($array2[$checkCounter], $array1)) {
			echo $array2[$checkCounter]." ";	
		}
		$checkCounter++;
	}
}
checkArray(); //execute function
*/

?>