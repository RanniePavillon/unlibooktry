<?php
	if($this->chatTo){
		foreach($this->chatTo as $each){
?>
	<div id="<?= $each->medAccountId ?>" class="chatWith">
		<div>
			<b><?= $each->medAccountId ?></b>
		</div>
		<div>
			
			<p class="chatWidthMsg"><b><?= $each->type == 'user' ? 'User:' : 'You:' ?></b><?= substr($each->message, 0, 20); ?></p>
			<div class="dateChatWithHolder"><?= date('F m, Y - H:i:s',strtotime($each->date)) ?></div>
		</div>
	</div>
<?php
		}
	}
?>