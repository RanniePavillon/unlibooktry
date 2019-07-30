<style>
    .cnitableAllInvoice{
        border-collapse:collapse;
        width: 99%;
        margin:auto;
        margin-top: 5px;
        height:auto!important;
    }
    .cnitableAllInvoice, th{
        background-color: #55C768;
        padding: 2px 2px 2px 2px;
        font-size: 13px;
        color:white;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
        padding: 5px;
    }
    .cnitableAllInvoice, td{
        font-size: 12px;
        color:black;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
        padding: 5px;
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
        text-align: left;
    }
    .cnitableAllInvoice tr td:nth-child(5){
        text-align: left;
    }
    .cnitableAllInvoice tr td:nth-child(6){
        text-align: right;
        padding:5px;
    }
    .cnitableAllInvoice tr td:nth-child(7){
        text-align: left;
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
        background-image: url('<?= URL ?>public/images/prevNext.png');
        color: #e0e0e0;
        font-weight: bold;
        -webkit-box-shadow: inset 0px 1px 1px 0px rgba(250, 250, 250, 2);
        -moz-box-shadow: inset 0px 1px 1px 0px rgba(250, 250, 250, .2);
        box-shadow: inset 0px 1px 1px 0px rgba(250, 250, 250, .2);
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
        width: 210px;
        height: 32px;
        border: none;
        background-image:url('<?= URL ?>public/images/enterPaymentSales.png');
        background-repeat:no-repeat;
        cursor: pointer;
        border-radius:5px;
        background-size: 100% 100%;
        outline-style:none;
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
        font-family: verdana;
        text-align: left;
        padding: 5px;
    }
    .cnitableAllInvoice2, td{
        font-size: 12px;
        color:black;
        font-family:Verdana;
        text-align: left;
        padding:5px;
    }	
    .tfootTable{
        border-collapse:collapse;
        width: 99%;
        margin:auto;
        margin-top: 5px;
    }
    .tfootTable, th{
        background-color: #183867;
        font-size:12px;
        color: white;
        font-family:Verdana;
        text-align: left;
        padding: 5px;
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


<script>
    paymentid = '';
<?php if (Session::getSession('paymentidpreview') != '') { ?>
        paymentid = "<?php echo Session::getSession('paymentidpreview') ?>";
    <?php
    Session::setSession('paymentidpreview', '');
}
?>
</script>


<?php
require_once ('public/paginator.php');
$pages = new Paginator;

$page = isset($_GET['ipp']) ? (($_GET['ipp'] == "All") ? '' : ($_GET['page'])) : 1;
$ipp = isset($_GET['ipp']) ? (($_GET['ipp'] == "All") ? '' : $_GET['ipp']) : 25;
?>
<title>
    ALL Collection
</title>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<div class="mainbodyInvoice footerHeight">
    <form method='post' action='<?php echo URL ?>sales/collection?page=<?= $page ?>&ipp=<?= $ipp ?>' id='form'>
        <div class="invoiceHolderInvoice">
            <div id="newInvoice" class="headings">
                <label class="headText">ALL COLLECTION</label>
                <?php if ($useraccess->Add == 'yes') { ?>
                    <a href="">	
                        <!-- <label class="crossSalesCol"> -->
                            <input type="button" class="createNI buttonslarge" value="RECORD NEW PAYMENT">
                        <!-- </label> -->
                    </a>
                <?php } ?>
            </div>	

            <div style="clear:both;"></div>
            <div class="center2">
                <div id="search3" style="float:left;margin-top:9px;">
                    <?php if ($useraccess->Edit == 'yes') { ?>
                        <input type="button" name="edit" value="EDIT" class="delete1 buttonHover buttoninvoices" id="edit" onclick="editrec('', '')">
                    <?php }if ($useraccess->Add == 'yes') { ?>
                        <input type="button" name="copy" value="COPY" class="copyNew buttonHover buttoninvoices" onclick="copyrec('', 'copy')">
                    <?php }if ($useraccess->Delete == 'yes') { ?>
                        <input type="button" name="del" value="CANCEL" class="copyNew buttonHover buttoninvoices" id="delete" onclick="deleterec()">
                    <?php } ?>
                    <input type="button" name="sendinvoice" value="SEND INVOICE" class="sendI hidden buttoninvoices">
                    <input type="button" name="print" value="PRINT PREVIEW" class="printPrev buttonHover buttoninvoices">
                    <input type="button" name="reverse" value="REVERSE" class="reversecol buttonHover buttoninvoices" id="reversecol">
                    <input type="button" name="sendEmail" value="SEND EMAIL" class="sendEmail buttonHover hidden buttoninvoices">
                </div>
                <?php $searchby = isset($_POST['searchby']) ? $_POST['searchby'] : ''; ?>
                <div style="float:right;margin-right:30px;margin-top:4px;">
                    <span class="filteredby">Filtered By:</span>
                    <label class="labelclass">
                        <select class="inumber" name="searchby" id="searchby">
                            <option class="invNoOption" value="1" <?php echo ($searchby == 1) ? 'selected' : '' ?>>PAYMENT NO.</option>
                            <option class="invNoOption" value="2" <?php echo ($searchby == 2) ? 'selected' : '' ?>>CUSTOMER NAME</option>
                            <option class="invNoOption" value="3" <?php echo ($searchby == 3) ? 'selected' : '' ?>>PAYMENT DATE</option>
                            <option class="invNoOption" value="4" <?php echo ($searchby == 4) ? 'selected' : '' ?>>STATUS</option>
                        </select>
                    </label>
                    <input type="search" name="search" placeholder="SEARCH" class="searchindex
                           <?php echo ($searchby == 3) ? 'hidden' : '' ?>" value="<?= ISSET($_POST['search']) ? $_POST['search'] : '' ?>"> 

                    <input type="text" name="startdate" value="<?= ISSET($_POST['startdate']) ? $_POST['startdate'] : '' ?>" 
                           placeholder="From Date" class="date dateInputText hasDate <?php echo ($searchby != 3) ? 'hidden' : '' ?>" style="width:104px;height: 29px;"/>

                    <input type="text" name="enddate" value="<?= ISSET($_POST['enddate']) ? $_POST['enddate'] : '' ?>"
                           placeholder="To Date" class="date dateInputText hasDate <?php echo ($searchby != 3) ? 'hidden' : '' ?>" style="width:104px;height: 29px;"/>

                    <input type="submit" name="search2" value="SEARCH" class="search2 <?php echo ($searchby != 3) ? 'hidden' : '' ?>">

                    <div><input type="submit" name="search2" value="" class="search2Col <?php // echo ($searchby != 3) ? 'hidden' : ''             ?>" style="margin-left:331px;"></div>
                </div>
                <div style="clear:both;"></div>
            </div>
        </div>
        <div class="moduleHeight">
            <?php $sortdirection = isset($_POST['sortdirection']) ? $_POST['sortdirection'] : ''; ?>
            <table class="cnitableAllInvoice">
                <tr class="cnitableAllInvoiceTr" id="hoverTr">
                <tr class="headinvoiceCollection">
                    <th width="2%" style="padding:5px;"><!-- <input type="checkbox" class="toggle"> --></th>
                    <th width="11%" style="padding:5px;">Payment No.</th>
                    <th width="11%" style="padding:5px;">Payment Date</th>
                    <th width="11%" style="padding:5px;">Customer Name</th>
                    <th width="13%" style="text-align:right;padding:5px;">Amount Received</th>
                    <th width="10%" style="padding:5px; text-align: center">Status</th>
                    <th width="10%" style="padding:5px;text-align:left">Date Reversed</th>
                </tr>

                <?php
                $total = 0;
                if ($this->data) {
                    // echo '<pre>';
                    // print_r($this->data);
                    foreach ($this->data as $item) {
                        // echo '<pre>';print_r($item);
                        $total += round($item->amountReceived, 2);
                        $amount_received = Controller::getFloat($item->amountReceived);
                        // print_r($item->id);
                        ?>
                        <tr class="tablecni" id="hoverTr">
                            <td style="text-align:center;" class=""><input type="checkbox" name='chk[]' class='chk' value="<?php echo $item->id ?>"></td>
                            <td style="text-align:left;padding-left: 5px;" class=""><a onclick="view(<?php echo $item->id ?>)"><?php echo $item->salesColNum ?></a></td>
                            <td style="text-align:left;padding-left: 5px;" class=""><?php echo date('m/d/Y', strtotime($item->dateReceived)) ?></td>
                            <td style="text-align:left;padding-left: 5px;" class=""><?php echo $item->clientName ?></td>
                            <td style="text-align:right;padding-right: 5px;" class=""><?= $item->status == 'reversed' ?  '('.$amount_received.')' : $amount_received ?></td>
                            <td style="text-align:center"><?php echo $item->status ?></td>
                            <td class="stat"style="padding: 5px;"><?php echo $item->dateReversed == '0000-00-00' ? '' : date('m/d/Y', strtotime($item->dateReversed)) ?></td>
                        </tr>
                        <?php
                    }
                }
                ?>

            </table>

        </div>	

        <table class="cnitableAllInvoice2" style="margin-top:40px;">
            <tr class="cnitableAllInvoice2">
                <th style="text-align:center; width:3%"></th>
                <th style="text-align:left;padding:5px;padding-left: 5px;width:11%;"></th>
                <th style="text-align:left;padding-left: 5px;width:11%;"></th>
                <th style="text-align:right;width:20%;font-family:Verdana;font-size:12px;">Total : </th>
                <th style="text-align:right;padding-right:9px;width:14%;font-family:Verdana;font-size:12px;"><?php echo Controller::getFloat($total) ?></th>
                <th style="text-align:right;padding-right: 5px;width:12%;font-family:Verdana;font-size:12px;"></th>
                <th style="text-align:center;padding-right:5px;width:11%;"></th>
            </tr>
        </table>

        <div class="tcollect1 hidden">
            <div>Total:<input readonly="readonly" type="text" value="<?= number_format((float) $invoicetotal, 2, '.', '') ?> PHP" class="php1 numeric"></div>
            <div style="margin-top: -25px;margin-left: 180px;"><input readonly="readonly" type="text" class="balTotal" value="0.00"></div>
        </div>

        <table class="tfootTable">
            <tfoot>
                <tr class="under">
                    <td colspan="5" style="font-family:Verdana;font-size:11px;color:#fff;font-weight:bold;text-align: center" class="under">
                        <?php
                        echo "<span style=\"margin-left:25px\width:120px\"> " . $this->pages->display_jump_menu()
                        . $this->pages->display_items_per_page() . "</span>";
                        echo "Page " . $this->pages->current_page . " of " . $this->pages->num_pages;
                        ?>
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
    $(function () {
        if (paymentid != '') {
            printPreview(paymentid);
        }

        $('.createNI').click(function () {
            $.post(URL + 'sales/enterpayment')

                    .done(function (returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');

                        $('.close1Client, .close1Client2').click(function () {
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
        });

        $('.printPrev').click(function () {

            if ($('.chk').is(':checked')) {
                var checked = '';
                if ($('.chk:checked').length > 1) {
                    alert('Please select one record only to view.');
                    $('input[type="checkbox"]').prop('checked', false);
                    return false;
                } else {
                    $("input[name='chk[]']:checked").each(function ()
                    {
                        checked = parseInt($(this).val());
                        return false;
                    });
                    invoiceprintview = checked;
                    printPreview(checked);
                }
            } else {
                alert('Please select record to preview');
            }
        });

        $('#reversecol').click(function(){
            if($('.chk').is(':checked')){
            // alert('asd');
                var checked = '';
                var status  = $('.chk:checked').closest('tr').find('td:nth-child(6)').text().trim();
                var id = $('.chk:checked').val();
                // alert(id);return false;
                if($('.chk:checked').length > 1){
                    alert('Please select one record only to reverse.');
                    // if($('.chk:checked'))
                }else{
                    if(status == 'posted'){
                        confirm("Are you sure you want to reverse this collection?")
                        reverseCollection(id);
                    }else{
                        alert('Please select posted transactions only.');
                    }
                }
            }else{
                alert('Please select one record to reverse.');
            }
        });

    });

    function reverseCollection(id){
        // alert(id);
        $('body').css('overflow', 'hidden');
        $('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
        $('.popBack').removeClass('hidden');

        $.post(URL+"sales/reverseCollectionNew", {paymentids: id})
        .done(function(returnData){
            status = returnData.trim();
            // alert(status);return false;
            if(status == 'reversed'){
                window.location.href = URL+'sales/collection';
            }

            // $('body').css('overflow', 'auto');
            // $('.popBack').addClass('hidden');
        })
        .fail(function(){
            alert('Connection Error');
        });
        return false;

    }


    function printPreview(id) {
        $.post(URL + 'sales/printSalesCollectionReceipt', {invoiceid: id})
                .done(function (returnData) {
                    $('.popBack').html(returnData);
                    $('.popBack').removeClass('hidden');
                    $('body').css('overflow', 'hidden');
                    $('.popx').click(function () {
                        $('.popBack').addClass('hidden');
                        $('.popBack').html('');
                        $('body').css('overflow', 'auto');
                        $('.chk').removeAttr('checked');
                    });
                })
                .fail(function () {
                    alert('Connection Error!');
                });
        return false;
    }

    function view(paymentid) {
        $.post(URL + 'sales/paymentview', {paymentid: paymentid})
                .done(function (returnData) {
                    $('.popBack').html(returnData);
                    $('.popBack').removeClass('hidden');
                    $('body').css('overflow', 'hidden');


                    $('.close').click(function () {
                        $('.popBack').addClass('hidden');
                        $('.popBack').html('');
                        $('body').css('overflow', 'auto');
                    });
                })
                .fail(function () {
                    alert('Connection Error!');
                });
        return false;


        /* if ($('.chk').is(':checked') || invoiceid != '') {
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
         alert('Cash Invoice may be posted/reversed. You can no longer edit the cash invoice.');
         $('input[name="chk[]"]:checked').prop('checked', false);
         return false;
         }
         
         $().redirect(URL + 'sales/newCashInvoice', {'id': checked, 'status': stat, 'task101': 'updatecashinvoice'})
         
         return false;
         } else {
         alert('Please select record to edit');
         } */
    }
</script>
