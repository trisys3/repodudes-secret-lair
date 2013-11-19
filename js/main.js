// this function executes when the DOM is fully loaded
$(document).ready(function() {
	// some HTML in the <head> tag is updated with these data attributes
	// once the page is loaded
	$("title").html($(".titlename").data("title"));
	$("body").attr("class", $(".bodyclass").data("bodyClass"));
	var stylesheets = $(".stylesheet").data("css").split(" ");
	$.each(stylesheets, function(index, value) {
		$("head").append("<link rel='stylesheet' type='text/css' href='css/" + value + "' />");
	});

	// this updates the assessment page with the correct names from the
	// database (from the "Short Name" field of the "objectives" table)
	var assesstitles = {};
	var url = "test_titles.php";

	// this function gets the values of the data attributes in the form
	// and puts them in an array
	$("div.objective").attr("data-test-num", function(index, value) {
		assesstitles[value] = $(this).children("p[data-tab-row]").html();
		// this is the AJAX to get the correct names and insert them into
		// the correct row
		$.ajax({
			url: url,
			data: {
				assesstitles: assesstitles,
			},
			type: "POST",
		}).done(function(response) {
			title = $.parseJSON(response);
			$("div.objective").each(function(index, value) {
				$(this).children("p").html(title[index] + ":");
			});
		});
	});
	

});
