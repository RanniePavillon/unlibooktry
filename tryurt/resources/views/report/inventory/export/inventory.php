<?php
	header('Content-type: application/excel');
	header('Content-Disposition: attachment; filename="inventory.xls"');
?>
<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->getInventoryAvailability;
?>
<style>
.tdTotal{
	background-color:#BE3323;
	color:#fff;
	font-size:12px!important;
	font-weight:bold;
}
.inpAddress{
	width: 310px;
	word-break: break-word;
	border: none;
	text-align: center;
	font-weight: bold;
	padding-bottom: 5px;
	font-family:Verdana;
	font-size:12px;
	margin-left:185px;
}
.reportHolderOR{
	width: 50% !important;
	text-align:center !important;
	padding-left:30px !important;
}
.tblmainsumlist{
	width:50% !important;
	text-align:center !important;
}
.exportHolder{
	font-family: Verdana !important;
	margin-left: 15px !important;
	text-align: center !important;
	height:auto!important !important;
	margin-top:20px !important;
	font-size:12px !important;
	font-weight:bold !important;
}
.orgName{
	font-size:14px !important;
	font-family:Verdana !important;
	text-transform: uppercase !important;
	font-weight: bold !important;
}
.reportTh{
	background-color: #BE3323 !important;
	color: white !important;
	padding: 5px !important;
	height: 27px !important;
	border: solid 1px #000 !important;
}
.reportTd{
	color: #000 !important;
	padding: 5px !important;
	height: 27px !important;
	border: solid 1px #000 !important;
}
.titleUp{
	font-weight:bold !important;
}
.tdTotal{
	border: solid 1px #000 !important;
}
.tdTotal2{
	background-color:#BE3323;
	color:#fff;
	font-size:12px!important;
	font-weight:bold;
}
</style>
<div class="salesPerService_holder">
	<div class="reportHolderOR">
		<div class="fromReg exportHolder">
			<div class="nameText" style="font-weight:bold;">
				<?= $org->orgName ?>
			</div>
			<div class="ORCompanyInfo inpAddressSPS" style="font-weight:bold;">
				<?= ucwords($info->address) ?>
			</div>
			<div class="ORCompanyInfo" style="font-weight:bold;">
				<?= $info->typeOfTax == 'vat' ? 'Vat' : 'Non-Vat'?> Reg. TIN: <?= $info->tinNum ?>
			</div>
			<br/>
			<div class="ORCompanyInfo" style="font-weight:bold;">
				INVENTORY AVAILABILITY
			</div>
			<div class="ORCompanyInfo" style="font-weight:bold;">
				<?php echo (isset($_POST['startdate']))? date('F d,Y',strtotime($_POST['startdate'])) : date('F d,Y') ?> - 
				<?php echo (isset($_POST['enddate']))? date('F d,Y',strtotime($_POST['enddate'])) : date('F d,Y')?>
			</div>
			<br>

	<?php
		 if($report){ 
	?>
		<table class="tblmainsumlist">
			<tr>
				<th style="text-align: left;" class="reportTh">Item No.</th>
				<th style="text-align: left;" class="reportTh">Item Description</th>
				<th style="text-align: left;" class="reportTh">Location</th>
				<th style="text-align: center;" class="reportTh">Qty</th>
				<th style="text-align: center;" class="reportTh">UOM</th>
				<th style="text-align: right;" class="reportTh">Unit Price</th>
				<th style="text-align: right;" class="reportTh">Amount</th>
			</tr>
			<?php

				
				$amount = '';
				
				if (count($report) > 0) {
					foreach ($report as $item) {
						$amount = (float)$amount + (float)$item['amount'];
				?>
			<tr class="">
				<td style="text-align: left;" class="reportTd"><?= $item['item_code'] ?></td>
				<td style="text-align: left;" class="reportTd"><?= $item['description'] ?></td>
				<td style="text-align: left;" class="reportTd"><?= $item['warehouse_name'] ?></td>
				<td style="text-align: center;" class="reportTd"><?= $item['qty'] ?></td>
				<td style="text-align: center;" class="reportTd"><?= $item['abbreviation'] ?></td>
				<td style="text-align: right;" class="reportTd"><?= Controller::getFloat($item['unitPrice'])?></td>
				<td style="text-align: right;" class="reportTd"><?= Controller::getFloat($item['amount'])?></td>
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