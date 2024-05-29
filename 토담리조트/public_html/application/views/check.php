
<link rel="stylesheet" type="text/css" href="/assets/css/style.css" id="app-style" />
<link rel="stylesheet" href="/css/check.css">
<link rel="stylesheet" type="text/css" href="/assets/css/icons.css" />
<link rel="stylesheet" type="text/css" href="/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" />
<link rel="stylesheet" type="text/css" href="/assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" />

<?php
include('header.php');


$sql = "SELECT * FROM `reserve` ORDER BY `res_no` desc";
$data['slist'] = $this -> data_model -> getList($sql, 'DB');

$str_slist = '';
$status="예약 대기";
$refund="btn-outline-primary";

foreach ($data['slist'] as $row)
{
    $refund="btn-outline-primary";
    switch ( $row['r_status'] ) {
        case 0:
          $status = "예약 대기";
          break;
        case 1:
            $status = "견적서 확인";
          break;
        case 2:
            $status = "예약 확정";
          break;
        case 3:
            $status = "관리자 취소";
          break;
        case 4:
            $status = "신청자 취소";
          break;          
          
        default:
            $status = "예약 대기";
      }

    if($row['r_days'] == 0){
       $r_days="(당일)";
    }
    else{
      $r_days= '('.$row['r_days'].'박)';
    }
    $save_dt = substr($row['r_savedt'], 0, 10);

   
    $str_slist .= '<tr> <td class="text-center">' .$row['res_no']. '</td> <td class="text-center">' .$row['r_name']. '</td> <td class="text-center">' .$row['r_tel']. '</td> <td class="text-center">' .$row['r_date'].$r_days. '</td> <td class="text-center">' .$row['r_num']. '</td> <td class="text-center">' .$status. '</td>
    <td>' .$save_dt. '</td>';

}

?>
<div class="wrap-all">
    <div class="toparea roka">
        예약확인<span>*고객용/관리자용</span>
    </div>
    <div class="account mid">
        입금계좌 : IBK기업 080-069656-01-011(주)축구마을 토담리조트
    </div>
</div>
<div style="width: 100%; margin-top: 1%;">
<table id="basic-datatable" class="table table-striped table-bordered table-hover w-100" >
<colgroup>
<col style="width: 12% !important">
<col style="width: 20% !important">
<col style="width: 20% !important">
<col style="width: 20% !important">
<col style="width: 8% !important">
<col style="width: 10% !important">
<col style="width: 10% !important">
</colgroup>
<thead>
  <tr>
    <th class="tg-68kc text-center">신청번호</th>
    <th class="tg-68kc text-center">신청자(단체명)</th>
    <th class="tg-68kc text-center">휴대폰번호</th>
    <th class="tg-68kc text-center">이용일자</th>
    <th class="tg-68kc text-center">인원</th>
    <th class="tg-68kc text-center">상태</th>
    <th class="tg-68kc text-center">신청일</th>
  </tr>
</thead>
<tbody>
<?php echo $str_slist?>
</tbody>
</table>
</div>

<div class="password">
<div class="close"><img src="/images/reser/close.png" alt=""></div>
    <form id=check_res action="http://xn--jk1bl1k9ynz2idlb.kr/check2" method="post"> 
        <label for="c_pass">비밀번호</label>
        <input type="password" name="c_pass" id="c_pass">
        <input type="hidden" name="res_no" id="res_no">
        <button type="button" id="check_button">확인</button>
    </form>
</div>
    
    <script src="/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
    <script src="/assets/js/pages/datatables.init.js"></script>

<script>
  $(document).ready(function(){
    var res_no = 0;
    $('#basic-datatable').DataTable();
    $('#basic-datatable tbody').on('click', 'tr', function() {
        var rowData = $('#basic-datatable').DataTable().row(this).data(); // 클릭한 로우의 데이터를 가져옵니다.
        res_no = rowData[0]; // 예시: 두 번째 열의 값을 가져옵니다.
        var res_no_input = document.getElementById("res_no");
        res_no_input.value = res_no;
        $('.password').show();

        // var password = prompt("암호를 입력하세요.");
    });

    $(document).on("keydown", function(e) {
        var r_pass = $('#c_pass').val();
        if (e.key === "Enter" && e.target.tagName !== "TEXTAREA") {
            e.preventDefault();
            $.ajax({
        url: 'Database/check_reserve',
                  type: 'POST',
                  data: { res_no: res_no, r_pass : r_pass },
                  url: 'Database/check_reserve',
                  success: function(response){
                    if(response==1)
                      document.getElementById('check_res').submit();
                    else
                      alert('암호가 올바르지 않습니다.');
                      
                      var c_pass = document.getElementById("c_pass");
                      c_pass.value = "";
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      // console.error('AJAX 에러:', textStatus, errorThrown);
                  }
              });
        }
    });

    $('#check_button').click(function() {

      var r_pass = $('#c_pass').val();      
      // alert(res_no);
      
      $.ajax({
        url: 'Database/check_reserve',
                  type: 'POST',
                  data: { res_no: res_no, r_pass : r_pass },
                  url: 'Database/check_reserve',
                  success: function(response){
                    if(response==1)
                      document.getElementById('check_res').submit();
                    else
                      alert('암호가 올바르지 않습니다.');
                      
                      var c_pass = document.getElementById("c_pass");
                      c_pass.value = "";
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      // console.error('AJAX 에러:', textStatus, errorThrown);
                  }
              });
    });


});
    $('.close').click(function(){
        $('.password').hide();
    })
</script>
<?php
include('footer.php');
?>




