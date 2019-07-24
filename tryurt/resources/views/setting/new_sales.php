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
		padding:0px !important;
    }
    .tblNewSalesJournal, th {
        background-color: #c51400;
        font-size: 12px;
        color: white;
        font-family: verdana;
        text-align: left;
        padding: 0px !important;
    }
    .tblTrSales{
        background-color: white;
        border-bottom: solid 1px #C8C8C8;
        height: 25px;
    }

    .tblNewSalesJournal input[type="text"]{
        width: 100%;
		border: none;
		outline-style: none;
    }

    .addLineSales{
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
    .selectCustomer{
        width: 177px;
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
    .selectVatType{
        border:none!important;
        outline-style: none;
    }
</style>

<script>
    newrecord = "new";
    tin = "<?php echo $this->tin ?>";
    status = "<?php echo $this->sales_journal->status ?>";
</script>

<div class="newBegBalform">
    <div class="titleHeader">NEW SALES JOURNAL</div>
    <div style="float: right;"><input class="closeNewBegBal" type="button" value="x"></div>
    <div style="clear:both;"></div>

    <form method="post" class="frmSalesJournal">
        <div>
            <table class="tblNewBegBal">
                <tr>
                    <td style="padding:5px !important;">Sales Journal No.:</td>
                    <td style="padding:5px !important;">
                        <input type="hidden" name="token" value="<?=$this->token;?>">
                        <input type="text" name="salesJournalNumber" value="<?php echo $this->sales_journal->salesJournalNumber ?>" >
                    </td>
                </tr>
                <tr>
                    <td style="padding:5px !important;">Date Issued:</td>
                    <td style="padding:5px !important;"><input type="text" name="transDate" class="dd" value="<?php echo date('m/d/Y', strtotime($this->sales_journal->transDate)) ?>" required /></td>
                </tr>
                <tr>
                    <td>Transaction Type:</td>
                    <td><input type="radio" name="transType" value="service" <?php echo in_array($this->sales_journal->transType, array('service', '')) ? 'checked' : '' ?> />Service 
                        <input type="radio" name="transType" value="sales" <?php echo $this->sales_journal->transType == 'sales' ? 'checked' : '' ?>/>Sales</td>
                </tr>
            </table>
            <div style="margin-top:20px;">
                <table class="tblNewSalesJournal">
                    <!-- if SALES JOURNAL -->
                    <tr class="head_collectUseP" style="height:30px;">
                        <th></th>
                        <th style="width:19%;">Customer Name</th>
                        <th style="width:18%;">Remarks</th>
                        <th>VAT Type</th>
                        <th>Reference No.</th>
                        <th style="width:17%;text-align:right;">Total Amount</th>
                        <th></th>
                    </tr>
                    <?php
                    if ($this->sales_lines) {
                        foreach ($this->sales_lines as $line) {
                            ?>
                            <tr class="tblTrSales">
                                <td><?php if ($this->sales_journal->status == 'open') { ?> <a href="#" class="removeline">-</a> <?php } ?></td>
                                <td>
                                    <input type="hidden" name="saleslineid[]" value="<?php echo $line->id ?>" />
                                    <select name="clientId[]" class="selectCustomer" required style="width: 140px;">
                                        <option>--Select--</option>
                                        <option value="addclient">[Add Customer]</option>
                                        <?php
                                        $customer = TblClientMySqlExtDAO::queryByOrgIdOrderBy(Session::getSession('orgid'));
                                        if (count($customer) > 0) {
                                            foreach ($customer as $item) {
                                                if ($item->active == 'yes' || $item->id == $line->clientId) {
                                                    ?>
                                                    <option value='<?php echo $item->id ?>' currencyId="<?= $item->currencyId ?>" type="<?php echo $item->type ?>" <?php echo $item->id == $line->clientId ? 'selected' : '' ?> >
                                                        <?php echo /* $item->clientAccount . ' - ' . */ $item->clientName ?>
                                                    </option>
                                                    <?php
                                                }
                                            }
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td><input type="text" name="remarks[]" value="<?php echo $line->remarks ?>" required /></td>
                                <td>
                                    <select name="vatId[]" class="selectVatType">
                                        <?php
                                            foreach ($this->tax as $each){ ?>
                                        <option value="<?php echo $each->id ?>" <?php echo ($each->id == $line->vatId) ? 'selected' : '' ?>><?php echo $each->taxCode ?></option>
                                       <?php   } ?>
                                    </select>
                                </td>
                                <td><input type="text" name="refNo[]" value="<?php echo $line->refNo ?>" required /></td>
                                <td style="text-align:right;"><input type="text" name="amount[]" value="<?php echo Controller::getFloat($line->amount) ?>" class="isNumeric" required style="width:140px;text-align:right;padding-right:5px;"/></td>
                                <td><?php if ($this->sales_journal->status == 'open') { ?><a href="#" class="addline">+</a><?php } ?></td>
                            </tr>
                            <?php
                        }
                    } else {
                        ?>
                        <tr class="tblTrSales">
                            <td><a href="#" class="removeline">-</a></td>
                            <td>
                                <select name="clientId[]" class="selectCustomer" required style="width: 140px;">
                                    <option>--Select--</option>
                                    <option value="addclient">[Add Customer]</option>
                                    <?php
                                    $customer = TblClientMySqlExtDAO::queryByOrgIdOrderBy(Session::getSession('orgid'));
                                    if (count($customer) > 0) {
                                        foreach ($customer as $item) {
                                            if ($item->active == 'yes') {
                                                ?>
                                                <option value='<?php echo $item->id ?>' currencyId="<?= $item->currencyId ?>" type="<?php echo $item->type ?>" >
                                                    <?php echo /* $item->clientAccount . ' - ' . */ $item->clientName ?>
                                                </option>
                                                <?php
                                            }
                                        }
                                    }
                                    ?>
                                </select>
                            </td>
                            <td><input type="text" name="remarks[]" value="" required /></td>
                            <td>
                                    <select name="vatId[]" class="selectVatType">
                                        <?php
                                            foreach ($this->tax as $each){ ?>
                                        <option value="<?php echo $each->id ?>" ><?php echo $each->taxCode ?></option>
                                       <?php   } ?>
                                    </select>
                                </td>
                            <td><input type="text" name="refNo[]" value="" required /></td>
                            <td style="text-align:right;"><input type="text" name="amount[]" class="isNumeric" required style="width:140px;text-align:right;padding-right:5px;"/></td>
                            <td><a href="#" class="addline">+</a></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>

        <?php if ($this->sales_journal->status == 'open') { ?>
            <div style="margin-left:45px;margin-top:20px;">
                <input type="button" value="ADD LINE" class="addLineSales" id="">
            </div>
        <?php } ?>

        <div style="margin:15 0 0 38px;">
            <table class="tbltotalSales">
                <tr>
                    <td style="width:650px;text-align:right;">Total:</td>
                    <td style="width:47px;text-align:right;">Php</td>
                    <td><input type="text" name="totalAmount" class="inpTotalSales" value="<?php echo Controller::getFloat($this->sales_journal->amount) ?>"></td>
                </tr>
            </table>
        </div>
        <div class="divLine"></div>

        <?php if ($this->sales_journal->status == 'open') { ?>
            <div class="buttonSales">
                <input type="submit" class="saveSales salesButton" value="Save">
                <input type="submit" class="postSales salesButton" value="Post">

                <input type="hidden" name="id" value="<?php echo $this->sales_journal->id ?>" />
                <input type="hidden" name="task" value="<?php echo $this->task ?>" />
                <input type="hidden" name="status" value="" />
            </div>
        <?php } ?>
    </form>
</div>

<div class="popup2 hidden" > </div>