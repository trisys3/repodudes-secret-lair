<?php

class UrlInterpreter {

	var $expectedUrl = explode("/", $_SERVER["REQUEST_URI"]);
	var $displayedUrl = explode("/",$_SERVER["SCRIPT_NAME"]);
	var $urlName = Array();
	var $command = "";

	function urlInterpreter() {

		$urlName = $expectedUrl;
	 
		for($i= 0;$i < sizeof($displayedUrl);$i++) {
      if ($expectedUrl[$i] == $displayedUrl[$i]) {
        array_shift($expectedUrl);
      }
    }

    $this->command = $expectedUrl;
    $this->urlName = $urlName;
	}

	function getCommand() {
		return $this->command;
	}

	function setCommand($command) {
		$this->command = $command;
	}

	function getUrlName() {
		return $this->urlName;
	}

	function setUrlName($urlName) {
		$this->urlName = $urlName;
	}

}

?>