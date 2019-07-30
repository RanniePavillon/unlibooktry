@include('layouts.header')
<style>
    .loadingHolder {
        text-align: center;
        padding-top: 71px;

    }
    .reportContainer{
        background-color: white;
        padding-top: 4px;
        padding-bottom:10px;
        box-shadow: 10px 4px 7px -9px rgba(50, 50, 50, 0.75), -6px 5px 11px -7px rgba(50, 50, 50, 0.75);
        margin-top:80px;
    }
    .reportForm{
        width: 984px;
        margin-left: 7px!important;
        margin-top: 15px;
        border: 1px solid #c8c8c8;
        border-radius:18px;
        height:auto!important;
    }
    .listForm{
        width: 220px;
        margin-left:25px;
        padding-top:12px;
        border-right: 2px solid rgba(128, 128, 128, 0.42);
        float:left;
        padding-bottom:16px;
		height:auto;
    }
    .fsReport{
        font-size:23.4px;
        font-family:agency fb2;
        font-weight: bold;
        /* letter-spacing: 1; */
        color:#C51400;
    }
    .ul.b {
        list-style-type: square;
        font-size: 12px;
        padding-left: 1px;
        margin-top: -5px;
        color: black;
    }

    li.{
        padding-top: 10px;
        list-style-type: square;
        color: black;
    }
    .listType{
        list-style-type: square;
        font-size: 12px;
        font-family:verdana;
        color: black;
        margin: 0 10px;
        padding: 5px 10px;
    }
    .listType a:hover{
        color:#981007;
    }
    .link-selected{
        color:#981007;
    }
    .listType a{
        font-size:19px;
        font-family:agency fb2;
        font-weight: bold;
        color:#D51911;
    }

    .listType2{
        list-style-type: square;
        font-size: 12px;
        font-family: verdana;
        padding-top: 5px;
    }

    .b a{
        font-weight: BOLD;
        font-size: 17px;
        font-family: Agency FB;
        color:#5F789D;
    }
    .a:hover{
        background-color: red;
    } 
    .listType li a{
        text-decoration: none;
    }
    .clientlink{
        float:left;
        background:#fff;
    }
    .reportMainformNew{
        height: auto!important;
    }
    .hrdashreport {
        height: 5px;
        width: 99%;
        background-color: #c51400;
        border:none;
    }	
    .mainbodyReport{
        width: 1000px;
        margin: auto;
        margin-bottom:35px;
    }
    .bulletsReport{
        font-size:15px;
        color:#981007;
    }
    .hidden{
        display:none;
    }
    .listType li{
        padding-top:5px;
    }
	.fsReport2{
		font-size: 18px;
		margin-top: 5px;
		color: #C51400;
		padding-left: 10;
		font-family: agency fb2;
	}
</style>
<title>
    REPORTS
</title>
<!-- </?php
	//print_r($userlevel);
?> -->
<div class="mainbodyReport">
    <div class="reportContainer">
        <hr class="hrdashreport">
        <form class="reportForm">
            <div class="reportMainformNew">
                <div class="listForm">
                    <!-- </?php
                    if ($userlevel->fS == 'yes') {
                        ?>                                 -->
                        <div class="fsReport">Financial Statement</div>
                        <ul class="listType">
                            <li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="balanceSheet">Balance Sheet</a></li>
                            <li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="incomeStatement">Income Statement</a></li>
                            <li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="comparativeReport">Comparative Report</a></li>
                            <li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="trialbalance">Trial Balance</a></li>
                            <li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="cashflow">Cash Flow</a></li>
							<!--<li><label class="bulletsReport">&#8226;</label> <a href="" class="genConso">Consolidation Report</a></li>-->
                        </ul>
                        <!-- </?php
                    }
                    if ($userlevel->aR == 'yes') {
                        ?>                                 -->
                        <div class="fsReport">Account Receivables</div>
                        <ul class="listType">
                            <li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="outstandingReceivable">Outstanding Receivable</a></li>
                            <li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="collectedReport">Collection Report</a></li>
                            <li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="agingReport">Aging Report</a></li>
                            <li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="soa">Statement of Account</a></li>
                        </ul>
                        <!-- </?php
                    }
					if ($userlevel->aR == 'yes') {
                        ?>                                 -->
                        <div class="fsReport">Account Payables</div>
                        <ul class="listType">
                            <li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="outstandingPayable">Outstanding Payable</a></li>
                            <li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="agingPayable">Aging Report</a></li>
                        </ul>
                        <!-- </?php
                    }
					
                    if ($userlevel->sales == 'yes') {
                        ?>                                 -->
                        <div class="fsReport">Sales</div>
                        <ul class="listType">
                            <li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="salesPerService">Sales per Service</a></li>
							<li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="salesItem">Sales per Item</a></li>
                            <li><label class="hidden bulletsReport">&#8226;</label> <a href="#" class="reportLink hidden" val="salesPerItem">Sales per Item</a></li>

                        </ul>
                        <!-- </?php
                    }
					
					if ($userlevel->sales == 'yes') {
                        ?>                                 -->
                        <div class="fsReport">Purchase</div>
                        <ul class="listType">
                            <li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="purchasePerItem">Purchase Per Item</a></li>
                        </ul>
                        <!-- </?php
                    }
					
					
					if ($userlevel->sales == 'yes') {
                        ?>                                 -->
                        <div class="fsReport">Inventory</div>
                        <ul class="listType">
                            <li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="inventory">Inventory Availability</a></li>
                            <li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="inventoryCosting">Inventory Costing</a></li>
                        </ul>
                        <!-- </?php
                    }
					
					if ($userlevel->OR == 'yes') {
                        ?>                                 -->
                        <div class="fsReport">Books of Accounts</div>
                        <ul class="listType">
                            <li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="generalLedger">General Ledger</a></li>
                            <li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="generalJournal">General Journal</a></li>
                            <li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="salesJournal">Sales Journal</a></li>
                            <li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="purchaseJournal">Purchase Journal</a></li>
							<li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="inventoryBook">Inventory Book</a></li>
                           

                        </ul>
                        <!-- </?php
                    }
					
                    if ($userlevel->OR == 'yes') {
                        ?>                                 -->
                        <div class="fsReport">Other Reports</div>
                        <ul class="listType">
                            <li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="cashReceiptsBook">Cash Receipts Book</a></li>
                            <li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="summaryBilling">Summary of Billing</a></li>
                            <li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="cashDisburstmentBook">Cash Disbursement Book</a></li>
                            <li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="summaryJournal">Summary of Journal</a></li>
                            <li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="monthlyExpense">Total Expenses</a></li>
                            <li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="auditTrial">Audit Trail</a></li>
                            <li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="deliveryPerItem">Delivery per Item</a></li>
                            <!-- </?php
                            /* if($_SERVER['SERVER_NAME'] == 'sisoncorilloparoneco.service.unlibooks.com'){
                              ?>
                              <li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="soa">Statement of Account</a></li>
                              </?php
                              } */
                            ?> -->

                        </ul>
                        <!-- </?php
                    }
                    if ($userlevel->bIR == 'yes') {
                        ?>    -->
                        <!--                             
                        <div class="fsReport">BIR Reports</div>
                        <div class="fsReport2">VAT</div>
							<ul class="listType">
								</?php if ($this->info->typeOfTax == 'percentage') { ?>
									<li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="form2551m">Form 2551M</a></li>
								</?php } else if ($this->info->typeOfTax == 'vat') { ?>
									<li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="form2550m">Form 2550M</a></li>
									<li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="form2550q">Form 2550Q</a></li>
									<li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="vatRelief">Vat Relief</a></li>
								</?php } ?>
							</ul>
                        <div class="fsReport2">ITR</div>
							<ul class="listType">
								<li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="form1701q">Form 1701Q</a></li>
								<li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="form1701">Form 1701</a></li>
							</ul>
                        <div class="fsReport2">WHT</div>
							<ul class="listType">
								 <li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="form1601c">Form 1601C</a></li>
								<li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="form1601e">Form 1601E</a></li>
								<li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="view1601eMap">1601E - Map</a></li>
							</ul>
                        <div class="fsReport2">Other BIR Reports</div>
                        <ul class="listType">
							<li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="form2307">Form 2307</a></li>
							<li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="form0605">Form 0605</a></li>
                            <li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="sawt">Summary Alphalist of<br/> <span style="margin-left:12px;">Withholding Tax(SAWT)</span></a></li>
                            <li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="previewMode">Preview Mode</a></li>
                            <li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="mor_2307">Monitoring of Received <span style="margin-left:12px;">2307</span></a></li>
                            <li><label class="bulletsReport">&#8226;</label> <a href="#" class="reportLink" val="filedUnfiledTaxRet">Monitoring of Filed and<br/><span style="margin-left:12px;"> Unfiled Tax Returns</a></li>

                        </ul>-->
                      
                </div>	

                <div class="clientlink">
                    <div class="newformcl">

                    </div>
                </div>	
                <div style="clear:both"></div>	

            </div>
        </form>
    </div>
</div>
<div class="popBack hidden">

</div>
<script>
    var loading = ''; /* <div class="loadingHolder"><img src="' + URL + 'public/images/service_loader3.gif"/></div> */
    $(function () {
        $('.reportLink').click(function () {
            $('.newformcl').html(loading);
            $('.reportLink').removeClass('link-selected');
            $(this).addClass('link-selected');
            link = $(this).attr('val');
            $.post(URL + 'report/' + link)
                    .done(function (returnData) {
                        $('.newformcl').html(returnData);
                        scrollToTop(300);
                        // $('.newformcl').removeClass('hidden');
                    }).fail(function () {
					alert('Connection Error!');
				});
            return false;
        });

        function scrollToTop(scrollDuration) {
            var scrollStep = -window.scrollY / (scrollDuration / 15),
                    scrollInterval = setInterval(function () {
                        if (window.scrollY != 0) {
                            window.scrollBy(0, scrollStep);
                        }
                        else
                            clearInterval(scrollInterval);
                    }, 15);
        }

        function pdfPrint() {

            $('.printPdf').unbind();
            $('.printPdf').bind('click', function () {
                window.print();
            });
        }

    })

</script>


@extends('layouts.footer')