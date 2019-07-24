<?php

$data = $this->confirm;

$topic = $data->issue;
$topic = str_replace("\'", "'", $topic);
$topic = str_replace('\"', '"', $topic);
$topic = str_replace("\\", "", $topic);

$desc = $data->encHow;
$desc = str_replace("\'", "'", $desc);
$desc = str_replace('\"', '"', $desc);
$desc = str_replace("\\", "", $desc);
?>


	<div style="overflow: auto;">
		<legend>Ticket ID: 00<?php echo $data->id ?></legend>
		<h4>Topic: <?php echo htmlentities($topic) ?></h4>
		<p>Browser Used: <?php echo $data->browser ?></p>
		<p>Application: <?php echo $data->application ?></p>
		<p>Date Encountered: <?php echo $data->encDate ?></p>
		<p>Description: <?php echo htmlentities($desc) ?></p>
		<legend>Please provide your Voucher Code...</legend>
		<div>
			<form action="javascript:void(0)" method="POST">
				<input type="hidden" name="ticketId" value="<?php echo $data->id ?>">
				<div><center><input type="text" name="voucherCode" style="height: 50px; width: 250px; font-size: 20px;" placeholder="Enter Voucher Code here..." required></center></div>
				<div style="padding-top: 1%;"><center><input type="submit" value="Submit" id="confirm" class="btn btn-default btn-lg" style="box-shadow: 0px 8px 10px #999;"></center></div>
			</form>
		</div>
	</div>
