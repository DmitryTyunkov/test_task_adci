<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>Тестовое задание 1</title>
	</head>
	<body>
		<?php
			function isPrime($n)
			{
				if ($n==1)
					return false;
				for ($i=2; $i*$i<=$n; $i++)
				{
					if ($n%$i==0)
						return false;
				}
				return true;
			}
			$j=0;
			for ($i=1; $i<=100; $i++)
			{
				if(isPrime($i))
				{
					$j++;
					if($j>1)
						echo ", ";
					echo $i;
				}
			}
		?>
		<br><br>
		<a href="../">На главную</a>
	</body>
</html>