<?php

class Admin_model extends CI_Model {

    const TABLE_NAME = "admin_users";

    /**
     * Insert Admin Data in Database
     * @param: {array} adminData
     */
    public function insert_admin($adminData) {
        return $this->db->insert(self::TABLE_NAME, $adminData);
    }

    /**
     * Check Admin Login in Database
     * @param: {array} adminData
     */
    public function check_login($adminData) {
        // Error handling for database query
        try {
            $query = $this->db->get_where(self::TABLE_NAME, array('admin_email' => $adminData['admin_email'], 'delete_status' => '1'));
        } catch (Exception $e) {
            return ['status' => FALSE, 'data' => FALSE];
        }

        if ($this->db->affected_rows() > 0) {
            $password = $query->row('admin_password');

            if (password_verify($adminData['admin_password'], $password) === TRUE) {
                return ['status' => TRUE, 'data' => $query->row()];
            } else {
                return ['status' => FALSE, 'data' => FALSE];
            }
        } else {
            return ['status' => FALSE, 'data' => FALSE];
        }
    }
}
