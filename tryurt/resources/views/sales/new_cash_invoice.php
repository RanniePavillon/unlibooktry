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
        border: solid 1px #c8c8c8;
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
        margin-top: 10px;
        cursor: pointer;
        height: 25px;
        width: 80px;
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
    .cmClass{
        margin-left: 25px;
        margin-top: 15px;
        height: 28px;
        width: 97px;
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
        width: 248px;
        height: 27px;
        font-size: 12px;
        font-family: Verdana;
        margin-left:20px;
    }
    #company-newcompany2{
        padding-top:15px !important;
    }
    .loadingHolder{
        margin-top:15%;
        margin-left:45%;
    }
    .tablesalesnew th{
        border:none;
    }
    .totaltableBelow th{
        border:none;
    }
</style>
<title>
    ALL Cash Invoice
</title>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/loading.css"/>

<?php
$invoicestat = 'x';
$invoicestat2 = '';
$cashinvoice = $this->cashinvoice;
$taskstat = 'addCashInvoice';
$info = $this->info;
$tax = $this->tax;
$uom = $this->uom;

$cashinvoiceId = Session::getSession('cashinvoiceid');


if ($cashinvoice->status == 'open' && $cashinvoice->id != '') {
    $taskstat = 'updatecashinvoice';
} elseif ($cashinvoice->status == 'posted') {
    $taskstat = 'reversecashinvoice';
} elseif ($cashinvoice->status == 'reversed') {
    $taskstat = 'reversedcashinvoice';
}
//echo $taskstat;

?>

<?php
$cashinvoiceId = $cashinvoice->id;
$cashInvoiceAmount = new TblCashInvoiceAmount();
if ($cashinvoiceId != '') {
    $cashInvoiceAmount = $this->cashInvoiceAmount;
}
$subTotal = $cashInvoiceAmount->subTotalAmount == '' ? 0 : $cashInvoiceAmount->subTotalAmount;
?>
<script>
    newrecord = "new";
    tin = "<?php echo $this->tin ?>";
</script>

<div class="jsHolder"></div>
<div class="mainbodyInvoice">
    <div id="new2s" style="margin-left:10px !important; padding-top:15px;">
        <label class="headTextNewInvoice headings">
            <?php
            if ($taskstat == 'updatecashinvoice') {
                echo 'UPDATE';
            } elseif ($taskstat == 'reversedcashinvoice') {
                echo 'REVERSED';
            } elseif ($taskstat == 'reversecashinvoice') {
                echo 'POSTED';
            } else {
                echo 'NEW';
            }
            ?> CASH INVOICE</label>
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
                            <option value="addclient">[Add Customer]</option>
                            <?php
                            $customer = TblClientMySqlExtDAO::queryByOrgIdOrderBy(Session::getSession('orgid'));
                            if (count($customer) > 0) {
                                foreach ($customer as $item) {
                                    if ($item->active == 'yes' || $item->id == $cashinvoice->clientId) {
                                        ?>
                                        <option value='<?php echo $item->id ?>' <?php echo ($item->id == $cashinvoice->clientId) ? 'selected' : '' ?> currencyId="<?= $item->currencyId ?>" type="<?php echo $item->type ?>" >
                                            <?php echo /* $item->clientAccount . ' - ' . */ $item->clientName ?>
                                        </option>
                                        <?php
                                    }
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><div class="divAdd">Address:</div></td>
                    <td>
                        <textarea class="add" id='address' name='address' readonly <?php echo $invoicestat ?> ><?php echo ($cashinvoice->clientId != '') ? DAOFactory::getTblClientDAO()->load($cashinvoice->clientId)->address : '' ?></textarea>
                    </td>
                </tr>

<!--                <tr>
                    <td class="">Currency:</td>
                    <td>
                        <select class="terms" name="currencyId">
                            <?php
//                            $currency = DAOFactory::getTblCurrencyDAO()->queryAll();
//
//                            foreach ($currency as $crrncy) {
                                ?>
                                <option style="text-align: right;" value="<?php echo $crrncy->id ?>" title="<?= $crrncy->description ?>"
                                <?php
//                                if ($cashinvoice->currencyId != "") {
//                                    if ($crrncy->id == $cashinvoice->currencyId) {
//                                        echo "selected";
//                                    }
//                                } elseif ($crrncy->code == 'PHP') {
//                                    echo ' selected ';
//                                }
                                ?>><?php // echo $crrncy->code ?></option>
                                    <?php //  } ?>
                        </select>
                    </td>
                </tr>-->

<!--                <tr>
                    <td id="ratetxt" class="termsCurrency <?php // echo ($cashinvoice->currencyId == 33 || $cashinvoice->currencyId == '') ? 'hidden' : '' ?>">Currency Exchange Rate:</td>
                    <td>
                        <input type="text" style="width:200px;height:27px;font-weight:normal!important;border: 1px solid #C8C8C8; text-align: right;"
                               name="crate"  id="ratetxt" class="termsCurrency isNumeric <?php // echo ($cashinvoice->currencyId == 33 || $invoice->currencyId == '') ? 'hidden' : '' ?>"
                               value="<?php // echo isset($cashinvoice) && $cashinvoice->currencyRate != '' ? Controller::getFloat($cashinvoice->currencyRate) : '' ?>">
                    </td>
                </tr>-->
                <tr>
                    <td style="padding-top:3px;"></td>
                    <td style="padding-top:3px;"></td>
                </tr>
<!--                <tr>
                    <td id="ratetxt" class="termsCurrency applyCER <?php // echo ($cashinvoice->currencyId == 33 || $cashinvoice->currencyId == '') ? 'hidden' : '' ?>">Apply Currency Exchange Rate:</td>
                    <td>
                        <select name="acer" id="ratetxt" class="acer <?php // echo ($cashinvoice->currencyId == 33 || $cashinvoice->currencyId == '') ? 'hidden' : '' ?>">
                            <option value="monthly" <?php //  echo $cashinvoice->currencyType == 'monthly' ? 'selected' : '' ?> >Monthly</option>
                            <option value="quarterly" <?php // $cashinvoice->currencyType == 'quarterly' ? 'selected' : '' ?> >Quarterly</option>
                            <option value="yearly" <?php // $cashinvoice->currencyType == 'yearly' ? 'selected' : '' ?> >Yearly</option>
                            <option value="Daily" <?php // $cashinvoice->currencyType == 'Daily' ? 'selected' : '' ?> >Daily</option>
                        </select>
                    </td>
                </tr>-->
            </table>

            <?php
            $cashinvoicelines = $this->cashInvoiceTaskLines;
            ?>
            <table style="float:right;" class="table2header">
                <tr>
                    <td>Cash Invoice No.:</td>
                    <td><input type="text" name="cashSalesInvoiceNo" value="<?php echo $cashinvoice->cashSalesInvoiceNo ?>" required /></td>
                </tr>
                <tr>
                    <td>OR No.:</td>
                    <td><input type="text" name="orNum" value="<?php echo $cashinvoice->casNo !='' ? $cashinvoice->casNo :$cashinvoice->orNum ?>" required /></td>
                </tr>
                <tr>
                    <td>Date Issued:</td>
                    <td><input type="text" class="di" id="di" name="dateIssued" value="<?php echo date('m/d/Y', strtotime($cashinvoice->dateIssued)) ?>" required /></td>
                </tr>
                <tr>
                    <td>Date Created:</td>
                    <td><input type="text" class="di" name="dateCreated" value="<?php echo date('m/d/Y', strtotime($cashinvoice->dateIssued)); ?>" style="background:#c8c8c8;border:none;" disabled></td>
                </tr>
                <tr>
                    <td>Ref. No.:</td>
                    <td><input type="text" name="refNo" value = "<?php echo $cashinvoice->refNo ?>" /></td>
                </tr>
                <tr>
                    <td>Discount:</td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="radio" id="percent" name="discounttype" value="percent" <?php echo $cashinvoice->discount != 0 ? 'checked' : '' ?>> In percent 
                        <input type="radio" id="amount" name="discounttype" value="amount" <?php echo $cashinvoice->discount == 0 ? 'checked' : '' ?>> In Amount 
                        <input type="text" style="width:98px;" style="text-align:right;" class="dsc isNumeric  discountsenior <?php echo $cashinvoice->discount != 0 ? 'hidden' : '' ?>  <?php //echo $invoicestat      ?>" name="discountPesoAmount" value="<?php echo ($cashInvoiceAmount->discountPesoAmount != '') ? $cashInvoiceAmount->discountPesoAmount : '0.00' ?>"> 
                        <input type="text" style="width:98px;" style="text-align:right;" class="dsc nodecimal discountsenior <?php echo $cashinvoice->discount == 0 ? 'hidden' : '' ?> <?php //echo $invoicestat      ?>" name="discount" value="<?php echo ($cashinvoice->discount != '') ? $cashinvoice->discount : '0' ?>" >

                    </td>
                </tr>

            </table>
        </div>
        <div style="clear:both;"></div>
        <div>
            <?php if ($info->typeOfTax == 'vat') { ?>

                <div class="ivat">Inclusive of VAT <input type="checkbox"  class="" name="inclusiveOfVat" style="-webkit-transform: scale(1.4);margin-top:11px;margin-left:5px;height: 10px;"
                                                          <?= $cashinvoice->inclusiveOfVat == '' ? ' checked ' : $cashinvoice->inclusiveOfVat == 'yes' ? ' checked ' : "" ?> ></div>

            <?php } ?>

        </div>
        <input type="button" class="cm addsavebuttonbody cmClass" value="APPLY CM">
        <div>
            <?php
            if (count($cashinvoicelines) > 0) {
                ?>
                <table class="tablesalesnew">
                    <tr>
                        <th width="2%"></th>
                        <th width="12%">Item No.</th>
                        <th width="15%">Item Description</th>
                        <th width="10%">Vat Type</th>
                        <th width="10%">Warehouse</th>
                        <th width="6%" style="text-align:center">Qty</th>
                        <th width="8%">UOM</th>
                        <th width="10%">Unit Price</th>
                        <th width="10%">Amount</th>
                        <th width="5%">Discount</th>
                        <th width="10%">Net Amount</th>
                        <th width="2%"></th>
                    </tr>

                    <?php
                    foreach ($cashinvoicelines as $i => $cashinvoiceline) {
                        ?>

                        <tr>
                            <td><?php echo (in_array($taskstat, array('addCashInvoice', 'updatecashinvoice'))) ? '<div class="del"><input type="button" name="delete" class="del deltask"></div>' : ''; ?></td>
                            <td>
                                <select name="itemId[]" class="itemid">
                                    <option value="addItem">[Add Item]</option>
                                    <?php
                                    $items = TblItemMySqlExtDAO::getItemList(Session::getSession('orgid'));
                                    foreach ($items as $item) {
                                        ?>
                                        <option value="<?php echo $item->id ?>" description = "<?php echo $item->description ?>" uom="<?php echo $item->uomId ?>" uprice="<?php echo $item->srp ?>" fprice="<?php echo $item->franchiseSellingPrice ?>" <?php echo $cashinvoiceline->itemId == $item->id ? 'selected' : '' ?>><?php echo $item->itemCode ?> - <?php echo $item->description ?></option>
                                    <?php } ?>
                                </select>
                                <input type="hidden" name="salesordertaskid[]" value="<?php echo $cashinvoiceline->id ?>" />
                            </td>
                            <td><input type="text" name="itemDescription[]" value="<?php echo ($cashinvoiceline->itemDescription) ?>"></td>
                            <td> 
                                <select name="vatId[]" class="vatcontainer" id="taxId" required>
                                    <?php
                                    if (count($tax) > 0) {
                                        ?>
                                        <?php
                                        foreach ($tax as $itemvat) {
                                            ?>
                                            <option value="<?php echo $itemvat->id ?>" <?php echo ($cashinvoiceline->vatId == $itemvat->id) ? 'selected' : '' ?>>
                                                <?php echo $itemvat->description ?></option>
                                        <?php } ?>
                                    <?php } ?>
                                </select>
                            </td>
                            <td>
                                <select name="warehouseId[]" class="warehouseId" required>
                                    <?php
                                    $warehouse = TblWarehouseMySqlExtDAO::getWarehouseList(Session::getSession('orgid'));
                                    foreach ($warehouse as $whouse) {
                                        ?>
                                        <option value="<?php echo $whouse->id ?>"><?php echo $whouse->warehouseName ?></option>
                                    <?php } ?>
                                    <option>Add Warehouse</option>
                                </select>
                            </td>
                            <td><input type="text" value="<?php echo $cashinvoiceline->qty ?>" style="text-align:center" class="qty" name="qty[]"></td>
                            <td>
                                <select name="uomId[]" class="uom">
                                    <?php
                                    if (count($uom) > 0) {
                                        foreach ($uom as $uomlist) {
                                            ?>
                                            <option  value="<?php echo $uomlist->id ?>" <?php echo $uomlist->id == $cashinvoiceline->uomId ? 'selected':'' ?>><?php echo $uomlist->abbreviation ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </td>
                            <td><input type="text" name="unitPrice[]" value="<?php echo Controller::getFloat($cashinvoiceline->unitPrice) ?>" class="unitPrice amounttextalign isNumeric "></td>
                            <td><input type="text" value="<?php echo Controller::getFloat($cashinvoiceline->qty * $cashinvoiceline->unitPrice) ?>" name="rate[]" class="rate amounttextalign isNumeric"></td>
                            <td style="background-color: #fff;"><input type="text" value="<?php echo $cashinvoiceline->discountLine ?>" name="discountLine[]" style="width: 75%;" class="discountline amounttextalign">%</td>
                            <td><input type="text" value="<?php echo Controller::getFloat($cashinvoiceline->netAmount) ?>" class="tasknet linetext RateTH isNumeric netAmountLine amounttextalign" name="netAmount[]" readonly></td>
                            <td>
                                <?php echo (in_array($taskstat, array('addCashInvoice', 'updatecashinvoice'))) ? '	<div class="adel">
							<input type="button" name="add"  class="a addtask addtaskslines" id="addtask">
						</div> ' : ''; ?>
                            </td>
                        </tr>
                    <?php }
                    ?>
                </table>
                <?php
            } else {
                ?>
                <table class="tablesalesnew <?php echo ($taskstat == "updatesalesorder") ? 'hidden' : '' ?>">

                    <tr>
                        <th width="2%"></th>
                        <th width="12%">Item No.</th>
                        <th width="15%">Item Description</th>
                        <th width="10%">Vat Type</th>
                        <th width="10%">Warehouse</th>
                        <th width="6%" style="text-align:center">Qty</th>
                        <th width="8%">UOM</th>
                        <th width="10%">Unit Price</th>
                        <th width="10%">Amount</th>
                        <th width="5%">Discount</th>
                        <th width="10%">Net Amount</th>
                        <th width="2%"></th>
                    </tr>
                    <tr>
                        <td><div class="del"><input type="button" name="delete" class="del deltask"></div></td>
                        <td>
                            <select name="itemId[]" class="itemid" required >
                                <option value=""></option>
                                <option value="addItem">[Add Item]</option>
                                <?php
                                $items = TblItemMySqlExtDAO::getItemList(Session::getSession('orgid'));
                                foreach ($items as $item) {
                                    ?>
                                    <option value="<?php echo $item->id ?>" description = "<?php echo $item->description ?>" uom="<?php echo $item->uomId ?>" uprice="<?php echo $item->srp ?>" fprice="<?php echo $item->franchiseSellingPrice ?>" ><?php echo $item->itemCode ?> - <?php echo $item->description ?></option>
                                <?php } ?>
                            </select>
                        </td>
                        <td><input type="text" name="itemDescription[]" value="" required /></td>

                        <td> 
                            <select name="vatId[]" class="vatcontainer" id="taxId" required >
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
                        <td>
                            <select name="warehouseId[]" class="warehouseId" required >
                                <option value=""></option>
                                <?php
                                $warehouse = TblWarehouseMySqlExtDAO::getWarehouseList(Session::getSession('orgid'));
                                //print_r($warehouse);
                                foreach ($warehouse as $whouse) {
                                    ?>
                                    <option value="<?php echo $whouse->id ?>"><?php echo $whouse->warehouseName ?></option>
                                <?php } ?>
                                <option value="addLocation">Add Warehouse</option>
                            </select>
                        </td>
                        <td><input type="text" value="1" name="qty[]" class="qty" style="text-align:center"></td>
                        <td>
                            <select name="uomId[]" class="uom" required >
                                <option></option>
                                <?php
                                if (count($uom) > 0) {
                                    foreach ($uom as $uomlist) {
                                        ?>
                                        <option  value="<?php echo $uomlist->id ?>"><?php echo $uomlist->abbreviation ?></option>
                                        <?php
                                    }
                                }
                                ?>
                                <option value="addnewUom">Add UOM</option>
                            </select>
                        </td>
                        <td><input type="text" name="unitPrice[]" value="" class="unitPrice amounttextalign isNumeric" required /></td>
                        <td><input type="text" value="" class="rate amounttextalign isNumeric" name="rate[]" readonly ></td>
                        <td style="background-color: #fff;"><input type="text" value="" name="discountLine[]" style="width: 75%;" class="discountline amounttextalign">%</td>
                        <td><input type="text" value="0" class="tasknet linetext RateTH isNumeric netAmountLine amounttextalign" name="netAmount[]" readonly></td>
                        <td>
                            <div class="adel">
                                <input type="button" name="add"  class="a addtask addtaskslines" id="addtask">
                            </div>
                        </td>
                    </tr>

                </table>
                <?php
            }
            ?>
        </div>
        <?php
        echo (in_array($taskstat, array('addCashInvoice', 'updatecashinvoice'))) ?
                '<div class="search-box">
			<div class="size-container" style="display: none"></div>
			<input type="button" id="addtask" class="addNewTaskButton addsavebuttonbody" value="ADD LINE"/>     
		</div>' : ''
        ?>
        <div style="margin-top:20px;margin-left:13px;">
            <label style="font-family:Verdana;font-size:12px;margin-left:10px;">GL Posting:</label>
            <select class="item-text2NewItem item-textNewItem" name="glPosting" id="glPosting2" required style="width: 225px;height:27px;" required>
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
                        <option value="<?php echo $coa->id ?>" <?php echo ($coa->id == $cashinvoice->glPosting) ? 'selected' : '' ?>><?php echo $coa->accountNum ?> - <?php echo $coa->accontName ?></option>

                        <?php
                    }
                }
                if ($coas2) {
                    foreach ($coas2 as $coa) {
                        if ($coa->activeAccount == 'yes') {
                            ?>
                            <option value="<?php echo $coa->id ?>" <?php echo ($coa->id == $cashinvoice->glPosting) ? 'selected' : '' ?>><?php echo $coa->accountNum ?> - <?php echo $coa->accontName ?></option>
                            <?php
                        }
                    }
                }
                ?>

            </select>
        </div>
        <div class="totalbelow">
            <table class="totaltableBelow">
                <tr>	
                    <th width="40%"></th>
                    <th width="60%"></th>
                </tr>
                <?php
                $discounttotal = $cashInvoiceAmount->discountAmount == '' ? 0 : $cashInvoiceAmount->discountAmount;
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
                    <td><input type="text" class="totalclass numeric netamounttotal" style="padding-right: 10px;" value="" readonly></td>
                </tr>
                <?php
                $vattotal = $cashInvoiceAmount->vatAmount == '' ? 0 : $cashInvoiceAmount->vatAmount;
                ?>
                <tr>
                    <td>VAT</td>
                    <td style="padding-bottom:3px;"><input type="text" class="totalclass numeric" id="vat" name="vatAmount" value="<?php echo Controller::getFloat($vattotal) ?>" style="padding-right: 10px;" readonly></td>
                </tr>
                <tr class="totalsalesorder">
                    <td style="font-weight:bold;color:#fff;">Total Amount</td>
                    <td><input type="text" class="totalclass numeric" name="grandTotal" style="padding-right: 10px;font-weight:bold;color:#fff;background:none;border:none;" value="<?php echo Controller::getFloat($cashInvoiceAmount->grandTotal) ?>" readonly></td>
                </tr>
            </table>
        </div>
        <div style="clear:both;"></div>

         <div style="margin-left: 10px;font-weight: bold;float:left;">  
                <input type="hidden" name="id" value="<?= $cashinvoice->id ?>"/>
                <input type="hidden" name="id" value=""/>
                <div class="remarksinvcash">REMARKS:</div>
                <div style="margin-top:15px;margin-left:10px;">
                    <textarea  class="tm" name="remarks" style="background:none;"><?php echo $cashinvoice->remarks ?></textarea>
                    <!-- <textarea  class="tm" name="remarks" style="background:none;"></textarea> -->
                </div>

                <div class="buttonsInvoices">
                    <?php if ($cashinvoice->status == "open" && ($useraccess->Add == 'yes' || $useraccess->Edit == 'yes')) { //echo $salesorder->status;  ?>

                        <input class="bn3 addsavebuttonbody saveSales" type="submit" name="save" value="SAVE" id="save">
                        <input class="bn bPost addsavebuttonbody" type="submit" name="post" value="POST">
                    <?php } elseif ($cashinvoice->status == "posted") {
                        ?>
                        <input type="button" name="reverse" value="REVERSE" class="bn3b addsavebuttonbody" id="reverseNewInvoice" style="cursor:pointer;">
                        <?php
                    }
                    ?>	
                    <input type="hidden" name="id" value="<?php echo $cashinvoice->id ?>" />
                    <input type="hidden" name="task" value="<?php echo $taskstat ?>"/>
                    <input type="hidden" name="status" value=""/>
                </div>
        </div>

        <div class="cm_content2">
            <?php
            if ($cashinvoice->cmId != 0) {
                $tax = DAOFactory::getTblTaxDAO()->queryByTaxCode('Vatable');
                $cm_amount = TblNewCreditMemoMySqlExtDAO::getTotalCm($cashinvoice->cmId);
                ?>
            <input type="hidden" name="cmid" value="<?php echo $cashinvoice->cmId ?>"  />
            <input type="hidden" name="cm_amount" value="<?php echo $cm_amount/(($tax[0]->rate + 100)/100) ?>"  />
                <?php
            }
            ?>            
        </div>
    </form>


</div>

<div class="popBack hidden">

</div>

<script>
    invoiceprintview = $('input[name="id"]').val();
    $(function () {

        if ('<?= $cashinvoice->status ?>' == 'posted' || '<?= $cashinvoice->status ?>' == 'reversed') {
            $('input[type="text"], select, input[type="number"], input[type="date"], textarea, input[type="radio"],input[type="checkbox"]').prop('disabled', true);
        }
<?php if (Session::getSession('status') == 'posted'): ?>
    <?php Session::setSession('status', false); ?>
            printPreview(invoiceprintview);
            $('input[type="text"], select, input[type="number"], input[type="date"], textarea').prop('disabled', true);
<?php endif; ?>



        $('#reverseNewInvoice').click(function () {

            let token = $('input[name="token"]').val();

            if (confirm('Are you sure you want to reverse the Cash Invoice?')) {
                $('body').css('overflow', 'hidden');
                $('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
                $('.popBack').removeClass('hidden');
                $.post(URL + 'cashinvoice/updateCashInvoice', {'id': '<?= $cashinvoice->id ?>', 'status': 'reverse', 'token':token})
                        .done(function (returnData) {
                            returnData = returnData.trim();
                            if (returnData == '') {
                                $('#reverseNewInvoice').attr('disable', 'disable');
                                window.location.href = URL + 'sales';
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

    });

    function printPreview(id) {

        $.post(URL + 'sales/printReceipt', {invoiceid: id})
                .done(function (returnData) {
                    $('.popBack').html(returnData);
                    $('.popBack').removeClass('hidden');
                    $('body').css('overflow', 'hidden');
                    $('.popx').click(function () {
                        $('.popBack').addClass('hidden');
                        $('.popBack').html('');
                        $('body').css('overflow', 'auto');
                        $('.chk').removeAttr('checked');
                        invoiceprintview = paymentpreview = '';
                    });
                })
                .fail(function () {
                    alert('Connection Error!');
                });
        return false;
    }
</script>
