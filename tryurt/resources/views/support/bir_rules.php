<style>
.taxexpert{
	color:rgb(21, 21, 21) !important;
}
.datetimes{
	color:#1B89D3;
	font-size:12px!important;
	margin-left:10px;
}
.hidden{
	display:none;
}
.birRules{
	cursor:pointer;
}
</style>

<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>views/support/css/list.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>views/support/css/supportheader.css"/>
<script src="<?php echo URL; ?>views/support/js/list.js"></script>
<script src="<?php echo URL; ?>public/js/jquery.js"></script>
<script src="<?php echo URL; ?>public/js/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/js/jquery-ui.js"></script>
<script src="<?php echo URL; ?>public/js/jquery.redirect.min.js"></script>
<script src="<?php echo URL; ?>public/js/jquery.price_format.1.8.js"></script>
<script src="<?php echo URL; ?>public/js/jquery.number.min.js"></script>



<?php
	$cl = strtolower(Session::getSession('class'));
	$fc = Session::getSession('function');
	
	// $data = $this->taxUpdate;
	
	$recTotal = TblTaxUpdatesMySqlExtDAO::getTotalTaxUpdates();
	$data = TblTaxUpdatesMySqlExtDAO::getPageLimitTaxUpdates();
	// print_r($recTotal);
	// print_r($data);
?>
<div class="listformcontainer">
	<div class="listformsupportlist">
		<img class="logosupportimg"  src="<?= URL ?>public/images/medical PNG.png">
		<div class="linkformsupport">
				 <a href="<?= URL ?>support/lists" style="padding: 5px 9px;" class="mainHeaderLink supportlink">ASK TAX EXPERT </a>
				  <a href="<?= URL ?>support/articles" style="padding: 5px 9px;" class="mainHeaderLink supportlink">FAQ</a>
				   <a href="<?= URL ?>support/taxNews" style="padding: 5px 9px;" class="mainHeaderLink supportlink">TAX NEWS FOR DOCTORS </a>
					<a href="<?= URL ?>support/birRules" style="padding: 5px 9px;" class="mainHeaderLink supportlink taxexpert">BIR TAX RULES & UPDATES </a>
		</div>
		<div class="mainmenuform">
			<a href="<?= URL ?>Dashboard"><input type="button" class="mainmenu"></a>
		</div>
		<div class="bodyask bodyarticle">
			<?php
			if($data){
				foreach($data as $each){
			?>
				<div class="spacearticles">
				<?php
					
				?>
					<div>
						<span class="commentsname birRules">
							<input type="hidden" class="birRules_id" value="<?= $each->id?>">
							<?= $each->title ?>
							<span class="datetimes"> <?= date('F d',strtotime($each->transDate))?>
								<span> at <?= date('h:i a',strtotime($each->transDate))?></span>
							</span>
						</span>
					</div>
					<div class="commentsnamearticles bir_info bir_info_<?= $each->id?> hidden" style="text-align:justify;">
						<span><?= $each->remarks?>
						<!--<a href="<?= $each->link?>" class="view" target="_blank" style="color: 183867;font-weight: bold;">VIEW FULL CONTENT</a></span>
						<br>
						<br>
						<a href="" class="likes">Like</a>&nbsp
						<a href="" class="likes">Comment</a>&nbsp
						<a href="" class="likes">Share</a>
						-->
					</div>
				</div>
			<?php
				}
			}
			?>
			
			<?php
			//$pageTotal = 1;
			//if(round(($recTotal / 5),0) != ($recTotal / 5)){
			//	$pageTotal = round(($recTotal / 5),0) + 1;
			//} else {
			//	$pageTotal = round(($recTotal / 5),0);
			//}
			//$dafaultPage = isset($_GET['page']) ? $_GET['page'] : 1;
			?>
			<!--<div class="paginated">
				<?php
				if($dafaultPage != 1){
				?>
					<a href="?page=<?= 1?>" class="paginateimg"><< First</a> &nbsp 
					<a href="?page=<?= $dafaultPage == 1 ? 1 : $dafaultPage - 1 ?>" class="paginateimg"><<</a> &nbsp 
				}
					for($x = 1; $x <= $pageTotal; $x++){
				?>
				
					<a href="?page=<?= $x ?>" class="paginateimg"><?= $x ?></a> &nbsp 
				<?php
					}
				if($pageTotal != $dafaultPage){
				?>
					<a href="?page=<?= $pageTotal == $dafaultPage ? $pageTotal : $dafaultPage + 1?>" class="paginateimg">>></a> &nbsp 
					<a href="?page=<?= $pageTotal?>" class="paginateimg">Last >></a>
				<?php
				}
				?>
			</div>-->
			
			 <div class="paginate2">
                <?php
                echo $this->display_pages ?>     
            </div>
			
			
		</div>
		
			
	</div>
</div>

<div class="hidden popup"></div>

<script>
	$(function(){
		$('.birRules').click(function(){
			bir_id = $(this).find('.birRules_id').val();
			
			if(!$('.bir_info_'+bir_id).hasClass('hidden')){
				$('.bir_info').addClass('hidden');
				$('.bir_info_'+bir_id).addClass('hidden');
			}else{
				$('.bir_info').addClass('hidden');
				$('.bir_info_'+bir_id).removeClass('hidden');
			}
			
		});
	});
</script>