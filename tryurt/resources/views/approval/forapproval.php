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
        width:245px;
        height:27px;
        padding:5px;
        margin-left:15px;
    }
    .table2header td{
        padding-top:5px;
        font-family:verdana;
        font-size:12px;
    }
    .table1header td{
        padding-top:5px;
        font-family:verdana;
        font-size:12px;
    }
    .discountsenior{
        border: 1px solid #C8C8C8 !important;
        text-align: left;
    }
    .ivat{
        margin-left:25px;
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
	.outletSelection{
		width: 200px;
		height: 28px;
		font-size: 12px;
		font-family: Verdana;
	}
	
	
</style>
<title>
    ALL SALES
</title>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>

<?php
$invoicestat = 'x';
$invoicestat2 = '';

$info = $this->info;
$tax = $this->tax;
$uom = $this->uom;
?>



<div class="mainbodyInvoice">
    <div id="new2s" style="margin-left:10px !important; padding-top:15px;">
        <label class="headTextNewInvoice headings">
			SALES ORDER FOR APPROVAL</label>
    </div>	
    
	<form method="post" action="" class="form-Sales">
	<div class="headertables">
        <table style="float:left;" class="table1header">
            <tr>
                <td>Customer Name:</td>
                <td>
                   <select <?php echo $invoicestat2 ?> class="sc newsc" name='clientId' <?php //echo ($taskstat == 'reverseinvoice' ? 'disabled' : '') ?> id="client" required>
                        <option></option>
                        <option value="addclient">[Add Customer]</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><div class="divAdd">Address:</div></td>
                <td>
                   <textarea class="add" id='address' name='address' readonly <?php echo $invoicestat ?> ><?php //echo ($salesorder->clientId != '') ? DAOFactory::getTblClientDAO()->load($salesorder->clientId)->address : '' ?></textarea>
                </td>
            </tr>
        </table>
		
		
        <table style="float:right;" class="table2header">
            <tr>
                <td>PO No.:</td>
                <td><input type="text" name="salesOrderNo" value="<?php //echo $salesorder->salesOrderNo ?>"></td>
            </tr>
            <tr>
                <td>Date Issued:</td>
                <td><input type="text" class="di" id="di" name="dateIssued" value="<?php //echo date('m/d/Y', strtotime($salesorder->dateIssued))?>" ></td>
            </tr>
            <tr>
                <td>Date Created:</td>
                <td><input type="text" class="di" name="dateCreated" value="<?php //echo date('m/d/Y', strtotime($salesorder->dateIssued)); ?>" style="background:#c8c8c8;border:none;" disabled></td>
            </tr>
            <tr>
                <td>Ref. No.:</td>
                <td><input type="text" name="refNo" value = "<?php //echo $salesorder->refNo ?>"></td>
            </tr>
            <tr>
                <td>Discount:</td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="radio" id="percent" name="discounttype" value="percent" <?php //echo $salesorder->discount != 0 ? 'checked' : '' ?>> In percent 
                    <input type="radio" id="amount" name="discounttype" value="amount" <?php //echo $salesorder->discount == 0 ? 'checked' : '' ?>> In Amount 
                   <input type="text" style="width:98px;" class="dsc isNumeric  discountsenior <?php //echo $salesorder->discount != 0 ? 'hidden' : '' ?>  <?php echo $invoicestat ?>" name="discountPesoAmount" value="<?php //echo ($salesOrderAmount->discountPesoAmount != '') ? Controller::getFloat($salesOrderAmount->discountPesoAmount) : '0.00' ?>"> 
                    <input type="text" style="width:98px;" class="dsc nodecimal discountsenior <?php //echo $salesorder->discount == 0 ? 'hidden' : '' ?> <?php echo $invoicestat ?>" name="discount" value="<?php //echo ($salesorder->discount != '') ? $salesorder->discount : '0' ?>" >
				
				</td>
            </tr>

        </table>
    </div>
		<div style="clear:both;"></div>
		<div>
			<?php //if($info->typeOfTax == 'vat') { ?>
				
				<div class="ivat">Inclusive of VAT <input type="checkbox"  class="" name="inclusiveOfVat" style="-webkit-transform: scale(1.4);margin-top:11px;margin-left:5px;height: 10px;"></div>
				
			<?php //} ?>
			<div>
				<div>Deducted To:</div>
				<div>
					<span><input type="checkbox" class="mainInventory" value="mainInventory" name="deductedTo"><label>Main Inventory</label> </span> 
					<span style="margin-left:20px;"><input type="checkbox" value="outlet" name="deductedTo" class="outlet"><label>Outlet</label></span>
				</div>
				<div class="outletContainer hidden">
					Outlet Name: 
					<select class="outletSelection">
						<option><option>
					</select>
				</div>
			</div>
		</div>
		
		<div>
			
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
				
				<tr>
					<td><?php //echo (in_array($taskstat, array('addSalesOrder','updatesalesorder'))) ? '<div class="del"><input type="button" name="delete" class="del deltask"></div>' : ''; ?></td>
					<td>
						<select name="itemId[]" class="itemid" required>
							<?php
							$items = TblItemMySqlExtDAO::getItemList(Session::getSession('orgid'));
							foreach ($items as $item) {
								?>
								<option value="<?php echo $item->id ?>" <?php //echo $salesorderline->itemId == $item->id ? 'selected' : '' ?>><?php echo $item->description ?></option>
							<?php } ?>
							
							<option>Add Item</option>
						</select>
						<input type="hidden" name="salesordertaskid[]" value="<?php //echo $salesorderline->id ?>" />
					</td>
					<td><input type="text" name="itemDescription[]" value="<?php //echo ($salesorderline->itemDescription) ?>" required /></td>
					<td> 
						<select name="vatId[]" class="vatcontainer" required>
							<?php
							if (count($tax) > 0) {
								?>
								<?php
								foreach ($tax as $itemvat) {
									?>
									<option value="<?php echo $itemvat->id ?>" <?php //echo ($salesorderline->vatId == $itemvat->id) ? 'selected' : '' ?>>
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
									<option value="<?php echo $whouse->id ?>"><?php echo $whouse->warehouseCode ?></option>
							<?php } ?>
							<option>Add Location</option>
						</select>
					</td>
					<td><input type="text" value="<?php //echo Controller::getFloat($salesorderline->qty) ?>" style="text-align:center" class="qty" name="qty[]" required /></td>
					<td>
						<select name="uomId[]" class="uom" required>
							<?php
									?>
									<option  value="<?php //echo $uomlist->id ?>"><?php //echo $uomlist->abbreviation ?></option>
									<?php
								
							?>
						</select>
					</td>
				   <td><input type="text" name="unitPrice[]" value="<?php //echo Controller::getFloat($salesorderline->unitPrice) ?>" class="unitPrice amounttextalign isNumeric" required /></td>
					<td><input type="text" value="<?php //echo Controller::getFloat($salesorderline->rate) ?>" name="rate[]" class="rate amounttextalign isNumeric"></td>
					<td style="background-color: #fff;"><input type="text" value="<?php //echo $salesorderline->discountLine ?>" name="discountLine[]" style="width: 75%;" class="discountline amounttextalign">%</td>
					<td><input type="text" value="<?php //echo Controller::getFloat($salesorderline->netAmount)?>" class="tasknet linetext RateTH isNumeric netAmountLine amounttextalign" name="netAmount[]" readonly></td>
					<td></td>
				</tr>
				<?php //}
			?>
			</table>
			
		</div>
		
		<div class="totalbelow">
			<table class="totaltableBelow">
				<tr>	
					<th width="40%"></th>
					<th width="60%"></th>
				</tr>
				<?php
					//$discounttotal = $salesOrderAmount->discountAmount == '' ? 0 : $salesOrderAmount->discountAmount;
				?>
				<tr>
					<td>Subtotal</td>
					<td><input type="text" class="totalclass numeric"  style="padding-right: 10px;"
							id="subtotal" name="subTotalAmount" value="<?php //echo Controller::getFloat($subTotal) ?>" readonly></td>
				</tr>
				<tr>
					<td>Discount</td>
					<td><input type="text" class="totalclass numeric" id="discount" name="discountAmount" style="padding-right: 10px;" value="<?php //echo Controller::getFloat($discounttotal) ?>" readonly></td>
				</tr>
				<tr>
					<td>Net Amount</td>
					<td><input type="text" class="totalclass numeric netamounttotal" style="padding-right: 10px;" value="" readonly></td>
				</tr>
				<?php
					//$vattotal = $salesOrderAmount->vatAmount == '' ? 0 : $salesOrderAmount->vatAmount;
				?>
				<tr>
					<td>VAT</td>
					<td style="padding-bottom:3px;"><input type="text" class="totalclass numeric" id="vat" name="vatAmount" value="<?php //echo Controller::getFloat($vattotal) ?>" style="padding-right: 10px;" readonly></td>
				</tr>
				<tr class="totalsalesorder">
					<td style="font-weight:bold;color:#fff;">Total Amount</td>
					<td><input type="text" class="totalclass numeric" name="grandTotal" style="padding-right: 10px;font-weight:bold;color:#fff;background:none;border:none;" value="<?php //echo Controller::getFloat($salesOrderAmount->grandTotal) ?>" readonly></td>
				</tr>
			</table>
		</div>
		<div style="clear:both;"></div>
	
		<div class="buttonsInvoices">
			 <?php //if ($salesorder->status == "open")  { //echo $salesorder->status;?>
				
				
				<input class="bn3 addsavebuttonbody saveSales" type="submit" name="save" value="REJECT" id="save">
				<input class="bn bPost addsavebuttonbody" type="submit" name="post" value="APPROVE">
			<?php //} elseif ($salesorder->status == "posted") {
				?>
				<!--<input type="button" name="reverse" value="REVERSE" class="bn3b addsavebuttonbody" id="reverseNewInvoice" style="cursor:pointer;">-->
			 <?php
				//}
			?>	
				<input type="hidden" name="id" value="<?php //echo $salesorder->id ?>" />
 				<input type="hidden" name="task" value="<?php //echo $taskstat ?>"/>
				<input type="hidden" name="status" value=""/>
		</div>
	</form>
</div>

<div class="popBack hidden"></div>


<script>
	$(function(){
		$('input[name="deductedTo"]').click(function () {
			if ($(this).val() == 'outlet') {
				$('.outletContainer').removeClass('hidden');
			} else {
				$('.outletContainer').addClass('hidden');
			}

		});

	})
</script>
