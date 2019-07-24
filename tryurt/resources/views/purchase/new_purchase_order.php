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
        width:248px;
        height:27px;
        padding:5px;
        font-size:12px;
        font-family:verdana;
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
        font-size:12px;
        font-family:verdana;
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
        margin-top: 10px;
        cursor: pointer;
        height: 25px;
        width: 80px;
        border: none;
        outline-style: none;
    }
    .search-box{
        margin-left: 13px;
        margin-top: 15px;
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
        font-family:verdana;
        font-size:12px;
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
    .company-form{
        width:47% !important;
        padding-top:15px !important;

    }
    .tobehidden{
        display:none;
    }
    /* for company setup */
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
</style>
<title>
    NEW PURCHASE ORDER
</title>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/loading.css"/>
<?php
$invoicestat = 'x';
$invoicestat2 = '';
$taskstat = 'addPurchaseOrder';
$info = $this->info;
$tax = $this->tax;

$purchaseorder = $this->purchaseorder;
$purchaseorderlines = $this->purchaseorderlines;

if ($purchaseorder->status == 'open' && $purchaseorder->id != '') {
    $taskstat = 'updatepurchaseorder';
} elseif ($purchaseorder->status == 'pending') {
    $taskstat = 'pendingpurchaseorder';
} elseif ($purchaseorder->status == 'posted') {
    $taskstat = 'reversepurchaseorder';
} elseif ($purchaseorder->status == 'reversed') {
    $taskstat = 'reversedpurchaseorder';
}

$purchaseOrderId = $purchaseorder->id;
$purchaseOrderAmount = new TblPurchaseOrderAmount();
if ($purchaseOrderId != '') {
    $purchaseOrderAmount = $this->purchaseOrderAmount;
}
?>

<script>
    comp_tin = "<?php echo $this->tin ?>";
    type = "purchase";
</script>

<div class="scriptHolder"></div>

<div class="mainbodyInvoice">
    <div id="new2s" style="margin-left:10px !important; padding-top:15px;">
        <label class="headTextNewInvoice headings">
		 <?php
            if ($taskstat == 'updatepurchaseorder') {
                echo 'UPDATE';
            } elseif ($taskstat == 'reversedpurchaseorder') {
                echo 'REVERSED';
            } elseif ($taskstat == 'reversepurchaseorder') {
                echo 'POSTED';
            } else {
                echo 'CREATE NEW';
            }
            ?> PURCHASE ORDER</label>
    </div>
    <form method="post" action="" class="form-Sales">	
        <div class="headertables">
            <table style="float:left;" class="table1header">
                <tr>
                    <td>Vendor Name:</td>
                    <td>
                        <input type="hidden" name="token" value="<?=$this->token;?>">
                        <select name="supplierId" class="selectname vendor101" id="supplierId">
                            <option></option>
                            <option value="addsupplier" class="addVendorOption">[Add Vendor]</option>
                            <?php
                            $vendor = TblSupplierMySqlExtDAO::getSupplierOrderList(Session::getSession('orgid'));

                            foreach ($vendor as $item) {
                                if ($item->activeAccount == 'yes') {
                                    ?>
                                    <option currency="<?= $item->currencyId ?>" value="<?php echo $item->id ?>" tin="<?= ucwords($item->tin) ?>" address="<?= $item->address ?>"
                                    <?= $item->id == $purchaseorder->supplierId ? 'selected="selected"' : ''; ?> 
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
                    <td><div class="divAdd">Address:</div></td>
                    <td>
                        <textarea name="address" class="addresssales" id="address"><?php echo ($purchaseorder->supplierId != '') ? DAOFactory::getTblSupplierDAO()->load($purchaseorder->supplierId)->address : '' ?>
					
                        </textarea>
                    </td>
                </tr>
            </table>
            <table style="float:right;" class="table2header">
                <tr>
                    <td>PO No.:</td>
                    <td><input type="text" name="purchaseOrderNo" value="<?php echo $purchaseorder->purchaseOrderNo ?>" required /></td>
                </tr>
                <tr>
                    <td>Date Issued:</td>
                    <td><input type="text" name="dateIssued" value="<?php echo date('m/d/Y', strtotime($purchaseorder->dateIssued)) ?>" required /></td>
                </tr>
                <tr>
                    <td>Date Created:</td>
                    <td><input type="text" name="dateCreate" value="<?php echo date('m/d/Y', strtotime($purchaseorder->dateCreated)) ?>"></td>
                </tr>
                <tr>
                    <td>Ref. No.:</td>
                    <td><input type="text" name="refNo" value="<?php echo $purchaseorder->refNo ?>" /></td>
                </tr>
                <tr>
                    <td>Discount:</td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <!--  
                         <input type="text" style="width:98px;" class="dsc isNumeric  discountsenior <?php echo $purchaseorder->discount != 0 ? 'hidden' : '' ?>" name="discountPesoAmount"> 
                         <input type="text" style="width:98px;" class="dsc nodecimal discountsenior hidden <?php echo $purchaseorder->discount != 0 ? 'hidden' : '' ?>" name="discount"> -->

                        <input type="radio" id="percent" name="discounttype" value="percent" <?php echo $purchaseorder->discount != 0 ? 'checked' : '' ?>> In percent 
                        <input type="radio" id="amount" name="discounttype" value="amount" <?php echo $purchaseorder->discount == 0 ? 'checked' : '' ?>> In Amount 
                        <input type="text" style="width:98px;" class="dsc isNumeric  discountsenior <?php echo $purchaseorder->discount != 0 ? 'hidden' : '' ?>  <?php //echo $invoicestat    ?>" name="discountPesoAmount" value="<?php echo ($purchaseOrderAmount->discountPesoAmount != '') ? $purchaseOrderAmount->discountPesoAmount : '0.00' ?>"> 
                        <input type="text" style="width:98px;" class="dsc nodecimal discountsenior <?php echo $purchaseorder->discount == 0 ? 'hidden' : '' ?> <?php //echo $invoicestat    ?>" name="discount" value="<?php echo ($purchaseorder->discount != '') ? $purchaseorder->discount : '0' ?>" >
                    </td>
                </tr>

            </table>
        </div>
        <div style="clear:both;"></div>
        <div>
            <?php if ($info->typeOfTax == 'vat') { ?>

                <div class="ivat">Inclusive of VAT <input type="checkbox"  class="" name="inclusiveOfVat" style="-webkit-transform: scale(1.4);margin-top:11px;margin-left:5px;height: 10px;"
                                                          <?= $purchaseorder->inclusiveOfVat == '' ? ' checked ' : $purchaseorder->inclusiveOfVat == 'yes' ? ' checked ' : "" ?> ></div>

            <?php } ?>
        </div>

        <div>
            <?php
            if (count($purchaseorderlines) > 0) {
                ?>
                <table class="tablesalesnew">
                    <tr>
                        <?php if (in_array($taskstat, array('addPurchaseOrder', 'updatepurchaseorder'))) { ?>
                            <th width="2%"></th>
                        <?php } ?>
                        <th width="12%">Item No.</th>
                        <th width="15%">Item Description</th>
                        <th width="10%">Vat Type</th>
                        <!--<th width="10%">Location</th>-->
                        <th width="6%" style="text-align:center">Qty</th>
                        <th width="8%">UOM</th>
                        <th width="10%" style="text-align:right">Unit Price</th>
                        <th width="10%" style="text-align:right;">Amount</th>
                        <th width="5%">Discount</th>
                        <th width="10%">Net Amount</th>
                        <?php if (in_array($taskstat, array('addPurchaseOrder', 'updatepurchaseorder'))) { ?>
                            <th width="2%"></th>
                        <?php } ?>
                    </tr>

                    <?php
                    foreach ($purchaseorderlines as $i => $purchaseorderline) {
                        ?>

                        <tr>
                            <?php if (in_array($taskstat, array('addPurchaseOrder', 'updatepurchaseorder'))) { ?>
                                <td><div class="del"><input type="button" name="delete" class="del deltask"></div></td>
                            <?php } ?>
                            <td>
                                <select name="itemId[]" class="itemid">
                                    <?php
                                    $items = TblItemMySqlExtDAO::getItemList(Session::getSession('orgid'));
                                    foreach ($items as $item) {
                                        ?>
                                        <option value="<?php echo $item->id ?>" description = "<?php echo $item->description ?>" uom="<?php echo $item->uomId ?>" uprice="<?php echo $item->purchaseCost ?>" <?php echo $purchaseorderline->itemId == $item->id ? 'selected' : '' ?>><?php echo $item->itemCode ?> - <?php echo $item->description ?></option>
                                    <?php } ?>

                                    <option value="addItem">Add Item</option>
                                </select>
                                <input type="hidden" name="purchaseordertaskid[]" value="<?php echo $purchaseorderline->id ?>" />
                            </td>
                            <td><input type="text" name="itemDescription[]" value="<?php echo ($purchaseorderline->itemDescription) ?>"></td>
                            <td> 
                                <select name="vatId[]" class="vatcontainer">
                                    <?php
                                    if (count($tax) > 0) {
                                        ?>
                                        <?php
                                        foreach ($tax as $itemvat) {
                                            ?>
                                            <option value="<?php echo $itemvat->id ?>" <?php echo ($purchaseorderline->vatId == $itemvat->id) ? 'selected' : '' ?>>
                                                <?php echo $itemvat->description ?></option>
                                        <?php } ?>
                                    <?php } ?>
                                </select>
                            </td>
                    <!--	<td>
                                    <select name="warehouseId[]" class="warehouseId">
                            <?php
                            // $warehouse = TblWarehouseMySqlExtDAO::getWarehouseList(Session::getSession('orgid'));
                            // foreach ($warehouse as $whouse) {
                            ?>
                                                            <option value="<?php //echo $whouse->id    ?>"><?php // echo $whouse->warehouseCode    ?></option>
                            <?php //} ?>
                                            <option>Add Location</option>
                                    </select>
                            </td>-->
                            <td><input type="text" value="<?php echo $purchaseorderline->qty ?>" style="text-align:center" class="qty" name="qty[]"></td>
                            <td>
                                <select name="uomId[]" class="uom">
                                    <?php
                                    if (count($this->uom) > 0) {
                                        foreach ($this->uom as $uomlist) {
                                            ?>
                                            <option  value="<?php echo $uomlist->id ?>" <?php echo $uomlist->id == $purchaseorderline->uomId ? 'selected' : '' ?>><?php echo $uomlist->abbreviation ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </td>
                            <td><input type="text" name="unitPrice[]" value="<?php echo Controller::getFloat($purchaseorderline->unitPrice) ?>" class="unitPrice amounttextalign isNumeric "></td>
                            <td><input type="text" value="<?php echo Controller::getFloat($purchaseorderline->qty * $purchaseorderline->unitPrice) ?>" name="rate[]" class="rate amounttextalign isNumeric"></td>
                            <td style="background-color: #fff;"><input type="text" value="<?php echo $purchaseorderline->discountLine ?>" name="discountLine[]" style="width: 75%;" class="discountline amounttextalign">%</td>
                            <td><input type="text" value="<?php echo Controller::getFloat($purchaseorderline->netAmount) ?>" class="tasknet linetext RateTH isNumeric netAmountLine amounttextalign" name="netAmount[]" readonly></td>
                            <?php if (in_array($taskstat, array('addPurchaseOrder', 'updatepurchaseorder'))) { ?>
                                <td>
                                    <div class="adel">
                                        <input type="button" name="add"  class="a addtask addtaskslines" id="addtask">
                                    </div>
                                </td>
                            <?php } ?>
                        </tr>
                    <?php }
                    ?>
                </table>
                <?php
            } else {
                ?>
                <table class="tablesalesnew">
                    <tr>
                        <th width="2%"></th>
                        <th width="12%">Item No.</th>
                        <th width="15%">Item Description</th>
                        <th width="10%">Vat Type</th>
                        <!--<th width="10%">Location</th>-->
                        <th width="6%" style="text-align:center">Qty</th>
                        <th width="8%">UOM</th>
                        <th width="10%" style="text-align:right">Unit Price</th>
                        <th width="10%">Amount</th>
                        <th width="5%">Discount</th>
                        <th width="10%">Net Amount</th>
                        <th width="2%"></th>
                    </tr>
                    <tr>
                        <td><div class="del"><input type="button" name="delete" class="del deltask"></div></td>
                        <td>
                            <select name="itemId[]" class="itemid">
                                <option value=""></option>
                                <option value="addItem">[Add Item]</option>
                                <?php
                                $items = TblItemMySqlExtDAO::getItemList(Session::getSession('orgid'));
                                foreach ($items as $item) {
                                    ?>
                                    <option value="<?php echo $item->id ?>" description = "<?php echo $item->description ?>" uom="<?php echo $item->uomId ?>" uprice="<?php echo $item->purchaseCost ?>"><?php echo $item->itemCode ?> - <?php echo $item->description ?></option>
                                <?php } ?>
                            </select>
                        </td>
                        <td><input type="text" name="itemDescription[]" value=""></td>
                        <td> 
                            <select name="vatId[]" class="vatcontainer" id="taxId">
                                <?php
                                if (count($tax) > 0) {
                                    foreach ($tax as $itemvat) {
                                        ?>
                                        <option rate="<?= $itemvat->rate ?>" value="<?php echo $itemvat->id ?>"><?php echo $itemvat->description ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </td>
                <!--	<td>
                                <select name="warehouseId[]" class="warehouseId">
                                                <option value=""></option>
                        <?php
                        // $warehouse = TblWarehouseMySqlExtDAO::getWarehouseList(Session::getSession('orgid'));
                        //print_r($warehouse);
                        // foreach ($warehouse as $whouse) {
                        ?>
                                                                <option value="<?php //echo $whouse->id   ?>"><?php //echo $whouse->warehouseCode   ?></option>
                        <?php //}  ?>
                                                        <option value="addLocation">Add Location</option>
                                                </select>
                        </td>-->
                        <td><input type="text" name="qty[]" class="qty" value="1" style="text-align:center"></td>
                        <td>
                            <select name="uomId[]" class="uom">
                                <option></option>
                                <?php
                                if (count($this->uom) > 0) {
                                    foreach ($this->uom as $uomlist) {
                                        ?>
                                        <option  value="<?php echo $uomlist->id ?>"><?php echo $uomlist->abbreviation ?></option>
                                        <?php
                                    }
                                }
                                ?>
                                <option value="addnewUom">Add UOM</option>
                            </select>
                        </td>
                        <td><input type="text" name="unitPrice[]" value="" class="unitPrice amounttextalign isNumeric"></td>
                        <td><input type="text" name="rate[]" value="" class="rate amounttextalign isNumeric" readonly></td>
                        <td style="background-color: #fff;"><input type="text" name="discountLine[]" value="" style="width: 75%;" class="discountline amounttextalign">%</td>
                        <td><input type="text" name="netAmount[]" value="" class="tasknet amounttextalign isNumeric netAmountLine" readonly></td>
                        <td>
                            <div class="adel">
                                <input type="button" name="add"  class="a addtask addtaskslines" id="addtask">
                            </div>
                        </td>
                    </tr>
                </table>
            <?php } ?>
        </div>
        <?php if (in_array($taskstat, array('addPurchaseOrder', 'updatepurchaseorder'))) { ?>
            <div class="search-box">
                <div class="size-container" style="display: none"></div>
                <input type="button" id="addtask" class="addNewTaskButton addsavebuttonbody" value="ADD LINE"/>     
            </div>
        <?php } ?>

        <div class="totalbelow">
            <table class="totaltableBelow">
                <tr>	
                    <th width="40%"></th>
                    <th width="60%"></th>
                </tr>
                <tr>
                    <td>Subtotal</td>
                    <td><input type="text" name="subTotalAmount" value="<?php echo Controller::getFloat($purchaseOrderAmount->subTotalAmount) ?>" id="subtotal" class="totalclass numeric" style="padding-right: 10px;" readonly></td>
                </tr>
                <tr>
                    <td>Discount</td>
                    <td><input type="text" name="discountAmount" value="<?php echo Controller::getFloat($purchaseOrderAmount->discountAmount) ?>" id="discount" class="totalclass numeric" style="padding-right: 10px;" readonly></td>
                </tr>
                <tr>
                    <td>Net Amount</td>
                    <td><input type="text" name="netAmountTotal" value="<?php echo Controller::getFloat($purchaseOrderAmount->subTotalAmount - $purchaseOrderAmount->discountAmount) ?>" class="netamounttotal totalclass numeric" style="padding-right: 10px;" readonly></td>
                </tr>
                <tr>
                    <td>VAT</td>
                    <td style="padding-bottom:3px;"><input type="text" name="vatAmount" value="<?php echo Controller::getFloat($purchaseOrderAmount->vatAmount) ?>" id="vat" class="totalclass numeric" style="padding-right: 10px;" readonly></td>
                </tr>
                <tr class="totalsalesorder">
                    <td style="font-weight:bold;color:#fff;">Total Amount</td>
                    <td><input type="text" name="grandTotal" value="<?php echo Controller::getFloat($purchaseOrderAmount->grandTotal) ?>" class="totalclass numeric" style="padding-right: 10px;font-weight:bold;color:#fff;background:none;border:none;" readonly></td>
                </tr>
            </table>
        </div>
        <div style="clear:both;"></div>
        <div class="buttonsInvoices">
            <?php if ($purchaseorder->status == "open" && ($useraccess->Add == 'yes' || $useraccess->Edit == 'yes')) { //echo $salesorder->status; ?>

                <input class="bn3 addsavebuttonbody saveSales" type="submit" name="save" value="SAVE" id="save">
                <input class="bn bPost addsavebuttonbody" type="submit" name="post" value="POST">
            <?php } elseif ($purchaseorder->status == "posted") {
                ?>
                <input type="button" name="reverse" value="REVERSE" class="bn3b addsavebuttonbody" id="reverseNewInvoice" style="cursor:pointer;">
                <?php
            }
            ?>	
            <input type="hidden" name="task" value="<?php echo $taskstat ?>"/>
            <input type="hidden" name="status" value=""/>
            <input type="hidden" name="id" value="<?php echo $purchaseorder->id ?>"/>
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

    if ('<?= $purchaseorder->status ?>' == 'posted' || '<?= $purchaseorder->status ?>' == 'reversed' || '<?= $purchaseorder->status ?>' == 'pending') {
        $('input[type="text"], select, input[type="number"], input[type="date"], textarea, input[type="radio"],input[type="checkbox"').prop('disabled', true);
    }

    $('#reverseNewInvoice').click(function () {

         let token = $('input[name="token"]').val();

        if (confirm('Are you sure you want to reverse the Purchase Order?')) {
            $('body').css('overflow', 'hidden');
            $('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
            $('.popBack').removeClass('hidden');
            $.post(URL + 'purchase/updatePurchaseOrder', {'id': '<?= $purchaseorder->id ?>', 'status': 'reverse', 'token':token})
                    .done(function (returnData) {
                        returnData = returnData.trim();
                        if (returnData == '') {
                            $('#reverseNewInvoice').attr('disable', 'disable');
                            window.location.href = URL + 'purchase';
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
        //alert('dd');
        $.post(URL + 'purchase/purchaseOrderPrev', {'id': id})
                .done(function (returnData) {
                    $('.popBack').html(returnData);
                    $('.popBack').removeClass('hidden');
                    $('body').css('overflow', 'hidden');
                    $(".popBack").css('z-index', '100');

                    $('.closePrint').click(function () {
                        if (confirm('Are you sure you want to leave this page?')) {
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
    }





</script>