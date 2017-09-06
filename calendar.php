<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<title>Calendar</title>
</head>
<body>
<?php
$ctr=1;
$rowcounter = 1;
$inputMonth=$_GET["month"];
$inputYear=$_GET["year"];

$monthName = date("F", mktime(0, 0, 0, $inputMonth, 10));
echo "<h3>".$monthName." ".$inputYear."</h3>";


$jd=gregoriantojd($inputMonth,1,$inputYear); // starting day of the week on the month selected
$Nday = jddayofweek($jd,0);

$Mday=cal_days_in_month(CAL_GREGORIAN,$inputMonth,$inputYear);

echo "<table><tr><th>Sunday</th><th>Monday</th><th>Tuesday</th><th>Wednesday</th><th>Thursday</th><th>Friday</th><th>Saturday</th></tr><tr>";

while($Nday >0 && $rowcounter <=7) {
	echo "<td>-</td>";
	$Nday--;
	$rowcounter ++;
}

while($ctr <= $Mday) {
	if($rowcounter <= 7)
	{
		echo "<td>".$ctr."</td>";
		$rowcounter++;
		$ctr++;
	} else {
		echo "</tr><tr>";
		$rowcounter=1;
	}

}



?>
</body>
</html>
