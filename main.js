$(document).ready(function() {
	$("title").html($(".titlename").data("title"));

	$("#assessform_page").on("submit", "#assessform", function(e) {
		e.preventDefault();
		assessrows = {};
		url = $(this).attr("action");

		$("*").attr("data-test-num", function(k) {
			assessrows[k + 1] = {};
			$("*").attr("data-tab-row", function(v) {
				assessrows[k + 1][$(this).attr("data-tab-row")] = $(this).val();
			});
		});
		console.log(assessrows);


	});

});