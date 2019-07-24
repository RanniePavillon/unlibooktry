<?php
	$org = $this->org;
	$info = $this->info;
	// print_r($org);
	// print_r($info);
	$report = $this->form1601e;
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
			MONTHLY REMITTANCE RETURN OF CREDITABLE INCOME TAXES WITHHELD (EXPANDED) - 1601E
		</div>
		<table class="tblCRB">
			<tr>
				<th colspan="3">Particulars</th>
				<th>Tax Required To be Withheld</th>
			</tr>
			
			<?php if($report->item14){
			?>
			<tr>
				<td class="leftAlign" colspan="3">Total Tax Required to be Withheld and Remitted</td>
				<td class="rightAlign"><?= Controller::getFloat($report->item14) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->item15A || $report->item15B || $report->item15C){
			?>
			<tr>
				<td class="leftAlign" colspan="4">Less: Tax/Credits Payment</td>
			</tr>
			<?php } ?>
			<?php if($report->item15A){
			?>
			<tr>
				<td class="leftAlign" colspan="3" style="padding-left:17px;">Tax Remitted in Return Previously Filed, if this is an Amended Return</td>
				<td class="rightAlign"><?= Controller::getFloat($report->item15A) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->item15B){
			?>
			<tr>
				<td class="leftAlign" colspan="3" style="padding-left:17px;">Advance Payments Made (please attach proof of payments - BIR Form No. 0605)</td>
				<td class="rightAlign"><?= Controller::getFloat($report->item15B) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->item15C){
			?>
			<tr>
				<td class="leftAlign" colspan="3" style="padding-left:17px;">Total Tax Credits/Payments (Sum of Items 15A & 15B)</td>
				<td class="rightAlign"><?= Controller::getFloat($report->item15C) ?></td>
			</tr>
			<?php } ?>
			
			<?php if($report->item16){
			?>
			<tr>
				<td class="leftAlign" colspan="3">Tax Still Due (Over remittance) (Item 14 less Item 15C)</td>
				<td class="rightAlign"><?= Controller::getFloat($report->item16) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->item17A || $report->item17B || $report->item17C || $report->item17D){
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
				<td class="rightAlign"><?= Controller::getFloat($report->item17A) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->item17B) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->item17C) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->item17D) ?></td>
			</tr>
			<?php } ?>
			<?php
				if($report->item18){
			?>
			<tr>
				<td class="leftAligN grayBg" colspan="3">Total Amount Still Due (Over remittance) (Sum of Item 16 less Item 17D)</td>
				<td class="rightAlign grayBg"><?= Controller::getFloat($report->item18) ?></td>
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
			window.open(URL + 'report/newtab_form1601e?month='+month+'&year='+year);
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

