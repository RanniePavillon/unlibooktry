

<style>
    .popBack, .popBackN{
        background: black;
        position: fixed;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        background-color: rgba(1, 1, 1, 0.3);
        overflow:auto;
    }
    .container{
        margin: auto;
    }
    .table1Enter, td{
        padding-top:3px !important;
    }
    .enterpaymentForm{
        background-color: white;
        width: 900px;
        margin: auto !important;
        margin-top: 70px !important;
        border: 2px solid #24b6ef;
        padding-bottom: 20px;
        margin-bottom:30px !important;
    }
    .titleEnterPayment{
    }
    .table1Enter{
        margin-left:25px;
        margin-top: 10px;
    }
    .table{
        border-spacing: 5px;
    }
    .table1Enter td{
        font-size:12px;
        font-family:Verdana;
        color: #000000;
        padding:0px;
    }
    .cnitableCollection tr th:nth-child(4)(5){
        text-align: right;
    }
    .table1Enter select{
        width:248px;
        height:27px;
        font-family:Verdana;
        font-size:12px;
        margin-top:3px;
        margin-left:10px;
    }
    table1Enter input[type=text]{
        width: 170px;
        height: 25px;
        padding-left: 5px;
        margin-top:-5px;
        font-family:calibri;
        font-size:17px;
    }
    .table2Enter{
        border-spacing: 5px;
    }
    .table2Enter td{
        font-size:12px;
        font-family:Verdana;
        color: #000000;
        padding:0px;
    }
    .textEnterPaymentnew{
        height: 27px;
        width: 248px;
        padding-left: 5px;
        font-family:Verdana;
        font-size:12px;
        margin-left:10px;
    }
    .textarea{
        width: 248px;
        height: 90px;
        max-height: 90px;
        max-width: 248px;
        padding-left: 5px;
        font-family:Verdana;
        font-size:12px;
        margin-top:3px;
        margin-left:10px;
    }
    .note{
        position: relative;
        top: -28px;
    }
    .search{
        margin-left:6px;
    }
    .txtsearch2::-webkit-input-placeholder{
        color:gray;
        padding-left:7px;
    }
    .txtsearch2{
        width: 208px;
		height: 30px;
		border: 1px solid #c8c8c8;
		padding-left: 5px;
		padding-right: 34px;
		text-align: left;
		font-family: agency fb2;
		font-size: 16px;
		font-weight: bold;
		color: #000;
		outline-style: none;
		border-radius: 2px;
		background: #fff;
    }
    /*  .searchbutton{
         width: 35px;
         height: 33px;
         /* margin-left: 301px; */
    /*    cursor: pointer;
        border: none;
        background-image: url('<?= URL ?>public/images/searchButton.png');
        background-repeat: no-repeat;
        border-radius: 2px 2px 2px 2px;
        font-size: 14px;
        font-family: Agency FB;
        cursor: pointer;
        border: none;
        color: whitesmoke;
        border: solid 1px #c8c8c8;
        background-color: rgb(230, 250, 222);
        background-repeat: no-repeat;
        background-position: 3px;
        margin-left: -39px;
        background-size: 100%;
        opacity: -8;*/
    /*}*/ 
    .mainTable{
        border-collapse: collapse;
        width: 97%;
        margin-top: 10px;
        margin:auto;
    }

    .mainTable th{
        /* background-color: #c51400; */
        color: white;
        font-weight: bold;
        font-size: 12px;
        font-family:Verdana;
        text-align: left;
        padding:5px;
    }
    .mainTable td{
        color: black;
        font-weight:normal;
        font-size:12px;
        font-family: Verdana;
        text-align: left;
        padding:0px;
        padding-left:5px;
        padding-right:5px;
    }

    .tableDiv{
        margin-top:10px;
        margin-left:8px;
    }
    .mainTable tr th:nth-child(6){
        text-align: right;
    }
    .mainTable tr th:nth-child(5){
        text-align: right;
    }
    .mainTable tr th:nth-child(7){
        text-align: right;
    }
    .mainTable tr td:nth-child(6){
        text-align: right;
    }
    .mainTable tr td:nth-child(5){
        text-align: right;
    }
    .mainTable tr td:nth-child(7){
        text-align: right;
    }
    .mainTable a{
        color: blue;
    }
    .mainTable input[type=text]{
        width: 120px;
        height: 25px;
        text-align: right;
        margin-top: 1px;
        font-family:Verdana;
        font-size:12px;
    }
    .hrclass{
        width: 99%;
        margin: auto;
        margin-top: 40px;
        border-top: none;
        border-bottom: 1px solid c8c8c8;
    }

    .mainTable tr:hover{
        background-color: c8c8c8;
    }
    .buttons1{
        width: 100px;
        height: 28px;
    }
    .buttons{
        width: 100px;
        height: 28px;

    }
    .buttonscontainer{
        margin-left: 678px;
        margin-top: 9px;
    }
    .selectPay{
        width:248px;
        height:27px;
        font-family:Verdana;
        font-size:12px;
        margin-left:10px;
    }
    .mainTable input[type="text"]{
        background:none;
        border:none;
    }

    .close1Client{
        background: transparent;
        color: black;
        border: none;
        border-radius: 2px;
        font-family: Arial black;
        font-weight: bold;
        font-size: 24px;
        right: 205px;
        top: 70px;
        outline-style: none;
        cursor: pointer;
        float: right;
        margin-right: 5px;
    }
    .loadingHolder{
        margin-top:15%;
        margin-left:45%;
    }
    .loadingimg{
        width:140px;
        height:140px;
    }
    .partialtable{
        width:392px;
        margin-top:5px;
    }
    .partialpaymentforms{
        float: right;
        margin-right:489px;
    }
    .partialpayments{
        height: 27px;
        width: 248px;
        font-size: 12px;
        font-family: verdana;
        padding:5px;
        border:solid 1px #c8c8c8;
    }
    .scrolling{
        overflow:scroll;
        height:180px;
    }
</style>

<title>
    Collection
</title>
<?php
$taxtype = DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('infoid'))->typeOfTax;
$whtTax = TblTrialBalanceMySqlExtDAO::getLastCollectionWht();
?>
<script>
    taxtype = "<?php echo $taxtype ?>";
</script>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<div class="container">
    <form method="post" action="<?php echo URL ?>invoice/collection" class="enterpaymentForm boxshadow" id="form">
        <!--<input type="button" class="close1Client" value="x">-->
        <div class="titleEnterPayment headingspop">
            ENTER PAYMENT</div>
        <table class="table1Enter" style="float:left;">
            <tr>
                <td>Date Received:</td>
                <td>
                    <input type="hidden" name="token" value="<?=$this->token;?>">
                    <input type="text" id="di" name="dateReceived" required style="width:248px!important;" class="textEnterPaymentnew" value="<?php echo date('m/d/Y') ?>">
                </td>
            <input type="hidden" id="di" name="dateCreated" required style="width:248px!important;" class="textEnterPaymentnew dd" value="<?php echo date('m/d/Y') ?>">
            </tr>
            <tr>
                <td>Received from Client:</td>
                <td colspan="3">
                    <?php
                    if (isset($_POST['stat'])) {
                        echo $invoice = DAOFactory::getTblNewInvoiceDAO()->load($_POST['invoiceid']);
                        ?>
                        <input type="text" class="textEnterPaymentnew" value="<?php echo DAOFactory::getTblClientDAO()->load($invoice->clientId)->clientName ?>" />
                        <?php
                    } else {
                        $overPayment = TblAllCollectionMySqlExtDAO::getLatestCollection(Session::getSession('orgid'), '');
                        $customer = TblEnterPaymentMySqlExtDAO::getClient(Session::getSession('orgid'));

                        if (count($customer)) {//
                            ?>
                            <select class="table1Enterselect client" name="clientId" ><option></option>
                                <?php foreach ($customer as $item) { ?>
                                    <option value='<?php echo $item['client_id'] ?>'><?php echo $item['client_name'] ?></option>
                                <?php } ?>
                            </select>
                            <?php
                        } else {
                            echo 'No Available Client';
                        }
                    }
                    ?>
                </td>
            </tr>

            <tr>
                <td>Withholding Tax:</td>
                <td>
                    <select class="wtax" name="whtTax" id="whtax" required>
                        <option value="0" <?= $whtTax == '' ? 'selected' : '' ?>>--Select--</option>
                        <option value="0" <?= $whtTax == '0' ? 'selected' : '' ?>>0%</option>
                        <option value="1" <?= $whtTax == '1' ? 'selected' : '' ?>>1%</option>
                        <option value="2" <?= $whtTax == '2' ? 'selected' : '' ?>>2%</option>
                        <option value="5" <?= $whtTax == '5' ? 'selected' : '' ?>>5%</option>
                        <option value="10" <?= $whtTax == '10' ? 'selected' : '' ?>>10%</option>
                        <option value="15" <?= $whtTax == '15' ? 'selected' : '' ?>>15%</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:left;">
                    <label>Received 2307 form</label> 
                    <input type="radio" name="received2307" value="yes" class="2307form" style="margin-left:25px;" id="yes2307"><label for="yes2307">Yes</label>
                    <input type="radio" name="received2307" value="no" class="2307form" id="no2307"><label for="no2307">No</label></td>

            </tr>
            <tr class="hidden">
                <td>Amount Received:</td>
                <td>
                    <input type="text" name="amountReceived" id="amountReceived" class="textEnterPaymentnew isNumeric" id="amountReceived" style="border: 1px solid rgb(187, 185, 185);">
                </td>
            </tr>

            <tr class="hasClientSelected hidden">
                <td>
                    <input type="checkbox" id="useEnterPayment" name="overPayment"/>
                    <label for="useEnterPayment">
                        Apply Overpayment
                    </label>
                </td>
                <td>
                    <?php
                    if ($overPayment) {
                        foreach ($overPayment as $each) {
                            if ($each['op_amount'] != 0) {
                                ?>
                                <input type="text" class="op textEnterPaymentnew isNumeric"
                                       value="<?= number_format((float) $each['op_amount'], 2) ?>"
                                       client="<?= $each['client_id'] ?>" readOnly />     
                                       <?php
                                   }
                               }
                           }
                           ?>
                </td>
            </tr>
        </table>
        <table class="table2Enter" style="float:right;margin-right:20px;margin-top:10px;">
            <thead>
                <tr>
                    <td>Method of Payment:</td>
                    <td><select class="selectPay" name="mopId">
                            <?php
                            $mop = DAOFactory::getTblMopDAO()->queryAll();
                            foreach ($mop as $each) {
                                echo '<option value="' . $each->id . '" title="' . $each->description . '">' . $each->code . '</option>';
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>OR No.:</td>
                    <td>
                        <input type="text" name="refNum" style="width:248px!important;margin-top:3px;" class="textEnterPaymentnew" value="<?php echo $this->casNo != '' ? $this->casNo : $this->orNum; ?>" required>
                        <span style="color:red;">*</span>
                    </td>
                </tr>
                <tr>
                    <td class="note">Notes:</td>
                    <td colspan="3"><textarea name="notes" class="textarea"></textarea></td>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        <div style="clear:both"></div>
        <div class="search">
            <input type="search" placeholder="Search Billing No." class="txtsearch2" name="search"> 
            <input type="button" class="searchbutton search2Colpay" value="" id="search" >
        </div>
        <div class="tableDiv">
            <div class="scrolling">
                <table class="mainTable">
                    <thead>
                        <tr>
                            <th width="1%"></th>
                            <th width="120px">Billing No.</th>
                            <!--<th width="100px">OR No.</th>-->
                            <th width="95px">Billing Date</th>
                            <th width="160px">Total Billing Amount</th>
                            <th width="100px" style="text-align:center;">WHT Amount</th>
                            <th  width="120px">Applied Amount</th>
                            <th  width="95px">Amount Balance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_POST['paymentid'])) {
                            echo print_r(TblEnterPaymentMySqlExtDAO::paymentView($_POST['paymentid']));
                        } elseif (isset($_POST['invoiceid'])) {
                            print_r(TblEnterPaymentMySqlExtDAO::clientInvoice());
                            ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>


        <div class="buttonscontainer">
            <div class="partialpaymentforms">
                <table class="partialtable">
                    <tr>
                        <td style="width: 125px;" class="partials">If partial payment</td>
                        <td style="width:52px;"><input type="text" class="isNumeric partialpayments" ></td>
                        <td>Currency: <span id="pcurrency"></span></td>
                    </tr>
                </table>
            </div>
            <input type="button" value="Cancel" class="buttons cancel close1Client2 addsavebuttonpop">
            <input type="submit" value="Post" class="buttons1 addsavebuttonpop" style="margin-right:5px;">
            <input type="hidden" name="task" value="payment" />
        </div>

    </form>

</div>
<div class="popBackN hidden"></div>
<script>
    $(function () {

        $("#di, .dd").datepicker(
                {
                    dateFormat: 'mm/dd/yy'
                }
        );
        clientid = 0;
        amount = 0;
        search = '';
        $('.client').change(function () {
            clientid = $(this).val();

            $('#useEnterPayment').prop('checked', false);

            if (clientid != '') {
                viewOP();
                invoicePayment(clientid, '');
            } else {
                $('.mainTable > tbody > tr').remove();

                $('.hasClientSelected').addClass('hidden');
            }
        });

        $('#useEnterPayment').change(function () {
            viewOP();
        });

        $('.partialpayments').keyup(function () {
            amount = 0;
            if (getInt($(this).val()) > 0) {
                $('input[name="amountReceived"]').val($(this).val());
                amount = getInt($(this).val());
                checkPreviousTrans($(this));
                setAmountR();
                computeInvoice();
            } else {
                checkPreviousTrans($(this));
                setAmountR();
                computeInvoice();
            }
        });


        function viewOP() {
            clientId = $('.client').val();
            $('input[client] ').addClass('hidden');
            if (typeof $('.client').val() != 'undefined' && typeof $('input[client="' + clientid + '"]') != 'undefined') {

            }

            computeInvoice();

        }

        $(document).on('keyup', 'input[name="search"]', function () {
            search = $(this).val();
            if ($('select[name="clientId"]').val() != '') {
                invoicePayment(clientid, search);
            } else {
                $('.mainTable > tbody > tr').remove();
            }

        });

        $(document).on('click', '#search', function () {
            if ($('select[name="clientId"]').val() != '') {
                invoicePayment(clientid, search);
            } else {
                $('.mainTable > tbody > tr').remove();
            }
        });

        $(document).on('keyup', '.amount', function () {
            invoiceAmount();
        });

        function invoicePayment(clientid, search) {
            $('.mainTable > tbody > tr').remove();
            // $.post(URL + 'invoice/clientInvoice', {clientid: clientid, search: search})
            $.post(URL + 'invoice/clientNotCollectedInvoice', {'clientid': clientid, 'search': search})
                    .done(function (returnData) {
                        $('.mainTable > tbody').html(returnData);
                    })
                    .fail(function () {
                        alert('Connection Error!');
                    });
            return false;
        }

        $('#form').submit(function () {
            amount = getInt($('input[name="amountReceived"]').val());
            wttax = $('#whtax option:selected').val();
            
            if (typeof $('input[name="received2307"]:checked').val() == 'undefined' && wttax > 0) {
                alert('Received 2307 form is required');
                return false;
            }
            
            if($('.chkcol:checked').length == 0){
                alertWithoutNotice('Please select transaction from the list.');
                return false;
            }

            if (amount > 0) {
                confirmDoyou = confirm('Do you want to record/post the Payment?');
                if (confirmDoyou) {
                    $('body').css('overflow', 'hidden');
                    $('.popup').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
                    $('.popup').removeClass('hidden');
                    return true;
                }
            } else {
                alert('Please enter amount');
                $('input[name="amountReceived"]').focus();
            }
            return false;
        })



        $('input[name="amountReceived"]').keyup(function () {
            amount = $(this).val().replace(/,/g, '');
            computeInvoice();
        });

        $(document).on("click", ".chkcol", function () {
            $('#pcurrency').text($(this).parents('tr').find('.currencyCode').text());
            
            checkPreviousTrans($(this));
//            computeInvoice();
            setAmountR();
            computeInvoice();
        });

        function getInt(intVal) {
            if (intVal != '' && intVal[0] == '(') {
                intVal = intVal.toString().replace(/\(/g, '');
                intVal = intVal.toString().replace(/\)/g, '');
                intVal *= -1;
            }

            if (intVal != '') {
                intVal = intVal.toString().replace(/,/g, '');
                intVal = parseFloat(intVal);
            }

            if (isNaN(intVal)) {
                return 0;
            }
            return intVal;
        }

        $('select[name="whtTax"]').change(function () {
//            computeInvoice();
            setAmountR();
            computeInvoice();
        });

        function invoiceAmount() {
        }
    });
    
    function setAmountR() {
            balances = 0;
            vats = 1.12;
            
            partial = getInt($('.partialpayments').val());
                    
            $('input[name="chkcol[]"]:checked').each(function () {
                appliedAmount = getInt($(this).parent('td').parent('tr').find('.appliedAmount').val());
                currentWht = getInt($(this).parent('td').parent('tr').find('.tempwht').val());
                totalinvoice = getInt($(this).parent('td').parent('tr').find('.totalinvoice').val());
                linebalance = totalinvoice - (appliedAmount + currentWht);
//                linebalance = (vatableamount + vatexemptamount) - (appliedAmount + currentWht);
                balances += linebalance;
                
                vatableamount = getInt($(this).parent('td').parent('tr').find('.vatableamount').val());
                vatexemptamount = getInt($(this).parent('td').parent('tr').find('.exemptamount').val());
                
                if (appliedAmount + currentWht + linebalance == totalinvoice) {
                    if(partial >= linebalance || partial == 0){
                        whtax = getInt($('#whtax option:selected').val());
//                        nwhtax = (vatableamount / vats) * (whtax / 100);
                        nwhtax = (vatableamount) * (whtax / 100);
                        nwhtax += vatexemptamount * (whtax / 100);
//                        balances -= nwhtax;
                        balances -= nwhtax.toFixed(2);
                    }else{ 
                        tax_type = setTaxValue(vatableamount,vatexemptamount, partial);
                        nwhtax = genWitholdingTax(tax_type['vatableamount'], 1.12);
                        nwhtax += genWitholdingTax(tax_type['vatexemptamount'], 1);
//                        balances -= nwhtax;
                        balances -= nwhtax.toFixed(2);
                    }
                }
            });
            amount = partial > 0 ? partial : balances;
            $('#amountReceived').val(getInt($('.partialpayments').val()) > 0 ? getInt($('.partialpayments').val()) : balances);
//            $('#amountReceived').val(roundFloat($('#amountReceived').val()));
        }

        function computeInvoice() {
            amountReceived2 = getInt($('#amountReceived').val());
            partial = getInt($('.partialpayments').val());
            whtax = $('#whtax option:selected').val();
            whtaxPercent = whtax != 0 ? whtax / 100 : 0;
            amountBalance = 0;
            amountBalance2 = 0;
            vats = 1.12;

            is_partial = false;

//            if (taxtype != 'vat') {
//                vats = 1;
//            }

            count = 0;
            $('input[name="chkcol[]"]').each(function () {
                nwhtax = 0;
                appliedAmount = getInt($(this).parent('td').parent('tr').find('.appliedAmount').val());
                currentWht = getInt($(this).parent('td').parent('tr').find('.currentWht').val());
                totalinvoice = getInt($(this).parent('td').parent('tr').find('.totalinvoice').val());
                sub_total_amount = getInt($(this).parent('td').parent('tr').find('.sub_total_amount').val());
                balance = getInt($(this).parent('td').parent('tr').find('.balance').val());
                
                vatableamount = getInt($(this).parent('td').parent('tr').find('.vatableamount').val());
                vatexemptamount = getInt($(this).parent('td').parent('tr').find('.exemptamount').val());

                if ($(this).is(':checked')) {
                    count++;
                    linebalance = appliedAmount > 0 ? totalinvoice - (appliedAmount + currentWht) : totalinvoice;
//                    linebalance = appliedAmount > 0 ? (vatableamount + vatexemptamount) - (appliedAmount + currentWht) 
//                                                    : vatableamount + vatexemptamount;

                    whtax = getInt($('#whtax option:selected').val());
                    
                    if(amountReceived2 >= linebalance || partial == 0){
//                        nwhtax = (vatableamount / vats) * (whtax / 100);
                        nwhtax = (vatableamount) * (whtax / 100);
                        nwhtax += vatexemptamount * (whtax / 100);                        
                        
                    }else if(amountReceived2 > 0){
                        tax_type = setTaxValue(vatableamount,vatexemptamount, partial);
                        nwhtax = genWitholdingTax(tax_type['vatableamount'], 1.12);
                        nwhtax += genWitholdingTax(tax_type['vatexemptamount'], 1);
                    }
                    
                    nwhtax = nwhtax.toFixed(2);
                    linebalance -= nwhtax;
//                    linebalance = parseFloat(linebalance.toFixed(2));
                    
                    if (amountReceived2 >= linebalance && appliedAmount > 0) {
                        is_partial = true; 
                        if (appliedAmount > 0) {
                            amountReceived = linebalance + appliedAmount + currentWht;
                            amountReceived2 -= linebalance;
//                            amount_paid = (linebalance + nwhtax).toFixed(2);
                            amount_paid = parseFloat(linebalance + nwhtax);
                        }
                    } else {

                        if (amountReceived2 >= linebalance) {
                            amountReceived = linebalance + appliedAmount + currentWht;
                            amountReceived2 -= linebalance;
//                            amount_paid = (linebalance + nwhtax).toFixed(2);
                            amount_paid = parseFloat(linebalance + nwhtax);
                        } else {
                            is_partial = true;
                            amountReceived = amountReceived2 + appliedAmount + currentWht;                            
                            amount_paid = parseFloat(amountReceived2);
                            amountReceived2 -= amountReceived2;
                        }
                    }
                    
                    amountBalance = totalinvoice - (amountReceived);
                    amountBalance2 = amountBalance;
                    
                    if (amountBalance < 0) {
                        appliedAmount = totalinvoice - currentWht;
                        amountReceived = amountReceived - totalinvoice;
                        amountBalance = 0;
                    } else {
                        appliedAmount = amountReceived - currentWht;
                        amountReceived = 0;
                    }
                        
                    if (is_partial) {
//                        tax_value = setTaxValue(vatableamount, vatexemptamount, parseFloat(amount_paid));
//                        
//                        currentWht += genWitholdingTax(tax_value['vatableamount'], 1.12);
//                        currentWht += genWitholdingTax(tax_value['vatexemptamount'], 1);
                          currentWht += parseFloat(nwhtax);
                    } else if (currentWht == 0) {
//                        sub_total_amount = totalinvoice / vats;
//                        sub_total_amount = (vatableamount/vats) + vatexemptamount;
                        sub_total_amount = vatableamount + vatexemptamount;
                        currentWht = sub_total_amount * whtaxPercent;
                    }
                    
                    amountBalance = totalinvoice - (parseFloat(currentWht.toFixed(2)) + parseFloat(appliedAmount.toFixed(2)));                    
                    
                    $(this).parent('td').parent('tr').find('.whtAmountHolder').html(roundFloat(currentWht));
                    $(this).parent('td').parent('tr').find('.whtamount').val(roundFloat(currentWht));

                } else {
                    amountBalance = totalinvoice - (currentWht + appliedAmount);

                    $(this).parent('td').parent('tr').find('.whtAmountHolder').html(roundFloat(appliedAmount > 0 ? currentWht : 0));

                    $(this).parent('td').parent('tr').find('.whtamount').val(roundFloat(appliedAmount > 0 ? currentWht : 0));

                }

                checkboxlength = $('input[name="chkcol[]"]:checked').length;

                $(this).parent('td').parent('tr').find('.balance').val(roundFloat(count == checkboxlength && count != 0 && amountReceived2 > 0 ? amountReceived2 * -1 : amountBalance));

                if (count == checkboxlength && count != 0) {
                    count++;
                }

                $(this).parent('td').parent('tr').find('.appliedAmount').html(roundFloat(appliedAmount));
                $(this).parent('td').parent('tr').find('.appliedAmount2').val(roundFloat(appliedAmount));
            });
        }
        
        function setTaxValue(vatableamount, exemptamount, amountReceived){
//            new_vatable_amount = new_exempt_amount = 0;
            
            if(vatableamount <= amountReceived && vatableamount != 0){
//               new_vatable_amount = vatableamount;
               amountReceived -= vatableamount;
            }else if(vatableamount != 0){
               vatableamount = amountReceived;
               amountReceived -= amountReceived;
            }
            
            if(exemptamount <= amountReceived && exemptamount != 0){
//               new_exempt_amount = exemptamount;
               amountReceived -= exemptamount;
            }else if(exemptamount != 0){
               exemptamount = amountReceived;
               amountReceived -= amountReceived; 
            }
            
            var data = {'vatableamount': vatableamount, 'vatexemptamount': exemptamount};
            
            return data; 
        }

        function genWitholdingTax(amount, vat_value) {

            whtax = getInt($('#whtax option:selected').val());
            cwt = 0;

            if (whtax > 0 && amount !=0) {
                switch (whtax) {
                    case 15:
                    cwt = vat_value == 1.12 ? 97 : 85;
                        break;
                    case 10:
                        cwt = vat_value == 1.12 ? 102 : 90;
                        break;
                    case 5:
                        cwt = vat_value == 1.12 ? 107 : 95;
                        break;
                    case 2:
                        cwt = vat_value == 1.12 ? 110 : 98;
                        break;
                    case 1:
                        cwt = vat_value == 1.12 ? 111 : 99;
                        break;
                    } 
                netvat = amount / (cwt / 100);
                
                return netvat * (whtax / 100);
            }
            return 0;
        }

    function checkPreviousTrans($object) {
        whtax = $($object).parents('tr').find('.whtpercent').val();
        if (whtax != 0 && $($object).is(':checked')) {
            $("#whtax option[value!='" + whtax + "']").attr('disabled', true);
            
            $('#whtax option').removeAttr('selected')
                    .filter('[value="' + whtax.replace('%', '') + '"]')
                    .attr('selected', true);
            
            $('.whtpercent').each(function () {
                if ($(this).val() != whtax && $(this).val() != 0) {
                    $(this).parents('tr').find('input[name="chkcol[]"]').attr('disabled', true);
                }
            })
        } else if (whtax != 0) {
            $("#whtax option").removeAttr('disabled');
            $('input[name="chkcol[]"]').removeAttr('disabled');
        }
    }
    
</script>