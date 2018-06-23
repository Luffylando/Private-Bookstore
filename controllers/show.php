<?php

class Show extends Controller
{
	public function index(){

			$viewmodel = new ShowModel();
		$this->returnView($viewmodel->index(), true);
	}

	public function showBook(){

			$viewmodel = new ShowModel();
		$this->returnView($viewmodel->showBook(), true);
	}

	public function create(){

			$viewmodel = new ShowModel();
		$this->returnView($viewmodel->create(), true);
	}

	public function update(){

			$viewmodel = new ShowModel();
		$this->returnView($viewmodel->update(), true);


	}

	
}
