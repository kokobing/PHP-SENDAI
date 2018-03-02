<?php
require "../inc/config.php";
require "../inc/function.class.php";
require "../inc/pagenav.class.php";
require "../inc/cn_header_core.php";//页头 页脚调用 重复调用 如果买个页都涉及 可以写到这里

//取出信息二级目录
$strSQL = "select id_newsdir,name from newsdir where dele=1 and fatherid=1 order by ordernum asc " ;
$objDB->Execute($strSQL);
$newsdir2list=$objDB->GetRows();

//取出招聘信息
if(!isset($_GET[ndir]) || $_GET[ndir]==''){
$intRows = 20;
$strSQLNum = "SELECT COUNT(*) as num from newsinfo as a left join newsdir as b on a.id_newsdir=b.id_newsdir where a.dele=1 and b.lang=0  and b.id_newsdir ='32' order by a.id_newsinfo desc";   
$rs = $objDB->Execute($strSQLNum);
$arrNum = $objDB->fields();
$intTotalNum=$arrNum["num"];

$objPage = new PageNav($intCurPage,$intTotalNum,$intRows);

$objPage->setvar($arrParam);
$objPage->init_page($intRows ,$intTotalNum);
$strNavigate = $objPage->output(1);
$intStartNum=$objPage->StartNum(); 

$strSQL = "select a.* from newsinfo as a left join newsdir as b on a.id_newsdir=b.id_newsdir where a.dele=1 and b.lang=0  and b.id_newsdir ='32'  order by a.id_newsinfo desc" ;
$objDB->SelectLimit($strSQL,$intRows,$intStartNum);
$arrjobs=$objDB->GetRows();

}elseif(isset($_GET[ndir])){
	
$arrParam[0][name]="ndir";
$arrParam[0][value]=$_GET[ndir];	

$intRows = 20;
$strSQLNum = "SELECT COUNT(*) as num from newsinfo  where id_newsdir='".$_GET[ndir]."'  and dele=1 ";   
$rs = $objDB->Execute($strSQLNum);
$arrNum = $objDB->fields();
$intTotalNum=$arrNum["num"];

$objPage = new PageNav($intCurPage,$intTotalNum,$intRows);

$objPage->setvar($arrParam);
$objPage->init_page($intRows ,$intTotalNum);
$strNavigate = $objPage->output(1);
$intStartNum=$objPage->StartNum(); 

$strSQL = "select * from newsinfo  where id_newsdir='".$_GET[ndir]."' and dele=1  order by id_newsinfo desc" ;
$objDB->SelectLimit($strSQL,$intRows,$intStartNum);
$arrjobs=$objDB->GetRows();
}

?>