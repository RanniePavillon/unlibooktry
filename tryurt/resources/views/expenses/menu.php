<style>
    .link-selected{
        color:maroon;
    }
	.borderss{
		border:none;
		height: 21px;
		width: 226px;
	}
	.bordersnew{
		width: 224px;
		margin-top: -23px;
		border:none;
		float: left;
		height: 21px;
		/* margin-right: 174px; */
		margin-left: 10px;
	}
	    
	.bordervendor{	
		float: right;
		/* margin-left: 228px; */
		/* width: 150; */
		/* border: solid 1px red; */
		height: 21px;
		margin-top: -23px;
		margin-right: 159px;
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
    <?php
	   
    if ($userlevel->expense == 'yes') {
        ?> 
		
        <li><a href="<?= URL.$subLink ?>expenses" class="submit4 <?php echo ($fc == 'index') ? 'link-selected' : '' ?>">EXPENSES</a>
            <div><?php echo ($fc == 'index') ? '<img class="img2" style="margin-left:42px;" src="' . URL . 'public/images/tri2a.png">' : '' ?></div>
            <div><?php echo ($fc == 'add') ? '<img class="img2" style="margin-left:42px;" src="' . URL . 'public/images/tri2a.png">' : '' ?></div>
        </li> 
        <?php
    }
    if ($userlevel->quickExpense == 'yes') {
        ?>                                
        <li><a href="<?= URL.$subLink ?>expenses/quickExpenses" class="submit4 <?php echo ($fc == 'quickExpenses') ? 'link-selected' : '' ?>">QUICK EXPENSES</a>
            <div><?php echo ($fc == 'quickExpenses') ? '<img class="img2"  style="margin-left:57px;" src="' . URL . 'public/images/tri2a.png">' : '' ?></div>
        </li> 
        <?php
		
    }
	
		?>
        <li><a href="<?= URL.$subLink ?>expenses/billPayable" class="submit4 <?php echo ($fc == 'billPayable') ? 'link-selected' : '' ?>">BILL PAYABLE</a>
            <div><?php echo ($fc == 'billPayable') ? '<img class="img2"  style="margin-left:51px;" src="' . URL . 'public/images/tri2a.png">' : '' ?></div>
        </li> 
        <?php
		
		?>                                
        <li><a href="<?= URL.$subLink ?>expenses/paymentExpense" class="submit4 <?php echo ($fc == 'paymentExpense') ? 'link-selected' : '' ?>">PAYMENT</a>
            <div><?php echo ($fc == 'paymentExpense') ? '<img class="img2"  style="margin-left:37px;" src="' . URL . 'public/images/tri2a.png">' : '' ?></div>
        </li>	
		 <li><a href="<?= URL.$subLink ?>expenses/cashAdvances" class="submit4 <?php echo ($fc == 'cashAdvances') ? 'link-selected' : '' ?>">CASH ADVANCES</a>
            <div><?php echo ($fc == 'cashAdvances') ? '<img class="img2"  style="margin-left:37px;" src="' . URL . 'public/images/tri2a.png">' : '' ?></div>
        </li>	
        <?php
	
    if ($userlevel->vendor == 'yes') {
	
        ?>    
        <li><a href="<?= URL.$subLink ?>expenses/suppliers" class="submit4 <?php echo ($fc == 'suppliers') ? 'link-selected' : '' ?>">VENDOR</a>
            <div><?php echo ($fc == 'suppliers') ? '<img class="img2" style="margin-left:37px;" src="' . URL . 'public/images/tri2a.png">' : '' ?></div>
        </li> 
        <?php
    }
    ?>     
	
</nav>
<div class="hrlink"></div>
<div class="clear"></div>