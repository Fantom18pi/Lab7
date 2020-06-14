<?php

	if ($_POST['loc'])
	{
		$a = (int)$_POST['first'];
		$b = (int)$_POST['Second'];
		$p = $_POST ['Opetation'];
	
			if($p=='+')
				$c = $a + $b;
			else if($p=='-')
				$c = $a - $b;
			else if($p=='*')
				$c = $a * $b;
			else if($p=='/')
			{
				if ($b==0)
					echo "Вы не можете делить на ноль";
				else $c = $a / $b;
			}
			else $c = pow($a, $b);
			
		}
?>
<form action="" method="post">
	<input type="text" name="first" required>
	
	<select name="Operanion" required>
	<option value="+">+</option>
	<option value="-">-</option>
	<option value="*">*</option>
	<option value="/">/</option>
	<option value="^">^</option>
	</select>
	
	<input type="text" name="second" required>
	
	<input type="submit" name="loc">
</form>
<?php
		echo $c;
?>
