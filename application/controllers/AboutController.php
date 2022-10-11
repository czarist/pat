<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AboutController extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$general = "about";
		$title = "Sobre";
		$this->load->view('layout/header', compact('title', 'general'));
		$this->load->view('about/about');
		$this->load->view('layout/footer');
	}
}
