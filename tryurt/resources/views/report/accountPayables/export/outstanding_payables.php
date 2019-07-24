<?php
	header('Content-type: application/excel');
	header('Content-Disposition: attachment; filename="outstanding_payable.xls"');
?>
<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->outstandingPayable;
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
	<div class="reportHolderOR outsRec">
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
				OUTSTANDING PAYABLE
			</div>
			<div class="ORCompanyInfo" style="font-weight:bold;">
				<?php
				if($_POST['supplier'] != '%%'){
					$name = DAOFactory::getTblSupplierDAO()->load($_POST['supplier']);
					echo 'For Vendors' . $name->name;
				}else{
					echo 'For All Vendors';
				}
				?>
			</div>
			<div class="ORCompanyInfo" style="font-weight:bold;">
				<?php echo (isset($_POST['startdate']))? date('F d, Y',strtotime($_POST['startdate'])) : date('F d, Y') ?> - 
				<?php echo (isset($_POST['enddate']))? date('F d, Y',strtotime($_POST['enddate'])) : date('F d, Y')?>
			</div>
		</div>
		<br>
		<?php
			if($report){
		?>
		<table class="tblShowReport">
			<tr>
				<th style="text-align: left;" class="reportTh">
					Billing No.
				</th>
				<th style="text-align: left;" class="reportTh">
					Billing Date
				</th>
				<th style="text-align: left;" class="reportTh">
					Vendor Name
				</th>
				<th style="text-align: left;" class="reportTh">
					Status
				</th>
				<th style="text-align: right;" class="reportTh">
					Amount
				</th>
			</tr>
		<?php
			$amountTotal = '';
				foreach($report as $each){
					//$total = $each['grand_total'] - ($each['applied_amount'] + $each['wht_amount']);
					$amountTotal = (float)$amountTotal + round((float)($each['grand_total']),2); 
		?>
		<tr>
			<td style="text-align: left;" class="reportTd">
				<?= $each['payable_number'] ?>
			</td>
			<td style="text-align: left;" class="reportTd">
				<?= date('m/d/Y',strtotime($each['trans_date'])) ?>
			</td>
			<td style="text-align: left;" class="reportTd">
				<?= $each['name'] ?>
			</td>
			
			<td style="text-align: left;" class="reportTd">
				<?= $each['status'] ?>
			</td>
			<td style="text-align: left;" class="reportTd">
				<?//= number_format((float) $each['grand_total'],2) ?>
				<?= number_format((float) $each['grand_total'],2) ?>
			</td>
		</tr>
		<?php
				}
		?>
		<tr>
			<td colspan="4" style="text-align:left;" class="tdTotal">
				Total
			</td>
			<td style="text-align:right;" class="tdTotal">
				<?= Controller::getFloat($amountTotal,2)?>
			</td>
		</tr>
		
		</table>
		<?php
			} else {
				echo'<div style="margin-top: 80px;font-weight:bold;color:#183867;font-family:Verdana;font-size:14px;text-align:center;">';
				echo 'NO OUTSTANDING PAYABLE.';
				echo'</div>';
			}
		?>
	</div>
</div>	