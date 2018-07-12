<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_job = "6semproject.database.windows.net";
$database_job = "job";
$username_job = "dhairya";
$password_job = "";
$job = mysql_pconnect($hostname_job, $username_job, $password_job) or trigger_error(mysql_error(),E_USER_ERROR);
?>
