<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_job = "project6sem-mysqldbserver.mysql.database.azure.com:3306";
$database_job = "job";
$username_job = "dhairya@project6sem-mysqldbserver";
$password_job = "Pratyaksh@1442";
$job = mysql_pconnect($hostname_job, $username_job, $password_job) or trigger_error(mysql_error(),E_USER_ERROR);
?>
