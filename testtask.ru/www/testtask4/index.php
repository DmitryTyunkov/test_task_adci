<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>Тестовое задание 4</title>
	</head>
	<body>
		<?php
			$input=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','0','1','2','3','4','5','6','7','8','9');
			function isEqual($word)
			{
				if (md5($word)=='23586e8a62e5ee0d6f5014d849601c0c')
				{
					echo "<table border=\"1\" border-style=\"solid\" bordercolor=\"#000000\" cellpadding=\"5\" cellspacing=\"0\">";
					echo "<tr><td width=300px>23586e8a62e5ee0d6f5014d849601c0c</td><td width=50px>".$word."</td></tr>";
				}
				if (md5($word)=='e7806b130b429fc9b5890608a2c60675')
				{
					echo "<table border=\"1\" border-style=\"solid\" bordercolor=\"#000000\" cellpadding=\"5\" cellspacing=\"0\">";
					echo "<tr><td width=300px>e7806b130b429fc9b5890608a2c60675</td><td width=50px>".$word."</td></tr>";
				}
				if (md5($word)=='713ff7abce2ef30fc4f532bb68e92a1b')
				{
					echo "<table border=\"1\" border-style=\"solid\" bordercolor=\"#000000\" cellpadding=\"5\" cellspacing=\"0\">";
					echo "<tr><td width=300px>713ff7abce2ef30fc4f532bb68e92a1b</td><td width=50px>".$word."</td></tr>";
				}
				if (md5($word)=='67dd64c651270524961da7a6686008ba')
				{
					echo "<table border=\"1\" border-style=\"solid\" bordercolor=\"#000000\" cellpadding=\"5\" cellspacing=\"0\">";
					echo "<tr><td width=300px>67dd64c651270524961da7a6686008ba</td><td width=50px>".$word."</td></tr>";
				}
				echo "</table>";
			}
			foreach ($input as $val1)
			{
				$word=$val1;
				isEqual($word);
			}
			foreach ($input as $val1)
				foreach ($input as $val2)
				{
					$word=$val1.$val2;
					isEqual($word);
				}
			foreach ($input as $val1)
				foreach ($input as $val2)
					foreach ($input as $val3)
					{
						$word=$val1.$val2.$val3;
						isEqual($word);
					}
			foreach ($input as $val1)
				foreach ($input as $val2)
					foreach ($input as $val3)
						foreach ($input as $val4)
						{
							$word=$val1.$val2.$val3.$val4;
							isEqual($word);
						}
		?>
		<br>
		<a href="../">На главную</a>
	</body>
</html>