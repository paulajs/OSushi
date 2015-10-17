$(document).ready(function() {
	$(".logoimg").click(function(e) {
		window.location = 'http://localhost:8080';
	});
 
	
	$("#slider > li:gt(0)").hide();

	setInterval(function() { 
	  $('#slider > li:first')
	    .fadeOut(300,"linear").css('display','none')
	    .next()
	    .fadeToggle(200,"linear")
	    .end()
	    .appendTo('#slider');
	}, 8000);
});	