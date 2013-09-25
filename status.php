<?php
//status.php?id=USER_ID
include('config.php');
$conn = mysql_connect(DB_HOST, DB_USER, DB_PASS);
$db = mysql_select_db(DATABASE);
$id = $_GET['id'];
$ref = mysql_query("SELECT * FROM referrals WHERE sendinguserid='$id'") or die(mysql_error());
echo "You have referred ".mysql_num_rows($ref)." users.";