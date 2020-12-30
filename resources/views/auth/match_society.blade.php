<!DOCTYPE html>
<html>
<head>
	<title>society</title>
</head>
<body>

	<h1>Match society</h1>

	<form method="POST" action="match_society">

		@csrf
		<label>Enter Valid Society Id</label>
		<input type="number" name="society_id">
		<input type="submit" name="submit">
		
	</form>

</body>
</html>