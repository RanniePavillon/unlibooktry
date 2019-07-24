<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->purchaseItem;

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
				PURCHASE PER ITEM
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
				<th width="75px">Date Purchased</th>
				<th width="80px">Purchased Invoice No.</th>
				<th width="90px">Item No.</th>
				<th width="90px">Item Description</th>
				<th width="100px">UOM</th>
				<th width="30px" style="text-align: center;">Qty</th>
				<th width="30px" style="text-align: center;">Unit Price</th>
				<th width="80px" style="text-align:right;">Amount</th>
			</tr>
			<?php
				
				$total = '';
				foreach ($report as $item) { 
					$total = (float)$total + (float)$item['net_amount'];
				?>
			<tr class="">
				<td><?= $item['date_purchased'] ?></td>
				<td><?= $item['purchase_invoice_no'] ?></td>
				<td><?= $item['item_code'] ?></td>
				<td><?= $item['description'] ?></td>
				<td><?= $item['abbreviation'] ?></td>
				<td><?= $item['received_qty'] ?></td>
				<td style="text-align:right;"><?= Controller::getFloat($item['unit_price']) ?></td>
				<td style="text-align:right;"><?= Controller::getFloat($item['net_amount']) ?></td>
			</tr>
			<?php
				}	 
			?>
			<tr class="">
				<th class="tdTotal" colspan="7">Total Amount</th>
				<th class="tdTotal2" colspan="1"><?= Controller::getFloat($total) ?></th>
			</tr>
		</table>
		<?php
			 } else {
				echo'<div style="margin-top:80px;color:#183867;font-weight:bold;font-family:Verdana;font-size:14px;text-align: center;">';
				echo 'NO PURCHASE PER ITEM.';
				echo '</div>';
			} 
		?>
		</div>
	</div>
</div>