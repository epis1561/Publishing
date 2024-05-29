<?php
$menu['menu400'] = array (
    array('400000', '홈페이지관리', ''.G5_ADMIN_URL.'/siteInfo.php', 'board'),
    array('400100', '사이트정보', ''.G5_ADMIN_URL.'/siteInfo.php', 'bbs_group'),
	//array('400120', '메뉴관리', ''.G5_ADMIN_URL.'/menu_list.php', 'cf_menu', 1),
    array('400200', '요금관리', ''.G5_ADMIN_URL.'/payment.php', 'bbs_group'),
	array('400210', '팝업관리', G5_ADMIN_URL.'/newwinlist.php', 'scf_poplayer'),
    array('400300', '예약안내', G5_URL.'/bbs/board.php?bo_table=p_guide&sca=예약안내', 'bbs_poplist', 1),
    //array('400400', '객실정보', G5_URL.'/bbs2/board.php?bo_table=p_room', 'bbs_poprank', 1),
    //array('400500', '서비스', G5_URL.'/bbs2/board.php?bo_table=pension_service', 'qa'),
    //array('400600', '부대시설', G5_URL.'/bbs2/board.php?bo_table=pension_facility', 'scf_contents', 1)
);
?>