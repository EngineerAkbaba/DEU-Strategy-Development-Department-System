<?php 
	if( isset($_POST["nsname"]) && isset($_POST["password"]) ) 
	{ 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "infodb";
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		if ($conn->connect_error) {
			die("Bağlantı hatası: " . $conn->connect_error);
		}
		
		$conn->set_charset("utf8");
		
		$query = "select category,Username from users where Username = '".$_POST["nsname"]."' and password = '".$_POST["password"]."'";
		$result = $conn->query($query);
		
		$row = $result->fetch_assoc();
		
		if($row['category'] == null)
		{
			session_start();
			$_SESSION['kullanici'] = $row['Username'];
			header("location:ana.php");
		}
		else
		{
			session_start();
			$_SESSION['kullanici'] = $row['Username'];
			header("location: admin.php");
		}
	}
	else
	{
		$mesaj = "";
	} 
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <title>PHP DB-2</title>
		<style type="text/css">
			#dvMain {
			  width: 400px;
			  height:320px;
			  margin:auto;
			  padding: 15px;
			  background-color:#743F11;
			  color:#fff;
			}
			#username
			{
			  width:248px;
			  height:38px;
			  border-bottom:2px solid #fff;
			  margin:20px 0;
			}
			#password
			{
			  width:248px;
			  height:38px;
			  border-bottom:2px solid #fff;
			}
			#newuser
			{
			  width:100px;
              height:40px;
              float:right;
              line-height:40px;
              text-align:center;
              color:#000000;
              border-bottom:1px solid #fff;
              margin-top:15px;
			}
			#login
			{
			  width:100px;
              height:40px;
              float:right;
              line-height:40px;
              text-align:center;
              color:#000000;
              border-bottom:1px solid #fff;
			  margin-top:15px;

			}
			body
			{
			   background:url(c.jpg) no-repeat center center fixed;
               background-size:cover;
               background-attachment: fixed;
               font-family:'Trebuchet MS',Arial,'Comic Sans MS';
			}
		</style>
		<script>
			function checkInputs() {
				var ad = document.getElementById("username").value.trim();
				if(ad == "") {
					alert("İsim boş bırakılamaz!");
					document.getElementById("username").focus();
					return false;
				}
				
				return true;
			}
		</script>
	</head>
	<body>
		<div id="dvMain">
			<div style="border: 2px solid #eee; padding: 6px;">
				<form action="""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" onsubmit="return checkInputs();">
					<table>
						<tbody>
						
							<tr>
								<td>UserName</td>
								<td>:</td>
								<td><input type="text" id="username" name="nsname" /></td>
							</tr>
							<tr>
								<td>Password</td>
								<td>:</td>
								<td><input type="password" id="password"name="password" required /></td>
							</tr>
							<tr>
								<td colspan="3"><input type="submit" id="login" name="login" value="LOGIN" /></td>
							</tr>
                     		<tr>
								<td colspan="3"><input type="submit" id="newuser" name="newuser" value="SAVE" /></td>
							</tr>
						</tbody>
					</table>
				</form>
				<?php
					function safely($data) {
						$data = trim($data);
						$data = stripslashes($data);
						$data = htmlspecialchars($data);
						return $data;
					}
					
					$username = $password = "";
					if(isset($_POST["newuser"]))
					{
					  if(isset($_POST["nsname"]) && isset($_POST["password"])) 
					  {
						$username = safely($_POST["nsname"]);
						$password = safely($_POST["password"]);
						
						$sql = "INSERT INTO users (Username, password)
						VALUES ('$username', '$password')";
						
						if ($conn->query($sql) === TRUE) {
							$last_id = $conn->insert_id;
							echo "Yeni kayıt " . $last_id . " no'lu ID ile eklendi";
						} 
						else {
							echo "Hata: " . $sql . "<br>" . $conn->error;
						}
					  }
					}

				?>
				<br>
			</div>			
			<br><br>
		</div>
	</body>
</html>


