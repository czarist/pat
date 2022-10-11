<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ErrorController extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$general = "404";
		$title = "404";
		$this->load->view('layout/header', compact('title', 'general'));
		$this->load->view('error/error');
		$this->load->view('layout/footer');
	}
}
