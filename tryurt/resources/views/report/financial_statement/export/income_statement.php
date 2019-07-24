<?php
	header('Content-type: application/excel');
	header('Content-Disposition: attachment; filename="income_statement.xls"');
?>

<style>
.tdTotal{
	background-color:#BE3323;
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
.reportHolderOR{
	width: 50% !important;
	text-align:center !important;
	padding-left:30px !important;
}
.tblIncomeStatement{
	width:50% !important;
	text-align:center !important;
}
.exportHolder{
	font-family: Verdana !important;
	margin-left: 15px !important;
	text-align: center !important;
	height:auto!important !important;
	margin-top:20px !important;
	font-size:12px !important;
	font-weight:bold !important;
}
.orgName{
	font-size:14px !important;
	font-family:Verdana !important;
	text-transform: uppercase !important;
	font-weight: bold !important;
}
.reportTh{
	background-color: #BE3323 !important;
	color: white !important;
	padding: 5px !important;
	height: 27px !important;
	border: solid 1px #000 !important;
}
.reportTd{
	color: #000 !important;
	padding: 5px !important;
	height: 27px !important;
	border: solid 1px #000 !important;
}
.titleUp{
	font-weight:bold !important;
}
.tdTotal{
	border: solid 1px #000 !important;
}
.tdTotal2{
	background-color:#BE3323;
	color:#fff;
	font-size:12px!important;
	font-weight:bold;
}
</style>
<pre>
<?php
	$data = $this->data[0];
	$org = $this->org;
	$info = $this->info;
	
	$monthNum  = $_GET['month'];
	$month = date('F', mktime(0, 0, 0, $monthNum, 10)); // March
	$year = $_GET['year'];
	$type = $_GET['type'];
	$monthYear = '';
	$month_year = '';

	if($type == 'annual'){
		$monthYear = 'For the year ended '.$year;
		$month_year = $year;
	}else if($type == 'monthly'){
		$monthYear =  'For the month ended '.$month.' '. $year;
		$month_year =  $month.' '. $year;
	}

	if($type == 'annual'){
		$monthYear = 'For the year ended '.$year;
		$month_year = $year;
	}else if($type == 'monthly'){
		$monthYear =  'For the month ended '.$month.' '. $year;
		$month_year =  $month.' '. $year;
	}

	$SItotal = $data['SIVat'] + $data['SIExempt'] + $data['SIZeroRated'] + $data['SIGovernment'];
	$SGtotal = $data['SGVat'] + $data['SGExempt'] + $data['SGZeroRated'] + $data['SGGovernment'];
	$SDiscountTotal = $data['SDiscount'] + $data['SDiscountSP'] + $data['ServiceDiscount'];
	$DCtotal = ($data['DCSWBTaxable'] + $data['DCSWBNonTaxable'] + $data['DCMSFacilities'] + $data['DCDepreciation'] + 
				$data['DCRental'] + $data['DCOutsideServices'] + $data['DCOthers']);
	$CStotal = $data['CSVat'] + $data['CSExempt'] + $data['CSZeroRated'] + $data['CSGovernment'];
        
        $SRtotal = $data['Sales_Return'];
        
//	$netRevenue = $SItotal + $SGtotal - $SDiscountTotal - $DCtotal - $CStotal;
//	$operationProfit = $netRevenue + $data['Other_Income'];
        
	$operationProfit = $SItotal + $SGtotal - $SDiscountTotal - $DCtotal - $CStotal - $SRtotal;
        $netRevenue = $operationProfit + $data['Other_Income'];
        
	$netIncome = $netRevenue - $data['Expenses'];

?>
</pre>
<div class="reportHolderOR">
	<div class="incomeStatement_holder">
		<div class="fromReg  exportHolder">
			<div class="nameText" style="font-weight:bold;">
				<?= $org->orgName ?>
			</div>
			<br/>
			<div class="ORCompanyInfo" style="font-weight:bold;">
				INCOME STATEMENT
			</div>
			<div class="ORCompanyInfo" style="font-weight:bold;">
				<?= $monthYear?>
			</div>
			<div class="balanceTitle" style="font-weight:bold;">
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
							<?= Controller::getFloat($data['SIVat'])?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Professional Service Revenue - Exempt
						</td>
						<td></td>
						<td class="isInputRight">
							<?= Controller::getFloat($data['SIExempt'])?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Professional Service Revenue - Zero Rated		
						</td>
						<td></td>
						<td class="isInputRight">
							<?= Controller::getFloat($data['SIZeroRated'])?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Professional Service Revenue - Government		
						</td>
						<td></td>
						<td class="isInputRight">
							<?= Controller::getFloat($data['SIGovernment'])?>
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
							<?= Controller::getFloat($data['SGVat'])?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Sales - Exempt
						</td>
						<td></td>
						<td class="isInputRight">
							<?= Controller::getFloat($data['SGExempt'])?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Sales - Zero Rated
						</td>
						<td></td>
						<td class="isInputRight">
							<?= Controller::getFloat($data['SGZeroRated'])?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Sales - Government
						</td>
						<td></td>
						<td class="isInputRight">
							<?= Controller::getFloat($data['SGGovernment'])?>
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
						<td>&#8369;</td>
						<td class="isInputRight">
							<?= Controller::getFloat($data['Sales_Return'])?>
						</td>
					</tr>
					<tr>
						<td>
							Discount
						</td>
						<td></td>
						<td class="isInputRight">
							<?php //  Controller::getFloat($data['SDiscountSP'])?>
						</td>
					</tr>
                                        <tr>
						<td style="padding-left:25px;">
							Sales Discount
						</td>
						<td>&#8369;</td>
						<td class="isInputRight">
							<?= Controller::getFloat($data['SDiscount'] + $data['SDiscountSP'])?>
						</td>
					</tr>
                                        <tr>
						<td style="padding-left:25px;">
							Service Discount
						</td>
						<td>&#8369;</td>
						<td class="isInputRight">
							<?= Controller::getFloat($data['ServiceDiscount'])?>
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
							<?= Controller::getFloat($data['DCSWBTaxable'])?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Direct Charges - Salaries, Wages and Benefits (Non-Taxable)
						</td>
						<td></td>
						<td class="isInputRight">
							<?= Controller::getFloat($data['DCSWBNonTaxable'])?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Direct Charges - Materials, Supplies and Facilities
						</td>
						<td></td>
						<td class="isInputRight">
							<?= Controller::getFloat($data['DCMSFacilities'])?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Direct Charges - Depreciation
						</td>
						<td></td>
						<td class="isInputRight">
							<?= Controller::getFloat($data['DCDepreciation'])?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Direct Charges - Rental
						</td>
						<td></td>
						<td class="isInputRight">
							<?= Controller::getFloat($data['DCRental'])?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Direct Charges - Outside Services
						</td>
						<td></td>
						<td class="isInputRight">
							<?= Controller::getFloat($data['DCOutsideServices'])?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Direct Charges - Others
						</td>
						<td></td>
						<td class="isInputRight" style="border-bottom:solid 1px #000;">
							<?= Controller::getFloat($data['DCOthers'])?>
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
							<?= Controller::getFloat($data['CSVat'])?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Cost of Sales - Exempt
						</td>
						<td></td>
						<td class="isInputRight">
							<?= Controller::getFloat($data['CSExempt'])?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Cost of Sales - Zero Rated
						</td>
						<td></td>
						<td class="isInputRight">
							<?= Controller::getFloat($data['CSZeroRated'])?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:25px;">
						Cost of Sales - Government
						</td>
						<td></td>
						<td class="isInputRight">
							<?= Controller::getFloat($data['CSGovernment'])?>
						</td>
					</tr>
					
<!--					<tr>
						<td style="padding-left:25px;"></td>
						<td style="font-weight:bold"></td>
						<td class="isInputRight" style="">
							//<?= Controller::getFloat($CStotal)?>
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
							<?= Controller::getFloat($data['Expenses']) ?>
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
						if($data['Other_Income'] != 0){
					?>
                                        
					<tr>
						<td>
							<b>Other Income</b>
						</td>
						<td></td>
						<td class="isInputRight">
							<?= Controller::getFloat($data['Other_Income']) ?>
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