<?php
	interface CallUser
	{
		function call ();

	}

	interface MessegeUser
	{
		function Msg ();

	}

	class Mobile implements CallUser,MessegeUser {
		public function call () {
			echo "Call Efty";
		}

		public function Msg () {
			echo "Messege Efty";
		}
	}



	$mob = new Mobile();
    $mob->Msg();

?>