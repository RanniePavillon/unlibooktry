<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->outstandingPayable;
	// echo '<pre>';
	// print_R($report);
	// echo '</pre>';
?>
<style>
.tdTotal{
	background:#BE3323;
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
</style>
<div class="outstanding_holder">
	<div class="reportHolderOR outsRec">
		<div class="fromReg">
			<div class="nameText orgNameNew">
				<?= $org->orgName ?>
			</div>
			<div class="ORCompanyInfo inpAddress">
				<?= ucwords($info->address) ?>
			</div>
			<?php if($info->typeOfTax == 'vat') { ?>
			<div class="ORCompanyInfo">
				VAT Reg. TIN: <?= $info->tinNum ?>
			</div>
			<?php } else { ?>
			<div class="ORCompanyInfo">
				Non-VAT Reg. TIN: <?= $info->tinNum ?>
			</div>
			<?php } ?>
			<br/>
			<div class="ORCompanyInfo">
				OUTSTANDING PAYABLE
			</div>
			<div class="ORCompanyInfo">
				<?php
				if($_POST['supplier'] != '%%'){
					$name = DAOFactory::getTblSupplierDAO()->load($_POST['supplier']);
					echo 'For Vendors' . $name->name;
				}else{
					echo 'For All Vendors';
				}
				?>
			</div>
			<div class="ORCompanyInfo">
				<?php echo (isset($_POST['startdate']))? date('F d, Y',strtotime($_POST['startdate'])) : date('F d, Y') ?> - 
				<?php echo (isset($_POST['enddate']))? date('F d, Y',strtotime($_POST['enddate'])) : date('F d, Y')?>
			</div>
		</div>
		<?php
			if($report){
		?>
		<table class="tblShowReport">
			<tr>
				<th>
					Billing No.
				</th>
				<th>
					Billing Date
				</th>
				<th>
					Vendor Name
				</th>
				<th>
					Status
				</th>
				<th style="text-align:right!important;">
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
			<td style="text-align:left!important;">
				<?= $each['payable_number'] ?>
			</td>
			<td style="text-align:left!important;">
				<?= date('m/d/Y',strtotime($each['trans_date'])) ?>
			</td>
			<td class="tr" style="text-align:left!important;">
				<?= $each['name'] ?>
			</td>
			
			<td class="tr" style="text-align:left!important;">
				<?= $each['status'] ?>
			</td>
			<td class="tr" style="text-align:right!important;">
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