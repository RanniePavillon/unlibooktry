<?php
//require $_SERVER['DOCUMENT_ROOT'] . '/unlibooks/libs/Server.php';
//require $_SERVER['DOCUMENT_ROOT'] . '/unlibooks/libs/Session.php';
//require $_SERVER['DOCUMENT_ROOT'] . '/unlibooks/include_dao.php';
?>

<style>
    .popBack{
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
        padding-top:3px;
        padding-bottom:3px;
    }
    .table2Enter, td{
        padding-top:3px;
        padding-bottom:3px;
    }
    .enterpaymentForm{
        background-color: white;
        width: 900px;
        margin: auto !important;
        margin-top: 10px !important;
        padding-bottom: 20px;
        /* box-shadow: 1px 1px 1px 1px rgb(7, 124, 7); */
        margin-bottom:30px !important;
    }
    .titleEnterPayment{
        margin-top: 16px;
        margin-left: 10px;
        width: 869;
        background-color: -webkit-gradient(linear, right bottom, right top, color-stop(0.06, #F0F0F0), color-stop(1, #CCCACC), color-stop(1, #D9D9D9),color-stop(1, #CFCDCF));
        background-image: -o-linear-gradient(top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%);
        background-image: -moz-linear-gradient(top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%);
        /* background-image: -webkit-linear-gradient(top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%); */
        background-image: -ms-linear-gradient(top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%);
        /* background-image: linear-gradient(to top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%); */
        padding-left: 10px;
        padding-top: 5px;
        padding-bottom: 5px;
        font-size: 30px;
        font-family: agency fb2;
        /* font-style: italic; */
        font-weight: bold;
        color: #183867;
    }
    .table1Enter{
        margin-left:20px;
        margin-top: 0px;
    }
    .table{
        border-spacing: 5px;
    }
    .table1Enter td{
        font-size:12px;
        font-family:Verdana;
        color: #000000;
        /* font-weight: bold; */
    }
    .cnitableCollection tr th:nth-child(4)(5){
        text-align: right;
    }
    .table1Enter select{
        width:248px;
        height: 27px;
        font-family:Verdana;
        font-size:12px;
        /* background-image: url('<?= URL ?>public/images/dropSelect.png');
        background-repeat: no-repeat;
        background-size:100% 100%;
        border: none;
        -webkit-appearance: none; */
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

    }
    .table2Enter{
        border-spacing: 5px;
    }
    .table2Enter td{
        font-size:12px;
        font-family:Verdana;
        color: #000000;
        /* font-weight: bold; */
    }

    .textEnterPaymentnew{
        height: 27px;
        width: 248px !important;
        padding-left: 5px;
        font-family:Verdana;
        font-size:12px;
    }
    .textarea{
        width:190px;
        height: 90px;
        max-height: 90px;
        max-width: 270px;
        padding-left: 5px;
        font-family:Verdana;
        font-size:11px;
    }
    .note{
        position: relative;
        top: -28px;
    }
    .search{
        margin-left: 10px;
        margin-top: 10px;
    }
    .txtsearch2::-webkit-input-placeholder{
        color:#fff;
        padding-left:1px;
    }
    .txtsearch2{
        margin-left: 10px;
        margin-top: 6px;
        width: 178px;
        height: 30px;
        border: none;
        padding-left:2px;
        padding-right:34px;
        text-align: left;
        font-weight: bold;
        color: #fff;
        outline-style: none;
        border-radius: 5px;
        background-size: 100% 100%;
        background-color:#c51400;

        /* width: 29px;
        height: 30px;
        border: none;
        border-radius: 2px 2px 2px 2px;
        font-size: 14px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        cursor: pointer;
        border: none;
        color: whitesmoke;
        background: none;
        background-image: url('../images/searchback.png');
        background-color: rgb(230, 250, 222);
        background-repeat: no-repeat;
        position: absolute;
        margin-top: -30px;
        margin-left: 313px;
        background-size: 100%; */

    }
    /* .searchbuttonpay{
        width: 35px;
        height: 33px;
        cursor: pointer;
        border: none;
        background-image: url('../images/searchback.png');
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
        opacity: -8;
    } */
    .mainTable{
        border-collapse: collapse;
        width: 97%;
        margin-top: 10px;
        margin:auto;
    }

    .mainTable th{
       /*  background-color: #c51400; */
        color: white;
        font-weight: bold;
        font-size: 12px;
        font-family:Verdana;
        text-align: left;
        padding:5px !important;
    }
    .mainTable td{
        color: black;
        font-weight:normal;
        font-size:12px;
        font-family: Verdana;
        text-align: left;
        padding:5px;
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
        border: none;
        cursor: pointer;
        outline-style:none;
    }
    .buttons{
        width: 100px;
        height: 28px;
        border: none;
        cursor: pointer;
        outline-style:none;
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
        /* background-image: url('<?= URL ?>public/images/dropSelect.png');
        background-repeat: no-repeat;
        background-size:143px 24px;
        border: none;
        -webkit-appearance: none; */
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
        width:408px;
        margin-top:5px;
    }
    .partialpaymentforms{
        float: right;
        margin-right: 477px;
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
    .pNo{
        width:248px;
        height:27px;
        background:#c8c8c8;
        border:none;
        padding-left:5px;
        font-size: 12px;
        font-family: verdana;
    }
    .remarksTextArea{
        width:248px;
        height:90px;
        max-width:248px;
        max-height:90px;
        overflow:hidden;
        font-size: 12px;
        font-family: verdana;
    }
    .glpost{
        width: 248px;
        height:27px;
        font-size: 12px;
        font-family: verdana;
        margin-left: 67px;
    }
    
    .cm{
        background-color: #c51400;
        color: #fff;
        padding: 5px;
        height: 30px;
        border: none;
        border-radius: 5px;
        width: 150px;
        font-weight: bold;
        font-family: AGENCY FB2;
        font-size: 17px;
        margin-left: 236px;
        margin-top: -30px;
    }
    .trnewInvoice{
        padding-top: 15px;
        font-size: 12px;
        font-family: Verdana;
        color: #000;
    }
    .termsCurrency{
        font-size: 12px;
        font-family: Verdana;
        color: #000;
    }
    .terms{
        width: 248px;
        height: 27px;
        font-size: 12px;
        font-family: Verdana;
        margin-left: 15px;
        margin-top: 3px;
    }
</style>
<?php
/*  $enterPayment = $this->enterPayment;
  $stat = "payment";
  if ($enterPayment == 'posted' && $enterPayment->id != ''){
  $stat == 'postedPayment';
  } elseif ($enterPayment == 'reversed'){
  $stat == 'reversedPayment';
  } */
?>

<title>
    EXPENSES
</title>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<?php
$taxtype = DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('infoid'))->typeOfTax;
$whtTax = TblTrialBalanceMySqlExtDAO::getLastCollectionWht();
?>
<script>
    taxtype = "<?php echo $taxtype ?>";
</script>
<div class="jsHolder"></div>
<div class="container">
    <form method="post" action="<?php echo URL ?>expenses/setPaymentExpense" class="enterpaymentForm boxshadow" id="form">
        <!--<input type="button" class="close1Client" value="x">-->
        <div class="titleEnterPayment headingspop">
            <?php
            /* 	if($stat == 'postedPayment'){
              echo 'POSTED';
              } elseif ($stat == 'reversedPayment'){
              echo 'REVERSED';
              } else {
              echo 'ENTER';
              } */
            ?>
            PAYMENT</div>
        <table class="table1Enter" style="float:left;">
            <tr>
                <td>Payment Date:</td>
                <td>
                    <input type="hidden" name="token" value="<?=$this->token;?>">
                    <input type="text" id="di" name="dateReceived" required style="" class="textEnterPaymentnew" value="<?php echo date('m/d/Y') ?>">
                </td>
            <input type="hidden" id="di" name="dateCreated" required style="width:190px!important;" class="textEnterPaymentnew dd" value="<?php echo date('m/d/Y') ?>">
            </tr> 
                        <!--<tr>
                <td>Date Created:</td>
                <td><input type="text" id="di" name="dateCreated" required style="width:190px!important;" class="textEnterPaymentnew dd" value="<?php echo date('m/d/Y') ?>"></td>
            </tr>-->
            <tr>
                <td>Vendor Name:</td>
                <td colspan="3">
                    <?php
                    if (isset($_POST['stat'])) {
                        echo $invoice = DAOFactory::getTblNewInvoiceDAO()->load($_POST['invoiceid']);
                        ?>
                        <input type="text" class="textEnterPaymentnew" value="<?php echo DAOFactory::getTblClientDAO()->load($invoice->clientId)->clientName ?>" />
                        <?php
                    } else {
                        $supplier = $this->supplier;
                        if ($supplier) {
                            ?>
                            <select class="table1Enterselect client" name="supplierId" ><option></option>
                                <?php foreach ($supplier as $item) { ?>
                                    <option value='<?= $item->id ?>' title="<?= $item->supplierAccount ?>"><?= $item->name ?></option>
                                <?php } ?>
                            </select>
                            <?php
                        } else {
                            echo 'No Payable Supplier';
                        }
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <div style="margin-top:-35px;">Remarks:</div>
                </td>
                <td>
                    <textarea class="remarksTextArea" name="notes"></textarea>
                </td>
            </tr>
            <tr class="hidden">
                <td>Amount Received:</td>
                <td><input required type="text" name="amountReceived" id="amountReceived" class="textEnterPaymentnew isNumeric" name="amountReceived" style="border: 1px solid rgb(187, 185, 185);"></td>
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
                    $overPayment = TblAllCollectionMySqlExtDAO::getLatestCollection(Session::getSession('orgid'), '');
                    if ($overPayment) {
                        // print_R($overPayment);
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

        <table class="table2Enter" style="float:right;margin-right:20px;">
            <thead>
                <tr>
                    <td>Payment No.:</td>
                    <td>
                        <?php
                        $orgId = Session::getSession('orgid');
                        $colNum = TblEnterBillPaymentMySqlExtDAO::getNextPaymentIdByOrg($orgId);
                        ?>
                        <input type="text" class="pNo" readonly name="colNum" value="<?= $colNum ?>">
                    </td>
                </tr>
                <tr>
                    <td>Bank:</td>
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
                    <td>Reference No:</td>
                    <td>
                        <input type="text" name="refNum" class="textEnterPaymentnew" value="" required>
                        <span style="color:red;">*</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="margin-top:-35px;">Remarks:</div>
                    </td>
                    <td>
                        <textarea class="remarksTextArea"></textarea>
                    </td>
                </tr>
				<!--<tr class="trnewInvoice">
                   <td class="termsCurrency">Currency:</td>
                    <td>
                        <select class="terms" name="currencyId">
                            <?php
                            $currency = DAOFactory::getTblCurrencyDAO()->queryAll();

                            foreach ($currency as $crrncy) {
                                ?>
                                <option style="text-align: right;" value="<?php echo $crrncy->id ?>" title="<?= $crrncy->description ?>"
                                <?php
                                if ($purchaseinvoice->currencyId != "") {
                                    if ($crrncy->id == $purchaseinvoice->currencyId) {
                                        echo "selected";
                                    }
                                } elseif ($crrncy->code == 'PHP') {
                                    echo ' selected ';
                                }
                                ?>><?php echo $crrncy->code ?></option>
                                    <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr class="trnewInvoice">
                    <td id="ratetxt" class="termsCurrency <?php echo ($purchaseinvoice->currencyId == 33 || $purchaseinvoice->currencyId == '') ? 'hidden' : '' ?>">Currency Exchange Rate:</td>
                    <td>
                        <input type="text" style="width:248px;height:27px;font-weight:normal!important;border: 1px solid #C8C8C8; text-align: right;margin-top:3px;margin-left:15px;"
                        name="crate"  id="ratetxt" class="termsCurrency isNumeric <?php echo ($purchaseinvoice->currencyId == 33 || $purchaseinvoice->currencyId == '') ? 'hidden' : '' ?>"
                        value="<?= $purchaseinvoice->phpRate == '' ? '' : Controller::getFloat($purchaseinvoice->phpRate) ?>">
                    </td>
                </tr>
                <tr class="trnewInvoice">
                    <td id="ratetxt" class="termsCurrency applyCER <?php echo ($purchaseinvoice->currencyId == 33 || $purchaseinvoice->currencyId == '') ? 'hidden' : '' ?>">Apply Currency Exchange Rate:</td>
                    <td>
                        <select name="acer" id="ratetxt" style="width: 248px;height: 27px;font-size: 12px;font-family: Verdana;margin-left:15px;margin-top: 3px;" class="acer <?php echo ($purchaseinvoice->currencyId == 33 || $purchaseinvoice->currencyId == '') ? 'hidden' : '' ?>">
                            <option value="monthly" <?= $purchaseinvoice->currencyType == 'monthly' ? 'selected' : '' ?> >Monthly</option>
                            <option value="quarterly" <?= $purchaseinvoice->currencyType == 'quarterly' ? 'selected' : '' ?> >Quarterly</option>
                            <option value="yearly" <?= $purchaseinvoice->currencyType == 'yearly' ? 'selected' : '' ?> >Yearly</option>
                            <option value="Daily" <?= $purchaseinvoice->currencyType == 'daily' ? 'selected' : '' ?> >Daily</option>
                        </select>
                    </td>
                </tr>-->

            </thead>
            <tbody>

            </tbody>
        </table>
        <div style="clear:both"></div>
        <div class="search">
            <input type="search" placeholder="Search Bill Payable No." class="txtsearch2" name="search"> 
            <input type="button" class="searchbutton search2Colpay" value="" id="search" >
        </div>
        
        <input type="button" class="cm" value="APPLY PR">
        
        <div class="tableDiv">
            <div class="scrolling">
                <table class="mainTable">
                    <thead>
                        <tr>
                            <th width="3%"><input type="checkbox"></th>
                            <th width="119px">Transaction Code</th>
                            <th width="110px">Ref. No.</th>
                            <th width="113px">Billing Exp Date</th>
                            <th width="145px">Billing Exp Amount</th>
                            <th width="120px">Applied Amount</th>
                            <th width="120px text-right" style="text-align: right">Amount Balance</th>
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
                    </tr>
                </table>

                <div style="margin-top:5px;margin-left:10px;">
                    <label style="font-family:Verdana;font-size:12px;margin-left:0px;">GL Posting:</label>
                    <select class="item-text2NewItem item-textNewItem glpost" name="glPosting" id="glPosting2" required style="">
                        <option value=""></option>
                        <option value="addBank">[Add Bank]</option>
                        <?php
                        $coas = DAOFactory::getTblCoaDAO()->queryByOrgId(Session::getSession('orgid'));
                        $coas2 = TblCoaMySqlExtDAO::getCoaByCoaNum(Session::getSession('orgid'), '%1000-003-%');
                        //$coaArray = array('1000-002', '1000-003');
                        $coaArray = array('1000-002');
                        if ($coas2) {
                            $coaArray = array('1000-002');
                        }

                        foreach ($coas as $coa) {
                            if (in_array($coa->accountNum, $coaArray)) {
                                ?>
                                <option value="<?php echo $coa->id ?>" <?php //echo ($coa->id == $this->getExpense->glPosting) ? 'selected' : ''            ?>><?php echo $coa->accountNum ?> - <?php echo $coa->accontName ?></option>

                                <?php
                            }
                        }
                        if ($coas2) {
                            foreach ($coas2 as $coa) {
                                if ($coa->activeAccount == 'yes') {
                                    ?>
                                    <option value="<?php echo $coa->id ?>" <?php //echo ($coa->id == $this->getExpense->glPosting) ? 'selected' : ''            ?>><?php echo $coa->accountNum ?> - <?php echo $coa->accontName ?></option>
                                    <?php
                                }
                            }
                        }
                        ?>
                        <!--<option value="addBank">[Add Bank]</option>-->
                    </select>
                </div>


            </div>
            <input type="button" value="Cancel" class="buttons cancel close1Client2 addsavebuttonpop">
            <input type="submit" value="Post" class="buttons1 addsavebuttonpop" style="margin-right:5px;">
            <input type="hidden" name="task" value="payment" />
        </div>

    </form>
    <div class="cm_content"></div>
</div>

<div class="popup2"></div>
<div class="popBackN"></div>
<script>/* 
 function alertWithoutNotice(message){
 setTimeout(function(){
 alert(message);
 }, 1000);
 } */
    $(function () {
        newrecord = "new";
        currencyid = '';

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
                expensePayment(clientid, '');
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
//                selectedInvoice();
                setAmountR();
                computeInvoice();
            }
        });

        $(document).on("change", "#glPosting2", function () {
            //alert('sd');
            object = $(this);
            $activeobjct = $(this);
            if ($(this).val() === 'addBank') {
                $(this).addClass('activeObj');
                $('.activeObj option').removeAttr('selected')
                        .filter('[value=""]')
                        .attr('selected', true);
                $('.returnurl').val('invoice');
                addNewBank();
            } else if ($(this).val() != 3) {
                $('input[name="pOSO"]').attr("required", true);
            } else if ($(this).val() == 3) {
                $('input[name="pOSO"]').attr("required", false);
            }

            return false;
        });

        $('.cm').click(function () {
            if($('select[name="supplierId"] option:selected').val() == ''){
                alertWithoutNotice('Please selecte supplier.');
                return false;
            }
            
            supplierid =  $('select[name="supplierId"] option:selected').val();
            
            $.post(URL + 'purchasereturn/applyDm', { type: 'collection', supplierid:supplierid, currencyid:currencyid})
                    .done(function (returnData) {
                        $('.popup2').html(returnData);
                        $('.popup2').removeClass('hidden');
                        $('body').css('overflow', 'hidden');

                        $('.close1Client, .close1Client2').click(function () {
                            if (confirm('Are you sure you want to leave this page without posting?')) {
                                $('.popup2').addClass('hidden');
                                $('.popup2').html('');
                                $('body').css('overflow', 'auto');
                            }
                        });
                    })
                    .fail(function () {
                        alert('Connection Error!');
                    });
            return false;
        });
        
        function addNewBank() {
            $.post(URL + 'accounting/addBankAccount', {view: 'invoice'})
                    .done(function (returnData) {
                        newrecord = 'new';
                        $('.popup2').html(returnData);
                        $('.forBank').val('addBankOption');
                        $('.popup2').removeClass('hidden');
                        $('body').css('overflow', 'hidden');

                        $('.closeAccount').click(function () {
                            if (confirm('Are you sure you want to leave this page without saving?')) {
                                $('.popup2').addClass('hidden');
                                $('.popup2').html('');
                                $('body').css('overflow', 'auto');
                            }
                        });
                        return false;
                    })
                    .fail(function () {
                        alert('Connection Error!');
                    });
            return false;
        }


        function viewOP() {
            // $('.op').addClass('hidden');
            clientId = $('.client').val();
            // $('input[client="'+clientid+'"]').removeClass('hidden');
            $('input[client] ').addClass('hidden');
            if (typeof $('.client').val() != 'undefined' && typeof $('input[client="' + clientid + '"]') != 'undefined') {
                // $('input[client="'+clientid+'"]').removeClass('hidden');

            }
            /*
             if(typeof $('input[client="'+clientid+'"]').val() == 'undefined'){
             $('.hasClientSelected').addClass('hidden');
             } else {
             $('.hasClientSelected').removeClass('hidden');
             }
             */
            computeInvoice();

        }

        $(document).on('keyup', 'input[name="search"]', function () {
            search = $(this).val();
            if ($('select[name="clientId"]').val() != '') {
                expensePayment(clientid, search);
            } else {
                $('.mainTable > tbody > tr').remove();
            }

        });

        $(document).on('click', '#search', function () {
//            alert(search);
            if ($('select[name="clientId"]').val() != '') {
                expensePayment(clientid, search);
            } else {
                $('.mainTable > tbody > tr').remove();
            }
            // alert($('select[name="clientId"]').val());
        });

//        $('#search').keyup(function(){
//            alert($(this).val());
//        })
        $(document).on('keyup', '.amount', function () {
            invoiceAmount();
            //alert('test');
        });

        function expensePayment(clientid, search) {
            $('.mainTable > tbody > tr').remove();
            // $.post(URL + 'invoice/clientInvoice', {clientid: clientid, search: search})
            $.post(URL + 'expenses/supplierNotPaidPayment', {'supplierId': clientid, 'search': search})
                    .done(function (returnData) {
                        $('.mainTable > tbody').html(returnData);
                        //	computeInvoice();
                    })
                    .fail(function () {
                        alert('Connection Error!');
                    });
            return false;
        }

        $('#form').submit(function () {
            amount = getInt($('input[name="amountReceived"]').val());

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
//          invoiceAmount();
            amount = $(this).val().replace(/,/g, '');
//            alert($('input[name="test"]').val());
            // invoiceAmount();
            computeInvoice();
        });

        $(document).on("click", ".chkcol", function () {
            checkPreviousTrans($(this));
            computeInvoice();
            // setAmountR();
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
            computeInvoice();
            setAmountR();
            computeInvoice();
        });

        function invoiceAmount() {
        }
    })

    function setAmountR() {
            return false;
            balances = 0;
            $('input[name="chkcol[]"]:checked').each(function () {
//            alert($(this).parents('td').find('whtpercent').val());

                appliedAmount = getInt($(this).parent('td').parent('tr').find('.appliedAmount').val());
//            currentWht = getInt($(this).parent('td').parent('tr').find('.whtax').val());
                currentWht = getInt($(this).parent('td').parent('tr').find('.tempwht').val());
                totalinvoice = getInt($(this).parent('td').parent('tr').find('.totalinvoice').val());

//            alert()
                linebalance = totalinvoice - (appliedAmount + currentWht);
                balances += linebalance;
//            alert(balances);
//            alert(balances / 1.12);
                if (appliedAmount + currentWht + linebalance == totalinvoice) {
                    whtax = getInt($('#whtax option:selected').val());
                    nwhtax = (linebalance / 1.12) * (whtax / 100);
                    balances -= nwhtax;

//                $(this).parent('td').parent('tr').find('.tempwht').val(roundFloat(nwhtax));
//alert(linebalance);
                }
            });
            amount = getInt($('.partialpayments').val()) > 0 ? getInt($('.partialpayments').val()) : balances;
            $('#amountReceived').val(getInt($('.partialpayments').val()) > 0 ? getInt($('.partialpayments').val()) : balances);
//            alert($('#amountReceived').val());
            $('#amountReceived').val(roundFloat($('#amountReceived').val()));
        }

    function computeInvoice() {
        amountReceived = getInt($('.partialpayments').val());
        total_cmamount = 0;
        
        if (amountReceived <= 0) {
            amountReceived = 0;
            $('input[name="chkcol[]"]:checked').each(function () {
                appliedAmount = getInt($(this).parent('td').parent('tr').find('.prevAppliedAmount').val());
                payables = getInt($(this).parent('td').parent('tr').find('.totalinvoice').val());
                amountReceived += (payables - appliedAmount);
            });
        }else{
            $('input[name="chkcol[]"]:checked').each(function () {
                cmamount = getInt($(this).parent('td').parent('tr').find('.cmamount').val());
                total_cmamount += cmamount;
            });
            amountReceived += cmamount; 
        }
//        $('#amountReceived').val(roundFloat(amountReceived));
        $('#amountReceived').val(getInt($('.partialpayments').val()) > 0 ? getInt($('.partialpayments').val()) + total_cmamount : amountReceived);
        
        obj = false;
        count = 0;
        $('input[name="chkcol[]"]').each(function () {
            cmamount = getInt($(this).parent('td').parent('tr').find('.cmamount').val());
            appliedAmount = getInt($(this).parent('td').parent('tr').find('.prevAppliedAmount').val());
            payables = getInt($(this).parent('td').parent('tr').find('.totalinvoice').val());
            balance = payables - appliedAmount; 
            
            if ($(this).is(':checked')) {
                count++;
                // amountReceived = amountReceived + appliedAmount;
//                    balance = payables - amountReceived;
//                    if (balance < 0) {
//                        $(this).parent('td').parent('tr').find('.appliedAmount').html(roundFloat(payables));
//                        $(this).parent('td').parent('tr').find('input[name="balance[]"]').val('0.00');
//                    } else {
//                        $(this).parent('td').parent('tr').find('.appliedAmount').html(roundFloat(amountReceived + appliedAmount));
//                        $(this).parent('td').parent('tr').find('input[name="balance[]"]').val(roundFloat(balance - appliedAmount));
//                    }
//                    amountReceived = amountReceived - payables;
                
                cmamount = getInt($(this).parent('td').parent('tr').find('.cmamount').val());
                if (appliedAmount > 0 && balance <= amountReceived) {
//                        balance = count == $('.chkcol:checked').length ? amountReceived - (payables - appliedAmount) : 0;
                    amount_set = payables - appliedAmount;
                    $(this).parent('td').parent('tr').find('.appliedAmount').html(roundFloat(payables));
                    $(this).parent('td').parent('tr').find('input[name="balance[]"]').val(roundFloat(0));

                    amountReceived = amountReceived - (payables - appliedAmount);
                } else if (payables <= amountReceived) {
                    amount_set = payables;
                    $(this).parent('td').parent('tr').find('.appliedAmount').html(roundFloat(payables));
                    $(this).parent('td').parent('tr').find('input[name="balance[]"]').val(roundFloat(0));

                    amountReceived = amountReceived - payables;
                } else if (amountReceived > 0) {
//                        balance = count == $('.chkcol:checked').length ? payables -  amountReceived : 0;
                    amount_set = amountReceived;
                    balance = payables - (appliedAmount + amountReceived);
                    $(this).parent('td').parent('tr').find('.appliedAmount').html(roundFloat(amountReceived));
                    $(this).parent('td').parent('tr').find('input[name="balance[]"]').val(roundFloat(balance));
                    amountReceived -= amountReceived;
                } else {
                    $(this).parent('td').parent('tr').find('.appliedAmount').html(roundFloat(appliedAmount));
                    $(this).parent('td').parent('tr').find('input[name="balance[]"]').val(roundFloat(balance));
                }
                amountReceived = parseFloat(amountReceived).toFixed(2);
//                    alert(amountReceived);
                if (count == $('.chkcol:checked').length && amountReceived !=0) { //alert($('.chkcol:checked').length);
                    $(this).parent('td').parent('tr').find('input[name="balance[]"]').val(roundFloat(amountReceived * -1));
                }

                obj = this;
            } else {
                $(this).parent('td').parent('tr').find('.appliedAmount').html(roundFloat(appliedAmount));
                $(this).parent('td').parent('tr').find('input[name="balance[]"]').val(roundFloat(balance));
            }
        });
//            if (obj) {
//                amountReceived *= -1;
//                payables = getInt($(obj).parent('td').parent('tr').find('.totalinvoice').val());
//                payables = (amountReceived - payables) * -1;
//                $(obj).parent('td').parent('tr').find('.appliedAmount').html(roundFloat(payables + appliedAmount));
//                $(obj).parent('td').parent('tr').find('input[name="balance[]"]').val(roundFloat(amountReceived - appliedAmount));
//            }
    }

    function computeInvoice2() {
        amountReceived2 = getInt($('#amountReceived').val());
        whtax = $('#whtax option:selected').val();
        whtaxPercent = whtax != 0 ? whtax / 100 : 0;
        amountBalance = 0;
        amountBalance2 = 0;
        vats = 1.12;

        is_partial = false;

        if (taxtype != 'vat') {
            vats = 1;
        }
        count = 0;
        $('input[name="chkcol[]"]').each(function () {
            appliedAmount = getInt($(this).parent('td').parent('tr').find('.appliedAmount').val());
            // currentWht = getInt($(this).parent('td').parent('tr').find('.currentWht').val());

            totalinvoice = getInt($(this).parent('td').parent('tr').find('.totalinvoice').val());
            sub_total_amount = getInt($(this).parent('td').parent('tr').find('.totalinvoice').val());
            return false;

            balance = getInt($(this).parent('td').parent('tr').find('.balance').val());

            return false;
            if ($(this).is(':checked')) {
                count++;
                linebalance = appliedAmount > 0 ? totalinvoice - (appliedAmount + currentWht) : totalinvoice;

                whtax = getInt($('#whtax option:selected').val());
                nwhtax = (linebalance / 1.12) * (whtax / 100);
                linebalance -= nwhtax;
                if (amountReceived2 >= linebalance && appliedAmount > 0) {
                    is_partial = true;
                    if (appliedAmount > 0) {
                        amountReceived = linebalance + appliedAmount + currentWht;
                        amountReceived2 -= linebalance;
                    }
                } else {
                    if (amountReceived2 >= linebalance) {
                        amountReceived = linebalance + appliedAmount + currentWht;
                        amountReceived2 -= linebalance;
                    } else {
                        is_partial = true;
                        amountReceived = amountReceived2 + appliedAmount + currentWht;
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
                    currentWht = genWitholdingTax(appliedAmount, amountBalance2);
                } else if (currentWht == 0) {
                    sub_total_amount = totalinvoice / vats;
                    currentWht = sub_total_amount * whtaxPercent;
                }

                amountBalance = totalinvoice - (currentWht + appliedAmount);
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

    function genWitholdingTax(amount, balance) {

//        if (balance > 0 && amount > 0) { alert(amount);
        whtax = getInt($('#whtax option:selected').val());
        cwt = 0;

        if (whtax > 0) {
            switch (whtax) {
                case 15:
                    cwt = 97;
                    break
                case 10:
                    cwt = 102;
                    break
                case 5:
                    cwt = 107;
                    break
                case 2:
                    cwt = 110;
                    break
                case 1:
                    cwt = 110;
                    break
            }
//            alert(balance);
            netvat = amount / (cwt / 100);

//        return Math.round(netvat * (whtax / 100));
            return netvat * (whtax / 100);
//        }
        }
        return 0;

//        if (balance > 0) {
//
//        }
    }
        
    function checkPreviousTrans($object) {
        return true;
        whtax = $($object).parents('tr').find('.whtpercent').val();
//        percentate = 0; 
        //      alert(whtax);
        if (whtax != 0 && $($object).is(':checked')) {
            $('#whtax option').removeAttr('selected')
                    .filter('[value="' + whtax.replace('%', '') + '"]')
                    .attr('selected', true);
            $("#whtax option[value!='" + whtax + "']").attr('disabled', true);

            $('.whtpercent').each(function () {
//                alert($(this).val());
                if ($(this).val() != whtax && $(this).val() != 0) {
                    $(this).parents('tr').find('input[name="chkcol[]"]').attr('disabled', true);
                }
            })
        } else if (whtax != 0) {
            $("#whtax option").removeAttr('disabled');
            $('input[name="chkcol[]"]').removeAttr('disabled');
        }
    }

    $(document).on('change', '.chkcol', function () {    

        checkPI();
        
        return false;
    });
    
    function checkPI(){
        $('.cm').addClass('hidden');
        
        pi_selected = 0;
        
        $('.chkcol:checked').each(function(){
            type = $(this).parents('tr').find('input[name="type[]"]').val();
            if(type == 'purchase_invoice'){
                pi_selected++;
            }
        });
        
        if(pi_selected > 0){
            $('.cm').removeClass('hidden');
        }
    }
</script>