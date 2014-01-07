<?php

include("custom_commands.php");
include("custom_routes.php");
// include("module_urls.php");
$urlInterpreter = new UrlInterpreter();
$urlCommand = $urlInterpreter->getCommand();
$command = new CommandInterpreter($urlCommand);
$function = $command->getFunction();
$params = $command->getParams();

?>