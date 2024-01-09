<?php

class User_model extends CI_Model {

    protected $User_table_name = "login";

    /**
     * Insert User Data in Database
     * @param: {array} userData
     */
    public function insert_user($userData) {
        // Hash the password before inserting it into the database
        $userData['user_password'] = password_hash($userData['user_password'], PASSWORD_DEFAULT);

        return $this->db->insert($this->User_table_name, $userData);
    }

    /**
     * Check User Login in Database
     * @param: {array} userData
     */
    public function check_login($userData) {
        /**
         * First Check Email is Exists in Database
         */
        $query = $this->db->get_where($this->User_table_name, array('user_email' => $userData['user_email'], 'status' => '1'));

        if ($this->db->affected_rows() > 0) {
            $password = $query->row('user_password');

            // Use password_verify to check the hashed password
            if (password_verify($userData['user_password'], $password)) {
                return ['status' => TRUE, 'data' => $query->row()];
            } else {
                return ['status' => FALSE, 'data' => FALSE];
            }
        } else {
            return ['status' => FALSE, 'data' => FALSE];
        }
    }
}
