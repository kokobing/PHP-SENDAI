<?php  
require "../inc/config.php";
require "../inc/function.class.php";


$request_name = $_REQUEST["name"];
$request_post = $_REQUEST["post"];
$request_sex = $_REQUEST["sex"];
$request_birth = $_REQUEST["birth"];
$request_marry = $_REQUEST["marry"];
$request_graduated = $_REQUEST["graduated"];
$request_degree = $_REQUEST["degree"];
$request_professional = $_REQUEST["professional"];
$request_gradtime = $_REQUEST["gradtime"];
$request_tel = $_REQUEST["tel"];
$request_mobi = $_REQUEST["mobi"];
$request_address = $_REQUEST["address"];
$request_email = $_REQUEST["email"];
$request_expertise = $_REQUEST["expertise"];
$request_eduexp = $_REQUEST["eduexp"];
$request_workexp = $_REQUEST["workexp"];



if(trim($request_name)!=''){

$subject="The Apply for the Job from the site :".$request_name." -  Time：".gmdate('Y-m-d H:i:s', time() + 3600 * 8);//主题
//内容
$body="
The Apply for the Job from the site：<BR><BR>

Name ：".$request_name."<BR>
Positions to be candidates : ".$request_post."<BR>
Sex : ".$request_sex."<BR>
Date of birth : ".$request_birth."<BR>
Marital status : ".$request_marry."<BR>
Graduated : ".$request_graduated."<BR>
Degree : ".$request_degree."<BR>
Professional : ".$request_professional."<BR>
Graduation time : ".$request_gradtime."<BR>
Tel : ".$request_tel."<BR>
Mobi : ".$request_mobi."<BR>
Address : ".$request_address."<BR>
Email : ".$request_email."<BR>
Expertise : ".$request_expertise."<BR>
Education experience : ".$request_eduexp."<BR>
Work experience : ".$request_workexp."<BR><BR><BR>

".date("Y")."-".date("m")."-".date("d")."";


  	$strSQL="INSERT INTO newsinfo(title,content,id_newsdir,indate,newsdate) values('$subject','$body','51',now(),now())";
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

