<?php
	header('Content-type: application/excel');
	header('Content-Disposition: attachment; filename="purchase_journal.xls"');
?>

<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->getPurchaseJournal;
?>
<style>
.tblShowReport th{
	border: 1px solid gray;
	font-size: 12px;
	font-weight: bold;
	background-color:#BE3323;
	padding: 6px;
	color: #fff;
	text-align: left;
	font-family: Verdana;
}
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
.tblShowReport{
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
</style>
<div class="summartJournal_holder">
	<div class="reportHolderOR holderJournal">
		<div class="fromReg formJournalNew">
			<div class="exportHolder">
				<div class="nameText orgNameNew" style="font-weight:bold;">
					<?= $org->orgName ?>
				</div>
				<div class="ORCompanyInfo inpAddressJournal" style="font-weight:bold;">
					<?= ucwords($info->address) ?>
				</div>
				<div class="ORCompanyInfo" style="font-weight:bold;">
					<?= $info->typeOfTax == 'vat' ? 'Vat' : 'Non-Vat'?> Reg. TIN: <?= $info->tinNum ?>
				</div>
				<br/>
				<div class="ORCompanyInfo" style="font-weight:bold;">
					PURCHASE JOURNAL
				</div>
				<div class="ORCompanyInfo" style="font-weight:bold;">
					<?php echo (isset($_POST['startdate']))? date('F d,Y',strtotime($_POST['startdate'])) : date('F d,Y') ?> - 
					<?php echo (isset($_POST['enddate']))? date('F d,Y',strtotime($_POST['enddate'])) : date('F d,Y')?>
				</div>
			</div>
			<br>
			<table class="tblCRBjournal">
			<?php
			if($report):
			?>
				<tr>
					<th style="text-align: left;" class="reportTh">Date</th>
					<th style="text-align: left;" class="reportTh">Supplier's TIN</th>
					<th style="text-align: left;" class="reportTh">Supplier's Code</th>
					<th style="text-align: left;" class="reportTh">Supplier's Name</th>
					<th style="text-align: left;" class="reportTh">Supplier's Address</th>
					<th style="text-align: left;" class="reportTh">Description</th>
					<th style="text-align: left;" class="reportTh">Ref/Doc.No./Sales Invoice</th>
					<th style="text-align: right;" class="reportTh">Amount</th>
					<th style="text-align: right;" class="reportTh">VAT Amount(Input Tax)</th>
				</tr>
				<?php
					$amount = '';
					$vat = '';
					foreach($report as $each){
						$amount = (float)$amount + (float)$each['Amount'];
						$vat = (float)$vat + (float)$each['VAT_Amount'];
				?>
						<tr>
							<td style="text-align: left;" class="reportTd"><?= date('m/d/Y',strtotime($each['trans_date']))?></td>
							<td style="text-align: left;" class="reportTd"><?= $each['tin']?></td>
							<td style="text-align: left;" class="reportTd"><?= $each['supplier_account']?></td>
							<td style="text-align: left;" class="reportTd"><?= $each['name']?></td>
							<td style="text-align: left;" class="reportTd"><?= $each['address']?></td>
							<td style="text-align: left;" class="reportTd"><?= $each['item_description']?></td>
							<td style="text-align: left;" class="reportTd"><?= $each['purchase_order_no']?></td>
							<td style="text-align: right;" class="reportTd"><?= Controller::getFloat($each['Amount'])?></td>
							<td style="text-align: right;" class="reportTd"><?= Controller::getFloat($each['VAT_Amount'])?></td>
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
