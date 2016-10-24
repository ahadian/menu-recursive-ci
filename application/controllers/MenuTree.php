<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MenuTree extends CI_Controller {

  function index()
	{
		$this->config->load('menu');
		$this->lang->load('menu');
    $this->lang->load('icon');
    
    $dataMenu['folder1'] = $this->config->item('folder1');
    $dataMenu['folder2'] = $this->config->item('folder2');
		$this->load->view('menu',['data'=>$dataMenu]);
  }
}
