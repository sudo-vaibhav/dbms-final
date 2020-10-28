<?php

$servername="localhost";
$dBUsername="root";
$dBPassword="";
//$dBName="criminal_system";
$dBName="criminal_system_db";

$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
//if the connection doesnt work:
if(!$conn){
    die("Connection failed:".mysqli_connect_error());
    //closes the connection and prints the error
}

/*

$conn=mysqli_init(); 
mysqli_ssl_set($conn, NULL, NULL, {ca-cert filename}, NULL, NULL);
mysqli_real_connect($con, "dbms-sql.mysql.database.azure.com", "mysql@dbms-sql", "Password@123", "criminal_system", 3306);
if(!$conn){
    die("Connection failed:".mysqli_connect_error());
    //closes the connection and prints the error
}
//password: Password@123
//username: mysql@dbms-sql

*/