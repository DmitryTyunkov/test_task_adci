<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>Тестовое задание 3</title>
		<script type="text/javascript">
			addEventListener("keypress", function(event)
			{
				if(event.charCode==43)
				{
					document.getElementById('img').width+=5;
					document.getElementById('img').height+=5;
				}
				if(event.charCode==45)
				{
					if(document.getElementById('img').width-5<0)
						document.getElementById('img').width=0;
					else
						document.getElementById('img').width-=5;
					if(document.getElementById('img').height-5<0)
						document.getElementById('img').height=0;
					else
						document.getElementById('img').height-=5;
				}
			});
		</script>
	</head>
	<body>
		<div style="height:300px; width:300px; border:solid 1px black; overflow: hidden;">
			<img id="img" align="center" src="Герб_ориг.jpg" alt="Не удалось загрузить картинку" height=100%; width=100%>
		</div>
		<br>
		<a href="../">На главную</a>
	</body>
</html>