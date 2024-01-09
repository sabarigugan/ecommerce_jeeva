<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        $oid = $this->session->userdata('oid');
        $status = $this->input->post('status');
        if (empty($status)) {
            redirect('user');
        }

        $firstname = $this->input->post('firstname');
        $amount = $this->input->post('amount');
        $txnid = $this->input->post('txnid');
        $posted_hash = $this->input->post('hash');
        $key = $this->input->post('key');
				$productinfo = $this->input->post('productinfo');
        $oid = $oid;
        $email = $this->input->post('email');
        $salt = "YxalwKlB"; // Your salt
        $add = $this->input->post('additionalCharges');
        if (isset($add)) {
            $additionalCharges = $this->input->post('additionalCharges');
            $retHashSeq = $additionalCharges . '|' . $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|'  . $oid . '|' . $key;
        } else {
            $retHashSeq = $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|'  . $oid . '|' . $key;
        }
        $data['hash'] = hash("sha512", $retHashSeq);
        $data['amount'] = $amount;
				$data['txnid'] = $txnid;
        $data['oid'] = $oid;
        $data['posted_hash'] = $posted_hash;
        $data['status'] = $status;

        if ($status == 'success') {
            $this->load->view('user/success', $data);
        } else {

            $update_data = array(
                'tid' => $txnid,
                'order_status' => 3,
                'create_at' => time()
            );

            // Update the 'order' table using the provided $order_id
            $this->db->where('oid', $oid);
            $this->db->update('order', $update_data);

            $this->load->view('user/failure', $data);
        }
    }
}
