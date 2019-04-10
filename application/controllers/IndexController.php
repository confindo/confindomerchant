<?php
/**
 * @author steven
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class IndexController extends CI_Controller {
	public function index(){
		$viewData = array(
			'title' => ''
		);

		$this->load->view('index/index',$viewData);
	}
}