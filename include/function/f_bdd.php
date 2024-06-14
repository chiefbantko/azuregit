<?php

function connexionBDD()
{
	try
	{
		$options = array(
			DO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::MYSQL_ATTR_SSL_CA => 'DigiCertGlobalRootCA.crt.pem'
		);
		$bdd = new PDO('mysql:host=bantko-bdd-gest.mysql.database.azure.com;port=3306;dbname=bdd_geststages;charset=utf8', 'usergs', 'mdpGS', array(P), $options);
		return $bdd;
	}
	catch(Exception $e)
	{
		$pdo_error = $e->getMessage();
                return false;
	}
    
}

?>
