<style>

</style>
<pre>
<?php
	// $data = $this->data[0];
	$data2 = $this->data[0];
	/* print_r($data); */
	$org = $this->org;
	$info = $this->info;
	
	$monthNum  = $_POST['month'];
	$month = date('F', mktime(0, 0, 0, $monthNum, 10)); // March
	$year = $_POST['year'];
	$year2 = $_POST['year'] - 1;
	$type = $_POST['type'];
	$monthYear = '';
	$monthYear2 = '';
	$month_year = '';
	$month_year2 = '';

	if($type == 'annual'){
		$monthYear = 'For the year ended '.$year;
		$month_year = $year;
		$month_year2 = $year2;
	}else if($type == 'monthly'){
		$monthYear =  'For the month ended '.$month.' '. $year;
		$month_year =  $month.' '. $year;
	}

	$SItotal = $data2['SIVat'] + $data2['SIExempt'] + $data2['SIZeroRated'] + $data2['SIGovernment'];
	$SGtotal = $data2['SGVat'] + $data2['SGExempt'] + $data2['SGZeroRated'] + $data2['SGGovernment'];
	$SDiscountTotal = $data2['SDiscount'] + $data2['SDiscountSP'] + $data2['ServiceDiscount'];
	$DCtotal = ($data2['DCSWBTaxable'] + $data2['DCSWBNonTaxable'] + $data2['DCMSFacilities'] + $data2['DCDepreciation'] + 
				$data2['DCRental'] + $data2['DCOutsideServices'] + $data2['DCOthers']);
	$CStotal = $data2['CSVat'] + $data2['CSExempt'] + $data2['CSZeroRated'] + $data2['CSGovernment'];
        $SRtotal = $data2['Sales_Return'];
//	$netRevenue = $SItotal + $SGtotal - $SDiscountTotal - $DCtotal - $CStotal;
//	$operationProfit = $netRevenue + $data2['Other_Income'];
        
        $operationProfit = $SItotal + $SGtotal - $SDiscountTotal - $DCtotal - $CStotal - $SRtotal;
        $netRevenue = $operationProfit + $data2['Other_Income'];
        
	$netIncome = $netRevenue - $data2['Expenses'];
?>
</pre>
<div class="reportHolderOR">
	<div class="incomeStatement_holder">
		<div class="fromReg">
			<div class="nameText">
				<?= $org->orgName ?>
			</div>
			<!--<div class="ORCompanyInfo">
				<?= $info->address ?>
			</div>
			<div class="ORCompanyInfo">
				VAT Reg. TIN: <?= $info->tinNum ?>
			</div>-->
			<br/>
			<div class="ORCompanyInfo">
				INCOME STATEMENT
			</div>
			<div class="ORCompanyInfo">
				<?= $monthYear?>
			</div>
			<div class="balanceTitle">
				<div>(Amounts in Philippine Pesos)</div>
			</div>
			
			<div style="margin-top:20px;">
				<table class="tblIncomeStatement">
					<tr>
						<td></td>
						<td></td>
						<td style="border-bottom:2px solid #000;text-align:right;">
							<?= $month_year?>
						</td>
					</tr>
					<tr>
						<td><b>REVENUES</b></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td style="">
							Professional Service Income
						</td>
						<td></td>
						<td class="isInputRight"></td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Professional Service Revenue
						</td>
						<td>&#8369;</td>
						<td class="isInputRight">
							<?= Controller::getFloat($data2['SIVat'])?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Professional Service Revenue - Exempt
						</td>
						<td></td>
						<td class="isInputRight">
							<?= Controller::getFloat($data2['SIExempt'])?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Professional Service Revenue - Zero Rated		
						</td>
						<td></td>
						<td class="isInputRight">
							<?= Controller::getFloat($data2['SIZeroRated'])?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Professional Service Revenue - Government		
						</td>
						<td></td>
						<td class="isInputRight">
							<?= Controller::getFloat($data2['SIGovernment'])?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:25px;"></td>
						<td></td>
						<td class="isInputRight" style="border-top:solid 1px #000;">
							<?= Controller::getFloat($SItotal)?>
						</td>
					</tr>
					
					<tr>
						<td style="">
							Sales
						</td>
						<td></td>
						<td class="isInputRight"></td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Sales - Goods
						</td>
						<td>&#8369;</td>
						<td class="isInputRight">
							<?= Controller::getFloat($data2['SGVat'])?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Sales - Exempt
						</td>
						<td></td>
						<td class="isInputRight">
							<?= Controller::getFloat($data2['SGExempt'])?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Sales - Zero Rated
						</td>
						<td></td>
						<td class="isInputRight">
							<?= Controller::getFloat($data2['SGZeroRated'])?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Sales - Government
						</td>
						<td></td>
						<td class="isInputRight">
							<?= Controller::getFloat($data2['SGGovernment'])?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:25px;"></td>
						<td></td>
						<td class="isInputRight" style="border-top:solid 1px #000;">
							<?= Controller::getFloat($SGtotal)?>
						</td>
					</tr>
					<tr>
						<td style="">
							Sales Return
						</td>
						<td></td>
						<td class="isInputRight">
							<?= Controller::getFloat($data2['Sales_Return'] + $data2['SROutputVat'])?>
						</td>
					</tr>
<!--					<tr>
						<td style="padding-left:25px;">
							Discount
						</td>
						<td>&#8369;</td>
						<td class="isInputRight">
							<?= Controller::getFloat($data2['SDiscountSP'])?>
						</td>
					</tr>-->
                                        <tr>
						<td style="padding-left:25px;">
							Sales Discount
						</td>
						<td>&#8369;</td>
						<td class="isInputRight">
							<?= Controller::getFloat($data2['SDiscount'] + $data2['SDiscountSP'])?>
						</td>
					</tr>
                                        <tr>
						<td style="padding-left:25px;">
							Service Discount
						</td>
						<td>&#8369;</td>
						<td class="isInputRight">
							<?= Controller::getFloat($data2['ServiceDiscount'])?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:25px;"></td>
						<td style="font-weight:bold">&#8369;</td>
						<td class="isInputRight" style="border-top:solid 1px #000;border-bottom:solid 1px #000;font-weight:bold;">
							<?= Controller::getFloat($SDiscountTotal)?>
						</td>
					</tr>
					
					<tr>
						<td>
							<b>COST OF SERVICES</b>
						</td>
						<td></td>
						<td class="isInputRight">
						</td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Direct Charges - Salaries, Wages and Benefits (Taxable)
						</td>
						<td>&#8369;</td>
						<td class="isInputRight">
							<?= Controller::getFloat($data2['DCSWBTaxable'])?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Direct Charges - Salaries, Wages and Benefits (Non-Taxable)
						</td>
						<td></td>
						<td class="isInputRight">
							<?= Controller::getFloat($data2['DCSWBNonTaxable'])?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Direct Charges - Materials, Supplies and Facilities
						</td>
						<td></td>
						<td class="isInputRight">
							<?= Controller::getFloat($data2['DCMSFacilities'])?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Direct Charges - Depreciation
						</td>
						<td></td>
						<td class="isInputRight">
							<?= Controller::getFloat($data2['DCDepreciation'])?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Direct Charges - Rental
						</td>
						<td></td>
						<td class="isInputRight">
							<?= Controller::getFloat($data2['DCRental'])?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Direct Charges - Outside Services
						</td>
						<td></td>
						<td class="isInputRight">
							<?= Controller::getFloat($data2['DCOutsideServices'])?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Direct Charges - Others
						</td>
						<td></td>
						<td class="isInputRight" style="border-bottom:solid 1px #000;">
							<?= Controller::getFloat($data2['DCOthers'])?>
						</td>
					</tr>
					
					<tr>
						<td style="padding-left:25px;"></td>
						<td style="font-weight:bold"></td>
						<td class="isInputRight" style="border-top:solid 1px #000;">
							<?= Controller::getFloat($DCtotal)?>
						</td>
					</tr>
					
					<tr>
						<td>
							<b>COST OF SALES</b>
						</td>
						<td></td>
						<td class="isInputRight"></td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Cost of Sales - Good
						</td>
						<td>&#8369;</td>
						<td class="isInputRight">
							<?= Controller::getFloat($data2['CSVat'])?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Cost of Sales - Exempt
						</td>
						<td></td>
						<td class="isInputRight">
							<?= Controller::getFloat($data2['CSExempt'])?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Cost of Sales - Zero Rated
						</td>
						<td></td>
						<td class="isInputRight">
							<?= Controller::getFloat($data2['CSZeroRated'])?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
						Cost of Sales - Government
						</td>
						<td></td>
						<td class="isInputRight">
							<?= Controller::getFloat($data2['CSGovernment'])?>
						</td>
					</tr>
					
<!--					<tr>
						<td style="padding-left:25px;"></td>
						<td style="font-weight:bold"></td>
						<td class="isInputRight" style="">
							<?= Controller::getFloat($CStotal)?>
						</td>
					</tr>-->
					<tr>
						<td style="padding-left:25px;"></td>
						<td style="font-weight:bold">&#8369;</td>
                                                <td class="isInputRight" style="border-top:solid 1px #000;border-bottom:solid 1px #000;font-weight:bold;">
                                                    <?= Controller::getFloat($CStotal)?>
                                                </td>
					</tr>
					<tr>
						<td></td>
						<td style="font-weight:bold"></td>
						<td class="isInputRight" style=""></td>
					</tr>
                                        
                                        <tr>
						<td>
							<b>OPERATING EXPENSES</b>
						</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
							General and Administrative Expenses
						</td>
						<td></td>
						<td class="isInputRight" style="border-bottom:1px solid #000;">
							<?= Controller::getFloat($data2['Expenses']) ?>
						</td>
					</tr>
					
                                        <tr>
						<td>
							<b>OPERATING PROFIT</b>
						</td>
						<td></td>
						<td class="isInputRight">
							<?= Controller::getFloat($operationProfit)?>
						</td>
					</tr>
					
					<?php
						if($data2['Other_Income'] > 0){
					?>
                                        
					<tr>
						<td>
							<b>Other Income</b>
						</td>
						<td></td>
						<td class="isInputRight">
							<?= Controller::getFloat($data2['Other_Income']) ?>
						</td>
					</tr>
					
					<?php
						}
					?>
                                        
                                        <tr>
						<td>
							<b>NET REVENUE</b>
						</td>
						<td style="font-weight:bold">&#8369;</td>
						<td class="isInputRight" style="border-top:solid 1px #000;font-weight:bold;">
							<?= Controller::getFloat($netRevenue)?>
						</td>
					</tr>
                                        
					<tr>
						<td style="padding-top:30px;"></td>
						<td style="padding-top:30px;"></td>
						<td style="padding-top:30px;"></td>
					</tr>
										
					
					<tr>
						<td> 
							<b>NET INCOME (LOSS)</b>
						</td>
						<td style="<?= $netIncome < 0 ? 'color:red' : ''?>">&#8369;</td>
						
						<td class="isInputRight netclass" style="border-bottom-style:double; <?= $netIncome < 0 ? 'color:red' : ''?> ">
							<b><?= Controller::getFloat($netIncome)?></b>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
