<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login </title>
	<link rel="stylesheet" href="email.css">

</head>
<body>
	<div class="container">
		<div class="email-box">
			<div class="box-header">
				<h2>Email</h2>
			</div>
			<form action="a11.php" method="POST">
            <label for="to_email">Sender Email</label>
			<br>
			<input type="email" name="to" required>
			<br>
			<label for="Subject">Subject</label>
			<br>
			<input type="text" name="subject">
			<br>
			<label for="Message">Message</label>
			<br>
			<input type="textarea" name="message">
			<button type="submit" name="submit">Send Mail</button>
            </form>
		</div>
	</div>
</body>

</html>