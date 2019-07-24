<style>
    .link-selected{
        color:maroon;
    }
	#lowerLink2{
		    padding-left: 169px !important;
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
     
        <li><a href="<?= URL.$subLink ?>purchase"class="submit4 <?php echo ($fc == 'index') ? 'link-selected' : '' ?>">PURCHASE ORDER</a>
            <div><?php echo ($fc == 'index') ? '<img class="img2"  style="margin-left:47px;" src="' . URL . 'public/images/tri2a.png">' : '' ?></div>
           
        </li>
		<li><a href="<?= URL.$subLink ?>purchase/receiveOrder"class="submit4 <?php echo ($fc == 'receiveOrder') ? 'link-selected' : '' ?>">RECEIVE ORDER</a>
            <div><?php echo ($fc == 'receiveOrder') ? '<img class="img2"  style="margin-left:47px;" src="' . URL . 'public/images/tri2a.png">' : '' ?></div>
            
        </li>
		<li><a href="<?= URL.$subLink ?>purchase/purchaseInvoice"class="submit4 <?php echo ($fc == 'purchaseInvoice') ? 'link-selected' : '' ?>">PURCHASE INVOICE</a>
            <div><?php echo ($fc == 'purchaseInvoice') ? '<img class="img2"  style="margin-left:47px;" src="' . URL . 'public/images/tri2a.png">' : '' ?></div>
           
        </li>
		<li><a href="<?= URL.$subLink ?>purchase/purchaseReturn"class="submit4 <?php echo ($fc == 'purchaseReturn') ? 'link-selected' : '' ?>">PURCHASE RETURN</a>
            <div><?php echo ($fc == 'purchaseReturn') ? '<img class="img2"  style="margin-left:47px;" src="' . URL . 'public/images/tri2a.png">' : '' ?></div>
           
        </li>
		<li><a href="<?= URL.$subLink ?>purchase/items"class="submit4 <?php echo ($fc == 'items') ? 'link-selected' : '' ?>">ITEMS</a>
            <div><?php echo ($fc == 'items') ? '<img class="img2"  style="margin-left:29px;" src="' . URL . 'public/images/tri2a.png">' : '' ?></div>
            
        </li>
		
                                
</nav>
<div class="hrlink"></div>
<div class="clear"></div>

