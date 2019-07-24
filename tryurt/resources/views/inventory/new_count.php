<style>
    .popBack{
        background: black;
        position: fixed;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        background-color: rgba(1, 1, 1, 0.3);
        overflow:auto;
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
    .container{
        margin: auto;
    }
    .table1Enter, td{
        padding-top:3px; 
    }
    .table1header, td{
        padding-top:3px !important; 
    }
    .cmform{
        background-color: white;
        width:899px;
        margin: auto !important;
        margin-top: 70px !important;
        border: 2px solid #24b6ef;
        padding-bottom: 27px;
        margin-bottom:30px !important;
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
    }
    .formCm{
        width:90%;
        margin:auto;
    }
    .formCmtable{
        width:84%;
        margin:auto;
        font-family:verdana;
        font-size:12px;
    }
    .formCmtable input[type="text"]{
        width: 236px;
        height: 27px;
        font-family: verdana;
        font-size: 12px;
        padding: 5px;
        margin-top:3px;
    }
    .buttonContainer{
        margin-top:35px;
        text-align:right;
    }
    .buttonCm{
        background-color:#183867;
        color:#fff;
        font-family:agency fb2;
        font-size:18px;
        border:none;
        border-radius:5px;
        padding: 2px 15px 2px 15px;
    }
    .saveBCNTs{
        margin-right:10px;
        width: 100px;
        height: 28px;
        border-radius: 4px;
        border: none;
        cursor: pointer;
        outline-style:none;
    }
    .saanBCNTs{
        width: 123px;
        height: 28px;
        border-radius: 4px;
        border: none;
        cursor: pointer;
        outline-style:none;
    }
    .divCNTsBelowuom{
        float: right;
        margin-top: 21px;
        margin-right: 53px;
    }
    .activeLocation{
        margin-top: 1px;
        position: absolute;
    }
    input[type="text"]:disabled{
        background:#EBEBE4;
    }
    .tablesalesnew{ 
        width:98%;
        margin:auto;
        margin-top:15px;
    }
    .buttonsInvoicesInventory{
        text-align:right;
        padding-right:15px;
        margin-top:20px;
    }
    .table1header select{
        font-family: Verdana;
        font-style: normal;
        font-size: 12px;
        width: 248px;
        height: 27px;
        margin-top: 2px;
        margin-left: 20px;
        padding: 5px;
    }
    .table2header input[type="text"]{
        font-family: Verdana;
        font-style: normal;
        font-size: 12px;
        width: 248px;
        height: 27px;
        margin-top: 2px;
        margin-left: 20px;
        padding: 5px;
    }
    .tablesalesnew select {
        width: 100%;
        height: 100%;
        padding: 0;
        border: none;
        font-family: Verdana;
        font-size: 12px;
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
        padding-right: 9px;
    }
    .amounttextalign{
        text-align:right;
    }
    .tablesalesnew tr:hover{
        background-color: #c8c8c8;
    }
    .dateCreated{
        background: #EBEBE4;
    }
</style>

<title>
    NEW COUNT
</title>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/loading.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<div class="container">
    <form method="post" class="cmForm boxshadow" id="form" >
        <input type="button" class="close1Client" value="x">
        <div id="new1Client">
            <p class="ni1Client"><?php //echo ($task == 'addclient') ? 'CREATE NEW' : 'UPDATE'   ?>ENTER INVENTORY COUNT</p>
            <!--<hr class="hrCNCClient">-->
        </div>
        <div class="headertables">
            <table style="float:left;margin-left:35px;" class="table1header">
                <tr>
                    <td>Name of Crew:</td>
                    <td>
                        <select class="selectname">
                            <option></option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Name of Crew:</td>
                    <td>
                        <select class="selectname">
                            <?php
                            foreach ($crew as $each) {
                                ?>
                                <option value="<?= $each->id ?>" title="<?= $each->crewCode ?>"><?= $each->crewName ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
            </table>

            <table style="float:right; margin-right:35px;" class="table2header">
                <tr>
                    <td>Inventory Id:</td>
                    <td><input type="text" disabled value="INV-0000000001"></td>
                </tr>
                <tr>
                    <td>Date Created:</td>
                    <td><input type="text" disabled class="dateCreated" value="2/22/2016"></td>
                </tr>


            </table>
        </div>
        <div style="clear:both;"></div>

        <?php
        $uom = DAOFactory::getTblUomDAO()->queryAll();
        $items = DAOFactory::getTblItemDAO()->queryAll();
        ?>
        <div>
            <table class="tablesalesnew">
                <tr>
                    <th>Type</th>
                    <th>Customer Name</th>
                    <th width="15%">Item No.</th>
                    <th width="20%">Item Description</th>
                    <th width="8%">UOM</th>
                    <th width="6%" style="text-align:center">Qty</th>
                </tr>
                <tr>
                    <td style="">
                        <select>
                            <option>Cash</option>
                            <option>Charge</option>
                        </select>
                    </td>
                    <td>
                        <select <?php // echo $invoicestat2  ?> class="sc newsc" name='clientId' <?php // echo ($taskstat == 'reverseinvoice' ? 'disabled' : '')  ?> id="client" required>
                            <option></option>
                            <option value="addclient">[Add Customer]</option>
                            <?php
                            // $customer = DAOFactory::getTblClientDAO()->queryByOrgId(Session::getSession('orgid'));
                            $customer = TblClientMySqlExtDAO::queryByOrgIdOrderBy(Session::getSession('orgid'));


                            if (count($customer) > 0) {
                                foreach ($customer as $item) {
//                                    if ($item->active == 'yes' || $item->id == $invoice->clientId) {
                                    ?>
                                    <option value='<?php echo $item->id ?>' <?php // echo ($item->id == $invoice->clientId) ? 'selected' : ''  ?> currencyId="<?= $item->currencyId ?>">
                                        <?php echo /* $item->clientAccount . ' - ' . */ $item->clientName ?>
                                    </option>
                                    <?php
//                                    }
                                }
                            }
                            ?>

                    </td>
                    <td>
                        <select class="item">
                            <?php foreach ($items as $itm) { ?>
                                <option value="<?= $itm->id ?>" title="<?= $itm->description ?>"><?= $itm->itemCode ?></option>
                            <?php } ?>
                        </select>
                    </td>
                    <td><input type="text" value="" class="desc" readonly></td>
                    <td>
                        <select>
                            <?php foreach ($uom as $m) { ?>
                                <option value="<?= $m->id ?>" title="<?= $m->measure ?>"><?= $m->abbreviation ?></option>
                            <?php } ?>
                        </select>
                    </td>
                    <td><input type="text" value="10" style="text-align:center"></td>
                </tr>
            </table>
        </div>
        <div style="clear:both;"></div>
        <div class="buttonsInvoicesInventory">
            <input class="bn3 addsavebuttonpop" type="submit" name="save" value="Save">
            <input class="bn bPost addsavebuttonpop" type="button" name="post" value="Post">
            <input type="hidden" name="task" value="<?php echo $taskstat ?>"/>
            <input type="hidden" name="status" value=""/>
        </div>

    </form>
</div>