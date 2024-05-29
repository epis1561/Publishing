<style type="text/css">
    /*board title reset*/
.eventCon01 {
    width: 100%;
    background: url('/images/board/01_01.jpg') no-repeat center center;
    background-size: cover;
    padding-bottom: 35%;
}
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
/*bord reset*/
.board_table{text-align: center;box-sizing: border-box;border-top: 1px solid #ccc;border-bottom: 1px solid #ccc;;transition: all ease 200ms;}
.bo-title{width: 65%;}
.bo-hit{width: 70px;}
.bo-period{width: 150px;}
.bo-write-date{width: 100px;}
.bo-writer{width: 100px;}
.board_table th{height: 50px;transition: all ease 200ms; vertical-align:middle; font-weight: 900;}
.board_table tbody tr{background: #fff}
.board_table tbody tr:nth-child(odd){background: #f3ece7; transition: all ease 200ms;}
.board_table tbody tr td{padding: 5px;height: 50px;color: #000;transition: all ease 200ms;box-sizing: border-box; vertical-align:middle;}
.li-title{font-weight: 500;text-align: left;}
.li-title a{color: #000;;letter-spacing: -1px;}
.li-cate{width: 100px;}
.label01,.label02,.label03,.label04,.label05{color: #fff;border-radius: 15px;padding: 5px;box-sizing: border-box;font-size: 14px;width: 80px;display: inline-block;letter-spacing: -1px;text-align: center;}
.label01{background-color: #c1237c;}
.label02{background-color: #0551a0;}
.label03{background: #0dbc0b;}
.label04{background: #df1818;}
.label05{background: #555;}
.file-icon{margin-left: 10px;}
.search_input > select{height: 36px;border: 1px solid #ccc;width: 60px;}
.search_area.sub{    
    margin-bottom: 15px;
    background-color: #FFFFFF;
    text-align: right;
    overflow: hidden;
}
.search_area.sub .search_input{
    display: inline-block;
    margin-left: 10px;
    height: 37px;
    background-color: #fff;
    vertical-align: middle;
    text-align: right;
}
.search_area.sub .total_cnt{
    margin: 15px 15px 0;
    float: left;
    font-size: 14px;
    color: #707070;
}
.search_area.sub .search_input input{    
    padding: 5px 10px;
    height: 25px;
    vertical-align: top;
    border: none;
    font-size: 14px;
    border: 1px solid #ccc;
}
.pagination {display: block;padding: 30px 0;text-align: center;list-style: none;border-radius: 0.25rem;}
.page-item{display: inline-block;margin: 0;width: 25px;height: 25px;line-height: 23px;text-align: center;font-size: 14px;vertical-align: middle;box-sizing: border-box;border: 1px solid #ccc;overflow: hidden;border-radius: 5px;}
.page-item a{display: block;width: 100%;height: 100%;color: #959595;font-weight: 100;background: #fff;}
.page-item a:hover{background: #eee;}
.page-item.active a{background: #464646;color: #fff;font-weight: 400;}
</style>
<div class="dummyheight block1024"></div>
<div class="eventCon01">
    <!-- <div class="reserimg"><img src="/images/event/ob01.png" alt=""></div> -->
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
            <div class="board_wrap">
                <div class="search_area sub">                    
                    <!--form method="get">
                        <div class="search_input">                            
                            <input type="text" name="keyword" value="{{ $keyword }}" placeholder="검색어를 입력하세요.">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form-->
                </div>
                <table class="board_table" width="100%" border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th class="bo-hit">번호</th>
                            <th>제목</th>
                            <th class="bo-write-date">작성일</th>
                            <th class="bo-hit">조회</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--list 10개까지 표시-->
                        <?php foreach ($list as $article) { ?>
                        <tr class="bo_list">
                            <td class="li-no"><?= $start-- ?></td>
                            <td class="li-title"><a href="/board/event/<?= $article['idx'] ?>"><?= $article['subject'] ?></a></td>
                            <td class="li-write-date"><?= substr($article['rtime'], 0, 10) ?></td>
                            <td class="li-hit"><?php echo number_format($article['hit']) ?></td>
                        </tr>
                        <?php } ?>		
                    </tbody>
                </table>
                <?= $this -> pagination -> create_links(); ?>
            </div>
        </div>
        <!--board-->
    </div>
    </div>         
</div>