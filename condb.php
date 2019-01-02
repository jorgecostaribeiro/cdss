
<?php
function db_connect() {

        
    static $connection;

      
    if(!isset($connection)) {
         
        $config = parse_ini_file('config.ini'); 
        $connection = mysqli_connect($config['sn'],$config['fw'],$config['pt'],$config['re']);
		
    }

       
    if($connection === false) {
           
        return mysqli_connect_error(); 
    }
    return $connection;
	
	
}


$connection = db_connect();

if ($connection->connect_error) {
    die("Erro: " . $connection->connect_error);
}
?> 