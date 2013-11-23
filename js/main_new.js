// this function executes when the DOM is fully loaded
$(document).ready(function() {

	var assessQuestions = document.createElement("assess-questions");
	// some HTML in the <head> tag is updated with these data attributes
	// once the page is loaded
	$("title").html($(".titlename").data("title"));
	$("body").attr("class", $(".bodyclass").data("bodyClass"));
	var stylesheets = $(".stylesheet").data("css").split(" ");
	$.each(stylesheets, function(index, value) {
		$("head").append("<link rel='stylesheet' type='text/css' href='css/" + value + "' />");
	});

	var assessdata = {};
	assessdata["categ"] = $("assess-questions").data("categoryId");
	assessdata["limit"] = $("assess-questions").data("assessLimit");
	var url = "test_info.php";

	$.ajax({
		url: url,
		data: {
			assessdata: assessdata,
		},
		type: "POST",
	}).done(function(response) {
		assessdata = $.parseJSON(response);
		console.log(assessdata);
		$.each(assessdata, function(index, value) {
			$("assess-questions").append(
				"<div data-test-num='" + value["Objective ID"] + "' class='objective'><p data-tab-row='objname'>" + value["Short Name"] + ": </p></div>"
			);
			if(value["YesNo or Number"] == "num") {
				$("div[data-test-num=" + value["Objective ID"] + "]").append(
					 	"<input type='text' class='numer' id='numer" + value["Objective ID"] + "' name='numer" + value["Objective ID"] + "' pattern='\\d+' value='' placeholder='numerator' required='required' title='This must be a number' />",
					 	"<input type='text' class='denom' id='denom" + value["Objective ID"] + "' name='denom" + value["Objective ID"] + "' pattern='\\d+' value='' placeholder='denominator' required='required' title='This must be a number' />"
				);
			}
			else {
				$("div[data-test-num=" + value["Objective ID"] + "]").append(
					 	"<label>Numerator: <input type='checkbox' name='numer" + value["Objective ID"] + "' id='numer" + value["Objective ID"] + "' class='numer' /></label>",
					 	"<input type='hidden' class='denom' id='denom" + value["Objective ID"] + "' name='denom" + value["Objective ID"] + "' value='1' />"
				);		
			};
			$("div[data-test-num=" + value["Objective ID"] + "]").append(
					"<textarea id='comments" + value["Objective ID"] + "' name='" + value["Objective ID"] + "' placeholder='Comments or Concerns'></textarea>"
			);
			$("div[data-test-num=" + value["Objective ID"] + "]").append(
				"<br />",
				"<br />"
			);
		});
	});	

});
