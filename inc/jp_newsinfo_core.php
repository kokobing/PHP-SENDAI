<?php
require "../../inc/config.php";
require "../../inc/function.class.php";
require "../../inc/pagenav.class.php";
require "../../inc/kr_header_core.php";//页头 页脚调用 重复调用 如果买个页都涉及 可以写到这里

//取出信息二级目录
$strSQL = "select id_newsdir,name from newsdir where dele=1 and fatherid=43 order by ordernum asc " ;
$objDB->Execute($strSQL);
$newsdir2list=$objDB->GetRows();

//新闻内容
$strSQL = "select * from newsinfo where id_newsinfo='".$_GET[newsid]."'  " ;
$objDB->Execute($strSQL);
$onenews=$objDB->fields();

?>