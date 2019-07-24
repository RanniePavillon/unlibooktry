<?php
// $balanceSheet = $report->balanceSheet();
$info = $this->info;
$org = $this->org;

$balanceSheet = $this->balanceSheet[0];
$incomeStatement = $this->getIncomeStatement[0];
$incomeStatement2 = $this->getIncomeStatementb4[0];

$SItotal = $incomeStatement['SIVat']+ $incomeStatement['SIExempt'] + $incomeStatement['SIZeroRated'] + $incomeStatement['SIGovernment'];
$SItotal2 = $incomeStatement2['SIVat']+ $incomeStatement2['SIExempt'] + $incomeStatement2['SIZeroRated'] + $incomeStatement2['SIGovernment'];

$SGtotal = $incomeStatement['SGVat'] + $incomeStatement['SGExempt'] + $incomeStatement['SGZeroRated'] + $incomeStatement['SGGovernment'];
$SGtotal2 = $incomeStatement2['SGVat'] + $incomeStatement2['SGExempt'] + $incomeStatement2['SGZeroRated'] + $incomeStatement2['SGGovernment'];

$SDiscountTotal = $incomeStatement['SDiscount'] + $incomeStatement['SDiscountSP'] + $incomeStatement['ServiceDiscount'];
$SDiscountTotal2 = $incomeStatement2['SDiscount'] + $incomeStatement2['SDiscountSP'] + $incomeStatement2['ServiceDiscount'];

$DCtotal = ($incomeStatement['DCSWBTaxable'] + $incomeStatement['DCSWBNonTaxable'] + $incomeStatement['DCMSFacilities'] + $incomeStatement['DCDepreciation'] + 
            $incomeStatement['DCRental'] + $incomeStatement['DCOutsideServices'] + $incomeStatement['DCOthers']);
$DCtotal2 = ($incomeStatement2['DCSWBTaxable'] + $incomeStatement2['DCSWBNonTaxable'] + $incomeStatement2['DCMSFacilities'] + $incomeStatement2['DCDepreciation'] + 
            $incomeStatement2['DCRental'] + $incomeStatement2['DCOutsideServices'] + $incomeStatement2['DCOthers']);

$CStotal = $incomeStatement['CSVat'] + $incomeStatement['CSExempt'] + $incomeStatement['CSZeroRated'] + $incomeStatement['CSGovernment'];
$CStotal2 = $incomeStatement2['CSVat'] + $incomeStatement2['CSExempt'] + $incomeStatement2['CSZeroRated'] + $incomeStatement2['CSGovernment'];

$SRtotal = $incomeStatement['Sales_Return'];
$SRtotal2 = $incomeStatement2['Sales_Return'];

$netRevenue = $SItotal + $SGtotal - $SDiscountTotal - $DCtotal - $CStotal - $SRtotal;
$netRevenue2 = $SItotal2 + $SGtotal2 - $SDiscountTotal2 - $DCtotal2 - $CStotal2 - $SRtotal2;

$otherIncome = $incomeStatement['Other_Income'];
$otherIncome2 = $incomeStatement2['Other_Income'];

$operatingProfit = $netRevenue + $otherIncome;
$operatingProfit2 = $netRevenue2 + $otherIncome2;

$netIncomeb4IT = $operatingProfit - $incomeStatement['Expenses'];
$netIncomeb4IT2 = $operatingProfit2 - $incomeStatement2['Expenses'];

$balanceSheet['capital'] += $netIncomeb4IT2;

// $month = date('F',$_POST['month']);
$monthNum = $_POST['month'];
$month = date('F', mktime(0, 0, 0, $monthNum, 10)); // March
$year = $_POST['year'];
$type = $_POST['type'];
$monthYear = '';

if ($type == 'annual') {
    $monthYear = $year;
} else if ($type == 'monthly') {
    $monthYear = $month . ' ' . $year;
}
?>
<div class="reportHolderOR">
    <div class="fromReg">
        <div class="nameText"><?= $org->orgName ?></div>
        <!--<div class="ORCompanyInfo">
        <?= $info->address ?>
        </div>
        <div class="ORCompanyInfo">
                VAT Reg. TIN: <?= $info->tinNum ?>
        </div>-->
        <br/>
        <div class="ORCompanyInfo">STATEMENT OF FINANCIAL POSITION</div>
        <div class="ORCompanyInfo">As of <?= $monthYear ?></div>
        <div class="balanceTitle">(Amounts in Philippine Pesos)</div>

        <table class="balanceTable">
            <tr class="titleTableassets" style="font-weight: bold;">
                <td></td>
                <td></td>
                <td style="text-align: right; padding-left:3px;"><?= $monthYear ?></td>
            </tr>
            <tr>
                <td class="titleTableassets" style="padding-left: 200;"><b>ASSETS</b></td>
                <td></td>
            </tr>
            <tr class="currentassetstr">
                <td class="parentchildbalance"><b>CURRENT ASSETS</b></td>
                <td></td>
            </tr>
            <tr>
                <td class="tdPaddingLeft">Cash and Cash Equivalents </td>
                <td>&#8369;</td>
                <td><input type="text" class="bsInput isNumeric" value="<?php echo number_format((float) $balanceSheet['CCE'], 2) ?>" readonly></td>
            </tr>
            <tr>
                <td class="tdPaddingLeft">Accounts Receivables</td>
                <td></td>
                <td><input type="text" class="bsInput isNumeric" value="<?php echo number_format((float) $balanceSheet['AR'], 2) ?>" readonly></td>
            </tr>
            <tr>
                <td class="tdPaddingLeft">Inventory</td>
                <td></td>
                <td><input type="text" class="bsInput isNumeric" value="<?php echo number_format((float) $balanceSheet['I'] + $incomeStatement['PDiscount'], 2) ?>" readonly></td>
            </tr>
            <tr>
                <td class="tdPaddingLeft">Other Current Assets</td>
                <td></td>
                <td><input type="text" class="bsInput" value="<?php echo number_format((float) $balanceSheet['OCA'], 2) ?>" readonly></td>
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
                <td class="tdPaddingLeft2">Total Current Assets</td>
                <td>&#8369;</td>
                <td><input type="text"  class="bsInput" value="<?php echo number_format((float) $totalCurrentAsset = $balanceSheet['CCE'] + $balanceSheet['AR'] +  $balanceSheet['I'] + $balanceSheet['OCA'] + $incomeStatement['PDiscount'], 2) ?>" readonly></td>
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
                <td class="tdPaddingLeft">Long-Term Investments</td>
                <td>&#8369;</td>
                <td><input type="text" class="bsInput" value="<?php echo number_format((float) $balanceSheet['LTI'], 2) ?>" readonly></td>
            </tr>
            <tr>
                <td class="tdPaddingLeft">Property and Equipment, net</td>
                <td></td>
                <td><input type="text" class="bsInput" value="<?php echo number_format((float) $balanceSheet['PPE'], 2) ?>" readonly></td>
            </tr>
            <tr>
                <td class="tdPaddingLeft">Long-Term Receivables</td>
                <td></td>
                <td><input type="text" class="bsInput" value="<?php echo number_format((float) $balanceSheet['LTR'], 2) ?>" readonly></td>
            </tr>
            <tr>
                <td class="tdPaddingLeft">Intangible Assets</td>
                <td></td>
                <td><input type="text" class="bsInput" value="<?php echo number_format((float) $balanceSheet['IA'], 2) ?>" readonly></td>
            </tr>
            <tr>
                <td class="tdPaddingLeft">Other Assets</td>
                <td></td>
                <td><input type="text" class="bsInput" value="<?php echo number_format((float) $balanceSheet['OA'], 2) ?>" readonly></td>
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
                <td class="tdPaddingLeft2">Total Non Current Assets</td>
                <td>&#8369;</td>
                <td><input type="text" class="bsInput" value="<?php echo number_format((float) $totalNonCurrent = $balanceSheet['LTI'] + $balanceSheet['PPE'] + $balanceSheet['LTR'] + $balanceSheet['IA'] + $balanceSheet['OA'], 2) ?>" readonly></td>
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
                <td>&#8369;</td>
                <td><input type="text" style="font-weight:bold;" class="bsInput" value="<?php echo number_format((float) $totalAsset = $totalCurrentAsset + $totalNonCurrent, 2) ?>" readonly style="padding-right: 5px;width:142px;"></td>
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
                <td class="parentchildbalance"><b>CURRENT LIABILITIES</b></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="tdPaddingLeft">Accounts Payable</td>
                <td>&#8369;</td>
                <td><input type="text" class="bsInput" value="<?php echo number_format((float) $balanceSheet['AP'], 2) ?>" readonly></td>
            </tr>
            <tr>
                <td class="tdPaddingLeft">Accrued Expenses</td>
                <td></td>
                <td><input type="text" class="bsInput" value="<?php echo number_format((float) $balanceSheet['AE'], 2) ?>" readonly></td>
            </tr>
            <tr>
                <td class="tdPaddingLeft">Income Tax Payable</td>
                <td></td>
                <td><input type="text" class="bsInput" value="<?php echo number_format((float) $balanceSheet['ITP'], 2) ?>" readonly></td>
            </tr>
            <tr>
                <td class="tdPaddingLeft">Other Current Liabilities</td>
                <td></td>
                <td><input type="text" class="bsInput" value="<?php echo number_format((float) $balanceSheet['OCL'], 2) ?>" readonly></td>
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
                <td class="tdPaddingLeft2">Total Current Liabilities</td>
                <td>&#8369;</td>
                <td><input type="text" class="bsInput" value="<?php echo number_format((float) $totalCurrentLiabilities = $balanceSheet['AP'] + $balanceSheet['AE'] + $balanceSheet['ITP'] + $balanceSheet['OCL'], 2) ?>" readonly></td>
            </tr>
            <tr>
                <td style="border-bottom:1px solid #000;"></td>
                <td style="border-bottom:1px solid #000;"></td>
                <td style="border-bottom:1px solid #000;"></td>
            </tr>
            <tr>
                <td class="parentchildbalance" style="padding-top:10px;"><b>NONCURRENT LIABILITIES</b></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="tdPaddingLeft">Long-Term Liabilities</td>
                <td>&#8369;</td>
                <td><input type="text" class="bsInput" value="<?php echo number_format((float) $balanceSheet['LTB'], 2) ?>" readonly></td>
            </tr>
            <tr>
                <td class="tdPaddingLeft">Deferred Credits</td>
                <td></td>
                <td><input type="text" class="bsInput" value="<?php echo number_format((float) $balanceSheet['DC'], 2) ?>" readonly></td>
            </tr>
            <tr>
                <td  class="tdPaddingLeft">Deferred Income</td>
                <td></td>
                <td><input type="text" class="bsInput" value="<?php echo number_format((float) $balanceSheet['di'], 2) ?>" readonly ></td>
            </tr>
            <tr>
                <td class="tdPaddingLeft">Other Liabilities</td>
                <td></td>
                <td><input type="text" class="bsInput" value="<?php echo number_format((float) $balanceSheet['OL'], 2) ?>" readonly></td>
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
                <td class="tdPaddingLeft2">Total Non-Current Liabilities</td>
                <td>&#8369;</td>
                <td><input type="text" class="bsInput" value="<?php echo number_format((float) $totalNonCurrentLiability = $balanceSheet['LTB'] + $balanceSheet['DC'] + $balanceSheet['OL'] + $balanceSheet['di'], 2) ?>" readonly></td>
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
                <td class="parentchildbalance"><b>TOTAL LIABILITIES</b></td>
                <td>&#8369;</td>
                <td><input type="text" class="bsInput" value="<?php echo number_format((float) $totalliability = $totalCurrentLiabilities + $totalNonCurrentLiability, 2) ?>" readonly></td>
            </tr>
            <tr>
                <td style="padding-top:30px;"></td>
                <td style="padding-top:30px;"></td>
                <td style="padding-top:30px;"></td>
            </tr>
            <tr>
                <td class="parentchildbalance"><b>CAPITAL</b></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            
            <tr>
                <td class="tdPaddingLeft">Capital</td>
                <td>&#8369;</td>
                <td><input type="text" class="bsInput" value="<?php echo number_format((float) $balanceSheet['capital'], 2) ?>" readonly ></td>
            </tr>
            <tr>
                <td class="tdPaddingLeft">Net Income / Loss</td>
                <td></td>
                <td><input type="text" class="bsInput" value="<?php echo number_format((float) $netIncomeb4IT, 2) ?>" readonly></td>
            </tr>
            <tr>
                <td class="tdPaddingLeft">Drawings</td>
                <td></td>
                <td><input type="text" class="bsInput" value="<?php echo number_format((float) $balanceSheet['Drawing'], 2) ?>" readonly></td>
            </tr>
            <tr>
                <td style="border-bottom:1px solid #000;"></td>
                <td style="border-bottom:1px solid #000;"></td>
                <td style="border-bottom:1px solid #000;"></td>
            </tr>
            <?php
            $totalcapital = $balanceSheet['capital'] + $netIncomeb4IT + $balanceSheet['Drawing'];
            ?>
            <tr class="boldstyle">
                <td class="parentchildbalance"><b>TOTAL CAPITAL</b></td>
                <td>&#8369;</td>
                <td><input type="text" class="bsInput" value="<?php echo number_format((float) $totalcapital, 2) ?>" readonly ></td>
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
            /* $capital1 = $balanceSheet2['capital'] + $netIncomeb4IT2  + $balanceSheet2['Drawing'];
              $totalcapital2 =  $balanceSheet2['capital'] +  $netIncomeb4IT2  +  $balanceSheet2['Drawing'];
              $totalcapital = $capital1; */
            ?>
            <tr class="boldstyle doubleborder">
                <td class="titleTableassets"><b>TOTAL LIABILITIES AND CAPITAL</b></td>
                <td>&#8369;</td>
                <td><input type="text" style="font-weight:bold;" class="bsInput" value="<?php echo number_format((float) ($totalliability + $totalcapital), 2) ?>" readonly></td>
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