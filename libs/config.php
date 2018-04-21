<?php
	global $conn;
	function connect_db()
	{
		global $conn;
		if(!$conn) {
			$conn = mysqli_connect("localhost", "root", "", "do_an") or die("Không thể kết nối database!");
			mysqli_set_charset($conn, "utf8");
		}
	}