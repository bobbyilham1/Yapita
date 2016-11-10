<?php
class main extends CI_Controller{
   function _construct(){
       $this->load->helper('url');
   }
    function index(){
        $this->load->view('admin.html');
    }
}