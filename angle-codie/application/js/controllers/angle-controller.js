'use strict';

app.controller('angleController', function($scope) {
	$(document).on('click', '#createchart', function(e){
    e.preventDefault();
    $.ajax({
    	url: '/angle/get_tasks',
    	type: 'POST',
    	dataType: 'json',
    	success: function(tasks) {
    		$scope.tdl = tasks;
    	}
    });
  });
});