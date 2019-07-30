<style>
    .link-selected{
        color:maroon;
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
    <?php if ($userlevel->cashReceipt == 'yes') { ?>   
        <li><a href="<?= URL.$subLink ?>invoice"class="submit4 <?php echo ($fc == 'index') ? 'link-selected' : '' ?>">CASH RECEIPT</a>
            <div><?php echo ($fc == 'index') ? '<img class="img2"  style="margin-left:53px;" src="' . URL . 'public/images/tri2a.png">' : '' ?></div>
            <div> <?php echo ($fc == 'newreceipt') ? '<img class="img2"  style="margin-left:53px;" src="' . URL . 'public/images/tri2a.png">' : '' ?></div>

        </li>
        <?php
    }
    if ($userlevel->billing == 'yes') {
        ?>                                
        <li><a href="<?= URL.$subLink ?>invoice/invoice"class="submit4 <?php echo ($fc == 'invoice') ? 'link-selected' : '' ?>">BILLING</a>
            <div><?php echo ($fc == 'invoice') ? '<img class="img2"  style="margin-left:35px;" src="' . URL . 'public/images/tri2a.png">' : '' ?></div>
            <div><?php echo ($fc == 'add') ? '<img class="img2"  style="margin-left:35px;" src="' . URL . 'public/images/tri2a.png">' : '' ?></div>
        </li> 
        <?php
    }
    if ($userlevel->collections == 'yes') {
        ?>                                
        <!--<li><a href="<?= URL.$subLink ?>invoice/recurring"class="submit4">Recurring</a>
        <?php //echo ($fc=='recurring')? '<img class="img2"  src="'. URL .'public/images/line5.png">' :'' ?>
        </li>-->
        <li><a href="<?= URL.$subLink ?>invoice/collection"class="submit4 <?php echo ($fc == 'collection') ? 'link-selected' : '' ?>">COLLECTION</a>
            <div><?php echo ($fc == 'collection') ? '<img class="img2"  style="margin-left:47px;" src="' . URL . 'public/images/tri2a.png">' : '' ?></div>
        </li>
        <?php
    }
    if ($userlevel->client == 'yes') {
        ?>                                
        <li><a href="<?= URL.$subLink ?>invoice/customers"class="submit4 <?php echo ($fc == 'customers') ? 'link-selected' : '' ?>"> CUSTOMERS</a>
            <div><?php echo ($fc == 'customers' || $fc == 'costumerImport') ? '<img class="img2"  style="margin-left:38px;" src="' . URL . 'public/images/tri2a.png">' : '' ?></div>
        </li>
        <?php
    }
    if ($userlevel->serviceItem == 'yes') {
        ?>                                
        <!--
            <li><a href="<?= URL.$subLink ?>invoice/items" class="submit4">ITEMS</a>
        <?php echo ($fc == 'items' || $fc == 'itemImport') ? '<img class="img2"  src="' . URL . 'public/images/tri2a.png">' : '' ?>
            </li>
        -->
        <li><a href="<?= URL.$subLink ?>invoice/tasks"class="submit4 <?php echo ($fc == 'tasks') ? 'link-selected' : '' ?>">SERVICE ITEM</a>
            <div><?php echo ($fc == 'tasks' || $fc == 'taskImport') ? '<img class="img2" style="margin-left:50px;" src="' . URL . 'public/images/tri2a.png">' : '' ?></div>
        </li>
        <?php
    }
    ?>                                
</nav>
<div class="hrlink"></div>
<div class="clear"></div>

