$query=mysql_query("selecct * from user where name='$user'")
$row=mysql_fetch_array($query);