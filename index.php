<!DOCTYPE HTML>
<html>
<head>
	<title>Prodirectsoccer.com</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="wrapper">
		<h2>Choose the brand and size</h2>
		<form action="generate.php" method="POST">
			<li>
				<label for="">Choose the brand</label>
				<select name="brand" id="">
					<option value="nike">Nike</option>
					<option value="adidas">Adidas</option>
				</select>
			</li>
			<li>
				<label for="size">Choose your size</label>
				<select name="size" id="">
					<option value="7">7</option>
					<option value="7.5">7.5</option>
					<option value="8">8</option>
					<option value="8.5">8.5</option>
					<option value="9">9</option>
					<option value="9.5">9.5</option>
					<option value="10">10</option>
					<option value="10.5">10.5</option>
					<option value="11">11</option>
					<option value="11.5">11.5</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
				</select>
			</li>
			<li>
				<input type="submit" value="Search">
			</li>
		</form>
	</div>
</body>
</html>