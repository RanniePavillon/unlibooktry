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
        padding:3px;
        font-size: 12px;
        font-family: Verdana!important;
    }
    .tbleInvoice2 td{
        font-size:12px;
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

    @media print{
        #headerHead{
            display:none;
        }
        #newInvoice{
            width:720px !important;
        }

    }
</style>
<?php
/* $info = new TblOrganizationInfo();
if (Session::getSession('user')) {
    $info = DAOFactory::getTblOrganizationInfoDAO()->load(DAOFactory::getTblUserDAO()->load(Session::getSession('user'))->orgInfoId);
    $org = DAOFactory::getTblOrganizationDAO()->load($info->orgId);
}
$client = new TblClient();
$invoice = new TblNewInvoice();
$company = DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('infoid')); */
?>
<?php
$client = new TblClient();
$invoice = new TblNewCashInvoice();
$invoiceamount = new TblCashInvoiceAmount();
// $linedata = $taskline = array();

if (isset($_POST['invoiceid'])) {
    $invoice =  DAOFactory::getTblSalesOrderDAO()->load($_POST['invoiceid']);
	
    $client = DAOFactory::getTblClientDAO()->load($invoice->clientId);
    $taskline = DAOFactory::getTblSalesOrderLinesDAO()->queryBySalesOrderId($invoice->id);
    Session::setSession('printinvoiceid', $_POST['invoiceid']);
    // foreach (DAOFactory::getTblAllCashInvoiceDAO()->queryByNewCashInvoiceId($_POST['invoiceid']) as $each) {
        // $allinvoice = $each;
    // }
		$cashSalesInvoice = DAOFactory::getTblSalesOrderAmountDAO()->queryBySalesOrderId($invoice->id);
    foreach ($cashSalesInvoice as $each) {
        $invoiceamount = $each;
    }

    // $linedata = GlobalClass::linedata($taskline, $invoice->inclusiveOfVat);
}
$atp = count(DAOFactory::getTblAtpDAO()->queryAll()) > 0 ? DAOFactory::getTblAtpDAO()->queryAll()[0] : new tblAtp();
$company = DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('infoid'));
Session::setSession('status', '');
?>
<link href="<?= URL ?>views/sales/css/delivery_receipt.css" rel="stylesheet" type="text/css">
<div class="invoiceHolderInvoicePrint">
    <form class="PaymentTypeFormInvoice" style="padding-bottom:20px;">
        <input type="button" class="closePrint" value="X">
        <input type="button" class="pdf" value="PDF" onclick="viewpdf(<?php echo $invoice->id ?>)">
        <input type="button" class="pdf2" value="Print" onclick="window.print();">

        <div class="clogo">
            <?php if ($company->logoName != '') { ?>
                <div style="float:left;margin-top:9px;margin-left:17px;">
                    <img id="imgprev" src ="<?= URL ?>public/companylogo/<?= $info->logoName ?>" alt="your logo"/>		
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

                    <!--TIN: <?php //echo $company->tinNum  ?>-->

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
					<td><?php echo $client->clientName ?></td>
                </tr>
                <tr class="invoicetr">
                    <td><div style="margin-top:10px;">Address:</div>
                    <td><div style="width:300px;word-break:break-word;position:absolute;"><?php echo ucwords($client->address) ?></div></td>
                </tr>
				<tr class="invoicetr">
					<td>TIN:</td> 
					<td><?php //echo $client->clientName ?></td>
				</tr>
            </table>	
        </div>	
        <div style="float:right;margin-right:30px;">	
            <table class="tbleInvoice2">	
                <tr class="invoicetr">
					<td>Delivery Date.:</td>
                    <td style="text-align:right;"><?php echo $this->deliveryreceipt->salesInvoiceNo ?></td>
                </tr>	
                <tr class="invoicetr">
					<td>SO No:</td> 
                    <td style="text-align:right;"><?php echo date('m/d/Y', strtotime($this->deliveryreceipt->dateIssued)) ?></td>
                </tr>	

            </table>
        </div>
        <div style="clear:both;"></div>
        
        <div style="margin-top:24px;">	
            <table class="tblInvoice2Item">
                <thead>
                    <tr class="newTblInv">
                            <th style="width:15%;">Item Description</th>
                            <th style="width:40%;">Unit</th>
                        <th style="width:15%;">Quantity</th>
                    </tr>
                </thead>
                <?php foreach ($this->deliveryreceiptlines as $item){
                     ?>
                <tr  class="">
                    <td class=""><?php echo DAOFactory::getTblItemDAO()->load($item->id)->itemCode ?></td>
                    <td class=""><?php echo $item->itemDescription ?></td>
                    <td class=""><?php echo $item->qty ?></td>
                </tr>
                <?php } ?>
            </table>
        </div>

        <div style="font-size:12px;font-family:Verdana;margin-left:15px;margin-top:47px;">"For Official Use Only"<br>
		<div style="font-size:12px;font-family:Verdana;margin-left:2px;margin-top:5px;">
            <table class="tobeFilled">

                <tr>
                    <td class="paddingTopText">Prepared By:</td>
                    <td><input type="text"></td>
                    <td class="paddingTopText" style="padding-left:15px;">Delivered By:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td class="paddingTopText">Audited By:</td>
                    <td><input type="text"></td>
                    <td class="paddingTopText" style="padding-left:15px;">Vehicle Plate No.:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td class="paddingTopText">Guard on Duty:</td>
                    <td><input type="text"></td>
                    <td class="paddingTopText" style="padding-left:15px;">Received in Good Condition:</td>
                    <td><input type="text"></td>
                </tr>
            </table>
        </div>
		<div style="clear:both;"></div>
		<div style="font-size:12px;font-family:Verdana;margin-left:2px;margin-top:25px;font-weight:bold; text-align:center;" class="">"THIS DOCUMENT IS NOT VALID FOR CLAIM OF INPUT TAXES"</div>
        <div style="float:right;color:#183867;font-family:Verdana;font-size:9px;margin-top:20px;">
            <div style="float:left;margin-top:29px;"><b>POWERED BY:</b></div>
            <div style="float:right;margin:11px 10px 0px 10px;"><img class="logo2a"src="<?= URL ?>public/images/usv_logo_long.png"></div>
            <div style="clear:both;"></div>
        </div>
        <div style="clear:both;"></div>
    </form>
</div>

<script>
//    $(function(){
    /*  function viewpdf(invoiceid){
     $().redirect(URL + 'invoice/pdfview', {invoiceid: invoiceid})
     .done(function(returnData) {
     $('.popBack').html(returnData);
     $('.popBack').removeClass('hidden');
     
     
     $('.closeNewItem').click(function() {
     $('.popBack').addClass('hidden');
     $('.popBack').html('');
     });
     })
     .fail(function() {
     alert('Connection Error!');
     });
     return false;
     } */
//    })
    function viewpdf(invoiceid) {
        window.open(URL + 'invoice/pdfview?invoiceid=' + invoiceid)
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