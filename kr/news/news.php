<?php
require "../../inc/kr_news_core.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="<?php echo $setinfo[keywords];?>" />
<meta name="description" content="<?php echo $setinfo[description];?>" />
<title><?php echo $setinfo[title];?></title>
<link href="../../inc/css/css1.css" rel="stylesheet" type="text/css">
<link href="../../inc/css/newsquery.css" rel="stylesheet" type="text/css">
<script src="/inc/js/jquery.min.js"></script>


<?php if($setinfo[iscopy]=='1'){?>
<script language="JavaScript">
document.oncontextmenu=new Function("event.returnValue=false;");
document.onselectstart=new Function("event.returnValue=false;");

</script>
<?php }?>
<?php if($setinfo[otherheader]!=''){echo $setinfo[otherheader];}?>

</head>
<body>
<? require "../header.php"; ?>



<div id="innercontain">
<? require "../mainadv.php"; ?>


<div id="innercontent">

<div id="innercleft">
<? require "leftmenu.php"; ?>
</div><!--end innercleft!-->

<div id="innercright">
<div id="innerc_header">
<div id="innerc_headertitle">뉴스</div>
<div id="innerc_content">


<div id="newsquery">
<ul id="queryul">
<?php for($i=0;$i<sizeof($arrnews);$i++){?>
<li class="title">
	<div class="title"><a href="newsinfo.php?newsid=<?php echo $arrnews[$i][id_newsinfo];?>" target="_self"   ><?php echo $arrnews[$i][title];?></a></div>
	<div class="time"><?php echo $arrnews[$i][newsdate];?></div>
<?php }?>
</li>
 

</ul>
</div>
<br><br>
<div id="showpages" >
	  <div id="pages"><?php echo $strNavigate;?></div>
     </div>


</div>
</div>
<div id="innerc_footer"></div>

</div><!--end innercright!-->


</div><!--end innercontent!-->



<div style="clear:both;"></div> 
</div><!--end innercontain!-->


<? require "../footer.php"; ?>





</body>
</html>
