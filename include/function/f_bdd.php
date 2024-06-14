<?php

function connexionBDD()
{
	try
	{
		$options = array(
			PDO::MYSQL_ATTR_SSL_CA => 'ssl/DigiCertGlobalRootG2.crt.pem'
		);
		$bdd = new PDO('mysql:host=bantko-bdd-gest.mysql.database.azure.com', 'usergs', 'mdpGS', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION), $options);
		return $bdd;
	}
	catch(Exception $e)
	{
		$pdo_error = $e->getMessage();
                return false;
	}
    
}

?>
