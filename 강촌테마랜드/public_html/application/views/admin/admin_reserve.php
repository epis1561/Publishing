<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css" id="app-style" />
    <link rel="stylesheet" type="text/css" href="/assets/css/icons.css" />
    <link rel="stylesheet" type="text/css" href="/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" type="text/css" href="/assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" />
    <link rel="stylesheet" type="text/css" href="../../libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" />

    <title>Reserve</title>
</head>
<body> 
    <?php
        $mobile = "pc";
        if( $this->agent->is_mobile() ) {
            $mobile = $this->agent->mobile();
        }
        if($mobile != "pc"){
            echo "<script>alert('이 페이지는 모바일에서 접속할 수 없습니다. PC에서 접속해 주세요.');</script>";
            echo "<script>location.replace('/adminLogin');</script>"; 
        }

        if(!isset($_SESSION['logged_in'])){
            echo "<script>alert('로그인해주세요.');</script>";
            echo "<script>location.replace('/adminLogin');</script>"; 
		}

		$sql = "SELECT *, a.name as rname, a.price as rprice FROM `reserve` as a, `goods` as b where a.`goods` = b.`seq` ORDER BY `res_date` desc";
		$data['slist'] = $this -> data_model -> getList($sql, 'DB');

		$str_slist = '';
        $status="예약 완료";
        $refund="btn-outline-primary";
        
        foreach ($data['slist'] as $row)
		{
            $refund="btn-outline-primary";
            switch ( $row['status'] ) {
                case 1:
                  $status = "예약 완료";
                  break;
                case 0:
                    $status = "취소 완료";
                  break;
                case 2:
                    $status = "취소 요청중";
                  break;
                default:
                    $status = "예약 완료";
              }

            if($row['status'] == 0){
                $refund="btn-soft-secondary disabled";
            }
           
            $str_slist .= '<tr> <td>' .$row['res_no']. '</td> <td>' .$row['res_date']. '</td> <td>' .$row['rname']. '</td> <td>' .$row['phone']. '</td> <td>' .$row['headcount']. '</td> <td>' .$row['name']. '</td>
            <td>' .$row['leisure_time']. '</td> <td>' .$row['rprice']. '</td> <td>' .$status. '</td> <td><div id="id'.$row['res_no'].' " onclick="submit(\''.$row['res_no'].'\',\''.$row['leisure_time'].'\',\''.$row['rname'].'\',\''.$row['name'].'\',\''.$row['phone'].'\','.$row['headcount'].','.$row['rprice'].');" class="btn btn-xs '.$refund.'">환불</div> </tr>';

		}
    ?>
    
    <div id="wrapper" class="show">
        <div class="navbar-custom">
            <div class="container-fluid">
                <!-- LOGO -->
                <div class="logo-box">
                    <a href="/func/logout" class="logo logo-dark text-center">
                        <span class="logo-sm">
                            <img src="assets/images/logo.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo.png" alt="" height="20">
                        </span>
                    </a>
            
                    <a href="/func/logout" class="logo logo-light text-center">
                        <span class="logo-sm">
                            <img src="assets/images/logo.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo.png" alt="" height="45">
                        </span>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="left-side-menu">

            <div class="h-100 menuitem-active" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul id="side-menu">

                        <li class="menu-title">관리자</li>
            
                        <li class="menuitem">
                            <a href="/adminSetting" data-bs-toggle="collapse">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>
                                <span> 설정 </span>
                            </a>
                            <!--<div class="collapse show" id="sidebarDashboards">
                                <ul class="nav-second-level">
                                    <li class="menuitem-active">
                                        <a href="index.html" class="active">금액 및 사용여부 </a>
                                    </li>
                                </ul>
                            </div>-->
                        </li>
                        <li class="menuitem-active">
                            <a href="/adminReserve" data-bs-toggle="collapse">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>
                                <span> 예약 </span>
                            </a>
                            <!--<div class="collapse show" id="sidebarDashboards">
                                <ul class="nav-second-level">
                                    <li class="menuitem-active">
                                        <a href="index.html" class="active">금액 및 사용여부 </a>
                                    </li>
                                </ul>
                            </div>-->
                        </li>
                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 1540px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 572px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div>
            <!-- Sidebar -left -->

        </div>

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">
                    
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title">예약</h4>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">예약</h4>
                                            <p class="text-muted font-13 mb-4">
                                                예약 내역 확인 및 예약 취소 상태변경 할 수 있습니다.
                                            </p>
    
                                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th>예약번호</th>
                                                        <th>예약일자</th>
                                                        <th>예약자</th>
                                                        <th>전화번호</th>
                                                        <th>인원</th>
                                                        <th>상품명</th>
                                                        <th>방문일</th>
                                                        <th>가격</th>
                                                        <th>상태</th>
                                                        <th>환불</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php echo $str_slist?>

                                                </tbody>
                                            </table>
                                        </div> <!-- end card body-->
                                    </div> <!-- end card -->
                                </div><!-- end col-->
                            </div>
                            <!-- end row-->
                        </div> <!-- container -->
                    
                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>document.write(new Date().getFullYear())</script> © Yeo Wan. All Rights Reserved 
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>
    </div>
    <script src="/assets/js/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/pages/datatables.init.js"></script>
    <script src="/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
    <script>
        function submit(aid,rdate,rname,rgoods,rphone,rhead,rprice){

            if(confirm("정말 환불 하시겠습니까 ?") == true){
            $.ajax({
                url: "Database/leisure_refund",
                type: "post",
                    data: {
                        res_no: aid
                    }
                }).done(function(data) {
                    alert('수정했습니다.');
                    send_sms(aid,rdate,rname,rgoods,rphone,rhead,rprice);
                    history.go(0);
                    
                });
            }
    }

        function send_sms(aid,rdate,rname,rgoods,rphone,rhead,rprice){
            var strData;
            strData = '강촌테마랜드\r\n'+
            '취소완료\r\n\r\n'+
            '예약번호 :'+aid+'\r\n'+
            '예약일 :'+rdate+'\r\n'+
            '예약자명 :'+rname+'\r\n'+
            '상품명 :'+rgoods+'\r\n'+
            '인원 :'+rhead+' 명\r\n'+
            '가격 :'+rprice+' 원\r\n'+
            '취소완료';


            $.ajax({
                url: "sms",
                type: "post",
                    data: {
                        strTelList: rphone,
                        strData: strData
                    }
                }).done(function(data) {
                });        
        }
    </script>
</body>
</html>