<!DOCTYPE html>
<html>
<head>
	<title>First Page</title>
</head>
<body>

	<?php $linkname = "Second page"; ?>
	<?php $id=2;?>
	<a href="second.php?id=<?php echo $id; ?>"><?php echo $linkname; ?></a>

</body>
</html>