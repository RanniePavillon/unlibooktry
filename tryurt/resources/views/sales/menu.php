<style>
    .link-selected{
        color:maroon;
    }
	#lowerLink2{
		padding-left: 42px;
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
		 <li><a href="<?= URL.$subLink ?>sales"class="submit4 <?php echo ($fc == 'index') ? 'link-selected' : '' ?>">CASH INVOICE</a>
            <div><?php echo ($fc == 'index') ? '<img class="img2"  style="margin-left:47px;" src="' . URL . 'public/images/tri2a.png">' : '' ?></div>
        </li>

        <li><a href="<?= URL.$subLink ?>sales/salesOrder"class="submit4 <?php echo ($fc == 'salesOrder') ? 'link-selected' : '' ?>">SALES ORDER</a>
            <div><?php echo ($fc == 'salesOrder') ? '<img class="img2"  style="margin-left:47px;" src="' . URL . 'public/images/tri2a.png">' : '' ?></div>
        </li>
        </li>
		<li><a href="<?= URL.$subLink ?>sales/deliveryReceipt"class="submit4 <?php echo ($fc == 'deliveryReceipt') ? 'link-selected' : '' ?>">DELIVERY RECEIPT	</a>
            <div><?php echo ($fc == 'deliveryReceipt') ? '<img class="img2"  style="margin-left:47px;" src="' . URL . 'public/images/tri2a.png">' : '' ?></div>
        </li>
		<li><a href="<?= URL.$subLink ?>sales/salesInvoice"class="submit4 <?php echo ($fc == 'salesInvoice') ? 'link-selected' : '' ?>">SALES INVOICE</a>
            <div><?php echo ($fc == 'salesInvoice') ? '<img class="img2"  style="margin-left:47px;" src="' . URL . 'public/images/tri2a.png">' : '' ?></div>
        </li>
		<li><a href="<?= URL.$subLink ?>sales/collection"class="submit4 <?php echo ($fc == 'collection') ? 'link-selected' : '' ?>">COLLECTION</a>
            <div><?php echo ($fc == 'collection') ? '<img class="img2"  style="margin-left:47px;" src="' . URL . 'public/images/tri2a.png">' : '' ?></div>
        </li>
		<li><a href="<?= URL.$subLink ?>sales/cm"class="submit4 <?php echo ($fc == 'cm') ? 'link-selected' : '' ?>">CM</a>
            <div><?php echo ($fc == 'cm') ? '<img class="img2"  style="margin-left:23px;" src="' . URL . 'public/images/tri2a.png">' : '' ?></div>
        </li>
		<li><a href="<?= URL.$subLink ?>sales/salesReturn"class="submit4 <?php echo ($fc == 'salesReturn') ? 'link-selected' : '' ?>">SALES RETURN</a>
            <div><?php echo ($fc == 'salesReturn') ? '<img class="img2"  style="margin-left:47px;" src="' . URL . 'public/images/tri2a.png">' : '' ?></div>
        </li>
		<li><a href="<?= URL.$subLink ?>sales/items"class="submit4 <?php echo ($fc == 'items') ? 'link-selected' : '' ?>">ITEMS</a>
            <div><?php echo ($fc == 'items') ? '<img class="img2"  style="margin-left:29px;" src="' . URL . 'public/images/tri2a.png">' : '' ?></div>
            
        </li>   
		<!--<li><a href="<?= URL.$subLink ?>sales/location"class="submit4 hidden<?php echo ($fc == 'location') ? 'link-selected' : '' ?>">LOCATIONS</a>
            <div><?php echo ($fc == 'location') ? '<img class="img2"  style="margin-left:29px;" src="' . URL . 'public/images/tri2a.png">' : '' ?></div>
            
        </li>   -->
</nav>
<div class="hrlink"></div>
<div class="clear"></div>

