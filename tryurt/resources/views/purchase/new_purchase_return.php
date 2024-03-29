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
    .selectname, .purchaseinvoice{
        margin-left:15px;
        width:248px;
        height:27px;
        padding:5px;
        font-family:verdana;
        font-size:12px;
    }
    .addresssales{
        margin-left:15px;
        width:248px;
        height:90px;
        padding:5px;
        max-width:248px;
        max-height:90px;
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
        margin-right:15px;
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
        margin-top:3px;
        font-family:verdana;
        font-size:12px;
    }
    .totalsalesorder{
        background-color: #183867;
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
    .tablesalesnew tr:hover{
        background-color: #c8c8c8;
    }
    .tablesalesnew select{
        width: 100%;
        height: 25px;
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
    .totaltableBelow th{
        background:none;
    }
    .loadingHolder{
        margin-top:15%;
        margin-left:45%;
    }
</style>
<title>
    NEW PURCHASE RETURN
</title>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/loading.css"/>
<?php
$invoicestat = 'x';
$invoicestat2 = '';
$taskstat = 'addPurchaseReturn';
$info = $this->info;
$tax = $this->tax;

$purchasereturn = $this->purchasereturn;
$purchasereturnlines = $this->purchasereturnlines;

if ($purchasereturn->status == 'open' && $purchasereturn->id != '') {
    $taskstat = 'updatepurchasereturn';
} elseif ($purchasereturn->status == 'posted') {
    $taskstat = 'reversepurchasereturn';
} elseif ($purchasereturn->status == 'reversed') {
    $taskstat = 'reversedpurchasereturn';
}

$purchaseReturnId = $purchasereturn->id;
$purchaseReturnAmount = new TblPurchaseReturnAmount();
if ($purchaseReturnId != '') {
    $purchaseReturnAmount = $this->purchaseReturnAmount;
}
?>
<div class="mainbodyInvoice">
    <div id="new2s" style="margin-left:10px !important; padding-top:15px;">
        <label class="headTextNewInvoice headings">
		<?php
			if ($taskstat == 'updatepurchasereturn') {
				echo 'UPDATE';
			} elseif ($taskstat == 'reversedpurchasereturn') {
				echo 'REVERSED';
			} elseif ($taskstat == 'reversepurchasereturn') {
				echo 'POSTED';
			} else {
				echo 'CREATE NEW';
			}
		?> PURCHASE RETURN</label>
    </div>	
    <form method="post" action="" class="form-Sales">	
        <div class="headertables">
            <table style="float:left;" class="table1header">
                <tr>
                    <td>Vendor Name:</td>
                    <td>
                        <input type="hidden" name="token" value="<?=$this->token;?>">
                        <select name="supplierId" id="supplierId" class="selectname">
                            <option></option>
                            <?php
                            $vendor = TblSupplierMySqlExtDAO::getSupplierOrderList(Session::getSession('orgid'));

                            foreach ($vendor as $item) {
                                if ($item->activeAccount == 'yes') {
                                    ?>
                                    <option currency="<?= $item->currencyId ?>" value="<?php echo $item->id ?>" tin="<?= ucwords($item->tin) ?>" address="<?= $item->address ?>"
                                    <?= $item->id == $purchasereturn->supplierId ? 'selected="selected"' : ''; ?> 
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
                    <td>Purchase Invoice:</td>
                    <td><select name="purchaseInvoiceId" class="purchaseinvoice" required>
                            <option value=""></option>
                            <?php
                            if ($purchasereturn->purchaseInvoiceId != '') {
                                $pinvoice = DAOFactory::getTblPurchaseInvoiceDAO()->load($purchasereturn->purchaseInvoiceId);
                                ?>
                                <option value='<?php echo $purchasereturn->purchaseInvoiceId ?>' selected><?php echo $pinvoice->purchaseInvoiceNo ?></option>
                            <?php } ?>
                            <option value="">Show PI</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><div class="divAdd">Address:</div></td>
                    <td>
                        <textarea name="address" class="addresssales"><?php echo ($purchasereturn->supplierId != '') ? DAOFactory::getTblSupplierDAO()->load($purchasereturn->supplierId)->address : '' ?>
					
                        </textarea>
                    </td>
                </tr>
            </table>
            <table style="float:right;" class="table2header">
                <tr>
                    <td>PR No.:</td>
                    <td><input type="text" name="purchaseReturnNo" value="<?php echo $purchasereturn->purchaseReturnNo ?>" required /></td>
                </tr>
                <tr>
                    <td>PR Date:</td>
                    <td><input type="text" name="dateIssued" value="<?php echo date('m/d/Y', strtotime($purchasereturn->dateIssued)) ?>" required /></td>
                </tr>
                <tr>
                    <td>Date Created:</td>
                    <td><input type="text" name="dateCreated" value="<?php echo date('m/d/Y', strtotime($purchasereturn->dateCreated)) ?>" /></td>
                </tr>
                <tr>
                    <td>Ref. No.:</td>
                    <td><input type="text" name="refNo" value="<?php echo $purchasereturn->refNo ?>" /></td>
                </tr>
                <tr>
                    <td>Discount:</td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="radio" id="percent" name="discounttype" value="percent" <?php echo $purchasereturn->discount != 0 ? 'checked' : '' ?> onclick="javascript: return false;" /> In percent 
                        <input type="radio" id="amount" name="discounttype" value="amount" <?php echo $purchasereturn->discount == 0 ? 'checked' : '' ?> onclick="javascript: return false;" /> In Amount  
                        <input type="text" style="width:98px;" class="dsc isNumeric  discountsenior <?php echo $purchasereturn->discount != 0 ? 'hidden' : '' ?>  <?php //echo $invoicestat    ?>" name="discountPesoAmount" value="<?php echo ($purchaseReturnAmount->discountPesoAmount != '') ? $purchaseReturnAmount->discountPesoAmount : '0.00' ?>" readonly /> 
                        <input type="text" style="width:98px;" class="dsc nodecimal discountsenior <?php echo $purchasereturn->discount == 0 ? 'hidden' : '' ?> <?php //echo $invoicestat    ?>" name="discount" value="<?php echo ($purchasereturn->discount != '') ? $purchasereturn->discount : '0' ?>" readonly />

                    </td>
                </tr>

            </table>
        </div>
        <div style="clear:both;"></div>
        <div>
            <?php if ($info->typeOfTax == 'vat') { ?>

                <div class="ivat">Inclusive of VAT <input type="checkbox"  class="" name="inclusiveOfVat" style="-webkit-transform: scale(1.4);margin-top:11px;margin-left:5px;height: 10px;"
                                                          <?= $purchasereturn->inclusiveOfVat == '' ? ' checked ' : $purchasereturn->inclusiveOfVat == 'yes' ? ' checked ' : "" ?> ></div>

            <?php } ?>
        </div>

        <div>
            <?php if ($purchasereturnlines) { ?>
                <table class="tablesalesnew">
                    <thead>
                        <tr>
                            <th width="10%">Item No.</th>
                            <th width="15%">Item Description</th>
                            <th width="10%">Vat Type</th>
                            <th width="6%">Received Qty</th>
                            <th width="6%">Return Qty</th>
                            <th width="8%">Warehouse</th>
                            <th width="10%">UOM</th>
                            <th width="10%">Unit Price</th>
                            <th width="8%">Amount</th>
                            <th width="6%">Discount</th>
                            <th width="10%">Net Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($purchasereturnlines as $purchasereturnline) {
                            $purchaseinvoiceqty = TblPurchaseInvoiceLinesMySqlExtDAO::getPIItemQty($purchasereturn->purchaseInvoiceId, $purchasereturnline->itemId);
                            $purchasereturnqty = TblPurchaseReturnLinesMySqlExtDAO::getPRItemQty($purchasereturn->purchaseInvoiceId, $purchasereturnline->itemId);
                            ?>
                            <tr>
                                <td>
                                    <?php
                                    $items = TblItemMySqlExtDAO::getItemList(Session::getSession('orgid'));
                                    foreach ($items as $item) {
                                        if ($purchasereturnline->itemId == $item->id) {
                                            ?>
                                            <input type="text" value="<?php echo $item->itemCode ?>" readonly />
                                            <?php
                                        }
                                    }
                                    ?>
                                    <input type="hidden" name="itemId[]" value="<?php echo $purchasereturnline->itemId ?>" class="itemid" />
                                    <input type="hidden" name="vatId" value="<?php echo $purchasereturnline->vatId ?>" />
                                    <input type="hidden" name="warehouseId" value="<?php echo $purchasereturnline->warehouseId ?>" />
                                    <input type="hidden" name="uomId"  value="<?php echo $purchasereturnline->uomId ?>" />
                                    <input type="hidden" name="purchaseordertaskid[]" value="<?php echo $purchasereturnline->id ?>" />
                                    <input type="hidden"  value="<?php echo $purchaseinvoiceqty - $purchasereturnqty ?>" class="remain_qty" />
                                    <input type="hidden" name="averageCost[]" value="<?php echo $purchasereturnline->averageCost ?>" />
                                </td>
                                <td><input type="text" name="itemDescription[]" value="<?php echo ($purchasereturnline->itemDescription) ?>" readonly /></td>
                                <td>
                                    <?php
                                    if (count($tax) > 0) {
                                        ?>
                                        <?php
                                        foreach ($tax as $itemvat) {
                                            if ($purchasereturnline->vatId == $itemvat->id) {
                                                ?>
                                                <input type="text" value="<?php echo $itemvat->description ?>" readonly />
                                                <?php
                                            }
                                        }
                                        ?>
                                    <?php } ?>
                                </td>
                                <td><input type="text" value="<?php echo $purchasereturnline->invoiceQty ?>" name="invoiceQty[]" class="purchaseqty" style="text-align:center" readonly /></td>
                                <td><input type="text" value="<?php echo $purchasereturnline->returnQty ?>"  name="returnQty[]" style="text-align:center" class="qty" /></td>
                                <td>
                                    <?php
                                    $warehouse = TblWarehouseMySqlExtDAO::getWarehouseList(Session::getSession('orgid'));
                                    foreach ($warehouse as $whouse) {
                                        if ($whouse->id == $purchasereturnline->warehouseId) {
                                            ?>
                                            <input type="text" value="<?php echo $whouse->warehouseName ?>" readonly />
                                            <?php
                                        }
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (count($this->uom) > 0) {
                                        foreach ($this->uom as $uomlist) {
                                            if ($uomlist->id == $purchasereturnline->uomId) {
                                                ?>
                                                <input type="text"  value="<?php echo $uomlist->abbreviation ?>" readonly />
                                                <?php
                                            }
                                        }
                                    }
                                    ?>
                                </td>
                                <td><input type="text" name="unitPrice[]" value="<?php echo Controller::getFloat($purchasereturnline->unitPrice) ?>" class="amounttextalign isNumeric" readonly /></td>
                                <td><input type="text" value="<?php echo Controller::getFloat($purchasereturnline->returnQty * $purchasereturnline->unitPrice) ?>" name="rate[]" class="rate amounttextalign isNumeric" readonly /></td>
                                <td style="background-color: #fff;"><input type="text" value="<?php echo $purchasereturnline->discountLine ?>" name="discountLine[]" style="width: 75%;" class="discountline amounttextalign" readonly />%</td> 
                                <td><input type="text" name="netAmount[]" value="<?php echo Controller::getFloat($purchasereturnline->netAmount) ?>"  class="tasknet linetext netAmountLine amounttextalign isNumeric" readonly /></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            <?php } else { ?>
                <table class="tablesalesnew">
                    <thead>
                        <tr>
                            <th width="10%">Item No.</th>
                            <th width="15%">Item Description</th>
                            <th width="10%">Vat Type</th>
                            <th width="6%" style="text-align:center">Received Qty</th>
                            <th width="6%" style="text-align:center">Return Qty</th>
                            <th width="8%">Warehouse</th>
                            <th width="10%" style="text-align:center">UOM</th>
                            <th width="10%" style="text-align:right">Unit Price</th>
                            <th width="8%" style="text-align:right">Amount</th>
                            <th width="6%" style="text-align:right">Discount</th>
                            <th width="10%" style="text-align:right">Net Amount</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            <?php } ?>
        </div>
        
        <div style="float:left;margin-top:37px;">
            <label style="font-family:Verdana;font-size:12px;margin-left:10px;">GL Posting:</label>
                <select class="item-text2NewItem item-textNewItem" name="glPosting" id="glPosting2" required style="width: 248px;height:27px;font-family:verdana;font-size:12px;">
                    <?php
                        $coas = DAOFactory::getTblCoaDAO()->queryByOrgId(Session::getSession('orgid'));
                        $coas2 = TblCoaMySqlExtDAO::getCoaByCoaNum(Session::getSession('orgid'), '%1000-003-%');
                        //$coaArray = array('1000-002', '1000-003');
                        $coaArray = array('1000-002', '2000-001-001');
                        if ($coas2) {
                            $coaArray = array('1000-002');
                        }

                        foreach ($coas as $coa) {
                            if (in_array($coa->accountNum, $coaArray)) {
                                ?>
                                <option value="<?php echo $coa->id ?>" <?php echo ($coa->id == $purchasereturn->glPosting) ? 'selected' : '' ?>><?php echo $coa->accountNum ?> - <?php echo $coa->accontName ?></option>

                                <?php
                            }
                        }
                        if ($coas2) {
                            foreach ($coas2 as $coa) {
                                if($coa->activeAccount == 'yes'){
                        ?>
                                    <option value="<?php echo $coa->id ?>" <?php echo ($coa->id == $purchasereturn->glPosting) ? 'selected' : '' ?>><?php echo $coa->accountNum ?> - <?php echo $coa->accontName ?></option>
                        <?php
                                }
                            }
                        }
                    ?>
                    <option value="addBank">[Add Bank]</option>
                </select>
        </div>

        <div class="totalbelow">
            <table class="totaltableBelow">
                <tr>	
                    <th width="40%"></th>
                    <th width="60%"></th>
                </tr>
                <tr>
                    <td>Subtotal</td>
                    <td><input type="text" name="subTotalAmount" value="<?php echo Controller::getFloat($purchaseReturnAmount->subTotalAmount) ?>" id="subtotal" class="totalclass numeric" style="padding-right: 10px;" readonly></td>
                </tr>
                <tr>
                    <td>Discount</td>
                    <td><input type="text" name="discountAmount" value="<?php echo Controller::getFloat($purchaseReturnAmount->discountAmount) ?>" id="discount" class="totalclass numeric" style="padding-right: 10px;" readonly></td>
                </tr>
                <tr>
                    <td>Net Amount</td>
                    <td><input type="text" name="netAmountTotal" value="<?php echo Controller::getFloat($purchaseReturnAmount->subTotalAmount - $purchaseReturnAmount->discountAmount) ?>" class="netamounttotal totalclass numeric" style="padding-right: 10px;" readonly></td>
                </tr>
                <tr>
                    <td>VAT</td>
                    <td style="padding-bottom:3px;"><input type="text" name="vatAmount" value="<?php echo Controller::getFloat($purchaseReturnAmount->vatAmount) ?>" id="vat" class="totalclass numeric" style="padding-right: 10px;" readonly></td>
                </tr>
                <tr class="totalsalesorder">
                    <td style="font-weight:bold;color:#fff;">Total Amount</td>
                    <td><input type="text" name="grandTotal" value="<?php echo Controller::getFloat($purchaseReturnAmount->grandTotal) ?>" class="totalclass numeric" style="padding-right: 10px;font-weight:bold;color:#fff;background:none;border:none;" readonly></td>
                </tr>
            </table>
        </div>
        <div style="clear:both;"></div>
        <div class="buttonsInvoices">
            <?php if ($purchasereturn->status == "open" && ($useraccess->Add == 'yes' || $useraccess->Edit == 'yes')) { //echo $salesorder->status; ?>

                <input class="bn3 addsavebuttonbody saveSales" type="submit" name="save" value="SAVE" id="save">
                <input class="bn bPost addsavebuttonbody" type="button" name="post" value="POST">
            <?php } elseif ($purchasereturn->status == "posted") {
                ?>
                <input type="button" name="reverse" value="REVERSE" class="bn3b addsavebuttonbody" id="reverseNewInvoice" style="cursor:pointer;">
                <?php
            }
            ?>	
            <input type="hidden" name="task" value="<?php echo $taskstat ?>"/>
            <input type="hidden" name="status" value=""/>
            <input type="hidden" name="id" value="<?php echo $purchasereturn->id ?>"/>
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

    if ('<?= $purchasereturn->status ?>' == 'posted' || '<?= $purchasereturn->status ?>' == 'reversed') {
        $('input[type="text"], select, input[type="number"], input[type="date"], textarea, input[type="radio"],input[type="checkbox"').prop('disabled', true);
    }

    $('#reverseNewInvoice').click(function () {

        let token = $('input[name="token"]').val();

        // alert('dfsdf');
        if (confirm('Are you sure you want to reverse the Purchase Order?')) {
            $('body').css('overflow', 'hidden');
            $('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
            $('.popBack').removeClass('hidden');
            $.post(URL + 'purchasereturn/updatePurchaseReturn', {'id': '<?= $purchasereturn->id ?>', 'status': 'reverse', 'token':token})
                    .done(function (returnData) {
                        returnData = returnData.trim();
                        if (returnData == '') {
                            $('#reverseNewInvoice').attr('disable', 'disable');
                            window.location.href = URL + 'purchase/purchaseReturn';
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