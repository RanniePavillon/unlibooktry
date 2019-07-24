<?php
	$org = $this->org;
	$info = $this->info;
	// print_r($org);
	// print_r($info);
	$report = $this->form1701q;
	// print_r($report);
?>
<style>

</style>
<div class="reportHolderOR previewmode">
	<?php
		// if ($report->iTR1701Q26A && $report->iTR1701Q26B && $report->iTR1701Q27A && $report->iTR1701Q27B && 
			// $report->iTR1701Q28A && $report->iTR1701Q28B && $report->iTR1701Q29A && $report->iTR1701Q29B &&
			// $report->iTR1701Q30A && $report->iTR1701Q30B && $report->iTR1701Q31A && $report->iTR1701Q31B &&
			// $report->iTR1701Q32A && $report->iTR1701Q32B && $report->iTR1701Q33A && $report->iTR1701Q33B &&
			// $report->iTR1701Q34A && $report->iTR1701Q34B && $report->iTR1701Q35A && $report->iTR1701Q35B &&
			// $report->iTR1701Q36A && $report->iTR1701Q36B && $report->iTR1701Q37A && $report->iTR1701Q37B && 
			// $report->iTR1701Q38A && $report->iTR1701Q38B && $report->iTR1701Q38C && $report->iTR1701Q38D && 
			// $report->iTR1701Q38E && $report->iTR1701Q38F && $report->iTR1701Q38G && $report->iTR1701Q38H && 
			// $report->iTR1701Q38I && $report->iTR1701Q38J && $report->iTR1701Q38K && $report->iTR1701Q38L && 
			// $report->iTR1701Q38M && $report->iTR1701Q38N && $report->iTR1701Q39A && $report->iTR1701Q39B &&
			// $report->iTR1701Q40A && $report->iTR1701Q40B && $report->iTR1701Q40C && $report->iTR1701Q40D && 
			// $report->iTR1701Q40E && $report->iTR1701Q40F && $report->iTR1701Q40G && $report->iTR1701Q40H &&
			// $report->iTR1701Q41A && $report->iTR1701Q41B && $report->iTR1701Q41C){
		if($report){
	?>
	<div class="fromReg previewmodecontainer">
		<div class="ORCompanyInfo">
			QUARTERLY INCOME TAX RETURN - 1701Q
		</div>
		<table class="tblCRB">
			<tr>
				<th colspan="2">Declaration This Quarter</th>
				<th style="width:100px;">Taxpayer/Filer</th>
				<th style="width:100px;">Spouse</th>
			</tr>
			
			<?php if($report->iTR1701Q26A || $report->iTR1701Q26B){
			?>
			<tr>
				<td class="leftAlign" colspan="2">Sales/Revenues/Receipts/Fees</td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q26A) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q26B) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->iTR1701Q27A || $report->iTR1701Q27B){
			?>
			<tr>
				<td class="leftAlign" colspan="2" style="padding-left:31px;">Add: Amount Received by a Partner from General Professional Partnership</td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q27A) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q27B) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->iTR1701Q28A || $report->iTR1701Q28B){
			?>
			<tr>
				<td class="leftAlign" colspan="2">Total</td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q28A) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q28B) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->iTR1701Q29A || $report->iTR1701Q29B){
			?>
			
			<tr>
				<td class="leftAlign" colspan="2" style="padding-left:31px;">Less: Cost of Sales/Services</td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q29A) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q29B) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->iTR1701Q30A || $report->iTR1701Q30B){
			?>
			<tr>
				<td class="leftAlign" colspan="2">Gross Income from Operation</td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q30A) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q30B) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->iTR1701Q31A || $report->iTR1701Q31B){
			?>
			<tr>
				<td class="leftAlign" colspan="2" style="padding-left:31px;">Add: Other Income</td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q31A) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q31B) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->iTR1701Q32A || $report->iTR1701Q32B){
			?>
			<tr>
				<td class="leftAlign" colspan="2">Total Gross Income</td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q32A) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q32B) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->iTR1701Q33A || $report->iTR1701Q33B){
			?>
			<tr>
				<td class="leftAlign" colspan="2">Less Deductions</td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q33A) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q33B) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->iTR1701Q34A || $report->iTR1701Q34B){
			?>
			<tr>
				<td class="leftAlign" colspan="2">Taxable Income This Quarter</td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q34A) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q34B) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->iTR1701Q35A || $report->iTR1701Q35B){
			?>
			<tr>
				<td class="leftAlign" colspan="2" style="padding-left:31px;">Add: Taxable Income Previous Quarter/s</td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q35A) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q35B) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->iTR1701Q36A || $report->iTR1701Q36B){
			?>
			<tr>
				<td class="leftAlign" colspan="2">Taxable Income to Date</td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q36A) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q36B) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->iTR1701Q37A || $report->iTR1701Q37B){
			?>
			<tr>
				<td class="leftAlign" colspan="2">Tax Due</td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q37A) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q37B) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->iTR1701Q38A || $report->iTR1701Q38B || $report->iTR1701Q38C || $report->iTR1701Q38D || $report->iTR1701Q38E || $report->iTR1701Q38F || $report->iTR1701Q38G || $report->iTR1701Q38H || $report->iTR1701Q38I || $report->iTR1701Q38J || $report->iTR1701Q38K || $report->iTR1701Q38L || $report->iTR1701Q38M || $report->iTR1701Q38N){
			?>
			<tr>
				<td class="leftAlign" colspan="4">Less: Tax Credits/Payments</td>
			</tr>
			<?php } ?>
			<?php if($report->iTR1701Q38A || $report->iTR1701Q38B){
			?>
			<tr>
				<td class="leftAlign" colspan="2" style="padding-left:31px;">Prior Year's Excess Credits</td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q38A) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q38B) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->iTR1701Q38C || $report->iTR1701Q38D){
			?>
			<tr>
				<td class="leftAlign" colspan="2" style="padding-left:31px;">Tax Payment/s for the Previous Quarter/s</td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q38C) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q38D) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->iTR1701Q38E || $report->iTR1701Q38F){
			?>
			<tr>
				<td class="leftAlign" colspan="2" style="padding-left:31px;">Creditable Tax Withheld for the Previous Quarter/s</td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q38E) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q38F) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->iTR1701Q38G || $report->iTR1701Q38H){
			?>
			<tr>
				<td class="leftAlign" colspan="2" style="padding-left:31px;">Creditable Tax Withheld Per BIR Form No. 2307 for this Quarter</td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q38G) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q38H) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->iTR1701Q38I || $report->iTR1701Q38J){
			?>
			<tr>
				<td class="leftAlign" colspan="2" style="padding-left:31px;">Tax Paid in Return Previously Filed, if this is an Amended Return</td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q38I) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q38J) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->iTR1701Q38K || $report->iTR1701Q38L){
			?>
			<tr>
				<td class="leftAlign" colspan="2" style="padding-left:31px;">Other Payment/s Made</td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q38K) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q38L) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->iTR1701Q38M || $report->iTR1701Q38N){
			?>
			<tr>
				<td class="leftAlign" colspan="2" style="padding-left:31px;">Total Tax Credits/Payments</td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q38M) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q38N) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->iTR1701Q39A || $report->iTR1701Q39B){
			?>
			<tr>
				<td class="leftAlign" colspan="2">Tax Payable(Overpayment)</td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q39A) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q39B) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->iTR1701Q40A || $report->iTR1701Q40B || $report->iTR1701Q40C || $report->iTR1701Q40D || $report->iTR1701Q40E || $report->iTR1701Q40F || $report->iTR1701Q40G || $report->iTR1701Q40H){
			?>
			<tr>
				<td class="leftAlign" colspan="4" style="padding-left:31px;">Add: Penalties</td>
			</tr>
			<?php } ?>
			<?php if($report->iTR1701Q40A || $report->iTR1701Q40B){
			?>
			<tr>
				<td class="leftAlign" colspan="2" style="padding-left:70px;">Surcharge</td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q40A) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q40B) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->iTR1701Q40C || $report->iTR1701Q40D){
			?>
			<tr>
				<td class="leftAlign" colspan="2" style="padding-left:70px;">Interest</td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q40C) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q40D) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->iTR1701Q40E || $report->iTR1701Q40F){
			?>
			<tr>
				<td class="leftAlign" colspan="2" style="padding-left:70px;">Compromise</td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q40E) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q40F) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->iTR1701Q40G || $report->iTR1701Q40H){
			?>
			<tr>
				<td class="leftAlign" colspan="2" style="padding-left:31px;">Total Penalties</td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q40G) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q40H) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->iTR1701Q41A || $report->iTR1701Q41B){
			?>
			<tr>
				<td class="leftAlign" colspan="2">Total Amount Payable(Overpayment)</td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q41A) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR1701Q41B) ?></td>
			</tr>
			<?php } ?>
			
			<?php if($report->iTR1701Q41C){
			?>
			<tr>
				<td class="leftAlign grayBg" colspan="2">Aggregate Amount Payable(Overpayment)</td>
				<td style="text-align:center;" class="grayBg" colspan="2"><?= $report->iTR1701Q41C //Controller::getFloat($report->iTR1701Q41C) ?></td>
			</tr>
			<?php } ?>
			
			
			
		</table>
	</div>
	
	<?php
		}else{
			
	?>
		<div class="noReportMsg">
			YOU DON'T HAVE QUERTERLY INCOME TAX RETURN - 1701Q
		</div>
	<?php		
		}
	?>
	
	<div class="viewButton">
		<input type="button" value="VIEW TAX FORM" class="viewPreviewMode addsavebuttonreports">
	</div>
</div>

<script>
	$('.viewPreviewMode').click(function() {
			month = $('select[name="month"]').val(); 
			year = $('input[name="year"]').val();
			window.open(URL + 'report/newtab_form1701q?month='+month+'&year='+year);
			return false;
		});
		<?php
			if(isset($_GET['month'])){
		?>
			
				$('select[name="month"]').val('<?= $_GET['month'] ?>'); 
				$('input[name="year"]').val('<?= $_GET['year'] ?>'); 
				
				$('.reportgenerate').click();
		<?php
			}
		?>
</script>

