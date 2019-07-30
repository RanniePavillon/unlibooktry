<style>
    .tbleInvoice{
        margin-top: 26px;
        margin-left: 20px!important;
        width: 100%!important;
    }
    .tbleInvoice2{
        margin-top: 26px;
        width: 100%!important;
    }
    .tbleInvoice td{
        font-weight:normal;
        padding:3px !important;
        font-size: 12px;
        font-family: Verdana!important;
    }
    .tbleInvoice2 td{
        font-size:12px;
		padding:3px;
    }
    .clogoup{
        margin-left: 14px;
        font-size: 12px;
        font-weight:bold;
        font-family: Verdana!important;
        text-shadow: none;
        color: #000;
    }
    .RemarkText{
        border:none!important;
        margin-left:15px;
        width:460px;
        height:initial !important;
        padding:0px!important;
        margin-bottom: 20px;
        margin-top: 10px;
        font-family:tahoma;
        font-size:12px;
        padding:5px;
        word-break:break-all;
        white-space:pre-wrap;
    }
    .logo2a {
        width: 136px!important;
        height: 43px!important;
    }
    .tobeFilled{
        width:100%;
        margin:auto;
    }
    .tobeFilled input[type="text"]{
        width:220px;
        height: 28px;
        border:none;
        border-bottom:solid 1px #000;
    }
    .paddingTopText{
        padding-top: 18px;
    }
    .subtotaltable{
        width:326px;
        margin-left:471px;
    }
    .subtotaltable input[type="text"]{
        border:none;
        text-align:right;
        width:100%;
    }
    .subtotaltable th{ 
        background:none;
        border:none;
    }
    .subtotaltable td{
        font-size:12px;
        font-family:verdana;
    }

    @media print {
        .mainbodyInvoice, #container, .mainBody, #footer, #header, .footerHolderNew, input[type=button], #headerHead, #accpClickToOpen {
            display: none;
        }

        .PaymentTypeFormInvoice{
            width:98% !important;
        }
        .printLogo{
            display:none;
        }
        @page {
            size: portrait;
            margin:auto;
            margin: 5px;
            margin-top:30px;
            border:none;
        }
        .tobeFilled input[type="text"]{
            width:200px !important;
        }
        thead   {display: table-header-group;   }

        tfoot   {display: table-footer-group;   }

        @media screen{
            thead   {display: table-header-group;   }

            tfoot   {display: table-footer-group;   }
        }
    }

    @media screen {
        div.divFooter {
            display: none;
        }
    }
    @media print {
        div.divFooter {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #9FF;
            color: #000;
            text-align: right;
        }
    }
</style>

<?php
$client = new TblClient();
$invoice = new TblNewCashInvoice();
$deliveryreceiptamount = $this->deliveryreceiptamount;

$subTotal = $deliveryreceiptamount->subTotalAmount == '' ? 0 : $deliveryreceiptamount->subTotalAmount;

if (isset($_POST['invoiceid'])) {
    $invoice = DAOFactory::getTblSalesOrderDAO()->load($_POST['invoiceid']);

    $client = DAOFactory::getTblClientDAO()->load($invoice->clientId);
    $taskline = DAOFactory::getTblSalesOrderLinesDAO()->queryBySalesOrderId($invoice->id);

    Session::setSession('printinvoiceid', $_POST['invoiceid']);

    $cashSalesInvoice = DAOFactory::getTblSalesOrderAmountDAO()->queryBySalesOrderId($invoice->id);
    foreach ($cashSalesInvoice as $each) {
        $invoiceamount = $each;
    }
}

$atp = count(DAOFactory::getTblAtpDAO()->queryAll()) > 0 ? DAOFactory::getTblAtpDAO()->queryAll()[0] : new tblAtp();
$company = DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('infoid'));
Session::setSession('status', '');
?>
<link href="<?= URL ?>views/sales/css/delivery_receipt.css" rel="stylesheet" type="text/css">
<div class="invoiceHolderInvoicePrint">
    <form class="PaymentTypeFormInvoice" style="padding-bottom:20px;">
        <input type="button" class="closePrint" value="X">
        <input type="button" class="pdf" value="PDF" onclick="viewpdf(<?php echo $this->deliveryreceipt->id ?>)">
        <input type="button" class="pdf2" value="Print" onclick="window.print();">

        <div class="clogo">
            <?php if ($company->logoName != '') { ?>
                <div style="float:left;margin-top:9px;margin-left:17px;">
                    <img id="imgprev" src ="<?= URL ?>public/companylogo/<?= $company->logoName ?>" alt="your logo"/>		
                </div>
            <?php } ?>
            <div style="margin-top:8px;float:left;margin-left:10px!important;" class="clogoup" >
                <div style="font-weight:bold;text-transform:Capitalize;"><?php echo DAOFactory::getTblOrganizationDAO()->load(Session::getSession('orgid'))->orgName ?></div>
                <div style="word-break:break-word;width:240px;"><?php echo ucwords($company->address) ?></div>
                <div>
                    <?php
                    $info = DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('infoid'));

                    if ($info->typeOfTax == "vat") {
                        ?>
                        VAT

                    <?php } else {
                        ?>
                        Non-VAT
                        <?php
                    }
                    ?>
                    Reg. TIN: <?= $info->tinNum ?>

                    <!--TIN: <?php //echo $company->tinNum   ?>-->

                </div>
                <div>Phone No: <?php echo $company->phoneNum ?></div>
                <div>Fax No: <?php echo $company->faxNum ?></div>
            </div>
            <div style="clear:both;"></div>
        </div>

        <div id="newInvoicePrint" style="margin-top:34px!important;">DELIVERY RECEIPT</div>
        <div style="float:left;">
            <table class="tbleInvoice">
                <tr class="invoicetr">
                    <?php
                    $client = DAOFactory::getTblClientDAO()->load($this->deliveryreceipt->clientId);
                    ?>
                    <td>Delivered To:</td> 
                    <td><?php echo ucfirst($client->clientName) ?></td>
                </tr>
				<tr class="invoicetr">
                    <td>TIN:</td> 
                    <td><?php echo $client->tinNum ?></td>
                </tr>
                <tr class="invoicetr">
                    <td><div style="">Address:</div>
                    <td><div style="width:300px;word-break:break-word;"><?php echo ucwords($client->address) ?></div></td>
                </tr>
                
            </table>	
        </div>	
        <div style="float:right;margin-right:30px;">	
            <table class="tbleInvoice2">	
                <tr class="invoicetr">
                    <td>Delivery Date.:</td>
                    <td style="text-align:right;"><?php echo date('m/d/Y', strtotime($this->deliveryreceipt->dateIssued)) ?></td>
                </tr>	
                <tr class="invoicetr">
                    <td>DR No.:</td>
                    <td style="text-align:right;"><?php echo $this->deliveryreceipt->deliveryReceiptNo ?></td>
                </tr>

                <tr class="invoicetr">
                    <td>SO No:</td> 
                    <td style="text-align:right;"><?php echo DAOFactory::getTblSalesOrderDAO()->load($this->deliveryreceipt->salesOrderId)->salesOrderNo ?></td>
                </tr>	

            </table>
        </div>
        <div style="clear:both;"></div>

        <div style="margin-top:24px;">	
            <table class="tblInvoice2Item">
                <thead>
                    <tr class="newTblInv">
                        <th style="width:35%;">Item Description</th>
                        <th style="width:15%;">UOM</th>
                        <th style="width:15%; text-align:center;">Quantity</th>
                                                <!--<th style="width:15%;">Amount</th>-->
                    </tr>
                </thead>
                <?php foreach ($this->deliveryreceiptlines as $item) {
                    ?>
                    <tr  class="">
                        <!--<td class=""><?php echo DAOFactory::getTblItemDAO()->load($item->itemId)->itemCode ?></td>-->
                        <td class=""><?php echo $item->itemDescription ?></td>
                        <td class="">
                            <?php //echo $item->uomId ?>
                            <?php
                            $task1 = DAOFactory::getTblUomDAO()->load($item->uomId);
                            echo ucwords($task1->abbreviation);
                            ?>
                        </td>
                        <td class="" style="text-align:center;"><?php echo $item->qty ?></td>
                                            <!--<td class=""><?php echo Controller::getFloat($item->netAmount) ?></td>-->
                    </tr>
                <?php } ?>
            </table>

            <!--<div class="discountForm">
                    <table class="subtotaltable">
                            <tr>	
                                    <th width=""></th>
                                    <th width=""></th>
                            </tr>
            <?php
            $discounttotal = $deliveryreceiptamount->discountAmount == '' ? 0 : $deliveryreceiptamount->discountAmount;
            ?>
                            <tr>
                                    <td>Subtotal</td>
                                    <td><input type="text" class="totalclass numeric"  style="padding-right: 10px;"
                                                       id="subtotal" name="subTotalAmount" value="<?php echo Controller::getFloat($subTotal) ?>" readonly></td>
                            </tr>
            <?php
            $vattotal = $deliveryreceiptamount->vatAmount == '' ? 0 : $deliveryreceiptamount->vatAmount;
            ?>
                            <tr>
                                    <td>Discount</td>
                                    <td><input type="text" class="totalclass numeric" id="discount" name="discountAmount" style="padding-right: 10px;" value="<?php echo Controller::getFloat($discounttotal) ?>" readonly></td>
                            </tr>
                            
                            <tr>
                                    <td>Net Amount</td>
                                    <td><input type="text" class="totalclass numeric netamounttotal" style="padding-right: 10px;" value="<?= Controller::getFloat(($deliveryreceiptamount->subTotalAmount) - ($deliveryreceiptamount->discountAmount)) ?>" readonly></td>
                            </tr>
            <?php
            $vattotal = $deliveryreceiptamount->vatAmount == '' ? 0 : $deliveryreceiptamount->vatAmount;
            ?>
                            <tr>
                                    <td>VAT</td>
                                    <td style="padding-bottom:3px;"><input type="text" class="totalclass numeric" id="vat" name="vatAmount" value="<?php echo Controller::getFloat($vattotal) ?>" style="padding-right: 10px;" readonly></td>
                            </tr>
                            <tr class="">
                                    <td style="font-weight:bold;color:#000;">Total Amount</td>
                                    <td><input type="text" class="totalclass numeric" name="grandTotal" style="padding-right: 10px;font-weight:bold;color:#000;background:none;border:none;" value="<?php echo Controller::getFloat($deliveryreceiptamount->grandTotal) ?>" readonly></td>
                            </tr>
                    </table>
            </div>-->

        </div>

        <div style="font-size:12px;font-family:Verdana;margin-left:15px;margin-top:68px;">"For Official Use Only"<br>
            <div style="font-size:12px;font-family:Verdana;margin-left:2px;margin-top:5px;">
                <table class="tobeFilled">

                    <tr>
                        <td class="paddingTopText">Prepared By:</td>
                        <td><input type="text" readonly></td>
                        <td class="paddingTopText" style="padding-left:15px;">Delivered By:</td>
                        <td>
                            <?php
                            $driver = DAOFactory::getTblDriverDAO()->load($this->deliveryreceipt->driverId);
                            ?>
                            <input type="text" value="<?php echo $driver->driverName ?>" readonly>
                        </td>


                    </tr>
                    <tr>
                        <td class="paddingTopText">Audited By:</td>
                        <td><input type="text" readonly></td>
                        <td class="paddingTopText" style="padding-left:15px;">Vehicle Plate No.:</td>
                        <td><input type="text" readonly></td>
                    </tr>
                    <tr>
                        <td class="paddingTopText">Guard on Duty:</td>
                        <td><input type="text" readonly></td>
                        <td class="paddingTopText" style="padding-left:15px;">Received in Good Condition:</td>
                        <td><input type="text" readonly></td>
                    </tr>
                </table>
            </div>
            <div style="clear:both;"></div>
            <div style="font-size:12px;font-family:Verdana;margin-left:2px;margin-top:25px;font-weight:bold; text-align:center;" class="">"THIS DOCUMENT IS NOT VALID FOR CLAIM OF INPUT TAXES"</div>
            <div style="float:right;color:#183867;font-family:Verdana;font-size:9px;margin-top:20px;" class="printLogo">
                <div style="float:left;margin-top:29px;"><b>POWERED BY:</b></div>
                <div style="float:right;margin:11px 10px 0px 10px;"><img class="logo2a"src="<?= URL ?>public/images/usv_logo_long.png"></div>
                <div style="clear:both;"></div>
            </div>
            <div class="divFooter">
                <div style="float:right;color:#183867;font-family:Verdana;font-size:9px;margin-top:20px;">
                    <div style="float:left;margin-top:29px;"><b>POWERED BY:</b></div>
                    <div style="float:right;margin:11px 10px 0px 10px;"><img class="logo2a"src="<?= URL ?>public/images/usv_logo_long.png"></div>
                    <div style="clear:both;"></div>
                </div>
            </div>
            <div style="clear:both;"></div>
    </form>
</div>

<script>
    function viewpdf(invoiceid) {
        window.open(URL + 'sales/pdfview?deliveryreceiptid=' + invoiceid)
                .done(function (returnData) {

                })
                .fail(function () {
                    alert('Connection Error!');
                });
        return false;
    }
</script>

<script>
    $(function () {
        $("#imgInp").change(function () {
            fsize = this.files[0].size;
            $('input[name="hasFile"]').val('true');
            readURL(this);
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imgprev').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    });
</script>