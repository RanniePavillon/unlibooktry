<?php

$data = $this->accpMsgLogs;
$align = '';
$isosceles = '';

if(!empty($data)):
?>

<?php foreach($data as $each):
	
	$msg = $each->message;
	
	$msg = str_replace("\'", "'", $msg);
	$msg = str_replace('\"', '"', $msg);
	$msg = str_replace("\\", "", $msg);
	
?>
	<?php if ($each->sender == 'client') {
		$align = 'right';
		$isosceles = 'left';
	} else {
		$align = 'left';
		$isosceles = 'right';
	}?>
		<div class="saleschat triangle-isosceles <?= $isosceles ?>" id="<?php echo $each->id ?>" style="text-align: <?= $align ?>;">
			<div>
				<?php echo htmlentities($msg) ?>
			</div>
		</div>
	<?php endforeach; ?>	
<?php else:
	echo 0;
endif;
?>