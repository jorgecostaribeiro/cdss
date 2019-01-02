<?php session_start(); ?>

<?php



$messagsent = htmlspecialchars($_POST['c_text']);
$author = $_SESSION['autor'];


mysql_connect("127.0.0.1", "jorgefil_ligadir", "cdssmsi20182019") or die(mysql_error());
	mysql_select_db("jorgefil_cdss") or die(mysql_error());
	
	//jorgefil_ligadir é um user com privilégios apenas para SELECT UPDATE E INSERT 

//insert base de dados
				$query = mysql_query ("INSERT INTO messages

					(message, author)
						VALUES
					('$messagsent', '$author')

				") or die(mysql_error()); 



include('part2.php');

?>
	