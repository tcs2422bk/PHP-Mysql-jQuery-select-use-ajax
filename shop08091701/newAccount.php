<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript" src="checkAccount.js"></script>

<h1>My Shop</h1>
<hr />
<h2>新增帳號</h2>
<a href='1member.php'>Back</a><br />
<form action='3addAccount.php'>
<table border='1' width='50%'>
		<tr>
			<th>Account</th>
			<td>
				<input id='account' type='text' name='account' onblur='checkAccount()' />
				<span id='mesg'></span>
			</td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input type='password' name='password' /></td>
		</tr>
		<tr>
			<th>Real Name</th>
			<td><input type='text' name='realname' /></td>
		</tr>		
		<tr>
			<th colspan='2'>
				<input type='submit' name='add' value='Add' />
			</th>
		</tr>

	







</table>
</form>