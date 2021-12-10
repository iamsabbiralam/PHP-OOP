<?php
//hasvdhvasnvnsavcn
	interface email
	{
		function email($e);

	}

	interface password
	{
		function password($pass);

	}

	class Validation implements email,password
	{
		public function email($e)
		{
			echo $e;
		}

		public function password($pass)
		{
			echo $pass;
		}
	}



	$cmt = new Validation();

	$cmt->email(4);
	echo '<br>';
	//$cmt->sub(5,9);
?>