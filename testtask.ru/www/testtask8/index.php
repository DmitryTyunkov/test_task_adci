<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>Тестовое задание 8</title>
	</head>
	<body>
		<div style="width:100%; float: left;"><table>
			<tr><form name="selectionTables" action="" method="post">
				<td align="right"><label for="num">Количество паролей:</label></td>
				<td><input name="nums" id="num" type="number"></td>
				<td><input type="submit" name="select" id="select" value="Сгенерировать"></td></form>
			</tr>
		</table></div>
		<?require_once("generate.php");?>
		<br>
		<a href="../">На главную</a>
	</body>
</html>