<?php

	class CommandInterpreter {
		var $command = "";
		var $parameters = Array();

		function commandInterpreter($function, $parameters) {
			$this->function = $function;
			$parameters = array_slice($command, 1);
		}
	}

	function getFunction() {
		return $this->function;
	}

	function setFunction($function) {
		$this->function = $function;
	}

	function getParams() {
		return $this->params;
	}

	function setParams($params) {
		$this->params = $params;
	}


?>