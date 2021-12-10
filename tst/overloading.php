<?php
class txt
{
	public function show($a){
		echo $a.$b;
	}

	public function show($a,$b){
		echo $a.$b;
	}

	public function show($a,$b,$c){
		echo $a.$b.$c;
	}
}

$mt = new txt();

$mt->show('book');

?>