
<?php
    $subLink = '';
    if(Session::getSession('UB_SUBDOMAINS'))
    {
        $subLink = Session::getSession('UB_SUBDOMAINS').'/';
    }
?>
<nav id="lowerlink2">
	<li><a href="<?= URL.$subLink ?>timeTracking"class="submit4">Time Sheet</a>
    <?php echo ($fc=='index')? '<img class="img2"  src="'. URL .'public/images/line5.png">' :'' ?>
    </li> 
    <li><a href="<?= URL.$subLink ?>timeTracking/projects"class="submit4">Projects</a>
    <?php echo ($fc=='projects')? '<img class="img2"  src="'. URL .'public/images/line5.png">' :'' ?>
    </li>
   <!-- <li><a href="<?= URL.$subLink ?>timeTracking/tasks"class="submit4">Tasks</a>
    <?php echo ($fc=='tasks')? '<img class="img2"  src="'. URL .'public/images/line5.png">' :'' ?>
	</li>-->
    
   
</nav>
<div class="hrlink"></div><div class="clear"></div>



