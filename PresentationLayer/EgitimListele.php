<?php 
	require_once("/LogicLayer/UserManager.php");
	
	$errorMeesage = "";
	
	if(isset($_POST["Type"]) && isset($_POST["Capacity"]) && isset($_POST["Number"])) {
		$type = trim($_POST["Type"]);
		$capacity = trim($_POST["Capacity"]);
		$number =trim($_POST["Number"]);
		$errorMeesage = "";
		$result = UserManager::insertNewUser($type, $capacity,$number);
		if(!$result) {
			$errorMeesage = "Yeni ekleme kaydý baþarýsýz!";
		}
	}
?>
<!DOCTYPE html>
<html> 
	<head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <title>PHP :: 3 Tier Architecture</title>
		<link rel="stylesheet" type="text/css" href="style/site.css">
	</head>
	<body> 
		<div id="dvMain">
			<form method="POST" action="<?php $_PHP_SELF ?>">
				<table id="tblUsers">
					<tbody>
						<tr>
							<th>EID</th>
							<th>Type</th>
							<th>Capacity</th>
							<th>Number</th>
						</tr>
						<?php 
							$userList = UserManager::getAllUsers();
							
							for($i = 0; $i < count($userList); $i++) {
							?>
							<tr>
								<td><?php echo $userList[$i]->getID(); ?></td>
								<td><?php echo $userList[$i]->getType(); ?></td>
								<td><?php echo $userList[$i]->getCapacity(); ?></td>
								<td><?php echo $userList[$i]->getNumber() ; ?></td>
							</tr>
							<?php
							}
						?>
					</tbody>
				</table>
			</form>
		</div>
	</body> 
</html>
