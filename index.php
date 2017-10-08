<?
echo ("
<table border=0 width=1400 height=300>

<tr><td align=center><font size=15>Login</font></td><tr>
</table>
");
echo ("
<table border=0 width=500 align=center>

<form action=view.php method=post>
<tr> <td width=150 align=right>name</td>
<td width=150> <input type=text name=name size=15></td>
<td width=200 align=center> <a href=sign_up.php?>sign up</a></td></tr>

<tr> <td width=150 align=right>password</td>
<td width=150> <input type=text name=password size=15></td></tr>
<td width=200 align=center> <input type=submit value=login> </td>


</table>
</form>
");
?>