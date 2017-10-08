<?php
include "user.php";
$no= mysql_query("select count(*) from Userdb", $connect);
$select = "select * from usertable;";
$query = mysql_query( $select, $connect);
?>
<style type = "text/css">
	table{
		width: 100%;
		border-collapse: collapse;
	}
	th, tr{
		border: 1px solid #bcbcbc;
	}
</style>
<table width ="500" border ="1">
	<tr align=center>
	<th> <font size=5> name </font></th>
	<th> &nbsp;<font size=5> price </font></th>
	</tr>
<?php
while ($row = mysql_fetch_array($query))
{	 
	echo "
	<tr>
	<th>$row[name]</th>
	<th>$row[price]</th>
	</tr>";
}
?>
</table>
