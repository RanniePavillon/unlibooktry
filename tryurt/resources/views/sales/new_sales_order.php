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
        /* background-image:url('<?= URL ?>public/images/addLine.png');
        background-repeat:no-repeat;
        border-radius: 5px; */
        margin-top: 0px;
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
        font-size: 11px;
        font-family: Verdana;
        height: 25px;
        border: none;
        padding: 5px;
        /* padding-right: 9px; */
    }
    .amounttextalign{
        text-align:right;
    }
    .totaltableBelow th{
        background:none;
    }
    .tablesalesnew th{
        border:none;
    }
    .totaltableBelow th{
        border:none;
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
    .deductionContainer{
        font-family:verdana;
        font-size:12px;
        margin-left: 17px;
        margin-top: 10px;
    }
    .outletCon{
        padding-left: 5px;
        padding-top: 5px;
    }
    .selectOutlet{
        font-family: Verdana;
        font-style: normal;
        font-size: 11px;
        width: 214px;
        height: 28px;
        margin-left:5px;
        padding: 5px;
    }

</style>
<title>
    ALL SALES
</title>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/loading.css"/>

<?php
$invoicestat = 'x';
$invoicestat2 = '';
$salesorder = $this->salesorder;
$taskstat = 'addSalesOrder';
$info = $this->info;
$tax = $this->tax;
$uom = $this->uom;


$salesorderId = Session::getSession('salesorderid');
// $salesOrderAmount = $this->salesOrderAmount;//new TblSalesOrderAmount();
// if ($salesorderId != '') {
// $salesorder2 = DAOFactory::getTblSalesOrderDAO()->queryBySalesOrderId($salesorderId);
// $salesOrderAmount = DAOFactory::getTblSalesOrderAmountDAO()->queryBySalesOrderId($salesorder2[0]->id);
// $salesOrderAmount = $salesOrderAmount[0];
// }

if (in_array($salesorder->status, array('open', 'pending')) && $salesorder->id != '') {
    $taskstat = 'updatesalesorder';
} elseif ($salesorder->status == 'posted') {
    $taskstat = 'postedsalesorder';
} elseif ($salesorder->status == 'reversed') {
    $taskstat = 'reversedsalesorder';
}
?>

<?php
/* if ($invoice->status == 'posted' || $invoice->status == 'reversed') {
  ?>
  <script>
  $(function () {
  $('.addNewTaskButton, .adel').remove();
  $('.form-new input, .form-new select').prop('disabled', true);
  $('.form-new input[name="discount"]').prop('disabled', true);
  $('.buttonsInvoices input').prop('disabled', false);

  })
  </script>
  <?php
  } */

$salesOrderId = $salesorder->id;
$salesOrderAmount = new TblSalesOrderAmount();
if ($salesOrderId != '') {
    $salesOrderAmount = $this->salesOrderAmount;
}
$subTotal = $salesOrderAmount->subTotalAmount == '' ? 0 : $salesOrderAmount->subTotalAmount;
?>
<script>
    newrecord = "new";
    tin = "<?php echo $this->tin ?>";
</script>


<div class="mainbodyInvoice">
    <div id="new2s" style="margin-left:10px !important; padding-top:15px;">
        <label class="headTextNewInvoice headings">
            <?php
            if ($taskstat == 'updatesalesorder') {
                echo 'UPDATE';
            } elseif ($taskstat == 'reversedsalesorder') {
                echo 'REVERSED';
            } elseif ($taskstat == 'postedsalesorder') {
                echo 'POSTED';
            } else {
                echo 'NEW';
            }
            ?> SALES ORDER</label>
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
                                    if ($item->active == 'yes' || $item->id == $salesorder->clientId) {
                                        ?>
                                        <option value='<?php echo $item->id ?>' <?php echo ($item->id == $salesorder->clientId) ? 'selected' : '' ?> currencyId="<?= $item->currencyId ?>" type="<?php echo $item->type ?>">
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
                        <textarea class="add" id='address' name='address' readonly <?php echo $invoicestat ?> ><?php echo ($salesorder->clientId != '') ? DAOFactory::getTblClientDAO()->load($salesorder->clientId)->address : '' ?></textarea>
                    </td>
                </tr>
            </table>

            <?php
            $salesorderlines = $this->salesOrderTaskLines;
            ?>
            <table style="float:right;" class="table2header">
                <tr>
                    <td>SO No.:</td>
                    <td><input type="text" name="salesOrderNo" value="<?php echo $salesorder->salesOrderNo ?>" required></td>
                </tr>
                <tr>
                    <td>Date Issued:</td>
                    <td><input type="text" class="di" id="di" name="dateIssued" value="<?php echo date('m/d/Y', strtotime($salesorder->dateIssued)) ?>" required /></td>
                </tr>
                <tr>
                    <td>Date Created:</td>
                    <td><input type="text" class="di" name="dateCreated" value="<?php echo date('m/d/Y', strtotime($salesorder->dateIssued)); ?>" style="background:#c8c8c8;border:none;" disabled></td>
                </tr>
                <tr>
                    <td>Ref. No.:</td>
                    <td><input type="text" name="refNo" value = "<?php echo $salesorder->refNo ?>" ></td>
                </tr>
                <tr>
                    <td>Discount:</td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="radio" id="percent" name="discounttype" value="percent" <?php echo $salesorder->discount != 0 ? 'checked' : '' ?>> In percent 
                        <input type="radio" id="amount" name="discounttype" value="amount" <?php echo $salesorder->discount == 0 ? 'checked' : '' ?>> In Amount 
                        <input type="text" style="width:98px;" class="dsc isNumeric  discountsenior <?php echo $salesorder->discount != 0 ? 'hidden' : '' ?>  <?php echo $invoicestat ?>" name="discountPesoAmount" value="<?php echo ($salesOrderAmount->discountPesoAmount != '') ? Controller::getFloat($salesOrderAmount->discountPesoAmount) : '0.00' ?>"> 
                        <input type="text" style="width:98px;" class="dsc nodecimal discountsenior <?php echo $salesorder->discount == 0 ? 'hidden' : '' ?> <?php echo $invoicestat ?>" name="discount" value="<?php echo ($salesorder->discount != '') ? $salesorder->discount : '0' ?>" >

                    </td>
                </tr>

            </table>
        </div>
        <div style="clear:both;"></div>
        <div>
            <?php if ($info->typeOfTax == 'vat') { ?>

                <div class="ivat">Inclusive of VAT <input type="checkbox"  class="" name="inclusiveOfVat" style="-webkit-transform: scale(1.4);margin-top:11px;margin-left:5px;height: 10px;"
                                                          <?= $salesorder->inclusiveOfVat == '' ? ' checked ' : $salesorder->inclusiveOfVat == 'yes' ? ' checked ' : "" ?> ></div>

            <?php } ?>

        </div>

        <div>
            <?php
            if (count($salesorderlines) > 0) {
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
                    foreach ($salesorderlines as $i => $salesorderline) {
                        ?>

                        <tr>
                            <td><?php echo (in_array($taskstat, array('addSalesOrder', 'updatesalesorder'))) ? '<div class="del"><input type="button" name="delete" class="del deltask"></div>' : ''; ?></td>
                            <td>
                                <select name="itemId[]" class="itemid" required>
                                    <?php
                                    $items = TblItemMySqlExtDAO::getItemList(Session::getSession('orgid'));
                                    foreach ($items as $item) {
                                        ?>
                                        <option value="<?php echo $item->id ?>" description = "<?php echo $item->description ?>" uom="<?php echo $item->uomId ?>" uprice="<?php echo $item->srp ?>" fprice="<?php echo $item->franchiseSellingPrice ?>" <?php echo $salesorderline->itemId == $item->id ? 'selected' : '' ?>><?php echo $item->itemCode ?> - <?php echo $item->description ?></option>
                                    <?php } ?>

                                    <option value="addItem">Add Item</option>
                                </select>
                                <input type="hidden" name="salesordertaskid[]" value="<?php echo $salesorderline->id ?>" />
                            </td>
                            <td><input type="text" name="itemDescription[]" value="<?php echo ($salesorderline->itemDescription) ?>" required /></td>
                            <td> 
                                <select name="vatId[]" class="vatcontainer" id="taxId" required>
                                    <?php
                                    if (count($tax) > 0) {
                                        ?>
                                        <?php
                                        foreach ($tax as $itemvat) {
                                            ?>
                                            <option value="<?php echo $itemvat->id ?>" <?php echo ($salesorderline->vatId == $itemvat->id) ? 'selected' : '' ?>>
                                                <?php echo $itemvat->description ?></option>
                                        <?php } ?>
                                    <?php } ?>
                                </select>
                            </td>
                            <td>
                                <select name="warehouseId[]" class="warehouseId" required>
                                    <option value=""></option>
                                    <?php
                                    $warehouse = TblWarehouseMySqlExtDAO::getWarehouseList(Session::getSession('orgid'));
                                    foreach ($warehouse as $whouse) {
                                        ?>
                                        <option value="<?php echo $whouse->id ?>" <?php echo $whouse->id == $salesorderline->warehouseId ? 'selected' : '' ?> ><?php echo $whouse->warehouseName ?></option>
                                    <?php } ?>
                                    <option value="addLocation">Add Warehouse</option>
                                </select>
                            </td>
                            <td><input type="text" value="<?php echo $salesorderline->qty ?>" style="text-align:center" class="qty" name="qty[]" required /></td>
                            <td>
                                <select name="uomId[]" class="uom" required>
                                    <?php
                                    if (count($uom) > 0) {
                                        foreach ($uom as $uomlist) {
                                            ?>
                                            <option  value="<?php echo $uomlist->id ?>" <?php echo $uomlist->id == $salesorderline->uomId ? 'selected' : '' ?>><?php echo $uomlist->abbreviation ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </td>
                            <td><input type="text" name="unitPrice[]" value="<?php echo Controller::getFloat($salesorderline->unitPrice) ?>" class="unitPrice amounttextalign isNumeric" required /></td>
                            <td><input type="text" value="<?php echo Controller::getFloat($salesorderline->rate) ?>" name="rate[]" class="rate amounttextalign isNumeric"></td>
                            <td style="background-color: #fff;"><input type="text" value="<?php echo $salesorderline->discountLine ?>" name="discountLine[]" style="width: 75%;" class="discountline amounttextalign">%</td>
                            <td><input type="text" value="<?php echo Controller::getFloat($salesorderline->netAmount) ?>" class="tasknet linetext RateTH isNumeric netAmountLine amounttextalign" name="netAmount[]" readonly></td>
                            <td>
                                <?php echo (in_array($taskstat, array('addSalesOrder', 'updatesalesorder'))) ? '	<div class="adel">
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
                            <select name="itemId[]" class="itemid" required>
                                <option value=""></option>
                                <?php
                                $items = TblItemMySqlExtDAO::getItemList(Session::getSession('orgid'));
                                foreach ($items as $item) {
                                    ?>
                                    <option value="<?php echo $item->id ?>" description = "<?php echo $item->description ?>" uom="<?php echo $item->uomId ?>" uprice="<?php echo $item->srp ?>" title="<?php echo $item->itemCode ?>" fprice="<?php echo $item->franchiseSellingPrice ?>" ><?php echo $item->description ?></option>
                                <?php } ?>
                                <option value="addItem">Add Item</option>
                            </select>
                        </td>
                        <td><input type="text" name="itemDescription[]" value="" required /></td>

                        <td> 
                            <select name="vatId[]" class="vatcontainer" id="taxId" required>
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
                            <select name="warehouseId[]" class="warehouseId" required>
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
                        <td><input type="text" value="1" name="qty[]" class="qty" style="text-align:center" required /></td>
                        <td>
                            <select name="uomId[]" class="uom" required>
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
                        <td><input type="text" value="" class="rate amounttextalign isNumeric" name="rate[]" readonly></td>
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
        echo (in_array($taskstat, array('addSalesOrder', 'updatesalesorder'))) ?
                '<div class="search-box">
			<div class="size-container" style="display: none"></div>
			<input type="button" id="addtask" class="addNewTaskButton addsavebuttonbody" value="ADD LINE"/>     
		</div>' : ''
        ?>

        <?php if ($salesorder->type == 'online') { ?>
            <div class="deductionContainer">
                <div>
                    Deducted to:<br>
                    <label><input type="radio" class="mainRadio" name="deductedTo" value="main inventory" <?php echo $salesorder->deductedTo == 'main inventory' ? 'checked' : '' ?>> Main Inventory</label>
                    <label><input type="radio" class="outletRadio" name="deductedTo" value="outlet" <?php echo $salesorder->deductedTo == 'outlet' ? 'checked' : '' ?>> Outlet</label>
                    <br>
                    <div class="outletCon">
                        <?php $branches = DAOFactory::getTblOutletDAO()->queryAll(); ?>
                        Outlet Name: 
                        <select class="selectOutlet" name="outletName">
                            <?php foreach ($branches as $branch) { ?>
                                <option value="<?php echo $branch->id ?>" <?php echo $branch->id == $salesorder->outletName ? 'selected' : '' ?>><?php echo $branch->outletName ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
        <?php } ?>

        <div class="totalbelow">
            <table class="totaltableBelow">
                <tr>	
                    <th width="40%"></th>
                    <th width="60%"></th>
                </tr>
                <?php
                $discounttotal = $salesOrderAmount->discountAmount == '' ? 0 : $salesOrderAmount->discountAmount;
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
                    <td><input type="text" class="totalclass numeric netamounttotal" style="padding-right: 10px;" value="<?= Controller::getFloat(($salesOrderAmount->subTotalAmount) - ($salesOrderAmount->discountAmount)) ?>" readonly></td>
                </tr>
                <?php
                $vattotal = $salesOrderAmount->vatAmount == '' ? 0 : $salesOrderAmount->vatAmount;
                ?>
                <tr>
                    <td>VAT</td>
                    <td style="padding-bottom:3px;"><input type="text" class="totalclass numeric" id="vat" name="vatAmount" value="<?php echo Controller::getFloat($vattotal) ?>" style="padding-right: 10px;" readonly></td>
                </tr>
                <tr class="totalsalesorder">
                    <td style="font-weight:bold;color:#fff;">Total Amount</td>
                    <td><input type="text" class="totalclass numeric" name="grandTotal" style="padding-right: 10px;font-weight:bold;color:#fff;background:none;border:none;" value="<?php echo Controller::getFloat($salesOrderAmount->grandTotal) ?>" readonly></td>
                </tr>
            </table>
        </div>
        <div style="clear:both;"></div>

        <div class="buttonsInvoices">
            <?php if ($salesorder->status == "open" && ($useraccess->Add == 'yes' || $useraccess->Edit == 'yes')) { //echo $salesorder->status; ?>

                <input class="bn3 addsavebuttonbody saveSales" type="submit" name="save" value="SAVE" id="save">
                <input class="bn bPost addsavebuttonbody" type="submit" name="post" value="POST">
            <?php }if ($salesorder->status == "pending") { //echo $salesorder->status; ?>

                <input class="bn3 addsavebuttonbody saveSales" type="submit" name="reject" value="REJECT" id="reject">
                <input class="bn bPost addsavebuttonbody" type="submit" name="post" value="POST">
            <?php } elseif ($salesorder->status == "posted") {
                ?>
                <input type="button" name="reverse" value="REVERSE" class="bn3b addsavebuttonbody" id="reverseNewInvoice" style="cursor:pointer;">
                <?php
            }
            ?>	
            <input type="hidden" name="id" value="<?php echo $salesorder->id ?>" />
            <input type="hidden" name="task" value="<?php echo $taskstat ?>"/>
            <input type="hidden" name="status" value=""/>
        </div>
    </form>
</div>

<div class="popBack hidden">
    <!-- <div class="taskfrm hidden">
    <?php //include('views/sales/create_new_tasks.php');  ?>
     </div>
 
     <div class="clientfrm hidden">
    <?php //include('views/invoice/create_new_customer.php');  ?>
     </div> 
 
     <div class="itemfrm hidden">
    <?php //include('views/sales/new_item.php');  ?>
     </div>-->
</div>

<script>
    invoiceprintview = $('input[name="id"]').val();
    if ('<?= $salesorder->status ?>' == 'posted' || '<?= $salesorder->status ?>' == 'reversed') {
        $('input[type="text"], select, input[type="number"], input[type="date"], textarea, input[type="radio"]').prop('disabled', true);
    }


<?php if (Session::getSession('status') == 'posted'): ?>
    <?php Session::setSession('status', false); ?>
        printPreview(invoiceprintview);
        $('input[type="text"], select, input[type="number"], input[type="date"], textarea').prop('disabled', true);
<?php endif; ?>



    $('#reverseNewInvoice').click(function () {

        let token = $('input[name="token"]').val();

        // alert('dfsdf');
        if (confirm('Are you sure you want to reverse the Sales Order?')) {
            $('body').css('overflow', 'hidden');
            $('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
            $('.popBack').removeClass('hidden');
            $.post(URL + 'sales/updateSalesOrder', {'id': '<?= $salesorder->id ?>', 'status': 'reverse', 'token':token})
                    .done(function (returnData) {
                        returnData = returnData.trim();
                        if (returnData == '') {
                            $('#reverseNewInvoice').attr('disable', 'disable');
                            window.location.href = URL + 'sales/salesOrder';
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
        $.post(URL + 'sales/printSalesOrderReceipt', {invoiceid: id})
                .done(function (returnData) {
                    $('.popBack').html(returnData);
                    $('.popBack').removeClass('hidden');
                    $('body').css('overflow', 'hidden');
                    $('.popx').click(function () {
                        $('.popBack').addClass('hidden');
                        $('.popBack').html('');
                        $('body').css('overflow', 'auto');
                        $('.chk').removeAttr('checked');
                        //invoiceprintview = paymentpreview ='';
                    });
                })
                .fail(function () {
                    alert('Connection Error!');
                });
        return false;
    }
</script>