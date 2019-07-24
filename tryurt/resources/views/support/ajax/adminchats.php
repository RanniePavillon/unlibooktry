<?php
$chat = $this->chats;
if($chat){
	foreach($chat as $each){
		if($each->type == 'tax expert'){
?>
			<div class="secondcomment chatCov" id="<?= $each->id ?>">
				<div class="tr">
					<span><img class="logoexpert logo_user"  src="<?= URL ?>public/images/expertimg.png"></span>
					<span class="commentsname comment_user"><?= 'You'//$each->type?>
					<span class="datetimes"><?= date('F m, Y h:i a',strtotime($each->date))?></span></span>
				</div>
				<div class="commentsform user_commentForm"><?= $each->message?></div>
				
			</div>
<?php
		}elseif($each->type == 'user'){
?>
			<div class="chatCov" id="<?= $each->id ?>">
				<div>
					<span><img class="logoexpert log_taxExpert"  src="<?= URL ?>public/images/expertimg.png"></span>
					<span class="commentsname comment_taxExperts"><?= $each->type?>
					<span class="datetimes"><?= date('F m, Y h:i a',strtotime($each->date))?></span></span>
				</div>
				<div class="commentsform user_commentForm"><?= $each->message?></div>
			</div>

<?php
		}
	}
}