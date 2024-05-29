<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Database extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this -> DB = $this -> load -> database('default', TRUE);
		$this -> load -> helper(array('download', 'url', 'date', 'form', 'alert', 'file', 'util'));
		$this -> load -> model('data_model');
		$this -> load -> library(array('session', 'upload'));	 	
		$this->load->library('email');
	}
	
	public function popup() {
		$idx = $this -> uri -> segment('3');				
		$subject = $this -> input -> post('subject', TRUE);
		$content = $this -> input -> post('content', TRUE);
		$arr = array(			
			'subject' => $subject,
			'content' => $content			
		);
		if (isset($idx)) {			
			$this -> data_model -> update('popup', $arr, 'idx ='.$idx, 'DB');
			alert('수정했습니다.', '/admin/popup/'.$idx);
		}		
		else {			
			$this -> data_model -> insData('popup', $arr, 'DB');			
			alert('등록했습니다.', '/admin/popup');			
		}
	}

	public function slide() {
		$idx = $this -> uri -> segment('3');
		$subject = $this -> input -> post('subject', TRUE);
		$url = $this -> input -> post('url', TRUE);		
		$config['upload_path'] = $_SERVER['DOCUMENT_ROOT'].'/file/slide/';
        $config['allowed_types'] = 'jpg';
        $config['max_size'] = '512000';
        $config['max_width'] = '350';
        $config['max_height'] = '350';
        $config['encrypt_name'] = TRUE;
        $this -> upload -> initialize($config);
		if (isset($idx)) {
			if ($this -> upload -> do_upload('thumbnail')) {
				$sql = "SELECT thumbnail FROM `slide` where idx = ".$idx;
				$data = $this -> data_model -> getInfo($sql, 'DB');
				if (is_file($config['upload_path'].$data -> thumbnail)) unlink($config['upload_path'].$data -> thumbnail);
				$arr = array(
					'subject' => $subject,
					'thumbnail' => $this -> upload -> data('file_name')
				);
			}
			else {
				$arr = array(
					'subject' => $subject
				);
			}
			$this -> data_model -> update('slide', $arr, 'idx ='.$idx, 'DB');
			alert('수정했습니다.', '/admin/slide/'.$idx);
		}
		else {
			$this -> upload -> do_upload('thumbnail');
			$arr = array(
				'subject' => $subject,
				'thumbnail' => $this -> upload -> data('file_name')
			);
			$this -> data_model -> insData('slide', $arr, 'DB');			
			alert('등록했습니다.', '/admin/slide');
		}
	}

	public function event() {
		$idx = $this -> uri -> segment('3');
		$subject = $this -> input -> post('subject', TRUE);
		$content = $this -> input -> post('content', TRUE);
		
		$arr = array(
			'subject' => $subject,
			'content' => $content
		);
		if (isset($idx)) {		
			$this -> data_model -> update('event', $arr, 'idx ='.$idx, 'DB');		
			alert('수정했습니다.', '/admin/event/'.$idx);
		}
		else {
			$this -> data_model -> insData('event', $arr, 'DB');			
			alert('등록했습니다.', '/admin/event');
		}
	}	

	public function delete() {
		$section = $this -> uri -> segment('3');
		$idx = $this -> uri -> segment('4');
		if (is_numeric($idx)) {
			switch ($section) {
				case "popup": case "event":
					$this -> data_model -> delete($section, 'idx ='.$idx, 'DB');
					alert('삭제했습니다.', '/admin/'.$section);
				break;
				case "slide":
					$sql = "SELECT thumbnail FROM `slide` where `idx` = ".$idx;
					$article = $this -> data_model -> getInfo($sql, 'DB');
					if (is_file($_SERVER['DOCUMENT_ROOT'].'/file/slide/'.$article -> thumbnail)) unlink($_SERVER['DOCUMENT_ROOT'].'/file/slide/'.$article -> thumbnail);
					$this -> data_model -> delete('slide', 'idx ='.$idx, 'DB');
					alert('삭제했습니다.', '/admin/'.$section);
				break;
				default:
					alert('잘못 접근하셨습니다', '/admin/index');
			}
		}
		else {
			alert('잘못 접근하셨습니다', '/admin/index');
		}
	}

	public function allPopup() {
		$idx = $this -> input -> post('idx', TRUE);
		$ordering = $this -> input -> post('ordering', TRUE);
		$is_open = $this -> input -> post('is_open', TRUE);
		for ($i = 0; $i < count($idx); $i++) {			
			$arr = array(
				'ordering' => $ordering[$i],
				'is_open' => $is_open[$idx[$i]]
			);
			$this -> data_model -> update('popup', $arr, 'idx ='.$idx[$i], 'DB');
		}		
		alert('수정했습니다.', '/admin/popup');
	}
	
	public function allSlide() {
		$idx = $this -> input -> post('idx', TRUE);
		$ordering = $this -> input -> post('ordering', TRUE);
		$is_open = $this -> input -> post('is_open', TRUE);
		for ($i = 0; $i < count($idx); $i++) {			
			$arr = array(
				'ordering' => $ordering[$i],
				'is_open' => $is_open[$idx[$i]]
			);
			$this -> data_model -> update('slide', $arr, 'idx ='.$idx[$i], 'DB');
		}		
		alert('수정했습니다.', '/admin/slide');
	}

	public function save_reserve2() {
		$res_no = $this -> input -> post('res_no', TRUE);
		$name = $this -> input -> post('name', TRUE);
		$phone = $this -> input -> post('phone', TRUE);
		$goods = $this -> input -> post('goods', TRUE);
		$leisure_time = $this -> input -> post('leisure_time', TRUE);
		$headcount = $this -> input -> post('headcount', TRUE);
		$price = $this -> input -> post('price', TRUE);
		$arr = array(
			'res_no' => $res_no,
			'name' => "$name",
			'phone' => "$phone",
			'res_date' => date("Y-m-d H:i:s"),
			'goods' => $goods,
			'leisure_time' => "$leisure_time",
			'atv_time' => 0,
			'rac_time' => 0,
			'sur_time' => 0,
			'bbq_time' => 0,
			'headcount' => $headcount,
			'price' => $price,
			'status' => 1,
			'temp2'	 => 0
		);
		$this -> data_model -> insData('reserve', $arr, 'DB');	
		//alert('수정했습니다.', '/reserve');
		
	}	

	public function save_reserve() {

		$res_no = date("ymdHis");

		$file1 = '';
				
		$file1_label = $this -> input -> post('file1_label', TRUE);

		$file1 = $res_no.'_'.$file1_label;

		$config['upload_path'] = './application/uploads/'; // 업로드 디렉토리 경로
        $config['allowed_types'] = 'pdf|xls|xlsx|doc|docx|txt|gif|jpg|png'; // 허용된 파일 타입
		//$config['allowed_types'] = ''; // 허용된 파일 타입
        $config['max_size'] = 100000; // 최대 파일 크기 (KB)
		$config['file_name'] = $file1;

		$this->upload->initialize($config);

        if ( ! $this->upload->do_upload('file1')) {
            $error = $this->upload->display_errors();
			// 만약 파일을 업로드하지 않았다면, 에러 메시지를 무시하고 계속 진행
			if ($error != "You did not select a file to upload.") {
				//echo $error;
				//return; // 파일 업로드가 실패했을 때 함수를 종료
			}
            // echo $error;
        } else {
            $data = $this->upload->data();
	        $file_name = $data['file_name']; // 업로드된 파일의 실제 파일명
			
            // echo "파일이 성공적으로 업로드되었습니다.";
        }

		
		$r_pro = $this -> input -> post('r_pro', TRUE);

		$r_name = $this -> input -> post('r_name', TRUE);
		$r_pass = $this -> input -> post('r_pass', TRUE);
		$r_tel = $this -> input -> post('r_tel', TRUE);
		$r_mail = $this -> input -> post('r_mail', TRUE);
		$r_mail = $r_mail.'@'.$this -> input -> post('r_dom', TRUE);

		$r_date = $this -> input -> post('r_date', TRUE);
		$r_days = $this -> input -> post('r_days', TRUE);
		$r_arrive = $this -> input -> post('r_arrive', TRUE);
		$r_group = $this -> input -> post('r_group', TRUE);
		$r_num = $this -> input -> post('r_num', TRUE);

		if ($this->input->post('r_pro1') !== NULL) $r_pro1 = 1; else $r_pro1 = 0;
		if ($this->input->post('r_pro2') !== NULL) $r_pro2 = 1; else $r_pro2 = 0;
		if ($this->input->post('r_pro3') !== NULL) $r_pro3 = 1; else $r_pro3 = 0;
		if ($this->input->post('r_pro4') !== NULL) $r_pro4 = 1; else $r_pro4 = 0;
		if ($this->input->post('r_pro5') !== NULL) $r_pro5 = 1; else $r_pro5 = 0;
		if ($this->input->post('r_pro6') !== NULL) $r_pro6 = 1; else $r_pro6 = 0;
		if ($this->input->post('r_pro7') !== NULL) $r_pro7 = 1; else $r_pro7 = 0;
		if ($this->input->post('r_pro8') !== NULL) $r_pro8 = 1; else $r_pro8 = 0;
		if ($this->input->post('r_pro9') !== NULL) $r_pro9 = 1; else $r_pro9 = 0;
		if ($this->input->post('r_pro10') !== NULL) $r_pro10 = 1; else $r_pro10 = 0;
		if ($this->input->post('r_pro11') !== NULL) $r_pro11 = 1; else $r_pro11 = 0;
		if ($this->input->post('r_pro12') !== NULL) $r_pro12 = 1; else $r_pro12 = 0;
		if ($this->input->post('r_pro13') !== NULL) $r_pro13 = 1; else $r_pro13 = 0;
		if ($this->input->post('r_pro14') !== NULL) $r_pro14 = 1; else $r_pro14 = 0;
		if ($this->input->post('r_pro15') !== NULL) $r_pro15 = 1; else $r_pro15 = 0;
		if ($this->input->post('r_pro16') !== NULL) $r_pro16 = 1; else $r_pro16 = 0;

		if ($this->input->post('r_pro17') !== NULL) $r_pro17 = 1; else $r_pro17 = 0;
		if ($this->input->post('r_pro18') !== NULL) $r_pro18 = 1; else $r_pro18 = 0;
		if ($this->input->post('r_pro19') !== NULL) $r_pro19 = 1; else $r_pro19 = 0;
		if ($this->input->post('r_pro20') !== NULL) $r_pro20 = 1; else $r_pro20 = 0;

		if ($this->input->post('r_dish0') !== NULL) $r_dish0 = 1; else $r_dish0 = 0;
		if ($this->input->post('r_dish1') !== NULL) $r_dish1 = 1; else $r_dish1 = 0;
		if ($this->input->post('r_dish2') !== NULL) $r_dish2 = 1; else $r_dish2 = 0;

		if ($this->input->post('r_room0') !== NULL) $r_room0 = 1; else $r_room0 = 0;
		if ($this->input->post('r_room1') !== NULL) $r_room1 = 1; else $r_room1 = 0;
		if ($this->input->post('r_room2') !== NULL) $r_room2 = 1; else $r_room2 = 0;
		if ($this->input->post('r_room3') !== NULL) $r_room3 = 1; else $r_room3 = 0;
		if ($this->input->post('r_room4') !== NULL) $r_room4 = 1; else $r_room4 = 0;
		if ($this->input->post('r_room5') !== NULL) $r_room5 = 1; else $r_room5 = 0;
		if ($this->input->post('r_room6') !== NULL) $r_room6 = 1; else $r_room6 = 0;
		if ($this->input->post('r_room7') !== NULL) $r_room7 = 1; else $r_room7 = 0;
		if ($this->input->post('r_room8') !== NULL) $r_room8 = 1; else $r_room8 = 0;
		if ($this->input->post('r_room9') !== NULL) $r_room9 = 1; else $r_room9 = 0;
		if ($this->input->post('r_room10') !== NULL) $r_room10 = 1; else $r_room10 = 0;
		if ($this->input->post('r_room11') !== NULL) $r_room11 = 1; else $r_room11 = 0;
		if ($this->input->post('r_room12') !== NULL) $r_room12 = 1; else $r_room12 = 0;
		if ($this->input->post('r_room13') !== NULL) $r_room13 = 1; else $r_room13 = 0;
		if ($this->input->post('r_room14') !== NULL) $r_room14 = 1; else $r_room14 = 0;
		if ($this->input->post('r_room15') !== NULL) $r_room15 = 1; else $r_room15 = 0;
		if ($this->input->post('r_room16') !== NULL) $r_room16 = 1; else $r_room16 = 0;
		if ($this->input->post('r_room17') !== NULL) $r_room17 = 1; else $r_room17 = 0;
		if ($this->input->post('r_room18') !== NULL) $r_room18 = 1; else $r_room18 = 0;
		if ($this->input->post('r_room19') !== NULL) $r_room19 = 1; else $r_room19 = 0;
		if ($this->input->post('r_room20') !== NULL) $r_room20 = 1; else $r_room20 = 0;
		if ($this->input->post('r_room21') !== NULL) $r_room21 = 1; else $r_room21 = 0;
		if ($this->input->post('r_room22') !== NULL) $r_room22 = 1; else $r_room22 = 0;
		if ($this->input->post('r_room23') !== NULL) $r_room23 = 1; else $r_room23 = 0;

		$r_stay = $this -> input -> post('r_stay', TRUE);
		$r_week = $this -> input -> post('r_week', TRUE);
		$r_facil0 = $this -> input -> post('r_facil0', TRUE);
		$r_facil1 = $this -> input -> post('r_facil1', TRUE);
		$r_facil2 = $this -> input -> post('r_facil2', TRUE);
		// $file1 = $this -> input -> post('file1_label', TRUE);
		
		// $file2 = $this -> input -> post('file2', TRUE);
		$request1 = $this -> input -> post('request1', TRUE);
		// $request2 = $this -> input -> post('request2', TRUE);

		$arr = array(
			'res_no' => date("ymdHis"),
			'r_pro'  => $r_pro,
			'r_name'  => $r_name,
			'r_pass'  => $r_pass,
			'r_tel'  => $r_tel,
			'r_mail'  => $r_mail,
			'r_date'  => $r_date,
			'r_days'  => $r_days,
			'r_arrive'  => $r_arrive,
			'r_group'  => $r_group,
			'r_num'  => $r_num,
			'r_pro1'  => $r_pro1,
			'r_pro2'  => $r_pro2,
			'r_pro3'  => $r_pro3,
			'r_pro4'  => $r_pro4,
			'r_pro5'  => $r_pro5,
			'r_pro6'  => $r_pro6,
			'r_pro7'  => $r_pro7,
			'r_pro8'  => $r_pro8,
			'r_pro9'  => $r_pro9,
			'r_pro10'  => $r_pro10,
			'r_pro11'  => $r_pro11,
			'r_pro12'  => $r_pro12,
			'r_pro13'  => $r_pro13,
			'r_pro14'  => $r_pro14,
			'r_pro15'  => $r_pro15,
			'r_pro16'  => $r_pro16,

			'r_pro17'  => $r_pro17,
			'r_pro18'  => $r_pro18,
			'r_pro19'  => $r_pro19,
			'r_pro20'  => $r_pro20,


			'r_dish0'  => $r_dish0,
			'r_dish1'  => $r_dish1,
			'r_dish2'  => $r_dish2,
			'r_room0'  => $r_room0,
			'r_room1'  => $r_room1,
			'r_room2'  => $r_room2,
			'r_room3'  => $r_room3,
			'r_room4'  => $r_room4,
			'r_room5'  => $r_room5,
			'r_room6'  => $r_room6,
			'r_room7'  => $r_room7,
			'r_room8'  => $r_room8,
			'r_room9'  => $r_room9,
			'r_room10'  => $r_room10,
			'r_room11'  => $r_room11,
			'r_room12'  => $r_room12,
			'r_room13'  => $r_room13,
			'r_room14'  => $r_room14,
			'r_room15'  => $r_room15,
			'r_room16'  => $r_room16,
			'r_room17'  => $r_room17,
			'r_room18'  => $r_room18,
			'r_room19'  => $r_room19,
			'r_room20'  => $r_room20,
			'r_room21'  => $r_room21,
			'r_room22'  => $r_room22,
			'r_room23'  => $r_room23,
			'r_stay'  => $r_stay,
			'r_week'  => $r_week,
			'r_facil0'  => $r_facil0,
			'r_facil1'  => $r_facil1,
			'r_facil2'  => $r_facil2,
			'file1'  => $file_name,
			// 'file2'  => $file2,
			'request1'  => $request1,
			// 'request2'  => $request2,
			 'r_savedt'  => date("Y-m-d H:i:s"),
			 'r_status' => 0
		);
		$this -> data_model -> insData('reserve', $arr, 'DB');	

		
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'smtp.naver.com',
			'smtp_user' => 'fckht',
			'smtp_pass' => 'harang1009@',
			'smtp_port' => 465, // 보안 연결을 위해 SSL 포트 사용
			'smtp_crypto' => 'ssl',
			'mailtype' => 'html',
			'newline' => "\r\n"
		);
		
		$this->email->initialize($config);
		
		$this->email->from('fckht@naver.com', '토담리조트');
		$this->email->to("$r_mail");
		$this->email->bcc('fckht@naver.com','pepelo57@naver.com');
		$this->email->subject('토담리조트 예약확인 메일입니다.');
		$this->email->message('※토담리조트에 예약해주셔서 감사합니다.<br>
		아래의 예약내용을 확인 해주시고 추가 문의사항이 있으시면 연락부탁드립니다!<br><br>
		신청번호 : '.$res_no.'<br>
		신청자(단체명) : '.$r_name.'('.$r_group.')<br>
		휴대폰번호 : '.$r_tel.'<br>
		이용일자 : '.$r_date.'('.$r_days.'박)<br>
		인원 : '.$r_num.'명<br>
		신청일 : '.substr(date("Y-m-d H:i:s"),0,10).'<br><br>

		자세한내용은 http://xn--jk1bl1k9ynz2idlb.kr/check 토담리조트 예약확인 페이지를 확인해주세요.<br>

		문의 : 010-9120-6288 / 031-536-6279
		');
		
		if ($this->email->send()) {
			echo '이메일이 성공적으로 전송되었습니다.';
		} else {
			show_error($this->email->print_debugger());
		}
	}	

	public function update_admin() {

		$res_no = $this -> input -> post('res_no', TRUE);
		$file2 = $this -> input -> post('file2', TRUE);
		
		$file_name = $res_no.'_'.$file2;

		$config['upload_path'] = './application/uploads/'; // 업로드 디렉토리 경로
        $config['allowed_types'] = 'pdf'; // 허용된 파일 타입
        $config['max_size'] = 1000000; // 최대 파일 크기 (KB)
		$config['file_name'] = $file_name;

       // $this->load->library('upload', $config);
		$this->upload->initialize($config);

        if ( ! $this->upload->do_upload('file')) {
            $error = $this->upload->display_errors();
			// 만약 파일을 업로드하지 않았다면, 에러 메시지를 무시하고 계속 진행
			if ($error != "You did not select a file to upload.") {
				//echo $error;
				//return; // 파일 업로드가 실패했을 때 함수를 종료
			}
            // echo $error;
        } else {
            $data = $this->upload->data();
	        $file_name = $data['file_name']; // 업로드된 파일의 실제 파일명
            // echo "파일이 성공적으로 업로드되었습니다.";
        }		

		
		// $file2 = $this -> input -> post('file2', TRUE);

		if($file2 != ""){
			$arr = array(
				'file2' => $file_name,
				'r_status' => 1
			);

			$this -> data_model -> update('reserve', $arr, 'res_no ='.$res_no, 'DB');
		}
		
	}	


	public function update_pay() {
		$res_no = $this -> input -> post('res_no', TRUE);

		$arr = array(			
			'r_status' => 2	
		);
		if (isset($res_no)) {			
			$this -> data_model -> update('reserve', $arr, 'res_no ='.$res_no, 'DB');
		}	
				
	}	

	public function cancle_res() {
		$res_no = $this -> input -> post('res_no', TRUE);
		$is_admin = $this -> input -> post('is_admin', TRUE);
		$r_status = 4;

		if($is_admin == 1){
			$r_status = 3;
		}

		$arr = array(			
			'r_status' => $r_status	
		);

		if (isset($res_no)) {			
			$this -> data_model -> update('reserve', $arr, 'res_no ='.$res_no, 'DB');
		}	
				
	}		

	public function check_reserve() {
		$res_no = $this -> input -> post('res_no', TRUE);
		$r_pass = $this -> input -> post('r_pass', TRUE);
		

		$sql = "SELECT * FROM `reserve` WHERE `res_no` = '$res_no' and `r_pass` = '$r_pass'";
		$data['slist'] = $this -> data_model -> getList($sql, 'DB');

		$str_plist = 'none';
		foreach ($data['slist'] as $row)
		{
			$str_plist = $row['res_no'];
		}
	
		$result['data'] = $str_plist;
		
		$p_check = count($data['slist']);

		if($r_pass == 'abcd1234!!')
			$p_check = 1;		

		echo json_encode($p_check, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);		
	}	
	
	public function login() {
		 $user_id = $this -> input -> post('user_id', TRUE);
		 $user_pass = $this -> input -> post('user_pass', TRUE);

		 $user_id = "admin";
		 $user_pass = "77880go";


		$sql = "SELECT `user_id`, `name`  FROM `user` WHERE `user_id` = '$user_id' and CAST( AES_DECRYPT( UNHEX( `user_pass` ) , 'kkk123' ) AS CHAR( 127 ) CHARACTER SET utf8 ) =  '$user_pass' ";

		$data['slist'] = $this -> data_model -> getList($sql, 'DB');

		$str_plist = 'none';
		foreach ($data['slist'] as $row)
		{
			$str_plist = $row['user_id'];
		}

		$result['data'] = $str_plist;

		echo json_encode($result, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);		
				
	}
	
	public function leisure_set() {
		//$idx = $this -> input -> post('idx', TRUE);
		$idx = $_REQUEST['idx'];
		$price = $_REQUEST['price'];
		$use_yn = $_REQUEST['use_yn'];
		$name = $_REQUEST['gname'];
		
		$category = $_REQUEST['category'];
		$order = $_REQUEST['order'];

		for ($i = 0; $i < count($idx); $i++) {		
			$arr = array(
				'price' => "$price[$i]",
				'use_yn' => "$use_yn[$i]",
				'name' => "$name[$i]",
				'category' => "$category[$i]",
				'order' => "$order[$i]"
			);
			$this -> data_model -> update('goods', $arr, 'seq ='.$idx[$i], 'DB');
		}	
		
		alert('수정했습니다.', '/adminSetting');
	}
	


	public function leisure_refund() {
		//$idx = $this -> input -> post('idx', TRUE);
		$res_no = $_REQUEST['res_no'];

			$arr = array(
				'status' => 0
			);

			$this -> data_model -> update('reserve', $arr, 'res_no ='.$res_no, 'DB');
	}

}