<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->getSalesJournal;
?>
<style>

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
				SALES JOURNAL
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
					<th width="10%">Date</th>
					<th width="10%">Supplier's TIN</th>
					<th width="10%">Supplier's Code</th>
					<th width="10%">Supplier's Name</th>
					<th width="10%">Supplier's Address</th>
					<th width="10%">Description</th>
					<th width="10%">Ref/Doc.No./ Sales Invoice</th>
					<th width="10%">Amount</th>
					<th width="10%">VAT Amount(Input Tax)</th>
				</tr>
				<?php
					$amount = '';
					$net = '';
					foreach($report as $each){
						$amount = (float)$amount + (float)$each['Amount'];
						$net = (float)$net + (float)$each['NetSales'];
				?>
				<tr>
					<td style="text-align:left;"><?= date('m/d/Y',strtotime($each['trans_date']))?></td>
					<td><?= $each['tin_num']?></td>
					<td><?= $each['client_account']?></td>
					<td><?= $each['client_name']?></td>
					<td><?= $each['address']?></td>
					<td><?= $each['item_description']?></td>
					<td><?= $each['cash_sales_invoice_no']?></td>
					<td style="text-align:right;"><?= Controller::getFloat($each['Amount'])?></td>
					<td style="text-align:right;"><?= Controller::getFloat($each['NetSales'])?></td>
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
						<?= Controller::getFloat($net)?>
					</th>
				</tr>
			</table>
			<?php else:?>		
				<div class="TC noJournal" style="margin-top:80px;">
					No Sales Journal.
				</div>
			<?php
			endif;
			?>
		</div>
	</div>
</div>
