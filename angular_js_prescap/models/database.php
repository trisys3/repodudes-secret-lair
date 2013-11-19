<?php

public class Database {
	public function main() {

	}
	public function get_all_users() {
		$query = mysqli_query("SELECT * FROM Users");
		$result = mysqli_fetch_array($query);
		return $result;
	}
	public function get_user_by_id($id) {
		$query = mysqli_query("SELECT * FROM Users WHERE `User ID` = $id")
		$result = mysqli_fetch_array($query);
		return $result;
	}
	public function get_user_by_name($name) {
		$query = mysqli_query("SELECT * FROM Users WHERE `User ID` = $id")
		$result = mysqli_fetch_array($query);
		return $result;
	}
	public function auth_user($id, $pw) {
		$query = mysqli_query("SELECT * FROM Users WHERE `User ID` = $id AND `Encrypted Password` = " . hash_pw($pw));
		$result = (bool)mysqli_fetch_array($query);
		return $result;
	}
}