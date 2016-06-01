<!DOCTYPE>
<html>
<head>
	<style type = "text/css">
	</style>
</head>
<body>
<table border="1" style = "width: 1100px; height: 800px; margin: 0 auto">
	<tr>
		<td style = "width: 800px; height: 100px">
		<div style = "text-align: center">
		<img src = "loginimg/love.jpg" height="80" width="150" alt="love">
		</div>
		</td>

		<td style = "width: 300px; height: 100px">
		<form action="login_proc.php" method="GET">
		<table border="1" style = "margin: 0 auto">
			<tr>
				<td>
					<P>아이디</P>
				</td>
				<td>
					<input type = 'text' name='username' />
				</td>
			</tr>
			<tr>
				<td>
					<p>비밀번호</p>
				</td>
				<td>
					<input type = 'password' name='password' />
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td>
				<input type ='submit' value = '로그인하기'/>
				</td>
			</tr>
		</table>
		</form>
		</td>

	</tr>

	<tr>
		<td>
		</td>

		<td>
		<form name="join" method="GET" action="membersave.php">
		<table border="1" style = "margin: 0 auto">
			<tr>
				<td>
					<input type="text" name="newid" placeholder = "아이디" style = "width: 150px; height: 40px">
				</td>
				<td>
					<input type="password" name="newpwd" placeholder = "비밀번호" style = "width: 150px; height: 40px">
				</td>
			</tr>

			<tr>
				<td colspan=2>
					<input type="text" name="mail" placeholder = "e-mail" style = "width: 300px; height: 40px">
				</td>
			</tr>

			<tr>
				<td colspan=2>
					<input type="text" name="mail" placeholder = "e-mail" style = "width: 300px; height: 40px">
				</td>
			</tr>

			<tr>
				<td colspan=2>
					<input type="text" name="phonenum" placeholder = "000-0000-0000" style = "width: 300px; height: 40px">
				</td>
			</tr>

			<tr>
				<td colspan=2>
					<input type=submit value="가입하기" style = "width: 100px; height: 40px">
				</td>
			</tr>
		</table>
		</form>
		</td>
	</tr>
</table>
</body>

</html>