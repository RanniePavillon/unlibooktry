<?php
	$org = $this->org;
	$info = $this->info;
	// print_r($org);
	// print_r($info);
	$report = $this->form2551m;
	// print_r($report);
?>
<style>

</style>
<div class="reportHolderOR previewmode">
	<?php
		if (!empty($report)){
	?>
	<div class="fromReg previewmodecontainer">
		<div class="ORCompanyInfo">
			MONTHLY PERCENTAGE TAX RETURN - 2551M
		</div>
		<table class="tblCRB">
			<tr>
				<th colspan="3">Particulars</th>
				<th>Tax Due</th>
			</tr>
			
			<?php if($report->iTR2551M19){
			?>
			<tr>
				<td class="leftAlign" colspan="3">Total Tax Due</td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR2551M19) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->iTR2551M20A || $report->iTR2551M20B ||  $report->iTR2551M21){
			?>
			<tr>
				<td class="leftAlign" colspan="4">Less: Tax/Credits Payment</td>
			</tr>
			<?php } ?>
			<?php if($report->iTR2551M20A){
			?>
			<tr>
				<td class="leftAlign" colspan="3" style="padding-left:17px;">Creditable Percentage Tax Withheld Per BIR No. 2307 (See Sch.1)</td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR2551M20A) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->iTR2551M20B){
			?>
			<tr>
				<td class="leftAlign" colspan="3" style="padding-left:17px;">Tax Paid in Return Previously Filed, if this is an Amended Return</td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR2551M20B) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->iTR2551M21){
			?>
			<tr>
				<td class="leftAlign" colspan="3" style="padding-left:17px;">Total Tax Credits/Payments (Sum of Items 20A & 20B)</td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR2551M21) ?></td>
			</tr>
			<?php } ?>
			
			<?php if($report->iTR2551M22){
			?>
			<tr>
				<td class="leftAlign" colspan="3">Tax Payable (Overpayment) (Item 19 less Item 21)</td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR2551M22) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->iTR2551M23A || $report->iTR2551M23B || $report->iTR2551M23C || $report->iTR2551M23D){
			?>
			<tr>
				<td class="leftAlign" colspan="4">Add: Penalties</td>
			</tr>
			<tr>
				<td class="leftAlign">Surcharge</td>
				<td class="leftAlign">Interest</td>
				<td class="leftAlign">Compromise</td>
				<td class="leftAlign"></td>
			</tr>
			<tr>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR2551M23A) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR2551M23B) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR2551M23C) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->iTR2551M23D) ?></td>
			</tr>
			<?php } ?>
			<?php
				if($report->iTR2551M24){
			?>
			<tr>
				<td class="leftAligN grayBg" colspan="3">Total Amount Payable (Overpayment) (Sum of Items 22 and 23D)</td>
				<td class="rightAlign grayBg"><?= Controller::getFloat($report->iTR2551M24) ?></td>
			</tr>
			<?php
				}
			?>
		</table>
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
			window.open(URL + 'report/newtab_form2551m?month='+month+'&year='+year);
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

