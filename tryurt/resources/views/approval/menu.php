<style>
    .link-selected{
        color:maroon;
    }
	#lowerLink2{
		padding-left: 115px;
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
		 <li><a href="<?= URL.$subLink ?>inventory"class="submit4 <?php echo ($fc == 'index') ? 'link-selected' : '' ?>">SALES ORDER</a>
            <div><?php echo ($fc == 'index') ? '<img class="img2"  style="margin-left:47px;" src="' . URL . 'public/images/tri2a.png">' : '' ?></div>
        </li>

		
</nav>
<div class="hrlink"></div>
<div class="clear"></div>

