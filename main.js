$(document).ready(function() {
	$("title").html($(".titlename").data("title"));

	$("#assessform_page").on("submit", "#assessform", function(e) {
		var assessrows = {};
		var url = $(this).attr("action");

		$("div[data-test-num]").attr("data-test-num", function(index, value) {
			assessrows[value] = {};
			$(this).children("input[data-tab-row], select[data-tab-row]").attr("data-tab-row", function(i, v) {
				assessrows[value][v] = $(this).val();
			});
			$(this).children("label[data-tab-row]").attr("data-tab-row", function(i, v) {
				assessrows[value][v] = $(this).text();
			});
		});

		assessrows2 = {
			"assessrows": "assessrow"
		}
		
		$.ajax({
			url: url,
			data: assessrows2,
			type: "POST",
		});

	});

});