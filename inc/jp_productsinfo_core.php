<?php
require "../../inc/config.php";
require "../../inc/function.class.php";
require "../../inc/pagenav.class.php";
require "../../inc/kr_header_core.php";//页头 页脚调用 重复调用 如果买个页都涉及 可以写到这里


//取出产品二级目录
$strSQL = "select id_proddir,name from productdir where dele=1 and fatherid=13 order by ordernum asc " ;
$objDB->Execute($strSQL);
$pddir2list=$objDB->GetRows();

//抽出单个产品
$strSQL = "SELECT * from productinfo where id_prodinfo=$_GET[pid] and dele='1'";   
$objDB->Execute($strSQL);
$oneproduct=$objDB->fields();

?>