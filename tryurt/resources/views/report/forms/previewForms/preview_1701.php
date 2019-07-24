<?php
	$org = $this->org;
	$info = $this->info;
	// print_r($org);
	// print_r($info);
	$report = $this->form1701;
	// print_r($report);
?>
<style>

</style>
<div class="reportHolderOR previewmode">
	<?php
		// if (isset($report->pg2Item45Taxpayer) && isset($report->pg2Item67Taxpayer) && isset($report->pg5Sched2Item1Taxpayer) && isset($report->pg5Sched2Item4Taxpayer) &&
			// isset($report->pg7Sched6Item8Taxpayer) && isset($report->pg7Sched6Item10Taxpayer) && isset($report->pg7Sched6Item13Taxpayer) && isset($report->pg7Sched6Item14Taxpayer) &&
			// isset($report->pg7Sched6Item18Taxpayer) && isset($report->pg7Sched6Item20Taxpayer) && isset($report->pg7Sched6Item22Taxpayer) && isset($report->pg7Sched6Item23Taxpayer) &&
			// isset($report->pg7Sched6Item24Taxpayer) && isset($report->pg7Sched6Item25Taxpayer) && isset($report->pg7Sched6Item26Taxpayer) && isset($report->pg7Sched6Item29Taxpayer) &&
			// isset($report->pg7Sched6Item31Taxpayer) && isset($report->pg7Sched6Item32Taxpayer) && isset($report->pg7Sched6Item34Taxpayer) && isset($report->pg7Sched6Item35Taxpayer) &&
			// isset($report->pg9Sched10Item1Taxpayer) && isset($report->pg9Sched10Item3Taxpayer) && isset($report->pg9Sched10Item8Taxpayer) && isset($report->pg9Sched10Item13Taxpayer) &&
			// isset($report->pg9Sched10Item15Taxpayer)){
		if($report){
	?>
	<div class="fromReg previewmodecontainer">
		<div class="ORCompanyInfo">
			Annual Income Tax Return - 1701
		</div>
		<table class="tblCRB">
			<tr>
				<th>Description</th>
				<th style="width:100px;">Taxpayer/Filer</th>
				<th style="width:100px;">Spouse</th>
			</tr>
			
			<?php if(isset($report->pg2Item45Taxpayer)){
			?>
			<tr>
				<td class="leftAlign">Personal Exemption/Exemption for Estate and Trust</td>
				<td class="rightAlign"><?= Controller::getFloat($report->pg2Item45Taxpayer) ?></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			
			<?php if(isset($report->pg2Item67Taxpayer)){
			?>
			<tr>
				<td class="leftAlign">TAX DUE REGULAR</td>
				<td class="rightAlign"><?= Controller::getFloat($report->pg2Item67Taxpayer) ?></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			
			<?php if(isset($report->pg5Sched2Item1Taxpayer)){
			?>
			<tr>
				<td class="leftAlign">Total Sales/Revenues/Receipts/Fees</td>
				<td class="rightAlign"><?= Controller::getFloat($report->pg5Sched2Item1Taxpayer) ?></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			
			<?php if(isset($report->pg5Sched2Item4Taxpayer)){
			?>
			<tr>
				<td class="leftAlign">Less: Sales Returns, Allowance and Discounts</td>
				<td class="rightAlign"><?= Controller::getFloat($report->pg5Sched2Item4Taxpayer) ?></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			
			<?php if(isset($report->pg7Sched6Item8Taxpayer)){
			?>
			<tr>
				<td class="leftAlign">Communication, Light and Water</td>
				<td class="rightAlign"><?= Controller::getFloat($report->pg7Sched6Item8Taxpayer) ?></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			
			<?php if(isset($report->pg7Sched6Item10Taxpayer)){
			?>
			<tr>
				<td class="leftAlign">Depreciation</td>
				<td class="rightAlign"><?= Controller::getFloat($report->pg7Sched6Item10Taxpayers) ?></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			
			<?php if(isset($report->pg7Sched6Item13Taxpayer)){
			?>
			<tr>
				<td class="leftAlign">Fuel and Oil</td>
				<td class="rightAlign"><?= Controller::getFloat($report->pg7Sched6Item13Taxpayer) ?></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			
			<?php if(isset($report->pg7Sched6Item14Taxpayer)){
			?>
			<tr>
				<td class="leftAlign">Insurance</td>
				<td class="rightAlign"><?= Controller::getFloat($report->pg7Sched6Item14Taxpayer) ?></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			
			<?php if(isset($report->pg7Sched6Item18Taxpayer)){
			?>
			<tr>
				<td class="leftAlign">Management and Consultancy Fee</td>
				<td class="rightAlign"><?= Controller::getFloat($report->pg7Sched6Item18Taxpayer) ?></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			
			<?php if(isset($report->pg7Sched6Item20Taxpayer)){
			?>
			<tr>
				<td class="leftAlign">Office Supplies</td>
				<td class="rightAlign"><?= Controller::getFloat($report->pg7Sched6Item20Taxpayer) ?></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			
			<?php if(isset($report->pg7Sched6Item22Taxpayer)){
			?>
			<tr>
				<td class="leftAlign">Professional Fees</td>
				<td class="rightAlign"><?= Controller::getFloat($report->pg7Sched6Item22Taxpayer) ?></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			
			<?php if(isset($report->pg7Sched6Item23Taxpayer)){
			?>
			<tr>
				<td class="leftAlign">Rental</td>
				<td class="rightAlign"><?= Controller::getFloat($report->pg7Sched6Item23Taxpayer) ?></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			
			<?php if(isset($report->pg7Sched6Item24Taxpayer)){
			?>
			<tr>
				<td class="leftAlign">Repairs and Maintenance - Labor or Labor and Materials</td>
				<td class="rightAlign"><?= Controller::getFloat($report->pg7Sched6Item24Taxpayer) ?></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			
			<?php if(isset($report->pg7Sched6Item25Taxpayer)){
			?>
			<tr>
				<td class="leftAlign">Repairs and Maintenance - Materials/Supplies</td>
				<td class="rightAlign"><?= Controller::getFloat($report->pg7Sched6Item25Taxpayer) ?></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			
			<?php if(isset($report->pg7Sched6Item26Taxpayer)){
			?>
			<tr>
				<td class="leftAlign">Representation and Entertainment</td>
				<td class="rightAlign"><?= Controller::getFloat($report->pg7Sched6Item26Taxpayer) ?></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			
			<?php if(isset($report->pg7Sched6Item29Taxpayer)){
			?>
			<tr>
				<td class="leftAlign">Salaries and Allowances</td>
				<td class="rightAlign"><?= Controller::getFloat($report->pg7Sched6Item29Taxpayer) ?></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			
			<?php if(isset($report->pg7Sched6Item31Taxpayer)){
			?>
			<tr>
				<td class="leftAlign">SSS, GSIS, Philhealth, HDMF and Other Contributions</td>
				<td class="rightAlign"><?= Controller::getFloat($report->pg7Sched6Item31Taxpayer) ?></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			
			<?php if(isset($report->pg7Sched6Item32Taxpayer)){
			?>
			<tr>
				<td class="leftAlign">Taxes and Licenses</td>
				<td class="rightAlign"><?= Controller::getFloat($report->pg7Sched6Item32Taxpayer) ?></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			
			<?php if(isset($report->pg7Sched6Item34Taxpayer)){
			?>
			<tr>
				<td class="leftAlign">Training and Seminars</td>
				<td class="rightAlign"><?= Controller::getFloat($report->pg7Sched6Item34Taxpayer) ?></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			
			<?php if(isset($report->pg7Sched6Item35Taxpayer)){
			?>
			<tr>
				<td class="leftAlign">Transportation and Travel</td>
				<td class="rightAlign"><?= Controller::getFloat($report->pg7Sched6Item35Taxpayer) ?></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			
			<?php if(isset($report->pg9Sched10Item1Taxpayer)){
			?>
			<tr>
				<td class="leftAlign">Current Assets</td>
				<td class="rightAlign"><?= Controller::getFloat($report->pg9Sched10Item1Taxpayer) ?></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			
			<?php if(isset($report->pg9Sched10Item3Taxpayer)){
			?>
			<tr>
				<td class="leftAlign">Property, Plant and Equipment - Net</td>
				<td class="rightAlign"><?= Controller::getFloat($report->pg9Sched10Item3Taxpayer) ?></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			
			<?php if(isset($report->pg9Sched10Item8Taxpayer)){
			?>
			<tr>
				<td class="leftAlign">Current Liabilities</td>
				<td class="rightAlign"><?= Controller::getFloat($report->pg9Sched10Item8Taxpayer) ?></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			
			<?php if(isset($report->pg9Sched10Item13Taxpayer)){
			?>
			<tr>
				<td class="leftAlign">Capital, Beginning</td>
				<td class="rightAlign"><?= Controller::getFloat($report->pg9Sched10Item13Taxpayer) ?></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			
			<?php if(isset($report->pg9Sched10Item15Taxpayer)){
			?>
			<tr>
				<td class="leftAlign">Less: Drawings</td>
				<td class="rightAlign"><?= Controller::getFloat($report->pg9Sched10Item15Taxpayer) ?></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			
		</table>
	</div>
	
	<?php
		}//else{
	?>
		<!--<div>
			YOU DON'T HAVE ANNUAL INCOME TAX RETURN - 1701
		</div>-->
	<?php		
		// }
	?>
	
	<div class="viewButton">
		<input type="button" value="VIEW TAX FORM" class="viewPreviewMode addsavebuttonreports">
	</div>
</div>

<script>
	$('.viewPreviewMode').click(function() {
			month = $('select[name="month"]').val(); 
			year = $('input[name="year"]').val();
			window.open(URL + 'report/newtab_form1701?month='+month+'&year='+year);
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

