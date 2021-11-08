<?php

  class Data_model extends CI_Model{

    // Home

    public function display_user_account_balance($email){
      $this->db->where('email', $email);
      $query = $this->db->get('users')->result();
      return $query;
    }

    // End of Home

    // Login

    function validate($email, $password){
	    	$escape_email = $this->db->escape_str($email);
	      	$escape_password = $this->db->escape_str($password);

	  	  	$this->db->where('email', $escape_email);
	  		//$this->db->where('password', $escape_password);
	      	$query = $this->db->get('users');

	      	if($query->num_rows() > 0){
	        	$result = $query->row_array();
	        	if($this->bcrypt->check_password($escape_password, $result['password'])){
	  		    	return $query->result();
	        	}else{
	          		return array();
	        	}
	      	}else{
	        	return NULL;
	      	}
    	}

    // End of Login

    // Register

    public function create_user($data){
      $escape_data = $this->db->escape_str($data);
      $query = $this->db->insert('users', $escape_data);
      return $query;
    }

    // End of Register

    // Credit

    public function add_card($data){
      $escape_data = $this->db->escape_str($data);
      $query = $this->db->insert('card_details', $escape_data);
      return $query;
    }

    public function display_all_user_cards($email){
      $this->db->where('email', $email);
      $query = $this->db->get('card_details')->result();
      return $query;
    }

    // End of Credit Card

    // Payment

    public function deposit_user_fund($data){
      $escape_data = $this->db->escape_str($data);
      $query = $this->db->insert('payments', $escape_data);
      return $query;
    }

    public function withdraw_user_fund($data){
      $escape_data = $this->db->escape_str($data);
      $query = $this->db->insert('payments', $escape_data);
      return $query;
    }

    public function update_user_deposit($email, $amount){
      $escape_email = $this->db->escape_str($email);
      $escape_amount = $this->db->escape_str($amount);

      $query = $this->db->query("UPDATE users SET acct_balance = acct_balance + '$escape_amount' WHERE email = '$escape_email' ");
      return $query;
    }

    public function update_user_withdraw($email, $amount){
      $escape_email = $this->db->escape_str($email);
      $escape_amount = $this->db->escape_str($amount);

      $query = $this->db->query("UPDATE users SET acct_balance = acct_balance - '$escape_amount' WHERE email = '$escape_email' ");
      return $query;
    }

    public function update_user_send($receiver_email, $amount){
      $escape_receiver_email = $this->db->escape_str($receiver_email);
      $escape_amount = $this->db->escape_str($amount);

      $query = $this->db->query("UPDATE users SET acct_balance = acct_balance + '$escape_amount' WHERE email = '$escape_receiver_email' ");
      return $query;
    }

    public function update_user_payment($invoice_id){
      $escape_invoice_id = $this->db->escape_str($invoice_id);
      $query = $this->db->query("UPDATE payments SET transaction_status = 'Completed' WHERE invoice_id = '$escape_invoice_id' ");
      return $query;
    }

    public function cancel_user_payment($invoice_id){
      $escape_invoice_id = $this->db->escape_str($invoice_id);
      $query = $this->db->query("DELETE FROM payments WHERE invoice_id = '$escape_invoice_id'");
      return $query;
    }
    
    public function pending_deposit_invoice($email, $invoice_id){
      $this->db->where('user_email', $email);
      //$this->db->where('invoice_id', $invoice_id);
      $this->db->where('transaction_type', 'Deposit');
      $query = $this->db->get('payments')->result();
      return $query;
    }

    public function pending_withdraw_invoice($email){
      $this->db->where('user_email', $email);
      $this->db->where('transaction_type', 'Withdraw');
      $query = $this->db->get('payments')->result();
      return $query;
    }

    public function pending_send_invoice($email){
      $this->db->where('user_email', $email);
      $this->db->where('transaction_type', 'Send');
      $query = $this->db->get('payments')->result();
      return $query;
    }

    public function pending_deposit_payment($email){
      $this->db->where('user_email', $email);
      $this->db->where('transaction_type', 'Deposit');
      $this->db->where('transaction_status', 'Pending');
      $query = $this->db->get('payments')->result();
      return $query;
    }

    public function pending_withdraw_payment($email){
      $this->db->where('user_email', $email);
      $this->db->where('transaction_type', 'Withdraw');
      $this->db->where('transaction_status', 'Pending');
      $query = $this->db->get('payments')->result();
      return $query;
    }

    public function pending_send_payment($email){
      $this->db->where('user_email', $email);
      $this->db->where('transaction_type', 'Send');
      $this->db->where('transaction_status', 'Pending');
      $query = $this->db->get('payments')->result();
      return $query;
    }

    public function completed_payment($email){
      $this->db->where('user_email', $email);
      $this->db->where('transaction_status', 'Completed');
      $query = $this->db->get('payments')->result();
      return $query;
    }

    // End of Payment

  }

?>
