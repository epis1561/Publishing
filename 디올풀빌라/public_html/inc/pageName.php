<?
 	$pageName = $_SERVER['PHP_SELF']; 
 
	$pageNameLength = strlen($pageName);
	$splitNameIndex = $pageNameLength - strrpos($pageName, "/")-1;
	$pageName=substr($pageName, -$splitNameIndex,-4);
 
?>
<?=$_POST[menu];?>
<?
    $menu=$_POST[menu];

	If (!$menu)
	{
	  If (!$_session[menu]){$menu=$_session[menu];}
	}
    Else
	{
       $_session[menu]=menu;
	}

   $menu_1=substr($menu,1);
   $menu_2=substr($menu,1,2);
   $menu_3=substr($menu,-1);
    Function iif($s1,$s2,$s3){
        If ($s1==true )
		{
			echo $s2;
		}
		Else
		{
			echo $s3;
		}
	}
?>