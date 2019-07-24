<?php
	header('Content-type: application/excel');
	header('Content-Disposition: attachment; filename="balance_sheet.xls"');
?>
<?php
// $balanceSheet = $report->balanceSheet();
$info = $this->info;
$org = $this->org;

$balanceSheet = $this->balanceSheet[0];
$incomeStatement = $this->getIncomeStatement[0];

$netRevenue = ($incomeStatement['PSI'] - $incomeStatement['Sales_Disc']) - $incomeStatement['Cost_of_Service'];
$otherIncome = $incomeStatement['Other_Income'];
$operatingProfit = $netRevenue + $otherIncome;
$netIncomeb4IT = $operatingProfit - $incomeStatement['Expenses'];


// $month = date('F',$_GET['month']);
$monthNum  = $_GET['month'];
$month = date('F', mktime(0, 0, 0, $monthNum, 10)); // March
$year = $_GET['year'];
$type = $_GET['type'];
$monthYear = '';

if($type == 'annual'){
	$monthYear = $year;
}else if($type == 'monthly'){
	$monthYear = $month.' '. $year;
}

?>

<style>
	.reportHolderOR{
		width: 50%;
		text-align:center;
	}
	.balanceTable{
		width:50%;
		text-align:center;
	}
</style>
<div class="reportHolderOR">
	<div class="balanceSheet_holder" >
		<div style="font-family: Verdana;margin-left: 15;text-align: center;height:auto!important;margin-top:20px;">
			<div style="font-size:14px;font-family:Verdana;text-transform: uppercase;font-weight: bold;"><?= $org->orgName ?></div>
			<br/>
			<div  style="font-size: 12px;font-weight: bold;font-family: Verdana;">STATEMENT OF FINANCIAL POSITION</div>
			<div  style="font-size: 12px;font-weight: bold;font-family: Verdana;">As of <?= $monthYear?></div>
			<div class="balanceTitle">(Amounts in Philippine Pesos)</div>
			
			<table class="balanceTable" style="margin-left:30px;margin-top:20px;font-family: Verdana;font-size: 12px;">
				<tr class="titleTableassets">
					<td></td>
					<td></td>
					<td style="font-family: Verdana;font-size: 12px;"><?= $monthYear?></td>
				</tr>
				<tr>
					<td class="titleTableassets" style="padding-left: 200;margin-left:30px;margin-top:20px;font-family: Verdana;font-size: 12px;"><b>ASSETS</b></td>
					<td></td>
				</tr>
				<tr class="currentassetstr">
					<td style="padding-left:10px;"><b>CURRENT ASSETS</b></td>
					<td></td>
				</tr>
				<tr>
					<td style="padding-left:25px;">Cash and Cash Equivalents </td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;">&#8369;</td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;"><?php echo number_format((float) $balanceSheet['CCE'], 2) ?></td>
				</tr>
				<tr>
					<td style="padding-left:25px;">Receivables</td>
					<td></td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;"><?php echo number_format((float) $balanceSheet['AR'], 2) ?></td>
				</tr>
				<tr>
					<td style="padding-left:25px;">Other Assets</td>
					<td></td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;"><?php echo number_format((float) $balanceSheet['OCA'], 2) ?></td>
				</tr>
				<tr>
					<td style="padding-top:10px;"></td>
					<td style="padding-top:10px;"></td>
					<td style="padding-top:10px;"></td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid #000;"></td>
					<td style="border-bottom:1px solid #000;"></td>
					<td style="border-bottom:1px solid #000;"></td>
				</tr>
				<tr class="tdborderline">
					<td style="padding-left:25px;">Total Current Assets</td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;">&#8369;</td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;"><?php echo number_format((float) $totalCurrentAsset = $balanceSheet['CCE'] + $balanceSheet['AR'] + $balanceSheet['OCA'] , 2) ?></td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid #000;"></td>
					<td style="border-bottom:1px solid #000;"></td>
					<td style="border-bottom:1px solid #000;"></td>
				</tr>
				<tr>
					<td class="acctTitle parentchildbalance" style="padding-top:10px;"><b>NONCURRENT ASSETS</b></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td style="padding-left:25px;">Long-Term Investments</td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;">&#8369;</td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;"><?php echo number_format((float) $balanceSheet['LTI'], 2) ?></td>
				</tr>
				<tr>
					<td style="padding-left:25px;">Property and Equipment, net</td>
					<td></td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;"><?php echo number_format((float) $balanceSheet['PPE'], 2) ?></td>
				</tr>
				<tr>
					<td style="padding-left:25px;">Long-Term Receivables</td>
					<td></td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;"><?php echo number_format((float) $balanceSheet['LTR'], 2) ?></td>
				</tr>
				<tr>
					<td style="padding-left:25px;">Intangible Assets</td>
					<td></td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;"><?php echo number_format((float) $balanceSheet['IA'], 2) ?></td>
				</tr>
				<tr>
					<td style="padding-left:25px;">Other Assets</td>
					<td></td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;"><?php echo number_format((float) $balanceSheet['OA'], 2) ?></td>
				</tr>
				<tr>
					<td style="padding-top:10px;"></td>
					<td style="padding-top:10px;"></td>
					<td style="padding-top:10px;"></td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid #000;"></td>
					<td style="border-bottom:1px solid #000;"></td>
					<td style="border-bottom:1px solid #000;"></td>
				</tr>
				<tr class="tdborderline">
					<td style="padding-left:25px;">Total Non Current Assets</td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;">&#8369;</td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;"><?php echo number_format((float) $totalNonCurrent = $balanceSheet['LTI'] + $balanceSheet['PPE'] + $balanceSheet['LTR'] + $balanceSheet['IA'] + $balanceSheet['OA'], 2) ?></td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid #000;"></td>
					<td style="border-bottom:1px solid #000;"></td>
					<td style="border-bottom:1px solid #000;"></td>
				</tr>
				<tr>
					<td style="padding-top:30px;"></td>
					<td style="padding-top:30px;"></td>
					<td style="padding-top:30px;"></td>
				</tr>
				<tr class="doubleborder boldstyle">
					<td class="acctTitle parentchildbalance"><b>TOTAL ASSETS</b></td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;">&#8369;</td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;"><?php echo number_format((float) $totalAsset = $totalCurrentAsset + $totalNonCurrent, 2) ?></td>
				</tr>
				<tr>
					<td style="border-bottom-style:double;"></td>
					<td style="border-bottom-style:double;"></td>
					<td style="border-bottom-style:double;"></td>
				</tr>
				<tr>
					<td class="titleTableassets" style="padding-left: 200px;padding-top:30px;"><b>LIABILITIES AND CAPITAL</b></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td style="padding-left:10px;"><b>CURRENT LIABILITIES</b></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td style="padding-left:25px;">Accounts Payable</td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;">&#8369;</td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;"><?php echo number_format((float) $balanceSheet['AP'], 2) ?></td>
				</tr>
				<tr>
					<td style="padding-left:25px;">Accrued Expenses</td>
					<td></td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;"><?php echo number_format((float) $balanceSheet['AE'], 2) ?></td>
				</tr>
				<tr>
					<td style="padding-left:25px;">Income Tax Payable</td>
					<td></td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;"><?php echo number_format((float) $balanceSheet['ITP'], 2) ?></td>
				</tr>
				<tr>
					<td style="padding-left:25px;">Other Current Liabilities</td>
					<td></td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;"><?php echo number_format((float) $balanceSheet['OCL'], 2) ?></td>
				</tr>
				<tr>
					<td style="padding-top:10px;"></td>
					<td style="padding-top:10px;"></td>
					<td style="padding-top:10px;"></td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid #000;"></td>
					<td style="border-bottom:1px solid #000;"></td>
					<td style="border-bottom:1px solid #000;"></td>
				</tr>
				<tr class="tdborderline">
					<td style="padding-left:25px;">Total Current Liabilities</td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;">&#8369;</td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;"><?php echo number_format((float) $totalCurrentLiabilities = $balanceSheet['AP'] + $balanceSheet['AE'] + $balanceSheet['ITP'] + $balanceSheet['OCL'], 2) ?></td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid #000;"></td>
					<td style="border-bottom:1px solid #000;"></td>
					<td style="border-bottom:1px solid #000;"></td>
				</tr>
				<tr>
					<td style="padding-left:10px;" style="padding-top:10px;"><b>NONCURRENT LIABILITIES</b></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td style="padding-left:25px;">Long-Term Liabilities</td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;">&#8369;</td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;"><?php echo number_format((float) $balanceSheet['LTB'], 2) ?></td>
				</tr>
				<tr>
					<td style="padding-left:25px;">Deferred Credits</td>
					<td></td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;"><?php echo number_format((float) $balanceSheet['DC'], 2) ?></td>
				</tr>
				<tr>
					<td style="padding-left:25px;">Other Liabilities</td>
					<td></td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;"><?php echo number_format((float) $balanceSheet['OL'], 2) ?></td>
				</tr>
				<tr>
					<td style="padding-top:10px;"></td>
					<td style="padding-top:10px;"></td>
					<td style="padding-top:10px;"></td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid #000;"></td>
					<td style="border-bottom:1px solid #000;"></td>
					<td style="border-bottom:1px solid #000;"></td>
				</tr>
				<tr class="tdborderline">
					<td style="padding-left:25px;">Total Non-Current Liabilities</td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;">&#8369;</td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;"><?php echo number_format((float) $totalNonCurrentLiability = $balanceSheet['LTB'] + $balanceSheet['DC'] + $balanceSheet['OL'], 2) ?></td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid #000;"></td>
					<td style="border-bottom:1px solid #000;"></td>
					<td style="border-bottom:1px solid #000;"></td>
				</tr>
				<tr>
					<td style="padding-top:30px;"></td>
					<td style="padding-top:30px;"></td>
					<td style="padding-top:30px;"></td>
				</tr>
				<tr class="boldstyle">
					<td style="padding-left:10px;"><b>TOTAL LIABILITIES</b></td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;">&#8369;</td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;"><?php echo number_format((float) $totalliability = $totalCurrentLiabilities + $totalNonCurrentLiability, 2) ?></td>
				</tr>
				<tr>
					<td style="padding-top:30px;"></td>
					<td style="padding-top:30px;"></td>
					<td style="padding-top:30px;"></td>
				</tr>
				<tr>
					<td style="padding-left:10px;"><b>CAPITAL</b></td>
					<td></td>
					<td></td>
				</tr>
				<?php
					$balanceSheetb4 = $this->balanceSheetb4[0];
					
					$incomeStatementb4 = $this->getIncomeStatementb4[0];
					
					$netRevenue2 = ($incomeStatementb4['PSI'] - $incomeStatementb4['Sales_Disc']) - $incomeStatementb4['Cost_of_Service'];
					$otherIncome2 = $incomeStatementb4['Other_Income'];
					$operatingProfit2 = $netRevenue2 + $otherIncome2;
					$netIncomeb4IT2 = $operatingProfit2 - $incomeStatementb4['Expenses'];

					$capital = $balanceSheet['capital'] + $netIncomeb4IT2;
				?>
				<tr>
					<td style="padding-left:25px;">Capital</td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;">&#8369;</td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;"><?= Controller::getFloat($capital) ?></td>
				</tr>
				<tr>
					<td style="padding-left:25px;">Net Income / Loss</td>
					<td></td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;"><?php echo number_format((float) $netIncomeb4IT , 2) ?></td>
				</tr>
				<tr>
					<td style="padding-left:25px;">Drawings</td>
					<td></td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;"><?php echo number_format((float) $balanceSheet['Drawing'], 2) ?></td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid #000;"></td>
					<td style="border-bottom:1px solid #000;"></td>
					<td style="border-bottom:1px solid #000;"></td>
				</tr>
				<?php
					 $totalcapital = $capital + $netIncomeb4IT  + $balanceSheet['Drawing'];
					 
				?>
				<tr class="boldstyle">
					<td style="padding-left:10px;"><b>TOTAL CAPITAL</b></td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;">&#8369;</td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;"><?php echo number_format((float) $totalcapital, 2) ?></td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid #000;"></td>
					<td style="border-bottom:1px solid #000;"></td>
					<td style="border-bottom:1px solid #000;"></td>
				</tr>
				<tr>
					<td style="padding-top:30px;"></td>
					<td style="padding-top:30px;"></td>
					<td style="padding-top:30px;"></td>
				</tr>
				<?php
					// $totalcapital =  $balanceSheet['capital'] +  $netIncomeb4IT  +  $balanceSheet['Drawing'];
				?>
				<tr class="boldstyle doubleborder">
					<td class="titleTableassets"><b>TOTAL LIABILITIES AND CAPITAL</b></td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;">&#8369;</td>
					<td style="width:130px;margin-left:1px;padding-left:5px;border:none;text-align:right;"><?php echo number_format((float) ($totalliability + $totalcapital) , 2) ?></td>
				</tr>
				<tr>
					<td style="border-bottom-style:double;"></td>
					<td style="border-bottom-style:double;"></td>
					<td style="border-bottom-style:double;"></td>
				</tr>
			</table>
			<div class="seebelow"></div>
		</div>
	</div>
</div>