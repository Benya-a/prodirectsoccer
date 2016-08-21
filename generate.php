<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$brand = $_POST['brand'];
	$size = trim($_POST['size']) - 1;
}

if (empty($brand) || empty($size)) {
	header('Location: index.php');
	exit;
}

$link = "http://www.prodirectsoccer.com/lists/" . $brand . "-football-boots.aspx?listname=" . $brand . "-football-boots&cur=usd&pp=300&o=lth&s=" . $size;

?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Prodirectsoccer.com</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="wrapper">
		<h2>Your link has been generated</h2>
		<a href="<?php echo $link; ?>" target="_blank">Visit a store</a>
	</div>
</body>
</html>