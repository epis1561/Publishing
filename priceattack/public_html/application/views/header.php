<!DOCTYPE html>
<html lang="en">
<?php
	if($this->session->userdata('name')){
		$login = "로그아웃";
        $href = "Database/logout";
	}
	else{
		$login = "로그인";
        $href = "/Login";
	}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="숙박대전, 야놀자, 여기어때, 하나투어, 모두투어, 노랑풍선, 여행이지, 에어비앤비, 아고다, 글램핑, 오토캠핑장, 전주한옥마을, 경주가볼만한곳, 포천가볼만한곳, 남이섬, 강화도">
	<meta name="description" content="숙박대전, 야놀자, 여기어때, 하나투어, 모두투어, 노랑풍선, 여행이지, 에어비앤비, 아고다, 글램핑, 오토캠핑장, 전주한옥마을, 경주가볼만한곳, 포천가볼만한곳, 남이섬, 강화도">
	<meta property="og:type" content="website">
	<meta property="og:description" content="숙박대전, 야놀자, 여기어때, 하나투어, 모두투어, 노랑풍선, 여행이지, 에어비앤비, 아고다, 글램핑, 오토캠핑장, 전주한옥마을, 경주가볼만한곳, 포천가볼만한곳, 남이섬, 강화도">
    <meta property="og:url" content="https://priceattack.kr">
	<meta property="al:web:url" content="https://priceattack.kr">
	<link rel="canonical" href="https://priceattack.kr">
	<meta property="og:image" content="/images/common/image.jpg">
    <link rel="stylesheet" href="/css/header.css">
    <title>프라이스어택</title>
</head>
<body>
    <div class="header">
        <div class="headerwrap">
            <div class="logo">
                <a href=""><img src="/images/common/logo.png" alt="" id="logo_pc"></a>
            </div>
                <a href="<?php echo $href ?>" class="h_btnn"><?php echo $login?></a>
        </div>
    </div>

    

    
</body>
</html>