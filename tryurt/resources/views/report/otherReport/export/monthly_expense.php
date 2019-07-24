<?php
	header('Content-type: application/excel');
	header('Content-Disposition: attachment; filename="total_expense.xls"');
?>
<style>
	.tblShowReport th{
	border: 1px solid gray;
	font-size: 12px;
	font-weight: bold;
	background-color:#0299a2;
	padding: 6px;
	color: #fff;
	text-align: left;
	font-family: Verdana;
}
.tdTotal{
	background-color:#0299a2;
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

<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->monthlyExpense;
?>
<div class="reportHolderOR">
	<div style="font-family: verdana;margin-left: 15;text-align: center;height:auto!important;padding-top:20px;">
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
				TOTAL EXPENSE REPORT
			</div>
			<div style="font-weight:bold;">
				<?php echo (isset($_GET['from']))? date('F d,Y',strtotime($_GET['from'])) : date('F d,Y') ?> - 
				<?php echo (isset($_GET['to']))? date('F d,Y',strtotime($_GET['to'])) : date('F d,Y')?>
			</div>
		</div>
		<table class="tblShowReport" style="border-collapse: collapse;margin-top: 30px;font-family: Verdana;font-size: 12px;">
			<?php
				if($report):
			?>
			<tr>
				<td colspan="3"> 
				</td>
			</tr>
			<tr>
				<td colspan="3"> 
				</td>
			</tr>
			<tr class="reportTh">
				<th style="text-align:left;">Account Code</th>
				<th style="text-align:left;">Account Name</th>
				<th style="text-align:right;">Amount</th>
			</tr>
			<?php
			$total = 0;
			$total_journal = 0;
			if(isset($report) && !empty($report)){
				foreach ($report as $each){
				
					$total = $total + round(floatval($each['expense']), 2);
			?>
				<?php
				if($each['expense'] != 0){
				?>
				<tr>
					<td style="text-align:left;border:1px solid #000;"><?= $each['account_num'] ?></td>
					<td style="text-align:left;border:1px solid #000;"><?= $each['accont_name'] ?></td>
					<td style="text-align:right;border:1px solid #000;"><?= Controller::getFloat($each['expense'] )?></td>
				</tr>
				
			<?php
					}
				}
			}
			?>
			
				<tr class="reportTh">
					<td><b>Total</b></td>
					<td></td>
					<td style="text-align:right;"><b><?= Controller::getFloat($total) ?></b></td>
				</tr>
			<?php
			
			?>
		</table>
		<?php
		else:
		?>
			<div class="TC" style="margin-top: 80px;font-family: Verdana;font-size: 15px;text-align: center;width:720px;" >
				NO MONTHLY EXPENSE
			</div>
		<?php
		endif;
		?>
	</div>
</div>