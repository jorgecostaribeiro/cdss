<?php session_start();

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$password = $_POST['c_password'];
		$username = $_POST['c_username'];
		$remember = $_POST['c_remember'];
		
		include("parte2.html");
		
		
	

        
  mysql_connect("127.0.0.1", "jorgefil_ligadir", "cdssmsi20182019") or die(mysql_error());
	mysql_select_db("jorgefil_cdss") or die(mysql_error());
	
	//jorgefil_ligadir é um user com privilégios apenas para SELECT UPDATE E INSERT 
		
		
		$cliquery = mysql_query("SELECT * FROM users WHERE username = '$username'
	" ) or die(mysql_error()); 
		 
				 
				 while ($row = mysql_fetch_array($cliquery)){
				
					
					$nomebduser = $row['username'];
					$passworddb = $row['password'];
					$salt = $row['salt'];
					$_SESSION['autor'] = $nomebduser. " (Correct)";
					
				 }
			

		
			$passhas = $salt.$password."ddss_peper";
				 
			$passdada = hash("sha256", $passhas);
				 
				if ($passdada == $passworddb){
					
					include("part2.php");
					
					
				} else {
					$erro = "<br>Verifique dados de acesso";
					include ("part1.php");
					
					
				}
		
		
		
	}

	
	
	


?>

