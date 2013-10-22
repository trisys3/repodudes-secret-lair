<?php

$requestURI = explode("/", $_SERVER["REQUEST_URI"]);
$scriptName = explode("/",$_SERVER["SCRIPT_NAME"]);
 
for($i= 0;$i < sizeof($scriptName);$i++)
        {
      if ($requestURI[$i]     == $scriptName[$i])
              {
                unset($requestURI[$i]);
            }
      }


$command = array_values($requestURI);

?>