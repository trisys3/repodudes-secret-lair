// these statements are only executed when the DOM is ready
$(document).ready(function() {

	// show section in account.php based on localStorage object, hide
	// all the rest
	$(".login-page").hide();
	$("#" + localStorage["login"]).show();
	if(!($(".login-page").is(":visible"))) {
		$("#login").show();
	}

	// use the "data-title" attribute of the "data-title" element
	// to set the page title
	$("title").text($("data-title:visible").data("title"));

	// if the user is a patient, assigns a relevant name as the username
	// placeholder; otherwise assigns the placeholder a relevant name based
	// on the employee type chosen
	$("#login-form, #signup-form").on("change", ".emp-type", function() {
		$(this).find(":checked").attr("data-emp-type", function() {
			if($(this).data("emp-type") === "patient") {
				$(".user").attr("placeholder", "John Doe");
			}
			else if($(this).data("emp-type") === "support") {
				$(".user").attr("placeholder", "Janitor Bob");
			}
			else if($(this).data("emp-type") === "nurse") {
				$(".user").attr("placeholder", "Nurse Jane");
			}
			else if($(this).data("emp-type") === "surgeon") {
				$(".user").attr("placeholder", "Surgeon Joe");
			}
			else if($(this).data("emp-type") === "physician") {
				$(".user").attr("placeholder", "Dr. John");
			}
			else {
				$(".user").attr("placeholder", "John Doe");
			}
		});
	});

	// an employee can not be more than 1 type of employee, so this
	// prevents that
	$(".emp-type").on("change", "[data-is-doctor='yes']", function(index, elem) {
		$(this).parent().siblings().children("[data-is-doctor='yes']:checked").prop("checked", false);
	});

	// DOM functions for redirecting links back to correct section of
	// account page by setting relevant localStorage value before page
	// reload
	$("#login").on("click", "#signup-instead", function() {
		localStorage["login"] = "signup";
	});
	$("#signup").on("click", "#login-instead", function() {
		localStorage["login"] = "login";
	});
	$("#loggedout").on("click", "#login-link", function() {
		localStorage["login"] = "login";
	});
	$("#loggedout").on("click", "#signup-link", function() {
		localStorage["login"] = "signup";
	});
	$("#login-error").on("click", "#login-wrong", function() {
		localStorage["login"] = "login";
	});
	$("#login-error").on("click", "#signup-wrong", function() {
		localStorage["login"] = "signup";
	});
	$("#logging-in, #signing-up, #loggedin").on("click", "#login-again", function() {
		localStorage["login"] = "login";
	});
	$("#logging-in, #signing-up, #loggedin").on("click", "#signup-again", function() {
		localStorage["login"] = "signup";
	});
	$("#logging-in").on("click", ".login-soe", function() {
		localStorage["login"] = "login";
	});
	$("#logging-in").on("click", ".signup-new", function() {
		localStorage["login"] = "signup";
	});
	$("#logging-in").on("click", "#keep-logging-in", function() {
		localStorage["login"] = "loggedin";
	});

	if($("#page").is(":visible")) {
		window.location.href = "";
		localStorage["login"] = "loggedin";
	}

	// submission functions
	// pre-submission function when logging in
	$("#login-form").on("submit", function(e) {
		localStorage["login"] = "logging-in";
	});

	// pre-submission function when signing up
	$("#signup-form").on("submit", function(e) {
		localStorage["login"] = "signing-up";
	});

	// this redirects back to the login page on a wrong login
	// if($("#wrong-login").length) {
	// 	localStorage["login"] = "login";
	// 	window.location.href = "";
	// }

});