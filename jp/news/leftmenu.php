<div id="left01">
<div id="ltitle">情報</div>
<div id="lmenu">
<ul class="pagelist">
<?php for($i=0;$i<sizeof($newsdir2list);$i++){?>
<li class="pagelist"><a href="news.php?ndir=<?=$newsdir2list[$i][id_newsdir];?>" target="_self" class="pagelist"><?=$newsdir2list[$i][name];?></a></li>
<?php }?>
</ul>
</div>

</div><!--end left01!-->

<div id="hl2jp">
<div class="txt_01" id="hl2content">
<?php $contactus=getlayoutinfo(7,content);echo $contactus[content];?>


</div>
<div class="txt_01" id="hl2content2"><img src="/inc/pics/feedback.gif" width="189" height="43" border="0" usemap="#Map" />
  <map name="Map" id="Map">
    <area shape="rect" coords="3,2,187,38" href="/jp/about/feedback.php" />
  </map>
</div>


</div><!--end hl2!-->