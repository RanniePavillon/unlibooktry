<style>
.link-selected{
	color:maroon;
}

#lowerlink2{
    padding-left: 258px;
}
</style> 

<?php
    $subLink = '';
    if(Session::getSession('UB_SUBDOMAINS'))
    {
        $subLink = Session::getSession('UB_SUBDOMAINS').'/';
    }
?>
<nav id="lowerlink2">
    <li>
		<a href="<?= URL.$subLink ?>setting/index"class="submit4 <?php echo ($fc=='index')?'link-selected':''?>">COMPANY</a>
		<div><?php echo ($fc=='index')? '<img class="img2"  style="margin-left:35px;" src="'. URL .'public/images/tri2a.png">' :'' ?></div>
    </li> 
    <li>
		<a href="<?= URL.$subLink ?>setting/begBalance"class="submit4 <?php echo ($fc=='begBalance')?'menu-link-selected':''?>">BEGINNING BALANCE</a>
		<div><?php echo ($fc=='begBalance')? '<img class="img2"  style="margin-left:70px;" src="'. URL .'public/images/tri2a.png">' :'' ?></div>
    </li> 
	<li>
		<a href="<?= URL.$subLink ?>setting/permission" class="submit4">USER & PERMISSION</a>
		<div><?php echo ($fc=='permission')? '<img class="img2" style="margin-left:45px;" src="'. URL .'public/images/tri2a.png">' :'' ?></div>
    </li>
	<li>
		<a href="<?= URL.$subLink ?>setting/branch" class="submit4">OUTLET BRANCHING</a>
		<div><?php echo ($fc=='branch')? '<img class="img2" style="margin-left:35px;" src="'. URL .'public/images/tri2a.png">' :'' ?></div>
    </li>
	<li>
		<a href="<?= URL.$subLink ?>setting/import" class="submit4 <?php echo ($fc=='import')?'link-selected':''?>">IMPORT & EXPORT</a>
		<div><?php echo ($fc=='import')? '<img class="img2"  style="margin-left:55px;" src="'. URL .'public/images/tri2a.png">' :'' ?></div>
	</li>
 <!--  
	 <li><a href="<?= URL.$subLink ?>setting/change_password" class="submit4 <?php echo ($fc=='change_password')?'link-selected':''?>">CHANGE PASSWORD</a>
    <div><?php // echo ($fc=='change_password')? '<img class="img2" style="margin-left:35px;" src="'. URL .'public/images/tri2a.png">' :'' ?></div>
    </li>-->
	<!-- <li><a href="<?= URL.$subLink ?>setting/invoiceRemarks" class="submit4 <?php echo ($fc=='change_password')?'link-selected':''?>">INVOICE REMARKS</a>
    <?php // echo ($fc=='invoiceRemarks')? '<img class="img2"  style="margin-left:35px;" src="'. URL .'public/images/tri2a.png">' :'' ?>
    </li>-->
</nav>
<div class="hrlink"></div>
<div class="clear"></div>

