<?php
	class hp
	{
		public function model($model)
		{
			echo "probook ".$model;
		}
	}

	class probook extends hp
	{
		/*public function model($model)
		{
			echo "pavilion ".$model;
		}*/
	}

	$cl = new probook;
	$cl->model('x450');
?>