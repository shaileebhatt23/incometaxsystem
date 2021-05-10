<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$total = 0;
		$income = $_POST['income'];
		$total = $total+0;
		$income = $income - 250000;
		if($income>250000){
			$total = $total+(250000 * (0.05));
			$income = $income - 250000;
		}
		else{
			$total = $total+($income * (0.05));
		}
		
		if($income>250000){
			$total = $total+(250000 * (0.2));
			$income = $income - 250000;
		}
		else{
			$total = $total+($income * (0.2));
		}
		
		if($income>250000){
			$total = $total+(250000 * (0.3));
			$income = $income - 250000;
		}
		else{
			$total = $total+($income * (0.3));
		}
		
		if($income>250000){
			$total = $total+(250000 * (0.35));
			$income = $income - 250000;
		}
		else{
			$total = $total+($income * (0.35));
		}

		echo $total;
	}	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-image: linear-gradient(rgba(0,0,0,0.35),rgba(0,0,0,0.35)),url(tax.JPG);">
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		<h3>Income:</h3><input style="font-weight: bold" type='text' name='income'><br><br>
		<input style="font-weight: bold" type="submit" value="Submit">
	</form>
		
</body>
</html>