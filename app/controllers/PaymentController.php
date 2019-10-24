<?php
namespace app\controllers;

use app\core\Controller;

class PaymentController extends Controller {
	
	public function index(){
		$this->security();
		
		$this->add_view("dashboard_payment");
		$this->master_interface("dashboard");

		
		
	}
	
}