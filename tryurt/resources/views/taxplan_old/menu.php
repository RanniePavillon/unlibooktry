<style>
.link-selected{
	color:maroon;
}
</style>

<nav id="lowerlink2">
	<li><a href="<?= URL ?>taxplan"class="submit4 <?php echo ($fc=='index')?'link-selected':''?>">FORECASTED</a>
		<div><?php echo ($fc=='index')? '<img class="img2"  style="margin-left:40px;" src="'. URL .'public/images/tri2a.png">' :'' ?></div>
    </li>
    <li><a href="<?= URL ?>taxplan/current"class="submit4 <?php echo ($fc=='current')?'link-selected':''?>">CURRENT</a>
		<div><?php echo ($fc=='current')? '<img class="img2"  style="margin-left:30px;" src="'. URL .'public/images/tri2a.png">' :'' ?></div>
    </li>
    <li><a href="<?= URL ?>taxplan/taxCalendar"class="submit4 <?php echo ($fc=='taxCalendar')?'link-selected':''?>">TAX CALENDAR</a>
		<div><?php echo ($fc=='taxCalendar')? '<img class="img2"  style="margin-left:40px;" src="'. URL .'public/images/tri2a.png">' :'' ?></div>
    </li>
</nav>
<div class="hrlink"></div>
<div class="clear"></div>

