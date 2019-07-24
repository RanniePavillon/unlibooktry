<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->getPurchaseJournal;
	
	// echo '<pre>';
	// print_r($report);
?>
<style>
.tblCRBjournal{
	zoom:93%;
}
</style>
<div class="summartJournal_holder">
	<div class="reportHolderOR holderJournal">
		<div class="fromReg formJournalNew">
			<div class="nameText orgNameNew">
				<?= $org->orgName ?>
			</div>
			<div class="ORCompanyInfo inpAddressJournal">
				<?= ucwords($info->address) ?>
			</div>
			<div class="ORCompanyInfo">
				<?= $info->typeOfTax == 'vat' ? 'Vat' : 'Non-Vat'?> Reg. TIN: <?= $info->tinNum ?>
			</div>
			<br/>
			<div class="ORCompanyInfo">
				PURCHASE JOURNAL
			</div>
			<div class="ORCompanyInfo">
				<?php echo (isset($_POST['startdate']))? date('F d,Y',strtotime($_POST['startdate'])) : date('F d,Y') ?> - 
				<?php echo (isset($_POST['enddate']))? date('F d,Y',strtotime($_POST['enddate'])) : date('F d,Y')?>
			</div>
			
			<table class="tblCRBjournal">
			<?php
			if($report):
			?>
				<tr>
					<th>Date</th>
					<th>Supplier's TIN</th>
					<th>Supplier's Code</th>
					<th>Supplier's Name</th>
					<th>Supplier's Address</th>
					<th>Description</th>
					<th>Ref/Doc.No./ Sales Invoice</th>
					<th>Amount</th>
					<th>VAT Amount(Input Tax)</th>
				</tr>
				<?php
					$amount = '';
					$vat = '';
					foreach($report as $each){
						$amount = (float)$amount + (float)$each['Amount'];
						$vat = (float)$vat + (float)$each['VAT_Amount'];
				?>
						<tr>
							<td style="text-align:left;"><?= date('m/d/Y',strtotime($each['trans_date']))?></td>
							<td><?= $each['tin']?></td>
							<td><?= $each['supplier_account']?></td>
							<td><?= $each['name']?></td>
							<td><?= $each['address']?></td>
							<td><?= $each['item_description']?></td>
							<td><?= $each['purchase_order_no']?></td>
							<td style="text-align:right;"><?= Controller::getFloat($each['Amount'])?></td>
							<td style="text-align:right;"><?= Controller::getFloat($each['VAT_Amount'])?></td>
						</tr>
				<?php	
					} 
				?>
				<tr>
					<th colspan="7" class="tdTotal">
					<b>Total</b>
					</th>
					<th style="text-align:right;" class="tdTotal">
						<?= Controller::getFloat($amount)?>
					</th>
					<th style="text-align:right;" class="tdTotal">
						<?= Controller::getFloat($vat)?>
					</th>
				</tr>
			</table>
			<?php else:?>		
				<div class="TC noJournal" style="margin-top:80px;">
					No Purchase Journal.
				</div>
			<?php
			endif;
			?>
		</div>
	</div>
</div>
