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
        border: 2px solid #A8574E;
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
        color: #c51400;
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
        width:0px;
        color: #000000;
        padding-top:3px;
        /* font-weight: bold; */
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
        font-size:12px;
        font-family:Verdana;
        width:0px;
        color: #000000;
        padding-top:3px;
    }
    .img2{
        z-index:-1!important;
    }
    input[type=text]{
        width:170px;
        height: 25px;
        padding-left: 5px;
        margin-top:-5px;
        padding-right:7px;
        font-family: Verdana;
        font-size: 12px;
    }
    .textarea{
        height: 80px;
        width: 268;
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
    }
    .txtsearch22{
        /* width: 160px;
        height: 29px;
        border: none;
        background-image: url('<?= URL ?>public/images/searchButtonNew2.png');
        background-repeat: no-repeat;
        padding-left: 5px;
        padding-right:34px;
        text-align: left;
        font-family: agency fb2;
        font-size: 16px;
        font-weight: bold;
        color: #fff;
        outline-style: none;
        border-radius: 5px; */
        margin-left: 10px;
        margin-top: 6px;
        width: 208px;
        height: 30px;
        border: none;
        padding-left: 5px;
        padding-right: 34px;
        text-align: left;
        outline-style: none;
        border-radius: 5px;
        background: #C51400;
    }
    .txtsearch22::-webkit-input-placeholder{
        color:#fff;
        padding-left:7px;
    }
    .searchbutton{
        width: 35px;
        height: 32px;
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
        margin-top: 5px;
        margin-left: -34px;
        background-size: 100%;
        /* opacity: -8; */
        position: absolute;
    }
    .mainTable{
        border-collapse: collapse;
        width: 99%;
        margin-top: 10px;
        margin:auto;
    }

    .mainTable th{
        background-color: #c51400;
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
        font-size: 24px;
        outline-style: none;
        cursor: pointer;
        float: right;
        margin-right: 0px;
    }
    .expensePaymentInp{
        width:220px!important
    }
</style>

<script>
    $(function () {
        $('.client').change(function () {
            $('.mainTable > tbody > tr').remove();
            $.post(URL + 'invoice/clientInvoice', {clientid: $(this).val()})
                    .done(function (returnData) {
                        $('.mainTable > tbody').append(returnData);
                    })
                    .fail(function () {
                        alert('Connection Error!');
                    });
            return false;
        });

        $('#form').submit(function () {

        });

        amountreceived = 0;
        $('input[name="amountReceived"]').keyup(function () {
//          invoiceAmount();
            amountreceived = $(this).val();
        });

        $(document).on("click", ".chk", function () {
//            alert(parseFloat($('input[name="amountReceived"]').val()));
            invoiceAmount();
        });

        function invoiceAmount() {
//            amountreceived = $('input[name="amountReceived"]').val();
            if (amountreceived == '') {
                amountreceived = 0;
            }

            $("input[name='chk[]']:checked").each(function ()
            {
                invoicetotal = parseFloat($(this).parents('tr').find('.totalinvoice').text());

                if (amountreceived > invoicetotal) {
                    amountreceived -= invoicetotal;
                    $(this).parents('tr').find('.amount').val(invoicetotal);
                } else {
                    $(this).parents('tr').find('.amount').val('');
                }

            });
            return false;
        }


    })
</script>
<?php
if (isset($_POST['paymentid'])) {
    // $paymentview = TblEnterPaymentMySqlExtDAO::paymentView($_POST['paymentid'], '');
    // $paymentview = TblEnterPaymentMySqlExtDAO::paymentView($_POST['paymentid'], '');
    $paymentview = DAOFactory::getTblEnterBillPaymentDAO()->load($_POST['paymentid']);

    // print_r($paymentview);
}
?>
<div class="container">
    <form method="post" action="<?php echo URL ?>expenses/paymentExpense" class="enterpaymentForm boxshadow" id="form">
        <input type="button" class="close" value="x">
        <div class="titleEnterPayment"><?= strtoupper($paymentview->status) ?> PAYMENT</div>
        <div style="float:left;margin-top:20px;width:420px;margin-left:10px;">
            <table class="table1Enter">
                <tr>
                    <td>Payment Date:</td>
                    <td><input type="text"  readonly="readonly" class="expensePaymentInp" value="<?php echo date('M d, Y', strtotime($paymentview->dateReceived)) ?>"></td>
                </tr>
                <?php
                /* if($paymentview->status == 'posted' || $paymentview->status == 'reversed'){
                  ?>
                  <tr>
                  <td>Date Created:</td>
                  <td><input type="text"  style="background:#c8c8c8;border:none;" class="expensePaymentInp" readonly="readonly" name="" value="<?php echo date('m/d/Y', strtotime($paymentview->dateCreated)) ?>"></td>
                  </tr>
                  <?php
                  } */
                ?>

                <tr>
                    <td>Amount Received:</td>
                    <td><input type="text" readonly="readonly" name="amountReceived" class="numeric expensePaymentInp" id="amountReceived" value="<?php echo number_format((float) $paymentview->amountReceived, 2) ?>"></td>
                </tr>
                <tr>
                    <td>Vendor Name:</td>
                    <td colspan="3">
                        <input type="text" readonly="readonly" name="client" class="expensePaymentInp" value="<?php echo DAOFactory::getTblSupplierDAO()->load($paymentview->supplierId)->name ?>"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:left;padding:6px;"><input type="checkbox" class="2307form" checked name="received2307" id="received2307" required><label>Received 2307 form</label></td>
                </tr>

            </table>
        </div>	
        <div style="float:right;margin-top:20px;margin-right:10px;">
            <table class="table2Enter">
                <thead>
                    <tr>
                        <td>Payment No.:</td>
                        <td>
                            <input type="text" class="pNo expensePaymentInp" readonly value="<?= $paymentview->colNum ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Payment Type:</td>
                        <?php
                        $mop = DAOFactory::getTblMopDAO()->load($paymentview->mopId);
                        ?>
                        <td>
                            <input type="text" style="width:268px;" class="expensePaymentInp" readonly="readonly" value="<?= isset($mop) && !empty($mop) ? $mop->code : '' ?>"></td>
                    </tr>
                    <tr>
                        <td>Reference No.:</td>
                        <td><input type="text" name="refNum" class="expensePaymentInp" style="width:268px;" readonly="readonly" value="<?php echo $paymentview->refNum ?>"></td>
                    </tr>
                    <tr>
                        <td>
                            <div style="margin-top:-35px;">Remarks:</div>
                        </td>
                        <td>
                            <textarea class="remarksTextArea" style="width:220px;height:82px;margin-top: -4px;" readonly><?= $paymentview->notes ?></textarea>
                        </td>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <div style="clear:both;"></div>
        <div class="search">
            <input type="search" placeholder="Search Bill Payable No." class="txtsearch22"> 
            <input type="button" class="searchbutton" value="" id="search102">
        </div>
        <div class="tableDiv">

            <table class="mainTable">
                <thead>
                    <tr>
                        <th width="119px">Bill Payable No.</th>
                        <th width="110px">Ref. No.</th>
                        <th width="113px">Billing Exp Date</th>
                        <th width="145px">Billing Exp Amount</th>
                        <th  width="120px">Applied Amount</th>
                        <th  width="120px">Amount Balance</th>
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


</div>
<script>
    $(function () {

        // /* 
        // $('#search').die();
        $('#search102').click(function () {
            search = $('.txtsearch22').val();
            // if($('select[name="clientId"]').val() != ''){
            invoicePayment('<?= $paymentview->supplierId ?>', search);
            // } else {
            // $('.mainTable > tbody > tr').remove();
            // }
            // alert($('select[name="clientId"]').val());
        });



        $('#search102').click();
        function invoicePayment(clientid2, search101) {
            // alert('asdf');
            $('.mainTable > tbody > tr').remove();
            // alert(URL);
            // alert(clientid2);
            $.post(URL + 'expenses/supplierPaymentPosted', {'search': search101, 'supplierId': clientid2, 'id': '<?= $_POST['paymentid'] ?>'})
                    .done(function (returnData) {
                        $('.mainTable > tbody').append(returnData);
                    })
                    .fail(function () {
                        // alert('Connection Error!');
                    });
            return false;
        }
        // */
    })
</script>