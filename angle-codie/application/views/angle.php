<!DOCTYPE html>
<html>
	<head data-ng-app="angle">
		<title>Angle</title>
		<meta charset="utf-8" />

		<!--JavaScript files-->
		<!--link for jQuery-->
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<!--Modernizr plugin for detecting HTML5 features-->
		<script type="text/javascript" src="/addons/shared_addons/themes/conjuction/js/modernizr-latest.js"></script>
		<!--bootstrap plugin link-->
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/js/bootstrap.js"></script>
		<!--minified AngularJS files-->
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular-cookies.min.js"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular-sanitize.js"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular-resource.min.js"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular-loader.min.js"></script>
		<!--local JavaScript files-->
		<script type="text/javascript" src="/application/js/directives/angle-directive.js"></script>
		<script type="text/javascript" src="/application/js/filters/angle-filter.js"></script>
		<script type="text/javascript" src="/application/js/controllers/angle-controller.js"></script>
		<script type="text/javascript" src="/application/js/services/angle-service.js"></script>
		<script type="text/javascript" src="/application/js/app.js"></script>

		<!--CSS files-->
		<!--Twitter Bootstrap files-->
		<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.min.css" />
		<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.css" />
		<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap.css" />
		<!--local CSS files-->
		<link rel="stylesheet" type="text/css" href="/application/css/angle.css" />

	</head>
	<body data-ng-controller="angleController as tdl">
		<form method="post" action="/angle/update_list" name="tdl_form" id="tdl_form">
			<ul id="tdl">
				<li id="tdl_list" data-ng-model="tdl" data-ng-repeat="list in tdl">
					<input type="checkbox" name="tdl_task[]" data-ng-checked="list.default" id="tdl_task_{{ id }}" data-ng-class="{tdl_item: true}" data-ng-true-value="done" data-ng-false-value="not_done" />
					<p id="list_item">{{ list.task }}</p>
				</li>
			</ul>
			<button type="submit">Submit changes</button>
		</form>

	</body>