<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->getAgingPayable;
	// echo '<pre>';
	// print_R($report);
	// echo '</pre>';
?>
<style>
.tdTotal{
	background:#1087D8;
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
	<div class="reportHolderOR agingRep">
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
				AGING PAYABLE REPORT
			</div>
			<div class="ORCompanyInfo">
				<?php
				if($_POST['supplier'] != '%%'){
					$name = DAOFactory::getTblSupplierDAO()->load($_POST['supplier']);
					echo 'For Vendors ' . $name->name;
				}else{
					echo 'For All Vendors';
				}
				?>
			</div>
			<div class="ORCompanyInfo">
				As of <?php echo (isset($_POST['enddate']))? date('F d, Y',strtotime($_POST['enddate'])) : date('F d, Y')?>
			</div>
		</div>
		<?php
			if($report){
		?>
		<table class="tblShowReport">
			<tr>
				<th style="text-align:left;">
					Vendor Name
				</th>
				<th style="text-align:right;">
					Total Amount Due
				</th>
				<th style="text-align:right;">
					0-3 Months
				</th>
				<th style="text-align:right;">
					3-6 Months
				</th>
				<th style="text-align:right;">
					6-9 Months
				</th>
				<th style="text-align:right;">
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
				<td style="text-align:left;"><?= $each['name']?></td>
				<td style="text-align:right;"><?= Controller::getFloat($each['grand_total'])?></td>
				<td style="text-align:right;"><?= Controller::getFloat($each['amount1'])?></td>
				<td style="text-align:right;"><?= Controller::getFloat($each['amount2'])?></td>
				<td style="text-align:right;"><?= Controller::getFloat($each['amount3'])?></td>
				<td style="text-align:right;"><?= Controller::getFloat($each['amount4'])?></td>
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