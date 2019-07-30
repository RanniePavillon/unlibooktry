<style>
    .headertables{
        margin-top:15px;
    }
    .table1header{
        margin-left:25px;
    }
    .table2header{
        margin-right:35px;
    }
    .selectname{
        margin-left:15px;
        width:245px;
        height:27px;
        padding:5px;
        border:solid 1px #c8c8c8;
    }
    .addresssales{
        margin-left:15px;
        width:245px;
        height:80px;
        padding:5px;
        max-width:245px;
        max-height:80px;
        font-family: Verdana;
        font-style: normal;
        font-size: 12px;
        background-color: white;
        border: 1px solid #C8C8C8;

    }
    .table2header input[type="text"]{
        width:248px;
        height:27px;
        padding:5px;
        margin-left:15px;
		font-family:verdana;
		font-size:12px;
		
    }
    .table2header td{
        padding-top:5px;
        font-family:verdana;
        font-size:12px;
    }
    .table1header td{
        padding-top:3px;
        font-family:verdana;
        font-size:12px;
    }
    .discountsenior{
        border: 1px solid #C8C8C8 !important;
		text-align:left !important;
    }
    .ivat{
        margin-left:25px;
		font-family:verdana;
		font-size:12px;
    }
    .tablesalesnew{
        width:98%;
        margin:auto;
        margin-top:10px;
    }
    .tablesalesnew th{
        padding:5px;
        text-align:left;
    }
    .tablesalesnew td{
        text-align:left;
        font-family:verdana;
        font-size:12px;
        border-bottom:solid 1px #c8c8c8;
    }
    .tablesalesnew tr th:nth-child(8){
        text-align: right;
    }
    .tablesalesnew tr td:nth-child(8){
        text-align: right;
    }
    .tablesalesnew tr th:nth-child(9){
        text-align: right;
    }
    .tablesalesnew tr td:nth-child(9){
        text-align: right;
    }
    .tablesalesnew tr th:nth-child(10){
        text-align: right;
    }
    .tablesalesnew tr td:nth-child(10){
        text-align: right;
    }
    .tablesalesnew tr th:nth-child(11){
        text-align: right;
    }
    .tablesalesnew tr td:nth-child(11){
        text-align: right;
    }
    .addNewTaskButton{
        border-radius: 5px;
        margin-top: 10px;
        cursor: pointer;
        height: 28px;
        width: 87px;
        border: none;
        outline-style: none;
    }
    .search-box{
        margin-left: 13px;
        margin-top: 25px;
    }
    .totalbelow{
        width: 397px;
        float: right;
        margin-right:25px;
    }
    .totaltableBelow{
        width:100%;
    }
    .totaltableBelow td{
        font-family:verdana;
        font-size:12px;
        padding-left:5px;
    }
    .totalclass{
        height: 27px;
        width: 100%;
        text-align:right;
        padding:5px;
        margin-top:3px;
		font-size:12px;
		font-family:verdana;
    }
    .totalsalesorder{
        background-color: #C51400;
    }
    .divAdd{
        margin-top: -40px;
    }
    .tablesalesnew tr:hover{
        background-color: #c8c8c8;
    }
    .tablesalesnew select{
        width: 100%;
        height: 100%;
        padding: 0;
        border: none;
        font-family: Verdana;
        font-size: 12px;
        border:none;
    }
    .tablesalesnew input[type="text"]{
        width: 100%;
        font-size: 12px;
        font-family: Verdana;
        height: 25px;
        padding: 5px;
        border:none;
    }
    .amounttextalign{
        text-align:right;
    }
    .totaltableBelow th{
        background:none;
    }

    .company-form{
        width:47% !important;

    }
    .companyHolderNew{
        width:551px !important;
        padding-bottom: 29px !important;
    }
    .linesettings{
        width: 521px !important;
    }
    .linesettingsstart{
        margin-top: 5px;
    }
    .tableCompany{
        width: 475px !important;
    }
    .loadingimg{
        width:140px;
        height:140px;
    }

    .discountline{
        width: 75% !important;
    }
    .tobehidden{
        display:none !important;
    }
    .percentNew {
        position: absolute;
        margin-left:88px;
        margin-top: 24px;
    }
    .termsCurrency {
        font-size: 12px;
        font-family: Verdana;
        color: #000000;
        font-weight: bold;
    }
    .terms {
        margin-left: 3px;
        width: 200px;
        height: 28px;
        font-size: 12px;
        font-family: Verdana;
        margin-left:13px;
    }
    #company-newcompany2{
        padding-top:15px !important;
    }

    .loadingHolder{
        margin-top:15%;
        margin-left:45%;
    }
    .driver{
        font-family:verdana;
        font-size:12px;
        padding-left:15px;
        padding-top:15px;
    }
    .driverselect{
        font-family: Verdana;
        font-style: normal;
        font-size: 12px;
        width: 248px;
        height: 27px;
        margin-top: 2px;
        margin-left: 20px;
        padding: 5px;
    }

</style>
<title>
    ALL DELIVERY RECEIPT
</title>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/loading.css"/>

<?php
$invoicestat = 'x';
$invoicestat2 = '';
$invoice = $this->deliveryreceipt; //new TblSalesOrder();
$deliveryReceiptAmount = $this->deliveryReceiptAmount;
$taskstat = 'addDeliveryReceipt';
$info = $this->info;
$tax = $this->tax;
$uom = $this->uom;

$subTotal = $deliveryReceiptAmount->subTotalAmount == '' ? 0 : $deliveryReceiptAmount->subTotalAmount;

if ($invoice->status == 'open' && $invoice->id != '') {
    $taskstat = 'updatedeliveryreceipt';
} elseif ($invoice->status == 'posted') {
    $taskstat = 'reversedeliveryreceipt';
} elseif ($invoice->status == 'reversed') {
    $taskstat = 'reverseddeliveryreceipt';
}
?>

<div class="mainbodyInvoice">
    <div id="new2s" style="margin-left:10px !important; padding-top:15px;">
        <label class="headTextNewInvoice headings">
		 <?php
            if ($taskstat == 'updatedeliveryreceipt') {
                echo 'UPDATE';
            } elseif ($taskstat == 'reverseddeliveryreceipt') {
                echo 'REVERSED';
            } elseif ($taskstat == 'reversedeliveryreceipt') {
                echo 'POSTED';
            } else {
                echo 'CREATE NEW';
            }
            ?> DELIVERY RECEIPT</label>
    </div>	
    <form method="post" action="" class="form-Sales">
        <div class="headertables">
            <table style="float:left;" class="table1header">
                <tr>
                    <td>Customer Name:</td>
                    <td>
                        <input type="hidden" name="token" value="<?=$this->token;?>">
                        <select <?php echo $invoicestat2 ?> class="sc newsc" name='clientId' <?php echo ($taskstat == 'reverseinvoice' ? 'disabled' : '') ?> id="client" required>
                            <option></option>
                            <!--<option value="addclient">[Add Customer]</option>-->
                            <?php
                            $customer = TblClientMySqlExtDAO::queryByOrgIdOrderBy(Session::getSession('orgid'));
                            if (count($customer) > 0) {
                                foreach ($customer as $item) {
                                    if ($item->active == 'yes' || $item->id == $invoice->clientId) {
                                        if (TblSalesOrderMySqlExtDAO::getSalesOrderByClient($item->id) || $invoice->id !='') {
                                            ?>
                                            <option value='<?php echo $item->id ?>' <?php echo ($item->id == $invoice->clientId) ? 'selected' : '' ?> currencyId="<?= $item->currencyId ?>">
                                                <?php echo $item->clientName ?>
                                            </option>
                                            <?php
                                        }
                                    }
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Sales Order:</td>
                    <td>
                        <?php
                        $salesorder = $invoice->clientId != '' ? DAOFactory::getTblSalesOrderDAO()->load($invoice->salesOrderId) : array();
                        ?>
                        <select name="salesOrderId" id="salesOrderId" class="sc deliverySelect">
                            <option value=""></option>
                            <?php
                            if ($salesorder) {
//                                foreach ($salesorder as $item) {
                                    ?>
                                    <option value="<?php echo $salesorder->id ?>" <?php echo ($salesorder->id == $invoice->salesOrderId) ? 'selected' : '' ?>><?php echo $salesorder->salesOrderNo; //. ';' . $item->dateIssued . ';' . $item->grandTotal  ?></option>
                                    <?php
//                                }
                            }
                            ?>
                            <option value="showDr">Show SO</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><div class="divAdd">Address:</div></td>
                    <td>
                        <textarea class="add" id='address' name='address' readonly <?php echo $invoicestat ?> ><?php echo ($invoice->clientId != '') ? DAOFactory::getTblClientDAO()->load($invoice->clientId)->address : '' ?></textarea>
                    </td>
                </tr>

            </table>
            <table style="float:right;" class="table2header">
                <tr>
                    <td>Delivery Receipt No.:</td>
                    <td><input type="text" name="deliveryReceiptNo" value="<?php echo $invoice->deliveryReceiptNo ?>" required></td>
                </tr>
                <tr>
                    <td>Date Issued:</td>
                    <td><input type="text" class="di" id="di" name="dateIssued"  <?php echo $invoicestat ?> required value="<?php echo date('m/d/Y', strtotime($invoice->dateIssued)); ?>" required>
                        <span style="color:red;">*</span></td>
                </tr>
                <tr class="hidden">
                    <td>SO No.:</td>
                    <td><input type="text" name=""></td>
                </tr>
                <tr>
                    <td>Date Created:</td>
                    <td><input type="text" class="di" name="dateCreated" value="<?php echo date('m/d/Y', strtotime($invoice->dateCreated)); ?>" style="background:#c8c8c8;border:none;" disabled></td>
                </tr>
                <tr>
                    <td>Ref. No.:</td>
                    <td><input type="text" name="refNo" value="<?php echo $invoice->refNo ?>" ></td>
                </tr>
                <tr>
                    <td>Discount:</td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="radio" id="percent" name="discounttype" value="percent" <?php echo $invoice->disc != 0 ? 'checked' : '' ?> onclick="javascript: return false;"> In percent 
                        <input type="radio" id="amount" name="discounttype" value="amount" <?php echo $invoice->disc == 0 ? 'checked' : '' ?> onclick="javascript: return false;"> In Amount 
                        <input type="text" style="width:98px;" class="dsc isNumeric  discountsenior <?php echo $invoice->disc != 0 ? 'hidden' : '' ?>  <?php echo $invoicestat ?>" name="discountPesoAmount" value="<?php echo ($deliveryReceiptAmount->discountPesoAmount != '') ? Controller::getFloat($deliveryReceiptAmount->discountPesoAmount) : '0.00' ?>" readonly> 
                        <input type="text" style="width:98px;" class="dsc nodecimal discountsenior <?php echo $invoice->disc == 0 ? 'hidden' : '' ?> <?php echo $invoicestat ?>" name="discount" value="<?php echo ($invoice->disc != '') ? $invoice->disc : '0' ?>" readonly>

                    </td>
                </tr>

            </table>
        </div>
        <div style="clear:both;"></div>
        <div>
            <?php if ($info->typeOfTax == 'vat') { ?>

                <div class="ivat">Inclusive of VAT <input type="checkbox"  class="" name="inclusiveOfVat" style="-webkit-transform: scale(1.4);margin-top:11px;margin-left:5px;height: 10px;"
                                                          <?= $invoice->inclusiveOfVat == '' ? ' checked ' : $invoice->inclusiveOfVat == 'yes' ? ' checked ' : "" ?> onclick="javascript: return false;"></div>

            <?php } ?>
        </div>

        <div>
            <?php
            $client = DAOFactory::getTblClientDAO()->load($invoice->clientId);
            if (count($this->deliveryReceiptTaskLines) > 0) {
                ?>
                <table class="tablesalesnew">
                    <thead>
                        <tr>
                            <th width="12%">Item No.</th>
                            <th width="15%">Item Description</th>
                            <th width="10%">Vat Type</th>
                            <th width="10%">Warehouse</th>
                            <th width="6%" style="text-align:center">Qty</th>
                            <th width="8%" >UOM</th>
                            <th width="10%" style="text-align:right">Unit Price</th>
                            <th width="10%">Amount</th>
                            <th width="5%">Discount</th>
                            <th width="10%">Net Amount</th>
                        </tr>
                    </thead>	
                    <?php
                    foreach ($this->deliveryReceiptTaskLines as $i => $salesorderline) {
                        ?>
                        <tbody>
                            <tr>
                                    <!-- <td><div class="del"><input type="button" name="delete" class="del deltask"></div></td> -->
                                <td>
                                    <input type="hidden" name="itemId[]" value="<?php echo $salesorderline->itemId ?>" class='itemid' />
                                    <input type="hidden" name="vatId[]" value="<?php echo $salesorderline->vatId ?>" />
                                    <input type="hidden" name="warehouseId[]" value="<?php echo $salesorderline->warehouseId ?>" />
                                    <input type="hidden" name="uomId[]" value="<?php echo $salesorderline->uomId ?>" />

                                    <?php
                                    $items = TblItemMySqlExtDAO::getItemList(Session::getSession('orgid'));
                                    foreach ($items as $item) {
                                        if ($salesorderline->itemId == $item->id) {
                                            ?>
                                            <input type="text" value="<?php echo $item->itemCode ?>" />
                                            <?php
                                        }
                                    }
                                    ?>
                                    <input type="hidden" name="salesordertaskid[]" value="<?php echo $salesorderline->id ?>" />
                                </td>
                                <td><input type="text" name="itemDescription[]" value="<?php echo ($salesorderline->itemDescription) ?>"></td>
                                <td> 
                                    <?php
                                    if (count($tax) > 0) {
                                        ?>
                                        <?php
                                        foreach ($tax as $itemvat) {
                                            if ($salesorderline->vatId == $itemvat->id) {
                                                ?>
                                                <input type="text" value="<?php echo $itemvat->description ?>" class="vatcontainer" />
                                                <?php
                                            }
                                        }
                                    }
                                    ?>
                                    </select>
                                </td>
                                <td>
                                    <?php
                                    $warehouse = TblWarehouseMySqlExtDAO::getWarehouseList(Session::getSession('orgid'));
                                    foreach ($warehouse as $whouse) {
                                        if ($whouse->id == $salesorderline->warehouseId) {
                                            ?>
                                            <input type="text" value="<?php echo $whouse->warehouseName ?>" />
                                            <?php
                                        }
                                    }
                                    ?>
                                </td>
                                <td><input type="text" value="<?php echo $salesorderline->qty ?>" style="text-align:center" class="qty" name="qty[]"></td>
                                <td>
                                    <?php
                                    if (count($uom) > 0) {
                                        foreach ($uom as $uomlist) {
                                            if ($uomlist->id == $salesorderline->uomId) {
                                                ?>
                                                <input type="text" value="<?php echo $uomlist->abbreviation ?> " />
                                                <?php
                                            }
                                        }
                                    }
                                    ?>
                                </td>
                                <td><input type="text" name="unitPrice[]" value="<?php echo Controller::getFloat($salesorderline->unitPrice) ?>" class="unitPrice amounttextalign isNumeric "></td>
                                <td><input type="text" value="<?php echo Controller::getFloat($salesorderline->qty * $salesorderline->unitPrice) ?>" name="rate[]" class="rate amounttextalign isNumeric"></td>
                                <td style="background-color: #fff;"><input type="text" value="<?php echo $salesorderline->discountLine ?>" name="discountLine[]" style="width: 75%;" class="discountline amounttextalign">%</td>
                                <td><input type="text" value="<?php echo Controller::getFloat($salesorderline->netAmount) ?>" class="tasknet linetext RateTH isNumeric netAmountLine amounttextalign" name="netAmount[]" readonly></td>
                        <!--	<td>
                                        <div class="adel">
                                                <input type="button" name="add"  class="a addtask addtaskslines" id="addtask">
                                        </div>
                                </td>-->
                            </tr>
                        </tbody>
                    <?php }
                    ?>
                </table>
                <?php
            } else {
                ?>
                <table class="tablesalesnew <?php echo ($taskstat == "updatesalesinvoice") ? 'hidden' : '' ?>">
                    <thead>
                        <tr>
                                <!--<th width="2%"></th>-->
                            <th width="12%">Item No.</th>
                            <th width="15%">Item Description</th>
                            <th width="10%">Vat Type</th>
                            <th width="10%">Warehouse</th>
                            <th width="6%" style="text-align:center">Qty</th>
                            <th width="8%" style="text-align:center">UOM</th>
                            <th width="10%" style="text-align:right">Unit Price</th>
                            <th width="10%">Amount</th>
                            <th width="5%">Discount</th>
                            <th width="10%">Net Amount</th>
                    <!--	<th width="2%"></th> -->
                        </tr>
                    </thead>
                    <tbody></tbody>

                </table>
                <?php
            }
            ?>
        </div>

        <div class="totalbelow">
            <table class="totaltableBelow">
                <tr>	
                    <th width="40%"></th>
                    <th width="60%"></th>
                </tr>
                <?php
                $discounttotal = $deliveryReceiptAmount->discountAmount == '' ? 0 : $deliveryReceiptAmount->discountAmount;
                ?>
                <tr>
                    <td>Subtotal</td>
                    <td><input type="text" class="totalclass numeric"  style="padding-right: 10px;"
                               id="subtotal" name="subTotalAmount" value="<?php echo Controller::getFloat($subTotal) ?>" readonly></td>
                </tr>
                <tr>
                    <td>Discount</td>
                    <td><input type="text" class="totalclass numeric" id="discount" name="discountAmount" style="padding-right: 10px;" value="<?php echo Controller::getFloat($discounttotal) ?>" readonly></td>
                </tr>
                <tr>
                    <td>Net Amount</td>
                    <td><input type="text" class="totalclass numeric netamounttotal" style="padding-right: 10px;" value="<?= Controller::getFloat(($deliveryReceiptAmount->subTotalAmount) - ($deliveryReceiptAmount->discountAmount)) ?>" readonly></td>
                </tr>
                <?php
                $vattotal = $deliveryReceiptAmount->vatAmount == '' ? 0 : $deliveryReceiptAmount->vatAmount;
                ?>
                <tr>
                    <td>VAT</td>
                    <td style="padding-bottom:3px;"><input type="text" class="totalclass numeric" id="vat" name="vatAmount" value="<?php echo Controller::getFloat($vattotal) ?>" style="padding-right: 10px;" readonly></td>
                </tr>
                <tr class="totalsalesorder">
                    <td style="font-weight:bold;color:#fff;">Total Amount</td>
                    <td><input type="text" class="totalclass numeric" name="grandTotal" style="padding-right: 10px;font-weight:bold;color:#fff;background:none;border:none;" value="<?php echo Controller::getFloat($deliveryReceiptAmount->grandTotal) ?>" readonly></td>
                </tr>
            </table>
        </div>
        <div style="clear:both;"></div>
<?php $driver = $this->driver; ?>
        <div class="">
            <div class="driver">Assigned Driver: 
                <select class="driverselect" name="driverId" required>
                    <option></option>
                    <option value="addDriver">[Add Driver]</option>

                    <?php foreach ($driver as $each): ?>
                        <option value="<?php echo $each->id ?>" <?php echo $each->id == $invoice->driverId ? 'selected' : '' ?>><?= $each->driverName ?></option>
<?php endforeach; ?>
                </select> 
            </div>    
        </div>
        <div class="buttonsInvoices"> 
<?php if ($invoice->status == "open" && ($useraccess->Add == 'yes' || $useraccess->Edit == 'yes')) { //echo $salesorder->status;  ?>

                <input class="bn3 addsavebuttonbody saveSales" type="submit" name="save" value="SAVE" id="save">
                <input class="bn bPost addsavebuttonbody" type="submit" name="post" value="POST">
            <?php } elseif ($invoice->status == "posted") {
                ?>
                <input type="button" name="reverse" value="REVERSE" class="bn3b addsavebuttonbody" id="reverseNewInvoice" style="cursor:pointer;">
                <?php
            }
            ?>	
            <input type="hidden" name="task" value="<?php echo $taskstat ?>"/>
            <input type="hidden" name="status" value=""/>
            <input type="hidden" name="id" value="<?php echo $invoice->id ?>" />
        </div>
    </form>
</div>

<div class="popBack hidden">
</div>

<script>
    invoiceprintview = $('input[name="id"]').val();

    if ('<?= $invoice->status ?>' == 'posted' || '<?= $invoice->status ?>' == 'reversed') {
        $('input[type="text"], select, input[type="number"], input[type="date"], textarea, input[type="radio"]').prop('disabled', true);
    }

<?php if (Session::getSession('status') == 'posted'): ?>
    <?php Session::setSession('status', false); ?>
        printPreview('<?= Session::getSession('deliveryreceipt_id') ?>');
        $('input[type="text"], select, input[type="number"], input[type="date"], textarea, input[type="radio"]').prop('disabled', true);
<?php endif; ?>
<?php Session::setSession('deliveryreceipt_id', false); ?>

    $('#reverseNewInvoice').click(function () {

        let token = $('input[name="token"]').val();

        // alert('dfsdf');
        if (confirm('Are you sure you want to reverse the Sales Invoice?')) {
            $('body').css('overflow', 'hidden');
            $('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
            $('.popBack').removeClass('hidden');
            $.post(URL + 'deliveryreceipt/updateDeliveryReceipt', {'id': '<?= $invoice->id ?>', 'status': 'reverse', 'token':token})
                    .done(function (returnData) {
                        returnData = returnData.trim();
                        if (returnData == '') {
                            $('#reverseNewInvoice').attr('disable', 'disable');
                            window.location.href = URL + 'sales/deliveryReceipt';
                        } else {
                            $('body').css('overflow', 'auto');
                            $('.popBack').addClass('hidden');
                        }
                    })
                    .fail(function () {
                        alert('Connection Error!');
                    });
            return false;
        }
    });
    
    function printPreview(id) {
        $.post(URL + 'sales/deliveryReceiptPreview', {drid: id})
                .done(function (returnData) {
                    $('.popBack').html(returnData);
                    $('.popBack').removeClass('hidden');
                    $('body').css('overflow', 'hidden');
                    $('.closePrint').click(function () {
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

</script>