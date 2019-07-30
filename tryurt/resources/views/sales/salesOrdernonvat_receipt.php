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
		width:713px !important;
	}
	.poRequest{
		display:none !important;
	}
	.tblInvoice2Item{
		width:713px !important;
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
}
</style>
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
		<?php 
			//print_r($client);
		?>
       <div id="newInvoicePrint" style="margin-top:34px!important;">SALES ORDER</div>
		<div style="float:left;">
			<table class="tbleInvoice">
				<tr class="invoicetr">
					<td>Sold To:</td> 
					<td><?php echo $client->clientName ?></td>
				</tr>
				<tr class="invoicetr">
					<td>TIN:</td> 
					<td><?php echo $client->tinNum ?></td>
				</tr>
				<tr class="invoicetr">
					<td><div style="margin-top:10px;">Address:</div>
					<td><div style="width:300px;word-break:break-word;position:absolute;"><?php echo ucwords($client->address) ?></div></td>
				</tr>
				<tr class="invoicetr">
					<td><div style="margin-top:10px;">Business Style:</div>
					<td><div style="width:300px;word-break:break-word;position:absolute;"><?php //echo ucwords($client->address) ?></div></td>
				</tr>
			</table>	
		</div>	
		<div style="float:right;margin-right:30px;">	
			<table class="tbleInvoice2">	
				<tr class="invoicetr">
					<td>Date:</td>
					<td style="text-align:right;"><?php echo date('m/d/Y', strtotime($invoice->dateIssued)) ?></td>
				</tr>	
				<tr class="invoicetr">
					<td>Terms:</td> 
					<td style="text-align:right;">
					<?php //echo $client->termsId ?>
					
					<?php
						$payment = DAOFactory::getTblPaymentTermsDAO()->load($client->termsId);
						echo ucwords($payment->paymentCode);
					// foreach ($client as $i => $client1) {
						// $payment = DAOFactory::getTblPaymentTermsDAO()->load($client[0]->termsId);
					// }
					?>
					
					
					
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
                            <th style="width:17%;background:#c8c8c8!important;border:1px solid #000!important;">Quantity</th>
                            <th style="width:30%;text-align:left;background:#c8c8c8!important;border:1px solid #000!important;">Unit</th>
							<th style="text-align:center;width:7%;background:#c8c8c8!important;border:1px solid #000!important;">Particular</th>
                            <th style="width:14%;background:#c8c8c8!important;border:1px solid #000!important;">Unit Price</th>
                            <th style="width:16%;text-align:right;background:#c8c8c8!important;border:1px solid #000!important;">Net Amount</th>
                        </tr>
                    </thead>
                    <?php foreach ($taskline as $i => $task) { ?>
                        <?php
                        $task1 = DAOFactory::getTblItemDAO()->load($taskline[0]->itemId);
						
                        ?>
                        <tr class="<?php echo ($i == count($taskline)) ? 'tblInvoicepaddingbottom' : '' ?>">
                            <td style="text-align:left;"><?php echo $task->qty ?></td>
                            <td style="text-align:left;">
								<?php
									$task1 = DAOFactory::getTblUomDAO()->load($task->uomId);
									echo ucwords($task1->abbreviation);
								?>
							</td>
							<td style="text-align:center;">
								<?php
									$task1 = DAOFactory::getTblItemDAO()->load($task->itemId);
									echo ucwords($task1->description);
								?>
							</td>
                            <td class=""><input type="text" readonly="readonly" class="numeric rateinvoice" value="<?php echo number_format((float) $task->unitPrice, 2) ?>" style="text-align: right;margin-right: -2;width: 100%; border:none;font-size:12px;font-family:tahoma"></td>
                            <td class=""><input type="text" readonly="readonly" class="numeric rateinvoice" value="<?php echo number_format((float) $task->netAmount, 2) ?>" style="text-align: right;margin-right: -2;width: 100%; border:none;font-size:12px;font-family:tahoma"></td>
                        </tr>
                    <?php } ?>
                </table>
            <?php } ?>

            <table class="tbl3Invoice2">
				<tr class="">
                    <td class="SAInvoice">Total Sales (Vat Inclusive):</td>
                    <td>
						<input type="text" readonly="readonly" value="<?php
									//$invoiceamountArray = explode('.', Controller::getFloat($invoiceamount->grandTotal, 2));
                                echo Controller::getFloat($invoiceamount->grandTotal, 2);
                                ?>"
						 class="inputTotalInvoice numeric"/>
					</td>
                </tr>
				<tr class="">
                    <td class="SAInvoice">Less:VAT</td>
                    <td>
						<input type="text" readonly="readonly" value="<?php
                                //$invoiceamountArray = explode('.', Controller::getFloat($invoiceamount->vatAmount));
                                echo Controller::getFloat($invoiceamount->vatAmount);
                                ?> "
						 class="inputTotalInvoice isNumeric"/>
					</td>
                </tr>
				<tr class="">
                    <td class="SAInvoice">Amount Net of VAT:</td>
                    <td>
						<input type="text" readonly="readonly" value="<?php
                                //$invoiceamountArray = explode('.', Controller::getFloat($invoiceamount->grandTotal - $invoiceamount->vatAmount));
                                echo Controller::getFloat($invoiceamount->grandTotal - $invoiceamount->vatAmount);
                                ?>"
						 class="inputTotalInvoice numeric"/>
					</td>
                </tr>
				<tr class="">
                    <td class="SAInvoice">Less:SC/PWD Discount:</td>
                    <td>
						<input type="text" readonly="readonly" value=""
						 class="inputTotalInvoice numeric"/>
					</td>
                </tr>
				<tr class="">
                    <td class="SAInvoice">Amount Due:</td>
                    <td>
						<input type="text" readonly="readonly" value=" <?php
                               // $invoiceamountArray = explode('.', Controller::getFloat($invoiceamount->grandTotal));
                                echo Controller::getFloat($invoiceamount->grandTotal);
                                ?> "
						 class="inputTotalInvoice numeric"/>
					</td>
                </tr>
				<tr class="">
                    <td class="SAInvoice">Add VAT:</td>
                    <td>
						<input type="text" readonly="readonly" value=" <?php
                                //$invoiceamountArray = explode('.', Controller::getFloat($invoiceamount->vatAmount));
                                echo Controller::getFloat($invoiceamount->vatAmount);
                                ?>"
						 class="inputTotalInvoice numeric"/>
					</td>
                </tr>
				<tr class="">
                    <td class="SAInvoice">Total Amount Due:</td>
                    <td>
						<input type="text" readonly="readonly" value="<?php
                                //$invoiceamountArray = explode('.', Controller::getFloat($invoiceamount->grandTotal));
                                echo Controller::getFloat($invoiceamount->grandTotal);
                                ?>"
						 class="inputTotalInvoice numeric"/>
					</td>
                </tr>
               
            </table>
		<div style="clear:both;"></div>
		<?php
		if ($atp->atpNo != '') {
			?>  

			<div class="regcontainer" style="font-family:Verdana;font-size:12px;padding-left: 10px;">
				<div>
					<a href="" class="birReg hidden"><?php echo $atp->bklts ?> Bklts (3x) <?php echo $atp->seriesFrom ?>-<?php echo $atp->seriesTo ?></a>
					<br>
					<a href="" class="birReg">BIR Authority to Print No. <?php echo $atp->atpNo ?></a>
					<br>
							<!--Date Issued <span style="text-decoration:underline;"><?php //echo date('m-d-Y', strtotime($atp->dateIssued));  ?>:--><span style="color:#000;"> Valid until</span> <?php echo date('m-d-Y', strtotime($atp->dateValidity)); ?> </span>
					<br>
					<?php echo $atp->name ?>
					<br>
					<?php echo $atp->address ?>
					<br>
					<!--TIN:<?php //echo $atp->tin  ?>-->

				</div>

				<div style="text-align:center;"><span class="official" style="font-weight:bold;">THIS OFFICIAL RECEIPT SHALL BE VALID FOR FIVE (5) YEARS FROM THE DATE OF ATP.</span></div>
				<?php // } ?>
			</div>

		<?php } else { ?>
			<div class="regcontainer" style="font-family:Verdana;font-size:12px;">
				<a href="" class="birReg" style="margin-left:15px;">Use of Official Receipt from Unlibooks needs BIR registration</a>
			</div>

			<?php
		}
		?>
		
        <!--<div class="RemarksInvoice">REMARKS:</div>
        <div class="RemarkText" readonly ><?php echo $invoice->remarks ?></div>-->
		<div style="float:left;font-size:12px;font-family:Verdana;margin-left:15px;margin-top:47px;font-weight:bold;font-style:italic" class="hidden"> "THIS INVOICE SHALL BE VALID FOR FIVE (5) YEARS FROM THE DATE OF ATP"</div>
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
	function viewpdf(invoiceid) {
        window.open(URL + 'sales/pdfview?salesorderid='+invoiceid);
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