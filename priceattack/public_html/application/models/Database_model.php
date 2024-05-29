<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Database_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    public function get_data_from_db($value1, $value2) {
        $sql = "SELECT * FROM room_reg WHERE busi_code = ? AND room_code = ?";
        $query = $this->db->query($sql, array($value1, $value2));
        return $query->result();
    }

    public function get_room_data_from_db($value1, $value2) {
        $sql = "SELECT * FROM room_reg a, price_setting b WHERE a.busi_code = ? AND a.room_code = ? AND a.busi_code = b.busi_code AND a.room_code = b.room_code" ;
        $query = $this->db->query($sql, array($value1, $value2));
        return $query->result();
    }    

    public function register_user($data) {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        return $this->db->insert('users', $data);
    }

    public function check_user_id_exists($user_id) {
        $query = $this->db->get_where('users', array('user_id' => $user_id));
        if (empty($query->row_array())) {
            return false;  // 사용 가능한 아이디
        } else {
            return true;  // 이미 존재하는 아이디
        }
    }

    public function check_user_phone_exists($ac_phone) {
        $query = $this->db->get_where('users', array('phone_number' => $ac_phone));
        if (empty($query->row_array())) {
            return false;
        } else {
            return true;
        }
    }

    public function get_user($user_id) {
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('users');
        if ($query->num_rows() == 1) {
            return $query->row_array();
        } else {
            return false;
        }
        $this->db->last_query();
    }

    public function toggleBookmark($userId, $busiCode) {
        // 현재 상태 확인
        $this->db->from('bookmarks');
        $this->db->where('user_id', $userId);
        $this->db->where('busi_code', $busiCode);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            // 이미 존재하면 삭제
            $this->db->where('user_id', $userId);
            $this->db->where('busi_code', $busiCode);
            return $this->db->delete('bookmarks');
        } else {
            // 존재하지 않으면 추가
            $data = [
                'user_id' => $userId,
                'busi_code' => $busiCode
            ];
            return $this->db->insert('bookmarks', $data);
        }
    }

    public function insert_review($data) {
        return $this->db->insert('reviews', $data);
    }
}
?>