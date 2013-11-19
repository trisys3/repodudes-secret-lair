var app = angular.module("app"), []).config(function($routeProvider) {
	$routeProvider.when('/login', {
		templateUrl: 'login.html',
		controller: 'LoginController'
	});

	$routeProvider.when('home', {
		templateUrl: 'home.html',
		controller: 'HomeController'
	})

	$routeProvider.otherwise({
		redirectTo: '/login';
	});
});

app.factory("AuthenticationService", function($location) {
	return {
		login: function(credentials) {
			if(credentials.username === 'ralph') {
				$location.path('/home');
			}
		},
		logout: function() {

		}
	};
});

app.controller('LoginController', function($scope, AuthenticationService) {
	$scope.credentials = {
		username = "",
		password = ""
	};

	$scope.login = function() {
		AuthenticationService.login($scope.credentials);
	};
});

app.controller('HomeController', function($scope, AuthenticationService) {
	$scope.message = "Isn't this a nice house?";

	$scope.logout = function() {
		AuthenticationService.logout();
	};
});

app.directive('showsMessageWhenHovered', function() {
	return {
		restrict: "A",
		link: function(scope, element, attributes) {
			var originalMessage = scope.message;
			element.bind("mouseover", function() {
				scope.message = attributes.message;
				scope.apply();
			});
			element.bind("mouseout", function() {
				scope.message = originalMessage;
				scope.$apply();
			});
		}
	};
});