<!DOCTYPE html>
<html>

	<head>

		<meta charset="utf-8" />

		<title>Wumpus World</title>

		<!--external JavaScript scripts-->
		<script type="text/javascript" src="/js/jquery/jquery.min.js"></script><!--jQuery-->
		<script type="text/javascript" src="/js/main.js"></script><!--main JavaScript page-->

		<!--external CSS stylesheets-->
		<link rel="stylesheet" type="text/css" href="/css/main.css" /><!--main CSS stylesheet-->

	</head>

	<body>

		<p id="11" class="room">You start out in the room 1 from left, 1 from bottom. The room is clear.</p>
		<p class="prompt">Choose a direction, or let the computer choose with "C". Let the computer play with "P".<br /><br />

			Press "A" then a direction to shoot an arrow, "E" to end the game if on the start square (1, 1),<br />
			"G" to grab the gold if you are in a room with gold, or "D" to drop the gold you are carrying.</p><br />

		<p id="score-line">Your score is now <score id="score">0</score>.</p>

	</body>

</html>