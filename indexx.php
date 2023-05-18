<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP888</title>
</head>
<body>
    <h1>Practicing super easy PHP codes </h1>
    <?php

    function addition($a, $b) {
	$sum=$a+$b;
	return $sum;
}
echo addition(4,3);

?>

<br>
<?php
function convert($minutes) {
	$minutes*=60;
	return $minutes;
}
echo convert(2);

?>
</body>
</html>
