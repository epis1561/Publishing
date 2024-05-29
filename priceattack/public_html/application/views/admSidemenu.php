<link rel="stylesheet" href="/css/admSidemenu.css">
<style>
		.panel {
			padding-bottom:30px;
			background-color: white;
			max-height: 0;
			transition: max-height 0.2s ease-out;
			margin-bottom: 30px;
		}

</style>

<div class="accordion_box">
		<button class="accordion">업체관리
			
		</button>
		<div class="panel">
			<p>업체등록</p>
            <p>상품(객실)등록</p>
            <p>문자(SNS)</p>
		</div>

		<button class="accordion">상품관리</button>
		<div class="panel">
			<p>예약현황</p>
            <p>요금설정</p>
            <p>방막기/방풀기</p>
		</div>

		<button class="accordion">리<span>뷰</span></button>
		<div class="panel">
		<p>리뷰관리</p>
		</div>

		<button class="accordion">정<span>산</span></button>
		<div class="panel">
			<p>
			정산내역
			</p>
		</div>
	</div>
    <script src='http://code.jquery.com/jquery-1.9.1.min.js'></script>
    <script>
		var acc = document.getElementsByClassName("accordion");
		var i;

		for (i = 0; i < acc.length; i++) {
			acc[i].addEventListener("click", function () {
				/* Toggle between adding and removing the "active" class,
				to highlight the button that controls the panel */
				this.classList.toggle("active");

				/* Toggle between hiding and showing the active panel */
				var panel = this.nextElementSibling;
				if (panel.style.display === "block") {
					panel.style.display = "none";
				} else {
					panel.style.display = "block";
				}
			});
		}

		var acc = document.getElementsByClassName("accordion");
		var i;

		for (i = 0; i < acc.length; i++) {
			acc[i].addEventListener("click", function () {
				this.classList.toggle("active");
				var panel = this.nextElementSibling;
				if (panel.style.maxHeight) {
					panel.style.maxHeight = null;
				} else {
					panel.style.maxHeight = panel.scrollHeight + "px";
				}
			});
		}


		$(document).ready(function() {
      $('.accordion').click(function() {
        var panel = $(this).next('.panel');
        if (panel.hasClass('active')) {
          panel.removeClass('active');
          $(this).removeClass('active');
        } else {
          panel.addClass('active');
          $(this).addClass('active');
        }
      });
    });
	</script>