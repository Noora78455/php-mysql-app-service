<?php

// Configuration for database connection

// $host       = getenv('DB_HOST');
// $username   = getenv('DB_USERNAME');
// $password   = getenv('DB_PASSWORD');
// $db_name     = getenv('DB_DATABASE');
// $sslcert    = "ssl/DigiCertGlobalRootCA.crt.pem";



$host       = 'databasefordemo.mysql.database.azure.com';
$username   = 'nourrad';
$password   = 'password';
$db_name     = 'sampledb';
$sslcert    = "ssl/DigiCertGlobalRootCA.crt.pem";
// etablissement de la connection 

$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, $sslcert, NULL, NULL);
mysqli_real_connect($conn, $host, $username, $password,
 $db_name, 3306, MYSQLI_CLIENT_SSL);
//if (mysqli_connect_errno($conn){
  //  die('failed to connect to MysqL: '.mysqli_connect_erro());
//}
// run la table produit
if (mysqli_query($conn,'CREATE TABLE Products (
 id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
 ProductName VARCHAR(50) NOT NULL, 
Price DOUBLE NOT NULL );' )){
printf("table created\n");
}
