<?php
require "../inc/config.php";
require "../inc/function.class.php";


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="<?php echo $setinfo[keywords];?>" />
<meta name="description" content="<?php echo $setinfo[description];?>" />
<title><?php echo $setinfo[title];?></title>
<link href="../inc/css/css1.css" rel="stylesheet" type="text/css">
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
<? require "header.php"; ?>



<div id="contain">
<? require "mainadv.php"; ?>


<div id="homecontent">
<div id="homecontentleft">
<div id="hl1">
<div id="h1_input1"><input name="aa" type="text" style="width:140px; height:15px;" /></div>
<div id="h1_input2"><input name="aa" type="text" style="width:140px; height:15px;" /></div>
</div>
<div id="hl2jp">
<div class="txt_01" id="hl2content">
<?php $contactus=getlayoutinfo(7,content);echo $contactus[content];?>
</div>
<div class="txt_01" id="hl2content2"><img src="/inc/pics/feedback.gif" width="189" height="43" border="0" usemap="#Map2" />
  <map name="Map2" id="Map2">
    <area shape="rect" coords="2,3,186,40" href="/jp/about/feedback.php" />
  </map>
</div>


</div>

</div><!--end homecontentleft!-->

<div id="homecontentmid">

<div  style='width:487px;height:213px;top:218px;left:233px; z-index:6'>
<div  style="border:0px;height:100%;padding:0;margin:0;background:#fff;">
<div style="height:36px;border:0px;padding:0;margin:0;background:url(/inc/pics/top.gif) 0px 0px no-repeat;">

<div style="float:left;width:100px;height:32px;font:14px/30px Arial, Helvetica, sans-serif;color:#498313;padding-left:45px;padding-top:5px; text-align:left">業種资讯
	</div>

	<div style="float:right;width:60px;height:36px;">

	<a href="/jp/news/news.php?ndir=45" style="margin-right:40px;display:inline"><img src="/inc/pics/more.gif" border="0" style="border:0px;padding-top:20px;" /></a>

	</div>

</div>

<div style="margin:0px 1px 0px 1px;padding:5px;">


<ul class="newslist_time">

<?php 
$strSQL = "select * from newsinfo  where id_newsdir='45' and dele=1  order by id_newsinfo desc limit 7" ;
$objDB->Execute($strSQL);
$industrynewslist=$objDB->GetRows();

for($i=0;$i<sizeof($industrynewslist);$i++){
?>

<li class="newslist_time"><div class="time"><?php echo $industrynewslist[$i][newsdate];?></div><a href="/jp/news/newsinfo.php?newsid=<?php echo $industrynewslist[$i][id_newsinfo];?>" target="_self" class="newslist_time"><?php echo cutstr($industrynewslist[$i][title],50,1);?></a></li>
<?php }?>




</ul>
</div>
</div>
</div>



<div  style='width:487px;height:213px;top:218px;left:233px; z-index:6'>
<div  style="border:0px;height:100%;padding:0;margin:0;background:#fff;">
<div style="height:36px;border:0px;padding:0;margin:0;background:url(/inc/pics/top.gif) 0px 0px no-repeat;">

<div style="float:left;width:100px;height:32px;font:14px/30px Arial, Helvetica, sans-serif;color:#498313;padding-left:45px;padding-top:5px; text-align:left">会社情報
	</div>

	<div style="float:right;width:60px;height:36px;">

	<a href="/jp/news/news.php?ndir=44" style="margin-right:40px;display:inline"><img src="/inc/pics/more.gif" border="0" style="border:0px;padding-top:20px;" /></a>

	</div>

</div>

<div style="margin:0px 1px 0px 1px;padding:5px;">


<ul class="newslist_time">

<?php 
$strSQL = "select * from newsinfo  where id_newsdir='44' and dele=1  order by id_newsinfo desc limit 7" ;
$objDB->Execute($strSQL);
$companynewslist=$objDB->GetRows();

for($i=0;$i<sizeof($companynewslist);$i++){
?>

<li class="newslist_time"><div class="time"><?php echo $companynewslist[$i][newsdate];?></div><a href="/jp/news/newsinfo.php?newsid=<?php echo $companynewslist[$i][id_newsinfo];?>" target="_self" class="newslist_time"   ><?php echo cutstr($companynewslist[$i][title],50,1);?></a></li>
<?php }?>

</ul>
</div>
</div>
</div>




</div><!--end homecontentmid!-->
<div id="homecontentright"><img src="/inc/pics/homeright.jpg" width="230" height="427" border="0" usemap="#Map" />
  <map name="Map" id="Map">
    <area shape="rect" coords="16,11,218,67" href="/jp/about/about.php?pageid=10" />
    <area shape="rect" coords="15,77,217,136" href="/jp/products/products.php" />
    <area shape="rect" coords="15,146,216,203" href="/jp/products/productsorder.php" />
  </map>
</div><!--end homecontentright!-->
</div>




</div><!--end contain!-->


<? require "footer.php"; ?>





</body>
</html>
