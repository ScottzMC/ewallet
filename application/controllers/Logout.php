<?php

  class Logout extends CI_Controller{

    public function index(){
      // destroy session
      $data = array('login' => '', 'uid' => '', 'uemail' => '', 'ufirstname' => '', 'ulastname' => '');
      $this->session->unset_userdata($data);
      $this->session->sess_destroy();
      #delete_cookie('remember_me_token', 'http://localhost/ClientProjects/Soup', '/');
      redirect('login');
     }

  }

?>
