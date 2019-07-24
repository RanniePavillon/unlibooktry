<?php
	header('Content-type: application/excel');
	header('Content-Disposition: attachment; filename="general_journal.xls"');
?>
<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->getGeneralJournal;
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
.tblCRBjournal{
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
		<div class="fromReg formJournalNew exportHolder">
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
				GENERAL JOURNAL
			</div>
			<div class="ORCompanyInfo" style="font-weight:bold;">
				<?php echo (isset($_POST['startdate']))? date('F d,Y',strtotime($_POST['startdate'])) : date('F d,Y') ?> - 
				<?php echo (isset($_POST['enddate']))? date('F d,Y',strtotime($_POST['enddate'])) : date('F d,Y')?>
			</div>
			<br>
			
			<table class="tblCRBjournal">
			<?php
			if($report):
			?>
				<tr>
					<th style="text-align: left;" class="reportTh">Date</th>
					<th style="text-align: left;" class="reportTh">Reference</th>
					<th style="text-align: left;" class="reportTh">Brief Description/Explanation</th>
					<th style="text-align: left;" class="reportTh">Account Code</th>
					<th style="text-align: left;" class="reportTh">Account Title</th>
					<th style="text-align: right;" class="reportTh">Debits</th>
					<th style="text-align: right;" class="reportTh">Credits</th>
				</tr>
				<?php
				$debitTotal = '';
				$creditTotal = '';
				if(isset($report) && !empty($report)){
					foreach($report as $each){
						$debitTotal = (float)$debitTotal + round((float)($each['debit']),2);
						$creditTotal = (float)$creditTotal + round((float)($each['credit']),2);
				?>
				<tr>
					<td style="text-align: left;" class="reportTd"><?= date('m/d/Y',strtotime($each['trans_date']))?></td>
					<td style="text-align: left;" class="reportTd"><?= $each['journal_number']?></td>
					<td style="text-align: left;" class="reportTd"><?= $each['particulars']?></td>
					<td style="text-align: left;" class="reportTd"><?= $each['account_num']?></td>
					<td style="text-align: left;" class="reportTd"><?= $each['accont_name']?></td>
					<td style="text-align: right;" class="reportTd"><?= $each['debit'] == 0 ? '-' : number_format($each['debit'],2)?></td>
					<td style="text-align: right;" class="reportTd"><?= $each['credit'] == 0 ? '-' : number_format($each['credit'],2)?></td>
				</tr>
				<?php
					 }
				} 
				?>
				<tr>
					<th colspan="5" class="tdTotal">
					<b>Total</b>
					</th>
					<th style="text-align:right;" class="tdTotal">
						<?= $debitTotal == 0 ? '-' : Controller::getFloat($debitTotal);?>
					</th>
					<th style="text-align:right;" class="tdTotal">
						<?= $creditTotal == 0 ? '-' : Controller::getFloat($creditTotal);?>
					</th>
				</tr>
			</table>
			<?php else:?>		
				<div class="TC noJournal" style="margin-top:80px;">
					No General Journal.
				</div>
			<?php
			endif;
			?>
		</div>
	</div>
</div>
