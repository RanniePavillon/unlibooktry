<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->monthlyExpense;
?>
<style>

</style>
<div class="monthly_holder">
<div class="reportHolderOR">
		<div class="fromReg">
			<div class="nameText orgNameNew">
				<?= $org->orgName ?>
			</div>
			<div class="ORCompanyInfo inpAddress">
				<?= ucwords($info->address) ?>
			</div>
			<div class="ORCompanyInfo">
				<?= $info->typeOfTax == 'vat' ? 'Vat' : 'Non-Vat'?> Reg. TIN: <?= $info->tinNum ?>
			</div>
			<br/>
			<div class="ORCompanyInfo">
				TOTAL EXPENSE REPORT
			</div>
			<div class="ORCompanyInfo">
				<?php echo (isset($_POST['startdate']))? date('F d,Y',strtotime($_POST['startdate'])) : date('F d,Y') ?> - 
				<?php echo (isset($_POST['enddate']))? date('F d,Y',strtotime($_POST['enddate'])) : date('F d,Y')?>
			</div>
			<table class="tblShowReport">
			<?php
				if($report):
			?>
				<tr>
					<th width="20%">Account Code</th>
					<th>Account Name</th>
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
						<td style="text-align:left;"><?= $each['account_num'] ?></td>
						<td style="text-align:left;"><?= $each['accont_name'] ?></td>
						<td style="text-align:right;"><?= Controller::getFloat($each['expense'] )?></td>
					</tr>
					
				<?php
						}
					}
				}
				?>	
				
					<tr>
						<th colspan="2" style="text-align:left;" class="tdTotal">Total</th>
						<th style="text-align:right;" class="tdTotal"><?= Controller::getFloat($total)?></th>
					</tr>
				<?php
				
				?>
			</table>
			<?php
			else:
			?>
				<div class="TC noExpenses" style="margin-top:80px;">
					No Expenses.
				</div>
			<?php
			endif;
			?>
		</div>
	</div>
</div>
