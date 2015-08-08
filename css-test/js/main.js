
$(document).ready(function () {

	$(".nodebutton").click(function () {

		var clickedid = $(this).attr("id");

		$(".text").html("<p>You clicked button # " + clickedid + "</p>");
		

		});
	});




