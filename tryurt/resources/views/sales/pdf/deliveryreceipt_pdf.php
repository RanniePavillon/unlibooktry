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
$pdf->Output('deliveryreceipt.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
exit;

function data() {
    $_POST['invoiceid'] = $_GET['deliveryreceiptid'];

    $client = new TblClient();
    $invoice = new TblDeliveryReceipt();
    $taskline = array();
    
    $invoiceAmount = new TblDeliveryReceiptAmount();
    if (isset($_POST['invoiceid'])) {
        $invoice = DAOFactory::getTblDeliveryReceiptDAO()->load($_POST['invoiceid']);
        $client = DAOFactory::getTblClientDAO()->load($invoice->clientId);
		
        $taskline = DAOFactory::getTblDeliveryReceiptLinesDAO()->queryByDeliveryReceiptId($invoice->id);
//        $itemline = TblInvoiceLinesMySqlExtDAO::getItem($invoice->id);
//        return $_POST['invoiceid'];

       
        $invoiceAmt = DAOFactory::getTblDeliveryReceiptAmountDAO()->queryByDeliveryReceiptId($invoice->id);
        $invoiceAmount = $invoiceAmt[0];
        
        $payment = DAOFactory::getTblPaymentTermsDAO()->load($client->termsId);
    }



    $data = '
			<br>
			<div id="newInvoice" style="text-align:center;border:1px solid #000;">DELIVERY RECEIPT</div>
			<br/>
			<table class="tbleInvoice" style="cellpadding:1px;" >
				<tr class="invoicetr">
					<td style="width:400px; font-size:12px; height:18px;">Sold To: ' . $client->clientName . '</td>
					<td style="height:18px;width:130px;">Delivery Date:</td>
					<td style="width:148px;">'. date('m/d/Y', strtotime($invoice->dateIssued)) . ' </td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>	
				<tr class="invoicetr">
					<td style="width:400px; font-size:12px; height:18px;">TIN: ' . $client->tinNum . '</td>
					<td style="height:18px;">DR No.:</td>
					<td style="width:148px;">'. $invoice->deliveryReceiptNo .'</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>	
				<tr class="invoicetr">
					<td style="width:400px; height:18px;">Address: ' . $client->address . '</td>
					<td style="height:18px;">SO No.:</td>
					<td style="width:148px;">'. DAOFactory::getTblSalesOrderDAO()->load($invoice->salesOrderId)->salesOrderNo .'</td>
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
        $data .= '<div style="margin-top:20px;" height=12px></div>' .
                ' <table class="tblInvoice2" style="border:solid 1px black;" cellpadding="4">
                        <thead>
                            <tr class="newTblInv">
                                <th style="width:50%;border:solid 1px black;font-family:Tahoma;">Item Description</th>
                                <th style="width:10%;border:solid 1px black;text-align:center;">UOM</th>
                                <th style="width:40%;border:solid 1px black;text-align:center;">Quantity</th>
                            </tr>
                        </thead>';
        foreach ($taskline as $i => $task) {

            $tbltask = DAOFactory::getTblItemDAO()->load($task->itemId);
            $uom = DAOFactory::getTblUomDAO()->load($task->uomId);
            $discountamt = $task->netAmount * $invoice->disc / 100;
            $discount = $task->netAmount - $discountamt;
            $discounttotal += $discountamt;
            $subtotal += $task->netAmount;
			$driver = DAOFactory::getTblDriverDAO()->load($invoice->driverId);

            $data .='           <tr >' .
                    '<td style="width:50%; height:20px; padding:5px;text-align:left;">' . $task->itemDescription . '</td>' .
                    '<td style="width:10%; height:20px; padding:5px;text-align:center;">' . $uom->abbreviation . '</td>' .
                    '<td style="width:40%; height:20px; padding:5px;text-align:center;">' . $task->qty . '</td>' .
                    '</tr>';
        }
        $data .='       </table>';
    }
	
		$data .= '<br>'.
				  '<br>'.
				'<div style="margin-top:20px;font-size:12px;" height=12px>"For Official Use Only"</div>' .
				 '<br>'.
                ' <table class="tblInvoice2" style="">
                        <thead>
						
							<tr class="">
                                 <td class="" style="width:16%;">Prepared By:</td>
								 <td class="" style="border-bottom:solid 1px black;width:25%"></td>
								 <td style="width:6%"></td>
								 <td class="" style="width:29%;padding-left:12%;">Delivered By:</td>
								 <td class="" style="border-bottom:solid 1px black;width:23%;text-align:center;">'.$driver->driverName.'</td>
                            </tr>
							<tr class="">
                                 <td class="" style="width:16%;"></td>
								 <td class=""></td>
								 <td style="width:6%"></td>
								 <td class="" style="width:29%;padding-left:12%;"></td>
								 <td class="" style="width:23%;text-align:center;"></td>
                            </tr>
							<tr class="">
                                 <td class="" style="width:16%;">Audited By: </td>
								 <td class="" style="border-bottom:solid 1px black;width:25%"></td>
								 <td style="width:6%"></td>
								 <td class="" style="width:29%;padding-left:12%;">Vehicle Plate No.: </td>
								 <td class="" style="border-bottom:solid 1px black;width:23%"></td>
                            </tr>
							<tr class="">
                                 <td class="" style="width:16%;"></td>
								 <td class=""></td>
								 <td style="width:6%"></td>
								 <td class="" style="width:29%;padding-left:12%;"></td>
								 <td class="" style="width:23%;text-align:center;"></td>
                            </tr>
                            <tr class="">
                                 <td class="" style="width:16%;">Guard on Duty:</td>
								 <td class="" style="border-bottom:solid 1px black;width:25%"></td>
								 <td style="width:6%"></td>
								 <td class="" style="width:29%;padding-left:12%;">Received in Good Condition:</td>
								 <td class="" style="border-bottom:solid 1px black;width:23%"></td>
                            </tr>
							
                        </thead>';
        $data .=' </table>';
		
		
		
		
		$data .= '<br>'.
				'<div style="margin-top:20px;font-size:12px;font-weight:bold; text-align:center;" height=12px>"THIS DOCUMENT IS NOT VALID FOR CLAIM OF INPUT TAXES"</div>' .
				 '<br>'.
                ' <table class="tblInvoice2" style="" cellpadding="4">
                        <thead>
                          
                        </thead>';
        $data .=' </table>';
		
    $vattotal = $invoiceAmount->vatAmount;
    $discounttotal = $invoiceAmount->discountAmount;
    $subtotal = $invoiceAmount->subTotalAmount;
    $header = getheader();

   /*  $data .= '<br/>' .
            '<br/>' .
            '<br/>' .
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
            '<td style="font-size:11px;font-weight:bold;" width="400">"THIS DOCUMENT IS NOT VALID FOR CLAIM OF INPUT TAXES"</td>' .
            '<td style="width:325px;font-family:Verdana;font-size:9px;font-weight:bold;color:#183867;">
					<img src="public/images/pwrdBy.png"  
					style="position:absolute !important;margin-top:40px !important;"
					 width="120" height="40">
					 <img src="public/images/usv_logo_long.png"  
					style="position:absolute !important;margin-top:30px !important;"
					 width="120" height="40">
				</td>' .
            '</tr>' .
            '</table>'; */
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
