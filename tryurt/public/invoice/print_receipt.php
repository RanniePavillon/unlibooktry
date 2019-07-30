<style>
.receiptform{
	width:100%;
}
.formreceipt{
	width:674px;
	margin:auto;
	margin-top:25px;
	background-color:#fff;
	font-family:verdana;
	font-size:12px;
	padding-bottom: 61px;
}
.clogo{
	text-align:center;
	font-weight:bold;
	font-family:verdana;
	font-size:12px;
	padding-top:25px;
}
.of{
	width:98%;
	text-align:center;
	font-weight:bold;
	font-size:16px;
	margin-top:69px;
}
.oftable{
	border:solid 1px #000;
	width:90%;
	margin:auto;
	margin-top:30px;
	margin-bottom:20px;
}
.oftable td{
	border:solid 1px #000;
	padding:5px;
	font-family:verdana;
	font-size:12px;
}
.hrreceipt{
	border:none;
	border-bottom:solid 1px #000;
	margin-top:10px;
	width: 192px;
}
.bybelow{
	width: 192px;
	float: right;
	margin-right: 36px;
}
.receiptno{
	float: right;
	margin-top: -18px;
	font-weight: bold;
	margin-right: 35px;
}
.receiptnotext{
	font-weight:bold;
	width: 43px;
}
.closeCNTs{
	font-size:24px;
	font-family: Verdana;
	font-weight: bold;
	background:none;
	border:none;
}
.pdf {
  color: white;
  background-color: rgb(89,89,89);
  border: none;
  border-radius: 3px;
  padding: 3px 10px 3px 10px;
  margin-left: 550px;
  /* margin-top: 27px; */
  box-shadow: 0px 0px 3px 1px gray;
  font-family: calibri;
  font-weight: bold;
  width: 47px;
  height: 25px;
}
.pdf2 {
  color: white;
  background-color: rgb(89,89,89);
  border: none;
  border-radius: 3px;
  padding: 3px 10px 3px 10px;
  box-shadow: 0px 0px 3px 1px gray;
  font-family: calibri;
  font-weight: bold;
  width: 47px;
  height: 25px;
  margin-left: 5px;
}
</style>
<?php
$client = new TblClient();
$invoice = new TblNewInvoice();
$taskline = array();
$itemline = array();
// $_POST['invoiceid'];
// echo Session::getSession('orgid');
$invoiceId = Session::getSession('invoiceid') ? Session::getSession('invoiceid') : $_POST['invoiceid'];
// echo 'session = ' . Session::getSession('invoice_id');
// echo '<br/>';
// echo 'posted = ' . $_POST['invoiceid'];
// echo '<br/>';
// echo 'invoice id = ' . $invoiceId;
// exit;
if ($invoiceId) {
	
    $invoice = DAOFactory::getTblNewCashInvoiceDAO()->load($invoiceId);
    $client = DAOFactory::getTblClientDAO()->load($invoice->clientId);
    $taskline = TblCashInvoiceLinesMySqlExtDAO::getTasks($invoice->id);
    // $itemline = TblInvoiceLinesMySqlExtDAO::getItem($invoice->id);
	Session::setSession('invoiceid',false);
	Session::setSession('status',false);
}

$invoiceAllCash = DAOFactory::getTblAllCashInvoiceDAO()->queryByNewCashInvoiceId($invoice->id);
$taskAmount = DAOFactory::getTblCashInvoiceAmountDAO()->queryByAllCashInvoiceId($invoiceAllCash[0]->id);

$company = DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('infoid'));
?>


<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<div class="receiptform">
	<div class="formreceipt">
		<div style="float:right;"><input type="button" class="closeCNTs popx" value="x"></div>
		 <div class="clogo">
            <!--<div><img class="scplogoclass"  src="/unlibooks/public/companylogo/<?php echo Session::getSession('orgid') ?>"></div>-->
            <div class="clogoup" style="float:left;margin-left:244px;"><span style="font-size:16px;"><?php echo DAOFactory::getTblOrganizationDAO()->load(Session::getSession('orgid'))->orgName ?></span><br><span class="addressLogo"><?php echo $company->address ?></span><br><span class="addressLogo">TIN: <?php echo $company->tinNum ?></span></div>
        </div>
		<input type="button" class="pdf" value="PDF" onclick="window.print();">
		<input type="button" class="pdf2" value="Print" onclick="window.print();">
		
		<div class="of">OFFICIAL RECEIPT</div>
<?php if($invoice->status == 'posted'){ ?>
		<div class="receiptno">No. <?= $invoice->invoiceNumber ?></div>
		<div>
			<table class="oftable">
				<tr>
					<td>Received from: <?php echo $client->clientName ?></td>
					<td>P.R: <?= $invoice->pOSO ?></td>
				</tr>
				<tr>
					<td>Address: <?php echo $client->address ?></td>
					<td>Date: <?php echo $invoice->dateIssued ?></td>
				</tr>
				 <?php foreach ($taskAmount as $i => $task) { ?>
                    <?php
                        // $tbltask = DAOFactory::getTblTaskDAO()->load($task->taskId);
					?>
				<tr>
					<td>Amount in Words:  <br/><b><?= inwords::convert_number_to_words($task->grandTotal); ?> only</b></td>
					<td colspan="3" style="border-bottom: none;">Amount: <br/><b>Php <?= Controller::getFloat($task->grandTotal); ?> </b></td>
				</tr>
				
				<tr>
					<td style="border:none;"></td>
					<td style="border:none;border-right: solid 1px #000;border-left:solid 1px #000;"></td>
				</tr>
				<tr>
					<td style="height: 66px;">Particulars: <?php echo $invoice->particular ?></td>
					<td style="border-top: none;"></td>
				</tr>
				<tr>
					<td>Check:</td>
					<td>Total Amount: <b>Php <?php echo number_format((float) $task->grandTotal, 2) ?></b></td>
				</tr>
				<?php } ?>
				<tr>
					<td>Cash:</td>
					<td></td>
				</tr>
			</table>
			<div class="bybelow">
				By:<br><br>
				<hr class="hrreceipt">
			</div>
		</div>
<?php
} else {
?>
<div style="text-align: center;">
	<h1>
		Receipt not available.
	</h1>
</div>
<?php } ?>
	</div>
</div>

<script>
	$(function(){
		$('body').css('overflow','auto');
		$('body').css('overflow','hidden');
	})
</script>
