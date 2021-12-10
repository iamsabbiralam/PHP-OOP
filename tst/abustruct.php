<?php
	abstract class sum
	{
		abstract protected function add($a,$b);

		public function mult($a,$b)
		{
			echo $a * $b;
		}
	}

	class math extends sum 
	{
		public function add($a,$b)
		{
			echo $a+$b;
		}
	}


	$mt = new math();
	$mt->add(2,3);
	echo '<br>';
	//$mt->mult(3,3);
?>