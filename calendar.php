<?php
$ctr=1;
$rowcounter = 1;
$inputMonth=$_POST["month"];
$inputYear=$_POST["year"];

$jd=gregoriantojd($inputMonth,1,$inputYear); //convert gregorian to julian calendar
$Nday = jddayofweek($jd,0); //day of the week in numeric form
$Mday=cal_days_in_month(CAL_GREGORIAN,$inputMonth,$inputYear); // number of days in a month

echo "<table><tr><th>Sunday</th><th>Monday</th><th>Tuesday</th><th>Wednesday</th><th>Thursday</th><th>Friday</th><th>Saturday</th></tr><tr>";

while($Nday >0 && $rowcounter <=7) {
	echo "<td></td>";
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

if($ctr >= $Mday) {
	while($rowcounter <= 7) {
		echo "<td></td>";
		$rowcounter++;
	}
}




?>
</body>

