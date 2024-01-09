<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madmin extends CI_model {

  function __construct()
    {
    parent::__construct();
    }

    public function listbannerone() {
        $this->db->select('*');
        $this->db->from('bannerone');
        $this->db->limit(3);
        $query = $this->db->get();
        return $query->result();

      }

      public function listaddressbyid() {
        $user_id = $this->session->userdata('user_login')['user_id'];
        $this->db->select('*');
        $this->db->from('login');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get();
        return $query->result();
        }

      public function listbannerrandom() {
          $this->db->select('*');
          $this->db->from('bannerone');
           $this->db->order_by('RAND()');
          $this->db->limit(3);
          $query = $this->db->get();
          return $query->result();

        }

      public function listexplore() {
          $this->db->select('*');
          $this->db->from('category');
          $this->db->limit(3);
          $query = $this->db->get();
          return $query->result();
        }

        public function listcatg() {
            $this->db->select('*');
            $this->db->from('category');
            $query = $this->db->get();
            return $query->result();
          }

          public function listcatghead() {
              $this->db->select('*');
              $this->db->from('category');
              $this->db->limit(5);
              $query = $this->db->get();
              return $query->result();
            }

          public function listsubcatg() {
              $this->db->select('*');
              $this->db->from('subcatg');
              $this->db->limit(5);
              $query = $this->db->get();
              return $query->result();
            }


        public function listbrand() {
            $this->db->select('*');
            $this->db->from('brand');
            $query = $this->db->get();
            return $query->result();
          }

          public function listvideo() {
              $this->db->select('*');
              $this->db->from('video');
               $this->db->order_by('video_id', 'DESC');
              $this->db->limit(1);
              $query = $this->db->get();
              return $query->result();
            }

            public function listlastorder() {
                $this->db->select('*');
                $this->db->from('order');
                $this->db->order_by('order_id', 'DESC');
                $this->db->limit(1);
                $query = $this->db->get();
                return $query->result();
            }


          public function listproductbyname($catg_name) {
            $this->db->select('*');
            $this->db->from('product');
            $this->db->where('pcatg', $catg_name);
            $query = $this->db->get();
            return $query->result();
          }

          public function listsubsubcatg($ssid) {
                $this->db->select('*');
                $this->db->from('subsubcatg');
                $this->db->where('ssid', $ssid);
                $query = $this->db->get();

                return $query->result();
            }

          public function listsubbyname($subcatg_name) {
            $this->db->select('*');
            $this->db->from('subsubcatg');
            $this->db->where('subcatg_name', $subcatg_name);
            $query = $this->db->get();
            return $query->result();
          }

          public function listsubbynamebread($subcatg_name) {
            $this->db->select('*');
            $this->db->from('subsubcatg');
            $this->db->where('subcatg_name', $subcatg_name);
            $this->db->limit(1);
            $query = $this->db->get();
            return $query->result();
          }

          public function listbrandbyname($brand_name) {
            $this->db->select('*');
            $this->db->from('product');
            $this->db->where('pbrand', $brand_name);
            $query = $this->db->get();
            return $query->result();
          }

          public function listproductbyid($pid) {
            $this->db->select('*');
            $this->db->from('product');
            $this->db->where('pid', $pid);
            $query = $this->db->get();
            return $query->result();
          }

          public function listproductbycatg($catg_name) {
            $this->db->select('*');
            $this->db->from('product');
            $this->db->where('pcatg', $catg_name);
            $this->db->limit(1);
            $query = $this->db->get();
            return $query->result();
          }

          public function listsubbycatg($catg_name) {
            $this->db->select('*');
            $this->db->from('subcatg');
            $this->db->where('catg_name', $catg_name);
            $query = $this->db->get();
            return $query->result();
          }

          public function listsubsubbycatg($catg_name) {
            $this->db->select('*');
            $this->db->from('subsubcatg');
            $this->db->where('catg_name', $catg_name);
            $query = $this->db->get();
            return $query->result();
          }

          public function listproductbysubsub($psubsubcatg) {
            $this->db->select('*');
            $this->db->from('product');
            $this->db->where('psubsubcatg', $psubsubcatg);
            $query = $this->db->get();
            return $query->result();
          }

          public function edituserbyid($user_id) {
            $this->db->select('*');
            $this->db->from('login');
            $this->db->where('user_id', $user_id);
            $query = $this->db->get();
            return $query->result();
          }

      public function updateinternartstatus($status,$cart_id) {

                            $data = array(
                              'status'=> $status
                             );
                            $this->db->where('cart_id',$cart_id);
                            $this->db->update('cart',$data);

                            if($this->db->affected_rows() > 0 ) {
                              redirect('user/cart/s');
                            } else {
                              redirect('user/cart/f');
                            }

                          }

      public function count_listallcart() {
        $user_id = $this->session->userdata('user_login')['user_id'];
                                      $this->db->select('*');
                                      $this->db->from('cart');
                                      $this->db->where('user_id', $user_id);
                                      $this->db->where('status', 1);
                                      $query = $this->db->get();
                                      return $query->num_rows();
                                      }

      public function listcartbyid() {
      $user_id = $this->session->userdata('user_login')['user_id'];

      $this->db->select('cart.*, product.pimg');
      $this->db->from('cart');
      $this->db->join('product', 'cart.pid = product.pid', 'left');
      $this->db->where('cart.user_id', $user_id);
      $this->db->where('cart.status', 1);
      $query = $this->db->get();
      return $query->result();
  }

  public function listorderbyid() {
    $user_id = $this->session->userdata('user_login')['user_id'];

    $this->db->select('*');
    $this->db->from('order');
    $this->db->join('orderdetail', 'order.oid = orderdetail.oid', 'left');
    $this->db->where('order.user_id', $user_id);
    $this->db->where('order.status', 1);
    $query = $this->db->get();

    return $query->result();
}

public function searchProducts($query) {
		// echo "Query: $query";
     $this->db->select('*');
    $this->db->like('pname', $query);
    $this->db->or_like('pcatg', $query);
    $this->db->or_like('psubcatg', $query);
    $this->db->or_like('psubsubcatg', $query);

    $result = $this->db->get('product');
    return $result->result();
}

public function get_search_results($query) {
       $this->db->select('pname');
       $this->db->like('pname', $query);
       $query = $this->db->get('product');

       return $query->result();
   }

          public function listallproduct() {
              $this->db->select('*');
              $this->db->from('product');
              $query = $this->db->get();
              return $query->result();
          }

          public function update_cart_quantity($cart_id, $quantity)
          {
              $data = array('cqty' => $quantity);
              $this->db->where('cart_id', $cart_id);
              return $this->db->update('cart', $data);
          }

        //   public function getProductsByPriceRangeAndSize($minPrice, $maxPrice, $pssize) {
        //     $this->db->select('*');
        //     $this->db->from('product');
        //     $this->db->where('status', '1');
        //
        //     if (!empty($minPrice) && !empty($maxPrice)) {
        //         $this->db->where('pofferprice >=', $minPrice);
        //         $this->db->where('pofferprice <=', $maxPrice);
        //     }
        //
        //     if (!empty($pssize)) {
        //         $this->db->where('pssize', $pssize);
        //     }
        //
        //     $query = $this->db->get();
        //     return $query->result();
        // }


        public function filterProducts($minPrice, $maxPrice, $selectedSize, $selectedBrands) {

          $this->db->select('*');
          $this->db->from('product');
          $this->db->where('status', '1');

          if (!empty($minPrice) && !empty($maxPrice)) {
              $this->db->where('pofferprice >=', $minPrice);
              $this->db->where('pofferprice <=', $maxPrice);
          }

          if (!empty($selectedSize)) {
              $this->db->where('pssize', $selectedSize);
          }

          if (!empty($selectedBrands)) {
              $this->db->where_in('pbrand', $selectedBrands);
          }

          $query = $this->db->get();
          return $query->result();
      }



   }
