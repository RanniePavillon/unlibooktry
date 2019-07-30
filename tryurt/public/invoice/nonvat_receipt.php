
<style>
    .mainHolder{
        width:100%;
        margin: auto;
        padding: 0;
        margin-top: 50px;
    }
    .mainContainer{
        width:875px!important;
        height:auto!important;
        border:none!important;
        margin:auto;
        padding:20px;
        font-family:Arial;
        font-size:12px;
        background:#fff;
    }
    .companyInfoNonVat{
        text-align:center;
        float: left!important;
        margin-left: 136px!important;
        width: 609px!important;
    }
    .ORtext{
        font-size:15px;
        /*margin-top:5px;*/
        margin-top:2px;
        text-align:center;
        font-weight:bold;
    }
    .validFor{
        margin-top:15px;
        font-size:10px;
        font-family:Verdana;
        text-align:center;
        width: 200px;
    }
    .ptuNoInfo{
	text-align: left;
        font-size:9px;
        margin-top:20px;
        margin-left:7px;
    }
    .ptuInput{
        border:none;
        /* border-bottom:1px solid #000; */
        font-size:9px;
        font-family:Verdana;
    }
    .leftSideOR{
        float:left;
        height:auto!important;
    }
    .rightSideOR{
        width:597px!important;
        height: auto!important;
        float:right!important;
    }
    .tblORvatLeftSide{
        border-collapse:collapse;
        width:265px;
        border:1px solid #000;
        font-family:Agency FB;
        font-size:13px;
    }
    .tblORvatLeftSide tr td{
        border:1px solid #000;
        padding-left:3px;
    }
    .lightBlueTD{
        background:rgb(191, 213, 234);
        border: 1px solid #000;
        color: #000;
        font-family: Verdana;
        font-size: 9px;
        font-weight: normal;
        text-align:left;
    }
    .lightGrayTD{
        background:#E8E8E8;
        border: 1px solid #000;
        color: #000;
        font-family: Verdana;
        font-size: 9px;
        font-weight: normal;
        text-align:left;
    }
    .formOfPayment{
        font-size:9px;
        background:rgb(84,144,199);
        color:#fff;
        border:1px solid #000;
    }
    .modeOfPayment{
        -webkit-transform: scale(2);
        width:10px;
        height:10px;
    }
    .borderThick{
        border-top:2px solid #000;
        border-bottom:2px solid #000;
    }
    .inputUnderline{
        border-bottom:1px solid #000;
        border-top:none;
        border-left:none;
        border-right:none;
        outline-style:none;
        padding-left:3px;
        margin-top:2px;
    }
    .lineWidth{
        width:100px;
    }
    .lineWidth1{
        width:300px;
    }
    .lineWidth2{
        width:145px!important;
    }
    .lineWidth3{
        width:371px;
    }
    .lineWidth4{
        width:492px;
    }
    .lineWidth5{
        width:593px;
    }
    .lineWidth6{
        width:110px;
        text-align:left;
    }
    .lineWidth7{
        width:271px;
    }
    .lineWidth8{
        width:100px;
    }
    .bottomLeft{
        float:left;
        width:200px;
        margin-top:14px;
    }
    .bottomRight{
        float:right;
    }
    .lineWidth9{
        width:198px;
        background:rgb(137, 228, 244);
        margin-top:5px;
    }
    .lineWidth9b{
        width:95px;
        background:rgb(137, 228, 244);
        margin-top:5px;
    }
    .srCitizen{
        background: rgb(137, 228, 244);
        width:198px;
        height:35px;
        font-size:10px;
        border:1px solid #000;
    }
    .osca{
        background: rgb(137, 228, 244);
        width:96px;
        height:35px;
        border:1px solid #000;
        font-size:10px;
    }
    .signature{
        background: rgb(137, 228, 244);
        width:97px;
        height:35px;
        border:1px solid #000;
        font-size:10px;
    }	
    .lineWidth10{
        width:96px;
        background:rgb(137, 228, 244);
        margin-top:5px;
    }
    .lineWidth11{
        width:97px;
        background:rgb(137, 228, 244);
        margin-top:5px;
    }
    .lineWidth12{
        width:181px;
    }
    .byAR{
        text-align: center;
        margin-top: 2px;
        font-size: 10px;
    }
    .ORNumber{
        font-size: 15px;
        font-family:Arial;
        font-weight: bold;
        text-align: right;
    }
	
    .img2 {
        position: absolute;
        margin-left: 28px;
        height: 17px;
        z-index: -1;
        top: 209px;
    }

    .blueGrayWidth{
        width:70px;
        text-align:right;
    }
    .blueGrayWidth2{
        width:20px;
        text-align:left;
    }
    .xHolder{
        margin:auto;
        float:right;
    }
    .popx{
        background-image:url('<?= URL ?>public/images/popx.png');
        background-size:100% 100%;
        cursor:pointer;
    }
    .closePrints{
        width: 23px;
        border: none;
        height: 22px;
        float:left;
        margin-left:5px;
    }
    .rightButtons{
        margin-left: 34px;
        width: 60px;
        height: 22px;
        font-family: agency fb2;
        font-size: 15px;
        font-weight: bold;
        border-radius: 5px;
        color: rgb(230, 230, 230);
        -moz-border-radius: 30px;
        background: rgb(28, 181, 239);
        background: -moz-linear-gradient(90deg, rgb(2, 153, 162) 30%, rgb(48, 187, 195) 78%);
        background: -webkit-linear-gradient(90deg, rgb(2, 153, 162) 30%, rgb(48, 187, 195) 78%);
        background: -o-linear-gradient(90deg, rgb(2, 153, 162) 30%, rgb(48, 187, 195) 78%);
        background: -ms-linear-gradient(90deg, rgb(2, 153, 162) 30%, rgb(48, 187, 195) 78%);
        background:linear-gradient(0deg, rgb(2, 153, 162) 30%, rgb(48, 187, 195) 85%);
        -moz-box-shadow: 0px 2px 1px rgba(50, 50, 50, 0.75);
        border: none;
    }
    .tblORvatLeftSide th{
        padding:5px;
    }
    .addressInp{
        width: 250px;
        word-break: break-word;
        border: none;
        text-align: center;
        outline-style: none;
        margin-left: 174px;
        font-family: Verdana;
        font-size: 12px;
    }
    .regName{
        font-size:15px;
        font-weight:bold;
        border:none;
        outline-style:none;
        text-transform:uppercase; 
        text-align:center;
        width:100%;
    }
    .regcontainer a{
        color:#000;
        text-decoration:none;
    }
    .regcontainer a:hover{
        color:#398F72;
        text-decoration:underline;
    }
	.inSettlement {
		text-align: left;
		background: rgb(84,144,199);
		color: #fff;
		border: 1px solid #000;
		padding-left: 3px;
		font-size: 9px;
	}
    /* @media print {
        .mainbodyInvoice, #headerHead, #container, .regcontainer, .hideText, .companyInfoNonVat, .birReg, .bottomRight, .hideDate, .ORNumber, .ORtext, .leftSideOR, .tblORvatLeftSide, .mainBody, #footer, #header, .footerHolderNew, input[type=button] {
            display: none;
        }
        .inputUnderline{
            border:none!important;
        }
        .withMarginLeft1{
            margin-left:81px;
        }
        .withMarginLeft2{
            margin-left:48px;
        }
        .withMarginLeft3{
            margin-left:84px;
        }
        .withMarginLeft4{
            margin-left:43px;
        }
        .withMarginLeft6{
            margin-left:13px;
        }
        .withMarginLeft7{
            margin-left:13px;
        }
        .mainContainer{
            width:595px!important;
        }
        .lineWidth{
            border:none!important;
            text-align:right!important;
        }
        .inSettlement{
            color:#000 !important;
        }
        .formOfPayment{
            color:#000 !important;
        }
        .mainContainer{
            border:none!important;
        }
        .companyInfo{
            margin-left:0px;
        }
        .Main{
            background: none;
            margin:auto;
            border:none;
        }
        .invoiceHolderNewInvoiceForm {
            display:none !important;
        }
        .boxshadowprint{
            border:none !important;
            box-shadow:none !important;
        }
        .PaymentTypeFormInvoice{
            margin-top:30px;
            border:none !important;
            border-shadow:none;
            width: 805px;
        }
        .newInvoiceprint{
            margin-top:80px;
        }
        .clogoup{
            margin-top:1px;
        }
        .popBack{
            width:900px;
            margin:auto;
            overflow: hidden;
            position: static;
            background-color: #fff;
            border:none !important;
            border-shadow:none !important;
        }
        @page {
            size: A5 landscape;
            margin: 0.4in;
        }
        thead   {display: table-header-group;   }

        tfoot   {display: table-footer-group;   }


        @media screen{
            thead   {display: table-header-group;   }

            tfoot   {display: table-footer-group;   }
        }
    } */
@media print{
    .mainbodyInvoice, #headerHead, #accpLiveChat, .regcontainer, #container, .mainBody, #footer, #header, .footerHolderNew, input[type=button] {
        display: none !important;
    }
    .inSettlement, .formOfPayment{
        color:#000 !important;
        font-weight:normal!important;
    }
    
    @page {
            size: A5 landscape;
    }
}
</style>

<?php
$client = new TblClient();
$invoice = new TblNewCashInvoice();
$invoiceamount = new TblCashInvoiceAmount();
$taskline = array();

if (isset($_POST['invoiceid'])) {
    $invoice = $this->invoice;
    $client = $this->client;
    $taskline = $this->taskline;
    Session::setSession('printinvoiceid', $_POST['invoiceid']);

    $invoiceamount = $this->invoiceAmount;
}
$atp = count(DAOFactory::getTblAtpDAO()->queryAll()) > 0 ? DAOFactory::getTblAtpDAO()->queryAll()[0] : new tblAtp();
$company = $this->company; //DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('infoid'));
Session::setSession('status', '');
?>
<link rel="stylesheet" href="<?php echo URL; ?>views/invoice/css/nonvat_receipt.css"/>

<div class="mainHolder" style="margin-top:100px !important;">
    <div class="mainContainer">
        <?php if ($invoice->status == 'posted') { ?>
            <div class="companyInfoNonVat">
                <div>
                    <input type="text" class="regName" value="<?php echo DAOFactory::getTblOrganizationDAO()->load(Session::getSession('orgid'))->orgName ?>" readonly="readonly">
                </div>
                <div class="addressInp">
                    <?php echo ucwords($company->address) ?>
                </div>	
                <div>	
                    <label>Non-VAT Reg. TIN:<?php echo $company->tinNum ?>
                </div>
            </div>
            <div style="float:right;">
                <input type="button" class="rightButtons hidden" value="PDF" onclick="viewpdf(<?php echo $invoice->id ?>)">
                <input type="button" class="rightButtons" value="PRINT" onclick="window.print();" style="float:left;">
                <input type="button" class="closePrints popx" value="" style="float:left;">
                <div style="clear:both;"></div>
            </div>
            <div style="clear:both;"></div>
            <div class="ORNumber"><?php echo $invoice->casNo != '' ? $invoice->casNo : $invoice->orNum ?></div>
            <div class="ORtext">OFFICIAL RECEIPT</div>

            <div style="margin-top:14px;">
                <div class="leftSideOR hiddens">
                    <table class="tblORvatLeftSide hiddens">
						<tr>
							<th colspan="3" class="inSettlement">
								In settlement of the following:
							</th>
						</tr>
                        <tr>
                            <th class="lightBlueTD">Official Receipt No.</th>
                            <th class="lightBlueTD" colspan="2" style="text-align:center;">Amount</th>
                        </tr>
                        <tr>
                            <th  class="lightGrayTD"><?= $invoice->casNo != '' ? $invoice->casNo : $invoice->orNum ?></th>
                            <th  class="lightGrayTD blueGrayWidth">
                                <?php
                                // $grandTotalArray = explode('.', Controller::getFloat($invoiceamount->grandTotal));
                                // echo $grandTotalArray[0];
                                ?>
                            </th>
                            <th  class="lightGrayTD blueGrayWidth2"><!--?= $grandTotalArray[1] ?--></th>
                        </tr>
                        <tr class="hidden">
                            <th class="lightBlueTD">0</th>
                            <th class="lightBlueTD blueGrayWidth">0</th>
                            <th class="lightBlueTD blueGrayWidth2">00</th>
                        </tr>
                        <tr>
                            <th class="lightBlueTD borderThick">Total Sales</th>
                            <th class="lightBlueTD borderThick blueGrayWidth">
                                <?php
                                $grandTotalArray = explode('.', Controller::getFloat($invoiceamount->grandTotal));
                                echo $grandTotalArray[0];
                                ?>
                            </th>
                            <th class="lightBlueTD borderThick blueGrayWidth2"><?= $grandTotalArray[1] ?></th>
                        </tr>
                        <tr>
                            <th class="lightGrayTD">Less: SC/PWD Discount</th>
                            <th class="lightGrayTD blueGrayWidth">0</th>
                            <th class="lightGrayTD blueGrayWidth2">00</th>
                        </tr>
                        <tr>
                            <th class="lightBlueTD">Total Due</th>
                            <th class="lightBlueTD blueGrayWidth">
                                <?php
                                $grandTotalArray = explode('.', Controller::getFloat($invoiceamount->grandTotal));
                                echo $grandTotalArray[0];
                                ?>
                            </th>
                            <th class="lightBlueTD blueGrayWidth2"><?= $grandTotalArray[1] ?></th>
                        </tr>
                        <tr>
                            <th class="lightGrayTD">Less: Withholding Tax</th>
                            <th class="lightGrayTD blueGrayWidth">0</th>
                            <th class="lightGrayTD blueGrayWidth2">00</th>
                        </tr>
                        <tr>
                            <th class="lightBlueTD">Payment Due</th>
                            <th class="lightBlueTD blueGrayWidth">
                                <?php
                                $grandTotalArray = explode('.', Controller::getFloat($invoiceamount->grandTotal));
                                echo $grandTotalArray[0];
                                ?>
                            </th>
                            <th class="lightBlueTD blueGrayWidth2"><?= $grandTotalArray[1] ?></th>
                        </tr>
                        <tr class="hidden">
                            <th class="lightGrayTD">0</th>
                            <th class="lightGrayTD blueGrayWidth">0</th>
                            <th class="lightGrayTD blueGrayWidth2">00</th>
                        </tr>
                        <tr class="hidden">
                            <th class="lightGrayTD">0</th>
                            <th class="lightGrayTD blueGrayWidth">0</th>
                            <th class="lightGrayTD blueGrayWidth2">00</th>
                        </tr>
                        <tr class="hidden">
                            <th class="lightBlueTD">0</th>
                            <th class="lightBlueTD blueGrayWidth">0</th>
                            <th class="lightBlueTD blueGrayWidth2">00</th>
                        </tr>
                        <tr>
                            <th colspan="3" class="formOfPayment">Form of Payment:</th>	
                        </tr>
                        <tr>
                            <th class="lightBlueTD" colspan="4">
                                <span><label style="margin-left:47px;">Cash</label> <input type="checkbox" class="modeOfPayment" style="margin-left:10px;" checked disabled> </span>
                                <span><label style="margin-left:44px;">Check</label> <input type="checkbox" class="modeOfPayment" style="margin-left:10px;" disabled></span>
                            </th>	
                        </tr>
                    </table>		
                </div>

                <div class="rightSideOR">
                    <div style="float:right;">
                        <label class="hideDate">Date:</label> <input type="text" class="inputUnderline lineWidth" value="<?php echo date('m/d/Y', strtotime($invoice->dateIssued)) ?>" readonly="readonly">
                    </div>
                    <div style="clear:both;"></div>
                    <?php
                    if (count($taskline) > 0) {

                        require_once ('public/inwords.php');
                        $parts = explode('.', Controller::getFloat($invoiceamount->grandTotal));
                        $words = inwords::convert_number_to_words(Controller::removeComma($parts[0])); //$inwords->in_words(324); //in_words->show_words($paymentview[0]->appliedAmount);
                        $words .= (isset($parts[1]) && $parts[1] > 0) ? ' Pesos & ' . ($parts[1]) . '/100 Centavos' : '';
                        $words .= ' Only';
                        ?>	
                        <div style="text-indent:20px;margin-top:20px;">
                            <label class="hideText">Received from</label> <input type="text" class="inputUnderline lineWidth1 withMarginLeft1" value="<?php echo ucwords($client->clientName) ?>" readonly="readonly"> <label class="hideText">with TIN</label> <input type="text" class="inputUnderline lineWidth2 withMarginLeft2" value="<?php echo ucwords($client->tinNum) ?>" readonly="readonly">
                            <label class="hideText">and address at</label> <input type="text" class="inputUnderline lineWidth3 withMarginLeft3" value="<?php echo ucwords($client->address) ?>" readonly="readonly"> <label class="hideText">engaged in the business style of</label> <input type="text" class="inputUnderline lineWidth4 withMarginLeft4" readonly="readonly"><label class="hideText">,</label>
                            <label class="hideText">the sum of</label> <input type="text" class="inputUnderline lineWidth5" value="<?= ucwords($words) ?>" readonly="readonly"> <label class="hideText">(&#8369;</label> <input type="text" class="inputUnderline lineWidth6 withMarginLeft6" value="<?php echo number_format((float) $invoiceamount->grandTotal, 2) ?>" readonly="readonly"><label class="hideText">).</label> 
                            <label class="hideText">In partial/<u>full payment</u>
                                for</label> <input type="text" class="inputUnderline lineWidth7 withMarginLeft7" value="<?php
                            foreach ($taskline as $i => $task) {
                                $task1 = DAOFactory::getTblTaskDAO()->load($task->taskId);
                                echo ucwords($task->description);
                            }
                            ?>" readonly="readonly"><label class="hideText">.</label>	
                        </div>
                    <?php } ?>	


                    <div style="margin-top:30px;">
                        <div class="bottomLeft hidden">
                            <div class="srCitizen">
                                <label>Sr. Citizen TIN</label><br/>
                                <?php
                                if ($invoice->patientType == 'sc' || $invoice->patientType == 'pwd') {
                                    ?>
                                    <input type="text" class="inputUnderline lineWidth9" value="<?= $client->tinNum ?>" readonly="readonly">
                                    <?php
                                }
                                ?>
                            </div>

                            <div style="margin-top:5px;">
                                <div class="osca" style="float:left">
                                    <label>OSCA/PWD ID No.</label>
                                    <?php
                                    if ($invoice->patientType == 'sc') {
                                        ?>
                                        <input type="text" class="inputUnderline lineWidth9b" value="<?= $invoice->scPwd ?>" readonly="readonly">
                                        <?php
                                    }
                                    ?>
                                    <?php
                                    if ($invoice->patientType == 'pwd') {
                                        ?>
                                        <input type="text" class="inputUnderline lineWidth10" value="<?= $invoice->scPwd ?>" readonly="readonly">
                                        <?php
                                    }
                                    ?>
                                </div>

                                <div class="signature" style="float:right">
                                    <label>Signature</label>
                                    <input type="text" class="inputUnderline lineWidth11">
                                </div>
                                <div style="clear:both;"></div>
                            </div>
                        </div>

                        <div class="bottomRight">
                            <div >
                                <label style="font-size:10px;">By: <input type="text" class="inputUnderline lineWidth12"></label>
                                <div class="byAR">Authorized Representative</div>
                            </div>
                            <div class="validFor hidden">
                                <b>This Receipt shall be valid for five (5) years from the date of permit to use</b>
                            </div>
                            <div class="ptuNoInfo">
                                <div>
                                        <b>PTU No.:</b> <?php echo $this->ptu->ptuNo ?>
                                </div>
                                <div>
                                    <b>Date Issued:</b> <?php echo $this->ptu->ptuDateIssued != ''  ? date('m/d/Y',strtotime($this->ptu->ptuDateIssued)) : '' ?>
                                        <br/>
                                        <b>Valid Until:</b> <?php echo $this->ptu->ptuDateValidity != ''  ? date('m/d/Y',strtotime($this->ptu->ptuDateValidity)) : '' ?>
                                </div>
                            </div>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div>
            <?php
            if ($atp->atpNo != '') {
                ?>  

                <div class="regcontainer" style="font-family:Verdana;font-size:12px;">
                    <div>
                        <a href="" class="birReg hidden"><?php echo $atp->bklts ?> Bklts (3x) <?php echo $atp->seriesFrom ?>-<?php echo $atp->seriesTo ?></a>
                        <br>
                        <a href="" class="birReg">BIR Authority to Print No. <?php echo $atp->atpNo ?></a>
                        <br>
                                <!--Date Issued <span style="text-decoration:underline;"><?php //echo date('m-d-Y', strtotime($atp->dateIssued));    ?>:--><span style="color:#000;"> Valid until</span> <?php echo date('m-d-Y', strtotime($atp->dateValidity)); ?> </span>
                        <br>
                        <?php echo $atp->name ?>
                        <br>
                        <?php echo $atp->address ?>
                        <br>
                        <!--TIN:<?php //echo $atp->tin    ?>-->

                    </div>

                    <div style="text-align:center;"><span class="official">THIS OFFICIAL RECEIPT SHALL BE VALID FOR FIVE (5) YEARS FROM THE DATE OF ATP.</span></div>
                    <?php // }  ?>
                </div>

            <?php } else { ?>
                <div class="regcontainer" style="font-family:Verdana;font-size:12px;">
                    <a href="" class="birReg hidden">Use of Official Receipt from Unlibooks needs BIR registration</a>
                </div>
				<div class="cus-row margin-top-30">
					<div class="cus-col-12">
						<p>
							<i class="text-600">"This receipt shall be Valid for 5(five) years from the date of the permit to use"</i>
						</p>
					</div>
				</div>
                <?php
            }
        } else {
            ?>
            <input type="button" class="closePrints popx" value="x">
            <div style="text-align: center; height:149px; margin-top:108px;">
                <h1>
                    Receipt not available.
                </h1>
            </div>
        <?Php } ?>


    </div>
</div>

<script>
    $('.birReg').click(function () {
        $.post(URL + 'setting/bir')
                .done(function (returnData) {
                    $('.popBack').html(returnData);
                    $('.popBack').removeClass('hidden');
                    $('body').css('overflow', 'hidden');
                    $(".popBack").css('z-index', '100');

                    $('.no').click(function () {
                        if (confirm('Are you sure you want to leave this page?')) {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                            $('body').css('overflow', 'auto');
                            // location.reload();
                        }
                    });

                })
                .fail(function () {
                    alert('Connection Error!');
                });

        return false;

    });
</script>
