<?php
	header('Content-type: application/excel');
	header('Content-Disposition: attachment; filename="cash_receipts.xls"');
?>
<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->cashReceiptsBook;
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
<div class="reportHolderOR">
	<div style="">
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
				CASH RECEIPTS BOOK
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
				<td colspan="10">
				</td>
			</tr>
			<tr>
				<td colspan="10">
				</td>
			</tr>
			<tr>
				<th style="text-align: left;" class="reportTh">Date</th>
				<th style="text-align: left;" class="reportTh">Ref No.</th>
				<th style="text-align: left;" class="reportTh">Client Name</th>
				<th style="text-align: left;" class="reportTh">Particulars</th>
				<th style="text-align: right;" class="reportTh">Cash on Hand</th>
				<th style="text-align: right;" class="reportTh">Trade Receivable</th>
				<th style="text-align: right;" class="reportTh">Output VAT</th>
				<th style="text-align: right;" class="reportTh">Sales Discount</th>
				<th style="text-align: right;" class="reportTh">Professional Service Income</th>
				<th style="text-align: right;" class="reportTh">Balance</th>
			</tr>
			<?php
			$balance = '';
			$tempbal = '';
			$tr = '';
			$cohTotal = '';
			$trTotal = '';
			$ovTotal = '';
			$sdTotal = '';
			$psiTotal = '';
			$miTotal = '';
			$balanceTotal = '';
			if(isset($report) && !empty($report)){
				foreach($report as $each){
				
					$tempBal = ((round(floatval($each['output_vat']),2)) + (round(floatval($each['prof']),2))) - (round(floatval($each['disc']),2));
					$tr = (round(floatval($each['tr']),2)) + (round(floatval($each['ar']),2));
					$cohTotal = (float)$cohTotal+ round((float)($each['tr']),2);
					$trTotal = (float)$trTotal+round((float)($each['ar']),2);
					$ovTotal = (float)$ovTotal+round((float)($each['output_vat']),2);
					$sdTotal = (float)$sdTotal+round((float)($each['disc']),2);
					$psiTotal = (float)$psiTotal+round((float)($each['prof']),2);
					$miTotal = (float)$miTotal+round((float)($each['mi']),2);
				
					if($tr == $tempBal || $tempBal == 0){
						$balance = '-';
					}else{
						$balance = Controller::getFloat($tempBal);
						$balanceTotal = (float)$balanceTotal + (float)$tempBal;
					}
	 		?>
				<tr>
					<td style="text-align: left;" class="reportTd"><?= $each['trans_date']?></td>
					<td style="text-align: left;" class="reportTd"><?= $each['invoice_number']?></td>
					<td style="text-align: left;" class="reportTd"><?= $each['client_name']?></td>
					<td style="text-align: left;" class="reportTd"><?= $each['particular']?></td>
					<td style="text-align: right;" class="reportTd"><?= Controller::getFloat($each['tr']) == 0 ? '-' : number_format($each['tr'],2)?></td>
					<td style="text-align: right;" class="reportTd"><?= Controller::getFloat($each['ar']) == 0 ? '-' : number_format($each['ar'],2)?></td>
					<td style="text-align: right;" class="reportTd"><?= Controller::getFloat($each['output_vat']) == 0 ? '-' : number_format($each['output_vat'],2)?></td>
					<td style="text-align: right;" class="reportTd"><?= Controller::getFloat($each['disc']) == 0 ? '-' : number_format($each['disc'],2)?></td>
					<td style="text-align: right;" class="reportTd"><?= Controller::getFloat($each['prof']) == 0 ? '-' : number_format($each['prof'],2)?></td>
					<td style="text-align: right;" class="reportTd"><?= $balance?></td>
				</tr>
			<?php
				}
			}
			?>
			<tr>
				<td colspan="4" style="border:1px solid #000;" class="tdTotal">
					Total
				</td>
				<td style="text-align:right;border:1px solid #000;" class="tdTotal">
					<?= $cohTotal == 0 ? '-' : Controller::getFloat($cohTotal)?>
				</td>
				<td style="text-align:right;border:1px solid #000;" class="tdTotal">
					<?= $trTotal == 0 ? '-' : Controller::getFloat($trTotal)?>
				</td>
				<td style="text-align:right;border:1px solid #000;" class="tdTotal">
					<?= $ovTotal == 0 ? '-' : Controller::getFloat($ovTotal)?>
				</td>
				<td style="text-align:right;border:1px solid #000;" class="tdTotal">
					<?= $sdTotal == 0 ? '-' : Controller::getFloat($sdTotal)?>
				</td>
				<td style="text-align:right;border:1px solid #000;" class="tdTotal">
					<?= $psiTotal == 0 ? '-' : Controller::getFloat($psiTotal)?>
				</td>
				<td style="text-align:right;border:1px solid #000;" class="tdTotal">
					<?= $balanceTotal == 0 ? '-' : Controller::getFloat($balanceTotal)?>
				</td>
			</tr>
		</table>
		<?php else:?>		
			<div class="TC" style="margin-top: 80px;font-family: Verdana;font-size: 15px;text-align: center;width:720px;" >
				NO CASH RECEIPT
			</div>
		<?php
		endif;
		?>
	</div>
</div>
