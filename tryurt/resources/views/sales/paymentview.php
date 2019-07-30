<?php
//require $_SERVER['DOCUMENT_ROOT'] . '/unlibooks/libs/Server.php';
//require $_SERVER['DOCUMENT_ROOT'] . '/unlibooks/libs/Session.php';
//require $_SERVER['DOCUMENT_ROOT'] . '/unlibooks/include_dao.php';
?>

<style>
    .container{
        margin: auto;
    }
    .enterpaymentForm{
        background-color: white;
        width: 900px;
        margin: auto !important;
        margin-top: 70px !important;
        /* border: 2px solid #24b6ef; */
        padding-bottom: 20px;
    }
    .titleEnterPayment{
        margin-top: 16px;
        margin-left: 10px;
        width: 869;
        background-color: -webkit-gradient(linear, right bottom, right top, color-stop(0.06, #F0F0F0), color-stop(1, #CCCACC), color-stop(1, #D9D9D9),color-stop(1, #CFCDCF));
        background-image: -o-linear-gradient(top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%);
        background-image: -moz-linear-gradient(top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%);
        background-image: -ms-linear-gradient(top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%);
        padding-left: 10px;
        padding-top: 5px;
        padding-bottom: 5px;
        font-size: 30px;
        font-family:agency fb2;
        font-weight: bold;
        /* color: #183867; */
    }
    .table1Enter{
    }
    .table{
        border-spacing: 5px;
    }
    .table1Enter td{
        /* text-align: right; */
        font-size:12px;
        font-family:Verdana;
        width: 176px;
        color: #000000;
        font-weight: bold;
    }
    .cnitableCollection tr th:nth-child(4)(5){
        text-align: right;
    }
    .table1Enter select{
        width: 223px;
        margin-left: 5px;
        height: 25px;
    }
    table1Enter input[type=text]{
        width: 170px;
        height: 25px;
        padding-left: 5px;
        margin-top:-5px;
    }

    .table2Enter{
        /* border-spacing: 1px;
        margin-top: -141px;
        margin-left: 424px; */
    }
    .table2Enter{
        border-spacing: 5px;
    }
    .table2Enter td{
        /* text-align: right; */
        font-size:12x;
        font-family:Verdana;
        /* width: 176px; */
        color: #000000;
        font-weight: bold;
    }
    .img2{
        z-index:-1!important;
    }
    input[type=text]{
        width: 220px;
        height: 27px;
        padding-left: 5px;
        padding-right:7px;
        font-family: Verdana;
        font-size: 12px;
    }
    .textarea{
        height: 80px;
        width: 220px;
        max-height: 80px;
        max-width: 268px;
        padding-left: 5px;
    }
    .note{
        position: relative;
        top: -28px;
    }
    .search{
        margin-left:5px;
        margin-top:15px;
    }
    .txtsearch22{
        width: 160px;
        height: 29px;
        border: none;
        /* background-image: url('<?= URL ?>public/images/searchButtonNew2.png');
        background-repeat: no-repeat; */
        padding-left: 5px;
        padding-right:34px;
        text-align: left;
        font-family: agency fb2;
        font-size: 16px;
        font-weight: bold;
        color: #fff;
        outline-style: none;
        border-radius: 5px;
        background:#C51400;
    }
    .txtsearch22::-webkit-input-placeholder{
        color:#fff;
        padding-left:7px;
    }
    .searchbutton2{
        width: 35px;
        height: 31px;
        cursor: pointer;
        border: none;
        background-image: url('<?= URL ?>public/images/searchback.png');
        background-repeat: no-repeat;
        border-radius: 2px 2px 2px 2px;
        font-size: 14px;
        font-family: Agency FB;
        cursor: pointer;
        border: solid 1px #c8c8c8;
        background-color: rgb(230, 250, 222);
        background-repeat: no-repeat;
        margin-top: -1px;
        margin-left: -34px;
        background-size: 100%;
        /* opacity: -8; */
        position: absolute;
    }

    .mainTable{
        border-collapse: collapse;
        width:99%;
        margin-top: 10px;
        margin:auto;
    }

    .mainTable th{
        /* background-color: #183867; */
        color: white;
        font-weight: bold;
        font-size:12px;
        font-family:Verdana;
        text-align: left;
        padding:7px 11px!important;
    }
    .mainTable td{
        color: black;
        font-weight:normal;
        font-size:11px;
        font-family: Verdana;
        text-align: left;
        padding:7px 11px;
    }

    .tableDiv{
        margin-top: 5px;
    }
    .mainTable tr th:nth-child(6){
        text-align: right;
    }
    .mainTable tr th:nth-child(4){
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
        width: 100%;
        height: 25px;
        text-align: right;
        margin-top: 1px;
        background:none;
        font-family:Verdana;
        font-size:11px;
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
    .buttons{
        width: 60;
        height: 24px;
        border-radius: 2px;
        border: 1px solid c8c8c8;
        background-color: -webkit-gradient(linear, right bottom, right top, color-stop(0.06, #F0F0F0), color-stop(1, #CCCACC), color-stop(1, #D9D9D9),color-stop(1, #CFCDCF));
        background-image: -o-linear-gradient(top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%);
        background-image: -moz-linear-gradient(top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%);
        background-image: -webkit-linear-gradient(top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%);
        background-image: -ms-linear-gradient(top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%);
        background-image: linear-gradient(to top, #F0F0F0 6%, #CCCACC 100%, #D9D9D9 100%, #CFCDCF 100%);
        cursor: pointer;
    }
    .buttonscontainer{
        margin-left: 820px;
        margin-top: 15;
    }
    .close{
        background: transparent;
        color: black;
        border: none;
        border-radius: 2px;
        font-family: Arial black;
        font-weight: bold;
        font-size: 33px;
        top: 70px;
        outline-style: none;
        cursor: pointer;
        float: right;
        margin-right: 12px;
    }
</style>

<?php
if (isset($_POST['paymentid'])) {
    // echo $_POST['paymentid'];
    $paymentview = TblSalesEnterPaymentMySqlExtDAO::paymentView($_POST['paymentid'], '');
    $jspaymentview = TblSalesEnterPaymentMySqlExtDAO::paymentViewJournal($_POST['paymentid'], '');
    $paymentview = !$paymentview ? $jspaymentview : $paymentview;
    // print_R($paymentview);
    // print_r($paymentview); exit;
}
?>

<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>

<div class="container">
    <form method="post" action="<?php echo URL ?>invoice/collection" class="enterpaymentForm boxshadow" id="form">
        <input type="button" class="close" value="x">
        <div class="titleEnterPayment headingspop"><?= strtoupper($paymentview[0]->status) ?> PAYMENT</div>
        <div style="float:left;margin-top:20px;width:420px;margin-left:10px;">
            <table class="table1Enter">
                <tr>
                    <td>Date Received:</td>
                    <td><input type="text"  readonly="readonly" name="" value="<?php echo date('m/d/Y', strtotime($paymentview[0]->dateReceived)) ?>"></td>
                </tr>
                <?php
                if ($paymentview[0]->status == 'posted' || $paymentview[0]->status == 'reversed') {
                    ?>
                    <tr>
                        <td>Date Created:</td>
                        <td><input type="text"  style="background:#c8c8c8;border:none;" readonly="readonly" name="" value="<?php echo date('m/d/Y', strtotime($paymentview[0]->dateCreated)) ?>"></td>
                    </tr>
                    <?php
                }
                ?>

                <tr>
                    <td>Amount Received:</td>
                    <td><input type="text" readonly="readonly" name="amountReceived" class="numeric" id="amountReceived" value="<?php echo number_format((float) $paymentview[0]->amountReceived, 2) ?>"></td>
                </tr>
                <tr>
                    <td>Received from Client:</td>
                    <td colspan="3">
                        <input type="text" readonly="readonly" name="client" value="<?php echo $paymentview[0]->clientName ?>"/>
                    </td>
                </tr>
                <tr>
                    <td style="padding:7px;"><input type="checkbox" class="2307form" checked name="received2307" id="received2307" disabled><label>Received 2307 form</label></td>
                </tr>

            </table>
        </div>	
        <div style="float:right;margin-top:20px;">
            <table class="table2Enter">
                <thead>
                    <tr>
                        <td>Method of Payment:</td>
                        <?php $mop = DAOFactory::getTblMopDAO()->load($paymentview[0]->mopId); ?>
                        <td><input type="text" style="width:220px;" readonly="readonly" value="<?= $mop->code ?>"></td>
                    </tr>
                    <tr>
                        <td>Payment No.:</td>
                        <td>
                            <input type="text" name="refNum" style="width:220px;" readonly="readonly" value="<?php echo $paymentview[0]->salesColNum ?>">
                            <span style="color:red;">*</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Reference No.:</td>
                        <td>
                            <input type="text" name="refNum" style="width:220px;" readonly="readonly" value="<?php echo $paymentview[0]->refNum ?>">
                            <span style="color:red;">*</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="note">Notes:</td>
                        <td colspan="3"><textarea class="textarea" readonly="readonly"><?php echo $paymentview[0]->notes ?></textarea></td>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <div style="clear:both;"></div>
        <div class="search" >
            <input type="search" placeholder="Search Billing No." class="txtsearch22"> 
            <input type="button" class="searchbutton2" value="" id="search102">
        </div>
        <div class="tableDiv">
            <table class="mainTable">
                <thead>
                    <tr>
                        <th width="100px">Billing No.</th>
                        <th width="150px">Billing Date</th>
                        <th width="150px" style="text-align:right;">Total Billing Amount</th>
                        <th width="150px">WHT Amount</th>
                        <th width="150px">Applied Amount</th>
                        <th width="150px">Amount Balance</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <!--<div class="buttonscontainer">
            <input type="button" value="Close" class="buttons close">
        </div>-->

    </form>
    <div class="popup hidden"></div>
</div>
<script>
    $(function() {
        $('#search102').click(function () {
            search = $('.txtsearch2').val();
            invoicePayment('<?php echo $paymentview[0]->clientId ?>', search);
        });

        $('#search102').click();


    });

    function invoicePayment(clientid2, search101) {
        $('.mainTable > tbody > tr').remove();
        $.post(URL + 'sales/clientInvoicePosted', {'search': search101, 'clientid': clientid2, 'id': '<?php echo $_POST['paymentid'] ?>'})
                .done(function (returnData) {
                    $('.mainTable > tbody').append(returnData);
                })
                .fail(function () {
                    // alert('Connection Error!');
                });
        return false;
    }
    
    function viewCm(cmid){
        $.post(URL + 'cm/appliedCm', {cmid: cmid})
                .done(function (returnData) {
                    $('.popup').html(returnData);
                    $('.popup').removeClass('hidden');
//                    $('body').css('overflow', 'hidden');


                    $('.closeCNTs').click(function () {
                        $('.popup').addClass('hidden');
                        $('.popup').html('');
//                        $('body').css('overflow', 'auto');s
                    });
                })
                .fail(function () {
                    alert('Connection Error!');
                });
        return false;
    }
    
    function viewSr(srid){
        $.post(URL + 'salesReturn/appliedSr', {srid: srid})
                .done(function (returnData) {
                    $('.popup').html(returnData);
                    $('.popup').removeClass('hidden');
//                    $('body').css('overflow', 'hidden');


                    $('.closeCNTs').click(function () {
                        $('.popup').addClass('hidden');
                        $('.popup').html('');
//                        $('body').css('overflow', 'auto');s
                    });
                })
                .fail(function () {
                    alert('Connection Error!');
                });
        return false;
    }
</script>