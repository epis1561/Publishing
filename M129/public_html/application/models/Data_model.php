<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
 
     function totCnt($sql, $db) {
        $query = $this->$db->query($sql);
        if ($query->num_rows() > 0) {  //맞는 데이터가 있다면 해당 내용 반환
            return $query->num_rows();
        } else {  //맞는 데이터가 없을 경우
            return 0;
        }
    }

	function execute($sql, $db) {
        return $this->$db->query($sql);
	}
        
    function update($table, $edit_data, $where, $db) {
        if ($table && $edit_data && $where) {
            $result = $this->$db->update($table, $edit_data, $where);
            return $result;
        }
    }

    function delete($table, $where, $db) {
        if ($table && $where) {
            $result = $this->$db->delete($table, $where);
            return $result;
        }
    }

    function getInfo($sql, $db) {
        $query = $this->$db->query($sql);

        $result = $query->row();
        return $result;
    }

    function getList($sql, $db) {
        $query = $this->$db->query($sql);
//        print_r($query);
//        //게시물 리스트 반환
        $result = $query->result_array();
        return $result;
    }

    function insData($table, $insert_array, $db) {
        $result = $this->$db->insert($table, $insert_array);

//결과 반환
        return $result;
    }

    function insMultiData($table, $insert_array, $db) {
        $result = $this->$db->insert_batch($table, $insert_array);
        return $result;
    }

    function modMultiData($table, $insert_array, $where, $db) {
        $result = $this->$db->update_batch($table, $insert_array, $where);        
        return $result;
    }

    function insert_id() {
        return @mysql_insert_id($this->conn_id);
    }

}