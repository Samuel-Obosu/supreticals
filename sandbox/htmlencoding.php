<!DOCTYPE html>
<html>
<head>
	<title>HTML encoding</title>
</head>
<body>
	<?php $linktext = "<Click> & learn more"; ?>

	<a href="#"><?php echo htmlspecialchars($linktext); ?></a>
	<br>
	&trade;
	&eacute;
	&rdquo;
</body>
</html>