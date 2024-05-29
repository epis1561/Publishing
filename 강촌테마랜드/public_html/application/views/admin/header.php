<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$section = $this -> uri -> segment('2');
$subSection = $this -> uri -> segment('3');
?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>관리자</title>    
    <!-- Bootstrap -->
    <link href="/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="https://yeowan.kr/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="https://yeowan.kr/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="https://yeowan.kr/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="https://yeowan.kr/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="https://yeowan.kr/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="https://yeowan.kr/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="https://yeowan.kr/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="https://yeowan.kr/build/css/custom.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://yeowan.kr/vendors/jquery/dist/jquery.min.js"></script>
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/admin/index" class="site_title">관리자 페이지</a>
            </div>
            <div class="clearfix"></div>
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
              	<ul class="nav side-menu">              		              		
              		<!--li>
              			<a><i class="fa fa-gear"></i> 홈페이지관리 <span class="fa fa-chevron-down"></span></a>
              			<ul class="nav child_menu">
              				<li><a href="/admin/popup"> 팝업관리</a></li>              				
              			</ul>
              		</li-->
					<li><a href="/admin/popup"><i class="fa fa-picture-o"></i> 팝업</a></li>
					<!-- <li><a href="/admin/slide"><i class="fa fa-sliders"></i> 팝업슬라이드</a></li> 
					<li><a href="/admin/event"><i class="fa fa-info-circle"></i> 이벤트</a></li> -->
					<li><a href="/adminSetting"><i class="fa fa-info-circle"></i> 레저관리</a></li>  					
              	</ul>
              </div>
            </div>
	          <div class="sidebar-footer hidden-small">
	              <a data-toggle="tooltip" data-placement="top" title="FullScreen" id="fullscreenButton">
	                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
	              </a>
	              <a data-toggle="tooltip" data-placement="top" title="Home" href="/" target="_blank">
	                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
	              </a>
	              <a data-toggle="tooltip" data-placement="top" title="Profile" href="javascript:alert('준비중입니다.');">
	                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
	              </a>
	              <a data-toggle="tooltip" data-placement="top" title="Logout" href="/logout">
	                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
	              </a>
	            </div>
	            <!-- /menu footer buttons -->
	          </div>
	        </div>
	        <!-- top navigation -->
	        <div class="top_nav">
	          <div class="nav_menu">
	            <nav>
	              <div class="nav toggle">
	                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
	              </div>
	              <ul class="nav navbar-nav navbar-right">
	                <li class="">
	                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
	                  	<?= $this -> session -> userdata('mb_name') ?> <span class=" fa fa-angle-down"></span>
	                  </a>
	                  <ul class="dropdown-menu dropdown-usermenu pull-right">
	                    <!--li><a href="/admin/profile"> PROFILE</a></li-->
	                    <li><a href="/logout"><i class="fa fa-sign-out pull-right"></i> LOG OUT</a></li>
	                  </ul>
	                </li>
	              </ul>
	            </nav>
	          </div>
	        </div>
	        <!-- /top navigation -->        <!-- page content -->
	        <div class="right_col" role="main">
	          <div class="">
	            <div class="page-title">
	              <div class="title_left">
	                <h3>
	                	<?php
	                	switch ($section) {
	                		case "index": 
	                			echo "관리자 페이지입니다."; 
	                		break;
							case "popup": 
	                			$main = "0";
	                			$sub = "0";
	                			echo "팝업";
	                		break;
							case "slide": 
	                			$main = "1";
	                			$sub = "0";
	                			echo "팝업슬라이드";
	                		break;
							case "event": 
	                			$main = "2";
	                			$sub = "0";
	                			echo "공지사항&이벤트";
	                		break;
	                		case "regist":
	                			switch ($subSection) {
									case "popup": 
										$main = "0";
										$sub = "0";
										echo "팝업";
									break;
									case "slide": 
										$main = "1";
										$sub = "0";
										echo "팝업슬라이드";
									break;
									case "event": 
										$main = "2";
										$sub = "0";
										echo "공지사항&이벤트";
									break;								
	                			}
	                		break;
	                	}
	                	?>	                	
	                </h3>
	              </div>
	              <? if ($section != "index") { ?>
								<script>									
									$(".side-menu > li:eq(<?= $main ?>)").addClass("active");
									$(".side-menu > li:eq(<?= $main ?>) > ul").css("display", "block");
									$(".side-menu > li:eq(<?= $main ?>) > ul > li:eq(<?= $sub ?>)").addClass("current-page");
								</script>
								<? 
								}
								if ($section == "popup") { 
								?>
	              <div class="title_right">
	                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
	                  <div class="input-group">
	                    <input type="text" class="form-control" placeholder="Search for...">
	                    <span class="input-group-btn">
	                      <button class="btn btn-default" type="button">Go!</button>
	                    </span>
	                  </div>
	                </div>
	              </div>
	              <? } ?>
	            </div>

	            <div class="clearfix"></div>

	            <div class="row">
	              <div class="col-md-12 col-sm-12 col-xs-12">
	                <div class="x_panel">
	                  <div class="x_title">
	                    <h2>
	                    	<?
	                    	switch ($section) {
								case "faq":
	                    			if (is_numeric($subSection)) echo "수정";
	                    			else echo "목록";
	                    		break;
								case "youtube":
	                    			if (is_numeric($subSection)) echo "수정";
	                    			else echo "목록";
	                    		break;
								case "request":
	                    			if (is_numeric($subSection)) echo "수정";
	                    			else echo "목록";
	                    		break;	
	                    		case "saleInfo":
	                    			if (is_numeric($subSection)) echo "수정";
	                    			else echo "목록";
	                    		break;								
	                    		case "regist":
	                    			echo "등록"; break;
	                    		break;
	                    	}
	                    	?>
	                    </h2>                    
	                    <div class="clearfix"></div>
	                  </div>
	                  <div class="x_content">