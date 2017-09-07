
	$("h3").click(function( event ) {
		event.preventDefault();
 
	$(this).next().toggle("slow");
	});