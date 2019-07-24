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
    <?php
    if ($userlevel->cOA == 'yes') {
        ?>                                
        <li><a href="<?= URL.$subLink ?>accounting"class="submit4 <?php echo ($fc == 'index') ? 'link-selected' : '' ?>">CHART OF ACCOUNTS</a>
            <div><?php echo ($fc == 'index') ? '<img class="img2"  style="margin-left:60px;" src="' . URL . 'public/images/tri2a.png">' : '' ?></div>
        </li>
        <?php
    }
    if ($userlevel->journalEntry == 'yes') {
        ?>                                
        <li><a href="<?= URL.$subLink ?>accounting/journal_entry"class="submit4 <?php echo ($fc == 'journal_entry') ? 'link-selected' : '' ?>">JOURNAL ENTRY</a>
            <div><?php echo ($fc == 'journal_entry') ? '<img class="img2"  style="margin-left:50px;" src="' . URL . 'public/images/tri2a.png">' : '' ?></div>
        </li>
        <?php
    }
    ?>                                
</nav>
<div class="hrlink"></div>
<div class="clear"></div>

