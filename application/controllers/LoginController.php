<?php
	/**
	 * @author steven
	 */

	defined('BASEPATH') OR exit('No direct script access allowed');

	class LoginController extends CI_Controller{
		public function index(){
			$viewData = array(
				"title" => "Admin Login",
				"css" => base_url().LOGIN_COMPONENT."login.css",
				"js" => base_url().LOGIN_COMPONENT."login.js"
 			);
			
			$this->load->view('login/index',$viewData);
		}
	}