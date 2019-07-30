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
    .cnitableAllInvoice{
        border-collapse:collapse;
        width: 99%;
        margin:auto;
        margin-top: 5px;
        height:auto!important;
    }
    .cnitableAllInvoice, th{
        background-color: #A70C0C;
        padding: 2px 2px 2px 2px;
        font-size: 13px;
        color:white;
        font-family:verdana;
        text-align: left;
        padding: 5px;
    }
    .cnitableAllInvoice, td{
        font-size: 12px;
        color:black;
        font-family:verdana;
        text-align: left;
        padding: 2px 5px 2px 5px;
    }
    .cnitableAllInvoice a{
        color:blue;
        font-size:12px;
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
    #hoverTr:hover{
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
        font-family: agency fb2;
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
        font-family:verdana;
    }
    .balinvoices{
        font-size: 12px;
        font-family:verdana;
        text-align:right;
        border:none;
        background:none;

    }
    .balTotal{
        margin-left: 63px;
        width: 115px;
        text-align: center;
        font-size: 12px;
        font-family:verdana;
        border:none;
        border-top: solid 1px #000;
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
        font-family:verdana;
        text-align: left;
        padding: 5px;
    }
    .cnitableAllInvoice2, td{
        font-size: 12px;
        color:black;
        font-family:Verdana;
        text-align: left;
        padding:5px;
        height: 30px;
    }	
    .tfootTable{
        border-collapse:collapse;
        width: 99%;
        margin:auto;
        margin-top: 5px;
    }
    .tfootTable, th{
        /* background-color: #c51400;
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
        background-color: #fff;
        color: #000;
        font-weight: bold!important;
    }
    .buttonHover:hover{
        color:#B13C56;
    }
</style>
<!-- </?php
require_once ('public/paginator.php');
$pages = new Paginator;
?> -->
<script>
    paymentpreview = "";
    
    if(paymentpreview !=''){
        printPreview(paymentpreview);
    }
    
    $(function() {
		  $(function() {

			$('.toggle').click(function() {
				if ($(this).is(':checked')) {
					$('input[type="checkbox"]').prop('checked', true);
				} else {
					$('input[type="checkbox"]').prop('checked', false);
				}
			});
		})
	
        $('#searchby').change(function() {
            if ($(this).val() == 3) {
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

        $('#reversecol').click(function() {
            if ($("input[name='chk[]']").is(':checked')) {
                var checked = [];
                if (confirm("Are you sure you want to reverse this invoice?")) {
                    $("input[name='chk[]']:checked").each(function()
                    {
                        checked.push(parseInt($(this).val()));
                    });

                    $.ajaxSetup({async: false});
                    $.post(URL + 'invoice/reverseCollection', {paymentids: checked})
                            .done(function(returnData) { 
                                status = returnData;
                            })
                            .fail(function() {
                                alert('Connection Error!');
                            });

                    if (status == 'reversed') {
                        alert('Selected record(s) status already reversed');
                    } else {
                        alert('Selected record reversed');
                        location.reload();
                    }

                    $("input[name='chk[]']").removeAttr('checked');
                    return false;
                }
				$('input[type="checkbox"]').prop('checked', false);
            } else {
                alert('Please select record.');
            }
        });
		
		$('#printPrevcol').click(function() {
            if ($('.chk').is(':checked')) {
                var checked = '';
                if ($('.chk:checked').length > 1) {
                    alert('Please select one record only to view.');
                    $('input[type="checkbox"]').prop('checked', false);
                    return false;
                } else {
                    $("input[name='chk[]']:checked").each(function()
                    {
                        checked = parseInt($(this).val());
                    });
		
                paymentpreview = checked;
                   printPreview(checked);
                }
            } else {
                alert('Please select record to preview');
            }
        });
    });

function printPreview(id){
     $.post(URL + 'invoice/printPreviewCollection', {'id': id})
                            .done(function(returnData) {
                                $('.popBack').html(returnData);
                                $('.popBack').removeClass('hidden');
                                $('body').css('overflow', 'hidden');
                                $('.closePrint').click(function() {
									
                                    $('.popBack').addClass('hidden');
                                    $('.popBack').html('');
                                    $('body').css('overflow', 'auto');
                                    $('.chk').removeAttr('checked');
                                });
                            })
                            .fail(function() {
                                alert('Connection Error!');
                            });
                    return false;
}
</script>
<!-- </?php
$page = isset($_GET['ipp']) ? (($_GET['ipp'] == "All") ? '' : ($_GET['page'])) : 1;
$ipp = isset($_GET['ipp']) ? (($_GET['ipp'] == "All") ? '' : $_GET['ipp']) : 25;
Session::setSession('paymentidpreview','');
?> -->
<title>
	ALL COLLECTIONS
</title>
<link rel="stylesheet" href="{{asset('css/overall.css')}}"/>
<div class="container">
<hr class="hrdashreport"> 
<form method="post" action="{{('invoice/collection')}}" style="margin-bottom: -4px;" class="formcollectionNew">
    <div class="invoiceHolderCollection">
        <div id="new" class="headings">
            <label class="headTextCollection">ALL COLLECTIONS</label>
			<!-- </?php if ($useraccess->Add == 'yes') { ?> -->
				<!-- <label class="crosscollection"> -->
					<input type="button"  class="createNPAyment buttonslarge" value="RECORD NEW PAYMENT">
				<!-- </label> -->
			
        </div>
        
		<div style="clear:both;"></div>
        <div class="div2Col">
            <div id="button_container" class="buttoncontainersviews">
                <input type="button" value="REVERSE" name="reverse" class="reversecol buttonHover buttoninvoices" id="reversecol">
                <input type="button" value="PRINT PREVIEW" name="print" class="printPrevcol buttonHover buttoninvoices" id="printPrevcol">
			</div>
            <!-- </?php $searchby = isset($_POST['searchby']) ? $_POST['searchby'] : ''; ?> -->
			<div style="float:right;margin-right:30px;margin-top: 10px;">	
				<span class="filteredby">Filtered By:</span>
			   <label class="labelclass">
				   <select class=" inumber" name="searchby" id="searchby">
						<option class="invNoOption" value="1">PAYMENT NO.</option>
						<option class="invNoOption" value="2">CUSTOMER NAME</option>
						<option class="invNoOption" value="3" >PAYMENT DATE</option>
						<!--<option class="invNoOption" value="4" >MODE OF PAYMENT</option>-->
					</select>
				</label>
				<!--<input type="search"placeholder="Search"  name="search" class="searchindex <--?php echo ($searchby == 3) ? 'hidden' : '' ?>" >--> 
				<input type="search" placeholder="SEARCH" name="search" class="cSearch
				" value="">
				<input type="text" name="startdate" value="" placeholder="From Date" class="date dateInputText "/>
				<input type="text" name="enddate" value="" placeholder="To Date" class="date dateInputText "/>
				<input type="submit" name="search2" value="SEARCH" class="search2">
				<div><input type="submit" name="search2" value="" class="search2Col"></div>
			</div>
            <div style="clear:both;"></div>
        </div>
		<!-- </?php
			$items = TblEnterPaymentMySqlExtDAO::getData(($_GET['ipp'] == "All") ? '' : $_GET['ipp'], ($_GET['ipp'] == "All") ? '' : $_GET['ipp'] * ($_GET['page'] - 1));
			
		?> -->
		<div class="moduleHeight">
			<div>
				<table class="cnitableCollection">
					<tr class="headinvoiceCollection">
						<th width="2%" style="padding:5px;"><!-- <input type="checkbox" class="toggle"> --></th>
						<th width="11%" style="padding:5px;">Payment No.</th>
						<th width="11%" style="padding:5px;">Payment Date</th>
						<th width="11%" style="padding:5px;">Customer Name</th>
						<th width="13%" style="text-align:right;padding:5px;">Amount Received</th>
						<th width="10%" style="padding:5px; text-align: center">Status</th>
						<th width="10%" style="padding:5px;">Date Reversed</th>


					</tr>
					<!-- </?php
					$pages->items_total = count((array)TblEnterPaymentMySqlExtDAO::getData('', -1));
					$pages->mid_range = 9;
					$pages->paginate();
					$total = 0;
					if (count((array)$items) > 0 && isset($items) && !empty($items)) {
						$i = count($items);
						foreach ($items as $item) {
							?> -->
							 <!-- <tr class="row-recurring">
								<td><input type="checkbox" name='chk[]' class='chk' value=''></td>
								<td><a href="#" onclick="view()"></a></td>
								<td class=""></td>-->
								 <!-- <td class=""></td>
								<td class=""></td>
								 <td class=""></td>  -->
								<!-- <td class="">
									<input type="text" class="totalA"  readonly="readonly" 
									value="">
								</td>   -->
		                           <!-- <td class=""></?php //echo $item->refNum  ?></td>
			<td class="">/?php //echo $item->mop  ?></td>>
								 <td style="text-align: center"></td>
								<td class=""></td>
								 <td class=""></td>

							</tr>  -->
							

				</table>
			</div>
			
		</div>
	</div>
	
	<table class="tcollect2">
		<tr>
				<th style="text-align:center; width:3%"></th>
				<th style="text-align:left;padding:5px;padding-left: 5px;width:11%;"></th>
				<th style="text-align:left;padding-left: 5px;width:11%;"></th>
				<th style="text-align:right;width:40%;font-family:Verdana;font-size:12px;">Total Collections: : </th>
				<th style="text-align:right;padding-right:9px;width:14%;font-family:Verdana;font-size:12px;">
					
				</th>
				<th style="text-align:right;padding-right: 5px;width:12%;font-family:Verdana;font-size:12px;">					
				</th>
				<th style="text-align:center;padding-right:5px;width:11%;"></th>
				<th style="text-align:center;padding-right:5px;width:11%;"></th>
			
		</tr>
		<table class="tfootTable">
            <tfoot>
                <tr class="under">
                    <td colspan="5" style="font-family:Verdana;font-size:11px;color:#fff;font-weight:bold;text-align: center" class="under">
                    </td>
                </tr>
            </tfoot>
        </table>


    <input type='hidden' name='task' value=''/>
    <input type="hidden" name="sortorder" value=""/>	
    <input type="hidden" name="sortdirection" value=""/>	
</form>
</div>
<div class="popBack hidden">

</div>

<div class="popup hidden">

</div>

<script>
    $(function() {
        $('.createNPAyment').click(function() {
            validateSeries('collection'); 
//            $.post(URL + 'invoice/enterpayment')
//			
//                    .done(function(returnData) {
//                        $('.popBack').html(returnData);
//                        $('.popBack').removeClass('hidden');
//                        $('body').css('overflow', 'hidden');
//
//
//                        $('.close1Client, .close1Client2').click(function() {
//                            if (confirm('Are you sure, you want to leave this page without posting?')) {
//                                $('.popBack').addClass('hidden');
//                                $('.popBack').html('');
//                                $('body').css('overflow', 'auto');
//                            }
//                        });
//                    })
//                    .fail(function() {
//                        alert('Connection Error!');
//                    });
//            return false;
        });
		
		
         $('input[name="chk[]"]').change(function () {
            $('input[name="print"]').removeClass('hidden');
            $('input[name="reverse"]').removeClass('hidden');

            // if ($('input[name="chk[]"]:checked').length > 1) {
                // $('input[name="print"]').addClass('hidden');
            // }

            $('input[name="chk[]"]:checked').each(function () {
                
				status = $(this).parent('td').parent('tr').find('td:nth-child(6)').html();
                
				if (status == 'Reversed' || status == 'reversed') {
                    $('input[name="reverse"]').addClass('hidden');
                    $('input[name="print"]').addClass('hidden');
                }
                
            });
        });


    })
</script>

<script>
    function view(paymentid) {
        $.post(URL + 'invoice/paymentview', {paymentid: paymentid})
                .done(function(returnData) {
                    $('.popBack').html(returnData);
                    $('.popBack').removeClass('hidden');
                    $('body').css('overflow', 'hidden');


                    $('.close').click(function() {
                        $('.popBack').addClass('hidden');
                        $('.popBack').html('');
                        $('body').css('overflow', 'auto');
                    });
                })
                .fail(function() {
                    alert('Connection Error!');
                });
        return false;
    }
</script>