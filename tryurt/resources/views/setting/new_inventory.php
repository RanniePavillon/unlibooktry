<style>
    .newBegBalform {
        width: 900px;
        margin: auto !important;
        border: 2px solid #c51400;
        background-color: white;
        padding-bottom: 50px;
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
        font-size: 20px;
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
    .tblNewInventoryJournal{
        border-collapse: collapse;
        width: 90%;
        margin: auto;
        margin-top: 15px;
    }
    .tblNewInventoryJournal, td {
        font-size: 12px;
        color: black;
        font-family: Verdana;
        text-align: left;
        padding: 0px !important;
    }
    .tblNewInventoryJournal, th {
        background-color: #c51400;
        font-size: 12px;
        color: white;
        font-family: verdana;
        text-align: left;
        padding: 5px;
    }
    .tblTrSales{
        background-color: white;
        border-bottom: solid 1px #C8C8C8;
        height: 25px;
    }
    .addLineInv{
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
    .selectItem{
        width: 130px;
        -webkit-border-end: none;
        -webkit-border-before-style: none;
        -webkit-border-after-style: none;
        -webkit-border-start: none;
        outline-style: none;
    }

    .tblNewInventoryJournal input[type="text"]{
        width: 100%;
        border:none;
        outline-style:none;
    }
    select{
        border:none;
        outline-style:none;
    }
    .popup3{
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
</style>

<script>
    status = "<?php echo $this->inventory_journal->status ?>";
</script>

<div class="newBegBalform">
    <div class="titleHeader">NEW INVENTORY JOURNAL</div>
    <div style="float: right;"><input class="closeNewBegBal" type="button" value="x"></div>
    <div style="clear:both;"></div>
    
    <form method="post" class="frmInventoryJournal">
        <div>
            <table class="tblNewBegBal">
                <tr>
                    <td style="padding:5px !important;">Inventory Journal No.:</td>
                    <td style="padding:5px !important;">
                        <input type="hidden" name="token" value="<?=$this->token;?>">
                        <input type="text" name="inventoryJournalNumber" value="<?php echo $this->inventory_journal->inventoryJournalNumber ?>">
                    </td>
                </tr>
                <tr>
                    <td style="padding:5px !important;">Date Issued:</td>
                    <td style="padding:5px !important;"><input type="text" name="transDate" value="<?php echo date('m/d/Y', strtotime($this->inventory_journal->transDate)) ?>"></td>
                </tr>
            </table>
            
            <div class="tblNewBegBal"><input type="checkbox" name="begBalance" <?php echo $this->inventory_journal->beginningBalance == 'yes' ? 'checked' : '' ?> />Beginning Balance</div>
            
            <div style="margin-top:20px;">
                <table class="tblNewInventoryJournal">
                    <!-- if SALES JOURNAL -->
                    <tr class="head_collectUseP" style="height:30px;">
                        <th></th>
                        <th style="width:14%;">Item Name</th>
                        <th style="width:23%;">Remarks</th>
                        <th style="width:11%;">Warehouse</th>
                        <th style="width:11%;text-align:center;">Total Quantity</th>
                        <th style="text-align:left;">UOM</th>
                        <th style="width:11%;" class="glPostingtd">GL Posting</th>
                        <th style="width:11%;text-align:right;">Weighted Average</th>
                        <th style="width:20%;text-align:right;">Total Amount</th>
                        <th></th>
                    </tr>
                    <?php
                    if ($this->inventory_lines) {
                        foreach ($this->inventory_lines as $line) {
                            ?>
                            <tr class="tblTrSales">
                                <td><?php if ($this->inventory_journal->status == 'open') { ?> <a href="#" class="removeline">-</a> <?php } ?></td>
                                <td>
                                    <select name="itemId[]" class="selectItem" required>
                                        <option>--Select--</option>
                                        <option value="addItem">Add Item</option>
                                        <?php
                                        $items = TblItemMySqlExtDAO::getItemList(Session::getSession('orgid'));

                                        foreach ($items as $item) {
//                                            if ($item->activeAccount == 'yes' || $item->id == $line->itemId) {
                                            ?>
                                            <option value="<?php echo $item->id ?>" 
                                                    description = "<?php echo $item->description ?>" uom="<?php echo $item->uomId ?>" uprice="<?php echo $item->srp ?>" fprice="<?php echo $item->franchiseSellingPrice ?>" 
                                                    <?= $item->id == $line->itemId ? 'selected="selected"' : ''; ?> >
                                                        <?php echo $item->description ?>
                                            </option>
                                            <?php
//                                        }
                                        }
                                        ?>
                                    </select>
                                    <input type="hidden" name="inventorylineid[]" value="<?php echo $line->id ?>" />
                                </td>
                                <td><input type="text" name="remarks[]" value="<?php echo $line->remarks ?>" required /></td>
                                <td>
                                    <select name="warehouseId[]" class="warehouseId" required>
                                        <option></option>
                                        <?php
                                        if ($this->warehouse) {
                                            foreach ($this->warehouse as $whouse) {
                                                ?>
                                                <option value="<?php echo $whouse->id ?>" <?php echo $whouse->id == $line->warehouseId ? 'selected' : '' ?>><?php echo $whouse->warehouseName ?></option>
                                            <?php
                                            }
                                        }
                                        ?>
                                        <option value="addLocation">Add Warehouse</option>
                                    </select>
                                </td>
                                <td><input type="text" name="qty[]" value="<?php echo $line->qty ?>" required style="text-align:center;"/></td>
                                <td>
                                    <select name="uomId[]" class="uom" required>
                                        <option></option>
                                        <option value="addnewUom">Add UOM</option>
                                        <?php
                                        if (count($this->uom) > 0) {
                                            foreach ($this->uom as $uomlist) {
                                                ?>
                                                <option  value="<?php echo $uomlist->id ?>" <?php echo $uomlist->id == $line->uomId ? 'selected' : '' ?>><?php echo $uomlist->abbreviation ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td class="glPostingtd">
                                    <select name="glPosting[]" class="glPosting" required>
                                        <option></option>
                                        <?php
                                        if (count($this->coa) > 0) {
                                            foreach ($this->coa as $coalist) {
                                                ?>
                                                <option  value="<?php echo $coalist->id ?>" <?php echo $coalist->id == $line->glPosting ? 'selected' : '' ?>><?php echo $coalist->accontName ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td><input type="text" name="weightedAverage[]" value="<?php echo Controller::getFloat($line->weightedAverage) ?>" required style="text-align:center;"/></td>
                                <td><input type="text" name="totalAmount[]" class="isNumeric" value="<?php echo Controller::getFloat($line->totalAmount) ?>" required  style="text-align:right;padding-right:5px;" readonly /></td>
                                <td><?php if ($this->inventory_journal->status == 'open') { ?><a href="#" class="addline">+</a><?php } ?></td>
                            </tr>
                            <?php
                        }
                    } else {
                        ?>
                        <tr class="tblTrSales">
                            <td><a href="#" class="removeline">-</a></td>
                            <td>
                                <select name="itemId[]" class="selectItem itemid" required>
                                    <option>--Select--</option>
                                    <option value="addItem">Add Item</option>
                                    <?php
                                    $items = TblItemMySqlExtDAO::getItemList(Session::getSession('orgid'));

                                    foreach ($items as $item) {
                                        ?>
                                        <option value="<?php echo $item->id ?>" 
                                                description = "<?php echo $item->description ?>" uom="<?php echo $item->uomId ?>" uprice="<?php echo $item->srp ?>" fprice="<?php echo $item->franchiseSellingPrice ?>"
                                                ><?php echo $item->description ?></option>
                                                <?php
                                            }
                                            ?>
                                </select>
                            </td>
                            <td><input type="text" name="remarks[]" value="" required /></td>
                            <td>
                                <select name="warehouseId[]" class="warehouseId" required>
                                    <option></option>
                                    <?php
                                    if ($this->warehouse) {
                                        foreach ($this->warehouse as $whouse) {
                                            ?>
                                            <option value="<?php echo $whouse->id ?>"><?php echo $whouse->warehouseName ?></option>
                                        <?php
                                        }
                                    }
                                    ?>
                                    <option value="addLocation">Add Warehouse</option>
                                </select>
                            </td>
                            <td><input type="text" name="qty[]" value="" required style="text-align:center;"/></td>
                            <td>
                                <select name="uomId[]" class="uom" required >
                                    <option></option>
                                    <option value="addnewUom">Add UOM</option>
                                    <?php
                                    if (count($this->uom) > 0) {
                                        foreach ($this->uom as $uomlist) {
                                            ?>
                                            <option  value="<?php echo $uomlist->id ?>"><?php echo $uomlist->abbreviation ?></option>
                                            <?php
                                        }
                                    }
                                    ?>                                
                                </select>
                            </td>
                            <td class="glPostingtd">
                                <select name="glPosting[]" class="glPosting" required>
                                    <option></option>
                                    <?php
                                    if (count($this->coa) > 0) {
                                        foreach ($this->coa as $coalist) {
                                            ?>
                                            <option  value="<?php echo $coalist->id ?>"><?php echo $coalist->accontName ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </td>
                            <td><input type="text" name="weightedAverage[]" value="" required style="text-align:center;"/></td>
                            <td><input type="text" name="totalAmount[]" class="isNumeric" value="" required style="text-align:right;padding-right:5px;" readonly /></td>
                            <td><a href="#" class="addline">+</a></td>
                        </tr>
<?php } ?>
                </table>
            </div>
        </div>

<?php if ($this->inventory_journal->status == 'open') { ?>
            <div style="margin-left:45px;margin-top:20px;">
                <input type="button" value="ADD LINE" class="addLineInv" id="">
                <input type="hidden" name="" value="">
            </div>
<?php } ?>

        <div style="margin:15px 0 0 38px;">
            <table class="tbltotalSales">
                <tr>
                    <td style="width:650px;text-align:right;">Total:</td>
                    <td style="width:47px;text-align:right;">Php</td>
                    <td><input type="text" name="amount" class="inpTotalSales" value="<?php echo Controller::getFloat($this->inventory_journal->amount) ?>" ></td>
                </tr>
            </table>
        </div>
        <div class="divLine"></div>
<?php if ($this->inventory_journal->status == 'open') { ?>
            <div class="buttonSales">
                <input type="submit" class="saveInventory salesButton" value="Save">
                <input type="submit" class="postInventory salesButton" value="Post">
            </div>

            <input type="hidden" name="id" value="<?php echo $this->inventory_journal->id ?>" />
            <input type="hidden" name="task" value="<?php echo $this->task ?>" />
            <input type="hidden" name="status" value="" />
<?php } ?>
    </form>
</div>

<div class="popup3 hidden"></div>