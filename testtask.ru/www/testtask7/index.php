<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>Тестовое задание 7</title>
	</head>
	<body>
		<div style="width:100%; float: left;"><table>
			<tr><form name="selectionTables" action="" method="post">
				<td align="right"><label for="table">Выбор тип цикла:</label></td>
				<td><select style="width: 200px" name="tables" id="tables" required>
					<option value="for">for</option>
					<option value="while">while</option>
					<option value="do-while">do while</option>
					<option value="foreach">foreach</option>
				</select></td>
				<td><input type="submit" name="select" id="select" value="Выбор"></td></form>
			</tr>
		</table></div>
		<?require_once("select.php");?>
		<br>
		<a href="../">На главную</a>
	</body>
</html>