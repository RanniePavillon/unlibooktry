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
$logoSize = $header['logo'] != '' ? 40 : 0;
//define(PDF_HEADER_LOGO, $header['logo']);
$pdf->SetHeaderData($header['logo'], $logoSize, $header['name'], $header['address'] . "\nTIN: " . $header['tin'] . "\nPhone: " . $header['phone'] . "\nFax: " . $header['fax'], array(0, 0, 0), array(255, 255, 255));
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
$css = file_get_contents('views/sales/pdf/pdf.css');

$html = <<<EOD
<style>
    $css
</style>
        
        $data
EOD;
// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------
// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('salesreturn.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
exit;

function data() {
    $_POST['invoiceid'] = $_GET['salesreturnid'];

    $client = new TblClient();
    $invoice = new TblSalesReturn();
    $taskline = array();
    
    $invoiceAmount = new TblSalesReturnAmount();
    if (isset($_POST['invoiceid'])) {
        $invoice = DAOFactory::getTblSalesReturnDAO()->load($_POST['invoiceid']);
        $client = DAOFactory::getTblClientDAO()->load($invoice->clientId);
        $taskline = DAOFactory::getTblSalesReturnLinesDAO()->queryBySalesReturnId($invoice->id);
//        $itemline = TblInvoiceLinesMySqlExtDAO::getItem($invoice->id);
//        return $_POST['invoiceid'];

       
        $invoiceAmt = DAOFactory::getTblSalesReturnAmountDAO()->queryBySalesReturnId($invoice->id);
        $invoiceAmount = $invoiceAmt[0];
        
        $payment = DAOFactory::getTblPaymentTermsDAO()->load($client->termsId);
    }



    $data = '
			<br>
			<div id="newInvoice" style="text-align:center;border:1px solid #000;">SALES RETURN</div>
			<br/>
			<table class="tbleInvoice" style="cellpadding:1px;" >
				<tr class="invoicetr">
					<td style="width:430px; font-size:12px; height:18px;">Sold To: ' . $client->clientName . '</td>
					<td style="height:18px;">Date:</td>
					<td style="width:148px;"> ' . date('m/d/Y', strtotime($invoice->dateIssued)) . '</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>	
				<tr class="invoicetr">
					<td style="width:430px; font-size:12px; height:18px;">TIN: ' . $client->tinNum . '</td>
					<td style="height:18px;">Terms:</td>
					<td style="width:148px;"> ' . ucwords($payment->paymentCode). '</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>	
				<tr class="invoicetr">
					<td style="width:430px; height:18px;">Address: ' . $client->address . '</td>
					<td style="width:123px;height:18px;"></td>
					<td style=""></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				
			</table>
		'
    ;
    
    $discounttotal = $subtotal = $vattotal = 0;
    if (count($taskline) > 0) {
        $data .= '<div style="margin-top:130px;" height=12px></div>' .
                
                ' <table class="tblInvoice2" style="border:solid 1px black;" cellpadding="4">
                        <thead>
                            <tr class="newTblInv">
								<th style="width:35%;border:solid 1px black;text-align:left;">Particular</th>
                                <th style="width:15%;border:solid 1px black;font-family:Tahoma;text-align:center">Returned Quantity</th>
                                <th style="width:10%;border:solid 1px black;text-align:center;">Unit</th>
                                <th style="width:20%;border:solid 1px black;text-align:right">Unit Price</th>
                                <th style="width:20%;border:solid 1px black; text-align:right">Net Amount</th>
                            </tr>
                        </thead>';
        foreach ($taskline as $i => $task) {

            $tbltask = DAOFactory::getTblItemDAO()->load($task->itemId);
            $uom = DAOFactory::getTblUomDAO()->load($task->uomId);
            $discountamt = $task->netAmount * $invoice->discount / 100;
            $discount = $task->netAmount - $discountamt;
            $discounttotal += $discountamt;
            $subtotal += $task->netAmount;

            $data .='           <tr >' .
					'<td style="width:35%; height:20px; padding:5px;text-align:left;">' . $task->itemDescription . '</td>' .
                    '<td style="width:15%; height:20px; padding:5px;text-align:center;">' . $task->returnQty . '</td>' .
                    '<td style="width:10%; height:20px; padding:5px;text-align:center;">' . $uom->abbreviation . '</td>' .
                    '<td style="width:20%; height:20px; padding:5px;text-align:right;">' . number_format((float) $task->unitPrice, 2) . '</td>' .
                    '<td style="width:20%; height:20px; padding:5px;text-align:right;">' . number_format((float) $task->netAmount, 2) . '</td>' .
                    '</tr>';
        }
        $data .='       </table>';
    }
    
    $vattotal = $invoiceAmount->vatAmount;
    $discounttotal = $invoiceAmount->discountAmount;
    $subtotal = $invoiceAmount->subTotalAmount;
    $header = getheader();

    $data .= '<br/>' .
            '<br/>' .
            '<br/>' .
            '<table cellpadding="4";>' .
            '<tr>' .
            '<td class="" style="font-size:12px;height:18px;width:279px; border:none;" cellpadding="4";></td>' .
            '<td class="SAInvoice" style="font-size:12px;height:18px;width:190px; border-top:solid 1px black;border-left:solid 1px black;padding:5px;" cellpadding="4";>&nbsp; Total Sales (Vat Inclusive):</td>' .
            '<td style="font-size:12px;height:18px;text-align:right; width:160px; border:none; border-top:solid 1px black;" cellpadding="4">' . number_format((float) $subtotal + $vattotal - $discounttotal, 2) . '</td>' .
            '<td class="" style="font-size:12px;height:18px;width:2px; border-right:solid 1px black;border-top:solid 1px black;" cellpadding="4";></td>' .
            '</tr>' .
			'<tr class="trTotalInvoices">' .
            '<td class="" style="font-size:12px;height:18px;" cellpadding="4";border:none;;></td>' .
            '<td class="SAInvoice2" style="border-left:solid 1px black;padding:5px;" cellpadding="4">&nbsp; Less:VAT:</td>' .
            '<td style="font-size:12px;height:18px;text-align:right;border:none;">' . number_format((float) $vattotal, 2) . '</td>' .
            '<td class="" style="font-size:12px;height:18px;width:2px; border-right:solid 1px black;" cellpadding="4";></td>' .
            '</tr>' .
			'<tr class="trTotalInvoices">' .
            '<td class="" style="font-size:12px;height:18px;" cellpadding="4";border:none;;></td>' .
            '<td class="SAInvoice2" style="border-left:solid 1px black;padding:5px;" cellpadding="4">&nbsp; Amount Net of VAT:</td>' .
            '<td style="font-size:12px;height:18px;text-align:right;border:none;">' . number_format((float) ($subtotal), 2) . '</td>' .
            '<td class="" style="font-size:12px;height:18px;width:2px; border-right:solid 1px black;" cellpadding="4";></td>' .
            '</tr>' .
			'<tr class="trTotalInvoices">' .
            '<td class="" style="font-size:12px;height:18px;" cellpadding="4";border:none;;></td>' .
            '<td class="SAInvoice2" style="border-left:solid 1px black;padding:5px;" cellpadding="4">&nbsp; Less:SC/PWD Discount:</td>' .
            '<td style="font-size:12px;height:18px;text-align:right;border:none;"></td>' .
            '<td class="" style="font-size:12px;height:18px;width:2px; border-right:solid 1px black;" cellpadding="4";></td>' .
            '</tr>' .
			'<tr class="trTotalInvoices">' .
            '<td class="" style="font-size:12px;height:18px;" cellpadding="4";border:none;;></td>' .
            '<td class="SAInvoice2" style="border-left:solid 1px black;padding:5px;" cellpadding="4">&nbsp; Amount Due:</td>' .
            '<td style="font-size:12px;height:18px;text-align:right;border:none;">' . number_format((float) ($subtotal), 2) . '</td>' .
            '<td class="" style="font-size:12px;height:18px;width:2px; border-right:solid 1px black;" cellpadding="4";></td>' .
            '</tr>' .
			'<tr class="trTotalInvoices">' .
            '<td class="" style="font-size:12px;height:18px;" cellpadding="4";border:none;;></td>' .
            '<td class="SAInvoice2" style="border-left:solid 1px black;padding:5px;" cellpadding="4">&nbsp; Add VAT:</td>' .
            '<td style="font-size:12px;height:18px;text-align:right;border:none;">' . number_format((float) $vattotal, 2) . '</td>' .
            '<td class="" style="font-size:12px;height:18px;width:2px; border-right:solid 1px black;" cellpadding="4";></td>' .
            '</tr>' .
            '<tr class="" cellpadding="4">' .
            '<td class="" style="font-size:12px;height:18px;cellpadding="4";border:none;" ></td>' .
            '<td class="SAInvoice3" cellpadding="4" style="border-left:solid 1px black;border-bottom:solid 1px black;background-color: #C8C8C8;padding-left:5px;" cellpadding="4">&nbsp;Total Amount Due:</td>' .
            '<td style="font-size:12px;height:18px;text-align:right;border-bottom:solid 1px black;background-color: #C8C8C8;cellpadding=4; border-top:solid 1px black; border-bottom:solid 1px black ">' . number_format((float) $subtotal + $vattotal - $discounttotal, 2) . '</td>' .
            '<td class="" style="font-size:12px;height:18px;width:2px;border-right:solid 1px black;border-bottom:solid 1px black;background-color: #C8C8C8;border-top:solid 1px black;" cellpadding="4";></td>' .
            '</tr>' .
            '<br/>' .
            '<tr cellpadding="4">' .
            '<td colspan="4" style="
					padding:40px 10px;
					font-size:12px;
					width:400px;
					border:none;
					height:100px;">'
            .
            '</td>' .
            '</tr>' .
            '<tr>' .
            '<td style="font-size:12px;" width="378"></td>' .
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
    if (file_exists("public/companylogo/" . DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('infoid'))->logoName)) {
        $logoexist = 'existt';
    }

    $array = array("logo" => ($logoexist != '') ? DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('infoid'))->logoName : '',
        "name" => DAOFactory::getTblOrganizationDAO()->load(Session::getSession("orgid"))->orgName,
        "address" => $company->address, "phone" => $company->phoneNum, "fax" => $company->faxNum, "tin" => $company->tinNum);

    return $array;
}
