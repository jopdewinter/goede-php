	<?php

		date_default_timezone_set("Europe/Amsterdam");
		$t = date("h:i");
		$message;
		if ($t < "06:00") {
			$message = "Goedenacht!";
			$imageURL = "backgrounds/night.png";
		} elseif ($t < "12:00") {
			$message = "Goedemorgen!";
			$imageURL = "backgrounds/morning.png";
		} elseif ($t < "18:00") {
			$message = "Goedemiddag!";
			$imageURL = "backgrounds/afternoon.png";
		} else {
			$message = "Goedeavond!";
			$imageURL = "backgrounds/evening.png";
		}
		$message .= "<br> Het is nu " . $t;

	?>

<!DOCTYPE html>
<html>
<head>
	<title>Tijd</title>
	<link href="https://fonts.googleapis.com/css?family=Merienda:700" rel="stylesheet">
	<link rel="stylesheet" href="./css/style.css">
</head>
<body style="background-image: url(<?php echo $imageURL; ?>); background-size: cover;">

	<?php echo "<p>" . $message . "</p>"; ?>

</body>
</html>