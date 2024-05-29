<style type="text/css">
/*board title reset*/
.board_top{
    padding-top: 120px;
    transition: all ease 200ms;
}
.board_top > h3{
    font-size: 50px;
    transition: all ease 200ms;
    letter-spacing: -2px;
}
.board_top > h3::after{
    content: "";
    display: block;
    width: 50px;
    height: 1px;
    background: #000;
    margin: 50px 0;
}
.bo-view-top{padding-bottom: 20px;box-sizing: border-box;border-bottom: 1px solid #555;}
.bo-view-top .bo-view-title{font-size: 2rem;}
.bo-view-title{letter-spacing: -2px;}
.view-writer{font-weight: bold;color: #000;letter-spacing: -1px;}
.view-date, .view-hit{float: right;}
.bo-view-con{padding: 40px 0;}
.view-file{padding: 10px;box-sizing: border-box;border: solid 1px #ccc;background: #fbfbfb;}
.view-file > p{margin-bottom: 5px;}
.view-file > p > i{margin-right: 5px;}
.list-btn{text-align: center;font-size: 18px;color: #000;letter-spacing: -1px;}
.list-btn > a{display: inline-block;width: 90px;height: 40px;line-height: 40px;background: #c1237c;color: #fff;}
.list-btn_right{text-align: right;}
.list-btn > a{text-align: center;background: #dbccc3 ;}
.view-list-nav{margin-top: 20px;}
.view-list-nav > p{
    font-size: 18px;
    box-sizing: border-box;
    padding: 7px;
    border: 1px solid #ccc;
    letter-spacing: -1px;
}
.board_view img{
    width: 100%;
    max-width: 1300px;
}
.board_view.newsletter_view img{
    width: auto;    
}
.ev_link_btn{margin-top: 30px;width: 200px; height: 50px;line-height: 50px;margin: 0 auto;margin-top: 30px;letter-spacing: -1px;}
.ev_link_btn a{
    display: block;
    width: 100%;
    height: 100%;
    font-weight: bold;
    font-size: 18px;
    text-align: center;
    color: #fff;
}
.ev_link_btn01 a{background: #29139C;}
.ev_link_btn02 a{background: #29139C;}
.ev_link_btn03 a{background: #29139C;}
.motion_wrap{background: #FF3618;border: 10px;padding: 20px;width: 100%;height: auto;}

.view-list-nav > p:first-child{border-bottom: 0;}
.view-list-nav > p > a{
    display: inline-block;
    width: 100%;
    max-width: 489px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;    
}
.view-list-nav > p:hover{background: #fbfbfb;}
.view-list-nav > p > i{margin-right: 10px;}
.mt10{margin-top: 10px}
.mr10{margin-right: 10px;}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
<div class="dummyheight block1024"></div>
<div class="reserCon01">
    <div class="reserimg"><img src="/images/event/ob01.png" alt=""></div>
</div>

<div class="sub_title">
    <h1 class="buri">notice & event</h1>
    <p class="poppins">
        We have prepared an event for your perfect stay.<br>
        Enjoy your trip with a variety of benefits.
    </p>
</div>

<div class="subCon subCon02 reserCon">
    <div class="subCon reserCon03">                
        <div class="content_wrap">
        <!--div class="board_top">
            <h3>공지사항&이벤트</h3>
        </div-->
        <!--board-->
        <div class="nomal_board_wrap mt20">
            <div class="board_view">
                <div class="bo-view-top">
                    <h4 class="bo-view-title"><?= $article -> subject ?></h4>   
                    <p class="bo-view-info mt20">
						<?php
						$arr = explode(" ", $article -> rtime);
						$regdate = str_replace("-", ".", $arr[0]);
						?>   
                        <span class="view-date"><i class="fas fa-history mr5"></i><?= $regdate ?></span>
                        <span class="view-hit  mr10"><i class="far fa-eye mr5"></i><?= number_format($article -> hit) ?></span>
                    </p>                 
                </div>
                <div class="bo-view-con"><?= $article -> content ?></div>
                <div class="list-btn mt10"><a href="/board/event">목록</a></div>
                <div class="view-list-nav">
                    <?php if (isset($prev)) { ?>
					<p class="view-prev"><i class="fas fa-caret-up"><span> 이전글</span></i><a href="/page/saleInfo/<?= $prev -> idx ?>/page/<?= $page ?>"><?= $prev -> subject ?></a></p>
                    <?php } else { ?>
                    <p class="view-prev"><i class="fas fa-caret-up"><span> 이전글</span></i><a>해당 글이 존재하지 않습니다.</a></p>
                    <?php
                    }
                    if (isset($next)) {
                    ?>    
                    <p class="view-next"><i class="fas fa-caret-up"><span> 다음글</span></i><a href="/page/saleInfo/<?= $next -> idx ?>/page/<?= $page ?>"><?= $next -> subject ?></a></p>
                    <?php } else { ?>
                    <p class="view-prev"><i class="fas fa-caret-up"><span> 다음글</span></i><a>해당 글이 존재하지 않습니다.</a></p>
                    <?php } ?>					
                </div>
            </div>
        </div>
        <!--board-->
    </div>
    </div>         
</div>