<?php

abstract class MobileUser {

    public function call ()
		{
			echo "Hi, I'm Efty";
		}

    abstract protected function addition ();
}

class Efty extends MobileUser {

		public function addition () {
			echo "How are you";
		}
	}

    $Mob = new Efty ();
	$Mob->addition ();
	$Mob->call ();
?>