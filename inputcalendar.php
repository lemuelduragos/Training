<!DOCTYPE html>
<head>
	<script type="text/javascript" src="jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<form action="" method="POST" id="form137">
<select name="month">
<option value='1'>January</option>
<option value='2'>February</option>
<option value='3'>March</option>
<option value='4'>April</option>
<option value='5'>May</option>
<option value='6'>June</option>
<option value='7'>July</option>
<option value='8'>August</option>
<option value='9'>September</option>
<option value='10'>October</option>
<option value='11'>November</option>
<option value='12'>December</option>
</select>
<input name="year" type="number" required max="9999" min="1800"></input>
<button type="submit">Generate Calendar</button>
</form>
<br>
<div id="calendar"><table><tr><th>Sunday</th><th>Monday</th><th>Tuesday</th><th>Wednesday</th><th>Thursday</th><th>Friday</th><th>Saturday</th></tr></div>
</body>

<script type="text/javascript">

$("#form137").on('submit', function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "calendar.php",
        data: $('#form137').serialize(),
        success: function(result) {
            $("#calendar").html(result);
        },
        error: function(result) {
            alert('error');
        }
    });
});
</script>

</html>

