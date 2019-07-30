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
        width:245px;
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
        /* padding: 2px 5px 2px 5px; */
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
	.cnitableAllInvoice th{
		border:none !important;
	}
    .addNewTaskButton{
        /* background-image:url('<?= URL ?>public/images/addLine.png');
        background-repeat:no-repeat; */
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
        margin-top:40px;
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
    .remarkssalesret{
        float: left;
        width: 200px;
        margin-left: 15px;
        margin-top: 45px;
        font-family:verdana;
        font-size:12px;
        font-weight:bold;
    }
    .remarksSalesreturn{
        margin-top:10px;
        font-family:verdana;
        padding:5px;
        font-size:12px;
        width:465px;
        height: 155px;
        max-width: 465px;
        max-height: 155px;
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
        /* padding-right: 9px; */
    }
    .amounttextalign{
        text-align:right;
    }
    .totaltableBelow th{
        background:none;
    }




    .dropbtn {
        background-color: #4CAF50;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 682px;
        box-shadow: 0px 8px 16px 0px rgba(138, 137, 137, 0.2);
        margin-left: 20px;
        border: solid 1px #c8c8c8;
        padding-bottom:15px;
        max-height:400px;
        overflow:scroll;
    }

    .dropdown-content a {

    }

    .dropdown-content a:hover {background-color: #f1f1f1}

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #3e8e41;
    }
    .dropdownTables{
        width:95%;
        margin:auto;
        margin-top:10px;
    }
    .dropdownTables th{

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
</style>
<title>
    ALL SALES RETURNS
</title>

<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/loading.css"/>
<?php
$invoicestat = 'x';
$invoicestat2 = '';
$salesreturn = $this->salesreturn;

$salesReturnAmount = $this->salesReturnAmount;
$taskstat = 'addSalesReturn';
$info = $this->info;
$tax = $this->tax;
$uom = $this->uom;

$returntype = '';

$subTotal = $salesReturnAmount->subTotalAmount == '' ? 0 : $salesReturnAmount->subTotalAmount;

if ($salesreturn->status == 'open' && $salesreturn->id != '') {
    $taskstat = 'updatesalesreturn';
} elseif ($salesreturn->status == 'posted') {
    $taskstat = 'postedsalesreturn';
} elseif ($salesreturn->status == 'reversed') {
    $taskstat = 'reversesalesreturn';
}
//echo $taskstat;
?>

<script>

</script>
<div class="mainbodyInvoice">
    <div id="new2s" style="margin-left:10px !important; padding-top:15px;">
        <label class="headTextNewInvoice headings"><?php
            if ($taskstat == 'updatesalesorder') {
                echo 'UPDATE';
            } elseif ($taskstat == 'reversedsalesorder') {
                echo 'REVERSED';
            } elseif ($taskstat == 'postedsalesreturn') {
                echo 'POSTED';
            } else {
                echo 'CREATE NEW';
            }
            ?> SALES RETURNS</label>
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

                            <?php
                            $customer = TblClientMySqlExtDAO::queryByOrgIdOrderBy(Session::getSession('orgid'));
                            if (count($customer) > 0) {
                                foreach ($customer as $item) {
                                    if ($item->active == 'yes' || $item->id == $invoice->clientId) {
                                        ?>
                                        <option value='<?php echo $item->id ?>' <?php echo ($item->id == $salesreturn->clientId) ? 'selected' : '' ?> currencyId="<?= $item->currencyId ?>">
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
                    <td>Sales Invoice No:</td>
                    <td>
                        <select name="salesInvoiceId" class="sc" id="salesInvoiceSelect" required >
                            <option></option>
                            <?php
//                            if (count($this->salesInvoice) > 0) {
                            ?>
                                <!--<option value="<?php //echo $this->salesInvoice->id ?>" selected><?php //echo $this->salesInvoice->salesInvoiceNo ?></option>-->
                            <?php
//                            }
                            ?>
                            <?php
                            if ($salesreturn->salesInvoiceId != '' && $salesreturn->salesInvoiceId != 0) {
                                ?>
                                <option value="<?php echo $salesreturn->salesInvoiceId ?>" selected><?php echo $this->salesInvoice->salesInvoiceNo ?></option>
                                <?php
                            }
                            ?>

                            <?php
                            if ($salesreturn->cashSalesInvoiceId != '' && $salesreturn->cashSalesInvoiceId != 0) {
                                ?>
                                <option value="<?php echo $salesreturn->cashSalesInvoiceId ?>" selected><?php echo $this->cashSalesInvoice->cashSalesInvoiceNo ?></option>
                                <?php
                            }
                            ?>

                            <option value="showSi">Show SI</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><div class="divAdd">Address:</div></td>
                    <td>
                        <textarea class="add" id='address' name='address' readonly <?php echo $invoicestat ?> ><?php echo ($salesreturn->clientId != '') ? DAOFactory::getTblClientDAO()->load($salesreturn->clientId)->address : '' ?></textarea>
                    </td>
                </tr>
            </table>
            <table style="float:right;" class="table2header">
                <tr>
                    <td>Sales Return No.:</td>
                    <td><input type="text" name="salesReturnNo" value="<?php echo $salesreturn->salesReturnNo ?>" required /></td>
                </tr>
                <tr>
                    <td>Date Issued:</td>
                    <td><input type="text" name="dateIssued" value="<?php echo date('m/d/Y', strtotime($salesreturn->dateIssued)) ?>" class="di" required /></td>
                </tr>
                <tr>
                    <td>Date Created:</td>
                    <td><input type="text" name="dateCreated" value="<?php echo date('m/d/Y', strtotime($salesreturn->dateCreated)) ?>" class="di"></td>
                </tr>
                <tr>
                    <td>Ref. No.:</td>
                    <td><input type="text" name="refNo" value="<?php echo $salesreturn->refNo ?>"  /></td>
                </tr>
                <tr>
                    <td>Discount:</td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="radio" id="percent" name="discounttype" value="percent" <?php echo $salesreturn->discount != 0 ? 'checked' : '' ?> onclick="javascript: return false;"> In percent 
                        <input type="radio" id="amount" name="discounttype" value="amount" <?php echo $salesreturn->discount == 0 ? 'checked' : '' ?> onclick="javascript: return false;"> In Amount 
                        <input type="text" style="width:98px;" class="dsc isNumeric  discountsenior <?php echo $salesreturn->discount != 0 ? 'hidden' : '' ?>  <?php echo $invoicestat ?>" name="discountPesoAmount" value="<?php echo ($salesReturnAmount->discountPesoAmount != '') ? Controller::getFloat($salesReturnAmount->discountPesoAmount) : '0.00' ?>" readonly> 
                        <input type="text" style="width:98px;" class="dsc discountsenior <?php echo $salesreturn->discount == 0 ? 'hidden' : '' ?> <?php echo $invoicestat ?>" name="discount" value="<?php echo ($salesreturn->discount != '') ? $salesreturn->discount : '0' ?>" readonly>
                    </td>
                </tr>

            </table>
        </div>
        <div style="clear:both;"></div>
        <div>
            <?php if ($info->typeOfTax == 'vat') { ?>

                <div class="ivat">Inclusive of VAT <input type="checkbox"  class="" name="inclusiveOfVat" style="-webkit-transform: scale(1.4);margin-top:11px;margin-left:5px;height: 10px;"
                                                          <?= $salesreturn->inclusiveOfVat == '' ? ' checked ' : $salesreturn->inclusiveOfVat == 'yes' ? ' checked ' : "" ?> onclick="javascript: return false;"></div>

            <?php } ?>
        </div>

        <div>
            <?php
            // $client = DAOFactory::getTblClientDAO()->load($invoice->clientId);
            if (count($this->salesReturnTaskLines) > 0) {
                ?>
                <table class="tablesalesnew">
                    <thead>
                        <tr>
                            <th width="10%">Item No.</th>
                            <th>Ref. Invoice No</th>
                            <th width="15%">Item Description</th>
                            <th width="10%">Vat Type</th>
                            <th width="10%">Warehouse</th>
                            <th width="6%" class="textaligncenter">Qty</th>
                            <th width="8%" style="text-align:center;">UOM</th>
                            <th width="10%">Unit Price</th>
                            <th width="10%">Amount</th>
                            <th width="8%">Discount</th>
                            <th width="10%">Net Amount</th>
                        </tr>
                    </thead>	
                    <?php
                    foreach ($this->salesReturnTaskLines as $i => $salesreturnline) {
                        $salesinvoiceqty = $salesreturn->salesInvoiceId != 0 ? 
                                           TblSalesInvoiceLinesMySqlExtDAO::getSIItemQty($salesreturn->salesInvoiceId, $salesreturnline->itemId) : 
                                           TblCashSalesInvoiceLinesMySqlExtDAO::getCSIItemQty($salesreturn->cashSalesInvoiceId, $salesreturnline->itemId);
                        
                        if($salesreturn->salesInvoiceId != 0){
                            $returntype = 'salesinvoice';
                            $salesreturnqty = TblSalesReturnLinesMySqlExtDAO::getSRItemQty($salesreturn->salesInvoiceId, $salesreturnline->itemId);
                        }else{
                            $returntype = 'cashinvoice';
                            $salesreturnqty = TblSalesReturnLinesMySqlExtDAO::getSRItemQty($salesreturn->cashSalesInvoiceId, $salesreturnline->itemId);
                        }
                        
                        ?>
                        <tbody>
                            <tr>
                                    <!-- <td><div class="del"><input type="button" name="delete" class="del deltask"></div></td> -->
                                <td>
                                    <input type="hidden" name="itemId[]" value="<?php echo $salesreturnline->itemId ?>" class='itemid' />
                                    <input type="hidden" name="vatId[]" value="<?php echo $salesreturnline->vatId ?>" />
                                    <input type="hidden" name="warehouseId[]" value="<?php echo $salesreturnline->warehouseId ?>" />
                                    <input type="hidden" name="uomId[]" value="<?php echo $salesreturnline->uomId ?>" />
                                    <input type="hidden" name="averageCost[]" value="<?php echo $salesreturnline->averageCost ?>" />
                                    
                                    <!--<input type="hidden" value="<?php echo $salesreturnline->invoiceQty ?>" style="text-align:center" class="qty" name="invoiceQty[]">-->
                                    <input type="hidden" name="invoiceQty[]" value="<?php echo $salesinvoiceqty - $salesreturnqty ?>" class="invoiceqty"/>
                                    <?php
                                    $items = TblItemMySqlExtDAO::getItemList(Session::getSession('orgid'));
                                    foreach ($items as $item) {
                                        if ($salesreturnline->itemId == $item->id) {
                                            ?>
                                            <input type="text" value="<?php echo $item->description ?>" readonly />
                                            <?php
                                        }
                                    }
                                    ?>
                                    <input type="hidden" name="salesordertaskid[]" value="<?php echo $salesreturnline->id ?>" />
                                </td>
                                <td><input type="text" name="salesInvoiceNo[]" value="<?php echo $salesreturnline->salesInvoiceNo ?>" readonly></td>
                                <td><input type="text" name="itemDescription[]" value="<?php echo $salesreturnline->itemDescription ?>" readonly></td>
                                <td> 
                                    <?php
                                    if (count($tax) > 0) {
                                        ?>
                                        <?php
                                        foreach ($tax as $itemvat) {
                                            if ($salesreturnline->vatId == $itemvat->id) {
                                                ?>
                                                <input type="text" value="<?php echo $itemvat->description ?>" class="vatcontainer" readonly />
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
                                        if ($whouse->id == $salesreturnline->warehouseId) {
                                            ?>
                                            <input type="text" value="<?php echo $whouse->warehouseName ?>" readonly />
                                            <?php
                                        }
                                    }
                                    ?>
                                </td>
                                <td><input type="text" value="<?php echo $salesreturnline->returnQty ?>" style="text-align:center" class="qty" name="returnQty[]"></td>
                                <td>
                                    <?php
                                    if (count($uom) > 0) {
                                        foreach ($uom as $uomlist) {
                                            if ($uomlist->id == $salesreturnline->uomId) {
                                                ?>
                                                <input type="text" value="<?php echo $uomlist->abbreviation ?> " readonly style="text-align:center;"/>
                                                <?php
                                            }
                                        }
                                    }
                                    ?>
                                </td>
                                <td><input type="text" name="unitPrice[]" value="<?php echo Controller::getFloat($salesreturnline->unitPrice) ?>" class="unitPrice amounttextalign isNumeric " readonly></td>
                                <td><input type="text" value="<?php echo Controller::getFloat($salesreturnline->returnQty * $salesreturnline->unitPrice) ?>" name="rate[]" class="rate amounttextalign isNumeric" readonly></td>
                                <td style="background-color: #fff;"><input type="text" value="<?php echo $salesreturnline->discountLine ?>" name="discountLine[]" style="width: 75%;" class="discountline amounttextalign" readonly>%</td>
                                <td><input type="text" value="<?php echo Controller::getFloat($salesreturnline->netAmount) ?>" class="tasknet linetext RateTH isNumeric netAmountLine amounttextalign" name="netAmount[]" readonly></td>
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
                <table class="tablesalesnew">
                    <thead>
                        <tr>
                            <th width="10%">Item No.</th>
                            <th>Ref. Invoice No</th>
                            <th width="15%">Item Description</th>
                            <th width="10%">Vat Type</th>
                            <th width="10%">Warehouse</th>
                            <th width="6%" class="textaligncenter">Qty</th>
                            <th width="8%" style="text-align:center;">UOM</th>
                            <th width="10%">Unit Price</th>
                            <th width="10%">Amount</th>
                            <th width="8%">Discount</th>
                            <th width="10%">Net Amount</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                <?php
            }
            ?>
        </div>


        <div class="remarkssalesret">
            Remarks:
            <textarea class="remarksSalesreturn">
		
            </textarea>
        </div>
        <div>
            <div class="totalbelow">

                <table class="totaltableBelow">
                    <tr>	
                        <th width="40%"></th>
                        <th width="60%"></th>
                    </tr>
                    <?php
                    $discounttotal = $salesReturnAmount->discountAmount == '' ? 0 : $salesReturnAmount->discountAmount;
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
                        <td><input type="text" class="totalclass numeric netamounttotal" style="padding-right: 10px;" value="<?= Controller::getFloat(($salesReturnAmount->subTotalAmount) - ($salesReturnAmount->discountAmount)) ?>" readonly></td>
                    </tr>
                    <?php
                    $vattotal = $salesReturnAmount->vatAmount == '' ? 0 : $salesReturnAmount->vatAmount;
                    ?>
                    <tr>
                        <td>VAT</td>
                        <td style="padding-bottom:3px;"><input type="text" class="totalclass numeric" id="vat" name="vatAmount" value="<?php echo Controller::getFloat($vattotal) ?>" style="padding-right: 10px;" readonly></td>
                    </tr>
                    <tr class="totalsalesorder">
                        <td style="font-weight:bold;color:#fff;">Total Amount</td>
                        <td><input type="text" class="totalclass numeric" name="grandTotal" style="padding-right: 10px;font-weight:bold;color:#fff;background:none;border:none;" value="<?php echo Controller::getFloat($salesReturnAmount->grandTotal) ?>" readonly></td>
                    </tr>
                </table>
            </div>
        </div>
        <div style="clear:both;"></div>

        <div class="buttonsInvoices">
            <?php if ($salesreturn->status == "open" && ($useraccess->Add == 'yes' || $useraccess->Edit == 'yes')) { //echo $salesorder->status; ?>

                <input class="bn3 addsavebuttonbody saveSales" type="submit" name="save" value="SAVE" id="save">
                <input class="bn bPost addsavebuttonbody" type="button" name="post" value="POST">
            <?php } elseif ($salesreturn->status == "posted") {
                ?>
                <input type="button" name="reverse" value="REVERSE" class="bn3b addsavebuttonbody" id="reverseNewInvoice" style="cursor:pointer;">
                <?php
            }
            ?>	
            <input type="hidden" name="task" value="<?php echo $taskstat ?>"/>
            <input type="hidden" name="status" value=""/>
            <input type="hidden" name="id" value="<?php echo isset($_SESSION['salesreturnid']) ? $_SESSION['salesreturnid'] : $salesreturn->id ?>" />
            <input type="hidden" name="returnType" value="<?php echo $returntype ?>" />
        </div>
        
        <div class="cm_content2">
            <?php
            if ($salesreturn->cmId != 0) {
                $tax = DAOFactory::getTblTaxDAO()->queryByTaxCode('Vatable');
                $cm_amount = TblNewCreditMemoMySqlExtDAO::getTotalCm($salesreturn->cmId);
            }
                ?>
            <input type="hidden" name="cmId" value="<?php echo $salesreturn->cmId ?>"  />
            <input type="hidden" name="cm_amount" value="<?php echo $salesreturn->cmId !=0 ? $cm_amount/(($tax[0]->rate + 100)/100) :0 ?>"  />
             
        </div>
    </form>
</div>
<div class="popBack hidden">
</div>

<script>
    invoiceprintview = $('input[name="id"]').val();
    if ('<?= $salesreturn->status ?>' == 'posted' || '<?= $salesreturn->status ?>' == 'reversed') {
        $('input[type="text"], select, input[type="number"], input[type="date"], textarea, input[type="radio"]').prop('disabled', true);
    }
<?php if (Session::getSession('status') == 'posted'): ?>
    <?php Session::setSession('status', false); ?>
    <?php unset($_SESSION['salesreturnid']); ?>
        printPreview(invoiceprintview);
        $('input[type="text"], select, input[type="number"], input[type="date"], textarea').prop('disabled', true);
<?php endif; ?>

    $('#reverseNewInvoice').click(function () {

        let token = $('input[name="token"]').val();

        // alert('dfsdf');
        if (confirm('Are you sure you want to reverse the Sales Return?')) {
            $('body').css('overflow', 'hidden');
            $('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
            $('.popBack').removeClass('hidden');
            $.post(URL + 'salesreturn/updateSalesReturn', {'id': '<?= $salesreturn->id ?>', 'status': 'reverse', 'token':token})
                    .done(function (returnData) {
                        returnData = returnData.trim();
                        if (returnData == '') {
                            $('#reverseNewInvoice').attr('disable', 'disable');
                            window.location.href = URL + 'sales/salesReturn';
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

        $.post(URL + 'sales/printSalesReturnReceipt', {invoiceid: id})
                .done(function (returnData) {
                    $('.popBack').html(returnData);
                    $('.popBack').removeClass('hidden');
                    $('body').css('overflow', 'hidden');
                    $('.closePrints').click(function () {
                        $('.popBack').addClass('hidden');
                        $('.popBack').html('');
                        $('body').css('overflow', 'auto');
                        $('.chk').removeAttr('checked');
                        // invoiceprintview = paymentpreview ='';
                    });
                })
                .fail(function () {
                    alert('Connection Error!');
                });
        return false;
    }
</script>