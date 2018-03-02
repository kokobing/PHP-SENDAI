<?php
require "../inc/cn_feedback_core.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="<?php echo $setinfo[keywords];?>" />
<meta name="description" content="<?php echo $setinfo[description];?>" />
<title><?php echo $setinfo[title];?></title>
<link href="../inc/css/css1.css" rel="stylesheet" type="text/css">
<link href="../inc/css/feedbackform.css" rel="stylesheet" type="text/css">
<script src="/inc/js/jquery.min.js"></script>
<script src="/inc/js/feedback.js"></script>

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
<div id="innerc_headertitle">Feedback</div>
<div id="innerc_content">


<div style="margin:0px 1px 0px 1px;padding:10px;">

<div  id="notice" class="noticediv"></div>
<table width="100%" border="0" cellspacing="0" cellpadding="3" >

<tr> 
      <td width="104" align="right">Message Title：</td>
      <td width="533"> 
        <input type="text" name="title" id="title" value="" class="input" style="width:399px" />
        <font style='color:red'>*</font> <div style="padding-top:3px;color:#666"></div>  </td>
    </tr>

<tr> 
      <td width="104" align="right">Content：</td>
      <td><textarea name="content" id="content" rows="10" class="textarea" style="width:399px" ></textarea>
        <font style='color:red'>*</font> <div style="padding-top:3px;color:#666"></div>  </td>
    </tr>

<tr> 
      <td width="104" align="right">Customer Name：</td>
      <td> 
        <input type="text" name="customername" id="customername" value="" class="input" style="width:399px" />
        <font style='color:red'>*</font> <div style="padding-top:3px;color:#666"></div>  </td>
    </tr>

<tr> 
      <td width="104" align="right">Contact：</td>
      <td> 
        <input type="text" name="contact" id="contact" value="" class="input" style="width:399px" />
        <font style='color:red'>*</font> <div style="padding-top:3px;color:#666"></div>  </td>
    </tr>

<tr> 
      <td width="104" align="right">Tel：</td>
      <td> 
        <input type="text" name="tel" id="tel" value="" class="input" style="width:399px" />
        <font style='color:red'>*</font>
<div style="padding-top:3px;color:#666"></div>  </td>
    </tr>

<tr> 
      <td width="104" align="right">QQ/MSN：</td>
      <td> 
        <input type="text" name="qqmsn" id="qqmsn" value="" class="input" style="width:399px" />
         <div style="padding-top:3px;color:#666"></div>  </td>
    </tr>


	<tr> 
	  <td width="104" align="right"></td>
	  <td>
	    </td>
	  </tr>
    <tr> 
      <td width="104" align="right">&nbsp;</td>
      <td height="30">
        <input type="submit" name="Submit" value="Submit" class="submit" onclick="mailsend();" >
	  </td>
    </tr>
  </table>


</div>


</div>
</div>


</div><!--end innercright!-->


</div><!--end innercontent!-->



<div style="clear:both;"></div> 
</div><!--end innercontain!-->


<? require "../footer.php"; ?>


<script language="JavaScript">
function mailsend() {
						if($.trim($("#title").val())==''){alert('Please enter the Message Title');return false;}	
						if($.trim($("#content").val())==''){alert('Please enter the Message Content');return false;}	
						if($.trim($("#customername").val())==''){alert('Please enter Customer name');return false;}	
						if($.trim($("#contact").val())==''){alert('Please enter your name');return false;}	
						if($.trim($("#tel").val())==''){alert('Please enter telphone');return false;}	
						$.post('/ajax_sendmessage2.php',{title:$("#title").val(),content:$("#content").val(),customername:$("#customername").val(),contact:$("#contact").val(),tel:$("#tel").val(),qqmsn:$("#qqmsn").val()},function(data) {
                               var myjson = '';eval('myjson=' + data + ';');
                               alert(myjson.info);
							   window.location.href='/';
                         });

}
</script>



</body>
</html>
