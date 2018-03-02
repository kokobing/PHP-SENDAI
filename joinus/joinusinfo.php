<?php
require "../inc/cn_joinusinfo_core.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="<?php echo $setinfo[keywords];?>" />
<meta name="description" content="<?php echo $setinfo[description];?>" />
<title><?php echo $setinfo[title];?></title>
<link href="../inc/css/css1.css" rel="stylesheet" type="text/css">
<link href="../inc/css/jobcontent.css" rel="stylesheet" type="text/css">
<link href="../inc/css/jobform.css" rel="stylesheet" type="text/css" />
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
<div id="innerc_headertitle">Join Us</div>
<div id="innerc_content">


<!-- 职位信息详情 -->

<div id='pdv_8407' class='pdv_class'  title='职位信息' style='width:682px;height:450px;top:52px;left:252px; z-index:11'>
<div id='spdv_8407' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
	<div style="height:25px;margin:1px;display:none;background:;">
		<div style="float:left;margin-left:12px;line-height:25px;font-weight:bold;color:">
		职位信息
		</div>
		<div style="float:right;margin-right:10px;display:none">
		<a href="-1" style="line-height:25px;color:">更多</a>
		</div>
	</div>
<div style="padding:0px">

<div id="jobcontent">
	
<?=$onejob[content];?>


</div>

</div>
</div>

</div>
</div>

<!-- 应聘申请表单 -->

<div id='pdv_8408' class='pdv_class'  title='Apply for the Job' style='width:683px;height:890px;top:458px;left:253px; z-index:12'>
<div id='spdv_8408' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px #dddddd solid;background:#fff;">
	<div style="height:25px;margin:1px;display:block;background:#f5f5f5;">
		<div style="float:left;margin-left:12px;line-height:25px;font-weight:bold;color:#505050">
		Apply for the Job
		</div>
	</div>
<div style="padding:20px">

<div  id="notice" class="noticediv"></div>

<table width="100%" border="0" cellspacing="0" cellpadding="3" >

<tr> 
      <td width="137" align="right">Name：</td>
      <td width="494"> 
        <input name="name" type="text" class="input" id="name" style="width:200px" value="" />
        <font style='color:red'>*</font> <div style="padding-top:3px;color:#666"></div>  </td>
    </tr>
    
<tr> 
      <td width="137" align="right">Positions to be Candidates：</td>
      <td width="494"> 
        <input name="post" type="text" class="input" id="post" style="width:200px" value="" />
        <font style='color:red'>*</font> <div style="padding-top:3px;color:#666"></div>  </td>
    </tr>

    <tr> 
      <td width="137" align="right">Sex：</td>
      <td><font style='color:red'>
        <input name="sex" type="text" class="input" id="sex" style="width:60px" value="" />
        *</font> <div style="padding-top:3px;color:#666"></div> </td>
    </tr>


<tr> 
      <td width="137" align="right">Date of birth：</td>
      <td> 
        <input name="birth" type="text" class="input" id="birth" style="width:200px" value="" />
        <font style='color:red'>*</font> <div style="padding-top:3px;color:#666"></div>  </td>
    </tr>

    <tr> 
      <td width="137" align="right">Marital status：</td>
      <td><font style='color:red'>
        <input name="marry" type="text" class="input" id="marry" style="width:60px" value="" />
        *</font> <div style="padding-top:3px;color:#666"></div> </td>
    </tr>


<tr> 
      <td width="137" align="right">Graduated：</td>
      <td> 
        <input name="graduated" type="text" class="input" id="graduated" style="width:300px" value="" />
        <font style='color:red'>*</font> <div style="padding-top:3px;color:#666"></div>  </td>
    </tr>

<tr> 
      <td width="137" align="right">Degree：</td>
      <td> 
        <input name="degree" type="text" class="input" id="degree" style="width:200px" value="" />
        <font style='color:red'>*</font> <div style="padding-top:3px;color:#666"></div>  </td>
    </tr>

<tr> 
      <td width="137" align="right">Professional：</td>
      <td> 
        <input name="professional" type="text" class="input" id="professional" style="width:200px" value="" />
        <font style='color:red'>*</font> <div style="padding-top:3px;color:#666"></div>  </td>
    </tr>

<tr> 
      <td width="137" align="right">Graduation time：</td>
      <td> 
        <input name="gradtime" type="text" class="input" id="gradtime" style="width:200px" value="" />
        <font style='color:red'>*</font> <div style="padding-top:3px;color:#666"></div>  </td>
    </tr>

<tr> 
      <td width="137" align="right">Tel：</td>
      <td> 
        <input type="text" name="tel" id="tel" value="" class="input" style="width:200px" />
        <font style='color:red'>*</font> <div style="padding-top:3px;color:#666"></div>  </td>
    </tr>

<tr> 
      <td width="137" align="right">Mobi：</td>
      <td> 
        <input name="mobi" type="text" class="input" id="mobi" style="width:200px" value="" />
         <div style="padding-top:3px;color:#666"></div>  </td>
    </tr>

<tr> 
      <td width="137" align="right">Address：</td>
      <td> 
        <input type="text" name="address" id="address" value="" class="input" style="width:300px" />
        <font style='color:red'>*</font> <div style="padding-top:3px;color:#666"></div>  </td>
    </tr>

<tr> 
      <td width="137" align="right">Email：</td>
      <td> 
        <input type="text" name="email" id="email" value="" class="input" style="width:300px" />
        <font style='color:red'>*</font> <div style="padding-top:3px;color:#666"></div>  </td>
    </tr>

<tr> 
      <td width="137" align="right">Expertise：</td>
      <td> 
        <input name="expertise" type="text" class="input" id="expertise" style="width:399px" value="" />
        <font style='color:red'>*</font> <div style="padding-top:3px;color:#666"></div>  </td>
    </tr>

    <tr> 
      <td width="137" align="right">Education experience：</td>
      <td> 
        <textarea name="eduexp"  rows="10" class="textarea" id="eduexp" style="width:399px" ></textarea>
        <font style='color:red'>*</font> 
        <div style="padding-top:3px;color:#666"></div>  </td>
    </tr>


    <tr> 
      <td width="137" align="right">Work experience：</td>
      <td> 
        <textarea name="workexp"  rows="10" class="textarea" id="workexp" style="width:399px" ></textarea>
        <font style='color:red'>*</font> 
        <div style="padding-top:3px;color:#666"></div>  </td>
    </tr>


    
	<tr> 
      <td width="137" align="right"></td>
      <td>
	  </td>
    </tr>
    <tr> 
      <td width="137" align="right">&nbsp;</td>
      <td height="30">
        <input type="submit" name="Submit" value="Submit" class="submit" onclick="mailsend();">
	  </td>
    </tr>
  </table>


</div>
</div>

</div>
</div>
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
						if($.trim($("#name").val())==''){alert('Please enter your name');return false;}	
						if($.trim($("#post").val())==''){alert('Please enter the positions you need to apply for');return false;}	
						if($.trim($("#sex").val())==''){alert('Please enter your gender');return false;}	
						if($.trim($("#birth").val())==''){alert('Please enter your birthday');return false;}	
						if($.trim($("#marry").val())==''){alert('Please enter your marital status');return false;}	
						if($.trim($("#graduated").val())==''){alert('Please enter your Graduated');return false;}	
						if($.trim($("#degree").val())==''){alert('Please enter your qualifications');return false;}	
						if($.trim($("#professional").val())==''){alert('Please enter your professional');return false;}	
						if($.trim($("#gradtime").val())==''){alert('Please enter your graduation time');return false;}	
						if($.trim($("#tel").val())==''){alert('Please enter your Telephone');return false;}	
						if($.trim($("#address").val())==''){alert('Please enter your Address');return false;}	
						if($.trim($("#email").val())==''){alert('Please enter your email');return false;}	
						if($.trim($("#expertise").val())==''){alert('Please enter your professional expertise');return false;}	
						if($.trim($("#eduexp").val())==''){alert('Please enter your Education experience');return false;}	
						if($.trim($("#workexp").val())==''){alert('Please enter your Work experience');return false;}	
						
						$.post('/ajax_sendmessage3.php',{name:$("#name").val(),post:$("#post").val(),sex:$("#sex").val(),birth:$("#birth").val(),marry:$("#marry").val(),graduated:$("#graduated").val(),degree:$("#degree").val(),professional:$("#professional").val(),gradtime:$("#gradtime").val(),tel:$("#tel").val(),address:$("#address").val(),email:$("#email").val(),expertise:$("#expertise").val(),eduexp:$("#eduexp").val(),workexp:$("#workexp").val(),mobi:$("#mobi").val()},function(data) {
                               var myjson = '';eval('myjson=' + data + ';');
                               alert(myjson.info);
							   window.location.href='/';
                         });

}
</script>



</body>
</html>
