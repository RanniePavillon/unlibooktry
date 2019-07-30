<?php
function returnBilling($payment, $info, $result){
		return $msg = '
<style>
.tblInvoice2print{
	border-collapse: collapse;
}
.addressLogoNew{
	color:#000000;
	font-size:12px;
	font-family:Verdana;
	font-weight:normal;
	width: 250px;
	word-break: break-word;
	border:none;
}
.newInvoiceprintNew{
    font-family: agency fb2;
    margin-left: 15px;
    font-weight: bold;
    font-size: 24px;
    margin-top:130px;
    width: 773px;
    text-align: center;
    font-style:normal;
    padding-top:3px;
    padding-bottom:3px;
}
 #imgprev{
	width: 161px;
	height:100px;
}
.clogoup2{
	float:left!important;
    padding-left: 5px;
	width: 300px !important;
    margin-top:30px!important;
    margin-left: 5px;
    font-size: 13px!important;
    font-family: Verdana;
    font-weight: bold;
    text-shadow: none;
    color: #000000;
}
.addressLogo{
	display: table-row;
	width: 200px;
}
.clogo{
	width:100%!important;
    margin-left: 10px;
    font-size: 12px;
    font-family: Tahoma;
    text-shadow: none;
}
.pdf2{
    border: none;
    border-radius: 3px;
    padding: 3px 10px 3px 10px;
    font-family: calibri;
    font-weight: bold;
    width: 62px;
    height: 25px;
    margin-right: 0px!important;
    margin-top:0px!important;
    color:#fff;
}
.pdf{
    color: white;
    border: none;
    border-radius: 3px;
    padding: 3px 10px 3px 10px;
    margin-left:0px!important;
    margin-top: 0px!important;
    font-family: calibri;
    font-weight: bold;
    width: 55px;
    height: 25px;
	margin-right:5px!important;
}
.buttonholder{
	display:inline-block;
	float:right;
	margin-top:33px;
}
.boxshadowprint {
  border: solid 1px #000 !important;
  box-shadow: 0px 1px 2px 2px gray;
}
.tbl3Invoice2{
	border: 1px solid rgb(116, 115, 115) !important;
}
@media print{
	.PaymentTypeFormInvoice, .invoiceHolderInvoicePrint{
		margin-top:0px!important;
	}
}
table tr td{
	padding: 10px 2px;
}
.tblInvoice2print td{
	padding: 10px 5px !important;
}


.invoiceHolderInvoicePrint{
    width: 100%;
    margin-top: 50px;
    margin: auto;
    margin-bottom:30px;
}

.PaymentTypeFormInvoice{
    /* width: 805px; */
    margin: auto;
    background-color: white;
    padding-bottom:10px;
    margin-top:30px;
}

.clogo{
	width:100% !important;
    margin-left: 10px;
    font-size: 12px;
    font-family: Tahoma;
    text-shadow: none;
}
.addressLogo{
    color:#000000;
    font-size:12px;
    font-family:Arial, Helvetica, verdana, sans-serif, tahoma;
    font-weight:normal;
}
.tbleInvoice{
    margin-top: 15px;
    margin-left: 15px;
    width:96%;
}
.tbleInvoice td{
    font-weight:normal;
    padding:3px;
    font-size: 12px;
    font-family: Tahoma;
}
.invoicetr{
    font-size: 12px;
    font-family: Tahoma;
    text-shadow: none;
}
.tblInvoice2print, th{

}
.tblInvoice2print th{
    border-bottom: 1px solid black;
    border-right: 1px solid black;	
    color: black;
    font-size: 12px;
    font-family:tahoma;
    font-weight: bold;
    background-color: #C8C8C8;
    padding: 5px;
    text-align: left;
    border-spacing: 0px;
}
.tblInvoice2print td{
    color: black;
    font-size: 12px;
    font-family:tahoma;
    font-weight: normal;
    padding: 5px;
}
.tblInvoice2print{
    border: 1px solid rgb(116, 115, 115);
    margin-top: 15px;
    padding-bottom: 30px;
    margin: 5px auto;
}
.tblInvoice2print, th{

}
.tblInvoice2print th{
    border-bottom: 1px solid black;
    border-right: 1px solid black;	
    color: black;
    font-size: 12px;
    font-family:tahoma;
    font-weight: bold;
    background-color: #C8C8C8;
    padding: 5px;
    text-align: left;
    border-spacing: 0px;
}
.tblInvoice2print td{
    color: black;
    font-size: 12px;
    font-family:tahoma;
    font-weight: normal;
    padding: 5px;
}
.tblInvoice2print tr th:nth-child(2){
    text-align: center;
}
.tblInvoice2print tr th:nth-child(4){
    text-align: right;
}
.tblInvoice2print tr th:nth-child(5){
    text-align: right;
}
.tblInvoice2print tr td:nth-child(2){
    text-align: center;
}
.tblInvoice2print tr td:nth-child(4){
    text-align: right;
}
.tblInvoice2print tr td:nth-child(5){
    text-align: right;
}
.newTblInv{
    border-spacing: 0px;
}
.tbl3Invoice2Holder{
	text-align: right;
}
.tbl3Invoice2{
    /* border: 1px solid black; */
    margin-top: 20px;
    /* margin-left: 488px; */
    width: 301px;
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
.RemarksInvoice{
    margin-top: 30px;
    margin-left: 15px;
    font-size: 12px;
    font-weight: bold;
    text-shadow: none;
    font-family: Tahoma;
}
.RemarksInvoice{
    margin-top: 30px;
    margin-left: 15px;
    font-size: 12px;
    font-weight: bold;
    text-shadow: none;
    font-family: Tahoma;
	text-align: left;
}
.RemarkText{
	height:auto !important;
    margin-left: 15px;
    width: 94% !important;
    margin-bottom: 10px !important;
    margin-top: 10px;
    font-family:tahoma;
    font-size:12px;
    padding:5px;
	border:none !important;
}

.inputTotalInvoice{
    width: 100%;
    text-align: right;
    font-size: 12px;
    font-family: Tahoma;
    border: none;
    padding-right: 3px;
}
.inputTotalInvoice2{
    width: 100%;
    text-align: right;
    font-size: 12px;
    font-family: Tahoma;
    border: none;
    padding-right: 3px;
}
.inputTotalInvoice3{
    width: 100%;
    text-align: right;
    padding-right: 3px;
    font-weight: bold;
    font-size: 12px;
    font-family: Tahoma;
    border-top: none;
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
</style>
<div class="invoiceHolderInvoicePrint">
    <form class="PaymentTypeFormInvoice boxshadowprint">
        <div style="float:left;"></div>
		<div class="buttonholder">
        </div>
		<div style="clear:both;"></div>
        <div class="clogo">
			<div style="float:left;margin-top:9px;margin-right:5px;margin-left:6px;">
				<img id="imgprev" src ="' . MAINURL . 'public/images/scp.png" alt="your logo"/>		
			</div>
            <div class="clogoup2">
				<div class="addressLogoNew"></div>
                <div class="addressLogo">
					<div>
						<b>
							AKTUS GLOBAL Management
						</b>
					</div>
				</div>
                <div class="addressLogo">
					<div>
						Unit 2003A, 20th Flr., West Tower,</br>
						PSE Center, Ortigas Center, Pasig City, </br>
						Tel no. : (02) 678-6649
					</div>
				</div>
			</div>
        </div>

        <div id="newInvoice" class="newInvoiceprintNew"></div>
        <table class="tbleInvoice">
            <tr class="invoicetr">
                <td>Client Name: <span class="clientName">' . $info->s_name . '</span></td>
                <td style="width:25%">Billing No.: <span class="billingNo">' . $info->s_invoice_no . '</span></td>
            </tr>
            <tr class="invoicetr">
                <td>Address: <span class="address">' . $info->s_address . '</span></td>
                <td>Billing Date: <span class="billingDate">' .  date("F d, Y",strtotime($payment['expiration'])) . '</span></td>
            </tr>
           <!-- <tr class="invoicetr">
                <td class="particularInvoice"></td>
				<td>Reference No.: <span class="refNum"></span></td>
            </tr>
            <tr class="invoicetr">
                <td class="particularInvoice"></td>
				<td>Discount: <span class="discount">-</span>%</td>
            </tr>-->
        </table>
            <div style="margin-top:20px;">	
                <table class="tblInvoice2print">
                    <thead>
                        <tr class="newTblInv">
                            <th style="width:15%;">Service Item</th>
                            <th style="width:40%;text-align:left;">Particular</th>
                            <th style="width:4%;">Qty</th>
                            <th style="width:2%;">Amount</th>
                            <th style="width:15%;text-align:right;">Net Amount</th>
                        </tr>
                    </thead>
					<tr class="">
						<td class="">'. $info->s_product .'</td>
						<td style="text-align:left;">Unlibooks Service</td>
						<td style="text-align:center;">1</td>
						<td class="">'. getFloat($result) .'</td>
						<td class="">'. getFloat($result) .'</td>
					</tr>
                </table>
        </div>
	<div class="tbl3Invoice2Holder">
        <table class="tbl3Invoice2">
            <tr>
                <td class="SAInvoice">Subtotal:</td>
                <td><input type="text" readonly="readonly" value="'. getFloat($result - ($result * 0.12)) .'" class="inputTotalInvoice numeric"></td>
            </tr>
            <tr class="trTotalInvoices">
                <td class="SAInvoice2">Vat:</td>
                <td><input type="text" readonly="readonly" value="'. getFloat($result * 0.12) .'" class="inputTotalInvoice2 numeric"></td>
            </tr>
            <tr class="trTotalInvoicesGr">
                <td class="SAInvoice3">Total Billing:</td>
                <td><input type="text" readonly="readonly" value="'. getFloat($result) .'" class="inputTotalInvoice3 numeric"></td>
            </tr>

        </table>
	</div>
        <div class="RemarksInvoice">Remarks</div>
        <div><textarea class="RemarkText" readonly ></textarea></div>
    </form>
</div>';
}

    function getFloat($int) {
        if ($int == '') {
            return '0.00';
        }
        if ($int < 0) {
            $int *= (-1);
            return '(' . number_format($int, 2) . ')';
        } else {
            return number_format($int, 2);
        }
    }


