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
    .selectname, .receiveorder{
        margin-left:15px;
        width:248px;
        height:27px;
        padding:5px;
        font-family: Verdana;
        font-size: 12px;
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
        font-family: Verdana;
        font-size: 12px;
    }
    .table2header td{
        padding-top:3px;
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
        text-align: left;
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
        margin-right:10px;
        margin-top:25px;
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
        font-family:verdana;
        font-size:12px;
        margin-top:3px;
    }
    .totalsalesorder{
        background-color: #C51400;
    }
    .divAdd{
        margin-top: -40px;
    }
    .totaltableBelow th{
        background:none;
    }
    .tablesalesnew select {
        width: 100%;
        height: 100%;
        padding: 0;
        border: none;
        font-family: Verdana;
        font-size: 12px;
    }
    .tablesalesnew select{
        width: 100%;
        height: 100%;
        padding: 0;
        border: none;
        font-family: Verdana;
        font-size: 12px;
    }
    .tablesalesnew input[type="text"]{
        width: 100%;
        font-size: 12px;
        font-family: Verdana;
        height: 25px;
        border: none;
        padding: 5px;
    }
    .amounttextalign{
        text-align:right;
    }
    .tablesalesnew tr:hover{
        background-color: #c8c8c8;
    }
    .loadingHolder{
        margin-top:15%;
        margin-left:45%;
    }
</style>
<title>
    NEW PURCHASE INVOICE
</title>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/loading.css"/>
<?php
$invoicestat = 'x';
$invoicestat2 = '';
$taskstat = 'addPurchaseInvoice';
$info = $this->info;
$tax = $this->tax;

$purchaseinvoice = $this->purchaseinvoice;
$purchaseinvoicelines = $this->purchaseinvoicelines;

if ($purchaseinvoice->status == 'open' && $purchaseinvoice->id != '') {
    $taskstat = 'updatepurchaseinvoice';
} elseif ($purchaseinvoice->status == 'posted') {
    $taskstat = 'reversepurchaseinvoice';
} elseif ($purchaseinvoice->status == 'reversed') {
    $taskstat = 'reversedpurchaseinvoice';
}

$purchaseInvoiceId = $purchaseinvoice->id;
$purchaseInvoiceAmount = new TblPurchaseInvoiceAmount();
if ($purchaseInvoiceId != '') {
    $purchaseInvoiceAmount = $this->purchaseInvoiceAmount;
}
?>
<div class="mainbodyInvoice"><?php ?>
    <div id="new2s" style="margin-left:10px !important; padding-top:15px;">
        <label class="headTextNewInvoice headings" >
			<?php
				if ($taskstat == 'updatepurchaseinvoice') {
					echo 'UPDATE';
				} elseif ($taskstat == 'reversedpurchaseinvoice') {
					echo 'REVERSED';
				} elseif ($taskstat == 'reversepurchaseinvoice') {
					echo 'POSTED';
				} else {
					echo 'CREATE NEW';
				}
            ?> PURCHASE INVOICE</label>
    </div>	
    <form method="post" action="" class="form-Sales">	
        <div class="headertables">
            <table style="float:left;" class="table1header">
                <tr>
                    <td>Vendor Name:</td>
                    <td>
                        <input type="hidden" name="token" value="<?=$this->token;?>">
                        <select name="supplierId" class="selectname" id="supplierId" >
                            <option></option>
                            <?php
                            $vendor = TblSupplierMySqlExtDAO::getSupplierOrderList(Session::getSession('orgid'));

                            foreach ($vendor as $item) {
                                if ($item->activeAccount == 'yes') {
                                    ?>
                                    <option currency="<?= $item->currencyId ?>" value="<?php echo $item->id ?>" tin="<?= ucwords($item->tin) ?>" address="<?= $item->address ?>"
                                    <?= $item->id == $purchaseinvoice->supplierId ? 'selected="selected"' : ''; ?> 
                                    <?php
                                    if (Session::getSession('vendorSessionId') == $item->id) {
                                        echo ' selected="selected" ';
                                        Session::setSession('vendorSessionId', false);
                                    }
                                    ?> grossIncome="<?= $item->grossIncome ?>" 
                                            >
                                                <?php echo $item->name ?>
                                    </option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Received Order:</td>
                    <td><select name="receivedOrderId" class="receiveorder" required >
                            <option value=""></option>
                            <?php
                            $receiveorder = DAOFactory::getTblReceivedOrderDAO()->load($purchaseinvoice->receivedOrderId);
                            if ($receiveorder) {
                                ?>
                                <option></option>
                                <option value="<?php echo $purchaseinvoice->receivedOrderId ?>" selected><?php echo $receiveorder->receivedOrderNo ?></option>
                            <?php } ?>
                            <option value="">Show RO</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><div class="divAdd">Address:</div></td>
                    <td>
                        <textarea name="address" class="addresssales"><?php echo ($purchaseinvoice->supplierId != '') ? DAOFactory::getTblSupplierDAO()->load($purchaseinvoice->supplierId)->address : '' ?>
					
                        </textarea>
                    </td>
                </tr>
            </table>
            <table style="float:right;" class="table2header">
                <tr>
                    <td>Purchased Inv  No.:</td>
                    <td><input type="text" name="purchaseInvoiceNo" value="<?php echo $purchaseinvoice->purchaseInvoiceNo ?>" required /></td>
                </tr>
                <tr>
                    <td>Received Date:</td>
                    <td><input type="text" name="dateIssued" value="<?php echo date('m/d/Y', strtotime($purchaseinvoice->dateIssued)) ?>" required /></td>
                </tr>
                <tr>
                    <td>Date Created:</td>
                    <td><input type="text" name="dateCreated" value="<?php echo date('m/d/Y', strtotime($purchaseinvoice->dateCreated)) ?>"></td>
                </tr>
                <tr>
                    <td>Ref. No.:</td>
                    <td><input type="text" name="refNo" value="<?php echo $purchaseinvoice->refNo ?>"  /></td>
                </tr>
                <tr>
                    <td>Discount:</td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="radio" id="percent" name="discounttype" value="percent" <?php echo $purchaseinvoice->discount != 0 ? 'checked' : '' ?> onclick="javascript: return false;" /> In percent 
                        <input type="radio" id="amount" name="discounttype" value="amount" <?php echo $purchaseinvoice->discount == 0 ? 'checked' : '' ?> onclick="javascript: return false;" /> In Amount  
                        <input type="text" style="width:98px;" class="dsc isNumeric  discountsenior <?php echo $purchaseinvoice->discount != 0 ? 'hidden' : '' ?>  <?php //echo $invoicestat   ?>" name="discountPesoAmount" value="<?php echo ($purchaseInvoiceAmount->discountPesoAmount != '') ? $purchaseInvoiceAmount->discountPesoAmount : '0.00' ?>" readonly /> 
                        <input type="text" style="width:98px;" class="dsc nodecimal discountsenior <?php echo $purchaseinvoice->discount == 0 ? 'hidden' : '' ?> <?php //echo $invoicestat   ?>" name="discount" value="<?php echo ($purchaseinvoice->discount != '') ? $purchaseinvoice->discount : '0' ?>" readonly />
                    </td>
                </tr>

            </table>
        </div>
        <div style="clear:both;"></div>
        <div>
            <?php if ($info->typeOfTax == 'vat') { ?>

                <div class="ivat">Inclusive of VAT <input type="checkbox"  class="" name="inclusiveOfVat" style="-webkit-transform: scale(1.4);margin-top:11px;margin-left:5px;height: 10px;"
                                                          <?= $purchaseinvoice->inclusiveOfVat == '' ? ' checked ' : $purchaseinvoice->inclusiveOfVat == 'yes' ? ' checked ' : "" ?> onclick="javascript: return false;" /></div>

            <?php } ?>
        </div>

        <div>
            <?php if ($purchaseinvoicelines) { ?>
                <table class="tablesalesnew">
                    <tr>
                        <th width="12%">Item No.</th>
                        <th width="15%">Item Description</th>
                        <th width="10%">Vat Type</th>
                        <th width="6%" style="text-align:center">Purchased Qty</th>
                        <th width="6%" style="text-align:center">Received Qty</th>
                        <th width="8%">Warehouse</th>
                        <th width="8%" style="text-align:center">UOM</th>
                        <th width="10%">Unit Price</th>
                        <th width="8%">Amount</th>
                        <th width="6%">Discount</th>
                        <th width="10%">Net Amount</th>
                    </tr>
                    <?php
                    foreach ($purchaseinvoicelines as $purchaseinvoiceline) {
                        ?>
                        <tr>
                            <td>
                                <?php
                                $items = TblItemMySqlExtDAO::getItemList(Session::getSession('orgid'));
                                foreach ($items as $item) {
                                    if ($purchaseinvoiceline->itemId == $item->id) {
                                        ?>
                                        <input type="text" value="<?php echo $item->itemCode ?>" readonly />
                                        <?php
                                    }
                                }
                                ?>
                                <input type="hidden" name="itemId[]" value="<?php echo $purchaseinvoiceline->itemId ?>" />
                                <input type="hidden" name="vatId[]" value="<?php echo $purchaseinvoiceline->vatId ?>" />
                                <input type="hidden" name="warehouseId[]" value="<?php echo $purchaseinvoiceline->warehouseId ?>" />
                                <input type="hidden" name="uomId[]"  value="<?php echo $purchaseinvoiceline->uomId ?>" />
                                <input type="hidden" name="purchaseinvoicetaskid[]" value="<?php echo $purchaseinvoiceline->id ?>" />
                                <input type="hidden" name="averageCost[]" value="<?php echo $purchaseinvoiceline->averageCost ?>" />
                            </td>
                            <td><input type="text" name="itemDescription[]" value="<?php echo ($purchaseinvoiceline->itemDescription) ?>" readonly /></td>
                            <td>
                                <?php
                                if (count($tax) > 0) {
                                    ?>
                                    <?php
                                    foreach ($tax as $itemvat) {
                                        if ($purchaseinvoiceline->vatId == $itemvat->id) {
                                            ?>
                                            <input type="text" value="<?php echo $itemvat->description ?>" readonly />
                                            <?php
                                        }
                                    }
                                    ?>
                                <?php } ?>
                            </td>
                            <td><input type="text" value="<?php echo $purchaseinvoiceline->purchasedQty ?>" name="purchasedQty[]" class="purchaseqty" style="text-align:center" readonly /></td>
                            <td><input type="text" value="<?php echo $purchaseinvoiceline->receivedQty ?>"  name="receivedQty[]" style="text-align:center" readonly /></td>
                            <td>
                                <?php
                                $warehouse = TblWarehouseMySqlExtDAO::getWarehouseList(Session::getSession('orgid'));
                                foreach ($warehouse as $whouse) {
                                    if ($whouse->id == $purchaseinvoiceline->warehouseId) {
                                        ?>
                                        <input type="text" value="<?php echo $whouse->warehouseName ?>" readonly />
                                        <?php
                                    }
                                }
                                ?>
                            </td>
                            <td style="text-align:center">
                                <?php
                                if (count($this->uom) > 0) {
                                    foreach ($this->uom as $uomlist) {
                                        if ($uomlist->id == $purchaseinvoiceline->uomId) {
                                            ?>
                                            <input type="text"  value="<?php echo $uomlist->abbreviation ?>" readonly />
                                            <?php
                                        }
                                    }
                                }
                                ?>
                            </td>
                            <td><input type="text" name="unitPrice[]" value="<?php echo Controller::getFloat($purchaseinvoiceline->unitPrice) ?>" class="amounttextalign isNumeric" readonly /></td>
                            <td><input type="text" value="<?php echo Controller::getFloat($purchaseinvoiceline->receivedQty * $purchaseinvoiceline->unitPrice) ?>" name="rate[]" class="rate amounttextalign isNumeric" readonly /></td>
                            <td style="background-color: #fff;"><input type="text" value="<?php echo $purchaseinvoiceline->discountLine ?>" name="discountLine[]" style="width: 75%;" class="discountline amounttextalign" readonly />%</td> 
                            <td><input type="text" name="netAmount[]" value="<?php echo Controller::getFloat($purchaseinvoiceline->netAmount) ?>"  class="tasknet linetext netAmountLine amounttextalign isNumeric" readonly /></td>
                        </tr>
                    <?php } ?>
                </table>
            <?php } else { ?>
                <table class="tablesalesnew">
                    <thead>
                        <tr>
                            <th width="12%">Item No.</th>
                            <th width="15%">Item Description</th>
                            <th width="10%">Vat Type</th>
                            <th width="6%" style="text-align:center">Purchased Qty</th>
                            <th width="6%" style="text-align:center">Received Qty</th>
                            <th width="8%">Warehouse</th>
                            <th width="8%" style="text-align:center">UOM</th>
                            <th width="10%">Unit Price</th>
                            <th width="8%">Amount</th>
                            <th width="6%">Discount</th>
                            <th width="10%">Net Amount</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            <?php } ?>
        </div>

        <div class="totalbelow">
            <table class="totaltableBelow">
                <tr>	
                    <th width="40%"></th>
                    <th width="60%"></th>
                </tr>
                <tr>
                    <td>Subtotal</td>
                    <td><input type="text" name="subTotalAmount" value="<?php echo Controller::getFloat($purchaseInvoiceAmount->subTotalAmount) ?>" id="subtotal" class="totalclass numeric" style="padding-right: 10px;" readonly></td>
                </tr>
                <tr>
                    <td>Discount</td>
                    <td><input type="text" name="discountAmount" value="<?php echo Controller::getFloat($purchaseInvoiceAmount->discountAmount) ?>" id="discount" class="totalclass numeric" style="padding-right: 10px;" readonly></td>
                </tr>
                <tr>
                    <td>Net Amount</td>
                    <td><input type="text" name="netAmountTotal" value="<?php echo Controller::getFloat($purchaseInvoiceAmount->subTotalAmount - $purchaseInvoiceAmount->discountAmount) ?>" class="netamounttotal totalclass numeric" style="padding-right: 10px;" readonly></td>
                </tr>
                <tr>
                    <td>VAT</td>
                    <td style="padding-bottom:3px;"><input type="text" name="vatAmount" value="<?php echo Controller::getFloat($purchaseInvoiceAmount->vatAmount) ?>" id="vat" class="totalclass numeric" style="padding-right: 10px;" readonly></td>
                </tr>
                <tr class="totalsalesorder">
                    <td style="font-weight:bold;color:#fff;">Total Amount</td>
                    <td><input type="text" name="grandTotal" value="<?php echo Controller::getFloat($purchaseInvoiceAmount->grandTotal) ?>" class="totalclass numeric" style="padding-right: 10px;font-weight:bold;color:#fff;background:none;border:none;" readonly></td>
                </tr>
            </table>
        </div>
        <div style="clear:both;"></div>
        <div class="buttonsInvoices">
            <?php if ($purchaseinvoice->status == "open" && ($useraccess->Add == 'yes' || $useraccess->Edit == 'yes')) { //echo $salesorder->status; ?>

                <input class="bn3 addsavebuttonbody saveSales" type="submit" name="save" value="SAVE" id="save">
                <input class="bn bPost addsavebuttonbody" type="button" name="post" value="POST">
            <?php } elseif ($purchaseinvoice->status == "posted") {
                ?>
                <input type="button" name="reverse" value="REVERSE" class="bn3b addsavebuttonbody" id="reverseNewInvoice" style="cursor:pointer;">
                <?php
            }
            ?>	
            <input type="hidden" name="task" value="<?php echo $taskstat ?>"/>
            <input type="hidden" name="status" value=""/>
            <input type="hidden" name="id" value="<?php echo $purchaseinvoice->id ?>"/>
        </div>
    </form>
</div>

<div class="popBack hidden">

</div>

<script>
    invoiceprintview = $('input[name="id"]').val();

<?php if (Session::getSession('status') == 'posted'): ?>
    <?php Session::setSession('status', false); ?>
        printPreview(invoiceprintview);
        $('input[type="text"], select, input[type="number"], input[type="date"], textarea, input[type="radio"],input[type="checkbox"').prop('disabled', true);
<?php endif; ?>

    if ('<?= $purchaseinvoice->status ?>' == 'posted' || '<?= $purchaseinvoice->status ?>' == 'reversed') {
        $('input[type="text"], select, input[type="number"], input[type="date"], textarea, input[type="radio"],input[type="checkbox"').prop('disabled', true);
    }

    $('#reverseNewInvoice').click(function () {

        let token = $('input[name="token"]').val();

        // alert('dfsdf');
        if (confirm('Are you sure you want to reverse the Purchase Order?')) {
            $('body').css('overflow', 'hidden');
            $('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
            $('.popBack').removeClass('hidden');
            $.post(URL + 'purchaseinvoice/updatePurchaseInvoice', {'id': '<?= $purchaseinvoice->id ?>', 'status': 'reverse', 'token': token })
                    .done(function (returnData) {
                        returnData = returnData.trim();
                        if (returnData == '') {
                            $('#reverseNewInvoice').attr('disable', 'disable');
                            window.location.href = URL + 'purchase/purchaseInvoice';
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


</script>