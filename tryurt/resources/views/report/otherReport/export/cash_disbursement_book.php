<?php
	header('Content-type: application/excel');
	header('Content-Disposition: attachment; filename="cash_disbursement.xls"');
?>
<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->cashDisbursementBook;
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
	<div class="fromReg" style="font-family: verdana;margin-left: 15;text-align: center;height:auto!important;padding-top:20px;">
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
				CASH DISBURSEMENT BOOK
			</div>
			<div style="font-weight:bold;">
				<?php echo (isset($_GET['from']))? date('F d,Y',strtotime($_GET['from'])) : date('F d,Y') ?> - 
				<?php echo (isset($_GET['to']))? date('F d,Y',strtotime($_GET['to'])) : date('F d,Y')?>
			</div>
		</div>
		
		
		<table class="tblCRB" style="margin-top:20px;border-collapse:collapse;font-family:Verdana;font-size:10px;">
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
				<th style="text-align: left;" class="reportTh">Vendor Name</th>
				<th style="text-align: left;" class="reportTh">Ref No.</th>
				<th style="text-align: left;" class="reportTh">Particulars</th>
				<th style="text-align: left;" class="reportTh">Account Name</th>
				<th style="text-align: right;" class="reportTh">Amount</th>
				<th style="text-align: right;" class="reportTh">INPUT VAT</th>
				<th style="text-align: right;" class="reportTh">Cash on Hand</th>
				<!--<th style="background:#183867;color:#fff;padding:2px;border:1px solid #000;">Balance</th>-->
			</tr>
			<?php
			$balance = '';
			$tempbal = '';
			$tr = '';
			$totalAmount = '';
			$ivTotal = '';
			$cohTotal = '';
			$balanceTotal = '';
			if($this->cashDisbursementBook){
				foreach($this->cashDisbursementBook as $each){
					$tempBal = (round(floatval($each['amount']),2) + round(floatval($each['input_vat']),2));
					$tr = (round(floatval($each['coh']),2));
					$totalAmount = (float)$totalAmount + round((float)($each['amount']),2);
					$ivTotal = (float)$ivTotal + round((float)($each['input_vat']),2);
					$cohTotal = (float)$cohTotal + round((float)($each['coh']),2);
					
					if($tr == $tempBal || $tempBal == 0){
						$balance = '-';
					}else{
						$balance = Controller::getFloat($tempBal);
						$balanceTotal = (float)$balanceTotal + (float)$tempBal;
					}
				
			?>
				<tr>
					<td style="text-align: left;" class="reportTd">
						<?= $each['trans_date'] ?>
					</td>
					<td style="text-align: left;" class="reportTd">
						<?= $each['name'] ?>
					</td>
					<td style="text-align: left;" class="reportTd">
						<?= $each['reference_number'] ?>
					</td>
					<td style="text-align: left;" class="reportTd">
						<?= $each['particulars'] ?>
					</td>
					<td style="text-align: left;" class="reportTd">
						<?= $each['accont_name'] ?>
					</td>
					<td style="text-align: right;" class="reportTd">
						<?= ($each['amount'] == 0 ? '-' : number_format($each['amount'], 2))?>
					</td>
					<td style="text-align: right;" class="reportTd">
						<?= ($each['input_vat'] == 0 ? '-' : number_format($each['input_vat'],2))?>
					</td>
					<td style="text-align: right;" class="reportTd">
						<?= ($each['coh'] == 0 ? '-' : number_format($each['coh'],2)) ?>
					</td>
					<!--<td style="text-align:right;border:1px solid #000;">
						<?= $balance?>
					</td>-->
				</tr>
			<?php
				}
			}
			
			?>
			<tr class="tr-bg">
				<td colspan="5" style="border:1px solid #000;">
				Total
				</td>
				<td style="text-align:right;border:1px solid #000;">
					<?= $totalAmount == 0 ? '-' : Controller::getFloat($totalAmount)?>
				</td>
				<td style="text-align:right;border:1px solid #000;">
					<?= $ivTotal == 0 ? '-' : Controller::getFloat($ivTotal)?>
				</td>
				<td style="text-align:right;border:1px solid #000;">
					<?= $cohTotal == 0 ? '-' : Controller::getFloat($cohTotal)?>
				</td>
				<!--<td style="text-align:right;border:1px solid #000;">
					<?= $balanceTotal == 0 ? '-' : Controller::getFloat($balanceTotal)?>
				</td>-->
			</tr>
		</table>
		<?php else:?>		
			<div class="TC" style="margin-top: 80px;font-family: Verdana;font-size: 15px;text-align: center;width:720px;" >
				NO CASH DISBURSEMENT
			</div>
		<?php
		endif;
		?>
	</div>
</div>
