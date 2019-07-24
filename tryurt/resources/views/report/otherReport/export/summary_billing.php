<?php
	header('Content-type: application/excel');
	header('Content-Disposition: attachment; filename="summary_billing.xls"');
?>
<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->summaryBilling;
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
	color:#fff;
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
	background-color: #0299a2;
}
</style>
<div class="reportHolderOR">
	<div class="fromReg" style="font-family: verdana;margin-left: 15px;text-align: center;height:auto!important;padding-top:20px;"> 
		<div class="exportHolder">
			<div style="font-weight:bold;">
				<?= $org->orgName ?>
			</div>
			<div style="letter-spacing:1;font-size:12px;font-family:Verdana;font-weight: bold;">
				<?= $info->address ?>
			</div>
			<div style="font-weight:bold;">
				<?= $info->typeOfTax == 'vat' ? 'Vat' : 'Non-Vat'?> Reg. TIN: <?= $info->tinNum ?>
			</div>
			<br/>
			<div style="font-weight:bold;">
				SUMMARY OF BILLING
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
				<td colspan="9">
				</td>
			</tr>
			<tr>
				<td colspan="9">
				</td>
			</tr>
			<tr class="tr-bg">
				<th style="text-align: left;" class="reportTh">Date</th>
				<th style="text-align: left;" class="reportTh">Billing No.</th>
				<th style="text-align: left;" class="reportTh">Client Name</th>
				<th style="text-align: left;" class="reportTh">Particulars</th>
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
			$trTotal = '';
			$OVTotal = '';
			$sdTotal = '';
			$psiTotal = '';
			$balanceTotal = '';
			if(isset($report) && !empty($report)){
				foreach($report as $each){
					$tempBal = (round(floatval($each['output_vat']),2) + round(floatval($each['prof']),2)) - (round(floatval($each['disc']),2));
					$tr = round(floatval($each['tr']),2);
					$trTotal = (float)$trTotal + round((float)($each['tr']),2);
					$OVTotal = (float)$OVTotal + round((float)($each['output_vat']),2);
					$sdTotal = (float)$sdTotal + round((float)($each['disc']),2);
					$psiTotal = (float)$psiTotal + round((float)($each['prof']),2);
					
					if($tr == $tempBal){
						$balance = '-';
					}else{
						$balance = $tempBal;
						$balanceTotal += $balance ;
					}
			?>		
				<tr>
					<td style="text-align: left;" class="reportTd"><?= $each['trans_date']?></td>
					<td style="text-align: left;" class="reportTd"><?= $each['billing_no']?></td>
					<td style="text-align: left;" class="reportTd"><?= $each['client_name']?></td>
					<td style="text-align: left;" class="reportTd"><?= $each['particular']?></td>
					<td style="text-align: right;" class="reportTd"><?= Controller::getFloat($each['tr']) == 0 ? '-' : number_format($each['tr'],2)?></td>
					<td style="text-align: right;" class="reportTd"><?= Controller::getFloat($each['output_vat']) == 0 ? '-' : number_format($each['output_vat'],2)?></td>
					<td style="text-align: right;" class="reportTd"><?= Controller::getFloat($each['disc']) == 0 ? '-' : number_format($each['disc'],2)?></td>
					<td style="text-align: right;" class="reportTd"><?= Controller::getFloat($each['prof']) == 0 ? '-' : number_format($each['prof'],2)?></td>
					<td style="text-align: right;" class="reportTd"><?= $balance?></td>
				</tr>
			<?php
				}
			}
			?>
				<tr class="tdTotal">
					<td colspan="4" style="border:1px solid #000; font-weight:bold;color:#fff;">
						Total
					</td>
					<td style="text-align:right;border:1px solid #000;font-weight:bold;color:#fff;">
						<?= $trTotal == 0 ? '-' : Controller::getFloat($trTotal) ?>
					</td>
					<td style="text-align:right;border:1px solid #000;font-weight:bold;color:#fff;">
						<?= $OVTotal == 0 ? '-' : Controller::getFloat($OVTotal) ?>
					</td>
					<td style="text-align:right;border:1px solid #000;font-weight:bold;color:#fff;">
						<?= $sdTotal == 0 ? '-' : Controller::getFloat($sdTotal) ?>
					</td>
					<td style="text-align:right;border:1px solid #000;font-weight:bold;color:#fff;">
						<?= $psiTotal == 0 ? '-' : Controller::getFloat($psiTotal) ?>
					</td>
					<td style="text-align:right;border:1px solid #000;font-weight:bold;color:#fff;">
						<?= $balanceTotal == 0 ? '-' : Controller::getFloat($balanceTotal) ?>
					</td>
				</tr>
		</table>
		<?php else:?>		
			<div class="TC" style="margin-top: 80px;font-family: Verdana;font-size: 15px;text-align: center;width:720px;" >
				NO SUMMARY OF BILLING
			</div>
		<?php
		endif;
		?>
	</div>
</div>
