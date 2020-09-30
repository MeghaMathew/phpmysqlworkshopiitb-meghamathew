<!DOCTYPE html>
<html>
<head>
	<title>Question 6</title>
</head>
<body>
	<?php 

	$array1 	= array(array(2,1),array(3,1));
	$array2 	= array(array(2,2),array(2,1));
	$sum 		= array(array(1,1),array(1,1));
	for ($i=0;$i<=1;$i++){
		for ($j=0;$j<=1;$j++){

		$sum[$i][$j]	=	$array1[$i][$j] + $array2[$i][$j];
}
}

	print_r($sum);

	?>
</body>
</html>