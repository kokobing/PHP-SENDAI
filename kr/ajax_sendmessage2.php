<?php  
require "../inc/config.php";
require "../inc/function.class.php";

$request_title = $_REQUEST["title"];
$request_content = $_REQUEST["content"];
$request_customername = $_REQUEST["customername"];
$request_contact = $_REQUEST["contact"];
$request_tel = $_REQUEST["tel"];
$request_qqmsn = $_REQUEST["qqmsn"];

if(trim($request_title)!='' and trim($request_content)!='' and trim($request_customername)!='' and trim($request_contact)!='' and trim($request_tel)!=''){

$subject="The latest feedback message from the site :".$request_customername." -  Time：".gmdate('Y-m-d H:i:s', time() + 3600 * 8);//主题
//内容
$body="
The latest message from the site：<BR><BR>

*Message Title ：".$request_title."<BR>
*Content : ".$request_content."<BR>
*Customer Name : ".$request_customername."<BR>
*Contact : ".$request_contact."<BR>
Tel : ".$request_tel."<BR>
QQ/MSN : ".$request_qqmsn."<BR><BR><BR>

".date("Y")."-".date("m")."-".date("d")."";


  	$strSQL="INSERT INTO newsinfo(title,content,id_newsdir,indate,newsdate) values('$subject','$body','38',now(),now())";
	$objDB->Execute($strSQL);
	
  $arr['info']="Message is successful, we will promptly contact you Rockwell!";
  $myjson= json_encode($arr);
  echo $myjson;


}else{

 $arr['info']="Can not be empty, please re-submit!";
  $myjson= json_encode($arr);
  echo $myjson;

}


?>

