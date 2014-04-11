<!DOCTYPE html>

	<html>

		<head>

			<title>Loading...</title>

		</head>

		<body>

		<?php var_dump($_SERVER) ?>

			<?php include("$_SERVER[DOCUMENT_ROOT] . $_SERVER[REQUEST_URI]"); ?>

		</body>

	</html>