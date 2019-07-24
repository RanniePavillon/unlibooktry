<?php
	$org = $this->org;
	$info = $this->info;
	// print_r($org);
	// print_r($info);
	$report = $this->form1601c;
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
			MONTHLY REMITTANCE RETURN OF INCOME TAXES WITHHELD COMPENSATION - 1601C
		</div>
		<table class="tblCRB">
			<tr>
				<th colspan="2">Particulars</th>
				<th>Amount of Compensation</th>
				<th>Tax Due</th>
			</tr>
			
			<?php if($report->part2Item15){
			?>
			<tr>
				<td class="leftAlign" colspan="2">Total Amount of Compensation</td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item15) ?></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item16A && $report->part2Item16B && $report->part2Item16C){
			?>
			<tr>
				<td class="leftAlign" colspan="2">Less: Non-Taxable Compensation</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item16A){
			?>
			<tr>
				<td class="leftAlign" colspan="2" style="padding-left:17px;">Total Amount of Compensation</td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item16A) ?></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item16B){
			?>
			<tr>
				<td class="leftAlign" colspan="2" style="padding-left:17px;">Holiday Pay, Overtime Pay, Night Shift Differential Pay, Hazard Pay (Minimum Wage Earner)</td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item16B) ?></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item16C){
			?>
			<tr>
				<td class="leftAlign" colspan="2" style="padding-left:17px;">Other Non-Taxable Compensation</td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item16C) ?></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			
			<?php if($report->part2Item17){
			?>
			<tr>
				<td class="leftAlign" colspan="2">Taxable Compensation</td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item17) ?></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item18){
			?>
			<tr>
				<td class="leftAlign" colspan="2">Tax Required to be Withheld</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item18) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item19){
			?>
			<tr>
				<td class="leftAlign" colspan="2">Add/Less: Adjustment</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item19) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item20){
			?>
			<tr>
				<td class="leftAlign" colspan="2">Tax Required to be Withheld for Remittance</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item20) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item21A){
			?>
			<tr>
				<td class="leftAlign" colspan="2" style="padding-left:17px;">Less: Tax Remitted in Return Previously Filed, if this is an amended return</td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item21A) ?></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item21B){
			?>
			<tr>
				<td class="leftAlign" colspan="2">Other Payments Made</td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item21B) ?></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item22){
			?>
			<tr>
				<td class="leftAlign" colspan="2">Tax Payments Made</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item22) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item23){
			?>
			<tr>
				<td class="leftAlign" colspan="2">Tax Still Due</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item23) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item24A && $report->part2Item24B && $report->part2Item24C && $report->part2Item24D ){
			?>
			<tr>
				<td class="leftAlign" colspan="2">Add: Penalties</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item24A && $report->part2Item24B && $report->part2Item24C && $report->part2Item24D ){
			?>
			<tr>
				<td style="text-align:center;">Surcharge</td>
				<td style="text-align:center;">Interest</td>
				<td style="text-align:center;">Compromise</td>
				<td class=""></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item24A && $report->part2Item24B && $report->part2Item24C && $report->part2Item24D ){
			?>
			<tr>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item24A) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item24B) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item24C) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item24D) ?></td>
			</tr>
			<?php } ?>
			
			<?php if($report->part2Item25){
			?>
			<tr>
				<td class="leftAlign grayBg" colspan="2">Total Amount Still Due</td>
				<td class="rightAlign grayBg"></td>
				<td class="rightAlign grayBg"><?= Controller::getFloat($report->part2Item25) ?></td>
			</tr>
			<?php } ?>
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
			window.open(URL + 'report/newtab_form1601c?month='+month+'&year='+year);
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
