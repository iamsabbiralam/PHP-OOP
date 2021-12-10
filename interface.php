<?php
	interface add_math
	{
		function add($a,$b);

	}

	interface sub_math
	{
		function sub($a,$b);

	}

	class math implements add_math,sub_math
	{
		public function add($a,$b)
		{
			echo $a+$b;
		}

		public function sub($a,$b)
		{
			echo $a-$b;
		}
	}



	$cmt = new math();

	$cmt->add(4,5);
	echo '<br>';
	//$cmt->sub(5,9);
?>