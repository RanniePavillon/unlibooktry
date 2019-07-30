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
	height:17px;
	font-size: 12px;
	font-family: Verdana!important;
}
.tbleInvoice2 td{
	font-size:12px;
	height:17px;
}
.clogoup{
	margin-left: 14px;
	font-size: 12px;'
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
@media print{
	#headerHead, .everyFooter{
		display:none;
	}
	#newInvoice{
		width:720px !important;
	}
	#newInvoicePrint{
		width:720px !important;
	}
	.poRequest{
		display:none !important;
	}
	div.divFooter {
		position: fixed;
		bottom: 20px;
		right: 20px;
		background: #9FF;
		color: #000;
		text-align: right;
	}
	
}
@media screen {
	div.divFooter {
		display: none;
	}
}
</style>
<?php
$info = new TblOrganizationInfo();
// $org = new TblOrganization();
if (Session::getSession('user')) {
	$info = DAOFactory::getTblOrganizationInfoDAO()->load(DAOFactory::getTblUserDAO()->load(Session::getSession('user'))->orgInfoId);
	$org = DAOFactory::getTblOrganizationDAO()->load($info->orgId);
//    Session::setSession('medinfoid', $info->id);
}
$client = new TblClient();
$invoice = new TblNewInvoice();
$taskline = array();
$itemline = array();
// $_POST['invoiceid'];
// echo Session::getSession('orgid');
$invoiceId = Session::getSession('invoice_id') ? Session::getSession('invoice_id') : $_POST['invoiceid'];
$invoiceAmount = new TblInvoiceAmount();
    if ($invoiceId != '') {
        // echo 'invoiceID = '.$invoiceId.' ---------';
        $invoice2 = DAOFactory::getTblAllInvoiceDAO()->queryByNewInvoiceId($invoiceId);
        $invoiceAmount = DAOFactory::getTblInvoiceAmountDAO()->queryByAllInvoiceId($invoice2[0]->id);
        $invoiceAmount = $invoiceAmount[0];
    }
    // print_R($invoiceAmount);
    $subTotal = $invoiceAmount->subTotalAmount == '' ? 0 : $invoiceAmount->subTotalAmount;
Session::setSession('invoice_id',false);
if ($invoiceId) {
    $invoice = DAOFactory::getTblNewInvoiceDAO()->load($invoiceId);
    $client = DAOFactory::getTblClientDAO()->load($invoice->clientId);
    $taskline = TblInvoiceLinesMySqlExtDAO::getTasks($invoice->id);
  //  $itemline = TblInvoiceLinesMySqlExtDAO::getItem($invoice->id);
}
$company = DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('infoid'));
?>
<link href="<?= URL ?>views/invoice/css/print_invoice.css" rel="stylesheet" type="text/css">
<script src="<?= URL ?>views/invoice/js/print_invoice.js"></script>
<div class="invoiceHolderInvoicePrint">
    <form class="PaymentTypeFormInvoice" style="padding-bottom:20px;">
        <input type="button" class="closePrint" value="X">
        <input type="button" class="pdf" value="PDF" onclick="viewpdf(<?php echo $invoice->id ?>)">
        <input type="button" class="pdf2" value="Print" onclick="window.print();">
        
        <div class="clogo">
            <!--<div style="float:left;"><img class="scplogoclass"  src="<?=URL?>public/companylogo/<?php echo Session::getSession('orgid') ?>"></div>-->
            <?php if ($company->logoName != '') { ?>
			<div style="float:left;margin-top:9px;margin-left:17px;">
				<img id="imgprev" src ="<?= URL ?>public/companylogo/<?= $info->logoName ?>" alt="your logo"/>		
			</div>
			<?php } ?>
			<div style="margin-top:8px;float:left;margin-left:10px!important;" class="clogoup" >
				<div style="font-weight:bold;text-transform:Capitalize;"><?php echo DAOFactory::getTblOrganizationDAO()->load(Session::getSession('orgid'))->orgName?></div>
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
				
				<!--TIN: <?php //echo $company->tinNum ?>-->
				
				</div>
				<div>Phone No: <?php echo $company->phoneNum ?></div>
				<div>Fax No: <?php echo $company->faxNum ?></div>
			</div>
			<div style="clear:both;"></div>
        </div>
		
       <div id="newInvoicePrint" style="margin-top:34px!important;">BILLING CHARGE</div>
		<div style="float:left;">
			<table class="tbleInvoice">
				<tr class="invoicetr">
					<td>Client Name:</td> 
					<td><?php echo $client->clientName ?></td>
					
				</tr>
				<tr class="invoicetr">
					<td><div>Address:</div>
					<td><div style="width:300px;word-break:break-word;"><?php echo ucwords($client->address) ?></div></td>
				</tr>
			</table>	
		</div>	
		<div style="float:right;margin-right:30px;">	
			<table class="tbleInvoice2">	
				<tr class="invoicetr">
					<td>Billing No.:</td>
					<td style="text-align:right;"><?php echo $invoice->invoiceNumber ?></td>
				</tr>	
				<tr class="invoicetr">
					<td>Billing Date:</td> 
					<td style="text-align:right;"><?php echo date('m/d/Y', strtotime($invoice->dateIssued)) ?></td>
				</tr>	
				<tr class="invoicetr">	
					<td>Ref. No.:</td>
					<td style="text-align:right;"><?php echo $invoice->pOSO ?></td>
				</tr>
				 <tr class="invoicetr">
                    <td >Discount <?php echo $invoice->discount > 0 ? 'In percent:' : 'In amount:' ?>:</td>
					<td>
						<span style="padding-left:20px;">
							<?php echo $invoice->discount > 0 ? $invoice->discount . '%' : Controller::getFloat($invoiceAmount->discountPesoAmount) ?>
						</span>
					</td>
                </tr>
				
			</table>
        </div>
		<div style="clear:both;"></div>
        <?php
        $discounttotal = $subtotal = $vattotal = 0;
        if (count($taskline) > 0) {
            ?>

            <div style="margin-top:24px;">	
                <table class="tblInvoice2">
                    <thead>
                        <tr class="newTblInv">
                            <th style="width:17%;background:#c8c8c8!important;border:1px solid #000!important;">Service Item</th>
                            <th style="width:30%;text-align:left;background:#c8c8c8!important;border:1px solid #000!important;">Particulars</th>
							<th style="text-align:center;width:7%;background:#c8c8c8!important;border:1px solid #000!important;">Qty</th>
                            <th style="width:14%;background:#c8c8c8!important;border:1px solid #000!important;">Amount</th>
                            <th style="width:10%;background:#c8c8c8!important;border:1px solid #000!important;">Discount</th>
                            <th style="width:16%;text-align:right;background:#c8c8c8!important;border:1px solid #000!important;">Net Amount</th>
                        </tr>
                    </thead>
                    <?php foreach ($taskline as $i => $task) { ?>
                        <?php
                        $tbltask = DAOFactory::getTblTaskDAO()->load($task->taskId);
                        ?>
                        <tr class="<?php echo ($i == count($taskline)) ? 'tblInvoicepaddingbottom' : '' ?>">
                            <td style="text-align:left;"><?php echo $tbltask->description ?></td>
                            <td style="text-align:left;"><?php echo $task->particular ?></td>
							<td style="text-align:center;"><?php echo $task->hour ?></td>
                            <td class=""><input type="text" readonly="readonly" class="numeric rateinvoice" value="<?php echo number_format((float) $task->rate, 2) ?>" style="text-align: right;margin-right: -2;width: 100%; border:none;font-size:12px;font-family:tahoma"></td>
                            <td class=""><input type="text" readonly="readonly" class="rateinvoice" value="<?php echo $task->discountLine ?>%" style="text-align: right;margin-right: -2;width: 100%; border:none;font-size:12px;font-family:tahoma"></td>
                            <td class=""><input type="text" readonly="readonly" class="numeric rateinvoice" value="<?php echo number_format((float) $task->netAmount, 2) ?>" style="text-align: right;margin-right: -2;width: 100%; border:none;font-size:12px;font-family:tahoma"></td>
                        </tr>
                    <?php } ?>
                </table>
            <?php } ?>

            <?php if (count($itemline) > 0) { ?>
                <table class="tblInvoice2Item">
                    <thead>
                        <tr class="newTblInv">
                            <th style="width:15%;">Item No.</th>
                            <th style="width:15%;">Quantity</th>
                            <th style="width:40%;">Description</th>
                            <th style="width:15%;">Unit Cost</th>
                            <th style="width:15%;">Amount</th>
                        </tr>
                    </thead>
                    <?php foreach ($itemline as $i => $item) { ?>
                        <?php
                        $tblitem = DAOFactory::getTblItemDAO()->load($item->itemId);
/*
                        $discountamt = $item->netAmount * $invoice->discount / 100;
                        $discount = $item->netAmount - $discountamt;
                        $discounttotal += $discountamt;
//                            $vat += $invoiceline->netAmount * DAOFactory::getTblTaxDAO()->load($tbltask->taxId)->rate / 100;

                        if ($client->vatInclusive == 'yes') {
                            $vat = DAOFactory::getTblTaxDAO()->load($client->taxId)->rate * $discount / 100;
                            $vattotal += $vat;
                            $subtotal += $item->netAmount - $vat;
                        } else {
                            $subtotal += $item->netAmount;
                        }
						*/
                        ?>
                        <tr  class="<?php ($i == count($itemline)) ? 'tblInvoicepaddingbottom' : '' ?>">
                            <td class=""><?php echo $item->itemCode ?></td>
                            <td class=""><?php echo $item->quantity ?></td>
                            <td class=""><?php echo $item->description ?></td>
                            <td class=""><input type="text" readonly="readonly" class="numeric rateinvoice" value="<?php echo number_format((float) $item->unitCost, 2) ?>" style="text-align: right;margin-right: 0;width: 100%; border:none;"></td>
                            <td class=""><input type="text" readonly="readonly" class="numeric rateinvoice" value="<?php echo number_format((float) $item->netAmount, 2) ?>" style="text-align: right;margin-right: 0;width: 100%; border:none;padding-right:6px;"></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>

        <?php } ?>
        <?php 
		// $total = TblNewInvoiceMySqlExtDAO::getTotal($invoice->id);
		?>
		<?php
				// $invoiceId = Session::getSession('invoiceid');
				$invoiceAmount = new TblInvoiceAmount();
			if($invoiceId != ''){
				// echo 'invoiceID = '.$invoiceId.' ---------';
				$invoice2 = DAOFactory::getTblAllInvoiceDAO()->queryByNewInvoiceId($invoiceId);
				$invoiceAmount = DAOFactory::getTblInvoiceAmountDAO()->queryByAllInvoiceId($invoice2[0]->id);
				$invoiceAmount = $invoiceAmount[0];
			}
			// print_R($invoiceAmount);
				$subTotal = $invoiceAmount->subTotalAmount == '' ? 0 : $invoiceAmount->subTotalAmount;
			?>
            <table class="tbl3Invoice2">
                <tr class="">
                    <td class="SAInvoice">Subtotal:</td>
                    <td>
						<input type="text" readonly="readonly" value="<?= Controller::getFloat($subTotal) ?>"
						 class="inputTotalInvoice numeric"/>
					</td>
                </tr>
			<?php
				$vattotal = $invoiceAmount->vatAmount == '' ? 0 : $invoiceAmount->vatAmount;
			?>
                <tr class="trTotalInvoices">
                    <td class="SAInvoice2">Vat:</td>
                    <td class="">
                        <input type="text" readonly="readonly" value="<?= Controller::getFloat($vattotal) ?>" class="inputTotalInvoice2 numeric">
					</td>
                </tr>
			<?php
				$discounttotal = $invoiceAmount->discountAmount == '' ? 0 : $invoiceAmount->discountAmount;
			?>
                <tr class="trTotalInvoices" style="border-bottom: 1px solid #000;">
                    <td class="SAInvoice2">Discount :</td>
                    <td class="">
						<input type="text" readonly="readonly" value="<?= Controller::getFloat($discounttotal) ?>" class="inputTotalInvoice2 numeric">
					</td>
                </tr>
			<?php
				$grandTotal = $invoiceAmount->grandTotal == '' ? 0 : $invoiceAmount->grandTotal;
			?>
                <tr class="trTotalInvoicesGr">
                    <td class="SAInvoice3" style="padding: 5px;">Total Billing:</td>
                    <td class="" id="">
						<input type="text" readonly="readonly" value="<?= Controller::getFloat($grandTotal) ?>" class="inputTotalInvoice3 numeric">
					</td>
                </tr>
            </table>
			<!--
        <table class="tbl3Invoice2">
            <tr>
                <td class="SAInvoice">Sales Amount:</td>
                <td><input type="text" readonly="readonly" value="<?php echo number_format((float) $subtotal, 2); ?>" class="inputTotalInvoice numeric"></td>
            </tr>
            <tr class="trTotalInvoices">
                <td class="SAInvoice2">Vat 12%:</td>
                <td><input type="text" readonly="readonly" value="<?php echo number_format((float) $vattotal, 2) ?>" class="inputTotalInvoice2 numeric"></td>
            </tr>
            <tr class="trTotalInvoices">
                <td class="SAInvoice2">Discount:</td>
                <td><input type="text" readonly="readonly" value="<?php echo number_format((float) $discounttotal, 2) ?>" class="inputTotalInvoice2 numeric"></td>
            </tr>
            <tr class="trTotalInvoicesGr">
                <td class="SAInvoice3">Grand Total:</td>
                <td><input type="text" readonly="readonly" value="<?php echo number_format((float) $subtotal + $vattotal - $discounttotal, 2) ?>" class="inputTotalInvoice3 numeric"></td>
            </tr>

        </table>-->
		<div style="clear:both;"></div>
        <div class="RemarksInvoice">REMARKS:</div>
        <div class="RemarkText" readonly ><?php echo $invoice->remarks ?></div>
		<div style="float:left;font-size:12px;font-family:Verdana;margin-left:15px;margin-top:47px;font-weight:bold;">"THIS DOCUMENT IS NOT VALID FOR CLAIMING INPUT TAXES"</div>
		<div style="float:right;color:#183867;font-family:Verdana;font-size:9px;margin-top:20px;" class="everyFooter">
			<div style="float:left;margin-top:29px;"><b>POWERED BY:</b></div>
			<div style="float:right;margin:11px 10px 0px 10px;"><img class="logo2a"src="<?= URL ?>public/images/usv_logo_long.png"></div>
			<div style="clear:both;"></div>
		</div>
		<div style="clear:both;"></div>
		
		<div class="divFooter">
			<div style="float:right;color:#183867;font-family:Verdana;font-size:9px;margin-top:20px;">
				<div style="float:left;margin-top:29px;"><b>POWERED BY:</b></div>
				<div style="float:right;margin:11px 10px 0px 10px;"><img class="logo2a"src="<?= URL ?>public/images/usv_logo_long.png"></div>
				<div style="clear:both;"></div>
			</div>
		</div>
		
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
        window.open(URL + 'invoice/pdfview?invoiceid='+invoiceid) 
                .done(function(returnData) {
                    
                })
                .fail(function() {
                    alert('Connection Error!');
                });
        return false;
    } 
</script>

<script>
$(function(){
	$("#imgInp").change(function() {
			fsize = this.files[0].size;
			$('input[name="hasFile"]').val('true');
			readURL(this);
		});
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e) {
					$('#imgprev').attr('src', e.target.result);
				}

				reader.readAsDataURL(input.files[0]);
			}
	}
});
</script>