<style>
    .newBegBalform {
        width: 900px;
        margin: auto !important;
        border: 2px solid #c51400;
        background-color: white;
        padding-bottom:50px;
        margin-top: 70px !important;
    }
    .titleHeader{
        font-family: agency fb2;
        color: #c51400;
        font-weight: bold;
        font-size: 30px;
        float: left;
        padding: 20px;
    }
    .closeNewBegBal{
        font-family: Verdana;
        font-size:20px;
        font-weight: bold;
        background: none;
        border: none;
        outline-style: none;
        cursor: pointer;
    }
    .tblNewBegBal{
        font-size: 12px;
        font-family: verdana;
        margin-left:40px;
        margin-top: 5px;
    }
    .tblNewBegBal td{
        padding-top:0px;
    }
    .tblNewBegBal input[type="text"], input[type="date"] {
        width: 248px;
        margin-left: 10px;
        padding: 5px;
        height: 27px;
        font-size: 12px;
        font-family: Verdana;
    }
    .tblNewSalesJournal{
        border-collapse: collapse;
        width: 90%;
        margin: auto;
        margin-top: 15px;
    }
    .tblNewSalesJournal, td {
        font-size: 12px;
        color: black;
        font-family: Verdana;
        text-align: left;
        padding: 0px !important;
    }
    .tblNewSalesJournal, th {
        background-color: #c51400;
        font-size: 12px;
        color: white;
        font-family: verdana;
        text-align: left;
        padding: 0px !important;
    }
	
	.selectSupplier, .tblNewSalesJournal input[type="text"]{
		border: none;
		outline-style: none;
    }
    .tblTrSales{
        background-color: white;
        border-bottom: solid 1px #C8C8C8;
        height: 25px;
    }
    .addLinePurchase{
        margin-top: 10px;
        cursor: pointer;
        height: 25px;
        width: 80px;
        border: none;
        outline-style: none;
        font-family: verdana;
        font-size: 13px;
        font-weight: bold;
        border-radius: 2px;
        color: rgb(230, 230, 230);
        background: linear-gradient(to bottom, rgb(216, 40, 21), rgb(167, 12, 12));
    }
    .tbltotalSales{
        font-family: Verdana;
        font-size:12px;
        font-weight: bold;
    }
    .inpTotalSales{
        outline-style:none;
        border:none;
        width:85px;
        text-align:right;
        font-weight: bold;
        font-family: Verdana;
        font-size: 12px;
    }
    .divLine{
        height: 1px;
        background: #c8c8c8;
        width: 90%;
        margin:30px auto;
    }
    .buttonSales {
        margin-right: 45px;
        margin-top: 10px;
        text-align: right;
    }
    .salesButton{
        font-family: verdana;
        font-size: 13px;
        font-weight: bold;
        border-radius: 2px;
        color: rgb(230, 230, 230);
        background: linear-gradient(to bottom, rgb(216, 40, 21), rgb(167, 12, 12));
        border: none;
        width: 87px;
        height: 28px;
        outline-style: none;
        cursor: pointer;
    }
    .selectVendor{
        width: 143px;
        -webkit-border-end: none;
        -webkit-border-before-style: none;
        -webkit-border-after-style: none;
        -webkit-border-start: none;
        outline-style: none;
    }

    .popup2{
        background: black;
        position: fixed;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        background-color: rgba(1, 1, 1, 0.3);
        overflow:auto;
    }
    .removeline, .addline{
        font-size: 16px;
        font-weight: bolder;
        color: #1439A5;
        text-decoration: none;
    }
    .selectNewExp{
        border:none!important;
        outline-style: none;
    }
</style>

<script>
    newrecord = "new";
    tin = "<?php echo $this->tin ?>";
    status = "<?php echo $this->purchase_journal->status ?>";
</script>

<div class="scriptHolder hidden"></div>
<div class="newBegBalform">
    <div class="titleHeader">NEW PURCHASE JOURNAL</div>
    <div style="float: right;"><input class="closeNewBegBal" type="button" value="x"></div>
    <div style="clear:both;"></div>

    <form method="post" class="frmPurchaseJournal">
        <div>
            <table class="tblNewBegBal">
                <tr>
                    <td style="padding:5px !important;">Purchase Journal No.:</td>
                    <td style="padding:5px !important;">
                        <input type="hidden" name="token" value="<?=$this->token;?>">
                        <input type="text" name="purchaseJournalNumber" value="<?php echo $this->purchase_journal->purchaseJournalNumber ?>" />
                    </td>
                </tr>
                <tr>
                    <td style="padding:5px !important;">Date Issued:</td>
                    <td style="padding:5px !important;"><input type="text" name="transDate" class="dd" value="<?php echo date('m/d/Y', strtotime($this->purchase_journal->transDate)) ?>" /></td>
                </tr>
            </table>
            <div style="margin-top:20px;">
                <table class="tblNewSalesJournal">
                    <!-- if SALES JOURNAL -->
                    <tr class="head_collectUseP" style="height:30px;">
                        <th></th>
                        <th style="width:19%;">Vendor Name</th>
                        <th style="width:35%;">Remarks</th>
                        <th>Reference No.</th>
                        <th style="text-align:right;width:17%;">Total Amount</th>
                        <th></th>
                    </tr>
                    <?php
                    if ($this->purchase_lines) {
                        foreach ($this->purchase_lines as $line) {
                            ?>
                            <tr class="tblTrSales">
                                <td><?php if ($this->purchase_journal->status == 'open') { ?> <a href="#" class="removeline">-</a> <?php } ?></td>                                
                                <td>
                                    <select name="supplierId[]" class="selectSupplier" required style="width: 140px;" >
                                        <option>--Select--</option>
                                        <option value="addsupplier">Add Supplier</option>
                                        <?php
                                        $vendor = TblSupplierMySqlExtDAO::getSupplierOrderList(Session::getSession('orgid'));

                                        foreach ($vendor as $item) {
                                            if ($item->activeAccount == 'yes' || $item->id == $line->supplierId) {
                                                ?>
                                                <option currency="<?= $item->currencyId ?>" value="<?php echo $item->id ?>" tin="<?= ucwords($item->tin) ?>" address="<?= $item->address ?>"
                                                <?= $item->id == $line->supplierId ? 'selected="selected"' : ''; ?> 
                                                 grossIncome="<?= $item->grossIncome ?>"> <?php echo $item->name ?>
                                                </option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                    <input type="hidden" name="purchaselineid[]" value="<?php echo $line->id ?>" />
                                </td>
                                <td>
                                    <input type="text" name="remarks[]" style="width:135px;" value="<?php echo $line->remarks ?>" required />
                                    <select name="coaId[]" class="selectNewExp hidden" style="width:140px;" >
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
                                <td><input type="text" name="refNo[]" value="<?php echo $line->refNo ?>" required /></td>
                                <td><input type="text" name="totalAmount[]" class="isNumeric" value="<?php echo $line->totalAmount ?>" required  style="text-align:right;padding-right: 5px;width: 150px;"/></td>
                                <td><?php if ($this->purchase_journal->status == 'open') { ?><a href="#" class="addline">+</a><?php } ?></td>                                
                            </tr>
                            <?php
                        }
                    } else {
                        ?>
                        <tr class="tblTrSales">
                            <td><a href="#" class="removeline">-</a></td>
                            <td>
                                <select name="supplierId[]" class="selectSupplier" required style="width: 140px;">
                                    <option>--Select--</option>
                                    <option value="addsupplier">Add Supplier</option>
                                     <?php
                                        $vendor = TblSupplierMySqlExtDAO::getSupplierOrderList(Session::getSession('orgid'));

                                        foreach ($vendor as $item) {
                                            if ($item->activeAccount == 'yes') {
                                                ?>
                                                <option currency="<?= $item->currencyId ?>" value="<?php echo $item->id ?>" tin="<?= ucwords($item->tin) ?>" address="<?= $item->address ?>"
                                                        grossIncome="<?= $item->grossIncome ?>"> <?php echo $item->name ?>
                                                </option>
                                                <?php
                                            }
                                        }
                                        ?>
                                </select>
                            </td>
                            <td>
                                <input type="text" name="remarks[]" value="" required style="width:135px;"/>
                                <select name="coaId[]" class="selectNewExp hidden" style="width:140px;" >
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
                            <td><input type="text" name="refNo[]" value="" required /></td>
                            <td><input type="text" name="totalAmount[]" value="" required style="text-align:right;padding-right:5px;width:150px;"/></td>
                            <td><a href="#" class="addline">+</a></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>

        <?php if ($this->purchase_journal->status == 'open') { ?>
        <div style="margin-left:45px;margin-top:20px;">
            <input type="button" value="ADD LINE" class="addLinePurchase" id="">
            <input type="hidden" name="" value="">
        </div>
        <?php } ?>
        
        <div style="margin: 15 0 0 38px;">
            <table class="tbltotalSales">
                <tr>
                    <td style="width:520px;text-align:right;">Total:</td>
                    <td></td>
                    <td style="width:127px;text-align:right;">Php<input type="text" name="amount" class="inpTotalSales" value="<?php echo Controller::getFloat($this->purchase_journal->amount) ?>"></td>
                </tr>
            </table>
        </div>
        <div class="divLine"></div>
        <?php if($this->purchase_journal->status == 'open'){ ?>
        <div class="buttonSales">            
            <input type="submit" class="savePurchase salesButton" value="Save">
            <input type="submit" class="postPurchase salesButton" value="Post">
            
            <input type="hidden" name="id" value="<?php echo $this->purchase_journal->id ?>" />
            <input type="hidden" name="task" value="<?php echo $this->task ?>" />
            <input type="hidden" name="status" value="" />
        </div>
        <?php } ?>
    </form>
</div>

<div class="popup2 hidden" > </div>