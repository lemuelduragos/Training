<html>
<head>
	<title>Create DB Function</title>
	<script type="text/javascript" src="jquery.min.js"></script>
</head>
<body>
	<label>Database Name:</label><input type="" name="dbName"><button>Create DB</button>
</body>
<script type="text/javascript">
 $('.button').click(function() {

 $.ajax({
  type: "POST",
  url: "PDOphp.php",
  data: { dbName: "Lemuel" }
}).done(function( msg ) {
  alert( "Data Saved: " + msg );
});    

    });
 </script>
</html>