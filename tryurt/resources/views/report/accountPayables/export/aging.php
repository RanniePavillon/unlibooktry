<?php
	header('Content-type: application/excel');
	header('Content-Disposition: attachment; filename="aging_payable.xls"');
?>
<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->getAgingPayable;
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
.outstanding_holder{
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
<div class="outstanding_holder">
	<div class="reportHolderOR agingRep">
		<div class="fromReg exportHolder">
			<div class="nameText orgNameNew" style="font-weight:bold;">
				<?= $org->orgName ?>
			</div>
			<div class="ORCompanyInfo inpAddress" style="font-weight:bold;">
				<?= ucwords($info->address) ?>
			</div>
			<?php if($info->typeOfTax == 'vat') { ?>
			<div class="ORCompanyInfo" style="font-weight:bold;">
				VAT Reg. TIN: <?= $info->tinNum ?>
			</div>
			<?php } else { ?>
			<div class="ORCompanyInfo" style="font-weight:bold;">
				Non-VAT Reg. TIN: <?= $info->tinNum ?>
			</div>
			<?php } ?>
			<br/>
			<div class="ORCompanyInfo" style="font-weight:bold;">
				AGING PAYABLE REPORT
			</div>
			<div class="ORCompanyInfo" style="font-weight:bold;">
				<?php
				if($_POST['supplier'] != '%%'){
					$name = DAOFactory::getTblSupplierDAO()->load($_POST['supplier']);
					echo 'For Vendors ' . $name->name;
				}else{
					echo 'For All Vendors';
				}
				?>
			</div>
			<div class="ORCompanyInfo" style="font-weight:bold;">
				As of <?php echo (isset($_POST['enddate']))? date('F d, Y',strtotime($_POST['enddate'])) : date('F d, Y')?>
			</div>
		</div>
		<br>
		<?php
			if($report){
		?>
		<table class="tblShowReport">
			<tr>
				<th style="text-align: left;" class="reportTh">
					Vendor Name
				</th>
				<th style="text-align: right;" class="reportTh">
					Total Amount Due
				</th>
				<th style="text-align: right;" class="reportTh">
					0-3 Months
				</th>
				<th style="text-align: right;" class="reportTh">
					3-6 Months
				</th>
				<th style="text-align: right;" class="reportTh">
					6-9 Months
				</th>
				<th style="text-align: right;" class="reportTh">
					Over 90 Months
				</th>
			</tr>
			<?php
			foreach($report as $each){
				$start = new DATETIME(date("M d Y ", strtotime($each['trans_date'])));
				$end = new DATETIME(date("M d Y "));
				
				$days = $start->diff($end);
				$days = $days->format("%r%a");
			?>
			<tr>
				<td style="text-align: left;" class="reportTd"><?= $each['name']?></td>
				<td style="text-align: right;" class="reportTd"><?= Controller::getFloat($each['grand_total'])?></td>
				<td style="text-align: right;" class="reportTd"><?= Controller::getFloat($each['amount1'])?></td>
				<td style="text-align: right;" class="reportTd"><?= Controller::getFloat($each['amount2'])?></td>
				<td style="text-align: right;" class="reportTd"><?= Controller::getFloat($each['amount3'])?></td>
				<td style="text-align: right;" class="reportTd"><?= Controller::getFloat($each['amount4'])?></td>
			</tr>
			<?php
			}
			?>
		</table>
		<?php
			} else {
				echo'<div style="margin-top:80px;font-weight:bold;color:#183867;font-family:Verdana;font-size:14px;text-align:center;">';
				echo 'No Aging Report.';
				echo'</div>';
			}
		?>
	</div>
</div>	