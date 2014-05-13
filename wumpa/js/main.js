// create objects for rooms and obstacles/rewards
// ones digit is horizontal, starting from left,
// tens digit is vertical, starting from bottom
var room = {
11: 1,
12: 1,
13: Math.floor((Math.random() * 4) + 1),
14: Math.floor((Math.random() * 4) + 1),
21: 1,
22: Math.floor((Math.random() * 4) + 1),
23: Math.floor((Math.random() * 4) + 1),
24: Math.floor((Math.random() * 4) + 1),
31: Math.floor((Math.random() * 4) + 1),
32: Math.floor((Math.random() * 4) + 1),
33: Math.floor((Math.random() * 4) + 1),
34: Math.floor((Math.random() * 4) + 1),
41: Math.floor((Math.random() * 4) + 1),
42: Math.floor((Math.random() * 4) + 1),
43: Math.floor((Math.random() * 4) + 1),
44: Math.floor((Math.random() * 4) + 1)
};
// initialize room object
var room_object = {};

// change room number into obstacle/reward string,
// store it in "room_object" object
function loadRooms() {
	$.each(room, function(index, value) {
		// if room value is 1, no obstacles/gold
		if(value === 1) {
			room_object[index] = "clear";
		}
		// if room value is 2, there is a pit,
		// adventurer feels a draft in adjacent rooms
		else if(value === 2) {
			room_object[index] = "pit";
			if(room[index + 1] !== /breeze/) {
				room_object[index + 1] += " breeze";
			}
			if(room[index - 1] !== /breeze/) {
				room_object[index - 1] += " breeze";
			}
			if(room[index + 10] !== /breeze/) {
				room_object[index + 10] += " breeze";
			}
			if(room[index - 10] !== /breeze/) {
				room_object[index - 10] += " breeze";
			}
		}
		// if room value is 3, a wumpus is in this room,
		// adventurer smells something in adjacent rooms
		else if(value === 3) {
			room_object[index] = "wumpus";
			if(room[index + 1] !== /stink/) {
				room_object[index + 1] += " stink";
			}
			if(room[index - 1] !== /stink/) {
				room_object[index - 1] += " stink";
			}
			if(room[index + 10] !== /stink/) {
				room_object[index + 10] += " stink";
			}
			if(room[index - 10] !== /stink/) {
				room_object[index - 10] += " stink";
			}
		}
		// if room value is 4, there is gold,
		// adventurer sees glitter from adjacent rooms
		else if(value === 4) {
			room_object[index] = "gold";
			if(room[index + 1] !== /glitter/) {
				room_object[index + 1] += " glitter";
			}
			if(room[index - 1] !== /glitter/) {
				room_object[index - 1] += " glitter";
			}
			if(room[index + 10] !== /glitter/) {
				room_object[index + 10] += " glitter";
			}
			if(room[index - 10] !== /glitter/) {
				room_object[index - 10] += " glitter";
			}
		}
	});
}


loadRooms();

agent_rooms = {};

// code to run when page is "ready"
$(document).ready(function() {

	// adventurer is alive
	localStorage["alive"] = "true";

	// initialize score to 0
	localStorage["score"] = 0;

	// user is not carrying any gold
	localStorage["gold"] = "false";

	// initialize computer's data object about rooms
	localStorage["room"] = JSON.stringify({});

	localStorage["arrow"] = "true";

	// listen for arrow keys & tabs
	$(document).on("keydown.wumpusPrompt", function(e) {
		// if the user presses the left arrow key
		if(e.which === 37) {
			// if the room is on the Wumpus board
			if(room[parseInt($(".room").attr("id")) - 1] !== undefined) {
				// move adventurer to new room
				$(".room").attr("id", parseInt($(".room").attr("id")) - 1);
				$(".room").html("");
				// remove 1 point from user's score for moving
				localStorage["score"] -= 1;
			}
			// if the room is not on the Wumpus board
			else {
				// do not move adventurer
				$(".room").html("You try to enter a room, but the room does not exist. You are magically transported back to the previous room.<br />");
			}
		}
		// if the user presses the up arrow key
		else if(e.which === 38) {
			// if the room is on the Wumpus board
			if(room[parseInt($(".room").attr("id")) + 10] !== undefined) {
				// move adventurer to new room
				$(".room").attr("id", parseInt($(".room").attr("id")) + 10);
				$(".room").html("");
				// remove 1 point from user's score for moving
				localStorage["score"] -= 1;
			}
			// if the room is not on the Wumpus board
			else {
				// adventurer does not move
				$(".room").html("You try to enter a room, but the room does not exist. You are magically transported back to the previous room.<br />");
			}
		}
		// if the user presses the right arrow key
		else if(e.which === 39) {
			// if the room is on the Wumpus board
			if(room[parseInt($(".room").attr("id")) + 1] !== undefined) {
				// adventurer moves into new room
				$(".room").attr("id", parseInt($(".room").attr("id")) + 1);
				$(".room").html("");
				// remove 1 point from user's score for moving
				localStorage["score"] -= 1;
			}
			// if the room is not on the Wumpus board
			else {
				// adventurer does not move
				$(".room").html("You try to enter a room, but the room does not exist. You are magically transported back to the previous room.<br />");
			}
		}
		// if the user presses the down arrow key
		else if(e.which === 40) {
			// if the room is on the Wumpus board
			if(room[parseInt($(".room").attr("id")) - 10] !== undefined) {
				// adventurer moves to new room
				$(".room").attr("id", parseInt($(".room").attr("id")) - 10);
				$(".room").html("");
				// remove 1 point from user's score for moving
				localStorage["score"] -= 1;
			}
			// if the room is not on the Wumpus board
			else {
				// adventurer does not move
				$(".room").html("You try to enter a room, but the room does not exist. You are magically transported back to the previous room.<br />");
			}
		}
		// if user presses "g"
		else if(e.which === 71) {
			// if user is in room with gold & isn't already carrying some
			if(room[$(".room").attr("id")] === 4 && localStorage["gold"] === "false") {
				$(".room").html("You pick up some gold.");
				// user gains 1000 points for getting gold
				localStorage["score"] = Number(localStorage["score"]) + 1000;
				// this room becomes "clear", i.e. no gold anymore
				room[$(".room").attr("id")] = 1;
				// reload rooms
				loadRooms();
				localStorage["gold"] = "true";
			}
			// if user tries to pick up some gold but is already carrying some, he/she can not pick up more
			else if(localStorage["gold"] === "true") {
				$(".room").append("You try to pick up some gold, but you are already carrying some.<br />");
			}
			// if user is not in a room with gold and is not carrying any
			else {
				$(".room").append("You try to pick up some gold, but there is none to pick up.<br />");
			}
		}
		// if user presses "d"
		else if(e.which === 68) {
			// if user is carrying gold, he/she drops it
			if(localStorage["gold"] === "true") {
				$(".room").html("You drop the gold you are carrying.");
				localStorage["gold"] = "false";
				// subtract 1000 from user's score because he/she isn't carrying gold anymore
				localStorage["score"] -= 1000;
				// this room now has gold
				room[$(".room").attr("id")] = 4;
				// reload rooms
				loadRooms();
			}
			// if user is not carrying any gold, nothing happens
			else {
				$(".room").append("You try to drop your gold, but were not carrying any.");
			}
		}
		// call function that loads text based on the contents of the room
		$(".room").html(getRoom($(".room").attr("id")));
		// change score
		$("score").html(localStorage["score"]);
		// if the user presses "e"
		if(e.which === 69) {
			// if the user is on the start square
			if($(".room").attr("id") ==  "11") {
				$(".room").html("You have successfully made it out of the Wumpus World alive. Your final score is " + localStorage["score"] + ".");
				$(".prompt").html("Would you like to play again? Press Y or refresh the page for yes, navigate away from the page for no.");
				$(document).off("keydown.wumpusPrompt");
				$(document).on("keydown.wumpusPrompt", function(e) {
					if(e.which === 89) {
						window.location.reload();
					}
				});
			}
			// if the user is not on the start square
			else {
				$(".room").append("<br />You tried to exit the Wumpus cave, but were not in the start room.");
			}
		}
		// if user presses "a"
		else if(e.which === 65) {
			// attach another "keydown" event
			$(document).on("keydown.wumpusArrow", function(arrowDir) {
				// if user has not used the arrow yet
				if(localStorage["arrow"] === "true") {
					// if user presses left arrow after "a"
					if(arrowDir.which === 37) {
						// if the room to the left is on the game board & contains a wumpus
						if(room_object[$(".room") - 1] === /wumpus/) {
							$(".room").append("<br />You use your only arrow and shoot the wumpus! Be careful, though, as there may be another lurking about.");
						}
						// if the room to the left is on the game board & does not contain a wumpus
						else {
							$(".room").append("<br />You use your only arrow, but it hits nothing.");
						}
					}
					// if user presses up arrow after "a"
					else if(arrowDir.which === 38) {
						// if the room up one space is on the game board & contains a wumpus
						if(room_object[$(".room") + 10] === /wumpus/) {
							$(".room").append("<br />You use your only arrow and shoot the wumpus! Be careful, though, as there may be another lurking about.");
						}
						// if the room up one space is on the game board & does not contain a wumpus
						else {
							$(".room").append("<br />You use your only arrow, but it hits nothing.");
						}
					}
					// if user presses right arrow after "a"
					else if(arrowDir.which === 39) {
						// if the room to the right is on the game board & contains a wumpus
						if(room_object[$(".room") + 1] === /wumpus/) {
							$(".room").append("<br />You use your only arrow and shoot the wumpus! Be careful, though, as there may be another lurking about.");
						}
						// if the room to the right is on the game board & does not contain a wumpus
						else {
							$(".room").append("<br />You use your only arrow, but it hits nothing.");
						}
					}
					// if user presses down arrow after "a"
					else if(arrowDir.which === 40) {
						// if the room down one space is on the game board & contains a wumpus
						if(room_object[$(".room") - 10] === /wumpus/) {
							$(".room").append("<br />You use your only arrow and shoot the wumpus! Be careful, though, as there may be another lurking about.");
						}
						// if the room down one space is on the game board & does not contain a wumpus
						else {
							$(".room").append("<br />You use your only arrow, but it hits nothing.");
						}
					}
					// user loses 10 points because he/she used the arrow
					localStorage["arrow"] = "false";
					localStorage["score"] -= 10;
				}
				// if user tries to use a 2nd arrow
				else if(localStorage["arrow"] === "false") {
					$(".room").append("<br />You attempt to use an arrow, but you already used your only one.");
				}
				$(document).off("keydown.wumpusArrow");
			});
		}
		// if user presses "c"
		else if(e.which === 67) {
			// the computer moves the adventurer based on heuristics
			autoMove($(".room").attr("id"), 1);
		}
		else if(e.which === 80) {
			autoMove($(".room").attr("id"), "a");
		}
		if(localStorage["alive"] === "false") {
			$(".room").html("You have died. Your final score is " + localStorage["score"] + ".");
			$(".prompt").html("Would you like to play again? Press Y or refresh the page for yes, navigate away from the page for no.");
			$(document).off("keydown.wumpusPrompt");
			$(document).on("keydown.wumpusPrompt", function(e) {
				if(e.which === 89) {
					window.location.reload();
				}
			});
		}
	});

	// get object for this room
	function getRoom(number) {
		// if room is on Wumpus game board
		if(room[number] !== undefined) {
			// tell adventurer where on the game board he is
			roomText = "You are in the room " + number % 10 + " from left, " + Math.floor(number / 10) + " from bottom.<br />";
			// get content of this room
			number_object_array = room_object[number].split(" ");
			// for each object do these things
			$.each(number_object_array, function(index, number_object) {
				if(number_object == "pit") {
					roomText += "You fall into a pit and die.<br />";
					localStorage["alive"] = "false";
					// remove 1000 points from user's score for dying
					localStorage["score"] -= 1000;
				}
				else if(number_object == "wumpus") {
					roomText += "You are eaten by a wumpus.<br />";
					localStorage["alive"] = "false";
					// remove 1000 points from user's score for dying
					localStorage["score"] -= 1000;
				}
				else if(number_object == "gold") {
					roomText += "You discover some gold.<br />";
				}
				else if(number_object == "breeze") {
					roomText += "You feel a breeze. There is a pit in an adjacent room.<br />";
				}
				else if(number_object == "stink") {
					roomText += "You smell something stinky. There is a wumpus in an adjacent room.<br />";
				}
				else if(number_object == "glitter") {
					roomText += "You notice a glitter. There is gold in an adjacent room.<br />";
				}
				else if(number_object == "clear") {
					roomText += "The room is clear of obstacles.<br />";
				}
				else {
					roomText += "There was an error.<br />";
				}
			});
			currRoom = number_object_array;
			agent_rooms[number] = currRoom;
			return roomText;
		}
	}

	function autoMove(number, steps) {
		known = agent_rooms;
		unknown = {};
		reachable = {};
		unreachable = {};
		$.each(known, function(index, content) {
			index = Number(index);
			if(room[index - 1] !== undefined) {
				if(content.length === 1 && content[0] === "clear") {
					unknown[index - 1] = "clear";
					reachable[index - 1] = unknown[index - 1];
				}
				else if(unknown[index - 1] !== "clear" && known[index - 1] === undefined) {
					if(unknown[index - 1] === undefined) {
						unknown[index - 1] = [];
					}
					$.each(content, function(ind, object) {
						if(object === "glitter") {
							unknown[index - 1][unknown[index - 1].length] = "gold";
							reachable[index - 1] = unknown[index - 1];
							unknown[index - 1][unknown[index - 1].length] = "clear";
							reachable[index - 1] = unknown[index - 1];
						}
						else if(object === "breeze") {
							unknown[index - 1][unknown[index - 1].length] = "pit";
							reachable[index - 1] = unknown[index - 1];
							unknown[index - 1][unknown[index - 1].length] = "clear";
							reachable[index - 1] = unknown[index - 1];
						}
						else if(object === "stink") {
							unknown[index - 1][unknown[index - 1].length] = "wumpus";
							reachable[index - 1] = unknown[index - 1];
							unknown[index - 1][unknown[index - 1].length] = "clear";
							reachable[index - 1] = unknown[index - 1];
						}
						else if(object === "clear") {
							unknown[index - 1][unknown[index - 1].length] = "clear";
							reachable[index - 1] = unknown[index - 1];
						}
					});
				}
			}
			if(room[index - 10] !== undefined) {
				if(content.length === 1 && content[0] === "clear") {
					unknown[index - 10] = "clear";
					reachable[index - 10] = unknown[index - 10];
				}
				else if(unknown[index - 10] !== "clear" && known[index - 10] === undefined) {
					if(unknown[index - 10] === undefined) {
						unknown[index - 10] = [];
					}
					$.each(content, function(ind, object) {
						if(object === "glitter") {
							unknown[index - 10][unknown[index - 10].length] = "gold";
							reachable[index - 10] = unknown[index - 10];
							unknown[index - 10][unknown[index - 10].length] = "clear";
							reachable[index - 10] = unknown[index - 10];
						}
						else if(object === "breeze") {
							unknown[index - 10][unknown[index - 10].length] = "pit";
							reachable[index - 10] = unknown[index - 10];
							unknown[index - 10][unknown[index - 10].length] = "clear";
							reachable[index - 10] = unknown[index - 10];
						}
						else if(object === "stink") {
							unknown[index - 10][unknown[index - 10].length] = "wumpus";
							reachable[index - 10] = unknown[index - 10];
							unknown[index - 10][unknown[index - 10].length] = "clear";
							reachable[index - 10] = unknown[index - 10];
						}
						else if(object === "clear") {
							unknown[index - 10][unknown[index - 10].length] = "clear";
							reachable[index - 10] = unknown[index - 10];
						}
					});
				}
			}
			if(room[index + 1] !== undefined) {
				if(content.length === 1 && content[0] === "clear") {
					unknown[index + 1] = "clear";
					reachable[index + 1] = unknown[index + 1];
				}
				else if(unknown[index + 1] !== "clear" && known[index + 1] === undefined) {
					if(unknown[index + 1] === undefined) {
						unknown[index + 1] = [];
					}
					$.each(content, function(ind, object) {
						if(object === "glitter") {
							unknown[index + 1][unknown[index + 1].length] = "gold";
							reachable[index + 1] = unknown[index + 1];
							unknown[index + 1][unknown[index + 1].length] = "clear";
							reachable[index + 1] = unknown[index + 1];
						}
						else if(object === "breeze") {
							unknown[index + 1][unknown[index + 1].length] = "pit";
							reachable[index + 1] = unknown[index + 1];
							unknown[index + 1][unknown[index + 1].length] = "clear";
							reachable[index + 1] = unknown[index + 1];
						}
						else if(object === "stink") {
							unknown[index + 1][unknown[index + 1].length] = "wumpus";
							reachable[index + 1] = unknown[index + 1];
							unknown[index + 1][unknown[index + 1].length] = "clear";
							reachable[index + 1] = unknown[index + 1];
						}
						else if(object === "clear") {
							unknown[index + 1][unknown[index + 1].length] = "clear";
							reachable[index + 1] = unknown[index + 1];
						}
					});
				}
			}
			if(room[index + 10] !== undefined) {
				if(content.length === 1 && content[0] === "clear") {
					unknown[index + 10] = "clear";
					reachable[index + 10] = unknown[index + 10];
				}
				else if(unknown[index + 10] !== "clear" && known[index + 10] === undefined) {
					if(unknown[index  + 10] === undefined) {
						unknown[index + 10] = [];
					}
					$.each(content, function(ind, object) {
						if(object === "glitter") {
							unknown[index + 10][unknown[index + 10].length] = "gold";
							reachable[index + 10] = unknown[index + 10];
							unknown[index + 10][unknown[index + 10].length] = "clear";
							reachable[index + 10] = unknown[index + 10];
						}
						else if(object === "breeze") {
							unknown[index + 10][unknown[index + 10].length] = "pit";
							reachable[index + 10] = unknown[index + 10];
							unknown[index + 10][unknown[index + 10].length] = "clear";
							reachable[index + 10] = unknown[index + 10];
						}
						else if(object === "stink") {
							unknown[index + 10][unknown[index + 10].length] = "wumpus";
							reachable[index + 10] = unknown[index + 10];
							unknown[index + 10][unknown[index + 10].length] = "clear";
							reachable[index + 10] = unknown[index + 10];
						}
						else if(object === "clear") {
							unknown[index + 10][unknown[index + 10].length] = "clear";
							reachable[index + 10] = unknown[index + 10];
						}
					});
				}
			}
			$.each(unknown, function(index, content) {
				if(content === "clear" || content === "pit" || content === "wumpus" || content === "gold") {
					known[index] = content;
					if(reachable[index] === undefined) {
						unreachable[index] = unknown[index];
					}
				}
			});
		});
	}

});