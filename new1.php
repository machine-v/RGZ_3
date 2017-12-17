<html>
	<head>
		<title>Високосный год</title>
	</head>
	<body>
		<h1>Узнать последний високосный год</h1>
		<?php
		$today = getdate();
		if (isset($_GET['d'])) {
			$d = $_GET['d'];
		} else {
			$d = ' ';
		}
		if (isset($_GET['m'])) {
			$m = $_GET['m'];
		} else {
			$m = '';
		}
		if (isset($_GET['y'])) {
			$y = $_GET['y'];
		} else {
			$y = '';
		}
		if (is_numeric($d) && is_numeric($m) && is_numeric($y)) {
			$b = $y - 1;
			While (date('L',mktime(0, 0, 0, 7, 1, $b)) < 1) {
				$b = $b - 1;
			}
			echo "Последний високосный год был в $b году.";
		} else if ($d == '' || $m == '' || $y == ''){
			$d = $today['mday'];
			$m = $today['mon'];
			$y = $today['year'];
			$b = $y;
			While (date('L',mktime(0, 0, 0, 7, 1, $b)) < 1) {
				$b = $b - 1;
			}
			echo "Последний високосный год был в $b году.";
		} else if ($d != '' || $m != '' || $y != ''){
			echo 'В значении не могут присутствовать не числовые значения';
		} 
		?>
		<form method="GET">
			<p>День <input type="text" name="d" value="<?= htmlspecialchars($d)?>"></p>
			<p>Месяц <input type="text" name="m" value="<?= htmlspecialchars($m)?>"></p>
			<p>Год <input type="text" name="y" value="<?= htmlspecialchars($y);?>"></p>
			<input type="submit" value="OK">
		</form>
		<hr/>
	</body>
</html>