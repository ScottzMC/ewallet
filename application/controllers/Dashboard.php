<?php

  class Dashboard extends CI_Controller{
      
    public function __construct(){
    // created the construct so that the helpers, libraries, models can be loaded all through this controller
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('xmlrpc');
        $this->load->library('xmlrpcs');    
    }

    public function index(){
      $email = $this->session->userdata('uemail');
      $data['account_balance'] = $this->Data_model->display_user_account_balance($email);

      if(!empty($email)){
      $this->form_validation->set_rules('number', 'Card Number', 'trim|required');
      $this->form_validation->set_rules('name', 'Card Holder Name', 'trim|required');
      $this->form_validation->set_rules('expiry', 'Card Expiry', 'trim|required');
      //$this->form_validation->set_rules('card_expiry_year', 'Card Expiry Year', 'trim|required');
      $this->form_validation->set_rules('cvc', 'Card CVC Number', 'trim|required');

      $form_valid = $this->form_validation->run();
      $submit_add_card = $this->input->post('addCardBtn');

      if($form_valid == FALSE){
        $this->load->view('site/nav/menu');
        $this->load->view('site/dashboard/dashboard', $data);
        $this->load->view('site/nav/footer');
      }else if(isset($submit_add_card)){
        $card_number = $this->input->post('number');
        $card_name = $this->input->post('name');
        $card_expiry = $this->input->post('expiry');
        //$card_expiry_year = $this->input->post('card_expiry_year');
        $card_cvc = $this->input->post('cvc');
        $time = time();
        $date = date('Y-m-d H:i:s');

        $add_card_array = array(
          'email' => $email,
          'card_number' => $card_number,
          'card_name' => $card_name,
          'card_expiry' => $card_expiry,
          //'card_expiry_year' => $card_expiry_year,
          'card_cvc' => $card_cvc,
          'created_time' => $time,
          'created_date' => $date
        );

        $add_card = $this->Data_model->add_card($add_card_array);

        if($add_card){
          $statusMsg = '<div class="alert alert-success>Added Card Successfully</div>';
          $this->session->set_flashdata('msgSuccess', $statusMsg);
          redirect('dashboard/credit_card');
        }else{
          $statusMsg = '<div class="alert alert-danger>Failed</div>';
          $this->session->set_flashdata('msgError', $statusMsg);
          $this->load->view('site/nav/menu');
          $this->load->view('site/dashboard/dashboard', $data);
          $this->load->view('site/nav/footer');
        }
      }
    }else{
      redirect('login');
    }
  }

    // Card Details

    public function credit_card(){
      $email = $this->session->userdata('uemail');

      if(!empty($email)){
      $data['all_user_card'] = $this->Data_model->display_all_user_cards($email);

      $this->load->view('site/nav/menu');
      $this->load->view('site/dashboard/dashboard_credit_card', $data);
      $this->load->view('site/nav/footer');
    }else{
      redirect('login');
    }
   }

    public function add_credit_card(){
      $this->load->view('site/nav/menu');
      $this->load->view('site/dashboard/dashboard_add_credit_card');
      $this->load->view('site/nav/footer');
    }

    // End of Card Details

    // Payment Details

    public function payment(){
      $email = $this->session->userdata('uemail');

    if(!empty($email)){
      $data['pending_deposit_payment'] = $this->Data_model->pending_deposit_payment($email);
      $data['pending_withdraw_payment'] = $this->Data_model->pending_withdraw_payment($email);
      $data['pending_send_payment'] = $this->Data_model->pending_send_payment($email);
      $data['completed_payment'] = $this->Data_model->completed_payment($email);

      $this->load->view('site/nav/menu');
      $this->load->view('site/dashboard/dashboard_payment', $data);
      $this->load->view('site/nav/footer');
    }else{
      redirect('login');
    }
   }

   // End of Payment Details
  

   // Funds

    public function deposit_fund(){
        $email = $this->session->userdata('uemail');
        
        $data['all_user_card'] = $this->Data_model->display_all_user_cards($email);

      if(!empty($email)){
        $this->form_validation->set_rules('amount', 'Deposit Amount', 'trim|required');
        $this->form_validation->set_rules('card_number', 'Card Number', 'trim|required');

        $form_valid = $this->form_validation->run();
        $submit_deposit = $this->input->post('depositBtn');

        if($form_valid == FALSE){
          $this->load->view('site/nav/menu');
          $this->load->view('site/dashboard/fund/dashboard_deposit_fund', $data);
          $this->load->view('site/nav/footer');
        }else if(isset($submit_deposit)){  
          $amount = $this->input->post('amount');
          $card_number = $this->input->post('card_number');
          $extra_charge = 2/100 * $amount;
          $total_transaction = ($amount * 100) + $extra_charge;
          $shuffle = str_shuffle("ABCDUVXY");
          $unique = rand(000, 999);
          $invoice_code = $shuffle.$unique;
          $reference_code = '7PVGX8MEk85tgeEpVDtD';
          $time = time();
          $date = date('Y-m-d H:i:s');
          
          // curl 
                          
            
          // end of curl

          $deposit_fund_array = array(
            'invoice_id' => $invoice_code,
            'user_email' => $email,
            'receiver_email' => 'None',
            'card_number' => $card_number,
            'amount' => $amount,
            'transaction_type' => 'Deposit',
            'transaction_charge' => $extra_charge,
            'transaction_status' => 'Pending',
            'created_time' => $time,
            'created_date' => $date
          );

          $deposit_fund = $this->Data_model->deposit_user_fund($deposit_fund_array);

          if($deposit_fund){
            //initialize_transaction($email, $total_transaction, $invoice_code);
            redirect('dashboard/deposit_invoice/'.$invoice_code);
          }else{
            $statusMsg = '<div class="alert alert-danger>Failed</div>';
            $this->session->set_flashdata('msgError', $statusMsg);
            $this->load->view('site/nav/menu');
            $this->load->view('site/dashboard/fund/dashboard_deposit_fund', $data);
            $this->load->view('site/nav/footer');
          }
        }
      }else{
        redirect('login');
      }
    }

    public function withdraw_fund(){
        $email = $this->session->userdata('uemail');
        $data['all_user_card'] = $this->Data_model->display_all_user_cards($email);

      if(!empty($email)){
        $this->form_validation->set_rules('amount', 'Deposit Amount', 'trim|required');
        $this->form_validation->set_rules('card_number', 'Card Number', 'trim|required');

        $form_valid = $this->form_validation->run();
        $submit_deposit = $this->input->post('depositBtn');

        if($form_valid == FALSE){
          $this->load->view('site/nav/menu');
          $this->load->view('site/dashboard/fund/dashboard_withdraw_fund', $data);
          $this->load->view('site/nav/footer');
        }else if(isset($submit_deposit)){
          $amount = $this->input->post('amount');
          $card_number = $this->input->post('card_number');
          $extra_charge = 2/100 * $amount;
          $shuffle = str_shuffle("ABCDUVXY");
          $unique = rand(000, 999);
          $invoice_code = $shuffle.$unique;
          $time = time();
          $date = date('Y-m-d H:i:s');

          $withdraw_fund_array = array(
            'invoice_id' => $invoice_code,
            'user_email' => $email,
            'receiver_email' => 'None',
            'card_number' => $card_number,
            'amount' => $amount,
            'transaction_type' => 'Withdraw',
            'transaction_charge' => $extra_charge,
            'transaction_status' => 'Pending',
            'created_time' => $time,
            'created_date' => $date
          );

          $withdraw_fund = $this->Data_model->withdraw_user_fund($withdraw_fund_array);

          if($withdraw_fund){
            redirect('dashboard/withdraw_invoice');
          }else{
            $statusMsg = '<div class="alert alert-danger>Failed</div>';
            $this->session->set_flashdata('msgError', $statusMsg);
            $this->load->view('site/nav/menu');
            $this->load->view('site/dashboard/fund/dashboard_withdraw_fund', $data);
            $this->load->view('site/nav/footer');
          }
        }
      }else{
        redirect('login');
      }
    }

    public function send_fund(){
        $email = $this->session->userdata('uemail');
        $data['all_user_card'] = $this->Data_model->display_all_user_cards($email);

      if(!empty($email)){
        $this->form_validation->set_rules('receiver_email', 'Receiver Email', 'trim|required');
        $this->form_validation->set_rules('amount', 'Deposit Amount', 'trim|required');
        $this->form_validation->set_rules('card_number', 'Card Number', 'trim|required');

        $form_valid = $this->form_validation->run();
        $submit_deposit = $this->input->post('depositBtn');

        if($form_valid == FALSE){
          $this->load->view('site/nav/menu');
          $this->load->view('site/dashboard/fund/dashboard_send_fund', $data);
          $this->load->view('site/nav/footer');
        }else if(isset($submit_deposit)){
          $receiver_email = $this->input->post('receiver_email');
          $amount = $this->input->post('amount');
          $card_number = $this->input->post('card_number');
          $extra_charge = 2/100 * $amount;
          $shuffle = str_shuffle("ABCDUVXY");
          $unique = rand(000, 999);
          $invoice_code = $shuffle.$unique;
          $time = time();
          $date = date('Y-m-d H:i:s');

          $send_fund_array = array(
            'invoice_id' => $invoice_code,
            'user_email' => $email,
            'receiver_email' => $receiver_email,
            'card_number' => $card_number,
            'amount' => $amount,
            'transaction_type' => 'Send',
            'transaction_charge' => $extra_charge,
            'transaction_status' => 'Pending',
            'created_time' => $time,
            'created_date' => $date
          );

          $send_fund = $this->Data_model->send_user_fund($send_fund_array);

          if($send_fund){
            redirect('dashboard/send_invoice');
          }else{
            $statusMsg = '<div class="alert alert-danger>Failed</div>';
            $this->session->set_flashdata('msgError', $statusMsg);
            $this->load->view('site/nav/menu');
            $this->load->view('site/dashboard/fund/dashboard_send_fund', $data);
            $this->load->view('site/nav/footer');
          }
        }
      }else{
        redirect('login');
      }
    }

    // End of Funds

    // Invoice

    public function deposit_invoice($invoice_id){
      $email = $this->session->userdata('uemail');

      if(!empty($email)){
        $data['pending_invoice'] = $this->Data_model->pending_deposit_invoice($email, $invoice_id);

        $submit_cancel = $this->input->post('cancelBtn');
        $submit_deposit = $this->input->post('depositBtn');

        if(isset($submit_deposit)){
          $invoice_id = $this->input->post('invoice_id');
          $amount = $this->input->post('amount');
          $extra_charge = 2/100 * $amount;
          $total_transaction = ($amount * 100) + $extra_charge;
          $time = time();
          $date = date('Y-m-d H:i:s');

          $update_user_deposit = $this->Data_model->update_user_deposit($email, $amount);
          $update_user_payment = $this->Data_model->update_user_payment($invoice_id);

          if($update_user_deposit && $update_user_payment){
             //Paystack Initialize  
             $curl = curl_init();

            //$email = "$email";
            //$amount = $total_transaction;  //the amount in kobo. This value is actually NGN 300
            
            // url to go to after payment
            $callback_url = 'https://www.angelbeingx.com/dashboard/payment';  
            
            curl_setopt_array($curl, array(
              CURLOPT_URL => "https://api.paystack.co/transaction/initialize",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_CUSTOMREQUEST => "POST",
              CURLOPT_POSTFIELDS => json_encode([
                'amount'=>$total_transaction,
                'email'=>$email,
                'callback_url' => $callback_url
              ]),
              CURLOPT_HTTPHEADER => [
                "authorization: Bearer sk_live_0eafa5466008f88cd364cf62639a7b509fe851d0", //replace this with your own test key
                "content-type: application/json",
                "cache-control: no-cache"
              ],
            ));
            
            $response = curl_exec($curl);
            $err = curl_error($curl);
            
            if($err){
              // there was an error contacting the Paystack API
              die('Curl returned error: ' . $err);
            }
            
            $tranx = json_decode($response, true);
            
            /*if(!$tranx->status){
              // there was an error from the API
              print_r('API returned error: ' . $tranx['message']);
            } */
            
            // comment out this line if you want to redirect the user to the payment page
            //print_r($tranx);
            // redirect to page so User can pay
            // uncomment this line to allow the user redirect to the payment page
            header('Location: ' . $tranx['data']['authorization_url']); 
            // End of Paystack Initialize
            
            // Paystack Validating
            /*$curl = curl_init();
            $reference = isset($_GET['reference']) ? $_GET['reference'] : '';
            if(!$reference){
              die('No reference supplied');
            }
            
            curl_setopt_array($curl, array(
              CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_HTTPHEADER => [
                "accept: application/json",
                "authorization: Bearer sk_live_0eafa5466008f88cd364cf62639a7b509fe851d0",
                "cache-control: no-cache"
              ],
            ));
            
            $response = curl_exec($curl);
            $err = curl_error($curl);
            
            if($err){
                // there was an error contacting the Paystack API
              die('Curl returned error: ' . $err);
            }
            
            $tranx = json_decode($response);
            
            if(!$tranx->status){
              // there was an error from the API
              die('API returned error: ' . $tranx->message);
            }
            
            if('success' == $tranx->data->status){
              // transaction was successful...
              // please check other things like whether you already gave value for this ref
              // if the email matches the customer who owns the product etc
              // Give value
              echo "<h2>Thank you for making a purchase. Your file has bee sent your email.</h2>";
            } */ 
            // End of Paystack Validating
            //redirect('dashboard/payment');
          }else{
            $statusMsg = '<div class="alert alert-danger>Failed</div>';
            $this->session->set_flashdata('msgError', $statusMsg);
            $this->load->view('site/nav/menu');
            $this->load->view('site/dashboard/fund/dashboard_deposit_invoice', $data);
            $this->load->view('site/nav/footer');
          }
        }else if(isset($submit_cancel)){
          $invoice_id = $this->input->post('invoice_id');
          $amount = $this->input->post('amount');
          $time = time();
          $date = date('Y-m-d H:i:s');

          $cancel_user_payment = $this->Data_model->cancel_user_payment($invoice_id);

          if($cancel_user_payment){
            redirect('dashboard/payment');
          }else{
            $statusMsg = '<div class="alert alert-danger>Failed</div>';
            $this->session->set_flashdata('msgError', $statusMsg);
            $this->load->view('site/nav/menu');
            $this->load->view('site/dashboard/fund/dashboard_deposit_invoice', $data);
            $this->load->view('site/nav/footer');
          }
        }

        $this->load->view('site/nav/menu');
        $this->load->view('site/dashboard/invoice/dashboard_deposit_invoice', $data);
        $this->load->view('site/nav/footer');
      }else{
        redirect('login');
      }
    }

    public function withdraw_invoice(){
      $email = $this->session->userdata('uemail');

      if(!empty($email)){
        $data['pending_invoice'] = $this->Data_model->pending_withdraw_invoice($email);

        $submit_cancel = $this->input->post('cancelBtn');
        $submit_deposit = $this->input->post('depositBtn');

        if(isset($submit_deposit)){
          $invoice_id = $this->input->post('invoice_id');
          $amount = $this->input->post('amount');
          $time = time();
          $date = date('Y-m-d H:i:s');

          $query = $this->db->query("SELECT amount FROM users WHERE email = '$email' ")->result();
          foreach($query as $qry){
            $user_amount = $qry->amount;
          }

          $update_user_withdraw = $this->Data_model->update_user_withdraw($email, $amount);
          $update_user_payment = $this->Data_model->update_user_payment($invoice_id);

          if($update_user_withdraw && $update_user_payment && $user_amount > 0){
            redirect('dashboard/payment');
          }else{
            $statusMsg = '<div class="alert alert-danger>Failed</div>';
            $this->session->set_flashdata('msgError', $statusMsg);
            $this->load->view('site/nav/menu');
            $this->load->view('site/dashboard/fund/dashboard_withdraw_invoice', $data);
            $this->load->view('site/nav/footer');
          }
        }else if(isset($submit_cancel)){
          $invoice_id = $this->input->post('invoice_id');
          $amount = $this->input->post('amount');
          $time = time();
          $date = date('Y-m-d H:i:s');

          $cancel_user_payment = $this->Data_model->cancel_user_payment($invoice_id);

          if($cancel_user_payment){
            redirect('dashboard/payment');
          }else{
            $statusMsg = '<div class="alert alert-danger>Failed</div>';
            $this->session->set_flashdata('msgError', $statusMsg);
            $this->load->view('site/nav/menu');
            $this->load->view('site/dashboard/fund/dashboard_withdraw_invoice', $data);
            $this->load->view('site/nav/footer');
          }
      }else{
        redirect('login');
      }
    }
  }

    public function send_invoice(){
      $email = $this->session->userdata('uemail');

      if(!empty($email)){
        $data['pending_invoice'] = $this->Data_model->pending_send_invoice($email);

        $submit_cancel = $this->input->post('cancelBtn');
        $submit_deposit = $this->input->post('depositBtn');

        if(isset($submit_deposit)){
          $invoice_id = $this->input->post('invoice_id');
          $receiver_email = $this->input->post('receiver_email');
          $amount = $this->input->post('amount');
          $time = time();
          $date = date('Y-m-d H:i:s');

          $query = $this->db->query("SELECT amount FROM users WHERE email = '$email' ")->result();
          foreach($query as $qry){
            $user_amount = $qry->amount;
          }

          $update_user_withdraw = $this->Data_model->update_user_withdraw($email, $amount);
          $update_user_send = $this->Data_model->update_user_send($receiver_email, $amount);
          $update_user_payment = $this->Data_model->update_user_payment($invoice_id);

          if($update_user_withdraw && $update_user_send && $update_user_payment && $user_amount > 0){
            redirect('dashboard/payment');
          }else{
            $statusMsg = '<div class="alert alert-danger>Failed</div>';
            $this->session->set_flashdata('msgError', $statusMsg);
            $this->load->view('site/nav/menu');
            $this->load->view('site/dashboard/fund/dashboard_send_invoice', $data);
            $this->load->view('site/nav/footer');
          }
        }else if(isset($submit_cancel)){
          $invoice_id = $this->input->post('invoice_id');
          $amount = $this->input->post('amount');
          $time = time();
          $date = date('Y-m-d H:i:s');

          $cancel_user_payment = $this->Data_model->cancel_user_payment($invoice_id);

          if($cancel_user_payment){
            redirect('dashboard/payment');
          }else{
            $statusMsg = '<div class="alert alert-danger>Failed</div>';
            $this->session->set_flashdata('msgError', $statusMsg);
            $this->load->view('site/nav/menu');
            $this->load->view('site/dashboard/fund/dashboard_send_invoice', $data);
            $this->load->view('site/nav/footer');
          }
      }else{
        redirect('login');
      }
    }
  }

    // End of Invoice

  }

?>
