<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->getInventoryAvailability;
?>
<style>
.tdTotal{
	background-color: #BE3323!important;
	font-weight: bold!important;
	text-align: left!important;
	color: #fff!important;
	font-size:12px!important;
}
.tdTotal2{
	background-color: #BE3323 !important;
	font-weight: bold!important;
	text-align: right!important;
	color: #fff!important;
	font-size:12px!important;
}
.inpAddressSPS{
	width:310px;
	word-break: break-word;
	border: none;
	text-align: center;
	font-weight: bold;
	padding-bottom: 5px;
	font-family:Verdana;
	font-size:12px;
	margin-left:185px;
}
</style>
<div class="salesPerService_holder">
	<div class="reportHolderOR">
		<div class="fromReg">
			<div class="nameText">
				<?= $org->orgName ?>
			</div>
			<div class="ORCompanyInfo inpAddressSPS">
				<?= ucwords($info->address) ?>
			</div>
			<div class="ORCompanyInfo">
				<?= $info->typeOfTax == 'vat' ? 'Vat' : 'Non-Vat'?> Reg. TIN: <?= $info->tinNum ?>
			</div>
			<br/>
			<div class="ORCompanyInfo">
				INVENTORY AVAILABILITY
			</div>
			<div class="ORCompanyInfo">
				<?php echo (isset($_POST['startdate']))? date('F d,Y',strtotime($_POST['startdate'])) : date('F d,Y') ?> - 
				<?php echo (isset($_POST['enddate']))? date('F d,Y',strtotime($_POST['enddate'])) : date('F d,Y')?>
			</div>
		

	<?php
		 if($report){ 
	?>
		<table class="tblmainsumlist">
			<tr>
				<th width="">Item No.</th>
				<th width="">Item Description</th>
				<th width="">Location</th>
				<th width="" style="text-align: center;">Qty</th>
				<th width="" style="text-align: center;">UOM</th>
				<th width="" style="text-align: right;">Unit Price</th>
				<th width="" style="text-align:right;">Amount</th>
			</tr>
			<?php

				
				$amount = '';
				
				if (count($report) > 0) {
					foreach ($report as $item) {
						$amount = (float)$amount + (float)$item['amount'];
				?>
			<tr class="">
				<td><?= $item['item_code'] ?></td>
				<td><?= $item['description'] ?></td>
				<td><?= $item['warehouse_name'] ?></td>
				<td style="text-align: center;"><?= $item['qty'] ?></td>
				<td style="text-align: center;"><?= $item['abbreviation'] ?></td>
				<td style="text-align:right;"><?= Controller::getFloat($item['unitPrice'])?></td>
				<td style="text-align:right;"><?= Controller::getFloat($item['amount'])?></td>
			</tr>
			 <?php
				}
			} 
			?>
			<tr class="">
				<th class="tdTotal" colspan="6">Total Amount</th>
				<th class="tdTotal2" colspan="1"><?= Controller::getFloat($amount)?></th>
			</tr>
		</table>
		<?php
			 } else {
				echo'<div style="margin-top:80px;color:#183867;font-weight:bold;font-family:Verdana;font-size:14px;text-align: center;">';
				echo 'NO INVENTORY AVAILABILITY';
				echo '</div>';
			} 
		?>
		</div>
	</div>
</div>