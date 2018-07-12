<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_job = "project6sem-mysqldbserver.mysql.database.azure.com";
$database_job = "job";
$username_job = "dhairya@52.165.163.223";
$password_job = "";
$job = mysql_pconnect($hostname_job, $username_job, $password_job) or trigger_error(mysql_error(),E_USER_ERROR);
?>
