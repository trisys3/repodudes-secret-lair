// these statements are only executed when the DOM is ready
$(document).ready(function() {

	console.log(localStorage["emptype-pat"]);

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

	// unchecks all checkboxes in signup & login forms when page is loaded
	$("#login-form, #signup-form input[type='checkbox']").attr("checked", false);

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

	// shows different fields to input during signup depending on if user is a patient or employee
	// and what type of employee if relevant
	$(".signup-extra").hide();
	$("#signup-form").on("change", ".emp-type", function() {
		$(".signup-extra").hide();
		$(this).find(":checked").attr("data-is-doctor", function() {
			if($(this).data("is-doctor") === "no") {
				$("patient-extra, .patient-extra").show();
			}
			if($(this).data("is-doctor") === "yes") {
				$("employee-extra, .employee-extra").show();
				if($(this).data("emp-type") === "support") {
					$(".staff-extra, staff-extra").show();
				}
				else if($(this).data("emp-type") === "nurse") {
					$(".nurse-extra, nurse-extra").show();
				}
				else if($(this).data("emp-type") === "surgeon") {
					$(".surgeon-type, surgeon-type").show();
				}
				else if($(this).data("emp-type") === "physician") {
					$(".doctor-extra, doctor-extra").show();
				}
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
		localStorage["username"] = $(this).attr("user");
		localStorage["password"] = $(this).attr("pass");
		localStorage["emptype-pat"] = $("#page").attr("patient");
		localStorage["emptype-emp"] = $("#page").attr("emptype");
	});
	$("#loggedin").on("click", "#logout", function() {
		localStorage["login"] = "login";
		delete(localStorage.username);
		delete(localStorage.password);
		delete(localStorage.emptype);
	});

	// redirects to page in URL on login
	if($("#page").is(":visible")) {
		window.location.href = "";
		localStorage["login"] = "loggedin";
		localStorage["username"] = $("#page").attr("user");
		localStorage["password"] = $("#page").attr("pass");
		localStorage["emptype-pat"] = $("#page").attr("patient");
		localStorage["emptype-emp"] = $("#page").attr("emptype");
	}

	// adds localStorage objects as attributes to loc-sto element
	// on log-in
	$("#loggedin loc-sto").attr("user", localStorage["username"]);
	$("#loggedin loc-sto").attr("pass", localStorage["password"]);
	$("#loggedin loc-sto").attr("emptype-pat", localStorage["emptype-pat"]);
	$("#loggedin loc-sto").attr("emptype-emp", localStorage["emptype-emp"]);

	// submission functions
	// pre-submission function when logging in
	$("#login-form").on("submit", function() {
		localStorage["login"] = "logging-in";
	});

	// pre-submission function when signing up
	$("#signup-form").on("submit", function() {
		localStorage["login"] = "signing-up";
	});

});