<?php
	header('Content-type: application/excel');
	header('Content-Disposition: attachment; filename="summary_journal.xls"');
?>

<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->summaryJournal;
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
.tr-bg
{
	background-color: #BE3323;
	color: #fff;
	font-weight: 600;
}
</style>
<div class="reportHolderOR">
	<div class="fromReg">
		<div class="exportHolder">
			<div style="font-weight:bold;">
				<?= $org->orgName ?>
			</div>
			<div style="font-weight:bold;">
				<?= $info->address ?>
			</div>
			<div style="font-weight:bold;">
				<?= $info->typeOfTax == 'vat' ? 'Vat' : 'Non-Vat'?> Reg. TIN: <?= $info->tinNum ?>
			</div>
			<br/>
			<div style="font-weight:bold;">
				SUMMARY OF JOURNAL
			</div>
			<div style="font-weight:bold;">
				<?php echo (isset($_GET['from']))? date('F d,Y',strtotime($_GET['from'])) : date('F d,Y') ?> - 
				<?php echo (isset($_GET['to']))? date('F d,Y',strtotime($_GET['to'])) : date('F d,Y')?>
			</div>
		</div>
		<table class="tblCRB" style="margin-top:20px;border-collapse:collapse;font-family:Verdana;font-size:12px;">
			<?php
			if($report):
			?>
			<tr>
				<td colspan="6">
				</td>
			</tr>
			<tr>
				<td colspan="6">
				</td>
			</tr>
			<tr class="tr-bg">
				<th style="text-align: left;" class="reportTh">Date</th>
				<th style="text-align: left;" class="reportTh">Journal No.</th>
				<th style="text-align: left;" class="reportTh">Particulars</th>
				<th style="text-align: left;" class="reportTh">Account Name</th>
				<th style="text-align: right;" class="reportTh">Debit</th>
				<th style="text-align: right;" class="reportTh">Credit</th>
			</tr>
			<?php
			$debitTotal = '';
			$creditTotal = '';
			if(isset($report) && !empty($report)){
				foreach($report as $each){
					$debitTotal =(float)$debitTotal + round((float)($each['debit']),2);
					$creditTotal =(float)$creditTotal + round((float)($each['credit']),2);
			?>
			<tr>
				<td style="text-align: left;" class="reportTd"><?= $each['trans_date']?></td>
				<td style="text-align: left;" class="reportTd"><?= $each['journal_number']?></td>
				<td style="text-align: left;" class="reportTd"><?= $each['particulars']?></td>
				<td style="text-align: left;" class="reportTd"><?= $each['accont_name']?></td>
				<td style="text-align: right;" class="reportTd"><?= $each['debit'] == 0 ? '-' : number_format($each['debit'],2)?></td>
				<td style="text-align: right;" class="reportTd"><?= $each['credit'] == 0 ? '-' : number_format($each['credit'],2)?></td>
			</tr>
			<?php
			}
			}
			?>
			<tr class="tr-bg">
				<td colspan="4" style="border:1px solid #000;padding:55px;">
				Total
				</td>
				<td style="text-align:right;border:1px solid #000;padding:5px;">
					<?= $debitTotal == 0 ? '-' : Controller::getFloat($debitTotal);?>
				</td>
				<td style="text-align:right;border:1px solid #000;padding:5px;">
					<?= $creditTotal == 0 ? '-' : Controller::getFloat($creditTotal);?>
				</td>
			</tr>
		</table>
		<?php else:?>		
			<div class="TC" style="margin-top: 80px;font-family: Verdana;font-size: 15px;text-align: center;width:720px;" >
				NO SUMMARY OF JOURNAL
			</div>
		<?php
		endif;
		?>
	</div>
</div>
