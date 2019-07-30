<style>
    @font-face {
        font-family: 'agency fb'!important;  /*a name to be used later*/
        src: url('<?= URL ?>public/fonts/AGENCYR.ttf'); /*URL to font*/
    }

    @font-face {
        font-family: 'agency fb2'!important; /*a name to be used later*/
        src: url('<?= URL ?>public/fonts/AGENCYB.ttf'); /*URL to font*/
    }
	.popBack{
		overflow:auto;
	}
	/* input[type="submit"] {
	  display: initial!important;
	  margin: 0px!important;
	  width: 87px!important;
	  height: 28px!important;
	  background-color: #183867;
	  border: none;
	  color: #fff;
	  font-weight: bold;
	  border-radius: 5px!important;
	} */
    .hidden{
        display: none;
    }
    .fr{
        float: right;
        margin-top: 15px;
    }
    input[name="discount"]{
        width: 124px;
        text-align: right;
    }
    input[name="phpRate"]{
        height: 27px;
        font-family: verdana;
        font-style: normal;
        font-size: 12px;
        background-color: white;
        border: 1px solid #C8C8C8;
        width: 107px;
        text-align: right;
        padding-right:5px;
    }
    .newVendorPhoneInput{
        font-family: verdana;
        font-style: normal;
        font-size: 12px;
        margin-left: 20px;
        height: 27px;
        background-color: white;
        border: 1px solid #C8C8C8;
        margin-top:15px;
        width: 107px;
    }
    .buttonExpenses{
        margin-left: 20px;
        margin-top:98px;
    }
    .buttonReverse{
        margin-left:25px;
        margin-top:93px;
    }

    .table1NewExpensesNew{
        width: 99%;
        border-collapse: collapse;
        margin: auto;
        margin-top: 5px;
		margin-bottom:30px;
    }
    .table1NewExpensesNew{
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        font-size: 13px;
        font-weight: bold;
        color: white;
        text-align: left;
    }
    .table1NewExpensesNew, th{
        text-align: left;
        font-size: 13px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        font-weight: bold;
        color: white;
        padding-left: 10px;
    }
    .table1NewExpensesNew,td{
        text-align: left;
        font-size: 12px;
        font-family:Verdana;
        font-weight:bold;
        padding: 1px 1px 1px 1px;
        color: black;
    }
    .table1NewExpensesNew input[type="text"]{
        width:100%;
        height:25px;
       /*  max-width:100%; */
        border:none;
        font-size: 12px;
        font-family:Arial, Helvetica, verdana, sans-serif, tahoma;
        padding:10px;
    }
    .table1NewExpensesNew,tr{
        border-bottom: solid 1px solid;
    }

    .table1NewExpensesNew tr th:nth-child(4){
        text-align: left;
    }

    .table1NewExpensesNew tr td:nth-child(4){
        text-align: left;
		padding-left:5px;
    }

    .table1NewExpensesNew tr td:nth-child(4){
        text-align: right;
    }
    .table1NewExpensesNew tr td:nth-child(5){
        text-align: right;
		padding-left:5px;
    }

    .table1NewExpensesNew tr th:nth-child(5){
        text-align: left;
		padding-left:5px;
    }
    .table1NewExpensesNew a{
        text-align: left;
        font-size: 12px;
        font-family: calibri;
        color: blue;
        font-weight: normal;
        text-decoration: none;
    }
    .table1NewExpensesNew a:hover{
        text-align: left;
        font-size: 12px;
        font-family: calibri;
        color: blue;
        font-weight: normal;
        text-decoration: underline;
    }
    .table1NewExpensesNew tr:HOVER{
        background-color:#E8E8E8;
    }	
    .no-bg{
        border-bottom: 1px solid c8c8c8;
    }
    .expensetableNewNew{
        font-family: verdana;
        font-weight: normal;
        font-size: 12px;
        color: #000000
    }
    .expensetableNewNew tr td{
        margin-left: 520px;
        margin-top: 10px;
        font-family:Verdana;
        font-weight:bold;
        font-size:12px;
        color: #000000;
    }
    .particularBox{
        /* position: absolute; */
        width: 246px;
        height: 90px;
        margin-left: 15px;
        background-color: white;
        border-color: #C8C8C8;
        font-size: 11px;
        font-family:Verdana;
        padding-left: 5px;
        padding-top: 5px;
        border: 1px solid #C8C8C8;
        max-width: 246px;
        max-height: 90px;
        margin-top:15px;
    }
    .expensetableNewNew input [type="text"]{
        font-family: verdana;
        font-style: normal;
        font-size: 12px;
        margin-left: 23px;
        width: 270px;
        height: 25px;
        background-color: white;
        border: 1px solid #C8C8C8;
    }
    .expenseText{
        margin-left: 15px;
        width: 246px;
        padding: 5px;
        height: 27px;
        font-size:11px;
        font-family:Verdana;
        margin-top:15px;
    }
    .expenseText2{
        margin-left: 15px;
        width: 100px;
        padding: 5px;
        height: 27px;
        font-size:12px;
        font-family:verdana;
        margin-top:8px;
    }
    .a{
        background-image: url('<?= URL ?>public/images/add1.png');
        background-repeat: no-repeat;
        width: 18px;
        height: 22px;
        font-style: italic;
        font-size: 11px;
        font-family: Calibri;
        border: none;
        background:white;
    }
    .a:hover, .a-hover{
        cursor: pointer;
        background-image: url('<?= URL ?>public/images/addNew.png');
    }
    .adel{
        /*  margin-left: 22px;
         position: absolute;
         margin-top: -10px; */
    }
    .del{
        background-repeat: no-repeat;
        width: 15px;
        height: 22px;
        font-style: italic;
        font-size: 11px;
        font-family: Calibri;
        border: none;
        background: white;
    }
    .del:hover, .del-hover{
        cursor: pointer;
        background-image: url('<?= URL ?>public/images/del1New.png');
    }
    .selectNewExp{
        width: 100%;
        border: none;
        height: 100%;
    }
    .neg{
    }
    .table1NewExpensesNew select{
		/* width:120px; */
        /* height: 21px; */
        max-width:100%;
        font-family: verdana;
        font-style: normal;
        font-size: 11px;
        height: 100%;
		width:100%;
        border: none;
        /* background-image: url('<?= URL ?>public/images/dropSelect.png');
        background-repeat:no-repeat;
        background-size:191px 21px;
        -webkit-appearance: none; */

    }
    input[name="amount[]"]{
        text-align: right;
    }
    .reverseExpense{
        width: 87px;
        margin-top: 15px;
        height: 28px;
        border-radius: 5px;
        border: none;
        outline-style: none;
        cursor: pointer;
    }

    .inputAddline{
        cursor: pointer;
        border-radius: 5px;
        border: none;
        width:87;
        height:28;
        background-image: url('<?= URL ?>public/images/addLine.png');
        background-repeat: no-repeat;
        background-size: 100% 100%;
        outline-style:none;
    }
    .addlinediv{
        /* margin-top: 18px; */
        margin-left: 24px;
    }
    .tbleExpense{
        margin-left: 25;
        margin-top: 13px;
    }
    .borderbelownew{
        border-bottom:solid 1px #c8c8c8;
    }
	.loadingHolder{
		margin-top:15%;
		margin-left:45%;
	}
	.loadingimg{
		width:140px;
		height:140px;
	}
	.createAll{
		width: 210px;
		height: 32px;
		border: none;
		background-image:url('<?= URL ?>public/images/reButton.png');
		background-repeat:no-repeat;
		background-position:left;
		cursor: pointer;
		border-radius:5px;
		outline-style:none;
	}
</style>

<?php
$getPayable = $this->getPayable;
$task = "addexpense";
$info = $this->orgInfo;

if ($getPayable->status == 'open' && $getPayable->id != '') {
    $task = 'updateReceipt';
} elseif ($getPayable->status == 'posted') {
    $task = 'reverseReceipt';
} elseif ($getPayable->status == 'reversed') {
    $task = 'reversedReceipt';
}
?>
<title>
	ALL PAYABLES
</title>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<div class="invoiceHolderExpense">
    <div id="news" style="<?= $getPayable->status == 'posted' ? 'float:left' :''?>">
        <label class="headTextExpense allexp headings">	<?php
            if ($task == 'updateReceipt') {
                echo 'UPDATE';
            } elseif ($task == 'reversedReceipt') {
                echo 'REVERSED';
            } elseif ($task == 'reverseReceipt') {
                echo 'POSTED';
            } else {
                echo 'NEW';
            }
            ?> BILL PAYABLE
		</label>
		<?php if ($getPayable->status == 'posted' || $getPayable->status == 'reversed'){
		?>
			<div style="float:right;margin-right:83px;">
				<a href="<?= URL ?>newBillPayable">	
					<input type="button" class="createAll buttonslarge" value="RECORD BILL PAYABLE">
				</a>
			</div>
		<?php }
			
			// print_r($vendor);
		?>
    </div>
	
	<div style="clear:both;"></div>
    <form method="post" action="" class="form1NExpense" id="form">
        <div id="containerNExp" style="float:left;">
            <table class="tbleExpense">
                <tr class="cus">
                    <td class = "vendor" style="border:none;">Vendor Name:</td>
                    <td style="border:none;">
                        <select class="sc vendor101" name="supplierId" id="supplierId" required>
                            <option  value="" tin="" address=""></option>
                            <option value="addsupplier" class="addVendorOption">[Add Vendor]</option>
                            <?php
                            
                            // $vendor = DAOFactory::getTblSupplierDAO()->queryByOrgId(Session::getSession('orgid'));
							$vendor = TblSupplierMySqlExtDAO::getSupplierOrderList(Session::getSession('orgid'));

                            foreach ($vendor as $item) {
                                if ($item->activeAccount == 'yes') {
                                    ?>
                                    <option currency="<?= $item->currencyId ?>" value="<?php echo $item->id ?>" tin="<?= ucwords($item->tin) ?>" address="<?= $item->address ?>"
                                    <?= $item->id == $this->getPayable->supplierId ? 'selected="selected"' : ''; ?> 
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
						<span style="color:red">*</span>
                    </td>
                </tr>
				<tr class="cus">
					<td class="addSample" style="border:none;">TIN:</td>
					<td style="border:none;">
						<input type="text" class="sc tinexp" style="margin-top:5px;" name="tin" id="tin" readonly>
					</td>
				</tr>
                <tr class="cus">
                    <td class="addSample" style="border:none;"><div style="margin-top:-30px;">Address:</div></td>
                    <td style="border:none;">
                        <textarea class="add" name="address" id="address" readonly tabindex="-1"></textarea>
                    </td>
                </tr>


                <tr class="wtHolder 
                <?= $this->getPayable->ewt == 0 || $this->getPayable->ewt == '' ? 'hidden' : '' ?>
                    ">

                    <td class="addSample" style="border:none;">Withholding Tax:</td>
                    <td style="border:none;">
                        <select name="ewt" class="sc" STYLE="margin-top:5px;">
                            <option value="5" class="forRental" <?= $this->getPayable->ewt == '5' ? ' selected="selected" ' : '' ?>>5%</option>
                            <option value="10" class="notForRental" <?= $this->getPayable->ewt == '10' ? ' selected="selected" ' : '' ?>>10%</option>
                            <option value="15" class="notForRental" <?= $this->getPayable->ewt == '15' ? ' selected="selected" ' : '' ?>>15%</option>
                            <option value="0" class="hidden" 
                                    <?= $this->getPayable->ewt == '0' || $this->getPayable->ewt == '' ? ' selected="selected" ' : '' ?>>0</option>
                        </select>
                    </td>
                </tr>
                <tr>
                </tr>
                <tr>
                    <td style="padding-top:100px;border:none;" colspan="2">
                        <label class="iovinvoice" for="inclusiveOfVat">Inclusive VAT</label>
						 <input type="checkbox" class="iovinvoice" id="inclusiveOfVat" name="inclusiveOfVat" style="margin-left: 6px;margin-top:2px;position:absolute;" 
                               <?= $this->getPayable->inclusiveOfVat == 'yes' || $this->getPayable->inclusiveOfVat == '' ? 'checked' : '' ?>>
                    </td>
                    <td style="padding-top:30px;border:none;">
                       
                    </td>
                </tr>	
				<?php
				/* 
					if($info->typeOfTax == "percentage") {
				?>
				 <tr>
                    <td colspan="2" style="border:none;"> 
						<!--<label for="includeInputTax"> Include input tax as expense</label>
                        <input type="checkbox" id="includeInputTax" name="includeInputTax" style="margin-left: 6px;margin-top:2px;position:absolute;" 
						<?= $this->getPayable->includeInputTax == 'yes' || $this->getPayable->includeInputTax == '' ? 'checked' : '' ?>>-->
							<label for="includeInputTax"> Include input tax as expense</label>
							<input type="radio" id="includeInputTax" name="includeInputTax" style="" value="yes" 
								<?= $this->getPayable->includeInputTax == 'yes' ? 'checked' : '' ?>> 
							<label>Yes</label>
							
							<input type="radio" id="includeInputTax1" name="includeInputTax" style="" value="no" 
								<?= $this->getPayable->includeInputTax == 'no' ? 'checked' : '' ?>> 
							<label>No</label>
						
                    </td>
                </tr>
				<?php 
					} else {
						 */
				?>
					<input type="checkbox" id="includeInputTax" name="includeInputTax" class="hidden" value="no" checked="checked" /> 
				<script>
					$('input[name="includeInputTax"]').prop('checked',true);
				</script>
				<?php
					// }
				?>				
            </table>			
        </div>			
        <div style="float:right;margin-right:25px;">			
            <table class="expensetableNewNew">		
                <tr class="cus">
                    <td style="padding-top:15px;border:none;">Bill Payable No.:</td>	
                    <td style="border:none;">
                        <input type="text" style="background:#c8c8c8;border:none;" class="expenseText" name="payableNumber" required readonly
                               value="<?= $this->getPayable->payableNumber ?>">
                    </td>
                </tr>

                <tr class="cus">
                    <td style="padding-top: 15px;border:none;">Date Issued:</td>
                    <td style="border:none;"><input type="text" class="expenseText" name="dateIssued" id="di"
                               value="<?= $this->getPayable->dateIssued == '' || $this->getPayable->id == '' ? date('m/d/Y') : date('m/d/Y', strtotime($this->getPayable->dateIssued ))?>">
						<span style="color:red">*</span>
					</td>
                </tr>
				<tr class="cus">
                    <td style="padding-top: 15px;border:none;">Date Created:</td>
                    <td style="border:none;"><input type="text" class="expenseText" name="dateCreated" id="di" style="background:#c8c8c8;border:none;" disabled 
                               value="<?= $this->getPayable->dateCreated == '' || $this->getPayable->id == '' ? date('m/d/Y') : date('m/d/Y', strtotime($this->getPayable->dateCreated)) ?>">
                    </td>
                </tr>

                <tr class="cus">
                    <td style="padding-top: 15px;border:none;">Ref. No.:</td>
                    <td style="border:none;"><input type="text" class="expenseText" name="refNum" 
                               value="<?= $this->getPayable->refNum ?>" maxlength="11"></td>
                </tr>

                <tr class="cus hidden">
                    <td style="padding-top: 15px;border:none;">Discount:</td>
                    <td style="border:none;"><input type="text" class="expenseText isNumeric" name="discount"
                               value="<?= $this->getPayable->discount ?>" maxlength="5"> <span>%</span></td>
                </tr>

                <tr class="cus">
                    <td style="padding-top: 15px;border:none;"><div style="margin-top:-38px;">Remarks:</div></td>
                    <td style="border:none;"><textarea class="particularBox" name="particular"><?= $this->getPayable->remarks ?></textarea></td>
                </tr>

            </table>

        </div>	
        <div style="clear:both;"></div>
        <div style="height:30px;"></div>
        <table class="table1NewExpensesNew">

            <tr class="tablet">
                <th class="neg" style="border:none;"></th>
                <th width= "" style="border:none;">Account Name</th>
                <th width="" style="border:none;">Particulars	</th>
                <th width="" style="border:none;">Vat</th>
				<th width="" style="border:none;">WHT</th>
                <th style="text-align:right;border:none;">Amount</th>
                <th class="neg" style="border:none;"></th>
            </tr>
            <tbody>
                <?php if (!$this->getPayableLine) { ?>
                    <tr class="no-bg borderbelownew">
                        <td class="neg" style="border:none;"></td>
                        <td class="" style="border:none;">
                            <select name="coaId[]" class="selectNewExp" style="" required>
                                <option value="">--Select--</option>
                                <?php
                                $userCoa = $this->userCoa;
                                if (isset($userCoa) && !empty($userCoa)) {
                                    foreach ($userCoa as $each) {
                                        // if ($each->accountType == 'expense') {
                                        echo '<option value="' . $each->id . '"
												 accountNum="' . $each->accountNum . '" >
												' . $each->accountNum . ' - ' . $each->accontName . '</option>';
                                        // }
                                    }
                                }
                                ?>
                            </select>
                        </td>
                        <td class="" style="border:none;"><input type="text" name="memo[]" style=""/></td>
                        <td style="border:none;">
                            <select  class="vatValue" style="" name="vat[]" required>
                                <?php
                                $vat = $this->getVat;
                                if (isset($vat) && !empty($vat)) {
                                    foreach ($vat as $each) {
                                        echo '<option value="' . $each->id . '" rate="' . $each->rate . '" 
											title="' . $each->description . '" >
											' . $each->taxCode . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </td>
						<td class=""style="border:none;padding: 0px 1px 0px 1px;">
							<select name="wht[]">
								<option value="0">--SELECT--</option>
								<option value="0">0%</option>
								<option value="1">1%</option>
								<option value="2">2%</option>
								<option value="5">5%</option>
								<option value="10">10%</option>
								<option value="15">15%</option>
								
							</select>
						</td>
                        <td class="" style="border:none;">
                            <input type="text" name="amount[]" class="isNumeric" required maxlength="11"  style="padding-right: 5px;">
                        </td>
                        <td class="neg" style="border:none;">
                            <div class="adel"> 
                                <?php if ($this->getPayable->status != 'posted' || 'reversed'): ?>
                                    <input type="button" name="add"  class="a addtask" id="addtask">
                                <?php endif; ?>
                            </div>
                        </td>
                    </tr>
                    <?php
                } else {
                    foreach ($this->getPayableLine as $ln) {
                        ?>

                        <tr class="no-bg borderbelownew">
                            <td class="neg" style="border:none;">
                                <input type="button" name="delete"  class="del delitem" onclick="deleteRow(this)">
                            </td>
                            <td class="" style="border:none;">
                                <select name="coaId[]" class="selectNewExp" required>
                                    <?php
                                    $userCoa = $this->userCoa;
                                    if (isset($userCoa) && !empty($userCoa)) {
                                        foreach ($userCoa as $each) {
                                            // if ($each->accountType == 'expense') {
                                            echo '<option value="' . $each->id . '"
												' . ($each->id == $ln->coaId ? 'selected="selected"' : '') . '
											accountNum="' . $each->accountNum . '" >
												' . $each->accountNum . ' - ' . $each->accontName . '</option>';
                                            // }
                                        }
                                    }
                                    ?>
                                </select>
                            </td>
                            <td class="" style="border:none;"><input type="text" name="memo[]" value="<?= $ln->description ?>" maxlength="100"/></td>
                            <td style="border:none;">
                                <select name="vat[]" required>
                                    <?php
                                    $vat = $this->getVat;
                                    if (isset($vat) && !empty($vat)) {
                                        foreach ($vat as $each) {
                                            echo '<option value="' . $each->id . '" rate="' . $each->rate . '" 
											' . ($each->id == $ln->vatId ? 'selected="selected"' : '') . ' 
											title="' . $each->description . '" >
											' . $each->taxCode . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </td>
							<td class=""style="border:none;padding: 0px 1px 0px 1px;">
								<select name="wht[]">
									<option value="0" <?= $ln->wht == 0 ? ' selected ' : '' ?> >--SELECT--</option>
									<option value="0" <?= $ln->wht == 0 ? ' selected ' : '' ?> >0%</option>
									<option value="1" <?= $ln->wht == 1 ? ' selected ' : '' ?> >1%</option>
									<option value="2" <?= $ln->wht == 2 ? ' selected ' : '' ?> >2%</option>
									<option value="5" <?= $ln->wht == 5 ? ' selected ' : '' ?> >5%</option>
									<option value="10" <?= $ln->wht == 10 ? ' selected ' : '' ?> >10%</option>
									<option value="15" <?= $ln->wht == 15 ? ' selected ' : '' ?> >15%</option>
									
								</select>
							</td>
                            <td class="" style="border:none;"><input type="text" style="padding-right: 5px;" value="<?= Controller::getFloat($ln->netAmount) ?>"name="amount[]" class="isNumeric" required maxlength="11" ></td>
                            <td class="neg" style="border:none;">
                                <div class="adel">
                                    <?php if ($this->getPayable->status != 'posted'): ?>
                                        <input type="button" name="add"  class="a addtask" id="addtask">
                                    <?php endif; ?>	
                                </div>
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>

        <?php if ($this->getPayable->status == 'open' || $this->getPayable->status == '') { ?>
            <div class="addlinediv">
                <input type="button" name="size" class="inputAddline addsavebuttonbody" id="addtask" <?php //echo $invoicestat2    ?> value="ADD LINE"> 
            </div>
        <?php } ?>

        <table class="table3Expense">
            <tr class="expensesAmount">
                <td style="padding:5px;border:none;">Purchase Amount:</td>
                <td class="amountNewExpense " style="border:none;">
                    <input type="text" class="isFloat totalAmount" name="totalAmount" readonly
                           value="<?= Controller::getFloat($this->getPayableAmount->subTotalAmount) ?>"/>
                </td>
            </tr>

            <tr class="vtr" style="border-bottom:none;">
                <td style="padding:5px;border:none;">VAT:</td>
                <td class="amountNewExpense " style="border:none;">
                    <input type="text" class="isFloat vatAmount" name="vatAmount" readonly
                           value="<?= Controller::getFloat($this->getPayableAmount->vatAmount) ?>"/>
                </td>
            </tr>
            <?php
            $totalVATPurchase = $this->getPayableAmount->vatAmount + $this->getPayableAmount->subTotalAmount;
            ?>
            <tr class="vtr" style="border-bottom:none;">
                <td style="padding:5px;border:none;">Total VAT Purchase:</td>
                <td class="amountNewExpense " style="border:none;">
                    <input type="text" class="isFloat vatAmountPurchase" name="vatAmountPurchase" readonly
                           value="<?= Controller::getFloat($totalVATPurchase) ?>"/>
                </td>
            </tr>
            <tr class="vtr hidden">
                <td style="padding:5px;border:none;">Discount Amount:</td>
                <td class="amountNewExpense " style="border:none;">
                    <input type="text" class="isFloat discountAmount" name="discountAmount" readonly
                           value="<?= Controller::getFloat($this->getPayableAmount->discountAmount) ?>"/>
                </td>
            </tr>

            <tr class="vtr">
                <td style="padding:5px;border:none;">EWT:</td>
                <td class="amountNewExpense " style="border:none;">
                    <input type="text" class="isFloat ewtAmountTotal" name="ewtAmount" readonly
                           value="<?= Controller::getFloat($this->getPayableAmount->ewtAmount) ?>"/>
                </td>
            </tr>

            <tr class="gtotal">
                <td style="padding:5px;border:none;" class="gt">Total Payable:</td>
                <td class="amountNewExpense " id="gt" style="border:none;">
                    <input type="text" class="isFloat grandTotal" name="grandTotal" readonly
                           value="<?= Controller::getFloat($this->getPayableAmount->grandTotal) ?>" style="background:none;color:#fff; font-weight:bold;"/>
                </td>
            </tr>
        </table>
        <div>
        </div>

        <div class="buttonExpenses">
            <input class="bn addsavebuttonbody" type="submit" name="save" value="SAVE">
            <input class="bnP postExpense addsavebuttonbody" type="button" name="post" value="POST">
            <input type="hidden" name="task" value="<?php echo $task ?>" />
        </div>
        <div class="buttonReverse hidden">
            <input type="button" name="reverse" value="REVERSE" class="reverseExpense addsavebuttonbody">
        </div>
    </form>


</div>
<div class="popBack hidden"></div>

<script>
    $(function() {
		$("#di, .dd").datepicker(
					{ 
						dateFormat: 'mm/dd/yy'
					}

			);
        $('.delitem').first().remove();

        valValue = $('.vatValue option:selected').html();
        if (valValue == 'Vatable') {
            $('.iovinvoice').addClass('hidden');
        }

        $('.vatValue').change(function() {
            valVat = $('.vatValue option:selected').html();

            if (valVat == 'Vatable') {
                $('.iovinvoice').removeClass('hidden');
            } else {
                $('.iovinvoice').addClass('hidden');
            }
        });

    });

    $(function() {
        if ('<?= Session::getSession('status') ?>' == 'posted' && '' != '<?= $this->getPayable->id ?>') {
	<?php
	Session::setSession('status', false);
	?>
			$.post(URL + 'expenses/printPreviewPayable', {'id': '<?= $this->getPayable->id ?>'})
				.done(function(returnData) {
					$('.popBack').html(returnData);
					$('.popBack').removeClass('hidden');
					$('body').css('overflow', 'hidden');
					$('.xButton').click(function() {
						$('.popBack').addClass('hidden');
						$('.popBack').html('');
						$('body').css('overflow', 'auto');
						// $('.chk').removeAttr('checked');
					});
				})
				.fail(function() {
					alert('Connection Error!');
			});
        }

    });

    codeRental = '6000-005';
    codeRental2 = '6001-021';
    codeProfessionalFee = '6001-020';
    codeMngtCF = '6001-016';

    eventLoader();
    var returnurl = "expense";
    var allowWithHolding = false;
    var allowWithHoldingSelect = true;

    function eventLoader()
    {
        $('.table1NewExpensesNew').find('tr').mouseover(function() {
            $(this).find('#addtask').addClass('a-hover');
            $(this).find('.del').addClass('del-hover');
        });

        $('.table1NewExpensesNew').find('tr').mouseout(function() {
            $(this).find('#addtask').removeClass('a-hover');
            $(this).find('.del').removeClass('del-hover');
        });

    }

    function deleteRow(btn) {
        var row = btn.parentNode.parentNode;
        row.parentNode.removeChild(row);
		computeAmount();
    }

    $(function() {
        $('.newVendorPhoneInput').change(function() {
            contents = $(this).find('option:selected').html();
            // alert(contents);
            if (contents == 'PHP') {
                $('.rateHolder').addClass('hidden');
                $('input[name="phpRate"]').val('0.00');
            } else if (contents == '') {
                $('.rateHolder').addClass('hidden');
                $('input[name="phpRate"]').val('0.00');
            } else {

                $('.rateHolder').removeClass('hidden');
            }
        });

		
        $('#supplierId').change(function() {
            if ($(this).val() == 'addsupplier') {
                $.post(URL + 'expenses/newvendor', {returnurl: 'expense'})
                    .done(function(returnData) {
						$('.popBack').html(returnData);
						$('.popBack').removeClass('hidden');
						$('body').css('overflow', 'auto');
						// $('input[name="trig"]').val('ajaxLoad');
						$('.vendor101').addClass('objSelected');
						
						$('.closeNewVendor').click(function() {
							if (confirm('Are you sure, you want to leave this page without saving?')) {
								$('#supplierId').val('');
								$('#supplierId').change();
								$('.popBack').addClass('hidden');
								$('.popBack').html('');
							}
						});
					})
                        .fail(function() {
                            alert('Connection Error!');
                        });
            } else if ($(this).val() != '') {
                address = $('select[name="supplierId"] option:selected').attr('address');
				tin = $('select[name="supplierId"] option:selected').attr('tin');
                $('textarea[name="address"]').val(address);
				$('input[name="tin"]').val(tin);
				//alert(tin);
            } /*  else {
                $('textarea[name="address"]').val('');
            } */
        });

        $('.sc').change(function() {
            // currencyId = $(this).find('option:selected').attr('currency');

            // $('select[name="currencyId"]').val(currencyId);
            // $('.newVendorPhoneInput').change();



            computeAmount();
        });

        $(document).on("click", "#addtask", function() {
            $.ajaxSetup({async: false});
            $.post("<?= URL ?>expenses/payableLine",
                    function(result) {
                        $('.table1NewExpensesNew > tbody:last').append(result);
                        eventLoader();
                        computeAmount();


                        $('#inclusiveOfVat, select[name="vat[]"], select[name="wht[]"], #includeInputTax').change(function() {
                            computeAmount();
                        });

                        $('input[name="discount"], input[name="amount[]"]').keyup(function() {
                            computeAmount();
                        });

                    });
            $.ajaxSetup({async: true});

            $(".selectNewExp").change(function() {
                value = $(this).val();
                code = $(this).find('option:selected').attr('accountNum');
                allowWithHolding = false;
                $('.wtHolder').addClass('hidden');
                $('select[name="ewt"]').val(0);
                // if(allowWithHoldingSelect){
                if (code == codeRental || code == codeRental2) {
                    $('.wtHolder').removeClass('hidden');
                    $('select[name="ewt"]').val(5);
                    $('.forRental').removeClass('hidden');
                    $('.notForRental').addClass('hidden');
                    allowWithHolding = true;
                } else if (code == codeProfessionalFee) {
                    $('.wtHolder').removeClass('hidden');
                    $('select[name="ewt"]').val(10);
                    allowWithHolding = true;
                    $('.forRental').addClass('hidden');
                    $('.notForRental').removeClass('hidden');
                } else if (code == codeMngtCF) {
                    $('.wtHolder').removeClass('hidden');
                    $('select[name="ewt"]').val(10);
                    allowWithHolding = true;
                    $('.forRental').addClass('hidden');
                    $('.notForRental').removeClass('hidden');
                }
                computeAmount();
                // }
            });
        });

        $('#inclusiveOfVat, select[name="vat[]"], select[name="wht[]"], #includeInputTax').change(function() {
            computeAmount();
        });

        $('input[name="discount"], input[name="amount[]"]').keyup(function() {
            computeAmount();
        });
        var type = false;
        $('.postExpense').click(function() {
            allowWithHolding = false;
            obj = false;
            count = 0;
            $('.selectNewExp').each(function() {
                code = $(this).find('option:selected').attr('accountNum');

                if (code == codeRental || code == codeRental2) {
                    $('.wtHolder').removeClass('hidden');
                    allowWithHolding = true;
                    obj = this;
                } else if (code == codeProfessionalFee) {
                    $('.wtHolder').removeClass('hidden');
                    allowWithHolding = true;
                    obj = this;
                } else if (code == codeMngtCF) {
                    $('.wtHolder').removeClass('hidden');
                    allowWithHolding = true;
                    obj = this;
                }
            });

            if (obj && count > 1) {
                alert('Account is not allowed for multiple selection.');
                return false;
            }
            type = true;
            count = 0;
            myThis = '';
            $('input[required]').each(function() {
                if ($(this).val() == '') {
                    myThis = $(this);
                    count++;
                }
            })
            $('select[required]').each(function() {
                if ($(this).val() == '') {
                    myThis = $(this);
                    count++;
                }
            })
			//for input tax
			if (typeof $('input[name="includeInputTax"]:checked').val() == 'undefined') {
				alert('Include input tax as expense is required');
				return false;
			}
			
			
            if (count == 0) {
                confirmation = confirm('Do you want to post this bill payable?');
                if (confirmation) {
					
		<?php if ($this->tin) { ?>
               /*  $.post(URL + 'invoice/getInfoForm')
                        .done(function(returnData) {
                            $('.popBack').html(returnData);
                            $('.popBack').removeClass('hidden');
                            $('.seconds').show();
                            $('body').css('overflow', 'hidden');
                            
                            $('.company-form').submit(function() {
                                if ($('.company-form input[name="tinNum"]').val() != '') {
                                    $.post(URL + 'setting/updateCompany', $('.company-form').serialize())
                                            .done(function(returns) {
                                                if (returns == 0) {
                                                    // alert('done');
    //                                                    saveBilling();
                                                    save(true);
													$('body').css('overflow', 'hidden');
													$('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
													$('.popBack').removeClass('hidden');
                                                } else {
                                                    alert(returns);
                                                    location.reload();
                                                }
                                            })
                                            .fail(function() {
                                                location.reload();
                                            });
                                } else {
                                    alert('Pls fill-up the required feilds.');
                                    $('.company-form input[name="tinNum"]').focus();
                                }
                                return false;
                            });
                        }); */
				$.post(URL + 'invoice/getInfoForm')
                        .done(function(returnData) {
                            $('.popBack').html(returnData);
                            $('.popBack').removeClass('hidden');
							$('.popBack').css('overflow', 'auto');
							$('.top').addClass('hidden');
							
                            $('.footerHolderNew').addClass('hidden');
                            $('.tableCompany22').addClass('hidden');
                            $('.tableCompany222').addClass('hidden');
                            $('body').css('overflow', 'hidden');
                            $('.company-form').submit(function() {
                                if ($('.company-form input[name="tinNum"]').val() != '') {
                                    $.post(URL + 'invoice/setCompany', $('.company-form').serialize())
                                            .done(function(returns) {
                                                if (returns == 0) {
                                                    // alert('done');
    //                                                    saveBilling();
                                                    save(true);
													$('body').css('overflow', 'hidden');
													$('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
													$('.popBack').removeClass('hidden');
                                                } else {
                                                    alert(returns);
                                                    location.reload();
                                                }
                                            })
                                            .fail(function() {
                                                location.reload();
                                            });
                                } else {
                                    alert('Pls fill-up the required feilds.');
                                    $('.company-form input[name="tinNum"]').focus();
                                }
                                return false;
                            });
                        });
<?php } else { ?>
				
                save(true);
				$('body').css('overflow', 'hidden');
				$('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
				$('.popBack').removeClass('hidden');
<?php } ?>
                    /* save(true); */
                }

            } else {
                alert('Unable to save, please fill-up required items');
                $(myThis).focus();
            }
        });
        var type = false;

//        $('form').submit(function() {
//				confirmation = confirm('Do you want to record this Expense/s?');
//				if (confirmation) {
//					save(false);
//					
//				}
//            return false;
//        });
        $('#form').submit(function() {
			conSubmit = confirm("Are you sure you want to save the Expense's");
			if(!conSubmit){
				return false;
			}
            stat = false;
            $('.netAmountLine').each(function() {
                if (getInt($(this).val()) == 0) {
                    stat = true;
                    return false;
//                    break;
                }
            });
			if (typeof $('input[name="includeInputTax"]:checked').val() == 'undefined') {
				alert('Include input tax as expense is required');
				return false;
			}
            if (stat) {
                alert('Net amount lines should not be equal to 0');
                return false;
            }
				$('body').css('overflow', 'hidden');
				$('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
				$('.popBack').removeClass('hidden');			
			
		<?php if ($this->tin) { ?>
                /* $.post(URL + 'invoice/getInfoForm')
                        .done(function(returnData) {
                            $('.popBack').html(returnData);
                            $('.popBack').removeClass('hidden');
                            $('.seconds').show();
                            $('body').css('overflow', 'hidden');
                            
                            $('.company-form').submit(function() {
                                if ($('.company-form input[name="tinNum"]').val() != '') {
                                    $.post(URL + 'setting/updateCompany', $('.company-form').serialize())
                                            .done(function(returns) {
                                                if (returns == 0) {
                                                    // alert('done');
    //                                                    saveBilling();
                                                    save(false);
                                                } else {
                                                    alert(returns);
                                                    location.reload();
                                                }
                                            })
                                            .fail(function() {
                                                location.reload();
                                            });
                                } else {
                                    alert('Pls fill-up the required feilds.');
                                    $('.company-form input[name="tinNum"]').focus();
                                }
                                return false;
                            });
                        }); */
				$.post(URL + 'invoice/getInfoForm')
                        .done(function(returnData) {
                            $('.popBack').html(returnData);
                            $('.popBack').removeClass('hidden');
							$('.popBack').css('overflow', 'auto');
							$('.top').addClass('hidden');
							
                            $('.footerHolderNew').addClass('hidden');
                            $('.tableCompany22').addClass('hidden');
                            $('.tableCompany222').addClass('hidden');
                            $('body').css('overflow', 'hidden');
                            
                            $('.company-form').submit(function() {
                                if ($('.company-form input[name="tinNum"]').val() != '') {
                                    $.post(URL + 'invoice/setCompany', $('.company-form').serialize())
                                            .done(function(returns) {
                                                if (returns == 0) {
                                                    // alert('done');
    //                                                    saveBilling();
                                                    save(false);
                                                } else {
                                                    alert(returns);
                                                    location.reload();
													// location = 
                                                }
                                            })
                                            .fail(function() {
                                                location.reload();
                                            });
                                } else {
                                    alert('Pls fill-up the required feilds.');
                                    $('.company-form input[name="tinNum"]').focus();
                                }
                                return false;
                            });
                        });
<?php } else { ?>
				
                save(false);
<?php } ?>
            return false;
//            return false;
        });

        // $('.wtHolder').addClass('hidden');

        // $('.selectNewExp').change(function(){
        $(document).on("change", ".selectNewExp", function() {
			defaultWht = $('select[name="supplierId"] option:selected').attr('grossIncome');
			if(defaultWht == '<720,00'){
				defaultWht = 10;
			} else if(defaultWht == '>720,00'){
				defaultWht = 15;
			} else {
				defaultWht = '';
			}
            value = $(this).val();
            code = $(this).find('option:selected').attr('accountNum');
            allowWithHolding = false;
            $('.wtHolder').addClass('hidden');
            // $('select[name="ewt"]').val(0);
			$(this).parent('td').parent('tr').find('select[name="wht[]"]').val(0);
            if (code == codeRental || code == codeRental2) {
                // $('.wtHolder').removeClass('hidden');
				$(this).parent('td').parent('tr').find('select[name="wht[]"]').val(5);
                // $('select[name="ewt"]').val(5);
                // $('.forRental').removeClass('hidden');
                // $('.notForRental').addClass('hidden');
                // allowWithHolding = true;
            } else if (code == codeProfessionalFee) {
                // $('.wtHolder').removeClass('hidden');
                // $('select[name="ewt"]').val(defaultWht);
				$(this).parent('td').parent('tr').find('select[name="wht[]"]').val(defaultWht);
                // allowWithHolding = true;
                // $('.forRental').addClass('hidden');
                // $('.notForRental').removeClass('hidden');
            } else if (code == codeMngtCF) {
                // $('.wtHolder').removeClass('hidden');
                // $('select[name="ewt"]').val(defaultWht);
				$(this).parent('td').parent('tr').find('select[name="wht[]"]').val(defaultWht);
                // allowWithHolding = true;
                // $('.forRental').addClass('hidden');
                // $('.notForRental').removeClass('hidden');
            }
            computeAmount();
            // }
        });

        function save(type) {
            allowWithHolding = false;
            obj = false;
            count = 0;
/* 
            $('.selectNewExp').each(function() {
                code = $(this).find('option:selected').attr('accountNum');
                if (code == codeRental || code == codeRental2) {
                    $('.wtHolder').removeClass('hidden');
                    allowWithHolding = true;
                    obj = this;
                } else if (code == codeProfessionalFee) {
                    $('.wtHolder').removeClass('hidden');
                    allowWithHolding = true;
                    obj = this;
                } else if (code == codeMngtCF) {
                    $('.wtHolder').removeClass('hidden');
                    allowWithHolding = true;
                    obj = this;
                }

                count++;
            });
 */
            if (obj && count > 1) {
                alert('Account is not allowed for multiple selection.');
                return false;
            }
            ext = '';
            if (type) {
                ext = '?type=posted';
            }
            $.post(URL + 'expenses/addBillPayable' + ext, $('#form').serialize())
                    .done(function(returnData) {
                        if (returnData == 'add') {
                            // alert('asdf');
							location = URL + 'expenses/billPayable';
                            // location = URL + 'expenses/newBillPayable';
                            // location.reload();
                        } else if (returnData == 0) {
                            location = URL + 'expenses/billPayable';
                        } else {
                            alert(returnData);
							location.reload();
                        }
                    });
        }
        myCurrency = $('select[name="currencyId"]').val();
        $('#supplierId').change();
        function saveBilling() {
            status = $('input[name="status"]').val();
            // alert(status); 		// return false;
			alert('sdf');
			return false;
            $.post(URL + 'invoice/setinvoice', $('.form-new').serialize())
                    .done(function(returnData) {
                        $('body').css('overflow', 'hidden');
//                    alert(returnData);
                        if (returnData == '') {
                            location = URL + 'invoice/invoice';
                        } else if (returnData == 'add') {
                            location = URL + 'invoice/add';
                        } else {
                            if (status == '') {
                                location = URL + 'invoice/invoice';
                            } else {
                                location = URL + 'invoice/add';
                            }
                            return false;
                            $('.popBack').html($('.popBack').html() + returnData);
                            $('.popBack').removeClass('hidden');
                            $('.seconds').show();
                            $('body').css('overflow', 'hidden');
                            return false;
                            //                            alert(returnData);
                        }
                    });

        }

        checkAllowWithHoldingSelect();

        function checkAllowWithHoldingSelect() {
            count = $('.table1NewExpensesNew tr').length;
            allowWithHoldingSelect = true;
            if (count > 2) {
                allowWithHoldingSelect = false;
            }


        }

        function roundFloat(intVal) {
            intVal = parseFloat(intVal);
            intVal = Number((intVal).toFixed(2));

            array = intVal.toString().split('.');

            if (array[1]) {
                if (array[1].length == 1) {
                    array[1] += '0';
                }
            } else {
                array[1] = '00';
            }

            intVal = array.join('.');

            hasComma = commafy(intVal);

            if (hasComma[0] == '-') {
                hasComma = hasComma.toString().replace(/-/g, '');
                hasComma = '(' + hasComma + ')';
            }
            return hasComma;
        }

        function commafy(num) {
            var n = num.toString().split(".");
            n[0] = n[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            return n.join(".");
        }

        function getInt(intVal) {
            if (intVal != '') {
                intVal = intVal.toString().replace(/,/g, '');
            }
            if (intVal[0] == '(') {
                intVal = intVal.toString().replace(/\(/g, '');
                intVal = intVal.toString().replace(/\)/g, '');
                intVal *= -1;
            }
            intVal = parseFloat(intVal);
            if (isNaN(intVal)) {
                return 0;
            }
            return intVal;
        }
<?PHP
if ($this->getPayable->status == 'posted') {
    ?>
            $('form').submit(function() {	
                return false;
            });
            $('input[type="text"], input[type="date"], textarea').prop('readonly', true);
            $('input[type="checkbox"]').prop('disabled', true);
            $('select').prop('disabled', true);
            $('.buttonExpenses').remove();
            $('.buttonReverse').removeClass('hidden');
			$('#di').datepicker( "destroy" );

            $('.reverseExpense').click(function() {
                confirmReverse = confirm('Are you sure you want to reverse this bill payable?');
                if (confirmReverse) {
					$('body').css('overflow', 'hidden');
					$('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
					$('.popBack').removeClass('hidden');
                    $.post(URL + 'expenses/setReverseBillPayable', {'id': '<?= $this->getPayable->id ?>'})
                            .done(function(returnData) {
                                if (returnData == '') {
                                    location.reload();
                                } else {
                                    alert(returnData);
									$('body').css('overflow', 'auto');
									$('.popBack').addClass('hidden');
                                }
                            });
                }
                return false;
            });

<?php } ?>

<?PHP
if ($this->getPayable->status == 'reversed') {
    ?>
            $('form').submit(function() {
                return false;
            });
            $('input[type="text"], input[type="date"], textarea').prop('readonly', true);
            $('input[type="checkbox"]').prop('disabled', true);
            $('select').prop('disabled', true);
            $('.buttonExpenses').remove();
			$('#di').datepicker( "destroy" );
<?php } ?>
    });


        function computeAmount() {
            total = 0;
            vat = 0;
            // discount = $('input[name="discount"]').val();
            discount = 0;
            discountAmount = 0;

            ewtPercent = 0;
            ewtAmount = 0;

            /* $('.selectNewExp').each(function() {
                code = $(this).find('option:selected').attr('accountNum');
                if (code == codeRental || code == codeRental2 || code == codeProfessionalFee || code == codeMngtCF) {
                    ewtPercent = $('select[name="ewt"]').val();
                }
            }); */

            $('select[name="ewt"]').val('0');

            if (ewtPercent != 0) {
                $('select[name="ewt"]').val(ewtPercent);
                ewtPercent = getInt($('select[n+ame="ewt"]').val()) / 100;
            }
			if($('#includeInputTax').is(':checked') && $('#includeInputTax').val() == 'yes'){
				// alert('asdf');
				total2 = 0;
				 $('input[name="amount[]"]').each(function() {
					rate = getInt($(this).parent('td').prev('td').prev('td').find('select option:selected').attr('rate'));
					value = getInt($(this).val());// / (1 + (rate / 100));
					total += value;
					total2 += value / (1 + (rate / 100));
					// value = value - (value * ewtPercent);
					whtRate = getInt($(this).parent('td').parent('tr').find('select[name="wht[]"]').val());
					ewtAmount += (whtRate / 100) * (value / (1 + (rate / 100)));

					if (discount != 0) {

						discountAmount += value * (discount / 100);

						// vat += (value - (value * (discount / 100))) * (rate / 100);

					} else {
						// vat += (value * (rate / 100));
					}
				});
			// ewtAmount = (total2) * ewtPercent;
			}else if ($('#inclusiveOfVat').is(':checked')) {
				$('input[name="amount[]"]').each(function() {
					rate = getInt($(this).parent('td').prev('td').prev('td').find('select option:selected').attr('rate'));
					value = getInt((getInt($(this).val()) / (1 + (rate / 100))).toFixed(2));
					total += value;

					ewtRate = getInt($(this).parent('td').parent('tr').find('select[name="wht[]"]').val());
					
					ewtAmount += (ewtRate / 100) * value;
					// value = value - (value * ewtPercent);

					if (discount != 0) {

						discountAmount += value * (discount / 100);

						vat += getInt(((value - (value * (discount / 100))) * (rate / 100)).toFixed(2));

					} else {
						vat += getInt((value * (rate / 100)).toFixed(2));
					}
				});
			} else {
				$('input[name="amount[]"]').each(function() {
					rate = getInt($(this).parent('td').prev('td').prev('td').find('select option:selected').attr('rate'));
					value = getInt($(this).val());
					total += value;
					ewtRate = getInt($(this).parent('td').parent('tr').find('select[name="wht[]"]').val());
					ewtAmount += (ewtRate / 100) * value;

					// value = value - (value * ewtPercent);

					if (discount != 0) {
						discountAmount += value * (discount / 100);

						vat += getInt(((value * (rate / 100)) - ((value * (discount / 100)) * (rate / 100))).toFixed(2));

					} else {
						vat += getInt((value * (rate / 100)).toFixed(2));
					}
				});
			}
            // discountAmount = ($('select[name="ewt"]').val() / 100) * total;
            // alert(discountAmount);
            // ewtAmount = (total) * ewtPercent;
            // total = total - ewtAmount;
            $('.totalAmount').val(roundFloat(total));
            $('.vatAmount').val(roundFloat(vat));
			// alert(vat);
            $('.vatAmountPurchase').val(roundFloat((total) + vat));
            // $('input[name="discountAmount"]').val(roundFloat(discountAmount));
            $('.grandTotal').val(roundFloat(((total + vat - ewtAmount) - discountAmount)));
            $('.ewtAmountTotal').val(roundFloat(ewtAmount));
        }



</script>
<div class="scriptHolder">
</div>