<script type="text/javascript">
var g5_cookie_domain = "<?php echo G5_COOKIE_DOMAIN ?>";
</script>
<script type="text/javascript">
// 쿠키 입력
function set_cookie(name, value, expirehours, domain)
{
    var today = new Date();
    today.setTime(today.getTime() + (60*60*1000*expirehours));
    document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + today.toGMTString() + ";";
    if (domain) {
        document.cookie += "domain=" + domain + ";";
    }
}

// 쿠키 얻음
function get_cookie(name)
{
    var find_sw = false;
    var start, end;
    var i = 0;

    for (i=0; i<= document.cookie.length; i++)
    {
        start = i;
        end = start + name.length;

        if(document.cookie.substring(start, end) == name)
        {
            find_sw = true
            break
        }
    }

    if (find_sw == true)
    {
        start = end + 1;
        end = document.cookie.indexOf(";", start);

        if(end < start)
            end = document.cookie.length;

        return unescape(document.cookie.substring(start, end));
    }
    return "";
}

// 쿠키 지움
function delete_cookie(name)
{
    var today = new Date();

    today.setTime(today.getTime() - 1);
    var value = get_cookie(name);
    if(value != "")
        document.cookie = name + "=" + value + "; path=/; expires=" + today.toGMTString();
}
</script>
<script src="<?php echo G5_JS_URL ?>/wrest.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo G5_CSS_DIR ?>/popup.css">
<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
    $sql = "select * from {$g5['new_win_table']}
            where nw_2 = '1'
            order by nw_1 asc
            "; 
    $result = sql_query($sql, false);
?>
<style type="text/css">
	/* 팝업레이어 */    
    .containerPop { display:flex; flex-wrap: wrap; position:absolute; left: 0; top: 80px; max-width:1920px; z-index:10000; } 
	.containerPop > div { margin: 15px; cursor: move; }
	.hd_pops_footer {padding:10px 0;background:#000;color:#fff;text-align:right}
	.hd_pops_footer button {margin-right:5px;padding:5px 10px;border:0;background:#393939;color:#fff;cursor:pointer;}
</style>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<div class="containerPop">
    <!-- 팝업레이어 시작 { -->
<?php if  (!$_COOKIE["hd_pops_1"]) { ?>
<div id="hd_pops_1">
	<div style="background-color:#000000;">        
<?php
for ($i=0; $nw=sql_fetch_array($result); $i++) {
	echo conv_content($nw['nw_content'], 1);
}
?>
</div>
		<div class="hd_pops_footer">
			<button class="hd_pops_reject hd_pops_1 24"><strong>24</strong>시간 동안 다시 열람하지 않습니다.</button>
			<button class="hd_pops_close hd_pops_1">닫기</button>
		</div>
	</div>
	<script>
		$("#hd_pops_1").draggable();
	</script>    
<?php
}
if ($i == 0) echo '<span class="sound_only">팝업레이어 알림이 없습니다.</span>';
?>
</div>

<script>
$(function() {
    $(".hd_pops_reject").click(function() {
        var id = $(this).attr('class').split(' ');
        var ck_name = id[1];
        var exp_time = parseInt(id[2]);
        $("#"+id[1]).css("display", "none");
        set_cookie(ck_name, 1, exp_time, g5_cookie_domain);
    });
    $('.hd_pops_close').click(function() {
        var idb = $(this).attr('class').split(' ');
        $('#'+idb[1]).css('display','none');
    });
    $("#hd").css("z-index", 1000);
});
</script>
<!-- } 팝업레이어 끝 -->