<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="utf-8">
    <meta name="description" content="My first webpage, with JavaScript">
    <meta name="keywords" content="Immaculata, ICD2O">
    <meta name="author" content="Isaaq simon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon_io (2)/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon_io (2)/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon_io (2)/favicon-16x16.png">
    <link rel="manifest" href="./favicon_io (2)/site.webmanifest">
    <link rel="stylesheet" href="./css/style.css">
    <title>Area & Perimeter of Rectangle in PHP</title>
	</head>
	<body>
    <h1><?php echo 'Area & Perimeter of a Rectangle'; ?></h1>
		<?php 
			$length = 25;  
		 	$width = 44; 
			echo "<p>Length = $length cm<br>Width = $width cm</p>"; ?>		
		<?php 
		 echo "<p>The area of a rectangle with dimensions $length cm x $width cm = " . ($length * $width) . "cm<sup>2</sup></p>";   
		 echo "<p>The perimeter of a rectangle with dimensions 2 x $length cm + 2 x $width cm = " . (2 * $length + 2 * $width) . "cm</p>";  
		  ?>  
	</body>
</html>