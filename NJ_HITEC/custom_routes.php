<?php

class UrlInterpreter {


	public $expectedUrl;
	public $displayedUrl;
	public $urlName = Array();
	public $command = "";

	function UrlInterpreter() {

		$expectedUrl = explode("/", $_SERVER["REQUEST_URI"]);
		$displayedUrl = explode("/", $_SERVER["SCRIPT_NAME"]);
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