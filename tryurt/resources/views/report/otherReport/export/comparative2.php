<?php
	header('Content-type: application/excel');
	header('Content-Disposition: attachment; filename="comparative.xls"');
?>
<?php
	$org = $this->org;
	$info = $this->info;
	// $report = $this->summaryJournal;
	
	/* $balanceSheet = $this->balanceSheet[0];
	$incomeStatement = $this->getIncomeStatement[0];


	$monthNum  = $_POST['month'];
	$month = date('F', mktime(0, 0, 0, $monthNum, 10));  */
	
	$BS_current = $this->balanceSheet[0];
	$BS_before = $this->balanceSheet_month[0];
	$BS_year = $this->balanceSheet_year[0];
	
	
	$IS_current = $this->getIncomeStatement[0];
	$IS_before = $this->getIncomeStatement_month[0];
	$IS_year = $this->getIncomeStatement_year[0];
	
	
	$netRevenue_before = ($IS_before['PSI'] - $IS_before['Sales_Disc']) - $IS_before['Cost_of_Service'];
	$netRevenue_current = ($IS_current['PSI'] - $IS_current['Sales_Disc']) - $IS_current['Cost_of_Service'];
	$netRevenue_year = ($IS_year['PSI'] - $IS_year['Sales_Disc']) - $IS_year['Cost_of_Service'];
	
	$otherIncome_before = $IS_before['Other_Income'];
	$otherIncome_current = $IS_current['Other_Income'];
	$otherIncome_year = $IS_year['Other_Income'];
	
	$operatingProfit_before = $netRevenue_before + $otherIncome_before;
	$operatingProfit_current = $netRevenue_current + $otherIncome_current;
	$operatingProfit_year = $netRevenue_year + $otherIncome_year;
	
	$netIncomeb4IT_before = $operatingProfit_before - $IS_before['Expenses'];
	$netIncomeb4IT_current = $operatingProfit_current - $IS_current['Expenses'];
	$netIncomeb4IT_year = $operatingProfit_year - $IS_year['Expenses'];

	$capital_before = $BS_before['capital'];
	$capital_current = $capital_before + $netIncomeb4IT_before  + $BS_before['Drawing'];
	$capital_year = $BS_year['capital'];
	
	
	$totalcapital_before = $capital_before + $netIncomeb4IT_before  + $BS_before['Drawing'];
	$totalcapital_current = $capital_current + $netIncomeb4IT_current  + $BS_current['Drawing'];
	$totalcapital_year = $capital_year + $netIncomeb4IT_year  + $BS_year['Drawing'];
?>
<style>
.reportHolderOR{
		width: 50%;
		text-align:center;
		padding-left:30px;
}
.balanceTable{
	padding-top:100px;
	width:50%;
}
.tblIncomeStatement{
	padding-top:100px;
	width:50%;
}
</style>
<div class="reportHolderOR">
	<div class="fromReg">
		<div class="nameText">
			<?= $org->orgName ?>
		</div>
		<!--<div class="ORCompanyInfo">
			<?= ucwords($info->address) ?>
		</div>
		<div class="ORCompanyInfo">
			VAT Reg. TIN: <?= $info->tinNum ?>
		</div>-->
		<div class="ORCompanyInfo" style="font-size: 12px;font-family: Verdana;font-weight: bold;">
			Monthly Comparative Report
		</div>
		<br/>
		<?php
		if($_GET['type'] == 'bs'){
		?>
		<div class="ORCompanyInfo balance" style="font-size: 12px;font-family: Verdana;font-weight: bold;">
			STATEMENT OF FINANCIAL POSITION
		</div>
		<div class="ORCompanyInfo balance" style="font-size: 12px;font-family: Verdana;font-weight: bold;">
			As of 
			<?php echo (isset($_GET['month']))? date('F',strtotime('1990-'.$_GET['month'].'-01')) : date('F') ?>
			<?= $_GET['year'] ?>
		</div>
		<?php
		}elseif($_GET['type'] == 'is'){
		?>
		<div class="ORCompanyInfo hidden" style="font-size: 12px;font-family: Verdana;font-weight: bold;">
			INCOME STATEMENT
		</div>
		<div class="ORCompanyInfo income hidden" style="font-size: 12px;font-family: Verdana;font-weight: bold;">
			For the month ended
			<?php echo (isset($_GET['month']))? date('F',strtotime('1990-'.$_GET['month'].'-01')) : date('F') ?>
			<?= $_GET['year'] ?>
		</div>
		<?php
		}
		?>
		<div class="balanceTitle">
			(Amounts in Philippine Pesos)
		</div>
		<?php
		if($_GET['type'] == 'bs'){
		?>
		<table class="balanceTable">
			<tr class="titleTableassets">
				<th width="31%"></th>
				<th width="2%"></th>
				<th width="22%" style="text-align:center;">As of <?php echo (isset($_GET['month']))? date('F',strtotime('1990-'.($_GET['month'] - 1).'-01')) : date('F') ?>
					<br/><?= ($_GET['month'] - 1) == 0 ? ($_GET['year'] - 1) : $_GET['year'];?> </th>
				<th width="22%"style="text-align:center;">As of <?php echo (isset($_GET['month']))? date('F',strtotime('1990-'.($_GET['month']).'-01')) : date('F') ?>
					<br/><?= $_GET['year'] ?></th>
				<th width="22%" style="text-align:center;">As of <?php echo (isset($_GET['month']))? date('F',strtotime('1990-'.($_GET['month']).'-01')) : date('F') ?>
					<br/> <?= ($_GET['year'] - 1) ?><!--<?= $monthYear?>--></th>
			</tr>
			<tr>
				<td class="titleTableassets" style="padding-left: 200;"><b>ASSETS</b></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
			</tr>
			<tr class="currentassetstr">
				<td class="parentchildbalance"><b>CURRENT ASSETS</b></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
			</tr>
			<tr>
				<td class="tdPaddingLeft">Cash and Cash Equivalents </td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;">&#8369;</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_before['CCE'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_current['CCE'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_year['CCE'], 2) ?>
				</td>
			</tr>
			<tr>
				<td class="tdPaddingLeft">Receivables</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_before['AR'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_current['AR'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_year['AR'], 2) ?>
				</td>
			</tr>
			<tr>
				<td class="tdPaddingLeft">Other Assets</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_before['OCA'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_current['OCA'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_year['OCA'], 2) ?>
				</td>
			</tr>
			<tr>
				<td style="padding-top:10px;"></td>
				<td style="padding-top:10px;"></td>
				<td style="padding-top:10px;"></td>
				<td style="padding-top:10px;"></td>
				<td style="padding-top:10px;"></td>
			</tr>
			<tr>
				<td style="border-bottom:1px solid #000;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
			</tr>
			<tr class="tdborderline">
				<td class="tdPaddingLeft2">Total Current Assets</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;">&#8369;</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $totalCurrentAsset_before = $BS_before['CCE'] + $BS_before['AR'] + $BS_before['OCA'] , 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $totalCurrentAsset_current = $BS_current['CCE'] + $BS_current['AR'] + $BS_current['OCA'] , 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $totalCurrentAsset_year = $BS_year['CCE'] + $BS_year['AR'] + $BS_year['OCA'] , 2) ?>
				</td>
			</tr>
			<tr>
				<td style="border-bottom:1px solid #000;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
			</tr>
			<tr>
				<td class="acctTitle parentchildbalance" style="padding-top:10px;"><b>NONCURRENT ASSETS</b></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
			</tr>
			<tr>
				<td class="tdPaddingLeft">Long-Term Investments</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;">&#8369;</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_before['LTI'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_current['LTI'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_year['LTI'], 2) ?>
				</td>
			</tr>
			<tr>
				<td class="tdPaddingLeft">Property and Equipment, net</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_before['PPE'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_current['PPE'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_year['PPE'], 2) ?>
				</td>
			</tr>
			<tr>
				<td class="tdPaddingLeft">Long-Term Receivables</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_before['LTR'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_current['LTR'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_year['LTR'], 2) ?>
				</td>
			</tr>
			<tr>
				<td class="tdPaddingLeft">Intangible Assets</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_before['IA'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_current['IA'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_year['IA'], 2) ?>
				</td>
			</tr>
			<tr>
				<td class="tdPaddingLeft">Other Assets</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_before['OA'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_current['OA'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_year['OA'], 2) ?>
				</td>
			</tr>
			<tr>
				<td style="padding-top:10px;"></td>
				<td style="padding-top:10px;"></td>
				<td style="padding-top:10px;"></td>
				<td style="padding-top:10px;"></td>
				<td style="padding-top:10px;"></td>
			</tr>
			<tr>
				<td style="border-bottom:1px solid #000;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
			</tr>
			<tr class="tdborderline">
				<td class="tdPaddingLeft2">Total Non Current Assets</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;">&#8369;</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $totalNonCurrent_before = $BS_before['LTI'] + $BS_before['PPE'] + $BS_before['LTR'] + $BS_before['IA'] + $BS_before['OA'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $totalNonCurrent_current = $BS_current['LTI'] + $BS_current['PPE'] + $BS_current['LTR'] + $BS_current['IA'] + $BS_current['OA'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $totalNonCurrent_year = $BS_year['LTI'] + $BS_year['PPE'] + $BS_year['LTR'] + $BS_year['IA'] + $BS_year['OA'], 2) ?>
				</td>
			</tr>
			<tr>
				<td style="border-bottom:1px solid #000;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
			</tr>
			<tr>
				<td style="padding-top:30px;"></td>
				<td style="padding-top:30px;"></td>
				<td style="padding-top:30px;"></td>
				<td style="padding-top:30px;"></td>
				<td style="padding-top:30px;"></td>
			</tr>
			<tr class="doubleborder boldstyle">
				<td class="acctTitle parentchildbalance"><b>TOTAL ASSETS</b></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;">&#8369;</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $totalAsset_before = $totalCurrentAsset_before + $totalNonCurrent_before, 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $totalAsset_current = $totalCurrentAsset_current + $totalNonCurrent_current, 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $totalAsset_year = $totalCurrentAsset_year + $totalNonCurrent_year, 2) ?>
				</td>
			</tr>
			<tr>
				<td style="border-bottom-style:double;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
			</tr>
			<tr>
				<td class="titleTableassets" style="padding-left:102px;padding-top:30px;"><b>LIABILITIES AND CAPITAL</b></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
			</tr>
			<tr>
				<td class="parentchildbalance"><b>CURRENT LIABILITIES</b></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
			</tr>
			<tr>
				<td class="tdPaddingLeft">Accounts Payable</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;">&#8369;</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_before['AP'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_current['AP'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_year['AP'], 2) ?>
				</td>
			</tr>
			<tr>
				<td class="tdPaddingLeft">Accrued Expenses</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_before['AE'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_current['AE'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_year['AE'], 2) ?>
				</td>
			</tr>
			<tr>
				<td class="tdPaddingLeft">Income Tax Payable</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_before['ITP'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_current['ITP'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_year['ITP'], 2) ?>
				</td>
			</tr>
			<tr>
				<td class="tdPaddingLeft">Other Current Liabilities</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_before['OCL'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_current['OCL'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_year['OCL'], 2) ?>
				</td>
			</tr>
			<tr>
				<td style="padding-top:10px;"></td>
				<td style="padding-top:10px;"></td>
				<td style="padding-top:10px;"></td>
				<td style="padding-top:10px;"></td>
				<td style="padding-top:10px;"></td>
			</tr>
			<tr>
				<td style="border-bottom:1px solid #000;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
			</tr>
			<tr class="tdborderline">
				<td class="tdPaddingLeft2">Total Current Liabilities</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;">&#8369;</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $totalCurrentLiabilities_before = $BS_before['AP'] + $BS_before['AE'] + $BS_before['ITP'] + $BS_before['OCL'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $totalCurrentLiabilities_current = $BS_current['AP'] + $BS_current['AE'] + $BS_current['ITP'] + $BS_current['OCL'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $totalCurrentLiabilities_year = $BS_year['AP'] + $BS_year['AE'] + $BS_year['ITP'] + $BS_year['OCL'], 2) ?>
				</td>
			</tr>
			<tr>
				<td style="border-bottom:1px solid #000;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
			</tr>
			<tr>
				<td class="parentchildbalance" style="padding-top:10px;"><b>NONCURRENT LIABILITIES</b></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
			</tr>
			<tr>
				<td class="tdPaddingLeft">Long-Term Liabilities</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;">&#8369;</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_before['LTB'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_current['LTB'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_year['LTB'], 2) ?>
				</td>
			</tr>
			<tr>
				<td class="tdPaddingLeft">Deferred Credits</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_before['DC'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_current['DC'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_year['DC'], 2) ?>
				</td>
			</tr>
			<tr>
				<td class="tdPaddingLeft">Other Liabilities</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_before['OL'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_current['OL'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_year['OL'], 2) ?>
				</td>
			</tr>
			<tr>
				<td style="padding-top:10px;"></td>
				<td style="padding-top:10px;"></td>
				<td style="padding-top:10px;"></td>
				<td style="padding-top:10px;"></td>
				<td style="padding-top:10px;"></td>
			</tr>
			<tr>
				<td style="border-bottom:1px solid #000;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
			</tr>
			<tr class="tdborderline">
				<td class="tdPaddingLeft2">Total Non-Current Liabilities</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;">&#8369;</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $totalNonCurrentLiability_before = $BS_before['LTB'] + $BS_before['DC'] + $BS_before['OL'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $totalNonCurrentLiability_current = $BS_current['LTB'] + $BS_current['DC'] + $BS_current['OL'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $totalNonCurrentLiability_year = $BS_year['LTB'] + $BS_year['DC'] + $BS_year['OL'], 2) ?>
				</td>
			</tr>
			<tr>
				<td style="border-bottom:1px solid #000;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
			</tr>
			<tr>
				<td style="padding-top:30px;"></td>
				<td style="padding-top:30px;"></td>
				<td style="padding-top:30px;"></td>
				<td style="padding-top:30px;"></td>
				<td style="padding-top:30px;"></td>
			</tr>
			<tr class="boldstyle">
				<td class="parentchildbalance"><b>TOTAL LIABILITIES</b></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;">&#8369;</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $totalliability_before = $totalCurrentLiabilities_before + $totalNonCurrentLiability_before, 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $totalliability_current = $totalCurrentLiabilities_current + $totalNonCurrentLiability_current, 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $totalliability_year = $totalCurrentLiabilities_year + $totalNonCurrentLiability_year, 2) ?>
				</td>
			</tr>
			<tr>
				<td style="padding-top:30px;"></td>
				<td style="padding-top:30px;"></td>
				<td style="padding-top:30px;"></td>
				<td style="padding-top:30px;"></td>
				<td style="padding-top:30px;"></td>
			</tr>
			<tr>
				<td class="parentchildbalance"><b>CAPITAL</b></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
			</tr>
			
			<tr>
				<td class="tdPaddingLeft">Capital</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;">&#8369;</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?= Controller::getFloat($capital_before) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?= Controller::getFloat($capital_current) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?= Controller::getFloat($capital_year) ?>
				</td>
			</tr>
			<tr>
				<td class="tdPaddingLeft">Net Income / Loss</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $netIncomeb4IT_before , 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $netIncomeb4IT_current , 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $netIncomeb4IT_year , 2) ?>
				</td>
			</tr>
			<tr>
				<td class="tdPaddingLeft">Drawings</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_before['Drawing'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_current['Drawing'], 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $BS_year['Drawing'], 2) ?>
				</td>
			</tr>
			<tr>
				<td style="border-bottom:1px solid #000;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
			</tr>
			<?php
				 // $totalcapital_before = $capital_before + $netIncomeb4IT_before  + $BS_before['Drawing'];
				 // $totalcapital_current = $capital_current + $netIncomeb4IT_current  + $BS_current['Drawing'];
				 // $totalcapital_year = $capital_year + $netIncomeb4IT_year  + $BS_year['Drawing'];
				 
			?>
			<tr class="boldstyle">
				<td class="parentchildbalance"><b>TOTAL CAPITAL</b></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;">&#8369;</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $totalcapital_before, 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $totalcapital_current, 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) $totalcapital_year, 2) ?>
				</td>
			</tr>
			<tr>
				<td style="border-bottom:1px solid #000;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
			</tr>
			<tr>
				<td style="padding-top:30px;"></td>
				<td style="padding-top:30px;"></td>
				<td style="padding-top:30px;"></td>
				<td style="padding-top:30px;"></td>
				<td style="padding-top:30px;"></td>
			</tr>
			<?php
				// $totalcapital =  $balanceSheet['capital'] +  $netIncomeb4IT  +  $balanceSheet['Drawing'];
			?>
			<tr class="boldstyle doubleborder">
				<td class="titleTableassets"><b>TOTAL LIABILITIES AND CAPITAL</b></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;">&#8369;</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) ($totalliability_before + $totalcapital_before) , 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) ($totalliability_current + $totalcapital_current) , 2) ?>
				</td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;width: 145px;border: none;text-align: right;">
					<?php echo number_format((float) ($totalliability_year + $totalcapital_year) , 2) ?>
				</td>
			</tr>
			<tr>
				<td style="border-bottom-style:double;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
			</tr>
		</table>
		<?php
		}elseif($_GET['type'] == 'is'){
		?>
		<div style="margin-top:20px;" class="incomeStatement">
			<table class="tblIncomeStatement ">
				<tr>
					<th width="31%"></th>
					<th width="2%"></th>
					<th width="22%" style="text-align:center;">As of <?php echo (isset($_GET['month']))? date('F',strtotime('1990-'.($_GET['month'] - 1).'-01')) : date('F') ?>
						<br/><?= ($_GET['month'] - 1) == 0 ? ($_GET['year'] - 1) : $_GET['year'];?> </th>
					<th width="22%"style="text-align:center;">As of <?php echo (isset($_GET['month']))? date('F',strtotime('1990-'.($_GET['month']).'-01')) : date('F') ?>
						<br/><?= $_GET['year'] ?></th>
					<th width="22%" style="text-align:center;">As of <?php echo (isset($_GET['month']))? date('F',strtotime('1990-'.($_GET['month']).'-01')) : date('F') ?>
						<br/> <?= ($_GET['year'] - 1) ?><!--<?= $monthYear?>--></th>
				</tr>
				<tr>
					<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"><b>REVENUES</b></td>
					<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
					<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
					<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
					<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				</tr>
				<tr>
					<td style="padding-left:25px;">
						Professional Service Income
					</td>
					<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;">&#8369;</td>
					<td class="isInputRight" style="width: 160px;text-align: right;">
						<?= Controller::getFloat($IS_before['PSI']  - $IS_before['Sales_Disc'])?>
					</td>
					<td class="isInputRight" style="width: 160px;text-align: right;">
						<?= Controller::getFloat($IS_current['PSI']  - $IS_current['Sales_Disc'])?>
					</td>
					<td class="isInputRight"style="width: 160px;text-align: right;">
						<?= Controller::getFloat($IS_year['PSI']  - $IS_year['Sales_Disc'])?>
					</td>
				</tr>
				<tr>
					<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;">
						<b>COST OF SERVICES</b>
					</td>
					<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;">&#8369;</td>
					<td class="isInputRight" style="width: 160px;text-align: right;">
						<?= Controller::getFloat($IS_before['Cost_of_Service']) ?>
					</td>
					<td class="isInputRight" style="width: 160px;text-align: right;">
						<?= Controller::getFloat($IS_current['Cost_of_Service']) ?>
					</td>
					<td class="isInputRight" style="width: 160px;text-align: right;">
						<?= Controller::getFloat($IS_year['Cost_of_Service']) ?>
					</td>
				</tr>
				<tr>
					<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
					<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
					<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
					<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
					<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				</tr>
				<tr>
					<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;">
						<b>NET REVENUE</b>
					</td>
					<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;">&#8369;</td>
					<?php
						$netRevenue_before = ($IS_before['PSI'] - $IS_before['Sales_Disc']) - $IS_before['Cost_of_Service'];
						$netRevenue_current = ($IS_current['PSI'] - $IS_current['Sales_Disc']) - $IS_current['Cost_of_Service'];
						$netRevenue_year = ($IS_year['PSI'] - $IS_year['Sales_Disc']) - $IS_year['Cost_of_Service'];
					?>
					<td class="isInputRight" style="borders-top:1px solid #000;width: 160px;text-align: right;">
						<b><?= Controller::getFloat($netRevenue_before) ?></b>
					</td>
					<td class="isInputRight" style="borders-top:1px solid #000;width: 160px;text-align: right;">
						<b><?= Controller::getFloat($netRevenue_current) ?></b>
					</td>
					<td class="isInputRight" style="borders-top:1px solid #000;width: 160px;text-align: right;">
						<b><?= Controller::getFloat($netRevenue_year) ?></b>
					</td>
				</tr>
				<?php
					$otherIncome_before = 0;
					$otherIncome_current = 0;
					$otherIncome_year = 0;
					if($IS_before['Other_Income'] > 0 || $IS_current['Other_Income'] > 0 || $IS_year['Other_Income'] > 0){
						$otherIncome_before = $IS_before['Other_Income'];
						$otherIncome_current = $IS_current['Other_Income'];
						$otherIncome_year = $IS_year['Other_Income'];
				?>
				<tr>
					<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;">
						<b>Other Income</b>
					</td>
					<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
					<td class="isInputRight" style="width: 160px;text-align: right;">
						<?= Controller::getFloat($IS_before['Other_Income']) ?>
					</td>
					<td class="isInputRight" style="width: 160px;text-align: right;">
						<?= Controller::getFloat($IS_current['Other_Income']) ?>
					</td>
					<td class="isInputRight" style="width: 160px;text-align: right;">
						<?= Controller::getFloat($IS_year['Other_Income']) ?>
					</td>
				</tr>
				<?php
					}
					$operatingProfit_before = $netRevenue_before + $otherIncome_before;
					$operatingProfit_current = $netRevenue_current + $otherIncome_current;
					$operatingProfit_year = $netRevenue_year + $otherIncome_year;
				?>
				<tr>
					<td style="padding-top:30px;"></td>
					<td style="padding-top:30px;"></td>
					<td style="padding-top:30px;"></td>
					<td style="padding-top:30px;"></td>
					<td style="padding-top:30px;"></td>
				</tr>
				<tr>
					<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;">
						<b>OPERATING PROFIT</b>
					</td>
					<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;">&#8369;</td>
					<td class="isInputRight" style="borders-top:1px solid #000;width: 160px;text-align: right;">
						<b><?= Controller::getFloat($operatingProfit_before) ?></b>
					</td>
					<td class="isInputRight" style="borders-top:1px solid #000;width: 160px;text-align: right;">
						<b><?= Controller::getFloat($operatingProfit_current) ?></b>
					</td>
					<td class="isInputRight" style="borders-top:1px solid #000;width: 160px;text-align: right;">
						<b><?= Controller::getFloat($operatingProfit_year) ?></b>
					</td>
				</tr>
				<tr>
					<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;">
						<b>OPERATING EXPENSES</b>
					</td>
					<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
					<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
					<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
					<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
				</tr>
				<tr>
					<td style="padding-left:25px;">
						General and Administrative Expenses
					</td>
					<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"></td>
					<td class="isInputRight" style="borders-bottom:1px solid #000;width: 160px;text-align: right;">
						<?= Controller::getFloat($IS_before['Expenses']) ?>
					</td>
					<td class="isInputRight" style="borders-bottom:1px solid #000;width: 160px;text-align: right;">
						<?= Controller::getFloat($IS_current['Expenses']) ?>
					</td>
					<td class="isInputRight" style="borders-bottom:1px solid #000;width: 160px;text-align: right;">
						<?= Controller::getFloat($IS_year['Expenses']) ?>
					</td>
				</tr>
				<?php
					$netIncomeb4IT_before = $operatingProfit_before - $IS_before['Expenses'];
					$netIncomeb4IT_current = $operatingProfit_current - $IS_current['Expenses'];
					$netIncomeb4IT_year = $operatingProfit_year - $IS_year['Expenses'];
					
					$netincometext_before= Controller::getFloat($netIncomeb4IT_before);
					$netincometext_current= Controller::getFloat($netIncomeb4IT_current);
					$netincometext_year= Controller::getFloat($netIncomeb4IT_year);
				?>
				
				<tr>
					<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;"> 
						<b>NET INCOME (LOSS)</b>
					</td>
					<td style="padding-top: 5px;font-family: Verdana;font-size: 12px;">&#8369;</td>
					
					<td class="isInputRight netclass" style="borders-bottom-style:double;width: 160px;text-align: right; <?= $netIncomeb4IT_before < 0 ? 'color:red' : ''?>">
						<b><?= Controller::getFloat($netIncomeb4IT_before) ?></b>
					</td>
					<td class="isInputRight netclass" style="borders-bottom-style:double;width: 160px;text-align: right; <?= $netIncomeb4IT_current < 0 ? 'color:red' : ''?> ">
						<b><?= Controller::getFloat($netIncomeb4IT_current) ?></b>
					</td>
					<td class="isInputRight netclass" style="borders-bottom-style:double;width: 160px;text-align: right; <?= $netIncomeb4IT_year < 0 ? 'color:red' : ''?>">
						<b><?= Controller::getFloat($netIncomeb4IT_year) ?></b>
					</td>
				</tr>
				<?php
					/* $provissionForTax = $this->provissionForTax; */
				?>
			</table>
		</div>
		<?php
		}
		?>
		<!--?php else:?>	-->	
			<!--<div class="TC noJournal">
				NO AUDIT TRAIL.
			</div>-->
		<!--?php
		endif;
		?>-->
	</div>
</div>
