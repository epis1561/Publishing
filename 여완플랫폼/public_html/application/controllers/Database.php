<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Database extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this -> DB = $this -> load -> database('default', TRUE);
		$this -> load -> helper(array('download', 'url', 'date', 'form', 'alert', 'file', 'util'));
		$this -> load -> model('Database_model');
        $this -> load -> model('data_model');
		$this -> load -> library(array('session', 'pagination'));	 	
	}

    public function get_data() {
        // AJAX 요청에서 넘어온 검색 조건 받기
        $value1 = $this->input->post('value1');
        $value2 = $this->input->post('value2');

        // 여기에서 $value1과 $value2를 사용하여 데이터베이스에서 값을 가져옴
        $data['result'] = $this->Database_model->get_data_from_db($value1, $value2);
        echo json_encode($data);
    }

    public function get_room_data() {
        // AJAX 요청에서 넘어온 검색 조건 받기
        $value1 = $this->input->post('value1');
        $value2 = $this->input->post('value2');

        // 여기에서 $value1과 $value2를 사용하여 데이터베이스에서 값을 가져옴
        $data['result'] = $this->Database_model->get_room_data_from_db($value1, $value2);
        echo json_encode($data);
    }
	
    public function index() {
            $data = array(
                'name' => $this->input->post('ac_name'),
                'user_id' => $this->input->post('ac_id'),
                'password' => $this->input->post('ac_pw'),
                'phone_number' => $this->input->post('ac_phone')
            );
            if ($this->Database_model->register_user($data)) {
                redirect('https://priceattack.kr/Login'); // Redirect to a success page
             }
    }

    public function check_user_id_exists() {
        $user_id = $this->input->post('ac_id');
        // $this->load->model('user_model');
        if ($this->Database_model->check_user_id_exists($user_id)) {
            echo 'taken';  // 아이디가 존재하면 'taken' 반환
        } else {
            echo 'available';  // 아이디가 존재하지 않으면 'available' 반환
        }
    }

    public function check_user_phone_exists() {
        $ac_phone = $this->input->post('ac_phone');
        // $this->load->model('user_model');
        if ($this->Database_model->check_user_phone_exists($ac_phone)) {
            echo 'taken';
        } else {
            echo 'available';
        }
    }


    public function authenticate() {
        $user_id = $this->input->post('id');
        $password = $this->input->post('password');

        $user = $this->Database_model->get_user($user_id);

        if ($user && password_verify($password, $user['password'])) {
            $userdata = array(
                'user_id' => $user['user_id'],
                'name' => $user['name'],
                'phone_number' => $user['phone_number'],
                'registration_date' => $user['registration_date'],
                'logged_in' => TRUE
            );
            $this->session->set_userdata($userdata);
            
            if(isset($_SESSION['prev_page'])) {
                $prev_page = $_SESSION['prev_page'];
                unset($_SESSION['prev_page']); // 이전 페이지 URL 세션 삭제
                header("Location: $prev_page"); // 이전 페이지로 리디렉션
                exit;
            } else {
                // 이전 페이지가 없으면 기본적인 페이지로 리디렉션
                redirect('https://priceattack.kr');
                exit;
            }
        } else {
            $this->session->set_flashdata('error', 'Invalid login credentials');
            redirect('https://priceattack.kr/Login'); // 로그인 실패 시 로그인 페이지로 다시 리디렉션
        }
    }

    public function logout() {
        $this->session->sess_destroy();    
        redirect('https://priceattack.kr');
    }

    public function toggle_bookmark() {
        $userId = $this->input->post('user_id');
        $busiCode = $this->input->post('busi_code');

        if (!isset($userId) || !isset($busiCode)) {
            echo json_encode(['status' => 'error', 'message' => 'Invalid parameters']);
            return;
        }

        $result = $this->Database_model->toggleBookmark($userId, $busiCode);
        if ($result) {
            echo json_encode(['status' => 'success', 'message' => 'Bookmark toggled successfully']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to toggle bookmark']);
        }
    }

    public function submit_review() {
        if ($this->input->is_ajax_request()) {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png|bmp|mp4|avi|mov|wmv'; // 추가된 이미지 및 동영상 형식
            $config['max_size'] = 50000; // 파일 최대 크기를 KB 단위로 설정 (예: 50MB)
            $config['max_width'] = 0;  // 이미지의 최대 너비 제한 없음
            $config['max_height'] = 0; // 이미지의 최대 높이 제한 없음
    
            $this->load->library('upload', $config);
    
            $review_image_paths = [];
            if (!empty($_FILES['files']['name'][0])) {
                $files = $_FILES;
                $cpt = count($files['files']['name']);
                for ($i = 0; $i < $cpt; $i++) {
                    $_FILES['files']['name'] = $files['files']['name'][$i];
                    $_FILES['files']['type'] = $files['files']['type'][$i];
                    $_FILES['files']['tmp_name'] = $files['files']['tmp_name'][$i];
                    $_FILES['files']['error'] = $files['files']['error'][$i];
                    $_FILES['files']['size'] = $files['files']['size'][$i];
    
                    if ($this->upload->do_upload('files')) {
                        $fileData = $this->upload->data();
                        $review_image_paths[] = $fileData['file_name'];
                    } else {
                        $errors = $this->upload->display_errors();
                        echo json_encode(['error' => $errors]);
                        return;
                    }
                }
            }
    
            $review_data = [
                'busi_code' => $this->input->post('busi_code'),
                'user_id' => $this->input->post('user_id'),
                'reserve_code' => $this->input->post('reserve_code'),
                'rating' => $this->input->post('starpoint'),
                'content' => $this->input->post('rv_text'),
                'review_image_path' => implode('|', $review_image_paths)
            ];
    
            if ($this->Database_model->insert_review($review_data)) {
                echo json_encode(['success' => 'Review submitted successfully.']);
            } else {
                echo json_encode(['error' => 'Failed to submit review.']);
            }
        } else {
            show_error('No direct script access allowed');
        }
    }
}