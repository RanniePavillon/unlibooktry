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
        margin-top: 10px;
        cursor: pointer;
        height: 25px;
        width: 80px;
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
        font-size: 12px;
        font-family: Verdana;
        height: 25px;
        border: none;
        padding: 5px;

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

    .loadingHolder{
        margin-top:15%;
        margin-left:45%;
    }

</style>
<title>
    ALL SALES
</title>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>

<?php
$invoicestat = 'x';
$invoicestat2 = '';
$taskstat = 'addcm';
$info = $this->info;
$tax = $this->tax;


if ($this->cm->status == 'open' && $this->cm->id != '') {
    $taskstat = 'updatecm';
} elseif ($this->cm->status == 'posted') {
    $taskstat = 'reversecm';
} elseif ($this->cm->status == 'reversed') {
    $taskstat = 'reversedcm';
}
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
            } elseif ($taskstat == 'reversesalesorder') {
                echo 'POSTED';
            } else {
                echo 'NEW';
            }
            ?> CM</label>
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
                                    if ($item->active == 'yes' || $item->id == $this->cm->clientId) {
                                        ?>
                                        <option value='<?php echo $item->id ?>' <?php echo ($item->id == $this->cm->clientId) ? 'selected' : '' ?> currencyId="<?= $item->currencyId ?>">
                                            <?php echo /* $item->clientAccount . ' - ' . */ $item->clientName ?>
                                        </option>
                                        <?php
                                    }
                                }
                            }
                            ?>
                            <option value="addclient">[Add Customer]</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><div class="divAdd">Address:</div></td>
                    <td>
                        <textarea class="add" id='address' name='address' readonly <?php echo $invoicestat ?> ><?php //echo ($salesorder->clientId != '') ? DAOFactory::getTblClientDAO()->load($salesorder->clientId)->address : ''           ?></textarea>
                    </td>
                </tr>
            </table>

            <table style="float:right;" class="table2header">
                <tr>
                    <td>CM No.:</td>
                    <td><input type="text" name="cmNo" value="<?php echo $this->cm->cmNo ?>" required></td>
                </tr>
                <tr>
                    <td>Date Issued:</td>
                    <td><input type="text" class="di" id="di" name="dateIssued" value="<?php echo date('m/d/Y', strtotime($this->cm->dateIssued != '' ? $this->cm->dateIssued : date('Y-m-d'))) ?>" required /></td>
                </tr>
                <tr>
                    <td>Date Created:</td>
                    <td><input type="text" class="di" name="dateCreated" value="<?php echo date('m/d/Y', strtotime($this->cm->dateCreated)); ?>" style="background:#c8c8c8;border:none;" readonly /></td>
                </tr>


            </table>
        </div>
        <div style="clear:both;"></div>
        <!--<div>-->
        <?php // if ($info->typeOfTax == 'vat') { ?>

                <!--<div class="ivat">Inclusive of VAT <input type="checkbox"  class="" name="inclusiveOfVat" style="-webkit-transform: scale(1.4);margin-top:11px;margin-left:5px;height: 10px;"></div>-->

        <?php // } ?>

        <!--</div>-->

        <div>

            <table class="tablesalesnew">
                <tr>
                    <th width="2%"></th>
                    <th width="60%">Description</th>
                    <th width="10%" style="text-align:center;">Qty</th>
                    <th width="15%" style="text-align:right;">Amount</th>
                    <th width="2%"></th>
                </tr>

                <?php
                $total = 0;
                if ($this->cmlines) {
                    ?>
                    <?php
                    foreach ($this->cmlines as $item) {
                        $total += $item->amount;
                        ?>
                        <tr>
                            <td><?php echo (in_array($taskstat, array('updatecm'))) ? '<div class="del"><input type="button" name="delete" class="del deltask"></div>' : ''; ?></td>
                            <td>
                                <input type="hidden" name="cmlineid" value="<?php echo $item->id ?>"/>
                                <input type="text" name="description[]" value="<?php echo $item->description ?>" required />
                            </td>
                            <td><input type="text" name="qty[]" style="text-align:center;" value="<?php echo $item->qty ?>" required /></td>
                            <td> 
                                <input type="text" name="amount[]" value="<?php echo $item->amount ?>" class="amountline" style="text-align:right;" required />
                            </td>
                            <td>
                                <?php echo (in_array($taskstat, array('updatecm'))) ? '	<div class="adel">
							<input type="button" name="add"  class="a addtask addtaskslines" id="addtask">
						</div> ' : ''; ?>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td><?php echo (in_array($taskstat, array('addcm'))) ? '<div class="del"><input type="button" name="delete" class="del deltask"></div>' : ''; ?></td>
                        <td>
                            <input type="text" name="description[]" value="" required />
                        </td>
                        <td><input type="text" name="qty[]" style="text-align:center;" value="" required /></td>
                        <td> 
                            <input type="text" name="amount[]" value="" class="amountline" style="text-align:right;" required />
                        </td>
                        <td>
                            <?php echo (in_array($taskstat, array('addcm'))) ? '	<div class="adel">
							<input type="button" name="add" class="a addtask addtaskslines" id="addtask">
						</div> ' : ''; ?>
                        </td>
                    </tr>
                <?php } ?>
            </table>


        </div>
        <?php
        echo (in_array($taskstat, array('addcm', 'updatecm'))) ?
                '<div class="search-box">
			<div class="size-container" style="display: none"></div>
			<input type="button" id="addtask" class="addNewTaskButton addsavebuttonbody" value="ADD LINE"/>     
		</div>' : ''
        ?>
        <div class="totalbelow">
            <table class="totaltableBelow">
                <tr>	
                    <th width="40%"></th>
                    <th width="60%"></th>
                </tr>


                <tr class="totalsalesorder">
                    <td style="font-weight:bold;color:#fff;">Total Amount</td>
                    <td><input type="text" class="totalclass numeric" name="grandTotal" style="padding-right: 10px;font-weight:bold;color:#fff;background:none;border:none;" value="<?php echo Controller::getFloat($total) ?>" readonly></td>
                </tr>
            </table>
        </div>
        <div style="clear:both;"></div>

        <div class="buttonsInvoices">
            <?php if ($useraccess->Add == 'yes' && $this->cm->status == "open") { ?>
                <input class="bn3 addsavebuttonbody saveSales" type="submit" name="save" value="SAVE" id="save">
                <?php
            }
            if (in_array($taskstat, array('addcm', 'updatecm')) && ($useraccess->Add == 'yes' || $useraccess->Edit == 'yes')) {
                ?>
                <input class="bn bPost addsavebuttonbody" type="submit" name="post" value="POST">
            <?php }if ($this->cm->status == 'posted') { ?>
                <input type="button" name="reverse" value="REVERSE" class="bn3b addsavebuttonbody" id="reverseNewInvoice" style="cursor:pointer;">
            <?php } ?>
            <input type="hidden" name="id" value="<?php echo $this->cm->id ?>" />
            <input type="hidden" name="task" value="<?php echo $taskstat ?>" />
            <input type="hidden" name="status" value="" />
        </div>
    </form>
</div>

<div class="popBack hidden">
</div>

<script>
    if ('<?= $this->cm->status ?>' == 'posted' || '<?= $this->cm->status ?>' == 'reversed') {
        $('input[type="text"], select, input[type="number"], input[type="date"], textarea, input[type="radio"]').prop('disabled', true);
    }

    $('#reverseNewInvoice').click(function () {

        let token = $('input[name="token"]').val();

        if (confirm('Are you sure you want to reverse the Credit Memo?')) {
            $('body').css('overflow', 'hidden');
            $('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
            $('.popBack').removeClass('hidden');
            $.post(URL + 'cm/setCreditMemo', {'id': '<?= $this->cm->id ?>', 'status': 'reverse', 'task': 'updatecm', 'token':token})
                    .done(function (returnData) {
                            returnData = returnData.trim();
                        if (returnData == '') {
                            $('#reverseNewInvoice').attr('disable', 'disable');
                            window.location.href = URL + 'sales/cm';
                        } else {
                            alertWithoutNotice(returnData);
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
</script>