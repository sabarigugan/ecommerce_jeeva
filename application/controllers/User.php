<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
        parent::__construct();
						$this->load->model('madmin');
    }


	public function index()
	{
		$this->load->view('user/home');
	}

	public function product()
	{
		$this->load->view('user/product');
	}

	public function product_list()
	{
		$this->load->view('user/product_list');
	}

	public function failure()
	{
		$this->load->view('user/failure');
	}

	public function success()
	{
		$this->load->view('user/success');
	}

	public function subcatg_list()
	{
		$this->load->view('user/subcatg_list');
	}

	public function produtbysubcatg()
	{
		$this->load->view('user/produtbysubcatg');
	}

	public function brand_list()
	{
		$this->load->view('user/brand_list');
	}

	public function search() {
        $query = $this->input->get('query');
        $this->load->model('madmin');
        $data['results'] = $this->madmin->searchProducts($query);
        $this->load->view('user/search', $data);
    }

	public function myprofile()
	{
		$this->load->view('user/myprofile');
	}

	public function invoice()
	{
		$this->load->view('user/invoice');
	}

	public function privacy()
	{
		$this->load->view('user/privacy');
	}

	public function terms()
	{
		$this->load->view('user/terms');
	}

	public function cart()
	{
		$this->load->view('user/cart');
	}


	public function shipping()
	{
		$this->load->view('user/shipping');
	}

	public function payment()
	{
		$this->load->view('user/payment');
	}

	public function myorder()
	{
		$this->load->view('user/myorder');
	}

		public function payment1()
		{
			$this->load->view('user/payment1');
		}

		public function payment2()
		{
			$this->load->view('user/payment2');
		}

	public function return()
	{
		$this->load->view('user/return');
	}

	public function fetch_search_results() {
         $this->load->model('madmin');

         $query = $this->input->post('query');
         $results = $this->madmin->get_search_results($query);

         header('Content-Type: application/json');
         echo json_encode($results);
     }

	public function signup_post()
{
		$user_email = $this->input->post('user_email');

		$existing_user = $this->db->get_where('login', array('user_email' => $user_email))->row();

		if ($existing_user) {
				$this->session->set_flashdata('message', 'User with this email already exists.');
				$this->session->set_flashdata('class', 'error');
				redirect('user/index');
		} else {

				$insert_data = array(
						'user_name'     => $this->input->post('user_name'),
						'user_email'    => $user_email,
						'user_phone'    => $this->input->post('user_phone'),
						'user_password' => password_hash($this->input->post('user_password', TRUE), PASSWORD_DEFAULT),
						'status'        => 1,
						'create_at'     => time()
				);

				$result = $this->db->insert('login', $insert_data);

				if ($result == TRUE) {
						$this->session->set_flashdata('message', 'Registered Successfully.');
						$this->session->set_flashdata('class', 'success');
						redirect('user/index');
				} else {
						$this->session->set_flashdata('message', 'Something went wrong! Please try again.');
						$this->session->set_flashdata('class', 'error');
						redirect('user/index');
				}
		}
}


public function login_post()
{
    $login_data = array(
        'user_email' => $this->input->post('user_email', TRUE),
        'user_password' => $this->input->post('user_password', TRUE),
    );

    $this->load->model('user_model', 'UserModel');
    $result = $this->UserModel->check_login($login_data);

    $data = array();

    if (!empty($result['status']) && $result['status'] === TRUE) {

        $session_array['user_login'] = array(
            'user_id' => $result['data']->user_id,
						'user_name' => $result['data']->user_name,
						'fullname' => $result['data']->fullname,
            'mno' => $result['data']->mno,
            'email' => $result['data']->user_email,
            'phone' => $result['data']->user_phone,
            'status' => $result['data']->status,
        );

        $this->session->set_userdata($session_array);
				$this->session->set_flashdata('message', 'Congratulations, You are successfully logged in.');
				$this->session->set_flashdata('class', 'success');
      	redirect('user/index');
    } else {
			$this->session->set_flashdata('message', 'Invalid Email/Password.');
			$this->session->set_flashdata('class', 'error');
        	redirect('user/index');
    }

    echo json_encode($data);
}

public function add_cart() {

    $insert_data = array(
        'csize'      => $this->input->post('csize', TRUE),
        'cqty'  => $this->input->post('cqty', TRUE),
        'cname'       => $this->input->post('cname', TRUE),
        'cprice'         => $this->input->post('cprice', TRUE),
				'cmrp'      => $this->input->post('cmrp', TRUE),
        'pid'      => $this->input->post('pid', TRUE),
				'user_id'      => $this->session->userdata('user_login')['user_id'],
				'user_name'      => $this->session->userdata('user_login')['user_name'],
				'user_phone'      => $this->session->userdata('user_login')['phone'],
				'user_email'      => $this->session->userdata('user_login')['email'],
        'created_by'      => $this->session->userdata('user_login')['user_id'],
        'status'          => 1,
        'create_at'       => time()
    );

    $result = $this->db->insert('cart', $insert_data);

    if ($result) {
        $data['message'] = "Added successfully.";
        $data['class'] = "success";
        redirect('user/cart');
    } else {
        $data['message'] = "Something went wrong! Please try again.";
        $data['class'] = "error";

        // Add this line to see the database error if any
        $data['db_error'] = $this->db->error();

        redirect('user/cart');
    }

    echo json_encode($data);
}

// public function filterbyprice() {
//     $minPrice = $this->input->get('minPrice');
//     $maxPrice = $this->input->get('maxPrice');
//     $pssize = $this->input->get('pssize');
//
//     $this->load->model('madmin');
//
//     $data['listproductbysubsub'] = $this->madmin->getProductsByPriceRangeAndSize($minPrice, $maxPrice, $pssize);
//
//     $this->load->view('user/product_listing_view', $data);
// }




public function filterProducts() {
	$segment3 = $this->uri->segment(3);

    $minPrice = $this->input->post('minPrice');
    $maxPrice = $this->input->post('maxPrice');
    $selectedSize = $this->input->post('pssize');
    $selectedBrands = $this->input->post('brands');

    $data['listproductbysubsub'] = $this->madmin->filterProducts($minPrice, $maxPrice, $selectedSize, $selectedBrands);

    $this->load->view('user/product_listing_view', $data);
}






// public function add_order() {
//     $user_address = $this->input->post('user_address');
//     $customer_name = $this->session->userdata('user_login')['user_name'];
//     $customer_email = $this->session->userdata('user_login')['email'];
//     $customer_mobile = $this->session->userdata('user_login')['phone'];
// 		$customer_address = $this->input->post('user_address');
//
//     // Get arrays of values from the form
//     $pids = $this->input->post('pid');
//     $cart_ids = $this->input->post('cart_id');
//     $product_infos = $this->input->post('productinfo');
//     $cqtys = $this->input->post('cqty');
//     $csizes = $this->input->post('csize');
//   	$cart_statuss = $this->input->post('cart_status');
//
//     // Get the existing records in the 'order' table for the current user
//     $existing_records = $this->db->get_where('order', array(
//         'user_id' => $this->session->userdata('user_login')['user_id'],
//     ))->result();
//
//     // Create an array to store existing order IDs
//     $existing_order_ids = array();
//
//     // Iterate through the existing records and update or remove them
//     foreach ($existing_records as $existing_record) {
//         $existing_order_ids[] = $existing_record->order_id;
//
//         // Check if the existing record is in the current set of products
//         if (!in_array($existing_record->pid, $pids) || !in_array($existing_record->cart_id, $cart_ids)) {
//             // Remove the existing record only if order_status is 1
//             if ($existing_record->order_status == 1) {
//                 $this->db->where('order_id', $existing_record->order_id);
//                 $this->db->delete('order');
//             }
//         }
//     }
//
//     // Iterate through the arrays and insert or update each set of values
//     for ($i = 0; $i < count($pids); $i++) {
//         // Check if the combination of pid, cart_id, etc. already exists in the 'order' table
//         $existing_record = $this->db->get_where('order', array(
//             'pid' => $pids[$i],
//             'cart_id' => $cart_ids[$i],
//         ))->row();
//
//         if ($existing_record) {
//             // Update the existing record
//             $this->db->where('order_id', $existing_record->order_id);
//             $this->db->update('order', array(
//                 'cqty' => $cqtys[$i], // Update other fields as needed
//             ));
//         } else {
//             // Insert a new record
//             $insert_data = array(
//                 'cname' => $product_infos[$i],
//                 'pid' => $pids[$i],
//                 'cart_id' => $cart_ids[$i],
//                 'cqty' => $cqtys[$i],
//                 'csize' => $csizes[$i],
//                 'user_address' => $user_address,
//                 'user_id' => $this->session->userdata('user_login')['user_id'],
//                 'user_name' => $customer_name,
//                 'user_phone' => $customer_mobile,
//                 'user_email' => $customer_email,
//                 'cart_status' => $cart_statuss[$i],
//                 'order_status' => 1,
//                 'create_at' => time()
//             );
//
//             $this->db->insert('order', $insert_data);
//         }
//     }
//
//     // Redirect or show appropriate response based on your requirement
//     if ($result) {
//         $data['message'] = "Data Added successfully.";
//         $data['class'] = "success";
//         redirect('user/payment1');
//     } else {
//         $data['message'] = "Something went wrong! Please try again.";
//         $data['class'] = "success";
//         redirect('user/payment1');
//         return;
//     }
// }


public function add_order() {
    $user_address = $this->input->post('user_address');
    $customer_name = $this->session->userdata('user_login')['fullname'];
    $customer_email = $this->session->userdata('user_login')['email'];
    $customer_mobile = $this->session->userdata('user_login')['mno'];
		$customer_address = $this->input->post('user_address');
		$payble_amount = $this->input->post('payble_amount');
    $oid = $this->input->post('oid');


    // Get arrays of values from the form
    $pids = $this->input->post('pid');
    $cart_ids = $this->input->post('cart_id');
    $product_infos = $this->input->post('productinfo');
    $cqtys = $this->input->post('cqty');
    $csizes = $this->input->post('csize');
    $cart_statuss = $this->input->post('cart_status');

    // Get the existing records in the 'order' table for the current user
    $existing_records = $this->db->get_where('order', array(
        'user_id' => $this->session->userdata('user_login')['user_id'],
    ))->result();

    $existing_order_ids = array();


    foreach ($existing_records as $existing_record) {
        $existing_order_ids[] = $existing_record->order_id;

        // Check if the existing record is in the current set of products
        if (!in_array($existing_record->pid, $pids) || !in_array($existing_record->cart_id, $cart_ids)) {
            // Remove the existing record only if order_status is 1
            if ($existing_record->order_status == 1) {
                $this->db->where('order_id', $existing_record->order_id);
                $this->db->delete('order');
            }
        }
    }


        $existing_record = $this->db->get_where('order', array(
            'pid' => $pids[$i],
            'cart_id' => $cart_ids[$i],
        ))->row();

        if ($existing_record) {
            // Update the existing record
            $this->db->where('order_id', $existing_record->order_id);
            $this->db->update('orderdetail', array(
                'cqty' => $cqtys[$i],
            ));
        } else {

            $insert_data = array(
							'pid' => implode(',', $pids),
            'cart_id' => implode(',', $cart_ids),
						'oid' => 'ORD000' . ($oid + 1),
                'user_address' => $user_address,
                'user_id' => $this->session->userdata('user_login')['user_id'],
                'user_name' => $customer_name,
                'user_phone' => $customer_mobile,
								'user_email' => $customer_email,
                'payble_amount' => $payble_amount,
								'order_status' => 1,
                'status' => 1,
                'create_at' => time()
            );

            $this->db->insert('order', $insert_data);

  for ($i = 0; $i < count($pids); $i++) {
            $order_id = $this->db->insert_id();
            $orderdetail_data = array(
                'order_id' => $order_id,
								'oid' => 'ORD000' . ($oid + 1),
                'cart_id' => $cart_ids[$i],
								'cname' => $product_infos[$i],
                'pid' => $pids[$i],
                'cqty' => $cqtys[$i],
								'csize' => $csizes[$i],
                'cart_status' => $cart_statuss[$i],
								'od_status' => 1,
								'create_at' => time()
            );

            $this->db->insert('orderdetail', $orderdetail_data);

        }
			  $this->session->set_userdata('oid', $oid);

    }

    if ($result) {
        $data['message'] = "Data Added successfully.";
        $data['class'] = "success";
        redirect('user/payment1');
    } else {
        $data['message'] = "Something went wrong! Please try again.";
        $data['class'] = "success";
        redirect('user/payment1');
        return;
    }
}



public function check()
{
    $amount =  $this->input->post('payble_amount');
    $product_info = $this->input->post('cname');
    $pid = $this->input->post('pid');
    $cart_id = $this->input->post('cart_id');
    $user_address = $this->input->post('user_address');
    $customer_name = $this->session->userdata('user_login')['user_name'];
    $customer_emial = $this->session->userdata('user_login')['email'];
    $customer_mobile = $this->session->userdata('user_login')['phone'];
    $customer_address = $this->input->post('user_address');

    //payumoney details
    $MERCHANT_KEY = ""; //change  merchant with yours
    $SALT = "";  //change salt with yours

    $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
    //optional udf values
    $udf1 = '';
    $udf2 = '';
    $udf3 = '';
    $udf4 = '';
    $udf5 = '';

    $hashstring = $MERCHANT_KEY . '|' . $txnid . '|' . $amount . '|' . $product_info . '|' . $customer_name . '|' . $customer_emial . '|' . $udf1 . '|' . $udf2 . '|' . $udf3 . '|' . $udf4 . '|' . $udf5 . '||||||' . $SALT;
    $hash = strtolower(hash('sha512', $hashstring));

    $sucess = base_url() . 'Status';
    $fail = base_url() . 'Status';
    $cancel = base_url() . 'Status';

    $data = array(
        'mkey' => $MERCHANT_KEY,
        'tid' => $txnid,
        'hash' => $hash,
        'amount' => $amount,
        'product_info' => $product_info,
				'pid' => $pid,
        'cart_id' => $cart_id,
        'user_address' => $user_address,
        'user_id' => $this->session->userdata('user_login')['user_id'],
        'user_name' => $customer_name,
        'user_phone' => $customer_mobile,
        'user_email' => $customer_emial,
        'created_by' => $this->session->userdata('user_login')['user_id'],
        'order_status' => 1,
        'action' => "https://secure.payu.in", //for live change action  https://secure.payu.in
        'sucess' => $sucess,
        'failure' => $fail,
        'cancel' => $cancel,
        'create_at' => time()
    );
    $this->load->view('user/confirmation', $data);
}

public function update_cart_qty()
{
    $cart_id = $this->input->post('cart_id');
    $quantity = $this->input->post('quantity');

    // Load the model if not loaded already
    $this->load->model('madmin');

    // Perform the database update
    $updated = $this->madmin->update_cart_quantity($cart_id, $quantity);

    if ($updated) {
        // If the update is successful, you can send a success response
        echo json_encode(['success' => true]);
    } else {
        // If there is an error, you can send an error response
        echo json_encode(['success' => false, 'message' => 'Failed to update quantity']);
    }
}


public function edit_login($res_id = 0){
			$update_data = array(
				'fullname'           => $this->input->post('fullname', TRUE),
				'mno'           => $this->input->post('mno', TRUE),
				'user_address'           => $this->input->post('user_address', TRUE),
				'user_landmark'      => $this->input->post('user_landmark', TRUE),
				'user_pincode'    => $this->input->post('user_pincode', TRUE),
				'user_city'              => $this->input->post('user_city', TRUE),
				'user_state'      => $this->input->post('user_state', TRUE),
				'create_at'			=> time()
						);
			$result = $this->db->where('sha1(md5(user_id))', $res_id)->update('login', $update_data);
			if ($result == TRUE) {
				$this->session->set_flashdata('message', 'Address Added successfully.');
				$this->session->set_flashdata('class', 'success');
				redirect('user/payment');
			} else {
				$data['message'] = "Something went wrong! Please try again.";
				$data['class']	 = "error";
				redirect('user/cart');
			}
		echo json_encode($data);
	}


	public function edit_user($res_id = 0){
				$update_data = array(
					'user_name'           => $this->input->post('user_name', TRUE),
					'user_email'      => $this->input->post('user_email', TRUE),
					'user_phone'    => $this->input->post('user_phone', TRUE),
					'gender'              => $this->input->post('gender', TRUE),
					'create_at'			=> time()
							);
				$result = $this->db->where('sha1(md5(user_id))', $res_id)->update('login', $update_data);
				if ($result == TRUE) {
					$this->session->set_flashdata('message', 'User Updated successfully.');
					$this->session->set_flashdata('class', 'success');
					redirect('user/myprofile');
				} else {
					$this->session->set_flashdata('message', 'Something went wrong! Please try again.');
					$this->session->set_flashdata('class', 'error');
					redirect('user/myprofile');
				}
			echo json_encode($data);
		}


public function updateinternartstatus($status,$cart_id) { $this->madmin->updateinternartstatus($status,$cart_id); }

public function logout(){
	$this->session->unset_userdata('user_login');
	redirect('user/index');
}


}
