<?php

		$title_num_words = $_REQUEST["assesstitles"];
		include("account.php");

		$obj_titles = Array();
		foreach($title_num_words as $title_num_word => $value) {
			$obj_title_query = "SELECT `Short Name` FROM `objectives` WHERE `Objective ID` = " . $title_num_word;
			$obj_titles[] = $njhitec_db->query($obj_title_query)->fetch_row();
		}

		echo json_encode($obj_titles);

?>