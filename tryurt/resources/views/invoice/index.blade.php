<!-- </?php
Session::setSession('invoiceid', '');
?> -->
@include('layouts.header')

<script src="{{asset('js/try.js')}}"></script>
<style>
    .cSearch::-webkit-input-placeholder {
        color: #fff;
        padding-left: 35px;
    }

    .hrdashreport {
        height: 5px;
        width: 0%;
        background-color: #c51400;
        border: none;
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

    .cnitableAllInvoice {
        border-collapse: collapse;
        width: 99%;
        margin: auto;
        margin-top: 5px;
        height: auto !important;
    }

    .cnitableAllInvoice,
    th {
        background-color: #A70C0C;
        padding: 2px 2px 2px 2px;
        font-size: 13px;
        color: white;
        font-family: verdana;
        text-align: left;
        padding: 5px;
    }

    .cnitableAllInvoice,
    td {
        font-size: 12px;
        color: black;
        font-family: verdana;
        text-align: left;
        padding: 2px 5px 2px 5px;
    }

    .cnitableAllInvoice a {
        color: blue;
        font-size: 12px;
        font-weight: normal;
        cursor: pointer;
        text-decoration: underline;
        font-family: Verdana;
    }

    .cnitableAllInvoice tr th:nth-child() {
        text-align: right;
    }

    .cnitableAllInvoice tr th:nth-child(6) {
        text-align: right;
    }

    .cnitableAllInvoice tr th:nth-child(7) {
        text-align: right;
    }

    .cnitableAllInvoice tr td:nth-child(5) {
        text-align: left;
    }

    .cnitableAllInvoice tr td:nth-child(6) {
        text-align: right;
        padding: 5px;
    }

    .cnitableAllInvoice tr td:nth-child(7) {
        text-align: center;
    }

    .cnitableAllInvoice tr td:nth-child(8) {
        text-align: center;
    }

    .cnitableAllInvoice tr th:nth-child(8) {
        text-align: center;
    }

    .cnitableAllInvoice tr td:nth-child(2) {
        text-decoration: none;
        font-family: Agency FB;
    }

    #hoverTr:hover {
        background-color: #E8E8E8;
    }

    .dateInputText {
        background-color: white;
        border: 1px solid rgba(0, 0, 0, 0.27);
        ;
        padding: 5px 5px 5px 5px;
        margin-top: 8px;
    }

    .center2 a {
        color: black;
    }

    .tablecni a {
        text-decoration: none;
    }

    .tablecni a:hover {
        text-decoration: underline;
    }

    .cnitableAllInvoiceTr a {
        text-decoration: none;
        color: white;
        font-size: 12px;
        font-family: Verdana;
        font-weight: bold;
    }

    .cnitableAllInvoiceTr a:hover {}

    .ui-datepicker-calendar th {}

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

    .ui-datepicker-prev,
    .ui-datepicker-next {
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
        background-image: -moz-linear-gradient(top, #f7f7f7 0%, #f1f1f1 100%);
        background-image: -webkit-gradient(linear, left top, left bottombottom, color-stop(0%, #f7f7f7), color-stop(100%, #f1f1f1));
        background-image: -webkit-linear-gradient(top, #f7f7f7 0%, #f1f1f1 100%);
        background-image: -o-linear-gradient(top, #f7f7f7 0%, #f1f1f1 100%);
        background-image: -ms-linear-gradient(top, #f7f7f7 0%, #f1f1f1 100%);
        background-image: linear-gradient(top, #f7f7f7 0%, #f1f1f1 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f7f7f7', endColorstr='#f1f1f1', GradientType=0);
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

    .ui-datepicker td span,
    .ui-datepicker td a {
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
        background: -moz-linear-gradient(top, #ededed 0%, #dedede 100%);
        background: -webkit-gradient(linear, left top, left bottombottom, color-stop(0%, #ededed), color-stop(100%, #dedede));
        background: -webkit-linear-gradient(top, #ededed 0%, #dedede 100%);
        background: -o-linear-gradient(top, #ededed 0%, #dedede 100%);
        background: -ms-linear-gradient(top, #ededed 0%, #dedede 100%);
        background: linear-gradient(top, #ededed 0%, #dedede 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dedede', GradientType=0);
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

    .search2 {
        font-family: agency fb2 !important;
    }

    .date {
        width: 104px;
        height: 28px;
        font-family: agency fb2;
        font-size: 16px;
        font-weight: bold;
        padding: 5px;
        border: 1px solid #183867;
    }

    .invoiceText {
        border: none;
        text-align: right;
        background: none;
        font-size: 12px;
        color: black;
        font-family: verdana;
    }

    .balinvoices {
        font-size: 12px;
        font-family: verdana;
        text-align: right;
        border: none;
        background: none;

    }

    .balTotal {
        margin-left: 63px;
        width: 115px;
        text-align: center;
        font-size: 12px;
        font-family: verdana;
        border: none;
        border-top: solid 1px #000;
    }

    .cnitableAllInvoice2 {
        border-collapse: collapse;
        width: 99%;
        margin: auto;
        margin-top: 5px;
        margin-top: -96px;
    }

    .cnitableAllInvoice2,
    th {
        background-color: #55C768;
        padding: 2px 2px 2px 2px;
        font-size: 13px;
        color: white;
        font-family: verdana;
        text-align: left;
        padding: 5px;
    }

    .cnitableAllInvoice2,
    td {
        font-size: 12px;
        color: black;
        font-family: Verdana;
        text-align: left;
        padding: 5px;
        height: 30px;
    }

    .tfootTable {
        border-collapse: collapse;
        width: 99%;
        margin: auto;
        margin-top: 5px;
    }

    .tfootTable,
    th {
        /* background-color: #c51400;
        font-size:12px;
        color: white;
        font-family:Verdana;
        text-align: left;
        padding: 11px; */
    }

    .tfootTable a {
        color: #FFF;
        text-decoration: none;
        cursor: pointer;
        font-family: Verdana;
        font-size: 9px;
        font-weight: bold;
    }

    .tfootTable a:hover {
        text-decoration: underline;
    }

    .tfootTable select {
        width: 65px;
        height: 18px;
        margin-left: 10px;
        margin-right: 10px;
        /* background-image: url('{{asset('images/dropSelect.png')}}');
        background-size: 65px 18px;
        background-repeat: no-repeat;
        -webkit-appearance: none; */
    }

    .statInputnew {
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        font-size: 12px;
        width: 100%;
        text-align: center;
        border: none;
        background: none;
    }

    .invNoOption {
        background-color: #fff;
        color: #000;
        font-weight: bold !important;
    }

    .buttonHover:hover {
        color: #B13C56;
    }

</style>
<script>
    $(function () {
        $('#searchby').change(function () {
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
    })

</script>
<!-- </?php
require_once ('public/paginator.php');
$pages = new Paginator;
//echo $var = TblNewInvoiceMySqlExtDAO::getMaxNumId();
$page = isset($_GET['ipp']) ? (($_GET['ipp'] == "All") ? '' : ($_GET['page'])) : 1;
$ipp = isset($_GET['ipp']) ? (($_GET['ipp'] == "All") ? '' : $_GET['ipp']) : 25;
?> -->
<title>
    ALL BILLINGS
</title>
<link rel="stylesheet" href="{{asset('css/overall.css')}}" />
<div class="container">
    <hr class="hrdashreport">
    <form method='post' action="{{('invoice/invoices')}}" id='form'>
        <div class="invoiceHolderInvoice">
            <div id="newInvoice" class="headings">
                <label class="headText">ALL BILLINGS</label>
                <!-- </?php if ($useraccess->Add == 'yes') { ?>	 -->
                <!-- <a href="{{('invoice/add')}}">	
                         <label class="crossbilling">  -->
                             <a href ="{{('/invoice/new')}}">
                <input type="button" class="createNI buttonslarge" value="CREATE NEW BILLING">
                </a>
                <!-- </label> -->
                <!-- </a> -->
            </div>

            <div style="clear:both;"></div>
            <div class="center2">
                <div id="search3" style="float:left;margin-top:10px;margin-left:10px;">
                    <!-- </?php if ($useraccess->Edit == 'yes') { ?> -->
                    <input type="button" name="edit" value="EDIT" class="delete1 buttonHover buttoninvoices" id="edit"
                        onclick="editrec('', '')">
                    <!-- </?php }if ($useraccess->Add == 'yes') { ?> -->
                    <input type="button" name="copy" value="COPY" class="copyNew buttonHover buttoninvoices"
                        onclick="copyrec('', 'copy')">
                    <!-- </?php }if ($useraccess->Delete == 'yes') { ?> -->
                    <input type="button" name="del" value="CANCEL" class="copyNew buttonHover buttoninvoices"
                        id="delete" onclick="deleterec()">
                    <!-- </?php } ?> -->
                    <input type="button" name="sendinvoice" value="SEND INVOICE" class="sendI hidden buttoninvoices">
                    <input type="button" name="print" value="PRINT PREVIEW"
                        class="printPrev buttonHover buttoninvoices">
                    <input type="button" name="sendEmail" value="SEND EMAIL"
                        class="sendEmail buttonHover buttoninvoices">
                    <!--<input type="button" name="addpayment" value="Payment" class="addP" <?php // echo ($status == 'posted')    ?> />-->
                </div>
                <!-- </?php $searchby = isset($_POST['searchby']) ? $_POST['searchby'] : ''; ?> -->
                <div style="float:right;margin-right:30px;margin-top:10px;">
                    <span class="filteredby">Filtered By:</span>
                    <label class="labelclass">

                        <select class="inumber" name="searchby" id="searchby">
                            <option class="invNoOption" value="1">BILLING NO.</option>
                            <option class="invNoOption" value="2">CUSTOMER NAME</option>
                            <option class="invNoOption" value="3">DATE</option>
                            <option class="invNoOption" value="4">STATUS</option>
                        </select>
                    </label>
                    <input type="search" placeholder="SEARCH" name="search" class="cSearch">

                    <input type="text" name="startdate" value="" placeholder="From Date"
                        class="date dateInputText hasDate" style="width:104px;height: 29px;" />

                    <input type="text" name="enddate" value="" placeholder="To Date" class="date dateInputText hasDate"
                        style="width:104px;height: 29px;" />

                    <input type="submit" name="search2" value="SEARCH" class="search2">

                    <div><input type="submit" name="search2" value="" class="search2Col"></div>
                </div>
                <div style="clear:both;"></div>
            </div>
        </div>
        <div class="moduleHeight">
            <div>
                <!-- </?php $sortdirection = isset($_POST['sortdirection']) ? $_POST['sortdirection'] : '' ?> -->
                <table class="cnitableAllInvoice table-bordered table-striped" id="allbillings">
                    <thead class="cnitableAllInvoiceTr" id="hoverTr">

                        <tr>
                            <th style="text-align:center; width:3%">
                                <!-- <input type="checkbox" class='toggle' > -->
                            </th>
                            <th style="text-align:left;padding:5px;padding-left: 5px;width:11%;"><a
                                    onclick="sort('invoice', '')">Billing No.</a></th>
                            <th style="text-align:left;padding-left: 5px;width:11%;"><a
                                    onclick="sort('date', '')">Date</a>
                            </th>
                            <th style="text-align:left;padding-left: 5px;width:20%;"><a
                                    onclick="sort('client', '')">Customer Name</a></th>
                            <th style="text-align:right;padding-right:0px;width:11%;">Total Amount</th>
                            <th style="text-align:right;padding-right: 5px;width:12%;">Amount Balance</th>
                            <th style="text-align:center;padding-right:5px;width:11%;">Status</th>
                            <th style="text-align:center;padding-right:5px;width:11%;">Date Reversed</th>
                        </tr>
                    </thead>
                    <tbody style="background-color:white;">
                        <td></td>
                        <td ></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tbody>
                    <!-- </?php
                            $invoice = TblNewInvoiceMySqlExtDAO::getData(($_GET['ipp'] == "All") ? '' : $_GET['ipp'], ($_GET['ipp'] == "All") ? '' : $_GET['ipp'] * ($_GET['page'] - 1));
                            $pages->items_total = count(TblNewInvoiceMySqlExtDAO::getData('', -1));
					$pages->mid_range = 9;
					$pages->paginate();
					$invoicetotal = 0;
					$balancetotal = 0;
					if (count($invoice) > 0) {

						// echo '<pre>';
						// echo ($_GET['ipp'] == "All") ? '' : $_GET['ipp'];
						// echo '<br>';
						// echo ($_GET['ipp'] == "All") ? '' : $_GET['ipp'] * ($_GET['page'] - 1);
						// print_R($invoice);
						// echo '</pre>';
						// exit;
						foreach ($invoice as $item) {
							$allInvoice = DAOFactory::getTblAllInvoiceDAO()->queryByNewInvoiceId($item->id);
							$allInvoice = DAOFactory::getTblInvoiceAmountDAO()->queryByAllInvoiceId($allInvoice[0]->id);
							$grandTotal = 0;


							if (!empty($allInvoice) && isset($allInvoice)) {
								$grandTotal = $allInvoice[0]->grandTotal;
							}
							$amountBalance = 0;
							$balanceObj = TblEnterPaymentMySqlExtDAO::getClientNotCollecterInvoice($item->clientId, '', $item->id);
							$balance = $balanceObj[0]['grand_total'] - ($balanceObj[0]['wht_amount'] + $balanceObj[0]['applied_amount']);
							$grand_total = $balanceObj[0]['grand_total'];
							if ($item->status == 'open') {
								$balance = $grandTotal;
							}
							if ($item->status != 'reversed') {
								$invoicetotal += $grandTotal;
								$balancetotal += $balance;
							}

							if ($grandTotal < 0) {
								$grandTotal = $grandTotal * -1;
								$grandTotal = Controller::getFloat($grandTotal);
								// $grandTotal = number_format((float) $grandTotal, 2);
								// $grandTotal = "(". $grandTotal. ")";
							} else {
								$grandTotal = number_format((float) $grandTotal, 2);
							}
							if ($balance < 0) {
								$balance = $balance * -1;
								$balance = number_format((float) $balance, 2);
								$balance = "(" . $balance . ")";
							} else {
								$balance = number_format((float) $balance, 2);
							}
							?> -->

                </table>
            </div>
        </div>
        <table class="cnitableAllInvoice2" style="margin-top:40px;">
                <tr class="cnitableAllInvoice2">
                    <th style="text-align:center; width:3%"></th>
                    <th style="text-align:left;padding:5px;padding-left: 5px;width:11%;"></th>
                    <th style="text-align:left;padding-left: 5px;width:11%;"></th>
                    <th style="text-align:right;width:20%;font-family:Verdana;font-size:12px;">Total : </th>
                    <th style="text-align:right;padding-right:9px;width:14%;font-family:Verdana;font-size:12px;">

                    </th>
                    <th style="text-align:right;padding-right: 5px;width:12%;font-family:Verdana;font-size:12px;">
                    </th>
                    <th style="text-align:center;padding-right:5px;width:11%;"></th>
                    <th style="text-align:center;padding-right:5px;width:11%;"></th>
                </tr>
            <tbody>
        
            </tbody>
            <div class="tcollect1 hidden">
        </table>
        
        <div>Total:<input readonly="readonly" type="text" value="PHP" class="php1 numeric"></div>
        <div style="margin-top: -25px;margin-left: 180px;"><input readonly="readonly" type="text" class="balTotal"
                value="0.00"></div>
</div>



<input type='hidden' name='task' value='' />
<input type="hidden" name="sortorder" value="" />
<input type="hidden" name="sortdirection" value="" />
</form>
</div>
<div class="popBack hidden"></div>

<script>    



        //     $(document).ready(function () {
        //     $('#allbillings').DataTable({
        //         alert('hi');
        //         "bDestroy": true,
        //         "bSort": false,
        //         //"sPaginationType" : "full_numbers",
        //         "iDisplayLength": 25,
        //         "bLengthChange": true
        //     });
        // });

    // datepicker
    $('.hasDate').prop('readonly', true);
    $('.hasDate').datepicker({
        dateFormat: 'mm/dd/yy'
    });
    $('.hasDate').change(function () {
        dates = $.datepicker.formatDate('mm/dd/yy', new Date($(this).val()));
        $(this).val(dates);
    });

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
                alert('Billing(s) may be posted/reversed. You can no longer delete the billing.');
                $('input[name="chk[]"]').prop('checked', false);
                return false;
            }

            if (confirm('Are you sure you want to delete the following record(s)?')) {
                $('input[name="task"]').val('delinvoice');
                $('#form').submit();
            }
        } else {
            alert('Please select record to delete');
        }
    }

    function editrec(invoiceid, stat) {
        task101 = (stat == 'open') ? 'updateinvoice' : ((stat == 'posted') ? 'postedinvoice' : 'reverseinvoice');
        // alert('asdf');
        if ($('.chk').is(':checked') || invoiceid != '') {
            var checked = "";
            count = 0;
            myThis = '';
            status = '';
            $("input[name='chk[]']:checked").each(function () {
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

            $("input[name='chk[]']:checked").each(function () {
                status = $(this).parent('td').parent('tr').find('td:nth-child(7)').html();
                if (status == 'Posted' || status == 'Reversed') {
                    return false;
                }
            });

            if (status == 'Posted' || status == 'Reversed') {
                alert('Billing(s) may be posted/reversed. You can no longer edit the billing.');
                $('input[name="chk[]"]').prop('checked', false);
                return false;
            }
            status = $(myThis).parent('td').parent('tr').find('td:nth-child(7)').html();
            if (status == 'Posted' && stat != 'copy') {
                alert('Billing is posted. You can no longer edit the billing.');
                return false;
            } else {
                // alert(status);
                // alert(task101);
            }
            if (stat == '') {
                task101 = (status == 'Open') ? 'updateinvoice' : ((status == 'Posted') ? 'postedinvoice' :
                    'reverseinvoice');
            }
            // alert(checked);
            // return false;
            $().redirect(URL + 'invoice/add', {
                'invoiceid': checked,
                'status': stat,
                'task101': task101
            })
            /* .done(function(returnData) {
             $('.popBack').html(returnData);
             $('.popBack').removeClass('hidden');
             $('.popBack').removeClass('hidden');
             
             $('.closeNewItem').click(function() {
             $('.popBack').addClass('hidden');
             $('.popBack').html('');
             $('body').css('overflow', 'auto');
             });
             })
             .fail(function() {
             alert('Connection Error!');
             }) */
            ;
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
            $("input[name='chk[]']:checked").each(function () {
                checked = parseInt($(this).val());
                count++;
                myThis = $(this);
                // return false;
            });
            if (invoiceid != '') {
                checked = parseInt(invoiceid);
            }

            if (count > 1) {
                alert('Please select one record only to copy.');
                $('input[type="checkbox"]').prop('checked', false);
                return false;
            }

            status = $(myThis).parent('td').parent('tr').find('td:nth-child(7)').html();
            if (status == 'posted' && stat != 'copy') {
                alert('Invoice is posted. You can no longer edit the invoice.');
                return false;
            }
            // alert(checked);
            // return false;
            $().redirect(URL + 'invoice/add', {
                    'invoiceid': checked,
                    'status': stat,
                    'task101': 'addinvoice'
                })
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
            alert('Please select record to copy');
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
                $("input[name='chk[]']:checked").each(function () {
                    checked.push(parseInt($(this).val()));
                    return false;
                });
                //            alert(checked[0]);
                $.post(URL + 'invoice/enterpayment', {
                        invoiceid: checked[0],
                        stat: 'invoice'
                    })
                    .done(function (returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');
                        $('.cancel').click(function () {
                            if (confirm(
                                    'Are you sure you want to leave this page without posting?'
                                )) {
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

        $('input[name="chk[]"]').change(function () {

            $('input[name="edit"]').addClass('hidden');
            $('input[name="copy"]').addClass('hidden');
            $('input[name="del"]').addClass('hidden');
            $('input[name="print"]').addClass('hidden');
            $('.sendEmail').addClass('hidden');

            if ($('input[name="chk[]"]:checked').length == 0) {
                $('input[name="edit"]').removeClass('hidden');
                $('input[name="copy"]').removeClass('hidden');
                $('input[name="del"]').removeClass('hidden');
                $('input[name="print"]').removeClass('hidden');
                $('.sendEmail').removeClass('hidden');
                return false;
            }

            if ($('input[name="chk[]"]:checked').length == 1) {
                $('input[name="copy"]').removeClass('hidden');
                transStatus = $('input[name="chk[]"]:checked').parent('td').parent('tr').find(
                    'td:nth-child(7)').html();
                if (transStatus == 'Posted') {
                    $('input[name="print"]').removeClass('hidden');
                    $('.sendEmail').removeClass('hidden');
                } else if (transStatus == 'Open') {
                    $('input[name="edit"]').removeClass('hidden');
                    $('input[name="del"]').removeClass('hidden');
                }
            } else {
                canCancel = true;
                $('input[name="chk[]"]:checked').each(function () {
                    transStatus = $(this).parent('td').parent('tr').find('td:nth-child(7)')
                        .html();
                    if (transStatus != 'Open') {
                        canCancel = false;
                    }
                });
                if (canCancel) {
                    $('input[name="del"]').removeClass('hidden');
                }
            }

        });
    })

</script>


<script>
    function view(paymentid) {
        $.post(URL + 'invoice/paymentview', {
                paymentid: paymentid
            })
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

</script>

<script>
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
                    $("input[name='chk[]']:checked").each(function () {
                        checked = parseInt($(this).val());
                        return false;
                    });
                    $.post(URL + 'invoice/printPreview', {
                            invoiceid: checked
                        })
                        .done(function (returnData) {
                            $('.popBack').html(returnData);
                            $('.popBack').removeClass('hidden');
                            $('body').css('overflow', 'hidden');
                            $('.closePrint').click(function () {
                                $('.popBack').addClass('hidden');
                                $('.popBack').html('');
                                $('.chk').removeAttr('checked');
                                $('body').css('overflow', 'auto');

                            });
                        })
                        .fail(function () {
                            alert('Connection Error!');
                        });
                    return false;
                }
            } else {
                alert('Please select record to preview');
            }
        });
        $('.sendI').click(function () {
            alert('Sorry, link unavailable.');
        });

        $('.sendEmail').click(function () {
            // alert('sdfdsf');
            if ($('.chk').is(':checked')) {
                var checked = new Array();
                $("input[name='chk[]']:checked").each(function () {
                    checked.push($(this).val());
                });

                $.post(URL + 'invoice/sendEmail', {
                        'ids': checked
                    })
                    .done(function (returnData) {
                        if (returnData != 0) {
                            alert(returnData);
                        } else {
                            alert('Billing Charge Successfully Sent!');
                        }
                        $('input[type="checkbox"]').prop('checked', false);
                    });

            }

        });
    })

</script>
@extends('layouts.footer')
