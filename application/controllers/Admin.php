<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
        parent::__construct();

    }


    public function index(){
  		$data['page']       = 'dashboard';
  		$data['page_name']  = 'dashboard';
  		$this->load->view('admin/layout', $data);
  	}

    public function add_category(){
  		$data['page']       = 'add_category';
  		$data['page_name']  = 'add_category';
  		$this->load->view('admin/layout', $data);
  	}

		public function add_subcategory(){
			$data['page']       = 'add_subcategory';
			$data['page_name']  = 'add_subcategory';
      $data['categories'] = $this->db->get('category')->result_array();
			$this->load->view('admin/layout', $data);
		}

		public function add_subsubcategory(){
			$data['page']       = 'add_subsubcategory';
			$data['page_name']  = 'add_subsubcategory';
			$data['categories'] = $this->db->get('category')->result_array();
			$data['subcatg'] = $this->db->get('subcatg')->result_array();
			$this->load->view('admin/layout', $data);
		}

    public function add_brand(){
      $data['page']       = 'add_brand';
      $data['page_name']  = 'add_brand';
      $this->load->view('admin/layout', $data);
    }

    public function add_banner(){
      $data['page']       = 'add_banner';
      $data['page_name']  = 'add_banner';
      $this->load->view('admin/layout', $data);
    }

		public function add_video(){
			$data['page']       = 'add_video';
			$data['page_name']  = 'add_video';
			$this->load->view('admin/layout', $data);
		}

    public function view_banner() {
        $data['page'] = 'table_view';
        $data['page_name'] = 'view_banner';
        $data['table_columns'] = array('#', 'Banner Image', 'Banner Name', 'Action');
        $this->load->view('admin/layout', $data);
    }

    public function edit_banner($res_id = 0){
    					$data['page']       = 'edit_banner';
    					$data['page_name']  = 'edit_banner';
    					$data['banner']		= $this->db->get_where('bannerone', array('sha1(md5(bannerone_id))' => $res_id))->row_array();
    					$this->load->view('admin/layout', $data);
    				}

    public function add_bannerone() {
      $config['upload_path']   = './assets/images/banner/';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['encrypt_name']   = TRUE;

      $this->load->library('upload', $config);

      $uploaded_files = array();

      // Handle multiple file uploads
      foreach ($_FILES['bannerone_img']['name'] as $key => $file_name) {
          $_FILES['userfile']['name']     = $_FILES['bannerone_img']['name'][$key];
          $_FILES['userfile']['type']     = $_FILES['bannerone_img']['type'][$key];
          $_FILES['userfile']['tmp_name'] = $_FILES['bannerone_img']['tmp_name'][$key];
          $_FILES['userfile']['error']    = $_FILES['bannerone_img']['error'][$key];
          $_FILES['userfile']['size']     = $_FILES['bannerone_img']['size'][$key];

          if (!$this->upload->do_upload('userfile')) {
              $data['message'] = array('error' => $this->upload->display_errors());
              $data['class'] = "error";
              echo json_encode($data);
              die;
          } else {
              $uploaded_files[] = $this->upload->data()['file_name'];
          }
      }

      $insert_data = array(
          'bannerone_title'   => $this->input->post('bannerone_title', TRUE),
          'bannerone_img'     => implode(",", $uploaded_files),
          'created_by'        => $this->session->userdata('admin_login')['user_id'],
          'status'            => 1,
          'create_at'         => time()
      );

      $result = $this->db->insert('bannerone', $insert_data);

      if ($result == TRUE) {
          $this->session->set_flashdata('message', 'Banner added successfully.');
          $this->session->set_flashdata('class', 'success');
          redirect('admin/add_banner');
      } else {
          $data['message'] = "Something went wrong! Please try again.";
          $data['class']   = "error";
          redirect('admin/add_banner');
      }

      echo json_encode($data);
  }

	public function add_videos() {

		$insert_data = array(
			'video_title'   => $this->input->post('video_title', TRUE),
				'video_link'   => $this->input->post('video_link', TRUE),
				'created_by'        => $this->session->userdata('admin_login')['user_id'],
				'status'            => 1,
				'create_at'         => time()
		);

		$result = $this->db->insert('video', $insert_data);

		if ($result == TRUE) {
				$this->session->set_flashdata('message', 'Video added successfully.');
				$this->session->set_flashdata('class', 'success');
				redirect('admin/view_video');
		} else {
				$data['message'] = "Something went wrong! Please try again.";
				$data['class']   = "error";
				redirect('admin/add_video');
		}

		echo json_encode($data);
	}



    public function add_product($res_id = 0){
      $data['page']       = 'add_product';
      $data['page_name']  = 'add_product';
      $data['brands'] = $this->db->get('brand')->result_array();
      $data['categories'] = $this->db->get('category')->result_array();
			$data['subcategories'] = $this->db->get('subcatg')->result_array();
			$data['subsubcategories'] = $this->db->get('subsubcatg')->result_array();
      $this->load->view('admin/layout', $data);
    }

		public function edit_product($res_id = 0){
		      $data['page']       = 'edit_product';
		      $data['page_name']  = 'edit_product';
					$data['brands'] = $this->db->get('brand')->result_array();
 	       	$data['categories'] = $this->db->get('category')->result_array();
 	 				$data['subcategories'] = $this->db->get('subcatg')->result_array();
					$data['subsubcategories'] = $this->db->get('subsubcatg')->result_array();
					$data['product']		= $this->db->get_where('product', array('sha1(md5(pid))' => $res_id))->row_array();
		      $this->load->view('admin/layout', $data);
		    }


				public function edit_products($product_id = '') {
	    // Load the upload library configuration
	    $config['upload_path']   = './assets/images/product/';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $config['encrypt_name']  = TRUE;

	    $this->load->library('upload', $config);

	    // Check if any new image is being uploaded
	    if (!empty(array_filter($_FILES['pimg']['name']))) {
	        // Handle file uploads
	        $product_img_array = array();

	        foreach ($_FILES['pimg']['name'] as $key => $value) {
	            $_FILES['file']['name']     = $_FILES['pimg']['name'][$key];
	            $_FILES['file']['type']     = $_FILES['pimg']['type'][$key];
	            $_FILES['file']['tmp_name'] = $_FILES['pimg']['tmp_name'][$key];
	            $_FILES['file']['error']    = $_FILES['pimg']['error'][$key];
	            $_FILES['file']['size']     = $_FILES['pimg']['size'][$key];

	            if (!$this->upload->do_upload('file')) {
	                $data['message'] = array('error' => $this->upload->display_errors());
	                $data['class'] = "error";
	                echo json_encode($data);
	                die;
	            } else {
	                $upload_data = $this->upload->data();
	                $product_img_array[] = $upload_data['file_name'];
	            }
	        }

	        $pimg = implode(",", $product_img_array);
	    } else {
	        $pimg = $this->input->post('current_pimg', TRUE);
	    }

					$color = $this->input->post('color', TRUE);
	    $update_data = array(
	        'pname'         => $this->input->post('pname', TRUE),
	        'psize'         => $this->input->post('psize', TRUE),
	        'pbrand'        => $this->input->post('pbrand', TRUE),
	        'pcatg'         => $this->input->post('pcatg', TRUE),
	        'psubcatg'      => $this->input->post('psubcatg', TRUE),
						'color'       => implode(',', $color),
					'psubsubcatg'    => $this->input->post('psubsubcatg', TRUE),
	        'pprice'        => $this->input->post('pprice', TRUE),
	        'pofferprice'   => $this->input->post('pofferprice', TRUE),
	        'pstock'        => $this->input->post('pstock', TRUE),
	        'ptax'          => $this->input->post('ptax', TRUE),
	        'pqtype'        => $this->input->post('pqtype', TRUE),
	        'phsn'          => $this->input->post('phsn', TRUE),
					'pspecify'      => $this->input->post('pspecify', TRUE),
	        'pstockstatus'      => $this->input->post('pstockstatus', TRUE),
	    );

	    if (isset($pimg)) {
	        $update_data['pimg'] = $pimg;
	    }

	    $result = $this->db->where('SHA1(MD5(pid))', $product_id)->update('product', $update_data);

	    if ($result) {
	        $this->session->set_flashdata('message', 'Product Updated successfully.');
	        $this->session->set_flashdata('class', 'success');
	        redirect('admin/view_product');
	    } else {
	        $data['message'] = "Something went wrong! Please try again.";
	        $data['class'] = "error";
	        redirect('admin/edit_products/'.$product_id);
	    }

	    echo json_encode($data);
	}



    public function login(){
    		if(!empty($this->session->userdata('admin_login'))){
    			redirect('admin');
    		}
    		$data['page']       = 'login';
    		$data['page_name']  = 'login';
    		$this->load->view('admin/login', $data);
    	}

  public function change_password(){
  $data['page']       = 'change_password';
  $data['page_name']  = 'change_password';
  $this->load->view('admin/layout', $data);
}

public function change_pass($res_id = 0){
    $update_data = array(
        'admin_password'   => password_hash($this->input->post('admin_password', TRUE), PASSWORD_DEFAULT),
        'updated_at'           => time()
    );

    $result = $this->db->where('sha1(md5(admin_id))', $res_id)->update('admin_users', $update_data);

    $data = array();

    if ($result == TRUE) {
			$this->session->set_flashdata('message', 'Password Updated successfully.');
		$this->session->set_flashdata('class', 'success');
        redirect('admin/change_password');
    } else {
        $data['message'] = "Something went wrong! Please try again.";
        $data['class']    = "error";
      redirect('admin/change_password');
    }

    echo json_encode($data);
}

      public function login_post() {
        $login_data = array(
            'admin_email' => $this->input->post('admin_email', TRUE),
            'admin_password' => $this->input->post('admin_password', TRUE),
        );

        $this->load->model('admin_model', 'AdminModel');
        $result = $this->AdminModel->check_login($login_data);

        $data = array();

        if (!empty($result['status']) && $result['status'] === TRUE) {
            $session_array['admin_login'] = array(
                'user_id' => $result['data']->admin_id,
                'user_name' => $result['data']->admin_user,
                'email' => $result['data']->admin_email,
                'phone' => $result['data']->admin_phone,
                'status' => $result['data']->admin_status,
            );

            $this->session->set_userdata($session_array);
            $data['message'] = "Congratulations, You are successfully logged in.";
            $data['class'] = "success";
            	redirect('admin/index');
        } else {
            // Admin login failed
            $data['message'] = "Invalid Email/Password.";
            $data['class'] = "error";
            redirect('admin/index');
        }

        echo json_encode($data);
    }

    public function add_catgories() {
    $config['upload_path']   = './assets/images/catg/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['encrypt_name']   = TRUE;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('catg_img')) {
        $data['message'] = array('error' => $this->upload->display_errors());
        $data['class'] = "error";
        echo json_encode($data);
        die;
    } else {
        $upload_data = $this->upload->data();
    }

    $insert_data = array(
        'catg_name'       => $this->input->post('catg_name', TRUE),
        'catg_img'         => $upload_data['file_name'],
        'created_by'         => $this->session->userdata('admin_login')['user_id'],
        'updated_by'         => $this->session->userdata('admin_login')['user_id'],
        'status'             => 1,
        'create_at'          => time(),
        'update_at'          => time()
    );

    $result = $this->db->insert('category', $insert_data);

    if ($result) {
				$this->session->set_flashdata('message', 'Category Added successfully.');
				$this->session->set_flashdata('class', 'success');
        redirect('admin/add_category');
    } else {
        $data['message'] = "Something went wrong! Please try again.";
        $data['class'] = "error";
        $this->load->view('add_category', $data);
        return;
    }
}

public function add_subcatgories() {
$config['upload_path']   = './assets/images/subcatg/';
$config['allowed_types'] = 'gif|jpg|png';
$config['encrypt_name']   = TRUE;

$this->load->library('upload', $config);

if (!$this->upload->do_upload('subcatg_img')) {
		$data['message'] = array('error' => $this->upload->display_errors());
		$data['class'] = "error";
		echo json_encode($data);
		die;
} else {
		$upload_data = $this->upload->data();
}

$insert_data = array(
		'subcatg_name'       => $this->input->post('subcatg_name', TRUE),
		'catg_name'       => $this->input->post('catg_name', TRUE),
		'subcatg_img'         => $upload_data['file_name'],
		'created_by'         => $this->session->userdata('admin_login')['user_id'],
		'updated_by'         => $this->session->userdata('admin_login')['user_id'],
		'status'             => 1,
		'create_at'          => time(),
		'update_at'          => time()
);

$result = $this->db->insert('subcatg', $insert_data);

if ($result) {
		$this->session->set_flashdata('message', 'Sub Category Added successfully.');
		$this->session->set_flashdata('class', 'success');
		redirect('admin/add_subcategory');
} else {
	$this->session->set_flashdata('message', 'Something went wrong! Please try again.');
	$this->session->set_flashdata('class', 'error');
		$this->load->view('add_subcategory', $data);
		return;
}
}


public function add_ssubcatg() {
$config['upload_path']   = './assets/images/subsubcatg/';
$config['allowed_types'] = 'gif|jpg|png';
$config['encrypt_name']   = TRUE;

$this->load->library('upload', $config);

if (!$this->upload->do_upload('ssubcatg_img')) {
		$data['message'] = array('error' => $this->upload->display_errors());
		$data['class'] = "error";
		echo json_encode($data);
		die;
} else {
		$upload_data = $this->upload->data();
}

$insert_data = array(
	'sscatg_name'       => $this->input->post('sscatg_name', TRUE),
		'subcatg_name'       => $this->input->post('subcatg_name', TRUE),
		'catg_name'       => $this->input->post('catg_name', TRUE),
		'ssubcatg_img'         => $upload_data['file_name'],
		'created_by'         => $this->session->userdata('admin_login')['user_id'],
		'updated_by'         => $this->session->userdata('admin_login')['user_id'],
		'status'             => 1,
		'create_at'          => time(),
		'update_at'          => time()
);

$result = $this->db->insert('subsubcatg', $insert_data);

if ($result) {
		$this->session->set_flashdata('message', 'Sub sub category Added successfully.');
		$this->session->set_flashdata('class', 'success');
		redirect('admin/add_subsubcategory');
} else {
	$this->session->set_flashdata('message', 'Something went wrong! Please try again.');
	$this->session->set_flashdata('class', 'error');
		$this->load->view('add_subsubcategory', $data);
		return;
}
}

public function add_brands() {
$config['upload_path']   = './assets/images/brand/';
$config['allowed_types'] = 'gif|jpg|png';
$config['encrypt_name']   = TRUE;

$this->load->library('upload', $config);

if (!$this->upload->do_upload('brand_img')) {
    $data['message'] = array('error' => $this->upload->display_errors());
    $data['class'] = "error";
    echo json_encode($data);
    die;
} else {
    $upload_data = $this->upload->data();
}

$insert_data = array(
    'brand_name'       => $this->input->post('brand_name', TRUE),
    'brand_img'         => $upload_data['file_name'],
    'created_by'         => $this->session->userdata('admin_login')['user_id'],
    'updated_by'         => $this->session->userdata('admin_login')['user_id'],
    'status'             => 1,
    'create_at'          => time(),
    'update_at'          => time()
);

$result = $this->db->insert('brand', $insert_data);

if ($result) {
    $this->session->set_flashdata('message', 'Brand Added successfully.');
    $this->session->set_flashdata('class', 'success');
    redirect('admin/add_brand');
} else {
	$this->session->set_flashdata('message', 'Something went wrong! Please try again.');
	$this->session->set_flashdata('class', 'error');
    $this->load->view('add_brand', $data);
    return;
}
}

public function add_products() {
    $config['upload_path']   = './assets/images/product/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $config['encrypt_name']   = TRUE;

    $this->load->library('upload', $config);

    $uploaded_files = array();


    foreach ($_FILES['pimg']['name'] as $key => $value) {
        $_FILES['userfile']['name']     = $_FILES['pimg']['name'][$key];
        $_FILES['userfile']['type']     = $_FILES['pimg']['type'][$key];
        $_FILES['userfile']['tmp_name'] = $_FILES['pimg']['tmp_name'][$key];
        $_FILES['userfile']['error']    = $_FILES['pimg']['error'][$key];
        $_FILES['userfile']['size']     = $_FILES['pimg']['size'][$key];

        if (!$this->upload->do_upload('userfile')) {
            $data['message'] = array('error' => $this->upload->display_errors());
            $data['class'] = "error";
            echo json_encode($data);
            die;
        } else {
            $uploaded_files[] = $this->upload->data('file_name');
        }
    }
		$color = $this->input->post('color', TRUE);
 		$pssize = $this->input->post('pssize', TRUE);
    $insert_data = array(
        'pname'       => $this->input->post('pname', TRUE),
        'psize'       => $this->input->post('psize', TRUE),
        'pbrand'      => $this->input->post('pbrand', TRUE),
        'pcatg'       => $this->input->post('pcatg', TRUE),
        'pprice'      => $this->input->post('pprice', TRUE),
				'pofferprice' => $this->input->post('pofferprice', TRUE),
				'color'       => implode(',', $color),
        'pssize'       => implode(',', $pssize),
        'pspecify'    => $this->input->post('pspecify', TRUE),
				'psubcatg'    => $this->input->post('psubcatg', TRUE),
				'psubsubcatg'    => $this->input->post('psubsubcatg', TRUE),
				'pstock'    => $this->input->post('pstock', TRUE),
				'ptax'    => $this->input->post('ptax', TRUE),
				'pqtype'    => $this->input->post('pqtype', TRUE),
				'phsn'    => $this->input->post('phsn', TRUE),
        'created_by'  => $this->session->userdata('admin_login')['user_id'],
        'updated_by'  => $this->session->userdata('admin_login')['user_id'],
        'status'      => 1,
				'pstockstatus' => 1,
        'create_at'   => time(),
        'update_at'   => time()
    );

    $insert_data['pimg'] = implode(',', $uploaded_files);

    $result = $this->db->insert('product', $insert_data);

    if ($result) {
        $this->session->set_flashdata('message', 'Product Added successfully.');
        $this->session->set_flashdata('class', 'success');
        redirect('admin/add_product');
    } else {
        $data['message'] = "Something went wrong! Please try again.";
        $data['class'] = "error";
        $this->load->view('add_product', $data);
        return;
    }
}

public function edit_banners($banner_id = '') {
    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Load the upload library configuration
        $config['upload_path']   = './assets/images/banner/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['encrypt_name']  = TRUE;

        $this->load->library('upload', $config);

        // Check if a file is being uploaded
        if (!empty($_FILES['bannerone_img']['name'])) {
            if (!$this->upload->do_upload('bannerone_img')) {
                // Handle upload errors
                $data['message'] = array('error' => $this->upload->display_errors());
                $data['class'] = "error";
                echo json_encode($data);
                die;
            } else {
                // File uploaded successfully
                $upload_data = $this->upload->data();
                $banner_img = $upload_data['file_name'];
            }
        } else {
            // No new file uploaded, use the existing image name
            $banner_img = $this->input->post('current_banner_img', TRUE);
        }

        // Update data
        $update_data = array(
            'bannerone_title'   => $this->input->post('bannerone_title', TRUE),
        );

        // Check if a new image is uploaded
        if (!empty($_FILES['bannerone_img']['name'])) {
            $update_data['bannerone_img'] = $banner_img;
        }

        // Update the database
        $result = $this->db->where('SHA1(MD5(bannerone_id))', $banner_id)->update('bannerone', $update_data);

        // Handle the result
        if ($result) {
            // Banner updated successfully
            $this->session->set_flashdata('message', 'Banner Updated successfully.');
            $this->session->set_flashdata('class', 'success');
            redirect('admin/view_banner');
        } else {
            // Something went wrong during the update
            $data['message'] = "Something went wrong! Please try again.";
            $data['class'] = "error";
            redirect('admin/edit_banner/'.$banner_id);
        }

        // Output JSON response
        echo json_encode($data);
    } else {
        $banner = $this->get_banner_by_id($banner_id);
        $data['banner'] = $banner;
    }
}


public function edit_catgories($res_id = 0) {
    $config['upload_path']   = './assets/images/catg/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['encrypt_name']   = TRUE;

    $this->load->library('upload', $config);

    // Check if a new image is being uploaded
    if (!empty($_FILES['catg_img']['name'])) {
        if (!$this->upload->do_upload('catg_img')) {
            $data['message'] = $this->upload->display_errors('', '');
            $data['class'] = "error";
            echo json_encode($data);
            die;
        } else {
            $upload_data = $this->upload->data();
            $catg_img = $upload_data['file_name'];
        }
    } else {
        // No new image uploaded, use the current image name
        $catg_img = $this->input->post('current_catg_img', TRUE);
    }

    // Update data
    $update_data = array(
        'catg_name'   => $this->input->post('catg_name', TRUE),
        'updated_by'  => $this->session->userdata('admin_login')['user_id'],
        'status'      => 1,
        'update_at'   => time()
    );

    // Check if a new image was uploaded, then update the 'catg_img' field
    if (isset($catg_img)) {
        $update_data['catg_img'] = $catg_img;
    }

    // Update the database
    $result = $this->db->where('SHA1(MD5(catg_id))', $res_id)->update('category', $update_data);

    // Handle the result
    if ($result == TRUE) {
        $this->session->set_flashdata('message', 'Category updated successfully.');
        $this->session->set_flashdata('class', 'success');
        redirect('admin/view_category');
    } else {
        $this->session->set_flashdata('message', 'Something went wrong! Please try again.');
        $this->session->set_flashdata('class', 'error');
        redirect('admin/edit_category/'.$res_id);
    }
}



public function edit_brands($res_id = 0) {
    $config['upload_path']   = './assets/images/brand/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['encrypt_name']   = TRUE;

    $this->load->library('upload', $config);

    // Check if a new image is being uploaded
    if (!empty($_FILES['brand_img']['name'])) {
        if (!$this->upload->do_upload('brand_img')) {
            $data['message'] = $this->upload->display_errors('', '');
            $data['class'] = "error";
            echo json_encode($data);
            die;
        } else {
            $upload_data = $this->upload->data();
            $brand_img = $upload_data['file_name'];
        }
    } else {
        // No new image uploaded, use the current image name
        $brand_img = $this->input->post('current_brand_img', TRUE);
    }

    // Update data
    $update_data = array(
        'brand_name'   => $this->input->post('brand_name', TRUE),
        'updated_by'  => $this->session->userdata('admin_login')['user_id'],
        'status'      => 1,
        'update_at'   => time()
    );


    if (isset($brand_img)) {
        $update_data['brand_img'] = $brand_img;
    }

    // Update the database
    $result = $this->db->where('SHA1(MD5(brand_id))', $res_id)->update('brand', $update_data);

    // Handle the result
    if ($result == TRUE) {
        $this->session->set_flashdata('message', 'Category updated successfully.');
        $this->session->set_flashdata('class', 'success');
        redirect('admin/view_brand');
    } else {
        $this->session->set_flashdata('message', 'Something went wrong! Please try again.');
        $this->session->set_flashdata('class', 'error');
        redirect('admin/edit_brand/'.$res_id);
    }
}


public function edit_subsubcatgories($res_id = 0) {
    $config['upload_path']   = './assets/images/subsubcatg/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['encrypt_name']   = TRUE;

    $this->load->library('upload', $config);

    // Check if a new image is being uploaded
    if (!empty($_FILES['ssubcatg_img']['name'])) {
        if (!$this->upload->do_upload('ssubcatg_img')) {
            $data['message'] = $this->upload->display_errors('', '');
            $data['class'] = "error";
            echo json_encode($data);
            die;
        } else {
            $upload_data = $this->upload->data();
            $ssubcatg_img = $upload_data['file_name'];
        }
    } else {
        // No new image uploaded, use the current image name
        $ssubcatg_img = $this->input->post('ssubcatg_img', TRUE);
    }

    // Update data
    $update_data = array(
			'sscatg_name'   => $this->input->post('sscatg_name', TRUE),
			'subcatg_name'   => $this->input->post('subcatg_name', TRUE),
        'catg_name'   => $this->input->post('catg_name', TRUE),
        'updated_by'  => $this->session->userdata('admin_login')['user_id'],
        'status'      => 1,
        'update_at'   => time()
    );

    // Check if a new image was uploaded, then update the 'catg_img' field
    if (isset($ssubcatg_img)) {
        $update_data['ssubcatg_img'] = $ssubcatg_img;
    }

    // Update the database
    $result = $this->db->where('SHA1(MD5(ssid))', $res_id)->update('subsubcatg', $update_data);

    // Handle the result
    if ($result == TRUE) {
        $this->session->set_flashdata('message', 'Sub Sub Category updated successfully.');
        $this->session->set_flashdata('class', 'success');
        redirect('admin/view_subsubcategory');
    } else {
        $this->session->set_flashdata('message', 'Something went wrong! Please try again.');
        $this->session->set_flashdata('class', 'error');
        redirect('admin/edit_subsubcatg/'.$res_id);
    }
}


	public function edit_videos($res_id = 0) {
    // Update data
    $update_data = array(
        'video_title' => $this->input->post('video_title', TRUE),
        'video_link' => $this->input->post('video_link', TRUE),
        'created_by' => $this->session->userdata('admin_login')['user_id'],
        'status' => 1,
        'create_at' => time()
    );

    // Update the database
		  $result = $this->db->where('SHA1(MD5(video_id))', $res_id)->update('video', $update_data);

    // Handle the result
    if ($result == TRUE) {
        $this->session->set_flashdata('message', 'Category updated successfully.');
        $this->session->set_flashdata('class', 'success');
        redirect('admin/view_video');
    } else {
        $this->session->set_flashdata('message', 'Something went wrong! Please try again.');
        $this->session->set_flashdata('class', 'error');
        redirect('admin/edit_vide/' . $res_id);
    }
}


public function edit_subcatgories($res_id = 0) {
    $config['upload_path']   = './assets/images/subcatg/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['encrypt_name']   = TRUE;

    $this->load->library('upload', $config);

    // Check if a new image is being uploaded
    if (!empty($_FILES['subcatg_img']['name'])) {
        if (!$this->upload->do_upload('subcatg_img')) {
            $data['message'] = $this->upload->display_errors('', '');
            $data['class'] = "error";
            echo json_encode($data);
            die;
        } else {
            $upload_data = $this->upload->data();
            $subcatg_img = $upload_data['file_name'];
        }
    } else {
        // No new image uploaded, use the current image name
        $subcatg_img = $this->input->post('current_subcatg_img', TRUE);
    }

    // Update data
    $update_data = array(
			'subcatg_name'   => $this->input->post('subcatg_name', TRUE),
        'catg_name'   => $this->input->post('catg_name', TRUE),
        'updated_by'  => $this->session->userdata('admin_login')['user_id'],
        'status'      => 1,
        'update_at'   => time()
    );

    // Check if a new image was uploaded, then update the 'catg_img' field
    if (isset($subcatg_img)) {
        $update_data['subcatg_img'] = $subcatg_img;
    }

    // Update the database
    $result = $this->db->where('SHA1(MD5(subcatg_id))', $res_id)->update('subcatg', $update_data);

    // Handle the result
    if ($result == TRUE) {
        $this->session->set_flashdata('message', 'Category updated successfully.');
        $this->session->set_flashdata('class', 'success');
        redirect('admin/view_subcategory');
    } else {
        $this->session->set_flashdata('message', 'Something went wrong! Please try again.');
        $this->session->set_flashdata('class', 'error');
        redirect('admin/edit_subcatg/'.$res_id);
    }
}

public function view_subcategory() {
    $data['page'] = 'table_view';
    $data['page_name'] = 'view_subcategory';
    $data['table_columns'] = array('#', 'Image', 'Name', 'Date & Time', 'Action');
    $this->load->view('admin/layout', $data);
}

public function view_subsubcategory() {
    $data['page'] = 'table_view';
    $data['page_name'] = 'view_subsubcategory';
    $data['table_columns'] = array('#', 'Image', 'Name', 'Date & Time', 'Action');
    $this->load->view('admin/layout', $data);
}

public function view_category() {
    $data['page'] = 'table_view';
    $data['page_name'] = 'view_category';
    $data['table_columns'] = array('#', 'Category Image', 'Category Name', 'Date & Time', 'Action');
    $this->load->view('admin/layout', $data);
}

public function view_brand() {
    $data['page'] = 'table_view';
    $data['page_name'] = 'view_brand';
  $data['table_columns'] = array('#', 'Brand Image', 'Brand Name', 'Date & Time', 'Action');
    $this->load->view('admin/layout', $data);
}

public function view_video() {
    $data['page'] = 'table_view';
    $data['page_name'] = 'view_video';
  $data['table_columns'] = array('#', 'Video Title', 'Link', 'Date & Time', 'Action');
    $this->load->view('admin/layout', $data);
}

public function user() {
    $data['page'] = 'table_view';
    $data['page_name'] = 'user';
		$data['table_columns'] = array('#', 'Name', 'Email', 'Mobile', 'Date & Time', 'Action');
    $this->load->view('admin/layout', $data);
}


public function view_product() {
    $data['page'] = 'table_view';
    $data['page_name'] = 'view_product';
    $data['table_columns'] = array('#', 'Product Image', 'Product Name', 'Price', 'Date & Time', 'Action');
    $this->load->view('admin/layout', $data);
}

public function orders() {
    $data['page'] = 'table_view';
    $data['page_name'] = 'orders';
    $data['table_columns'] = array('#', 'Order Date', 'Name', 'Mobile Number', 'Address', 'Action');
    $this->load->view('admin/layout', $data);
}

public function edit_category($res_id = 0){
      $data['page']       = 'edit_category';
      $data['page_name']  = 'edit_category';
      $data['category']		= $this->db->get_where('category', array('sha1(md5(catg_id))' => $res_id))->row_array();
      $this->load->view('admin/layout', $data);
    }



		public function view_order($res_id = 0){
		      $data['page']       = 'view_order';
		      $data['page_name']  = 'view_order';
					$data['cart'] = $this->db
    ->select('cart.*, product.pimg')
    ->from('cart')
    ->join('product', 'product.pid = cart.pid', 'left')
    ->where('SHA1(MD5(cart.cart_id))', $res_id)
    ->get()
    ->row_array();
		      $this->load->view('admin/layout', $data);
		    }


		public function edit_brand($res_id = 0){
		      $data['page']       = 'edit_brand';
		      $data['page_name']  = 'edit_brand';
		      $data['brand']		= $this->db->get_where('brand', array('sha1(md5(brand_id))' => $res_id))->row_array();
		      $this->load->view('admin/layout', $data);
		    }

		public function edit_subcatg($res_id = 0){
		      $data['page']       = 'edit_subcatg';
		      $data['page_name']  = 'edit_subcatg';
					$data['categories'] = $this->db->get('category')->result_array();
		      $data['subcategory']		= $this->db->get_where('subcatg', array('sha1(md5(subcatg_id))' => $res_id))->row_array();
		      $this->load->view('admin/layout', $data);
		    }

				public function edit_video($res_id = 0){
							$data['page']       = 'edit_video';
							$data['page_name']  = 'edit_video';
							$data['video']		= $this->db->get_where('video', array('sha1(md5(video_id))' => $res_id))->row_array();
							$this->load->view('admin/layout', $data);
						}

				public function edit_subsubcatg($res_id = 0){
				      $data['page']       = 'edit_subsubcatg';
				      $data['page_name']  = 'edit_subsubcatg';
							$data['categories'] = $this->db->get('category')->result_array();
				      $data['subcatg']		= $this->db->get('subcatg')->result_array();
							$data['subsubcategory']		= $this->db->get_where('subsubcatg', array('sha1(md5(ssid))' => $res_id))->row_array();
				      $this->load->view('admin/layout', $data);
				    }

public function getdata(){
  switch ($this->input->post('page_name')){
    case "view_category":
        $tabledata['table'] = 'category';
        $tabledata['column_order'] = array(null, 'catg_img', 'catg_name', 'create_at', 'catg_id');
        $tabledata['column_search'] = array('catg_id', 'catg_img', 'catg_name', 'create_at');
        $tabledata['order'] = array('catg_id' => 'desc');
        $tabledata['status'] = "status";
        break;
				case "view_subcategory":
		        $tabledata['table'] = 'subcatg';
		        $tabledata['column_order'] = array(null, 'subcatg_img', 'subcatg_name', 'create_at', 'subcatg_id');
		        $tabledata['column_search'] = array('subcatg_id', 'subcatg_img', 'subcatg_name', 'create_at');
		        $tabledata['order'] = array('subcatg_id' => 'desc');
		        $tabledata['status'] = "status";
		        break;
			case "view_subsubcategory":
					$tabledata['table'] = 'subsubcatg';
					$tabledata['column_order'] = array(null, 'ssubcatg_img', 'sscatg_name', 'create_at', 'ssid');
					$tabledata['column_search'] = array('ssid', 'ssubcatg_img', 'sscatg_name', 'create_at');
					$tabledata['order'] = array('ssid' => 'desc');
					$tabledata['status'] = "status";
					break;
      case "view_brand":
        $tabledata['table'] = 'brand';
        $tabledata['column_order'] = array(null, 'brand_img', 'brand_name', 'create_at', 'brand_id');
        $tabledata['column_search'] = array('brand_id', 'brand_img', 'brand_name', 'create_at');
        $tabledata['order'] = array('brand_id' => 'desc');
        $tabledata['status'] = "status";
        break;
				case "view_video":
					$tabledata['table'] = 'video';
					$tabledata['column_order'] = array(null, 'video_title', 'video_link', 'create_at', 'video_id');
					$tabledata['column_search'] = array('video_id', 'video_title', 'video_link', 'create_at');
					$tabledata['order'] = array('video_id' => 'desc');
					$tabledata['status'] = "status";
					break;
				case "orders":
					$tabledata['table'] = 'order';
					$tabledata['column_order'] = array(null, 'create_at', 'user_name', 'user_phone', 'user_address', 'order_id');
					$tabledata['column_search'] = array('order_id', 'user_name', 'user_phone', 'create_at');
					$tabledata['order'] = array('order_id' => 'desc');
					$tabledata['status'] = "order_status";
					break;
				case "user":
					$tabledata['table'] = 'login';
					$tabledata['column_order'] = array(null, 'user_name', 'user_email', 'user_phone', 'create_at', 'user_id');
					$tabledata['column_search'] = array('user_id', 'user_name', 'user_email', 'user_phone', 'create_at');
					$tabledata['order'] = array('user_id' => 'desc');
					$tabledata['status'] = "status";
					break;
        case "view_product":
          $tabledata['table'] = 'product';
          $tabledata['column_order'] = array(null, 'pimg', 'pname', 'pofferprice', 'create_at', 'pid');
          $tabledata['column_search'] = array('pid', 'pimg', 'pname', 'pofferprice', 'create_at');
          $tabledata['order'] = array('pid' => 'desc');
          $tabledata['status'] = "status";
          break;
          case "view_banner":
					$tabledata['table'] = 'bannerone';
					$tabledata['column_order'] = array(null, 'bannerone_img', 'bannerone_title', 'status', 'bannerone_id');
					$tabledata['column_search'] = array('bannerone_id', 'bannerone_img', 'bannerone_title',  'create_at');
					$tabledata['order'] = array('bannerone_id' => 'desc');
					$tabledata['status'] = "status";
					break;

      default:
      die;
  }
  $this->load->model('admindatatable');

  $data = $row = array();

  $restData = $this->admindatatable->getRows($this->input->post(),$tabledata);

      $i = $this->input->post('start');
  $data = array();
      foreach($restData as $rest){
    $i++;
    $datas = array();
    array_push($datas, $i);
    foreach($tabledata['column_order'] as $column_order){
      if($column_order != null){
        switch ($column_order){

      case "catg_img":
      $fileName = $rest->catg_img;
      if ($fileName) {
          $logo = '<img class="thumbnail" src="'.base_url().'assets/images/catg/'.$fileName.'"/>';
          array_push($datas, $logo);
      } else {
          array_push($datas, 'Invalid image data');
      }
      break;
			case "subcatg_img":
      $fileName = $rest->subcatg_img;
      if ($fileName) {
          $logo = '<img class="thumbnail" src="'.base_url().'assets/images/subcatg/'.$fileName.'"/>';
          array_push($datas, $logo);
      } else {
          array_push($datas, 'Invalid image data');
      }
      break;
			case "ssubcatg_img":
      $fileName = $rest->ssubcatg_img;
      if ($fileName) {
          $logo = '<img class="thumbnail" src="'.base_url().'assets/images/subsubcatg/'.$fileName.'"/>';
          array_push($datas, $logo);
      } else {
          array_push($datas, 'Invalid image data');
      }
      break;
      case "pimg":
      $fileNames = explode(',', $rest->pimg);

      if (!empty($fileNames)) {
          $firstImage = $fileNames[0];
          $logo = '<img class="thumbnail" src="' . base_url() . 'assets/images/product/' . $firstImage . '"/>';
          array_push($datas, $logo);
      } else {
          array_push($datas, 'No images available');
      }
      break;
      case "bannerone_img":
      $fileNames = explode(',', $rest->bannerone_img);

      if (!empty($fileNames)) {
          $firstImage = $fileNames[0];
          $logo = '<img class="thumbnail" src="' . base_url() . 'assets/images/banner/' . $firstImage . '"/>';
          array_push($datas, $logo);
      } else {
          array_push($datas, 'No images available');
      }
      break;
      case "brand_img":
      $fileName = $rest->brand_img;
      if ($fileName) {
          $logo = '<img class="thumbnail" src="'.base_url().'assets/images/brand/'.$fileName.'"/>';
          array_push($datas, $logo);
      } else {
          array_push($datas, 'Invalid image data');
      }
      break;

          case "create_at":
          date_default_timezone_set('Asia/Kolkata');
          $created = date('d-m-Y H:i:s', $rest->create_at);
            array_push($datas, $created);
          break;
          case "catg_id":
            $edit	 = '<a class="btn-sm app-btn-primary" href="'.base_url().'admin/edit_category/'.sha1(md5($rest->catg_id)).'">Edit</a><button data-id="'.$rest->catg_id.'" type="button" data-toggle="tooltip" data-placement="top" title="Delete" class="btn-sm app-btn-danger text-danger delete-button"><i class="fa-solid fa-trash-can"></i></button>';
            array_push($datas, $edit);
          break;
          case "brand_id":
            $edit	 = '<a class="btn-sm app-btn-primary" href="'.base_url().'admin/edit_brand/'.sha1(md5($rest->brand_id)).'">Edit</a><button data-id="'.$rest->brand_id.'" type="button" data-toggle="tooltip" data-placement="top" title="Delete" class="btn-sm app-btn-danger text-danger delete-brand-button"><i class="fa-solid fa-trash-can"></i></button>';
            array_push($datas, $edit);
          break;
          case "pid":
            $edit	 = '<a class="btn-sm app-btn-primary" href="'.base_url().'admin/edit_product/'.sha1(md5($rest->pid)).'">Edit</a><button data-id="'.$rest->pid.'" type="button" data-toggle="tooltip" data-placement="top" title="Delete" class="btn-sm app-btn-danger text-danger delete-product-button"><i class="fa-solid fa-trash-can"></i></button>';
            array_push($datas, $edit);
          break;
					case "user_id":
						$edit	 = '<button data-id="'.$rest->user_id.'" type="button" data-toggle="tooltip" data-placement="top" title="Delete" class="btn-sm app-btn-danger text-danger delete-user-button"><i class="fa-solid fa-trash-can"></i></button>';
						array_push($datas, $edit);
					break;
					case "video_id":
						$edit	 = '<a class="btn-sm app-btn-primary" href="'.base_url().'admin/edit_video/'.sha1(md5($rest->video_id)).'">Edit</a><button data-id="'.$rest->video_id.'" type="button" data-toggle="tooltip" data-placement="top" title="Delete" class="btn-sm app-btn-danger text-danger delete-video-button"><i class="fa-solid fa-trash-can"></i></button>';
						array_push($datas, $edit);
					break;
					case "subcatg_id":
						$edit	 = '<a class="btn-sm app-btn-primary" href="'.base_url().'admin/edit_subcatg/'.sha1(md5($rest->subcatg_id)).'">Edit</a><button data-id="'.$rest->subcatg_id.'" type="button" data-toggle="tooltip" data-placement="top" title="Delete" class="btn-sm app-btn-danger text-danger delete-sub-button"><i class="fa-solid fa-trash-can"></i></button>';
						array_push($datas, $edit);
					break;
					case "ssid":
						$edit	 = '<a class="btn-sm app-btn-primary" href="'.base_url().'admin/edit_subsubcatg/'.sha1(md5($rest->ssid)).'">Edit</a><button data-id="'.$rest->ssid.'" type="button" data-toggle="tooltip" data-placement="top" title="Delete" class="btn-sm app-btn-danger text-danger delete-subsub-button"><i class="fa-solid fa-trash-can"></i></button>';
						array_push($datas, $edit);
					break;
          case "bannerone_id":
						$edit	 = '<a class="btn-sm app-btn-primary" href="'.base_url().'admin/edit_banner/'.sha1(md5($rest->bannerone_id)).'">Edit</a><button data-id="'.$rest->bannerone_id.'" type="button" data-toggle="tooltip" data-placement="top" title="Delete" class="btn-sm app-btn-danger text-danger delete-banner_button"><i class="fa-solid fa-trash-can"></i></button>';
						array_push($datas, $edit);
					break;
          case "status":
            $status = ($rest->status == 1)?'<span data-id = "'.sha1(md5($rest->bannerone_id)).'" data-toggle="tooltip" data-placement="top" title="Change Status to Inactive" class = "badge bg-success statucchange">Active</span>':'<span data-id = "'.sha1(md5($rest->bannerone_id)).'" data-placement="top" title="Change Status to Active" class = "badge bg-danger statucchange">Inactive</span>';
          break;
          default:
          array_push($datas, $rest->$column_order);
        }
      }
    }
    array_push($data, $datas);
      }

  $output = array(
          "draw" => $this->input->post('draw'),
          "recordsTotal" => $this->admindatatable->countAll($tabledata),
          "recordsFiltered" => $this->admindatatable->countFiltered($this->input->post(),$tabledata),
          "data" => $data,
      );
  echo json_encode($output);
}

public function delete_data($page_name = "", $res_id = 0) {
  if (!empty($page_name) && $res_id > 0) {
      switch ($page_name) {
          case "delete_catg":
              $idname = 'catg_id';
              $res_table = 'category';
              break;
					case "delete_subsub":
              $idname = 'ssid';
              $res_table = 'subsubcatg';
              break;
          case "delete_brand":
              $idname = 'brand_id';
              $res_table = 'brand';
              break;
							case "delete_user":
		              $idname = 'user_id';
		              $res_table = 'login';
		              break;
          case "delete_product":
                  $idname = 'pid';
                  $res_table = 'product';
                  break;
					case "delete_video":
                  $idname = 'video_id';
                  $res_table = 'video';
                  break;
					case "delete_subcatg":
                  $idname = 'subcatg_id';
                  $res_table = 'subcatg';
                  break;
          case "bannerone":
            $idname = 'bannerone_id';
            $res_table = 'bannerone';
            break;
          default:
              $data['class'] = 'error';
              $data['message'] = 'Invalid table name.';
              echo json_encode($data);
              return;
      }

      // Use delete method to delete the record
      $result = $this->db->delete($res_table, array($idname => $res_id));

      if ($result) {
          $data['class'] = 'success';
          $data['message'] = 'Deleted Successfully.';
      } else {
          $data['class'] = 'error';
          $data['message'] = 'Something went wrong! Please try again.';
      }
  } else {
      $data['class'] = 'error';
      $data['message'] = 'Invalid parameters.';
  }

  echo json_encode($data);
}



    public function logout(){
  		$this->session->unset_userdata('admin_login');
  		redirect('admin/login');
  	}

}
