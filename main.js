$(document).ready(function() {
	$("title").html($(".titlename").data("title"));

	$("#assessform_page").on("submit", "#assessform", function(e) {
		e.preventDefault();
		assessrows = {};
		url = $(this).attr("action");

		$("div[data-test-num]").attr("data-test-num", function(index, value) {
			assessrows[value] = {};
			$(this).children("input[data-tab-row], select[data-tab-row]").attr("data-tab-row", function(i, v) {
				assessrows[value][v] = $(this).val();
			});
			$(this).children("label[data-tab-row]").attr("data-tab-row", function(i, v) {
				assessrows[value][v] = $(this).text();
			});
		});
		
		$.ajax({
			url: url,
			data: assessrows,
			type: "POST",
			success: function() {
				window.location.href = url;
			},
		});

	});

});