<?php
	$org = $this->org;
	$info = $this->info;
	// print_r($org);
	// print_r($info);
	$report = $this->form2550q;
	// print_r($report);
?>
<style>

</style>
<div class="reportHolderOR previewmode">
	<div class="fromReg previewmodecontainer">
			<?php
				if ($report){
			?>
		<div class="ORCompanyInfo">
			QUARTERLY VALUE-ADDED TAX DECLARATION - 2550Q
		</div>
		<table class="tblCRB">
			<tr>
				<th colspan="2">SALES</th>
				<th>Sales/Receipt for the Quarter (Exc. of VAT)</th>
				<th>Output Tax Due for the Quarter</th>
			</tr>
			
			<?php if($report->part2Item15A || $report->part2Item15B){
					
			?>
			<tr>
				<td class="leftAlign" colspan="2">Vatable Sales/Reciept - Private (sch.1)</td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item15A) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item15B) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item16A || $report->part2Item16B){
				
			?>
			<tr>
				<td class="leftAlign" colspan="2">Sales to Government</td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item16A) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item16B) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item17){
				
			?>
			<tr>
				<td class="leftAlign" colspan="2">Zero Rated Sales/Receipts</td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item17) ?></td>
				<td></td>
			</tr>
			<?php } ?>
			
			<?php if($report->part2Item18){
				
			?>
			<tr>
				<td class="leftAlign" colspan="2">Exempt Sales/Receipts</td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item18) ?></td>
				<td></td>
			</tr>
			<?php } ?>
		
			<?php if($report->part2Item19A || $report->part2Item19B){
				
			?>
			<tr>
				<td class="leftAlign" colspan="2">Total Sales Receipt and Output Tax Due</td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item19A) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item19B) ?></td>
			</tr>
			<?php } ?>
			
			<?php
				if($report->part2Item20A  || $report->part2Item20B || $report->part2Item20C || $report->part2Item20D || $report->part2Item20E || $report->part2Item20F){
			?>
			<tr>
				<td class="leftAlign" colspan="4">Less: Allowable Input Tax</td>
			</tr>
			<?php
				}
			?>
			<?php if($report->part2Item20A){
				
			?>
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Input Tax Carried Over from Previous Quarter</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item20A) ?></td>
			</tr>
			<?php } ?>
			
			<?php if($report->part2Item20B){
				
			?>
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Input Tax Deferred on Capital Goods Exceeding 1Million from Previous Quarter</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item20B) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item20C){
			
			?>
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Transitional Input Tax</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item20C) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item20D){
				
			?>
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Presumptive Input Tax</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item20D) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item20E){
				
			?>
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Others</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item20E) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item20F){
				
			?>
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Total(Sum of Item 20A,20B,20C,20D & 20E)</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item20F) ?></td>
			</tr>
			<?php } ?>
			
			<tr>
				<th colspan="2">PURCHASES</th>
				<th></th>
				<th></th>
			</tr>
			
			<?php
				if($report->part2Item21A || $report->part2Item21B || $report->part2Item21C || $report->part2Item21D || $report->part2Item21E ||
				$report->part2Item21F || $report->part2Item21G || $report->part2Item21H || $report->part2Item21I ||
				$report->part2Item21J || $report->part2Item21K || $report->part2Item21L || $report->part2Item21M || $report->part2Item21N || 
				$report->part2Item21O || $report->part2Item21P){
			?>
			<tr>
				<td class="leftAlign" colspan="4">Current Transactions</td>
			</tr>
			<?php
				}
			?>
			
			<?php if($report->part2Item21A || $report->part2Item21B){
				
			?>
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Purchase of Capital of Goods not exceeding 1Million (see sch.2)</td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item21A) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item21B) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item21C || $report->part2Item21D){
				
			?>
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Purchase of Capital of Goods exceeding 1Million (see sch.3)</td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item21C) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item21D) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item21E || $report->part2Item21F){
				
			?>
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Domestic Purchases of Goods Other than Capital Goods</td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item21E) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item21F) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item21G || $report->part2Item21H){
				
			?>
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Importation of Goods Other than Capital Goods</td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item21G) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item21H) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item21I || $report->part2Item21J){
			
			?>
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Domestic Purchase of Services</td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item21I) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item21J) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item21K || $report->part2Item21L){
				
			?>
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Services rendered by Non-residents</td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item21K) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item21L) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item21M){
			
			?>
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Purchases not Qualified for Input Tax</td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item21M) ?></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item21N || $report->part2Item21O){
				
			?>
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Others</td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item21N) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item21O) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item21P){
				
			?>
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Total Current Purchases</td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item21P) ?></td>
				<td class="rightAlign"></td>
			</tr>
			<?php } ?>
			
			<?php if($report->part2Item22){
				
			?>
			<tr>
				<td class="leftAlign" colspan="2">Total Available Input Tax</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item22) ?></td>
			</tr>
			<?php } ?>
			
			<?php
				if($report->part2Item23A || $report->part2Item23B || $report->part2Item23C || $report->part2Item23D || $report->part2Item23E || $report->part2Item23F){
			?>
			<tr>
				<td class="leftAlign" colspan="4">Less: Deductions from Input Tax</td>
			</tr>
			<?php
				}
			?>
			<?php if($report->part2Item23A){
			
			?>
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Input Tax on Purchases of Capital Goods exceeding 1Million deferred for the succeeding period (sch.3)</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item23A) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item23B){
				
			?>
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Input Tax on Sale to Govt. closed to expense (sch.4)</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item23B) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item23C){
				
			?>
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Input Tax allocable to Exempt Sales</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item23C) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item23D){
				
			?>
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">VAT Refund/TCC claimed</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item23D) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item23E){
				
			?>
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Others</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item23E) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item23F){
				
			?>
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Total(Sum of Item 23A,23B,23C,23D & 23E</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item23F) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item24){
				
			?>
			<tr>
				<td class="leftAlign" colspan="2">Total Allowable Input Tax (Item 22 less Item 23F)</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item24) ?></td>
			</tr>
			<?php } ?>
			
			<?php if($report->part2Item25){
				
			?>
			<tr>
				<td class="leftAlign" colspan="2">Net VAT Payable (Item 19B less Item 24)</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item25) ?></td>
			</tr>
			<?php } ?>
			
			<?php
				if($report->part2Item26A || $report->part2Item26B || $report->part2Item26C || $report->part2Item26D || $report->part2Item26E || 
				$report->part2Item26F || $report->part2Item26G || $report->part2Item26H){
			?>
			<tr>
				<td class="leftAlign" colspan="4">Less: Tax Credits/Payments</td>
			</tr>
			<?php
				}
			?>
			
			<?php if($report->part2Item26A){
				
			?>
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Monthly VAT Payments - previous two months</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item26A) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item26B){
				
			?>
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Creditable Value-Added Tax Withheld (sch.6)</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item23B) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item26C){
				
			?>
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Advance Payments for Sugar and Flour Industries (sch.7)</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item26C) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item26D){
				
			?>
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">VAT withheld on Sales to Government (sch.8)</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item26D) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item26E){
				
			?>
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">VAT paid in return previously filed, if this is an amended return</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item26E) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item26F){
				
			?>
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Advance Payments made (please attach proof of payments -BIR Form No. 0605)</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item26F) ?></td>
			</tr>
			<?php } ?>
			
			<?php if($report->part2Item26G){
				
			?>
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Others</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item26G) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item26H){
				
			?>
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Total Tax Credits/Payments (Sum of Item 26A,26B,26C,26D,26E & 26F)</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item26H) ?></td>
			</tr>
			<?php } ?>
			
			<?php if($report->part2Item27){
			
			?>
			<tr>
				<td class="leftAlign" colspan="2">Tax Still Payable (Overpayment)(Item 25 less Item 26H)</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item27) ?></td>
			</tr>
			<?php } ?>
			
			<?php
				if($report->part2Item28A || $report->part2Item28B || $report->part2Item28C || $report->part2Item28D){
			?>
			<tr>
				<td class="leftAlign" colspan="4">Add: Penalties</td>
			</tr>
			<tr>
				<td class="leftAlign">Surcharge</td>
				<td class="leftAlign">Interest</td>
				<td class="leftAlign">Compromise</td>
				<td class="rightAlign"></td>
			</tr>
			<?php
				}
			?>
		
			<?php if($report->part2Item28A || $report->part2Item28B ||  $report->part2Item28C ||  $report->part2Item28D){
				
			?>
			<tr>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item28A) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item28B) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item28C) ?></td>
				<td class="rightAlign"><?= Controller::getFloat($report->part2Item28D) ?></td>
			</tr>
			<?php } ?>
			<?php if($report->part2Item29){
				
			?>
			<tr>
				<td class="leftAlign grayBg" colspan="2">Total Amount Payable (Overpayment)(Sum of Item 27 and 28D)</td>
				<td class="rightAlign grayBg"></td>
				<td class="rightAlign grayBg"><?= Controller::getFloat($report->part2Item29) ?></td>
			</tr>
			<?php } ?>
			
			<?php
				}
			?>
		</table>
		
	</div>
	<div class="viewButton">
		<input type="button" value="VIEW TAX FORM" class="viewPreviewMode addsavebuttonreports">
	</div>
</div>

<script>
	$('.viewPreviewMode').click(function() {
			month = $('select[name="month"]').val(); 
			year = $('input[name="year"]').val();
			window.open(URL + 'report/newtab_form2550q?month='+month+'&year='+year);
			return false;
		});
		<?php
			if(isset($_GET['month'])){
		?>
			
				$('select[name="month"]').val('<?= $_GET['month'] ?>'); 
				$('select[name="month2"]').val('<?= $_GET['qtr'] ?>'); 
				$('input[name="year"]').val('<?= $_GET['year'] ?>'); 
				
				$('.reportgenerate').click();
		<?php
			}
		?>
</script>
