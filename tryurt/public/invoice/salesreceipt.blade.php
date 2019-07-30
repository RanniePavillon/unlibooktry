@include('layouts.header')
@extends('layouts.footer')
<style>
    .cSearch::-webkit-input-placeholder{
        color:#fff;
        padding-left:35px;
    }
    .hrdashreport {
        height: 5px;
        width: 0%;
        background-color: #c51400;
        border:none;
    }	
    .container {
        background-color: white;    
        max-width: 1000px;
        width: 100%;
        padding-right: 15px;
        padding-top: 1px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
        border-style: solid;
        border-color: #A21414;
        box-shadow: 10px 4px 7px -9px rgba(50, 50, 50, 0.75), -6px 5px 11px -7px rgba(50, 50, 50, 0.75);
        margin-top:90px;
        margin-bottom:10px;
    }
    .invoiceHolderReceipt{
        background-color: white;
    }
    .cnitableAllInvoice{
        border-collapse:collapse;
        width: 99%;
        margin:auto;
        margin-top: 5px;
        height:auto!important;
    }
    .cnitableAllInvoice, th{
        background-color:  #c8c8c8;
       padding: 2px 2px 2px 2px;
        font-size: 13px;
        color:white;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
        padding: 5px;
    }
    .cnitableAllInvoice, td{
        font-size: 12px !important;
        color:black;
        font-family:verdana;
        text-align: left;
    }
	.tdPad{
		
	}
    .cnitableAllInvoice a{
        color:blue;
        font-size: 12px;
        font-weight: normal;
        cursor: pointer;
        text-decoration: underline;
        font-family:Verdana;
    }

    .cnitableAllInvoice tr th:nth-child(){
        text-align: right;
    }
    .cnitableAllInvoice tr th:nth-child(6){
        text-align: right;
    }
    .cnitableAllInvoice tr th:nth-child(7){
        text-align: right;
    }
    .cnitableAllInvoice tr td:nth-child(5){
        text-align: left;
    }
    .cnitableAllInvoice tr td:nth-child(6){
        text-align: right;
        padding:5px;
    }
    .cnitableAllInvoice tr td:nth-child(7){
        text-align: center;
    }
    .cnitableAllInvoice tr td:nth-child(8){
        text-align: center;
    }
    .cnitableAllInvoice tr th:nth-child(8){
        text-align: center;
    }
    .cnitableAllInvoice tr td:nth-child(2){
        text-decoration: none;
        font-family: Agency FB;
    }
    .cnitableAllInvoice tr:HOVER{
        background-color: #E8E8E8;
    }	
    .dateInputText{
        background-color: white;
        border: 1px solid rgba(0, 0, 0, 0.27);;
        padding: 5px 5px 5px 5px;
        margin-top: 8px;
    }
    .center2 a{
        color: black;
    }
    .tablecni a{
        text-decoration: none;
    }
    .tablecni a:hover{
        text-decoration: underline;
    }
    .cnitableAllInvoiceTr a{
        text-decoration: none;
        color: white;
        font-size:12px;
        font-family:Verdana;
        font-weight: bold;
    }
    .cnitableAllInvoiceTr a:hover{

    }
    .ui-datepicker-calendar th{

    }
    .ui-datepicker {  
        width: 216px;  
        height: auto;  
        font: 9pt Arial, sans-serif;  
        -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, .5);  
        -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, .5);  
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, .5);  
    }  
    .ui-datepicker a {  
        text-decoration: none;  
    }  
    .ui-datepicker table {  
        width: 100%;  
        background-color: white;
    }  
    .ui-datepicker-header {  
        background-image: url('{{asset('images/prevNext.png')}}');
        color: #e0e0e0;
        font-weight: bold;
        -webkit-box-shadow: inset 0px 1px 1px 0px rgba(250, 250, 250, 2);
        -moz-box-shadow: inset 0px 1px 1px 0px rgba(250, 250, 250, .2);
        box-shadow: inset 0px 1px 1px 0px rgba(250, 250, 250, .2);
        /* text-shadow: 1px -1px 0px #000; */
        filter: dropshadow(color=#000, offx=1, offy=-1);
        line-height: 30px;
        border-width: .1px 0 0 0;
        border-style: solid;
        border-color: #A29A9A;
    }  
    .ui-datepicker-title {  
        text-align: center; 
    }  
    .ui-datepicker-prev, .ui-datepicker-next {  
        display: inline-block;  
        width: 30px;  
        height: 30px;  
        text-align: center;  
        cursor: pointer; 
        background-repeat: no-repeat;  
        line-height: 600%;  
        overflow: hidden;  
    }  

    .ui-datepicker-prev {  
        float: left;  
        background-position: center -30px;  
    }  
    .ui-datepicker-next {  
        float: right;  
        background-position: center 0px;  
    }  
    .ui-datepicker thead {  
        background-color: #f7f7f7;  
        background-image: -moz-linear-gradient(top,  #f7f7f7 0%, #f1f1f1 100%);  
        background-image: -webkit-gradient(linear, left top, left bottombottom, color-stop(0%,#f7f7f7), color-stop(100%,#f1f1f1));  
        background-image: -webkit-linear-gradient(top,  #f7f7f7 0%,#f1f1f1 100%);  
        background-image: -o-linear-gradient(top,  #f7f7f7 0%,#f1f1f1 100%);  
        background-image: -ms-linear-gradient(top,  #f7f7f7 0%,#f1f1f1 100%);  
        background-image: linear-gradient(top,  #f7f7f7 0%,#f1f1f1 100%);  
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f7f7f7', endColorstr='#f1f1f1',GradientType=0 );  
        border-bottom: 1px solid #bbb;  
    }  
    .ui-datepicker th {  
        text-transform: uppercase;  
        font-size: 6pt;  
        color: #666666;  
        text-shadow: 1px 0px 0px #fff;  
        filter: dropshadow(color=#fff, offx=1, offy=0);  
        text-align: center;
        background-color: white;
    }  
    .ui-datepicker tbody td {  
        padding: 0;  
        border-right: 1px solid #bbb;  
    }  
    .ui-datepicker tbody td:last-child {  
        border-right: 0px;  
    }  
    .ui-datepicker tbody tr {  
        border-bottom: 1px solid #bbb;  
    }  
    .ui-datepicker tbody tr:last-child {  
        border-bottom: 0px;  
    }  
    .ui-datepicker td span, .ui-datepicker td a {  
        display: inline-block;  
        font-weight: bold;  
        text-align: center;  
        width: 30px;  
        height: 30px;  
        line-height: 30px;  
        color: #666666;  
        text-shadow: 1px 1px 0px #fff;  
        filter: dropshadow(color=#fff, offx=1, offy=1);  
    }  
    .ui-datepicker-calendar .ui-state-default {  
        background: #ededed;  
        background: -moz-linear-gradient(top,  #ededed 0%, #dedede 100%);  
        background: -webkit-gradient(linear, left top, left bottombottom, color-stop(0%,#ededed), color-stop(100%,#dedede));  
        background: -webkit-linear-gradient(top,  #ededed 0%,#dedede 100%);  
        background: -o-linear-gradient(top,  #ededed 0%,#dedede 100%);  
        background: -ms-linear-gradient(top,  #ededed 0%,#dedede 100%);  
        background: linear-gradient(top,  #ededed 0%,#dedede 100%);  
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ededed', endColorstr='#dedede',GradientType=0 );  
        -webkit-box-shadow: inset 1px 1px 0px 0px rgba(250, 250, 250, .5);  
        -moz-box-shadow: inset 1px 1px 0px 0px rgba(250, 250, 250, .5);  
        box-shadow: inset 1px 1px 0px 0px rgba(250, 250, 250, .5);  
    }  
    .ui-datepicker-unselectable .ui-state-default {  
        background: #f4f4f4;  
        color: #b4b3b3;  
    }  
    .ui-datepicker-calendar .ui-state-hover {  
        background: #f7f7f7;  
    }  
    .ui-datepicker-calendar .ui-state-active {  
        background: #6eafbf;  
        -webkit-box-shadow: inset 0px 0px 10px 0px rgba(0, 0, 0, .1);  
        -moz-box-shadow: inset 0px 0px 10px 0px rgba(0, 0, 0, .1);  
        box-shadow: inset 0px 0px 10px 0px rgba(0, 0, 0, .1);  
        color: #e0e0e0;  
        text-shadow: 0px 1px 0px #4d7a85;  
        filter: dropshadow(color=#4d7a85, offx=0, offy=1);  
        border: 1px solid #55838f;  
        position: relative;  
        margin: -1px;  
    } 
    .ui-datepicker-calendar td:first-child .ui-state-active {  
        width: 29px;  
        margin-left: 0;  
    }  
    .ui-datepicker-calendar td:last-child .ui-state-active {  
        width: 29px;  
        margin-right: 0;  
    }  
    .ui-datepicker-calendar tr:last-child .ui-state-active {  
        height: 29px;  
        margin-bottom: 0;  
    } 
    .search2{
        font-family:agency fb2!important;
    }
    .date{
        width: 104px;
        height: 28px;
        font-family:agency fb2;
        font-size:16px;
        font-weight: bold;
        padding: 5px;
        border: 1px solid #183867;
    }  
    .invoiceText{
        border: none;
        text-align: right;
        background: none;
        font-size: 12px;
        color: black;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
    }
    .balinvoices{
        font-size: 12px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align:right;
        border:none;
        background:none;

    }
    .balTotal{
        margin-left: 63px;
        width: 115px;
        text-align: center;
        font-size: 12px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        border:none;
        border-top: solid 1px #000;
    }
    .createNI{
        background-color:#C06464;
        /* margin-left:710px;
                margin-top: -64px; */
        width: 210px;
        height: 32px;
        border: none;
        background-image:url('{{asset('images/cniNewButton.png')}}');
        background-repeat:no-repeat;
        /* background-position:left; */
        cursor: pointer;
        border-radius:5px;
        background-size: 100% 100%;
    }

    .cnitableAllInvoice2{
        border-collapse:collapse;
        width: 99%;
        margin:auto;
        margin-top: 5px;
        margin-top: -96px;
    }
    .cnitableAllInvoice2, th{
        background-color: #55C768;
        padding: 2px 2px 2px 2px;
        font-size: 13px;
        color:white;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
        padding: 5px;
    }
    .cnitableAllInvoice2, td{
        font-size: 11px;
        color:black;
        font-family:Verdana;
        text-align: left;
        padding:7px 11px;
        height: 30px;
    }	
    .tfootTable{
        border-collapse:collapse;
        width: 99%;
        margin:auto;
        margin-top: 5px;
    }
    .tfootTable, th{
       /*  background-color: #c51400;
        font-size:12px;
        color: white;
        font-family:Verdana;
        text-align: left;
        padding: 11px; */
    }
    .tfootTable a{
        color: #FFF;
        text-decoration: none;
        cursor: pointer;
        font-family:Verdana;
        font-size: 9px;
        font-weight: bold;
    }
    .tfootTable a:hover{
        text-decoration:underline;
    }
    .tfootTable select{
        width: 65px;
        height: 18px;
        margin-left: 10px;
        margin-right: 10px;
        /* background-image: url('{{asset('images/dropSelect.png')}}');
        background-size: 65px 18px;
        background-repeat: no-repeat;
        -webkit-appearance: none; */
    }
    .statInputnew{
        font-family:Arial, Helvetica, verdana, sans-serif, tahoma;
        font-size:12px;
        width:100%;
        text-align:center;
        border:none;
        background:none;
    }
    .invNoOption{
        background-color: #183867;
        color: #fff;
        font-weight: bold!important;
    }
    .createNCR{
       
    }
    .buttoninvoices:hover{
        color:#B13C56;
    }
    .optioncolor{
        background-color:#fff;
        color:#000;
    }
</style>

<script>
    $(function () {
        $('#searchby').change(function () {
            if ($(this).val() == 4) {
                $('input[type="search"]').addClass('hidden');
                $('.date').removeClass('hidden');
                $('.search2').removeClass('hidden');
                $('.search2Col').addClass('hidden');
            } else {
                $('input[type="search"]').removeClass('hidden');
                $('.date').addClass('hidden');
                $('.search2').addClass('hidden');
                $('.search2Col').removeClass('hidden');

            }
        });
        $('#searchby').change();
        $(".date").datepicker({
            dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
        });
    })
</script>

<title>
    ALL CASH RECEIPTS
</title>

<!-- </?php
require_once ('public/paginator.php');
$pages = new Paginator;
//echo $var = TblNewInvoiceMySqlExtDAO::getMaxNumId();
$page = isset($_GET['ipp']) ? (($_GET['ipp'] == "All") ? '' : ($_GET['page'])) : 1;
$ipp = isset($_GET['ipp']) ? (($_GET['ipp'] == "All") ? '' : $_GET['ipp']) : 25;
?> -->
<link rel="stylesheet" href="{{asset('css/overall.css')}}"/>
<div class="container">
    <hr class="hrdashreport"> 
    <form method='post' action="{{('/invoice/newreceipt')}}" id='form'>
        <div class="invoiceHolderReceipt">
            <div id="newReceipt" class="headings">
                <label class="fontall">ALL CASH RECEIPTS</label>
				<!-- </?php if ($useraccess->Add == 'yes') { ?> -->
                    <!-- <label class="crosssales"> -->
                       <a href="{{('/invoice/newreceipt')}}">
                        <input type="button" class="createNCR buttonslarge" value="CREATE NEW CASH RECEIPT">
                </a>
                        <!-- </label> -->
            </div>	
            
			
            
            <div style="clear:both;"></div>
            <div class="center2">
                <div id="search3" class="buttoncontainersviews">
                    <!-- </?php if ($useraccess->Edit == 'yes') { ?> -->
                    <input type="button" name="edit" value="EDIT" class="delete1 buttoninvoices" id="edit" onclick="editrec('', '')">
                    <!-- </?php }if ($useraccess->Add == 'yes') { ?> -->
                    <input type="button" name="copy" value="COPY" class="copyNew buttoninvoices" onclick="copyrec('', 'copy')">
                    <!-- </?php }if ($useraccess->Delete == 'yes') { ?> -->
                    <input type="button" name="del" value="CANCEL" class="copyNew buttoninvoices deleted" id="delete" onclick="deleterec()">
                   
                    <input type="button" name="sendinvoice" value="SEND INVOICE buttoninvoices" class="sendI hidden">
                    <input type="button" name="print" value="PRINT PREVIEW" class="printPrev buttoninvoices">
                    <!--<input type="button" name="addpayment" value="Payment" class="addP" </php // echo ($status == 'posted')    ?> />-->
                </div>
				
				
						<!-- </?php $searchby = isset($_POST['searchby']) ? $_POST['searchby'] : ''; ?> -->
						<div style="float:right;margin-right:30px;margin-top:10px;">
							<span class="filteredby">Filtered By:</span>
							<label class="labelclass">
								<select class="inumber" name="searchby" id="searchby">
									<option class="optioncolor" value="1" >TRANSACTION NO.</option>
									<option class="optioncolor" value="2" >OR NO.</option>
									<option class="optioncolor" value="3" >CUSTOMER NAME</option>

					<!--<option class="optioncolor" value="4" </?php echo ($searchby == 4) ? 'selected' : '' ?>>DATE</option>-->
									<option class="optioncolor" value="5">STATUS</option>

								</select>
							</label>
							<input type="search" name="search" placeholder="SEARCH" class="cSearch"> 

							<input type="text" name="startdate" value="" 
								   placeholder="From Date" class="date dateInputText hasDate " style="width:104px;height:26px;"/>

							<input type="text" name="enddate" value=""
								   placeholder="To Date" class="date dateInputText hasDate" style="width:104px;height:26px;"/ >

								   <input type="submit" name="search2" value="SEARCH" class="search2 ">

							<input type="submit" name="search2" value="" class="search2Col ">
						</div>
                <div style="clear:both;"></div>
            </div>
        </div>
		<div class="moduleHeight">
			<div>
				<!-- </?php $sortdirection = isset($_POST['sortdirection']) ? $_POST['sortdirection'] : '' ?> -->
				<table class="cnitableAllInvoice" style="margin-top:5px;">
					<tr class="cnitableAllInvoiceTr">
						<th style="text-align:center; width:3%"><!-- <input type="checkbox" class='toggle' > --></th>
						<th style="text-align:left;padding:5px;padding-left: 5px;width:12%;"><a onclick="sort('invoice', '')">Transaction No.</a></th>
						<th style="text-align:left;padding:5px;padding-left: 5px;width:11%;"><a onclick="sort('invoice', '')">OR No.</a></th>
						<th style="text-align:left;padding-left: 5px;width:11%;"><a onclick="sort('date', '')">Date</a></th>
						<th style="text-align:left;padding-left: 5px;width:20%;"><a onclick="sort('client', '')">Customer Name</a></th>
						<th style="text-align:right;padding-right:0px;width:11%;">Total Amount</th>
						<th style="text-align:center;padding-right:5px;width:11%;">Status</th>
						<th style="text-align:center;padding-right:5px;width:11%;">Date Reversed</th>
					</tr>
					<!-- </?php
					// $invoice = TblNewInvoiceMySqlExtDAO::getData(($_GET['ipp'] == "All") ? '' : $_GET['ipp'], ($_GET['ipp'] == "All") ? '' : $_GET['ipp'] * ($_GET['page'] - 1));
					$invoice = TblNewCashInvoiceMySqlExtDAO::getData(($_GET['ipp'] == "All") ? '' : $_GET['ipp'], ($_GET['ipp'] == "All") ? '' : $_GET['ipp'] * ($_GET['page'] - 1));

					$pages->items_total = count(TblNewCashInvoiceMySqlExtDAO::getData('', -1));
					$pages->mid_range = 9;
					$pages->paginate();
					$invoicetotal = 0;
					$balancetotal = 0;
					if (count($invoice) > 0) {

						foreach ($invoice as $item) {
							$allInvoice = DAOFactory::getTblCashInvoiceAmountDAO()->queryByAllCashInvoiceId($item->id);
							$grandTotal = 0;
							if (!empty($allInvoice) && isset($allInvoice)) {
								$grandTotal = $allInvoice[0]->grandTotal;
							}
							$amountBalance = 0;
							if ($item->status != 'reversed') {
								$invoicetotal += $grandTotal;
							}
							$balanceObj = TblEnterPaymentMySqlExtDAO::getClientNotCollecterInvoice($item->clientId, '', $item->id);
							$balance = $balanceObj[0]['grand_total'] - ($balanceObj[0]['wht_amount'] + $balanceObj[0]['applied_amount']);
							$grand_total = $balanceObj[0]['grand_total'];
							$balancetotal += $balance;

							if ($grandTotal < 0) {
								$grandTotal = $grandTotal * -1;
								$grandTotal = number_format((float) $grandTotal, 2);
								$grandTotal = "(" . $grandTotal . ")";
							} else {
								$grandTotal = number_format((float) $grandTotal, 2);
							}
							?> -->
							<tr class="tablecni">
								<td style="text-align:center;" class="tdPad"><input type="checkbox" name='chk[]' class='chk' value=""></td>
								<td class="tdPad" style="text-align:left;padding-left: 5px;" class=""><a onclick="editrec()"></a></td>
								<td class="tdPad" style="text-align:left;padding-left: 5px;" class=""></td>
								<td class="tdPad" style="text-align:left;padding-left: 5px;" class=""></td>
								<td class="tdPad" style="text-align:left;padding-left: 5px;" class=""></td>
								<td class="tdPad" style="text-align:right;padding-right: 5px;" class="">
									
								</td>
								<td class="stat tdPad"style="text-align:center;padding-right: 5px;"></td>
								<td class="tdPad" style="text-align:left;padding-right: 5px;"></td>
							</tr>
					  
				</table>
				
			</div>
		</div>
			<table class="cnitableAllInvoice2" style="margin-top:40px;">
				<tr class="cnitableAllInvoice2">
					<th style="text-align:center; width:3%"></th>
					<th style="text-align:left;padding:5px;padding-left: 5px;width:12%;"></th>
					<th style="text-align:left;padding:5px;padding-left: 5px;width:11%;"></th>
					<th style="text-align:left;padding-left: 5px;width:11%;"></th>
					<th style="text-align:right;width:20%;font-family:Verdana;font-size:12px;">Total : </th>
					<th style="text-align:right;padding-right:0px;width:11%;font-family:Verdana;font-size:12px;">
						<!-- </?= number_format((float) $invoicetotal, 2) ?> -->
					</th>
					<th style="text-align:center;padding-right:5px;width:11%;"></th>
					<th style="text-align:center;padding-right:5px;width:11%;"></th>
				</tr>
			</table>
			<div class="tcollect1 hidden">
				<div>Total:<input readonly="readonly" type="text" value="PHP" class="php1 numeric"></div>
				<div style="margin-top: -25px;margin-left: 180px;"><input readonly="readonly" type="text" class="balTotal" value="0.00"></div>
			</div>
			

			<table class="tfootTable">
				<tfoot>
					<tr class="under">
						<td colspan="5" style="font-family:Verdana;font-size: 12px;color:#fff;font-weight:bold;text-align: center" class="under">
							<!-- </?php
							// echo $pages->display_pages();
							echo "<span style=\"margin-left:25px\width:120px\"> " . $pages->display_jump_menu()
							. $pages->display_items_per_page() . "</span>";
							echo "Page $pages->current_page of $pages->num_pages";
							?> -->
						</td>
					</tr>
				</tfoot>
			</table>
			<input type='hidden' name='task' value=''/>
			<input type="hidden" name="sortorder" value=""/>	
			<input type="hidden" name="sortdirection" value=""/>	
		
    </form>
</div>
<div class="popBack hidden"></div>

<script>
    function ucfirst(field) {
        field.value = field.value.substr(0, 1).toUpperCase() + field.value.substr(1);
    }
    $(function () {

        $('.toggle').click(function () {
            if ($(this).is(':checked')) {
                $('input[type="checkbox"]').prop('checked', true);
            } else {
                $('input[type="checkbox"]').prop('checked', false);
            }
        });
    })
	
	/* disabling checkbox 8/4/2015 */
	/* $('.chk').click(function () {
        //alert('dd');
		 $("input[name='chk[]']:checked").each(function () {
			status = $(this).parent('td').parent('tr').find('td:nth-child(7)').html();
			if (status == 'Posted' || status == 'Reversed') {
				$("input[name='del']").attr('disabled', 'true');
				$("input[name='sendinvoice']").attr('disabled', 'true');
				return false;
			}
		}); 
    }); */
	

    function deleterec() {
        status = '';
        if ($('.chk').is(':checked')) {
            $("input[name='chk[]']:checked").each(function () {
                status = $(this).parent('td').parent('tr').find('td:nth-child(7)').html();
                if (status == 'Posted' || status == 'Reversed') {
                    return false;
                }
            });

            if (status == 'Posted' || status == 'Reversed') {
                alert('Cash Receipt(s) may be posted/reversed. You can no longer delete the cash receipt.');
                $('input[name="chk[]"]:checked').prop('checked', false);
                return false;
            }

            if (confirm('Are you sure you want to delete the following record(s)?')) {
                $('input[name="task"]').val('delinvoice');
                // $('#form').submit();
                $.post(URL + 'invoice/deleteReceipt', $('#form').serialize())
                        .done(function (returnData) {
                            if (returnData == 0) {
                                location.reload();
                            } else {
                                alert(returnData);
                            }
                        });

            }
        } else {
            alert('Please select record to delete');
        }
    }

    $('#edit').click(function () {
        status = '';
        if (status == 'Posted' || status == 'Reversed') {
            alert('Cash receipt(s) may be posted. You can no longer edit this transaction.');
            $('input[name="trig[]"]:checked').prop('checked', false);
            return false;
        }
    });

    function editrec(invoiceid, stat) {
        if ($('.chk').is(':checked') || invoiceid != '') {
            var checked = "";
            count = 0;
            myThis = '';
            $("input[name='chk[]']:checked").each(function ()
            {
                checked = parseInt($(this).val());
                count++;
                myThis = $(this);
                // return false;
            });
            if (invoiceid != '') {
                checked = parseInt(invoiceid);
            }

            if (count > 1) {
                alert('Please select one record only to edit.');
                $('input[type="checkbox"]').prop('checked', false);
                return false;
            }

            status = $(myThis).parent('td').parent('tr').find('td:nth-child(7)').html();

            if (status == 'Posted' || status == 'Reversed' && stat != 'copy') {
                alert('Cash Receipt may be posted/reversed. You can no longer edit the cash receipt.');
                $('input[name="chk[]"]:checked').prop('checked', false);
                return false;
            }

            $().redirect(URL + 'invoice/newreceipt', {'id': checked, 'status': stat, 'task101': 'updateinvoice'})
                    // .done(function (returnData) {
                        // $('.popBack').html(returnData);
                        // $('.popBack').removeClass('hidden');
                        // $('.popBack').removeClass('hidden');
                        // $('.closeNewItem').click(function () {
                            // $('.popBack').addClass('hidden');
                            // $('.popBack').html('');
                            // $('body').css('overflow', 'auto');
                        // });
                    // })
                    // .fail(function () {
                        // alert('Connection Error!');
                    // });
            return false;
        } else {
            alert('Please select record to edit');
        }
    }

    function copyrec(invoiceid, stat) {
        if ($('.chk').is(':checked') || invoiceid != '') {
            var checked = "";
            count = 0;
            myThis = '';
            $("input[name='chk[]']:checked").each(function ()
            {
                checked = parseInt($(this).val());
                count++;
                myThis = $(this);
                // return false;
            });
            if (invoiceid != '') {
                checked = parseInt(invoiceid);
            }

            if (count > 1) {
                alert('Please select one record only to copy');
                $('input[type="checkbox"]').prop('checked', false);
                return false;
            }

            status = $(myThis).parent('td').parent('tr').find('td:nth-child(7)').html();
            if (status == 'posted' && stat != 'copy') {
                alert('Cash Receipt is posted. You can no longer edit the Cash Receipt.');
                return false;
            }
            // alert(checked);
            // return false;
            $().redirect(URL + 'invoice/newreceipt', {'id': checked, 'status': stat, 'task101': 'copy'})
                    .done(function (returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('.popBack').removeClass('hidden');
                        $('.closeNewItem').click(function () {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                            $('body').css('overflow', 'auto');
                        });
                    })
                    .fail(function () {
                        alert('Connection Error!');
                    });
            return false;
        } else {
            alert('Please select record to edit');
        }
    }

    function copy() {
        if ($('.chk').is(':checked')) {
            if (confirm('Are you sure you want to copy this transaction?')) {
                $('input[name="task"]').val('copyinvoice');
                $('#form').submit();
            }
        } else {
            alert('Please select record to copy');
        }
    }

    function sort(sortby, sortdirection) {
        $('input[name="task"]').val('sort');
        $('input[name="sortorder"]').val(sortby);
        $('input[name="sortdirection"]').val(sortdirection);
        $('#form').submit();
    }
</script>
<script>
    $(function () {
        $('.addP').click(function () {
            if ($('.chk').is(':checked')) {
                var checked = [];
                $("input[name='chk[]']:checked").each(function ()
                {
                    checked.push(parseInt($(this).val()));
                    return false;
                });
//            alert(checked[0]);
                $.post(URL + 'invoice/enterpayment', {invoiceid: checked[0], stat: 'invoice'})
                        .done(function (returnData) {
                            $('.popBack').html(returnData);
                            $('.popBack').removeClass('hidden');
                            $('body').css('overflow', 'hidden');
                            $('.cancel').click(function () {
                                if (confirm('Are you sure you want to leave this page without posting?')) {
                                    $('.popBack').addClass('hidden');
                                    $('.popBack').html('');
                                    $('body').css('overflow', 'auto');
                                }
                            });
                        })
                        .fail(function () {
                            alert('Connection Error!');
                        });
                return false;
            } else {
                alert('Select invoice to enter payment');
            }
        });
		
		$('input[name="chk[]"]').change(function(){
		
			$('input[name="edit"]').addClass('hidden');
			$('input[name="copy"]').addClass('hidden');
			$('input[name="del"]').addClass('hidden');
			$('input[name="print"]').addClass('hidden');
			$('.sendinvoice').addClass('hidden');
			
			if($('input[name="chk[]"]:checked').length == 0){
				$('input[name="edit"]').removeClass('hidden');
				$('input[name="copy"]').removeClass('hidden');
				$('input[name="del"]').removeClass('hidden');
				$('input[name="print"]').removeClass('hidden');
				$('.sendEmail').removeClass('hidden');
				return false;
			}
			
			if($('input[name="chk[]"]:checked').length == 1){
				$('input[name="copy"]').removeClass('hidden');
				transStatus = $('input[name="chk[]"]:checked').parent('td').parent('tr').find('td:nth-child(7)').html();
				if(transStatus == 'Posted'){
					$('input[name="print"]').removeClass('hidden');
					$('.sendEmail').removeClass('hidden');
				} else if(transStatus == 'Open'){
					$('input[name="edit"]').removeClass('hidden');
					$('input[name="del"]').removeClass('hidden');
				}
			} else {
				canCancel = true;
				$('input[name="chk[]"]:checked').each(function(){
					transStatus = $(this).parent('td').parent('tr').find('td:nth-child(7)').html();
					if(transStatus != 'Open'){
						canCancel = false;
					}
				});
				if(canCancel){
					$('input[name="del"]').removeClass('hidden');
				}
			}
			
		});
		
    })
</script>


<script>
    var invoiceprintview = '';
    function view(paymentid) {
        $.post(URL + 'invoice/paymentview', {paymentid: paymentid})
                .done(function (returnData) {
                    $('.popBack').html(returnData);
                    $('.popBack').removeClass('hidden');
                    $('body').css('overflow', 'hidden');
                    $('.cancel').click(function () {
                        //	if (confirm('Are you sure, you want to leave this page without posting?')) {
                        $('.popBack').addClass('hidden');
                        $('.popBack').html('');
                        $('body').css('overflow', 'auto');
                        //}
                    });
                })
                .fail(function () {
                    alert('Connection Error!');
                });
        return false;
    }


    function printPreview(id) {
        $.post(URL + 'invoice/printReceipt', {invoiceid: id})
                .done(function (returnData) {
                    $('.popBack').html(returnData);
                    $('.popBack').removeClass('hidden');
                    $('body').css('overflow', 'hidden');
                    $('.popx').click(function () {
                        $('.popBack').addClass('hidden');
                        $('.popBack').html('');
                        $('body').css('overflow', 'auto');
                        $('.chk').removeAttr('checked');
                        invoiceprintview = paymentpreview ='';
                    });
                })
                .fail(function () {
                    alert('Connection Error!');
                });
        return false;
    }
</script>

<script>
    // datepicker
    $('.hasDate').prop('readonly', true);
    $('.hasDate').datepicker({
        dateFormat: 'mm/dd/yy'
    });
    $('.hasDate').change(function () {
        dates = $.datepicker.formatDate('mm/dd/yy', new Date($(this).val()));
        $(this).val(dates);
    });
    $(function () {

        $('.printPrev').click(function () {
            if ($('.chk').is(':checked')) {
                var checked = '';
                if ($('.chk:checked').length > 1) {
                    alert('Please select one record only to view.');
                    $('input[type="checkbox"]').prop('checked', false);
//                    $("input[name='chk[]']:checked").each(function(){ $(this).removeAttr('checked'); });
                    return false;
                } else {
                    $("input[name='chk[]']:checked").each(function ()
                    {
                        checked = parseInt($(this).val());
                        return false;
                    });
                    invoiceprintview = checked;
                    printPreview(checked);
//                    $.post(URL + 'invoice/printReceipt', {invoiceid: checked})
//                            .done(function(returnData) {
//                                $('.popBack').html(returnData);
//                                $('.popBack').removeClass('hidden');
//                                $('body').css('overflow', 'hidden');
//                                $('.popx').click(function() {
//                                    $('.popBack').addClass('hidden');
//                                    $('.popBack').html('');
//                                    $('body').css('overflow', 'auto');
//                                    $('.chk').removeAttr('checked');
//                                });
//                            })
//                            .fail(function() {
//                                alert('Connection Error!');
//                            });
//                    return false;
                }
            } else {
                alert('Please select record to preview');
            }
        });
        $('.sendI').click(function () {
            alert('Sorry, link unavailable.');
        });

        $('.createNCR').click(function () {
            validateSeries('newreceipt');
        });
    })
</script>