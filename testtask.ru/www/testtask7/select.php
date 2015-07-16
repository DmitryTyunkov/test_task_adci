<?php
	function mulFor()
	{
		echo "<div style=\"width:100%; float: left;\">";
		echo "<div style=\"width:100%; float: left;\">for</div>";
		for($i=1;$i<=10;$i++)
		{
			echo "<div style=\"height:200px; width:100px; float: left;\">";
			for($j=1;$j<=10;$j++)
			{
				$result = $i*$j;
				echo $i."*".$j."=".$result."<br>";
			}
			echo "</div>";
		}
		echo "</div>";
	}
	function mulWhile()
	{
		echo "<div style=\"width:100%; float: left;\">";
		echo "<div style=\"width:100%; float: left;\">while</div>";
		$i=1;
		while($i<=10)
		{
			$j=1;
			echo "<div style=\"height:200px; width:100px; float: left;\">";
			while($j<=10)
			{
				$result = $i*$j;
				echo $i."*".$j."=".$result."<br>";
				$j++;
			}
			$i++;
			echo "</div>";
		}
		echo "</div>";
	}
	function mulDo()
	{
		echo "<div style=\"width:100%; float: left;\">";
		echo "<div style=\"width:100%; float: left;\">do-while</div>";
		$i=1;
		do
		{
			$j=1;
			echo "<div style=\"height:200px; width:100px; float: left;\">";
			do
			{
				$result = $i*$j;
				echo $i."*".$j."=".$result."<br>";
				$j++;
			}
			while($j<=10);
			$i++;
			echo "</div>";
		}
		while($i<=10);
		echo "</div>";
	}
	function mulForeach()
	{
		$numbers=array(1,2,3,4,5,6,7,8,9,10);
		echo "<div style=\"width:100%; float: left;\">";
		echo "<div style=\"width:100%; float: left;\">foreach</div>";
		foreach($numbers as $i)
		{
			echo "<div style=\"height:200px; width:100px; float: left;\">";
			foreach($numbers as $j)
			{
				$result = $i*$j;
				echo $i."*".$j."=".$result."<br>";
			}
			echo "</div>";
		}
		echo "</div>";
	}
	if($_POST['tables']=='for')
		mulFor();
	if($_POST['tables']=='while')
		mulWhile();
	if($_POST['tables']=='do-while')
		mulDo();
	if($_POST['tables']=='foreach')
		mulForeach();
	echo "<form name=\"selectionTables\" action=\"../testtask7\" method=\"post\">
		<script>
			document.selectionTables.submit();
		</script>
	</form>";
?>