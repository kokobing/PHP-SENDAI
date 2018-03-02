<?php
require "../../inc/config.php";
require "../../inc/function.class.php";
require "../../inc/pagenav.class.php";
require "../../inc/jp_header_core.php";//页头 页脚调用 重复调用 如果买个页都涉及 可以写到这里


//取出招聘信息
$strSQL = "select * from newsinfo where id_newsinfo='".$_GET[jid]."'  " ;
$objDB->Execute($strSQL);
$onejob=$objDB->fields();

?>