$(document).ready(function() {
	$("title").html($(".titlename").data("title"));

	var assesstitles = {};
	var url = "test_titles";

	$("div.objective").attr("data-test-num", function(index, value) {
		assesstitles[value] = $(this).children("p[data-tab-row]").html();
	});
	
	$.ajax({
		url: url,
		data: {
			assesstitles: assesstitles,
		},
		type: "POST",
	}).done(function(response) {
		title = $.parseJSON(response);
		$("div[data-test-num]").each(function(index, value) {
			$(this).children("p").html(title[index + 1] + ": ");
		});
	});

});