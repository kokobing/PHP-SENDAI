<?php  
require "../inc/config.php";
require "../inc/function.class.php";

$request_productname = $_REQUEST["productname"];
$request_productsnum = $_REQUEST["productsnum"];
$request_name = $_REQUEST["name"];
$request_tel = $_REQUEST["tel"];
$request_address = $_REQUEST["address"];
$request_email = $_REQUEST["email"];
$request_content = $_REQUEST["content"];

if(trim($request_productname)!='' and trim($request_productsnum)!='' and trim($request_name)!='' and trim($request_tel)!='' and trim($request_content)!=''){

$subject="Product Order from the site :".$request_name." -  Time：".gmdate('Y-m-d H:i:s', time() + 3600 * 8);//主题
//内容
$body="
The latest message from the site：<BR><BR>

*Product Name ：".$request_productname."<BR>
*Quantity : ".$request_productsnum."<BR>
*He/Her Name : ".$request_name."<BR>
*Tel : ".$request_tel."<BR>
Addr : ".$request_address."<BR>
Email : ".$request_email."<BR>
*He/Her Request : ".$request_content."<BR><BR><BR>

".date("Y")."-".date("m")."-".date("d")."";


  	$strSQL="INSERT INTO newsinfo(title,content,id_newsdir,indate,newsdate) values('$subject','$body','39',now(),now())";
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

