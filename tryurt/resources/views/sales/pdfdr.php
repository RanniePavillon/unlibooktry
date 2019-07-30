<?php

//============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */
// Include the main TCPDF library (search for installation path).
//define ('PDF_HEADER_STRING', );

require_once('tcpdf/examples/tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
//$pdf->SetAuthor('Nicola Asuni');
//$pdf->SetTitle('TCPDF Example 001');
//$pdf->SetSubject('TCPDF Tutorial');
//$pdf->SetKeywords('TCPDF, PDF, example, test, guide');
// set default header data
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' 001', PDF_HEADER_STRING, array(0, 64, 255), array(0, 64, 128));
$header = getheader();
$logoSize = $header['logo'] != '' ? 40: 0;
//define(PDF_HEADER_LOGO, $header['logo']);
$pdf->SetHeaderData($header['logo'], $logoSize, $header['name'], $header['address'] ."\nTIN: ". $header['tin']. "\nPhone: " . $header['phone'] ."\nFax: ". $header['fax'], array(0, 0, 0), array(255, 255, 255));
// $pdf->SetHeaderData($header['logo'], 30, $header['name'], $header['address'] . "\nPhone: " . $header['phone'] ."\nFax". 'Fax: ' . $header['fax'], array(0, 64, 255), array(0, 64, 128));
$pdf->setFooterData(array(0, 64, 0), array(0, 64, 128));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
// $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetMargins(PDF_MARGIN_LEFT, 45, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(15);
// echo PDF_MARGIN_HEADER;
// exit;
// $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
// $pdf->SetAutoPageBreak(TRUE, 300);

// set image scale factor
// $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
// $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);


// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
    require_once(dirname(__FILE__) . '/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------
// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 14, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled' => true, 'depth_w' => 0.2, 'depth_h' => 0.2, 'color' => array(196, 196, 196), 'opacity' => 1, 'blend_mode' => 'Normal'));

//$data = '<table><tr><td>dfdf</td></tr></table>';
//echo $data; exit;
// Set some content to print
$data = data();
//echo $data; exit;
$html = <<<EOD
<style>
    .invoiceHolderInvoicePrint{
        width: 100%;
        margin-top: 50px;
		margin: auto;
    }
    .PaymentTypeFormInvoice{
        width: 805px;
        margin: auto;
        background-color: white;
    }
    #newInvoice{
        font-family: Tahoma;
        margin-left: 15px;
        font-weight: bold;
        font-size: 20px;
        margin-top: 55px;
        height: 27px;
        border: 1px solid black;
        width: 773px;
        text-align: center;
        font-style:normal;
    }

    .niInvoice{
        font-size: 30px;
    }
    .clogo{
        width: 500px;
        height: 30px;
        margin-top: -10px;
        margin-left: 10px;
        padding-top: 10px;
        font-size: 12px;
        font-family: Tahoma;
        text-shadow: none;
    }
    .clogoup{
        padding-left: 5px;
        width: 500px;
        height: 17px;
        margin-top: -42px;
        margin-left: 121px;
        font-size: 17px;
        font-family: Tahoma;
        font-weight: bold;
        text-shadow: none;
        color:#000000;
    }
    .clogoAdd{
        margin-left: 157px;
        width: 50px;
        font-size: 12px;
        font-family: Tahoma;
        text-shadow: none;
        font-weight: none;
    }
    .clogoAdd2{
        margin-left: 157px;
        width: 200px;
        font-size: 12px;
        font-family: Tahoma;
        text-shadow: none;
        font-weight: none;	
    }
    .invoicetr{
        font-size: 12px;
        font-family: Tahoma;
        text-shadow: none;
    }
    .tbleInvoice{
        margin-top: 15px;
        margin-left: 15px;
    }
    .tbleInvoice td{
        font-weight:normal;
    }
    .inputboxInvoiceTxt{
        height: 20px;
        margin-top: 0px;
        font-size: 12px;
        font-family: Tahoma;
        border: none;
        margin-left: -6px;
    }
    .inputboxInvoiceTxtIN{
        height: 20px;
        margin-top: 0px;
        font-size: 12px;
        font-family: Tahoma;
        border: none;
        margin-left: -6px;
        width:80px;
    }
    .inputboxInvoiceTxtID{
        height: 20px;
        margin-top: -1px;
        font-size: 12px;
        font-family: Tahoma;
        margin-left: -18px;
        border: none;
        margin:70px;
    }
    .inputboxInvoiceTxtDD{
        height: 20px;
        margin-top: -1px;
        font-size: 12px;
        font-family: Tahoma;
        margin-left: -35px;
        border: none;
    }
    .inputboxInvoiceTxtSO{
        height: 20px;
        margin-top: -1px;
        font-size: 12px;
        font-family: Tahoma;
        margin-left: -35px;
        border: none;
    }
    .inputboxInvoiceTxtDIS{
        height: 20px;
        margin-top: -1px;
        font-size: 12px;
        font-family: Tahoma;
        margin-left: -35px;
        border: none;
    }
    .particularInvoice{
        padding-top:35px;
    }
    .inputboxInvoiceTxt2 {
        margin-top: 1px;
        margin-left: -19px;
        font-family: Tahoma;
        font-size: 12px;
        margin-left: -30px;
        border: none;
    }
    .inputboxInvoiceTxtParticular{
        margin-top: 35px;
        margin-left: -19px;
        font-family: Tahoma;
        font-size: 12px;
        border: none;
    }
    .tbl2Invoice{
        margin-top: -102px;
		margin-left: 602px;
		border-collapse: collapse;
    }
    .tblInvoice2{
        border: 1px solid black;
		margin-top: 15px;
		padding-bottom: 30px;
		margin: auto;
		width: 773px;
    }
    .newTblInv{
        border-spacing: 0px;
    }
    .tblInvoicepaddingbottom td{
        padding-bottom:30px;
    }
    .tblInvoice2, th{
        text-align: left;
        border-spacing: 0px;
    }
    .tblInvoice2 th{
        border-bottom: 1px solid black;
        border-right: 1px solid black;	
        color: black;
        font-size: 12px;
        font-family:Tahoma;
        font-weight: bold;
        background-color: #C8C8C8;
        padding-left: 5px;
    }
    .tblInvoice2 td{
        /*border-bottom: 1px solid black;
        border-right: 1px solid black;	*/
        color: black;
        font-size: 12px;
        font-family:tahoma;
        font-weight: normal;
        padding-left: 5px;
    }
    .thInvoiceNew{
        border-bottom: 1px solid black;
        border-right: 1px solid black;	
        font-color: black;
        font-size: 14px;
        font-family: Tahoma;
        font-weight: bold;
        background-color: #C8C8C8;
        padding-left: 5px;
    }
    .thInvoiceNew2{
        border-bottom: 1px solid black;
        font-color: black;
        font-size: 14px;
        font-family: Tahoma;
        font-weight: bold;
        background-color: #C8C8C8;
        text-align: right;
        padding-right: 5px;
    }
    .thInvoiceNew3{
        border-bottom: 1px solid black;
        font-color: black;
        font-size: 14px;
        font-family: Tahoma;
        font-weight: bold;
        background-color: #C8C8C8;
        border-right: 1px solid black;	
        text-align: center;
        width: 888px;
    }
    .thInvoiceNew5{
        border-bottom: 1px solid black;
        font-color: black;
        font-size: 14px;
        font-family: Tahoma;
        font-weight: bold;
        background-color: #C8C8C8;
        border-right: 1px solid black;	
        text-align: center;
    }
    .thInvoiceNew4{
        border-bottom: 1px solid black;
        font-color: black;
        font-size: 14px;
        font-family: Tahoma;
        font-weight: bold;
        background-color: #C8C8C8;
        border-right: 1px solid black;	
        text-align: right;
        padding-right: 5px;
    }
    .boarderNew{
        background-color: white;
        font-weight: none;
        padding-left: 5px;
        font-size: 12px;
        font-family: Tahoma;
        padding-top: 5px;
    }
    .boarderNew2{
        background-color: white;
        font-weight: none;
        padding-left: 5px;
        text-align: center;
        font-size: 12px;
        font-family: Tahoma;
        padding-top: 5px;
    }
    .boarderNew3{
        background-color: white;
        font-weight: none;
        padding-right: 5px;
        text-align: right;
        font-size: 12px;
        font-family: Tahoma;
        padding-top: 5px;
    }
    .tbl2Invoice2{
        border: 1px solid black;
        margin-top: 20px;
        margin-left: 15px;
        padding-bottom: 30px;
        font-size: 12px;
        font-family:Tahoma;
        width: 96.1%;
    }
    .tbl2Invoice2, tr th{
        text-align: left;
        border-spacing: 0px;
        border-bottom: 1px solid black;
        border-right: 1px solid black;	
        font-color: black;
        font-size: 14px;
        font-family: Tahoma;
        font-weight: bold;
        background-color: #C8C8C8;
        padding-left: 5px;
        width: 19.3%;
    }
    .tbl3Invoice2{
        border: 1px solid black;
        margin-top: 20px;
        margin-left: 501px;
        width: 287px;
        border-collapse: collapse;

    }
    .SAInvoice{
        text-align: left;
        padding-left: 5px;
        font-size: 12px;
        font-family: Tahoma;
    }
    .SAInvoice2{
        text-align: left;
        font-size: 12px;
        font-family: Tahoma;
        padding:5px;
    }
    .SAInvoice3{
        text-align: left;
        padding-left: 5px;
        font-size: 12px;
        font-family: Tahoma;
        padding-top: -5px;
        font-weight: bold;
    }
    .inputTotalInvoice{
        width: 130px;
        margin-left: 56px;
        text-align: right;
        padding-right: 3px;
        font-size: 12px;
        font-family: Tahoma;
        border: none;
    }
    .inputTotalInvoice2{
        width: 130px;
        margin-left: 56px;
        text-align: right;
        padding-right: 3px;
        margin-top: -5px;
        font-size: 12px;
        font-family: Tahoma;
        border: none;
    }
    .inputTotalInvoice3{
        width: 130px;
        margin-left: 56px;
        text-align: right;
        padding-right: 3px;
        font-weight: bold;
        font-size: 12px;
        font-family: Tahoma;
        border-top: 1px solid black;
        border-left: none;
        border-right: none;
        border-bottom: none;
        box-shadow: none;
        background-color: #c8c8c8;
        margin-top:-1px;
    }
    .trTotalInvoices{
        margin-top: -5px;
    }
    .trTotalInvoicesGr{
        margin-top: -5px;
        background-color: #c8c8c8;
        border-spacing: 0px;

    }
    .RemarksInvoice{
        margin-top: 30px;
        margin-left: 15px;
        font-size: 12px;
        font-weight: bold;
        text-shadow: none;
        font-family: Tahoma;
    }
    .RemarkText{
        margin-left: 30px;
        width: 740px;
        height: 60px;
        margin-bottom: 20px;
        margin-top: 10px;
		font-family:tahoma;
		font-size:12px;
		padding:5px;
    }
    .closePrint{
        background-color: gray;
        color: white;
        border: none;
        border-radius: 2px;
        font-family: Cambria;
        font-style: bold;
        font-size: 16px;
        height: 25px;
        float:right;
        margin-right: -1px;
    }
    .tblInvoice2 tr th:nth-child(2){
        text-align: center;
    }
    .tblInvoice2 tr th:nth-child(4){
        text-align: right;
    }
    .tblInvoice2 tr th:nth-child(5){
        text-align: right;
    }
    .tblInvoice2 tr td:nth-child(2){
        text-align: center;
    }
    .tblInvoice2 tr td:nth-child(4){
        text-align: right;
    }
    .tblInvoice2 tr td:nth-child(5){
        text-align: right;
    }

    .tblInvoice2Item{
        border: 1px solid black;
        margin-top: 10px;
        margin-left: 15px;
        padding-bottom: 30px;
        width: 96.1%;
    }
    .newTblInv{
        border-spacing: 0px;
    }

    .tblInvoice2Item, th{
        text-align: left;
        border-spacing: 0px;
		margin: auto;
		margin-top: 15px;
		width: 773px;
    }
    .tblInvoice2Item th{
        border-bottom: 1px solid black;
        border-right: 1px solid black;	
        color: black;
        font-size: 12px;
        font-family: tahoma;
        font-weight: bold;
        background-color: #C8C8C8;
        padding-left: 5px;
        width: 19.3%;
    }

    .tblInvoice2Item tr th:nth-child(2){
        text-align: center;
    }
    .tblInvoice2Item tr th:nth-child(4){
        text-align: right;
    }
    .tblInvoice2Item tr th:nth-child(5){
        text-align: right;
    }
    .tblInvoice2Item tr td:nth-child(2){
        text-align: center;
    }
    .tblInvoice2Item tr td:nth-child(4){
        text-align: right;
    }
    .tblInvoice2Item tr td:nth-child(5){
        text-align: right;
    }
    .scplogoclass{
        width: 114px;
        height: 63px;
    }
    .addressLogo{
        color:#000000;
        font-size:12px;
		font-family:Arial, Helvetica, verdana, sans-serif, tahoma
    }
    .pdf{
        color: white;
        background-color: rgb(89,89,89);
        border: none;
        border-radius: 3px;
        padding: 3px 10px 3px 10px;
        margin-left: 650px;
        margin-top: 27px;
        box-shadow: 0px 0px 3px 1px gray;
        font-family: calibri;
        font-weight: bold;
        width: 47px;
        height: 25px;
    }
    .pdf2{
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
        margin-left:5px;
    }

    @media print {
        .mainbodyInvoice, #container, .mainBody, #footer, input[type=button] {
            display: none;
        }
        
        .Main{
            background: none;
        }
        
        .PaymentTypeFormInvoice{
            width: 100%;
        }
        .PaymentTypeFormInvoice{
            width: 805px;
        }
        
        .popBack{
            width: 100%;
            overflow: hidden;
            position: static;
            background-color: #fff;
            /*margin: 90px auto;*/
        }
        
        @page {
            size: landscape;
            margin: 0px;
        }
        thead   {display: table-header-group;   }
 
        tfoot   {display: table-footer-group;   }
    }
    
    @media screen{
        thead   {display: table-header-group;   }
 
        tfoot   {display: table-footer-group;   }
    }
</style>

        $data
EOD;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------
// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('invoice.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
exit;

function data() {
    $client = new TblClient();
    $invoice = new TblNewInvoice();
    $taskline = array();
    $itemline = array();
	$invoiceAmount = new TblInvoiceAmount();
    if (isset($_POST['invoiceid']) || isset($_GET['invoiceid'])) {
        $invoice = DAOFactory::getTblNewInvoiceDAO()->load(isset($_POST['invoiceid']) ? $_POST['invoiceid'] : $_GET['invoiceid']);
        $client = DAOFactory::getTblClientDAO()->load($invoice->clientId);
        $taskline = TblInvoiceLinesMySqlExtDAO::getTasks($invoice->id);
        $itemline = TblInvoiceLinesMySqlExtDAO::getItem($invoice->id);
//        return $_POST['invoiceid'];
    }
   /*  $data = '
            <div id="newInvoice">BILLING</div>

            <table class="tbleInvoice">
                <tr class="invoicetr">
                    <td>Client Name:</td>
                    <td>' . $client->clientName . '</td>
                </tr>
                <tr class="invoicetr">
                    <td>Address:</td>
                    <td>' . $client->address . '</td>
                </tr>
                <tr class="invoicetr">
                    <td class="particularInvoice">Particular:</td>
                    <td>' . $invoice->particular . '</td>
                </tr>
            </table>
            <table class="tbl2Invoice">
                <tr class="invoicetr">
                    <td>Billing Number:</td>
                    <td>' . $invoice->invoiceNumber . '</td>
                </tr>	
                <tr class="invoicetr">
                    <td>Date Issued:</td>
                    <td>' . $invoice->dateIssued . '</td>
                </tr>	
                <tr class="invoicetr">
                    <td>Due Date:</td>
                    <td>' . $invoice->dueDate . '</td>
                </tr>
                <tr class="invoicetr">
                    <td>P.O. / S.O:</td>
                    <td>' . $invoice->pOSO . '</td>
                </tr>
                <tr class="invoicetr">
                    <td>Discount:</td>
                    <td>' . $invoice->discount . '%</td>
                </tr>
            </table>'; */
			
		
	
  $data = '
			<br/>
			<div id="newInvoice" style="text-align:center;border:1px solid #000;">BILLING CHARGE</div>
			<br/>
			<br/>
			<table class="tbleInvoice" style="cellpadding:1px;" >
				<tr class="invoicetr">
					<td style="width:430px; font-size:12px; height:18px;">Client Name: ' . $client->clientName . '</td>
					<td style="height:18px;">Billing No.:</td>
					<td style="width:148px;"> ' . $invoice->invoiceNumber . '</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>	
				<tr class="invoicetr">
					<td style="width:430px; height:18px;">Address: ' . $client->address . '</td>
					<td style="width:123px;height:18px;">Billing Date:</td>
					<td style="">' . date('m/d/Y', strtotime($invoice->dateIssued)) . '</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr class="invoicetr">	
					<td class="particularInvoice" style="width:430px;height:18px;"></td>
					<td style="width:123px;height:18px;">Ref No.:</td>
					<td>' . $invoice->pOSO . '</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>	
				<tr class="invoicetr">	
					<td class="particularInvoice" style="width:430px;height:18px;"></td>
					<td style="width:123px;height:18px;">Discount:</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr class="invoicetr">	
					<td class="particularInvoice" style="width:308px;height:18px;"></td>
					<td style="width:153px;height:18px;"></td>
					<td>
						' . ($invoice->discount > 0 ? 'In percent:' : 'In amount:' ) . '
						<span style="padding-left:20px;">
							' . ($invoice->discount > 0 ? $invoice->discount . '%' : Controller::getFloat($invoiceAmount->discountPesoAmount)) . '
						</span>
					</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>
		'
		;			
			
			/* <tr class="invoicetr" style="nobr:true;">
				<td style="width:400px; font-size:12px; height:18px;">Client Name: ' . $client->clientName . '</td>
				<td style="width:145px;height:18px;">Billing Number:</td>
				<td style="text-align:right;width:90px;padding-right:5px;"> ' . $invoice->invoiceNumber . '</td>
			</tr>
			<tr class="invoicetr">
				<td class="particularInvoice" style="width:400px;height:18px;margin-top:-50px;"></td>
				<td style="width:145px;height:18px;">Billing Date:</td>
				<td style="text-align:right;width:85px;"> ' . date('m/d/Y', strtotime($invoice->dateIssued)) . '</td>
			</tr>
			<tr class="invoicetr">
				<td style="width:400px"></td>
				<td style="width:145px;height:18px;">Ref No:</td>
				<td style="text-align:right;width:85px;"> ' . $invoice->pOSO. '</td>
			</tr>
			<tr class="invoicetr" style="margin-top:-100px;">
				<td style="width:83px; height:18px;">Address:</td>
				<td style="width:207px;white-space:nowrap;">' . nl2br($client->address) . '</td>
				<td style="width:110px;"></td>
				<td style="width:145px;height:18px;">Discount:</td>
				<td style="text-align:right;width:85px;"> ' . $invoice->discount . '%</td>
			</tr> */
			
    $discounttotal = $subtotal = $vattotal = 0;
    if (count($taskline) > 0) {
        $data .= '<div style="margin-top:130px;" height=12px></div>' .
				'<br/>'.
				'<br/>'.
                ' <table class="tblInvoice2" style="border:solid 1px black;" cellpadding="4">
                        <thead>
                            <tr class="newTblInv">
                                <th style="width:20%;border:solid 1px black;font-family:Tahoma;">Service Item</th>
                                <th style="width:30%;border:solid 1px black;text-align:left;">Particulars</th>
                                <th style="width:7%;border:solid 1px black;text-align:center;">Qty</th>
                                <th style="width:15%;border:solid 1px black;text-align:right">Amount</th>
                                <th style="width:12%;border:solid 1px black;text-align:right">Discount</th>
                                <th style="width:16%;border:solid 1px black; text-align:right">Net Amount</th>
                            </tr>
                        </thead>';
        foreach ($taskline as $i => $task) {

            $tbltask = DAOFactory::getTblTaskDAO()->load($task->taskId);

            $discountamt = $task->netAmount * $invoice->discount / 100;
            $discount = $task->netAmount - $discountamt;
            $discounttotal += $discountamt;
//         $vat += $invoiceline->netAmount * DAOFactory::getTblTaxDAO()->load($tbltask->taxId)->rate / 100;

            // if ($client->vatInclusive == 'yes') {
                // $vat = DAOFactory::getTblTaxDAO()->load($client->taxId)->rate * $discount / 100;
                // $subtotal += $task->netAmount - $vat;
                // $vattotal += $vat;
            // } else {
                $subtotal += $task->netAmount;
            // }

            $data .='           <tr >' .
                    '<td style="width:20%; height:20px; padding:5px;text-align:left;">' . $tbltask->description . '</td>' .
                    '<td style="width:30%; height:20px; padding:5px;text-align:left;">' . $task->particular . '</td>' .
					'<td style="width:7%; height:20px; padding:5px;text-align:center;">' . $task->hour . '</td>' .
                    '<td style="width:15%; height:20px; padding:5px;text-align:right;">' . number_format((float) $task->rate, 2) . '</td>' .
                    '<td style="width:12%; height:20px; padding:5px;text-align:right;">' . $task->discountLine . '%</td>' .
                    '<td style="width:16%; height:20px; padding:5px;text-align:right;">' . number_format((float) $task->netAmount, 2) . '</td>' .
                    '</tr>';
        }
        $data .='       </table>';
    }
/* 
    if (count($itemline) > 0) {
        $data .='<div height=12px></div>' .
                '      <table class="tblInvoice2" style="border:solid 1px black;" cellpadding="4">
                        <thead>
                            <tr class="newTblInv">
                                <th style="width:15%; height:23px;border:solid 1px black;">Item No.</th>
                                <th style="width:15%; height:23px;border:solid 1px black;">Quantity</th>
                                <th style="width:40%; height:23px;border:solid 1px black;">Description</th>
                                <th style="width:15%; height:23px;border:solid 1px black;text-align:right">Unit Cost</th>
                                <th style="width:15%; height:23px;border:solid 1px black;text-align:right">Amount</th>
                            </tr>
                        </thead>';
        foreach ($itemline as $i => $item) {

            $tblitem = DAOFactory::getTblItemDAO()->load($item->itemId);

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

            $data .='                <tr >' .
                    '<td style="width:15%; height:20px; padding:5px;" class="">' . $item->itemCode . '</td>' .
                    '<td style="width:15%; height:20px; padding:5px;text-align:center;" class="">' . $item->quantity . '</td>' .
                    '<td style="width:40%; height:20px; padding:5px;" class="">' . $item->description . '</td>' .
                    '<td style="width:15%; height:20px; padding:5px;text-align:right;" class="">' . number_format((float) $item->unitCost, 2) . '</td>' .
                    '<td style="width:15%; height:20px; padding:5px;text-align:right;" class="">' . number_format((float) $item->netAmount, 2) . '</td>' .
                    '</tr>';
        }
        $data .= '</table> <br> <br>';
    }
	 */
    $total = TblNewInvoiceMySqlExtDAO::getTotal($invoice->id);
	$allInv = DAOFactory::getTblAllInvoiceDAO()->queryByNewInvoiceId($invoice->id);
	$inv = DAOFactory::getTblInvoiceAmountDAO()->queryByAllInvoiceId($allInv[0]->id);
	$vattotal = $inv[0]->vatAmount;
	$discounttotal =  $inv[0]->discountAmount;
	$subtotal =  $inv[0]->subTotalAmount;
	$header = getheader();
	
    $data .= '<br/>'.
			'<br/>'.
			'<br/>'.
			'<table cellpadding="4";>' .
				'<tr>' .
					'<td class="" style="font-size:12px;height:18px;width:333px; border:none;" cellpadding="4";></td>' .
					'<td class="SAInvoice" style="font-size:12px;height:18px;width:130px; border-top:solid 1px black;border-left:solid 1px black;padding:5px;" cellpadding="4";>&nbsp; Subtotal:</td>' .
					'<td style="font-size:12px;height:18px;text-align:right; width:160px; border:none; border-top:solid 1px black;" cellpadding="4">' . number_format((float) $subtotal, 2) . '</td>' .
					'<td class="" style="font-size:12px;height:18px;width:7px; border-right:solid 1px black;border-top:solid 1px black;" cellpadding="4";></td>' .
				'</tr>' .
				
				'<tr class="trTotalInvoices">' .
					'<td class="" style="font-size:12px;height:18px;" cellpadding="4";border:none;;></td>' .	
					'<td class="SAInvoice2" style="border-left:solid 1px black;padding:5px;" cellpadding="4">&nbsp; Vat:</td>' .
					'<td style="font-size:12px;height:18px;text-align:right;border:none;">' . number_format((float) $vattotal, 2) . '</td>' .
					'<td class="" style="font-size:12px;height:18px;width:7px; border-right:solid 1px black;" cellpadding="4";></td>' .
				'</tr>' .
				'<tr class="trTotalInvoices">' .
					'<td class="" style="font-size:12px;height:18px;" cellpadding="4";border:none;></td>' .
					'<td class="SAInvoice2" style="border-left:solid 1px black;border-bottom:solid 1px black;padding:5px;" cellpadding="4">&nbsp; Discount:</td>' .
					'<td style="font-size:12px;height:18px;text-align:right; border:none;">' . number_format((float) $discounttotal, 2) . '</td>' .
					'<td class="" style="font-size:12px;height:18px;width:7px; border-right:solid 1px black;" cellpadding="4";></td>' .
				'</tr>' .
				
				'<tr class="" cellpadding="4">' .
					'<td class="" style="font-size:12px;height:18px;cellpadding="4";border:none;" ></td>' .
					'<td class="SAInvoice3" cellpadding="4" style="border-left:solid 1px black;border-bottom:solid 1px black;background-color: #C8C8C8;padding-left:5px;" cellpadding="4">&nbsp;Total Billing:</td>' .
					'<td style="font-size:12px;height:18px;text-align:right;border-bottom:solid 1px black;background-color: #C8C8C8;cellpadding=4; border-top:solid 1px black; border-bottom:solid 1px black ">' . number_format((float) $subtotal + $vattotal - $discounttotal, 2) . '</td>' .
					'<td class="" style="font-size:12px;height:18px;width:7px;border-right:solid 1px black;border-bottom:solid 1px black;background-color: #C8C8C8;border-top:solid 1px black;" cellpadding="4";></td>' .
				'</tr>' .
			 '<tr class="" cellpadding="4">' .
				 '<br/>'.
				'<td class="" style="font-size:12px;height:18px;" cellpadding="4";>REMARKS:</td>' .
				'<td class="SAInvoice3" cellpadding="4"></td>' .
				'<td style="font-size:12px;height:18px;" cellpadding="4"></td>' .
            '</tr>' .
			'<br/>'.
            '<tr cellpadding="4">' .
				'<td colspan="4" style="
					padding:40px 10px;
					font-size:12px;
					width:400px;
					border:none;
					height:100px;">'
					. nl2br($invoice->remarks) .
				'</td>'.
            '</tr>' .
			
			'<tr>' .
				'<td style="font-size:12px;" width="378">"This document is not valid for claiming input taxes"</td>' .
				'<td style="width:325px;font-family:Verdana;font-size:9px;font-weight:bold;color:#183867;">
					<img src="public/images/pwrdBy.png"  
					style="position:absolute !important;margin-top:30px !important;"
					 width="120" height="40">
					 <img src="public/images/usv_logo_long.png"  
					style="position:absolute !important;margin-top:30px !important;"
					 width="120" height="40">
				</td>' .
            '</tr>' .
            '</table>';
			/* <img src="<? =URL ?>public/images/serviceNewLogo.jpg"  width="50" height="50"> */
		
    return $data;
	
}
/* 
	white-space: -moz-pre-wrap !important; 
white-space: -webkit-pre-wrap;
white-space: -pre-wrap;    
white-space: -o-pre-wrap;
 */
function getheader() {
	
    $company = DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('infoid'));

    $logoexist = '';
    if (file_exists("public/companylogo/" .DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('infoid'))->logoName)) {
        $logoexist = 'existt';
    }
    
    $array = array("logo" =>($logoexist != '') ? DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('infoid'))->logoName : '',
        "name" => DAOFactory::getTblOrganizationDAO()->load(Session::getSession("orgid"))->orgName,
        "address" => $company->address, "phone" => $company->phoneNum, "fax" => $company->faxNum, "tin" =>$company->tinNum);

    return $array;
}
