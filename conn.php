<?php
define ( ' db_user ' , ' root ' ) ; 
define ( ' db_password ' , null ) ; 
define ( ' db_host ' , ' localhost ' ) ; 
define ( ' db_name ' , ' registration ' ) ; 

$conn = mysqli_connect ( db_host , db_user , db_password , db_name ) ; 

if ( mysqli_connect_errno ( ) ) 
{ 
    echo " Failed to connect to MySQL : ". mysqli_connect_error ( ) ; 
} 
?>