<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="emailstyle.css" media="screen">
</head>
<body>
		<div class="email-box">
			<div class="box-header">
				<h2>Email</h2>
			</div>
			<form action="a11.php" method="POST">
			<div class="row">
				<div class="col-sm-5">
					<label for="to_email">Receiver's Email</label>
				</div>
				<div class="col-sm-7">
					 <input type="email" name="to" value="">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-5">
					<label for="to_email">BCC</label>
				</div>
				<div class="col-sm-7">
					 <input type="text" name="bcc"  placeholder="Add space seperated Email">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-5">
					<label for="to_email">CC</label>
				</div>
				<div class="col-sm-7">
					 <input type="text" name="cc" placeholder="Add space seperated Email">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-5">
					<label for="Subject">Subject</label>
				</div>
				<div class="col-sm-7">
					<input type="text" name="subject">
					
				</div>
			</div>
			<div class="row">
				<div class="col-sm-5">
					 <label for="Message">Message</label>
				</div>
				<div class="col-sm-7">
					 <textarea rows="7" name="message"></textarea>
				</div>
			</div>	
			<button type="submit" name="submit">Send Mail</button>
            </form>
		</div>
</body>

</html>