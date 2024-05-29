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
    <title>Setting</title>
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

		$sql = "SELECT * FROM `goods` ORDER BY `order` asc , `category` desc , 'name' asc";
		$data['slist'] = $this -> data_model -> getList($sql, 'DB');

		$str_slist = '';
        $a=1;
		foreach ($data['slist'] as $row)
		{
            $selected = "";
            if($row["use_yn"] == "n"){
                $selected = "selected";
            }

            $selected2 = "";
            if($row["category"] == "p"){
                $selected2 = "selected";
            }
            
            $str_slist .= '<tr><td style="visibility:hidden; display: none; width: 0px;"><input type="hidden" name="idx[]" value='.$row["seq"].'></input></td> <td>' .$a. '</td> <td><input type="text" class="form-control" name="gname[]" value="'.$row['name'].'"></td> <td><input type="number" class="form-control" name="price[]" value='.$row["price"].'> </td>
            <td><select class="form-select" name="category[]"> <option value="s" >단품</option> <option value="p"'.$selected2.'>패키지</option> </select></td> <td><select class="form-select" name="use_yn[]"> <option value="y" >사용</option> <option value="n"'.$selected.'>미사용</option> </select></td> <td><input type="number" class="form-control" name="order[]" value='.$row["order"].'> </td></tr>';

            $a = $a+1;

		}

		$sql = "SELECT * FROM `config`";
		$data['slist'] = $this -> data_model -> getList($sql, 'DB');

		$start_dt = '';
        $end_dt = '';
		foreach ($data['slist'] as $row)
		{
            $start_dt = $row["c1"];
            $end_dt = $row["c2"];
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
            
                        <li class="menuitem-active">
                            <a href="/adminSetting">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>
                                <span> 설정 </span>
                            </a>
                        </li>
                        <li class="menuitem">
                            <a href="/adminReserve">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>
                                <span> 예약 </span>
                            </a>
                        </li>

                        <li class="menuitem">
                            <a href="/admin/popup">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>
                                <span> 팝업 </span>
                            </a>
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
                                <h4 class="page-title">설정</h4>
                            </div>
                            
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">레저</h4>
                                            <p class="text-muted font-13 mb-4">
                                                레저 이용 금액 및 사용 여부를 수정할 수 있습니다.
                                            </p>

                                            <form action="/Database/leisure_set">
                                            <table id="basic-datatable-setting" class="table dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th style="visibility:hidden; display: none;"></th>
                                                        <th style="width: 40px;">No.</th>
                                                        <th>레저</th>
                                                        <th>금액</th>
                                                        <th>단품/패키지</th>
                                                        <th>사용여부</th>
                                                        <th style="width: 40px;">정렬</th>
                                                    </tr>
                                                </thead>
                                            
                                            
                                                <tbody id="tbody" name = "tbody">
                                                    <?php echo $str_slist; ?>
                                                </tbody>
                                            </table>
                                            <div class="text-sm-end">
                                                <button class="btn btn-outline-danger my-2"><i class="fe-check-circle me-1"></i> 저장 </button>
                                            </div>
                                        </div> <!-- end card body-->
                                    </div> <!-- end card -->
                                </div><!-- end col-->
                            </div>
                            <!-- end row-->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">예약 일자 지정</h4>
                                            <p class="text-muted font-13 mb-4">
                                                예약을 받고자 하는 일정을 설정할 수 있습니다.
                                            </p>
    
    
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">예약 시작 일자</label>
                                                        <input type="text" class="form-control" data-provide="datepicker" data-date-autoclose="true" id="datepicker-start" name="datepicker-start"  value='<?php echo $start_dt; ?>'>
                                                    </div>
                                                </div>
    
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">예약 종료 일자</label>
                                                        <input type="text" class="form-control" data-provide="datepicker" data-date-autoclose="true" id="datepicker-end" name="datepicker-end" value='<?php echo $end_dt; ?>'>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-sm-end">
                                                <div class="btn btn-outline-danger" onclick = "submit()"><i class="fe-check-circle me-1"></i> 저장 </div>
                                            </div>
                                            </form>
                                        </div> <!-- end card-body -->
                                    </div> <!-- end card-->
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->  
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



        <script src="/assets/js/vendor.js"></script>
        <script src="/assets/js/app.js"></script>

        <script src="/assets/js/jquery-3.6.0.min.js"></script>
        <script src="/assets/js/pages/datatables.init.js"></script>
        <script src="/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
        <script src="/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>

        <script src="../../libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
	    <script src="../../libs/bootstrap-datepicker/js/bootstrap-datepicker.ko.min.js"></script>
	    <script src="../../libs/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
        <script>
            $('#datepicker-start').datepicker({
                language: "ko",
                todayHighlight: true,
                format: "yyyy-mm-dd"
            });
            $('#datepicker-end').datepicker({
                language: "ko",
                todayHighlight: true,
                format: "yyyy-mm-dd"
            });

            function submit(){
                var start_dt = $("#datepicker-start").val();
	            var end_dt = $("#datepicker-end").val();

                $.ajax({
                    url: "Database/leisure_date_set",
                    type: "post",
                        data: {
                            start_dt: start_dt,
                            end_dt: end_dt
                        }
                    }).done(function(data) {
                    
                	   alert("수정했습니다.");
                    });
            }
        </script>
    </body>
</html>