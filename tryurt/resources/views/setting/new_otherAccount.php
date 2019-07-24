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
    .tblNewGeneralJournal{
        border-collapse: collapse;
        width: 90%;
        margin: auto;
        margin-top: 15px;
    }
    .tblNewGeneralJournal, td {
        font-size: 12px;
        color: black;
        font-family: Verdana;
        text-align: left;
        padding: 5px;
    }
    .tblNewGeneralJournal, th {
        background-color: #c51400;
        font-size: 12px;
        color: white;
        font-family: verdana;
        text-align: left;
        padding: 5px;
    }
	.selectAccount, .tblNewGeneralJournal input[type="text"]{
		border: none;
		outline-style: none;
    }
    .tblTrSales{
        background-color: white;
        border-bottom: solid 1px #C8C8C8;
        height: 25px;
    }
    .addLineGeneral{
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
    .selectAccount{
        width: 135px;
        -webkit-border-end: none;
        -webkit-border-before-style: none;
        -webkit-border-after-style: none;
        -webkit-border-start: none;
        outline-style: none;
    }

/*    .frmGeneralJournal input[type="text"]{
        width: 100%;
    }*/
    
    .removeline, .addline{
        font-size: 16px;
        font-weight: bolder;
        color: #1439A5;
        text-decoration: none;
    }
</style>

<script>
    newrecord = "new";
    tin = "<?php echo $this->tin ?>";
    status = "<?php echo $this->general_journal->status ?>";
</script>

<div class="newBegBalform">
    <div class="titleHeader">NEW GENERAL JOURNAL</div>
    <div style="float: right;"><input class="closeNewBegBal" type="button" value="x"></div>
    <div style="clear:both;"></div>

    <form method="post" class="frmGeneralJournal">
        <div>
            <table class="tblNewBegBal">
                <tr>
                    <td>General Journal No.:</td>
                    <td>
                        <input type="hidden" name="token" value="<?=$this->token;?>">
                        <input type="text"  name="generalJournalNumber" value="<?php echo $this->general_journal->generalJournalNumber ?>">
                    </td>
                </tr>
                <tr>
                    <td>Date Issued:</td>
                    <td><input type="text" name="transDate" class="dd" value="<?php echo date('m/d/Y', strtotime($this->general_journal->transDate)) ?>" /></td>
                </tr>
            </table>
            <div style="margin-top:20px;">
                <table class="tblNewGeneralJournal">
                    <thead>
                        <!-- if SALES JOURNAL -->
                        <tr class="head_collectUseP" style="height:30px;">
                            <th></th>
                            <th style="width:8%;">Account Code</th>
                            <th >Account Name</th>
                            <th style="width: 8% ;text-align:right;padding-right:6px;">Debit</th>
                            <th style="text-align:right;padding-right:11px;">Credit</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        if ($this->general_lines) {
                            foreach ($this->general_lines as $line) {
                                $description = '';
                                ?>
                                <tr class="tblTrSales">
                                    <td><?php if ($this->general_journal->status == 'open') { ?> <a href="#" class="removeline">-</a> <?php } ?></td>
                                    <td style="padding:0px!important;">
                                        <select name="accountId[]" class="selectAccount" required style="width:215px;">
                                            <option>--Select--</option>
                                            <?php
                                            foreach ($this->coas as $item) {
                                                $description = $item->id == $line->accountId ? $item->accontName : $description;
                                                ?>
                                                <option value="<?php echo $item->id ?>" <?php echo $item->id == $line->accountId ? 'selected' : '' ?>
                                                        accountName="<?php echo $item->accontName ?>">
                                                    <?php echo $item->accountNum . '-' . $item->accontName ?></option>
                                            <?php } ?>
                                        </select>
                                        <input type="hidden" name="generallineid[]" value="<?php echo $line->id ?>" />
                                    </td>
                                    <td><input type="text" class="description" value="<?php echo $description ?>" readonly /></td>
                                    <td><input type="text" name="debit[]" class="isNumeric debit"  style="text-align:right;" value="<?php echo Controller::getFloat($line->debit) ?>" /></td>
                                    <td><input type="text" name="credit[]"  style="text-align:right;" class="isNumeric credit" value="<?php echo Controller::getFloat($line->credit) ?>" /></td>
                                    <td><?php if ($this->general_journal->status == 'open') { ?><a href="#" class="addline">+</a><?php } ?></td>
                                </tr>
                                <?php
                            }
                        } else {
                            for ($i = 0; $i <= 1; $i++) {
                                ?>
                                <tr class="tblTrSales">
                                    <td><a href="#" class="removeline">-</a></td>
                                    <td style="padding:0px!important;">
                                        <select name="accountId[]" class="selectAccount" required style="width:215px;">
                                            <option>--Select--</option>
                                            <?php
                                            foreach ($this->coas as $item) {
                                                ?>
                                                <option value="<?php echo $item->id ?>" accountName="<?php echo $item->accontName ?>">
                                                    <?php echo $item->accountNum . '-' . $item->accontName ?></option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                    <td><input type="text" class="description" readonly /></td>
                                    <td><input type="text" name="debit[]"  style="text-align:right;" class="isNumeric debit" /></td>
                                    <td><input type="text" name="credit[]"  style="text-align:right;" class="isNumeric credit" value="" /></td>                            
                                    <td><a href="#" class="addline">+</a></td>
                                </tr>
                            <?php
                            }
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" style="color:#fff;"><b>Total:</b></td>
                            <td><input type="text" style="text-align:right;padding-right:3px;" name="totaldebit" value="<?php echo Controller::getFloat($this->general_journal->amount) ?>" readonly /> </td>
                            <td><input type="text" style="text-align:right;padding-right:3px;" name="totalcredit" value="<?php echo Controller::getFloat($this->general_journal->amount) ?>" readonly /> </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

<?php if ($this->general_journal->status == 'open') { ?>
            <div style="margin-left:45px;margin-top:20px;">
                <input type="button" value="ADD LINE" class="addLineGeneral" id="">
                <input type="hidden" name="" value="">
            </div>
<?php } ?>

        <div style="margin:15 0 0 38px;">
            <table class="tbltotalSales">
                <tr>
                    <td style="width:650px;text-align:right;">Total:</td>
                    <td style="width:47px;text-align:right;">Php</td>
                    <td><input type="text" name="totalAmount" class="inpTotalSales" value="<?php echo Controller::getFloat($this->general_journal->amount) ?>" /></td>
                </tr>
            </table>
        </div>
        <div class="divLine"></div>
<?php if ($this->general_journal->status == 'open') { ?>

            <div class="buttonSales">
                <input type="submit" class="saveGeneral salesButton" value="Save">
                <input type="submit" class="postGeneral salesButton" value="Post">
            </div>

            <input type="hidden" name="id" value="<?php echo $this->general_journal->id ?>" />
            <input type="hidden" name="task" value="<?php echo $this->task ?>" />
            <input type="hidden" name="status" value="" />
<?php } ?>
    </form>
</div>