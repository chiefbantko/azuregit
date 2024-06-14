<?php

function connexionBDD()
{
	try
	{
		$options = array(
			PDO::MYSQL_ATTR_SSL_CA => 'ssl/DigiCertGlobalRootG2.crt.pem'
		);
		$bdd = new PDO('mysql:host=servbd;port=3306;dbname=bdd_geststages;charset=utf8', 'usergs', 'mdpGS', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION), $options);
		return $bdd;
	}
	catch(Exception $e)
	{
		$pdo_error = $e->getMessage();
                return false;
	}
    
}

?>
