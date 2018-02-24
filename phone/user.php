<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		
	<form action="user.php" method="POST">
		<table>
			<tr>
				<td><label>Password</label></td><td><input type="text" name="upass"></td>
			</tr>
			<tr>
				<td><button name="usubmit">Submit</button></td>
			</tr>
		</table>
	</form>
	<?php
				$user1 = "root";
				$pass = "1234";
				$server = "localhost";
				$con = mysqli_connect($server,$user1,$pass);
				
		//charith start
				
		if(isset($_POST['isubmit'])){
				function genarete_password (){
					$rand_vale=rand(1000,2000);
					return $rand_vale;
				}
				function cheack_random_value ($value){
					
					return $value;
					
				}

				function send_pass_to_user(){
					for(;;) {
						$num= cheack_random_value(genarete_password());
						if($num != 1){
							//echo "pass sent to the user<br>";
							//echo "data base must update!!";
							return $num;
							break;
						}
					}

				}
				$r1=mysqli_select_db($con,"Db_Mobile");
				if($r1){
				
				}else{
					$query1 = "CREATE DATABASE Db_Mobile";
					$result1 = mysqli_query($con,$query1);
					mysqli_select_db($con,"Db_Mobile");
					$query = "CREATE TABLE `user`(id int NOT NULL AUTO_INCREMENT,uname VARCHAR(100),email VARCHAR(100),pass VARCHAR(100), PRIMARY KEY (id))";
					$result = mysqli_query($con,$query);	
				}
			//charith end
				$email = $_POST['uemail']; 
				$qu = $_POST['uname'];
				$pass = send_pass_to_user();
				$q = "INSERT INTO `user`(`uname`,`email`,`pass`) VALUES('$qu','$email','$pass')";
				$r = mysqli_query($con,$q);
		}
		if(isset($_POST['usubmit'])){
			mysqli_select_db($con,"Db_Mobile");
			$pa1 = $_POST['upass'];
			$qqq = "SELECT * FROM `user` order by id desc LIMIT 1";
			$r12 = mysqli_query($con,$qqq);
			while($row = mysqli_fetch_assoc($r12)){
				$r = $row['pass'];
				if($r == $pa1){
					echo "Success";
				}else{
					$q3 = "DELETE FROM `user` order by id desc LIMIT 1";
					$r = mysqli_query($con,$q3);
				}
			}
			
		}
	?>
</body>
</html>