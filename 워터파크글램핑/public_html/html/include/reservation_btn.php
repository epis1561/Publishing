<style>
    .reservation {
        width: 100%;
        height: 460px;
        background: url('/html/images/common/reserve.jpg') no-repeat center center;
        background-size: cover;
    }
    .reservation > a {
        position: absolute;
        width: 100%;
        height: inherit;
        text-align: center;
    }
    .reservation > a .txt {
    }
    .reservation a .txt h1 {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #e8e8e8;
        font-size: 26px;
    }
    .reservation a .txt p {
        position: absolute;
        bottom: 20%;
        left: 50%;
        transform: translateX(-50%);
        color: #e8e8e8;
        display: block;
        content: '';
        width: 130px;
        height: 19px;
        background: url('/html/images/common/reserve_arrow01.png') no-repeat;
        margin: 0 auto;
        transition: all 0.5s;
    }
    .reservation:hover .txt p {
        background: url('/html/images/common/reserve_arrow02.png') no-repeat;
    }

    @media (max-width: 900px) {
        .reservation {
            height: 200px;
        }
    }
</style>
<div class="reservation section_fadeIn section">
    <a href="<? echo $info['reser_link'] ?>" target="_blank">
        <div class="txt">
            <h1>RESERVATION</h1>
            <p></p>
        </div>
    </a>
</div>