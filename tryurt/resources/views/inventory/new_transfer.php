<style>
    .popBack, .popup{
        background: black;
        position: fixed;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        background-color: rgba(1, 1, 1, 0.3);
        overflow:auto;
    }
    .popback:parent{
        overflow:hidden;
    }
    .ca_tableClient22b{
        font-family:Verdana;
        font-size:12px;
    }
    .ca_tableClient22{
        padding-top:7px;
        width:120px;
    }
    .invoiceHolderCNWClient{
        width: 100%;
        margin-top: 30px;
    }	
    .nif1Client{
        width: 870px;
        background-color: white;
        margin: auto !important;
    }
    .close1Client{
        background: transparent;
        color: black;
        border: none;
        border-radius: 2px;
        font-family: Arial black;
        font-weight: bold;
        font-size: 24px;
        right: 245px;
        top: 25px;
        outline-style: none;
        cursor: pointer;
        float: right;
        margin-right: 5px;
        margin-top: -27px;
    }
    #container_ccpClient{
        padding-right: 10px;
        padding-left: 10px;
        padding-bottom: 40px;
        width: 90%;
        margin:auto;
    }
    .divCNCBelowClient{
        float: right;
        margin-top:35px;
    }
    .saveBCNCClient{
        margin-right:5px;
        width: 100px;
        height: 28px;
        border-radius: 2px;
        border: none;
        cursor: pointer;
        outline-style:none;
    }

    .saanBCNCClient{
        width: 123px;
        height: 28px;
        border-radius: 4px;
        border: none;
        cursor: pointer;
        outline-style:none;
    }
    .table1transfer{
        float:left;
        width:50%;
    }
    .table1transfer2{
        float:right;
        width:50%;
    }
    .table1transfer input[type="text"], select{
        width: 248px !important;
        font-family:verdana;
        font-size:12px;
        padding:5px;
        margin-top:2px;
    }
    .table1transfer td{
        font-family:verdana;
        font-size:12px;
        padding-top:3px;
        padding-bottom:0px;
    }
    .table1transfer2 td{
        font-family:verdana;
        font-size:12px;
        padding-top:3px;
        padding-bottom:0px;
    }
    .table1transfer2 input[type="text"]{
        width: 248px;
        height: 27px;
        font-family:verdana;
        font-size:12px;
        padding:5px;
        margin-top:2px;
    }
    .transferselect select{
        width: 230px;
        height: 27px;
        font-family:verdana;
        font-size:12px;
        padding:5px;
    }
    .transferBlock{
        margin:auto;
        margin-top:25px;
        width:100%;
    }

    .transferBlock  input[type="text"],select{
        width : 130px;
    }

    input[name="uomId[]"]{
        width : 60px !important;
    }

    .transferBlockTable{
        margin:auto;
        width:100%;
    }
    .transferBlockTable input[type="text"],select{
        width:100%;
        border:none ;
        font-family:verdana;
        font-size:12px;
        height:25px;
        padding:5px;
    }
    .transferBlockTable tr:hover{
        background-color:#c8c8c8;
    }
    .transferBlockTable td{
        padding:0px !important;
    }
</style>


<?php
if (isset($_GET['returnurl'])) {
    Session::setSession('returnurl', $_GET['returnurl']);
}


$taskstat = 'addTransfer';

if ($this->transfer->status == 'open' && $this->transfer->id != '') {
    $taskstat = 'updatetransfer';
}
?>

<div class="jsHolder">
    <!-- pls do not remove this -->
</div>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/loading.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<script src="<?php echo URL; ?>public/js/mask.js"></script>
<script src="<?php echo URL; ?>views/inventory/js/transfer.js"></script>
<div class="invoiceHolderCNWClient">
    <form class="nif1Client boxshadow" method="post" id="newcustomerform">
        <div id="new1Client">
            <input type="button" class="close1Client" value="x">
            <p class="ni1Client">TRANSFER OF STOCKS</p>
        </div>
        <div id="container_ccpClient">
            <div>
                <table class="table1transfer">
                    <tr>
                        <td>Date Issued</td>
                        <td>
                            <input type="hidden" name="token" value="<?=$this->token;?>">
                            <input type="text" name="dateIssued" value="<?php echo date('m/d/Y', strtotime($this->transfer->dateIssued)) ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Date Created</td>
                        <td><input type="text" name="dateCreated" value="<?php echo $this->transfer->dateCreated == '0000-00-00' ? '00/00/0000' : date('m/d/Y', strtotime($this->transfer->dateCreated)) ?>" readonly></td>
                    </tr>
                    <tr>
                        <td>From Transfer:</td>
                        <td>
                            <select name="fromWarehouseId" required style="border:solid 1px #c8c8c8;">
                                <option></option>
                                <?php foreach ($this->warehouse as $item) { ?>
                                    <option value="<?php echo $item->id ?>" <?php echo $item->id == $this->transfer->fromWarehouseId ? 'selected' : '' ?>><?php echo $item->warehouseName ?></option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>To Transfer:</td>
                        <td>
                            <select name="toWarehouseId" required style="border:solid 1px #c8c8c8;">
                                <option></option>
                                <?php foreach ($this->warehouse as $item) { ?>
                                    <option value="<?php echo $item->id ?>" <?php echo $item->id == $this->transfer->toWarehouseId ? 'selected' : '' ?>><?php echo $item->warehouseName ?></option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                </table>
                <table class="table1transfer2">
                    <tr>
                        <td>Transfer Stocks No.</td>
                        <td><input type="text" name="transferNo" value="<?php echo $this->transfer->transferNo ?>"></td>
                    </tr>
                    <tr>
                        <td>Reference No.</td>
                        <td><input type="text" name="refNo" value="<?php echo $this->transfer->refNo ?>"></td>
                    </tr>
                </table>
                <div style="clear:both;"></div>
                <div class="transferBlock">
                    <?php if (count($this->transferlines) > 0) { ?>
                        <table class="transferBlockTable">
                            <thead>
                                <tr>
                                    <th width="2%"></th>
                                    <th width="20%" style="padding-left: 10px;">Item No.</th>
                                    <th width="20%">Description</th>
                                    <th width="10%" style="text-align:center">Qty</th>
                                    <th width="10%">UOM</th>
                                    <th width="18%" style="text-align:right">Amount</th>
                                    <th width="18%" style="text-align:right">Total Amount</th>
                                    <th width="2%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($this->transferlines as $transferline) { ?>
                                    <tr>
                                            <td><!--<div class="del"><input type="button" name="delete" class="del deltask"></div>--></td>
                                        <td>
                                            <select name="itemId[]" class="itemId" required style="margin-top:0px;">
                                                <option></option>
                                                <?php
                                                // $items = array();//TblItemMySqlExtDAO::getItemList(Session::getSession('orgid'));
                                                foreach ($this->itemlist as $item) {
                                                    ?>
                                                    <option value="<?php echo $item->itemId ?>" abbrv="<?php echo $item->abbreviation ?>" qty="<?php echo $item->totalQty ?>" <?php echo $item->itemId == $transferline->itemId ? 'selected' : '' ?>><?php echo $item->itemCode  ?></option>
                                                <?php } ?>
                                            </select>
                                            <input type="hidden" name="uomId[]" value="<?php echo $item->uomId ?>" class="uomId" />
                                        </td>
                                        <td><input type="text" name="itemDescription[]" class="itemDescription" value="<?php echo $transferline->itemDescription ?>" readonly /></td>
                                        <td><input type="text" name="qty[]" class="qty" style="text-align:center;" value="<?php echo $transferline->qty ?>" required /></td>
                                        <td><input type="text" class="abbreviation" value="<?php echo DAOFactory::getTblUomDAO()->load($transferline->uomId)->abbreviation ?>" readonly /></td>
                                        <td><input type="text" name="amount[]" class="amount" style="text-align:right" value="<?php echo $transferline->amount ?>" readonly /></td>
                                        <td><input type="text" name="totalAmount[]" style="text-align:right" value="<?php echo $transferline->totalAmount ?>" class="totalamount" readonly /></td>
                                        <td><div class="adel"><input type="button" name="add"  class="a addtask addtaskslines" id="addtask"></div></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    <?php } else { ?>

                        <table class="transferBlockTable">
                            <thead>
                                <tr>
                                    <th width="2%"></th>
                                    <th width="20%" style="padding-left: 10px;">Item No.</th>
                                    <th width="20%">Description</th>
                                    <th width="10%" style="text-align:center">Qty</th>
                                    <th width="10%">UOM</th>
                                    <th width="18%" style="text-align:right">Amount</th>
                                    <th width="18%" style="text-align:right;">Total Amount</th>
                                    <th width="2%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                        <td><!--<div class="del"><input type="button" name="delete" class="del deltask"></div>--></td>
                                    <td>
                                        <select name="itemId[]" class="itemId" required style="margin-top:0px;">
                                            <option></option>
                                            <?php
                                            foreach ($this->itemlist as $item) {
                                                ?>
                                                <option value="<?php echo $item->itemId ?>" abbrv="<?php echo $item->abbreviation ?>" warehouseid ="<?php echo $item->warehouseId ?>" qty="<?php echo $item->totalQty ?>"><?php echo $item->itemCode ?></option>
                                            <?php } ?>
                                        </select>
                                        <input type="hidden" name="uomId[]" class="uomId" />
                                    </td>
                                    <td><input type="text" name="itemDescription[]" class="itemDescription" readonly /></td>
                                    <td><input type="text" name="qty[]" class="qty" style="text-align:center;" required /></td>
                                    <td><input type="text" class="abbreviation" readonly /></td>
                                    <td><input type="text" name="amount[]" style="text-align:right" class="amount isNumeric" readonly /></td>
                                    <td><input type="text" name="totalAmount[]" class="totalamount" readonly style="text-align:right" /></td>
                                    <td><div class="adel"><input type="button" name="add"  class="a addtask addtaskslines" id="addtask"></div></td>
                                </tr>
                            </tbody>
                        </table>

                    <?php } ?>
                    <?php if (in_array($this->transfer->status, array('', 'open'))) { ?>
                        <div class="divCNCBelowClient">	
                            <input type="submit" value="Save" class="saveBCNCClient addsavebuttonpop">
                            <input type="submit" value="Post" class="saanBCNCClient addsavebuttonpop" id="postBtn" >  
                        </div>
                    <?php } ?>
                    <input type="hidden" name="task" value="<?php echo $taskstat ?>" />
                    <input type="hidden" name="status" value="" />
                    <input type="hidden" name="id" value="<?php echo $this->transfer->id ?>" />
                    <div style="clear:both;"></div>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="hidden popup"></div>

<?php if ($this->transfer->status == 'posted') { ?>
    <script>$('input[type="text"],select').prop('disabled', true);</script>
<?php } ?> 
