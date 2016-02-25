<!DOCTYPE html>
<html>
<head>
	<title>{{ $object->title }}</title>
</head>
<body>
	<h1>{{ $object->title }}</h1>
	<p><?php echo $object->description; ?></p>
	<pre>
		<?php echo $object->code; ?>
	</pre>
	<p>Question Date: <?php echo $object->created_at; ?></p>
</body>
</html>