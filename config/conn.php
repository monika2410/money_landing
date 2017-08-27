<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// LOCAL
$db_server = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'ml_user';

    $conn = mysql_connect($db_server, $db_username, $db_password);
    //mysql_set_charset('utf8', $conn);
if (!$conn) {
     mysql_select_db($db_name,$conn);
}

$objDB = mysql_select_db('ml_user', $conn);
if (!$objDB) {
    die ('Can\'t use ml_user: ' . mysql_error());
}

  
 mysql_close($conn);