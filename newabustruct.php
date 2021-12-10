<?php
//jhdgfjhsdhfhsdbbhsdbhsb
	abstract class sum
	{
		abstract protected function required($val);
		abstract protected function emal($val);
		abstract protected function pass($val);

		public function mult($a,$b)
		{
			echo $a * $b;
		}
	}

	class Validation extends sum 
	{
		public function required($val)
		{
			echo $val;
			
		}
	}


	$mt = new Validation();
	$mt->required('data');
	echo '<br>';
	//$mt->mult(3,3);
?>