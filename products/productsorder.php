<?php
require "../inc/cn_productsorder_core.php";
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
<div id="innerc_headertitle">Products Order</div>
<div id="innerc_content">


<div style="margin:0px 1px 0px 1px;padding:10px;">

<div  id="notice" class="noticediv"></div>
<table width="100%" border="0" cellspacing="0" cellpadding="3" >

<tr> 
      <td width="104" align="right">Product Name：</td>
      <td width="533"> 
        <input type="text" name="productname" id="productname" value="" class="input" style="width:399px" />
        <font style='color:red'>*</font> <div style="padding-top:3px;color:#666"></div>  </td>
    </tr>

<tr> 
      <td width="104" align="right">Quantity：</td>
      <td> 
        <input type="text" name="productsnum" id="productsnum" value="" class="input" style="width:399px" />
        <font style='color:red'>*</font> <div style="padding-top:3px;color:#666"></div>  </td>
    </tr>

<tr> 
      <td width="104" align="right">Your Name：</td>
      <td> 
        <input type="text" name="name" id="name" value="" class="input" style="width:399px" />
        <font style='color:red'>*</font> <div style="padding-top:3px;color:#666"></div>  </td>
    </tr>

<tr> 
      <td width="104" align="right">Tel：</td>
      <td> 
        <input type="text" name="tel" id="tel" value="" class="input" style="width:399px" />
        <font style='color:red'>*</font> <div style="padding-top:3px;color:#666"></div>  </td>
    </tr>

<tr> 
      <td width="104" align="right">Addr：</td>
      <td> 
        <input type="text" name="address" id="address" value="" class="input" style="width:399px" />
         <div style="padding-top:3px;color:#666"></div>  </td>
    </tr>

<tr> 
      <td width="104" align="right">Email：</td>
      <td> 
        <input type="text" name="email" id="email" value="" class="input" style="width:399px" />
         <div style="padding-top:3px;color:#666"></div>  </td>
    </tr>

    <tr> 
      <td width="104" align="right">Your Request：</td>
      <td> 
        <textarea name="content" id="content" rows="10" class="textarea" style="width:399px" ></textarea>
         
       <font style='color:red'>*</font><div style="padding-top:3px;color:#666"></div>  </td>
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
						if($.trim($("#productname").val())==''){alert('Please enter the product name');return false;}	
						if($.trim($("#productsnum").val())==''){alert('Please enter the order quantity');return false;}	
						if($.trim($("#name").val())==''){alert('Please enter your name');return false;}	
						if($.trim($("#tel").val())==''){alert('Please enter a contact phone');return false;}	
						if($.trim($("#content").val())==''){alert('Please enter your request');return false;}	
						$.post('/ajax_sendmessage.php',{productname:$("#productname").val(),productsnum:$("#productsnum").val(),name:$("#name").val(),tel:$("#tel").val(),address:$("#address").val(),email:$("#email").val(),content:$("#content").val()},function(data) {
                               var myjson = '';eval('myjson=' + data + ';');
                               alert(myjson.info);
							   window.location.href='/';
                         });

}
</script>



</body>
</html>
