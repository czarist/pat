<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{
	public function index()
	{
		$general = "home";
		$title = "Home";
		$this->load->view('layout/header', compact('title', 'general'));
		$this->load->view('home/home');
		$this->load->view('layout/footer');
	}
}
