<?php

class Pages extends Controller {

	public function __construct() {
		
	}

	public function index() {
		$data = [
			'title' => 'Wassup nigga !!'
		];
		$this->view('pages/index', $data);
	}
	
	public function about() {
		$data = [
			'title' => 'About me'
		];
		$this->view('pages/about', $data);
	}

}

?>