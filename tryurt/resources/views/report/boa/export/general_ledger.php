<?php
	header('Content-type: application/excel');
	header('Content-Disposition: attachment; filename="general_ledger.xls"');
?>
<?php
	$org = $this->org;
	$info = $this->info;
	$genGlBalance = $this->genGeneralLedger;
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
.summartJournal_holder{
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
	<div class="reportHolderOR holderJournal exportHolder">
		<div class="fromReg formJournalNew " style="font-weight:bold;">
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
				GENERAL LEDGER
			</div>
			<div class="ORCompanyInfo" style="font-weight:bold;">
				<?php echo (isset($_POST['startdate']))? date('F d,Y',strtotime($_POST['startdate'])) : date('F d,Y') ?> - 
				<?php echo (isset($_POST['enddate']))? date('F d,Y',strtotime($_POST['enddate'])) : date('F d,Y')?>
			</div>
			<br>
			<table class="tblCRBjournal" style="margin-top:100px;border-collapse:collapse;font-family:Verdana;font-size:12px;">
			<?php
			if($genGlBalance):
			?>
				<tr>
						<th style="text-align: left;" class="reportTh">Issued Date</th>
						<th style="text-align: left;" class="reportTh">Type</th>
						<th style="text-align: left;" class="reportTh">Reference No.</th>
						<th style="text-align: left;" class="reportTh">Account Code</th>
						<th style="text-align: left;" class="reportTh">Title</th>
						<th style="text-align: left;" class="reportTh">Client Name</th>
						<th style="text-align: left;" class="reportTh">Status</th>
						<th style="text-align: right;" class="reportTh">Debit</th>
						<th style="text-align: right;" class="reportTh">Credit</th>
						<th style="text-align: right;" class="reportTh">Amount</th>
				</tr>
				<?php if ($genGlBalance) { 
					$amount = 0;
					$total = 0;
					$debit = 0;
					$credit = 0;
					
					foreach ($genGlBalance as $item) {
						/*if($item['account_num'] == '1004-005' || $item['account_num'] == '1004-003' || $item['account_num'] == '1004-011' || $item['account_num'] == '1004-009' || 
									$item['account_num'] == '1004-013' || $item['account_num'] == '2000-001' || $item['account_num'] == '2000-002' || $item['account_num'] == '2000-006' || 
									$item['account_num'] == '2000-003' || $item['account_num'] == '2000-004 ' || $item['account_num'] == '2000-005' || $item['account_num'] == '2000-007 ' || 
									$item['account_num'] == '2000-008' || $item['account_num'] == '2000-009' || $item['account_num'] == '2000-010' || $item['account_num'] == '4000-001' || 
									$item['account_num'] == '4001-001' || $item['account_num'] == '4001-002' || $item['account_num'] == '4001-003' || $item['account_num'] == '4001-004' || 
									$item['type_of_transaction'] == 'income')
						{
							$amount = ($item['balance'] * -1);
						}else{
							$amount = ($item['balance']);
						}*/
						$amount = ($item['balance']);
						$total += $amount;
						$debit += $item['debit'];
						$credit += $item['credit'];
				?>
				<tr>
					<td style="text-align: left;" class="reportTd"><?= date('m/d/Y',strtotime($item['date'])); ?></td>
					<td style="text-align: left;" class="reportTd"><?= ucwords($item['type_of_transaction']); ?></td>
					<td style="text-align: left;" class="reportTd"><?= $item['unique_number']; ?></td>
					<td style="text-align: left;" class="reportTd"><?= $item['account_num']; ?></td>
					<td style="text-align: left;" class="reportTd"><?= $item['accont_name']; ?></td>
					<td style="text-align: left;" class="reportTd"><?= $item['client_name']; ?></td>
					<td style="text-align: left;" class="reportTd"><?= ucwords($item['status']); ?></td>
					<td style="text-align: right;" class="reportTd"><?= Controller::getFloat($item['debit']); ?></td>
					<td style="text-align: right;" class="reportTd"><?= Controller::getFloat($item['credit']); ?></td>
					<td style="text-align: right;" class="reportTd"><?= Controller::getFloat($amount); ?></td>
				</tr>
				<?php } ?>
				<tr>
					<th colspan="7" class="tdTotal">
					<b>Total</b>
					</th>
					<th style="text-align:right;" class="tdTotal">
						<?= Controller::getFloat($debit) ?>
					</th>
					<th style="text-align:right;" class="tdTotal">
						<?= Controller::getFloat($credit) ?>
					</th>
					<th style="text-align:right;" class="tdTotal">
						<?= Controller::getFloat($total) ?>
					</th>
				</tr>
				<?php } ?>
			</table>
			<?php 
			else:
			?>		
				<div class="TC noJournal" style="margin-top:80px;">
					No General Ledger.
				</div>
			<?php
			endif;
			?>
		</div>
	</div>
</div>
