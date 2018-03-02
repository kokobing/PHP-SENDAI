<div id="left01">
<div id="ltitle">Products</div>
<div id="lmenu">
<ul class="pagelist">
<?php for($i=0;$i<sizeof($pddir2list);$i++){?>
<li class="pagelist"><a href="products.php?id2=<?=$pddir2list[$i][id_proddir];?>" target="_self" class="pagelist"><?=$pddir2list[$i][name];?></a></li>
<?php }?>
</ul>
</div>

</div><!--end left01!-->

<div id="hl2">
<div class="txt_01" id="hl2content">
<?php $contactus=getlayoutinfo(4,content);echo $contactus[content];?>


</div>
<div class="txt_01" id="hl2content2"><img src="../inc/pics/feedback.gif" width="189" height="43" border="0" usemap="#Map" />
  <map name="Map" id="Map">
    <area shape="rect" coords="2,3,186,38" href="/about/feedback.php" />
  </map>
</div>


</div><!--end hl2!-->