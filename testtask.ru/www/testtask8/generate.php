<?php
	for($i=0; $i<$_POST['nums']; $i++)
	{
		if($i==0)
			echo "<table border=\"1\" border-style=\"solid\" bordercolor=\"#000000\" cellpadding=\"5\" cellspacing=\"0\">";
		$arr=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','0','1','2','3','4','5','6','7','8','9');
		$pass[$i]="";
		for($j=0; $j<6; $j++)
		{
		  $index=rand(0,count($arr)-1);
		  $pass[$i].=$arr[$index];
		}
		if($i>0)
		{
			for($j=0;$j<count($pass)-1;$j++)
			{
				if(strcmp($pass[$j],$pass[$i])==0)
				{
					$i--;
					continue;
				}
			}
		}
		$n=$i+1;
		echo "<tr><td>".$n."</td><td>".$pass[$i]."</td></tr>";
		if($i==$_POST['nums'])
			echo "</table>";
	}
	echo "<form name=\"selectionTables\" action=\"../testtask8\" method=\"post\">
		<script>
			document.selectionTables.submit();
		</script>
	</form>";
?>