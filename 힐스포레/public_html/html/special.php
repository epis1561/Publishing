<?php
$cate = $_GET['cate'];
if ($cate == "01") header("Location:/special/1");
else if ($cate == "02") header("Location:/special/2");
else if ($cate == "06") header("Location:/special/5");
else header("Location:/");
?>