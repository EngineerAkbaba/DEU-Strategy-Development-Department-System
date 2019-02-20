<?php 
	require_once("/DataLayer/database.php");
	require_once("user.php");
	
	class UserManager {
		
		public static function getAllUsers () {
			$db = new DB();
			$result = $db->getDataTable("select EID, Type, Capacity,Number from egitimalanlari order by EID");
			
			$allUsers = array();
			
			while($row = $result->fetch_assoc()) {
				$userObj = new User($row["EID"], $row["Type"], $row["Capacity"], $row["Number"]);
				array_push($allUsers, $userObj);
			}
			
			return $allUsers;
		}
		
		public static function insertNewUser($Type, $Capacity,$Number) {
			$db = new DB();
			$success = $db->executeQuery("INSERT INTO egitimalanlari(EID, Type, Capacity,Number) VALUES (NULL, '$Type', '$Capacity','$Number')");
			return $success;
		}
		
	}
?>