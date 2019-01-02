<?php session_start();

$author = $_SESSION['autor'];

		$messagsent = $_GET['v_text'];
		
		include("part2.php");

mysql_connect("127.0.0.1", "jorgefil_longra", "12345") or die(mysql_error());
	mysql_select_db("jorgefil_cdss") or die(mysql_error());
	// jorgefil_longra é um utilizador com todos os privilégios

// INSERT NA BASE DE DADOS
//insert base de dados
				$query = mysql_query ("INSERT INTO messages

					(message, author)
						VALUES
					('$messagsent', '$author')

				") or die(mysql_error()); 



?>