
<?php
     $org = $this->org;
    $info = $this->info;

    $BS_current = $this->balanceSheet[0];
    // print_r($BS_current);
    $BS_before = $this->balanceSheet_month[0];


    $IS_current = $this->getIncomeStatement[0];
    $IS_current2 = $this->getIncomeStatement2[0];
    
    $IS_before = $this->getIncomeStatement_month[0];
    $IS_before2 = $this->getIncomeStatement_month2[0];

    $SItotal_before = $IS_before['SIVat'] + $IS_before['SIExempt'] + $IS_before['SIZeroRated'] + $IS_before['SIGovernment'];
    $SItotal_before2 = $IS_before2['SIVat'] + $IS_before2['SIExempt'] + $IS_before2['SIZeroRated'] + $IS_before2['SIGovernment'];
    
    $SGtotal_before = $IS_before['SGVat'] + $IS_before['SGExempt'] + $IS_before['SGZeroRated'] + $IS_before['SGGovernment'];
    $SGtotal_before2 = $IS_before2['SGVat'] + $IS_before2['SGExempt'] + $IS_before2['SGZeroRated'] + $IS_before2['SGGovernment'];
    
    $SDiscountTotal_before = $IS_before['SDiscount'] + $IS_before['SDiscountSP']  + $IS_before['ServiceDiscount'];
    $SDiscountTotal_before2 = $IS_before2['SDiscount'] + $IS_before2['SDiscountSP']  + $IS_before2['ServiceDiscount'];
    
    $DCtotal_before = ($IS_before['DCSWBTaxable'] + $IS_before['DCSWBNonTaxable'] + $IS_before['DCMSFacilities'] + $IS_before['DCDepreciation'] + 
                $IS_before['DCRental'] + $IS_before['DCOutsideServices'] + $IS_before['DCOthers']);
    $DCtotal_before2 = ($IS_before2['DCSWBTaxable'] + $IS_before2['DCSWBNonTaxable'] + $IS_before2['DCMSFacilities'] + $IS_before2['DCDepreciation'] + 
                $IS_before2['DCRental'] + $IS_before2['DCOutsideServices'] + $IS_before2['DCOthers']);
    
    $CStotal_before = $IS_before['CSVat'] + $IS_before['CSExempt'] + $IS_before['CSZeroRated'] + $IS_before['CSGovernment'];
    $CStotal_before2 = $IS_before2['CSVat'] + $IS_before2['CSExempt'] + $IS_before2['CSZeroRated'] + $IS_before2['CSGovernment'];
    
    $SRtotal_before = $IS_before['Sales_Return'];
    $SRtotal_before2 = $IS_before2['Sales_Return'];
    
    $SItotal_current = $IS_current['SIVat']  + $IS_current['SIExempt'] + $IS_current['SIZeroRated'] + $IS_current['SIGovernment'];
    $SItotal_current2 = $IS_current2['SIVat']  + $IS_current2['SIExempt'] + $IS_current2['SIZeroRated'] + $IS_current2['SIGovernment'];
    
    $SGtotal_current = $IS_current['SGVat'] +  $IS_current['SGExempt'] + $IS_current['SGZeroRated'] + $IS_current['SGGovernment'];
    $SGtotal_current2 = $IS_current2['SGVat'] +  $IS_current2['SGExempt'] + $IS_current2['SGZeroRated'] + $IS_current2['SGGovernment'];
    
    $SDiscountTotal_current = $IS_current['SDiscount'] + $IS_current['SDiscountSP'] + $IS_current['ServiceDiscount'];
    $SDiscountTotal_current2 = $IS_current2['SDiscount'] + $IS_current2['SDiscountSP'] + $IS_current2['ServiceDiscount'];
    
    $DCtotal_current = ($IS_current['DCSWBTaxable'] + $IS_current['DCSWBNonTaxable'] + $IS_current['DCMSFacilities'] + $IS_current['DCDepreciation'] + 
                $IS_current['DCRental'] + $IS_current['DCOutsideServices'] + $IS_current['DCOthers']);
    $DCtotal_current2 = ($IS_current2['DCSWBTaxable'] + $IS_current2['DCSWBNonTaxable'] + $IS_current2['DCMSFacilities'] + $IS_current2['DCDepreciation'] + 
                $IS_current2['DCRental'] + $IS_current2['DCOutsideServices'] + $IS_current2['DCOthers']);
    
    $CStotal_current = $IS_current['CSVat'] + $IS_current['CSExempt'] + $IS_current['CSZeroRated'] + $IS_current['CSGovernment'];
    $CStotal_current2 = $IS_current2['CSVat'] + $IS_current2['CSExempt'] + $IS_current2['CSZeroRated'] + $IS_current2['CSGovernment'];
    
    $SRtotal_current = $IS_current['Sales_Return'];
    $SRtotal_current2 = $IS_current2['Sales_Return'];
   
    $otherIncome_before = $IS_before['Other_Income'];
    $otherIncome_before2 = $IS_before2['Other_Income'];
    
    $otherIncome_current = $IS_current['Other_Income'];
    $otherIncome_current2 = $IS_current2['Other_Income'];
    
//    $operatingProfit_before = $netRevenue_before + $otherIncome_before;
//    $operatingProfit_current = $netRevenue_current + $otherIncome_current;
//    $operatingProfit_year = $netRevenue_year + $otherIncome_year;
    
    $operatingProfit_before = $SItotal_before + $SGtotal_before - $SDiscountTotal_before - $DCtotal_before - $CStotal_before - $SRtotal_before;
    $operatingProfit_before2 = $SItotal_before2 + $SGtotal_before2 - $SDiscountTotal_before2 - $DCtotal_before2 - $CStotal_before2 - $SRtotal_before2;
    
    $operatingProfit_current = $SItotal_current + $SGtotal_current - $SDiscountTotal_current - $DCtotal_current - $CStotal_current - $SRtotal_current;
    $operatingProfit_current2 = $SItotal_current2 + $SGtotal_current2 - $SDiscountTotal_current2 - $DCtotal_current2 - $CStotal_current2 - $SRtotal_current2;
    
    $netRevenue_before = $operatingProfit_before + $otherIncome_before;
    $netRevenue_before2 = $operatingProfit_before2 + $otherIncome_before2;
    
    $netRevenue_current = $operatingProfit_current + $otherIncome_current;
    $netRevenue_current2 = $operatingProfit_current2 + $otherIncome_current2;
    
    $netIncomeb4IT_before = $netRevenue_before - $IS_before['Expenses'];
    $netIncomeb4IT_before2 = $netRevenue_before2 - $IS_before2['Expenses'];
    
    $netIncomeb4IT_current = $netRevenue_current - $IS_current['Expenses'];
    $netIncomeb4IT_current2 = $netRevenue_current2 - $IS_current2['Expenses'];
    
    $capital_before = $BS_before['capital'] + $netIncomeb4IT_before2;
//    $capital_current = $capital_before + $netIncomeb4IT_before;
    $capital_current = $BS_current['capital'] + $netIncomeb4IT_current2;
   

    $totalcapital_before = $capital_before + $netIncomeb4IT_before;
    $totalcapital_current = $capital_current + $netIncomeb4IT_current;
?>
<style>

</style>
<div class="reportHolderOR">
    <div class="fromReg">


<?php
if ($_POST['is_bs'] == 'bs') {
    ?>
            <div class="balanceSheet">
                <div class="nameText">
    <?= $org->orgName ?>
                </div>

                <div class="ORCompanyInfo">
                    Monthly Comparative Report
                </div>
                <br/>
                <div class="ORCompanyInfo">
                    STATEMENT OF FINANCIAL POSITION
                </div>
                <div class="ORCompanyInfo">
                    As of 
    <?php echo (isset($_POST['startdate'])) ? date('Y', strtotime($_POST['startdate'])) : date('Y') ?>
                </div>
                <div class="ORCompanyInfo hidden">
                    For the year ended
    <?php echo (isset($_POST['startdate'])) ? date('Y', strtotime($_POST['startdate'])) : date('Y') ?>
                </div>
                <div class="balanceTitle">
                    (Amounts in Philippine Pesos)
                </div>

                <table class="balanceTable">
                    <tr class="titleTableassets">
                        <th width="31%"></th>
                        <th width="2%"></th>
                        <th width="22%" class="asofYear">As of <?php echo (isset($_POST['year'])) ? $_POST['year'] - 1 : date('y') ?></th>
                        <th width="22%" class="asofYear">As of <?php echo (isset($_POST['year'])) ? $_POST['year'] : date('y') ?></th>
                    </tr>
                    <tr>
                        <td class="titleTableassets" style="padding-left: 200;"><b>ASSETS</b></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="currentassetstr">
                        <td class="parentchildbalance"><b>CURRENT ASSETS</b></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="tdPaddingLeft">Cash and Cash Equivalents </td>
                        <td>&#8369;</td>
                        <td><input type="text" class="bsInput isNumeric" value="<?php echo number_format((float) $BS_before['CCE'], 2) ?>" readonly></td>
                        <td><input type="text" class="bsInput isNumeric" value="<?php echo number_format((float) $BS_current['CCE'], 2) ?>" readonly></td>
                    </tr>
                    <tr>
                        <td class="tdPaddingLeft">Accounts Receivables</td>
                        <td></td>
                        <td><input type="text" class="bsInput isNumeric" value="<?php echo number_format((float) $BS_before['AR'], 2) ?>" readonly></td>
                        <td><input type="text" class="bsInput isNumeric" value="<?php echo number_format((float) $BS_current['AR'], 2) ?>" readonly></td>
                    </tr>
                    <tr>
                        <td class="tdPaddingLeft">Inventory</td>
                        <td></td>
                        <td><input type="text" class="bsInput isNumeric" value="<?php echo number_format((float) $BS_before['I'] + $IS_before['PDiscount'], 2) ?>" readonly></td>
                        <td><input type="text" class="bsInput isNumeric" value="<?php echo number_format((float) $BS_current['I'] + $IS_current['PDiscount'], 2) ?>" readonly></td>
                    </tr>
                    <tr>
                        <td class="tdPaddingLeft">Other Current Assets</td>
                        <td></td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $BS_before['OCA'], 2) ?>" readonly></td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $BS_current['OCA'], 2) ?>" readonly></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;"></td>
                        <td style="padding-top:10px;"></td>
                        <td style="padding-top:10px;"></td>
                        <td style="padding-top:10px;"></td>
                    </tr>
                    <tr>
                        <td style="border-bottom:1px solid #000;"></td>
                        <td style="border-bottom:1px solid #000;"></td>
                        <td style="border-bottom:1px solid #000;"></td>
                        <td style="border-bottom:1px solid #000;"></td>
                    </tr>
                    <tr class="tdborderline">
                        <td class="tdPaddingLeft2">Total Current Assets</td>
                        <td>&#8369;</td>
                        <td><input type="text"  class="bsInput" value="<?php echo number_format((float) $totalCurrentAsset_before = $BS_before['CCE'] + $BS_before['AR'] +  $BS_before['I'] + $BS_before['OCA'] + $IS_before['PDiscount'], 2) ?>" readonly></td>
                        <td><input type="text"  class="bsInput" value="<?php echo number_format((float) $totalCurrentAsset_current = $BS_current['CCE'] + $BS_current['AR'] +  $BS_current['I'] + $BS_current['OCA'] + $IS_current['PDiscount'], 2) ?>" readonly></td>
                    </tr>
                    <tr>
                        <td style="border-bottom:1px solid #000;"></td>
                        <td style="border-bottom:1px solid #000;"></td>
                        <td style="border-bottom:1px solid #000;"></td>
                        <td style="border-bottom:1px solid #000;"></td>
                    </tr>
                    <tr>
                        <td class="acctTitle parentchildbalance" style="padding-top:10px;"><b>NONCURRENT ASSETS</b></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="tdPaddingLeft">Long-Term Investments</td>
                        <td>&#8369;</td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $BS_before['LTI'], 2) ?>" readonly></td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $BS_current['LTI'], 2) ?>" readonly></td>
                    </tr>
                    <tr>
                        <td class="tdPaddingLeft">Property and Equipment, net</td>
                        <td></td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $BS_before['PPE'], 2) ?>" readonly></td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $BS_current['PPE'], 2) ?>" readonly></td>
                    </tr>
                    <tr>
                        <td class="tdPaddingLeft">Long-Term Receivables</td>
                        <td></td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $BS_before['LTR'], 2) ?>" readonly></td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $BS_current['LTR'], 2) ?>" readonly></td>
                    </tr>
                    <tr>
                        <td class="tdPaddingLeft">Intangible Assets</td>
                        <td></td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $BS_before['IA'], 2) ?>" readonly></td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $BS_current['IA'], 2) ?>" readonly></td>
                    </tr>
                    <tr>
                        <td class="tdPaddingLeft">Other Assets</td>
                        <td></td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $BS_before['OA'], 2) ?>" readonly></td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $BS_current['OA'], 2) ?>" readonly></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;"></td>
                        <td style="padding-top:10px;"></td>
                        <td style="padding-top:10px;"></td>
                        <td style="padding-top:10px;"></td>
                    </tr>
                    <tr>
                        <td style="border-bottom:1px solid #000;"></td>
                        <td style="border-bottom:1px solid #000;"></td>
                        <td style="border-bottom:1px solid #000;"></td>
                        <td style="border-bottom:1px solid #000;"></td>
                    </tr>
                    <tr class="tdborderline">
                        <td class="tdPaddingLeft2">Total Non Current Assets</td>
                        <td>&#8369;</td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $totalNonCurrent_before = $BS_before['LTI'] + $BS_before['PPE'] + $BS_before['LTR'] + $BS_before['IA'] + $BS_before['OA'], 2) ?>" readonly></td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $totalNonCurrent_current = $BS_current['LTI'] + $BS_current['PPE'] + $BS_current['LTR'] + $BS_current['IA'] + $BS_current['OA'], 2) ?>" readonly></td>
                    </tr>
                    <tr>
                        <td style="border-bottom:1px solid #000;"></td>
                        <td style="border-bottom:1px solid #000;"></td>
                        <td style="border-bottom:1px solid #000;"></td>
                        <td style="border-bottom:1px solid #000;"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:15px;"></td>
                        <td style="padding-top:15px;"></td>
                        <td style="padding-top:15px;"></td>
                        <td style="padding-top:15px;"></td>
                    </tr>
                    <tr class="doubleborder boldstyle">
                        <td class="acctTitle parentchildbalance"><b>TOTAL ASSETS</b></td>
                        <td>&#8369;</td>
                        <td><input type="text" style="font-weight:bold;" class="bsInput" style="padding-right: 5px;width:142px;" value="<?php echo number_format((float) $totalAsset_before = $totalCurrentAsset_before + $totalNonCurrent_before, 2) ?>" readonly></td>
                        <td><input type="text" style="font-weight:bold;" class="bsInput" style="padding-right: 5px;width:142px;" value="<?php echo number_format((float) $totalAsset_current = $totalCurrentAsset_current + $totalNonCurrent_current, 2) ?>" readonly></td>
                    </tr>
                    <tr>
                        <td style="border-bottom-style:double;"></td>
                        <td style="border-bottom-style:double;"></td>
                        <td style="border-bottom-style:double;"></td>
                        <td style="border-bottom-style:double;"></td>
                    </tr>
                    <tr>
                        <td class="titleTableassets" style="padding-left:102px;padding-top:30px;"><b>LIABILITIES AND CAPITAL</b></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="parentchildbalance"><b>CURRENT LIABILITIES</b></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="tdPaddingLeft">Accounts Payable</td>
                        <td>&#8369;</td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $BS_before['AP'], 2) ?>" readonly></td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $BS_current['AP'], 2) ?>" readonly></td>
                    </tr>
                    <tr>
                        <td class="tdPaddingLeft">Accrued Expenses</td>
                        <td></td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $BS_before['AE'], 2) ?>" readonly></td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $BS_current['AE'], 2) ?>" readonly></td>
                    </tr>
                    <tr>
                        <td class="tdPaddingLeft">Income Tax Payable</td>
                        <td></td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $BS_before['ITP'], 2) ?>" readonly></td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $BS_current['ITP'], 2) ?>" readonly></td>
                    </tr>
                    <tr>
                        <td class="tdPaddingLeft">Other Current Liabilities</td>
                        <td></td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $BS_before['OCL'], 2) ?>" readonly></td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $BS_current['OCL'], 2) ?>" readonly></td>
                    </tr>                    
                    <tr>
                        <td style="padding-top:10px;"></td>
                        <td style="padding-top:10px;"></td>
                        <td style="padding-top:10px;"></td>
                        <td style="padding-top:10px;"></td>
                    </tr>
                    <tr>
                        <td style="border-bottom:1px solid #000;"></td>
                        <td style="border-bottom:1px solid #000;"></td>
                        <td style="border-bottom:1px solid #000;"></td>
                        <td style="border-bottom:1px solid #000;"></td>
                    </tr>
                    <tr class="tdborderline">
                        <td class="tdPaddingLeft2">Total Current Liabilities</td>
                        <td>&#8369;</td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $totalCurrentLiabilities_before = $BS_before['AP'] + $BS_before['AE'] + $BS_before['ITP'] + $BS_before['OCL'], 2) ?>" readonly></td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $totalCurrentLiabilities_current = $BS_current['AP'] + $BS_current['AE'] + $BS_current['ITP'] + $BS_current['OCL'], 2) ?>" readonly></td>
                    </tr>
                    <tr>
                        <td style="border-bottom:1px solid #000;"></td>
                        <td style="border-bottom:1px solid #000;"></td>
                        <td style="border-bottom:1px solid #000;"></td>
                        <td style="border-bottom:1px solid #000;"></td>
                    </tr>
                    <tr>
                        <td class="parentchildbalance" style="padding-top:10px;"><b>NONCURRENT LIABILITIES</b></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="tdPaddingLeft">Long-Term Liabilities</td>
                        <td>&#8369;</td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $BS_before['LTB'], 2) ?>" readonly></td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $BS_current['LTB'], 2) ?>" readonly></td>
                    </tr>
                    <tr>
                        <td class="tdPaddingLeft">Deferred Credits</td>
                        <td></td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $BS_before['DC'], 2) ?>" readonly></td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $BS_current['DC'], 2) ?>" readonly></td>
                    </tr>
                    <tr>
                        <td class="tdPaddingLeft">Deferred Income</td>
                        <td></td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $BS_before['di'], 2) ?>" readonly ></td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $BS_current['di'], 2) ?>" readonly ></td>
                    </tr>
                    <tr>
                        <td class="tdPaddingLeft">Other Liabilities</td>
                        <td></td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $BS_before['OL'], 2) ?>" readonly></td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $BS_current['OL'], 2) ?>" readonly></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;"></td>
                        <td style="padding-top:10px;"></td>
                        <td style="padding-top:10px;"></td>
                        <td style="padding-top:10px;"></td>
                    </tr>
                    <tr>
                        <td style="border-bottom:1px solid #000;"></td>
                        <td style="border-bottom:1px solid #000;"></td>
                        <td style="border-bottom:1px solid #000;"></td>
                        <td style="border-bottom:1px solid #000;"></td>
                    </tr>
                    <tr class="tdborderline">
                        <td class="tdPaddingLeft2">Total Non-Current Liabilities</td>
                        <td>&#8369;</td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $totalNonCurrentLiability_before = $BS_before['LTB'] + $BS_before['DC'] + $BS_before['OL'] + $BS_before['di'], 2) ?>" readonly></td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $totalNonCurrentLiability_current = $BS_current['LTB'] + $BS_current['DC'] + $BS_current['OL'] + $BS_current['di'], 2) ?>" readonly></td>
                    </tr>
                    <tr>
                        <td style="border-bottom:1px solid #000;"></td>
                        <td style="border-bottom:1px solid #000;"></td>
                        <td style="border-bottom:1px solid #000;"></td>
                        <td style="border-bottom:1px solid #000;"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:15px;"></td>
                        <td style="padding-top:15px;"></td>
                        <td style="padding-top:15px;"></td>
                        <td style="padding-top:15px;"></td>
                    </tr>
                    <tr class="boldstyle">
                        <td class="parentchildbalance"><b>TOTAL LIABILITIES</b></td>
                        <td>&#8369;</td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $totalliability_before = $totalCurrentLiabilities_before + $totalNonCurrentLiability_before, 2) ?>" readonly></td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $totalliability_current = $totalCurrentLiabilities_current + $totalNonCurrentLiability_current, 2) ?>" readonly></td>
                    </tr>
                    <tr>
                        <td style="padding-top:15px;"></td>
                        <td style="padding-top:15px;"></td>
                        <td style="padding-top:15px;"></td>
                        <td style="padding-top:15px;"></td>
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
                        <td><input type="text" class="bsInput" value="<?= Controller::getFloat($capital_before) ?>" readonly></td>
                        <td><input type="text" class="bsInput" value="<?= Controller::getFloat($capital_current) ?>" readonly></td>
                    </tr>
                    <tr>
                        <td class="tdPaddingLeft">Net Income / Loss</td>
                        <td></td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $netIncomeb4IT_before /*- $IS_before['SIOutputVat']*/, 2) ?>" readonly></td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $netIncomeb4IT_current /* - $IS_current['SIOutputVat'] */, 2) ?>" readonly></td>
                    </tr>
                    <tr>
                        <td class="tdPaddingLeft">Drawings</td>
                        <td></td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $BS_before['Drawing'], 2) ?>" readonly></td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $BS_current['Drawing'], 2) ?>" readonly></td>
                    </tr>
                    <tr>
                        <td style="border-bottom:1px solid #000;"></td>
                        <td style="border-bottom:1px solid #000;"></td>
                        <td style="border-bottom:1px solid #000;"></td>
                        <td style="border-bottom:1px solid #000;"></td>
                    </tr>
                    
    <?php
    $totalcapital_before = $capital_before + $netIncomeb4IT_before + $BS_before['Drawing'] /*-  $IS_before['SIOutputVat']*/;
    $totalcapital_current = $capital_current + $netIncomeb4IT_current + $BS_current['Drawing'] /*-  $IS_current['SIOutputVat']*/;
    ?>
                    
                    <tr class="boldstyle">
                        <td class="parentchildbalance"><b>TOTAL CAPITAL</b></td>
                        <td>&#8369;</td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $totalcapital_before, 2) ?>" readonly></td>
                        <td><input type="text" class="bsInput" value="<?php echo number_format((float) $totalcapital_current, 2) ?>" readonly></td>
                    </tr>
                    <tr>
                        <td style="border-bottom:1px solid #000;"></td>
                        <td style="border-bottom:1px solid #000;"></td>
                        <td style="border-bottom:1px solid #000;"></td>
                        <td style="border-bottom:1px solid #000;"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:15px;"></td>
                        <td style="padding-top:15px;"></td>
                        <td style="padding-top:15px;"></td>
                        <td style="padding-top:15px;"></td>
                    </tr>
                    <tr class="boldstyle doubleborder">
                        <td class="titleTableassets"><b>TOTAL LIABILITIES AND CAPITAL</b></td>
                        <td>&#8369;</td>
                        <td><input type="text" style="font-weight:bold;" class="bsInput" value="<?php echo number_format((float) ($totalliability_before + $totalcapital_before), 2) ?>" readonly></td>
                        <td><input type="text" style="font-weight:bold;" class="bsInput" value="<?php echo number_format((float) ($totalliability_current + $totalcapital_current), 2) ?>" readonly></td>
                    </tr>
                    <tr>
                        <td style="border-bottom-style:double;"></td>
                        <td style="border-bottom-style:double;"></td>
                        <td style="border-bottom-style:double;"></td>
                        <td style="border-bottom-style:double;"></td>
                    </tr>
                </table>
            </div>
    <?php
} elseif ($_POST['is_bs'] == 'is') {
    ?>
            <div style="margin-top:20px;" class="incomeStatement">
                <div class="nameText">
            <?= $org->orgName ?>
                </div>

                <div class="ORCompanyInfo">
                    Monthly Comparative Report
                </div>
                <br/>
                <div class="ORCompanyInfo">
                    INCOME STATEMENT
                </div>
                <div class="ORCompanyInfo">
                    As of 
    <?php echo (isset($_POST['startdate'])) ? date('F,Y', strtotime($_POST['startdate'])) : date('F Y') ?>
                </div>
                <div class="ORCompanyInfo hidden">
                    For the month ended
    <?php echo (isset($_POST['startdate'])) ? date('F,Y', strtotime($_POST['startdate'])) : date('F Y') ?>
                </div>
                <div class="balanceTitle">
                    (Amounts in Philippine Pesos)
                </div>

                <table class="tblIncomeStatement ">
                                        <tr>
                                            <th width="31%"></th>
                                            <th width="2%"></th>
                                            <th width="22%" style="text-align:center;">As of <?= $_POST['year'] - 1 ?> </th>
                                            <th width="22%"style="text-align:center;">As of <?= $_POST['year'] ?></th>

                                        </tr>
                                        <tr>
                                            <td><b>REVENUES</b></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
					<tr>
						<td style="">
							Professional Service Income
						</td>
						<td class="isInputRight"></td>
						<td class="isInputRight"></td>
						<td class="isInputRight"></td>
						
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Professional Service Revenue
						</td>
						<td>&#8369;</td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_before['SIVat'])?></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_current['SIVat'])?></td>
						
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Professional Service Revenue - Exempt
						</td>
						<td></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_before['SIExempt'])?></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_current['SIExempt'])?></td>
						
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Professional Service Revenue - Zero Rated		
						</td>
						<td></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_before['SIZeroRated'])?></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_current['SIZeroRated'])?></td>
						
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Professional Service Revenue - Government		
						</td>
						<td></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_before['SIGovernment'])?></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_current['SIGovernment'])?></td>
						
					</tr>
					<tr>
						<td style="padding-left:25px;"></td>
						<td></td>
                                                <td class="isInputRight" style="border-top:solid 1px #000;"><?= Controller::getFloat($SItotal_before)?></td>
                                                <td class="isInputRight" style="border-top:solid 1px #000;"><?= Controller::getFloat($SItotal_current)?></td>
						
					</tr>
					
					<tr>
						<td style="">
							Sales
						</td>
						<td></td>
						<td class="isInputRight"></td>
						<td class="isInputRight"></td>
						
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Sales - Goods
						</td>
						<td>&#8369;</td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_before['SGVat'])?></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_current['SGVat'])?></td>
						
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Sales - Exempt
						</td>
						<td></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_before['SGExempt'])?></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_current['SGExempt'])?></td>
						
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Sales - Zero Rated
						</td>
						<td></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_before['SGZeroRated'])?></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_current['SGZeroRated'])?></td>
						
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Sales - Government
						</td>
						<td></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_before['SGGovernment'])?></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_current['SGGovernment'])?></td>
						
					</tr>
					<tr>
						<td style="padding-left:25px;"></td>
						<td></td>
                                                <td class="isInputRight" style="border-top:solid 1px #000;"><?= Controller::getFloat($SGtotal_before)?></td>
                                                <td class="isInputRight" style="border-top:solid 1px #000;"><?= Controller::getFloat($SGtotal_current)?></td>
						
					</tr>
					<tr>
						<td style="">
							Sales Return
						</td>
						<td></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_before['Sales_Return'])?></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_current['Sales_Return'])?></td>
						
					</tr>
<!--					<tr>
						<td style="padding-left:25px;">
							Discount
						</td>
						<td>&#8369;</td>
                        <td class="isInputRight"><?= Controller::getFloat($IS_before['SDiscountSP'])?></td>
                        <td class="isInputRight"><?= Controller::getFloat($IS_current['SDiscountSP'])?></td>
						
					</tr>-->
                                        <tr>
						<td style="padding-left:25px;">
							Sales Discount
						</td>
						<td>&#8369;</td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_before['SDiscount'] + $IS_before['SDiscountSP'])?></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_current['SDiscount'] + $IS_current['SDiscountSP'])?></td>
						
					</tr>
                                        <tr>
						<td style="padding-left:25px;">
							Service Discount
						</td>
						<td>&#8369;</td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_before['ServiceDiscount'])?></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_current['ServiceDiscount'])?></td>
						
					</tr>
					<tr>
						<td style="padding-left:25px;"></td>
						<td style="font-weight:bold">&#8369;</td>
                                                <td class="isInputRight" style="border-top:solid 1px #000;border-bottom:solid 1px #000;font-weight:bold;"><?= Controller::getFloat($SDiscountTotal_before)?></td>
                                                <td class="isInputRight" style="border-top:solid 1px #000;border-bottom:solid 1px #000;font-weight:bold;"><?= Controller::getFloat($SDiscountTotal_current)?></td>
						
					</tr>
					
					<tr>
						<td>
							<b>COST OF SERVICES</b>
						</td>
						<td></td>
						<td class="isInputRight"></td>
						<td class="isInputRight"></td>
						
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Direct Charges - Salaries, Wages and Benefits (Taxable)
						</td>
						<td>&#8369;</td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_before['DCSWBTaxable'])?></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_current['DCSWBTaxable'])?></td>
						
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Direct Charges - Salaries, Wages and Benefits (Non-Taxable)
						</td>
						<td></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_before['DCSWBNonTaxable'])?></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_current['DCSWBNonTaxable'])?></td>
						
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Direct Charges - Materials, Supplies and Facilities
						</td>
						<td></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_before['DCMSFacilities'])?></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_current['DCMSFacilities'])?></td>
						
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Direct Charges - Depreciation
						</td>
						<td></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_before['DCDepreciation'])?></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_current['DCDepreciation'])?></td>
						
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Direct Charges - Rental
						</td>
						<td></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_before['DCRental'])?></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_current['DCRental'])?></td>
						
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Direct Charges - Outside Services
						</td>
						<td></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_before['DCOutsideServices'])?></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_current['DCOutsideServices'])?></td>
						
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Direct Charges - Others
						</td>
						<td></td>
                                                <td class="isInputRight" style="border-bottom:solid 1px #000;"><?= Controller::getFloat($IS_before['DCOthers'])?></td>
                                                <td class="isInputRight" style="border-bottom:solid 1px #000;"><?= Controller::getFloat($IS_current['DCOthers'])?></td>
						
					</tr>
					
					<tr>
						<td style="padding-left:25px;"></td>
						<td style="font-weight:bold"></td>
                                                <td class="isInputRight" style="border-top:solid 1px #000;"><?= Controller::getFloat($DCtotal_before)?></td>
                                                <td class="isInputRight" style="border-top:solid 1px #000;"><?= Controller::getFloat($DCtotal_current)?></td>
						
					</tr>
					
					<tr>
						<td>
							<b>COST OF SALES</b>
						</td>
						<td></td>
						<td class="isInputRight"></td>
						<td class="isInputRight"></td>
						
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Cost of Sales - Good
						</td>
						<td>&#8369;</td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_before['CSVat'])?></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_current['CSVat'])?></td>
						
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Cost of Sales - Exempt
						</td>
						<td></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_before['CSExempt'])?></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_current['CSExempt'])?></td>
						
					</tr>
					<tr>
						<td style="padding-left:25px;">
							Cost of Sales - Zero Rated
						</td>
						<td></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_before['CSZeroRated'])?></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_current['CSZeroRated'])?></td>
						
					</tr>
					<tr>
						<td style="padding-left:25px;">
						Cost of Sales - Government
						</td>
						<td></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_before['CSGovernment'])?></td>
                                                <td class="isInputRight"><?= Controller::getFloat($IS_current['CSGovernment'])?></td>
						
					</tr>
					
					<tr>
						<td style="padding-left:25px;"></td>
						<td style="font-weight:bold"></td>
                                                <td class="isInputRight" style=""><?= Controller::getFloat($CStotal_before)?></td>
                                                <td class="isInputRight" style=""><?= Controller::getFloat($CStotal_current)?></td>
						
					</tr>
					<tr>
						<td style="padding-left:25px;"></td>
						<td style="font-weight:bold">&#8369;</td>
						<td class="isInputRight" style="border-top:solid 1px #000;border-bottom:solid 1px #000;font-weight:bold;">0.00</td>
						<td class="isInputRight" style="border-top:solid 1px #000;border-bottom:solid 1px #000;font-weight:bold;">0.00</td>
						
					</tr>
					<tr>
						<td></td>
						<td style="font-weight:bold"></td>
						<td class="isInputRight" style=""></td>
						<td class="isInputRight" style=""></td>
						
					</tr>
					
                                        <tr>
						<td>
							<b>OPERATING EXPENSES</b>
						</td>
						<td></td>
						<td></td>
						<td></td>
						
					</tr>
					<tr>
						<td style="padding-left:25px;">
							General and Administrative Expenses
						</td>
						<td></td>
						<td class="isInputRight" style="border-bottom:1px solid #000;">
							<?= Controller::getFloat($IS_before['Expenses']) ?>
						</td>
						<td class="isInputRight" style="border-bottom:1px solid #000;">
							<?= Controller::getFloat($IS_current['Expenses']) ?>
						</td>
						
					</tr>
                                        
                                        <tr>
						<td style="padding-left:25px;">
							Operating Profit
						</td>
						<td></td>
						<td class="isInputRight" style="border-bottom:1px solid #000;">
							<?= Controller::getFloat($operatingProfit_before) ?>
						</td>
						<td class="isInputRight" style="border-bottom:1px solid #000;">
							<?= Controller::getFloat($operatingProfit_current) ?>
						</td>
						
					</tr>
					
					<?php
						if($IS_before['Other_Income'] != 0 || $IS_current['Other_Income'] != 0){
					?>
                                                    <tr>
                                                            <td>
                                                                    <b>Other Income</b>
                                                            </td>
                                                            <td></td>
                                                            <td class="isInputRight">
                                                                    <?= Controller::getFloat($IS_before['Other_Income']) ?>
                                                            </td>
                                                            <td class="isInputRight">
                                                                <?= Controller::getFloat($IS_current['Other_Income']) ?>
                                                            </td>

                                                    </tr>
					<?php
						}
					?>
					<tr>
						<td style="padding-top:30px;"></td>
						<td style="padding-top:30px;"></td>
						<td style="padding-top:30px;"></td>
						<td style="padding-top:30px;"></td>
						
					</tr>
					
                                        <tr>
						<td>
							<b>NET REVENUE</b>
						</td>
						<td style="font-weight:bold">&#8369;</td>
                                                <td class="isInputRight" style="border-bottom:solid 1px #000;font-weight:bold;"><?= Controller::getFloat($netRevenue_before)?></td>
                                                <td class="isInputRight" style="border-bottom:solid 1px #000;font-weight:bold;"><?= Controller::getFloat($netRevenue_current)?></td>
						
					</tr>
                                        
					<tr>
                                                <td> 
                                                    <b>NET INCOME (LOSS)</b>
                                                </td>
                                                <td style="<?= ($netIncomeb4IT_before < 0 || $netIncomeb4IT_current < 0)  ? 'color:red' : ''?>">&#8369;</td>

                                                <td class="isInputRight netclass" style="border-bottom-style:double; <?= $netIncomeb4IT_before < 0 ? 'color:red' : ''?> ">
                                                    <b><?= Controller::getFloat($netIncomeb4IT_before) ?></b>
                                                </td>
                                                <td class="isInputRight netclass" style="border-bottom-style:double; <?= $netIncomeb4IT_current < 0 ? 'color:red' : ''?> ">
                                                    <b><?= Controller::getFloat($netIncomeb4IT_current) ?></b>
                                                </td>
                        
                                        </tr>
					<?php
					}	
					?>
				</table>
					
					
					
					
					
					
					
					
					
					
					
					
					
                    <!--<tr>
                        <td style="padding-left:25px;">
                            Professional Service Income
                        </td>
                        <td>&#8369;</td>
                        <td class="isInputRight">
    <?= Controller::getFloat($IS_before['PSI'] - $IS_before['Sales_Disc']) ?>
                        </td>
                        <td class="isInputRight">
                            <?= Controller::getFloat($IS_current['PSI'] - $IS_current['Sales_Disc']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>COST OF SERVICES</b>
                        </td>
                        <td>&#8369;</td>
                        <td class="isInputRight borderBottom">
    <?= Controller::getFloat($IS_before['Cost_of_Service']) ?>
                        </td>
                        <td class="isInputRight borderBottom">
                            <?= Controller::getFloat($IS_current['Cost_of_Service']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <b>NET REVENUE</b>
                        </td>
                        <td>&#8369;</td>
                        <td class="isInputRight">
                            <b><?= Controller::getFloat($netRevenue_before) ?></b>
                        </td>
                        <td class="isInputRight">
                            <b><?= Controller::getFloat($netRevenue_current) ?></b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Other Income</b>
                        </td>
                        <td></td>
                        <td class="isInputRight">
    <?= Controller::getFloat($IS_before['Other_Income']) ?>
                        </td>
                        <td class="isInputRight">
                            <?= Controller::getFloat($IS_current['Other_Income']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top:30px;"></td>
                        <td style="padding-top:30px;"></td>
                        <td style="padding-top:30px;" class="borderBottom"></td>
                        <td style="padding-top:30px;" class="borderBottom"></td>
                    </tr>
                    <tr>
                        <td>
                            <b>OPERATING PROFIT</b>
                        </td>
                        <td>&#8369;</td>
                        <td class="isInputRight" style="borders-top:1px solid #000;">
                            <b><?= Controller::getFloat($operatingProfit_before) ?></b>
                        </td>
                        <td class="isInputRight" style="borders-top:1px solid #000;">
                            <b><?= Controller::getFloat($operatingProfit_current) ?></b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>OPERATING EXPENSES</b>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="padding-left:25px;">
                            General and Administrative Expenses
                        </td>
                        <td></td>
                        <td class="isInputRight borderBottom">
    <?= Controller::getFloat($IS_before['Expenses']) ?>
                        </td>
                        <td class="isInputRight borderBottom">
                            <?= Controller::getFloat($IS_current['Expenses']) ?>
                        </td>
                    </tr>

                    <tr>
                        <td> 
                            <b>NET INCOME (LOSS)</b>
                        </td>
                        <td>&#8369;</td>

                        <td class="isInputRight netclass" style="border-bottom-style:double; <?= $netIncomeb4IT_before < 0 ? 'color:red' : '' ?>">
                            <b><?= Controller::getFloat($netIncomeb4IT_before) ?></b>
                        </td>
                        <td class="isInputRight netclass" style="border-bottom-style:double; <?= $netIncomeb4IT_current < 0 ? 'color:red' : '' ?> ">
                            <b><?= Controller::getFloat($netIncomeb4IT_current) ?></b>
                        </td>
                    </tr>
    <?php
//}
?>
            </table>-->
        </div>

    </div>
</div>
