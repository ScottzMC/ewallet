<?php

  class Register extends CI_Controller{

      public function index(){
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]');

        $form_valid = $this->form_validation->run();
        $submit_register = $this->input->post('registerBtn');

        if($form_valid == FALSE){
          $this->load->view('site/account/register');
  			}else if(isset($submit_register)){
          $firstname = $this->input->post('firstname');
          $lastname = $this->input->post('lastname');
          $email = $this->input->post('email');
  				$password = $this->input->post('password');
          $hashed_password = $this->bcrypt->hash_password($password);
          $time = time();
          $date = date('Y-m-d H:i:s');

          $add_user_array = array(
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'password' => $hashed_password,
            'created_time' => $time,
            'created_date' => $date
          );

          $add_user = $this->Data_model->create_user($add_user_array);

          if($add_user){
            $statusMsg = '<div class="alert alert-success>Registration Was Successful</div>';
            $this->session->set_flashdata('msgSuccess', $statusMsg);
            redirect('login');
          }else{
            $statusMsg = '<div class="alert alert-danger>Registration Failed</div>';
            $this->session->set_flashdata('msgError', $statusMsg);
            $this->load->view('site/account/register');
          }
        }
      }
  }

?>
