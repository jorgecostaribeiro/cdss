<?php session_start();

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$password = $_POST['v_password'];
		$username = $_POST['v_username'];
		$remember = $_POST['v_remember'];
	} else{
		$password = $_GET['v_password'];
		$usernamev = $_GET['v_username'];
		$remember = $_GET['v_remember'];
		
		$conn = new mysqli($server, $user, $pass, $db);
		
		

	
	mysql_connect("127.0.0.1", "jorgefil_longra", "12345") or die(mysql_error());
	mysql_select_db("jorgefil_cdss") or die(mysql_error());
	// jorgefil_longra é um utilizador com todos os privilégios
		
		
	$cliquery = mysql_query("SELECT * FROM users WHERE username = '$usernamev'
	" ) or die(mysql_error()); 
		 
				 
				 while ($row = mysql_fetch_array($cliquery)){
				
			
					$nomebduser = $row['username'];
					$passworddb = $row['password'];
					$salt = $row['salt'];
					$_SESSION['autor'] = $nomebduser. " (Vulnerable)";
					
				 }
		
		
				 
			$passhas = $salt.$password."ddss_peper";
				 
			$passdada = hash("sha256", $passhas);
				 
				if ($passdada == $passworddb){
					
					include("part2.php");
					
					
				} else {
					$errov = "<br>Verifique dados de acesso";
					include ("part1.php");
					
					
				}
		
	}

    

    


?>

