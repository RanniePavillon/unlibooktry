<style>
    input[name="grandTotal"], 
	input[name="refundAmount"], 
	input[name="totalExpenses"], 
	input[name="inputVat"], 
	input[name="totalAmount"]{
        text-align:right;
        font-weight:bold;
    }
    .mainliquidation{
        width:100%;
    }
    .mainliquidationform{
        width:915px;
        margin:auto;
        padding:10px;
        font-size:12px;
        font-family:verdana;
        background-color:#fff;
        margin-top:30px;
        padding-bottom:30px;
        margin-bottom:30px;
        border: 2px solid green;
    }
    .niNewVendor{
        font-family:agency fb2;
        font-size:30px;
    }
    #newNewVendor {
        font-family: Agency FB;
        margin-left: 20px;
        font-weight: bold;
        color: #183867;
        margin-top: 18px;
        text-align: right;
        margin-right: 27px;
    }
    .statusdaw{
        margin-left: 560px;
        font-size: 12px;
        font-family: verdana;
    }
    .liquidationtableheader{
        margin: auto;
        margin-top: 25px;
        float:left;
        margin-left:20px;
    }
    .img2 {
        position: absolute;
        margin-left: 24px;
        height: 17px;
        z-index: -1;
        top: 196px;
    }
    .liquidationtableheader input[type="text"], .liquidationtableheader select{
        width: 208px;
        height: 27px;
        font-size:12px;
        font-family:verdana;
        padding:5px;
    }
    .liquidationtableheader td{
        font-size:12px;
        padding-top:3px;
    }
    .liquidationtableheader2{
        float:right;
        margin-right:20px;
        margin-top:25px;
    }
    .liquidationtableheader2 input[type="text"], input[type="date"]{
        width: 208px;
        height: 27px;
        font-size:12px;
        font-family:verdana;
        padding:5px;
    }
    .liquidationtableheader2 td{
        font-size:12px;
        padding-top:3px;
    }
    .liquidationadd{
        padding:5px;
        font-size:12px;
        font-family:verdana;
        width: 208px;
        height: 74px;
        min-width: 208px;
        min-height: 74px;
		max-width: 208px;
        max-height: 74px;
    }
    .statusinput{
        width: 100px;
        text-align:center;
        font-family:verdana;
        font-size:12px;
        height:27px;
    }
    .liquidationmainTable{
        width: 98%;
        margin: auto;
        margin-top: 25px;
    }
    .liquidationmainTable input[type="text"], .liquidationmainTable select{
        height: 27px;
        font-size:12px;
        font-family:verdana;
        padding:5px;
        border:none;
    }
    .liquidationmainTable tr td{
        padding:0px;
        border-bottom:1px solid #c8c8c8;
    }
    .liquidationmainTable th{
        font-size: 12px;
        padding:7px 5px;
    }
    .tblTotalFooter input[type="text"]{
		font-weight:normal!important;
        height: 27px;
        font-size:12px;
        font-family:verdana;
        padding:5px;
        border:1px solid #c8c8c8;
    }
    .tblTotalFooter td{
        font-size:12px;
        font-family:Verdana;
    }
    .empName{
        width: 208px;
        height: 27px;
        font-size:12px;
        font-family:verdana;
        padding:5px;
    }
    .accountName{
        width: 100%;
        height: 27px;
        font-size:12px;
        font-family:verdana;
        padding:5px;
        border:none;
    }
    .glPostingGl{
        width: 208px;
        height: 27px;
        font-size:12px;
        font-family:verdana;
        padding:5px;
    }
    .glPostingGldiv{
        margin-left:10px;
        margin-top:15px;
    }
    .sendliq{
        border: none;
        border-radius: 5px;
        color: #fff;
        width: 87px;
        height: 28px;
        background-color: #C51400 !important;
        font-family: agency fb2;
        font-size: 17px;
        margin-top: 10px;
        cursor: pointer;
        text-decoration: none!important;
    }
    .waive{
        position: absolute;
        margin-left: -15px;
        margin-top: 1px;
    }
    .popback{
        overflow: auto;
    }
    .isNumeric{
        text-align: right;
    }
    .addlinediv{
        margin-top: 20px;
        margin-left: 10px;
    }
    .inputAddline{
        cursor: pointer;
        border-radius: 5px;
        background-color: #C51400 !important;
        border: none;
        font-family: agency fb2;
        font-size:17px;
        width: 80px;
        height: 25px;
        color:#fff;
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
        background-image: url('<?= URL ?>public/images/add1.png');
        background-size:50% 50%;
        background-repeat:no-repeat;
        background-position: 5px;
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
        background-image: url('../public/images/del1a.png'); 
        background-size: 100% 100%;
        width: 15px;
        height: 22px;
        background-repeat: no-repeat;
    }
    .printprev{
       background-color: #C51400 !important;
        border: none;
        color:#fff;
        font-family: Verdana;
        font-size: 13px;
        font-weight: bold;
        border-radius:3px;
        padding: 5px;
    }
    input[type="text"]:disabled, input[type="date"]:disabled, select:disabled {
        color: #000;
        background: none;
    }
    .popxliq{
        float: right;
        background: none;
        border: none;
        font-size: 20px;
        font-weight: bold;
    }
</style>
<link rel="stylesheet" href="<?= URL ?>public/css/loading.css">
<link rel="stylesheet" href="<?= URL ?>public/css/popup.css">
<?php
$cashAdvance = $this->getCashAdvance;
$cashAdvanceLine = $this->getCashAdvanceLine;
$liquidation = $this->getLiquidation;
$liquidationAmount = $this->getLiquidationAmount;
// echo '<pre>';
// print_r($liquidation);
if (Session::getSession('user')) {
    $info = DAOFactory::getTblOrganizationInfoDAO()->load(DAOFactory::getTblUserDAO()->load(Session::getSession('user'))->orgInfoId);
    $org = DAOFactory::getTblOrganizationDAO()->load($info->orgId);
    $user = DAOFactory::getTblUserDAO()->load(Session::getSession('user'));
    //    Session::setSession('medinfoid', $info->id);
}
?>

<script>
    date = '<?php echo date('m/d/Y', strtotime($cashAdvance->dateIssued)) ?>';
    $("#di").datepicker({minDate: date});
</script>
<form class="liquidationForm">
    <div class="mainliquidation">
        <div class="mainliquidationform boxshadow">
            <div class="niNewVendor" style="float:left;margin-left: 20px;margin-top">LIQUIDATION</div>
            <div style="float:right;margin-top:10px;">
                <input type="button" class="bnpreview addsavebutton printprev" value="Print Preview" style="float:left;margin-right:4px;">
                <input type="button" class="closeNewVendor popxliq" value="x" style="float:right;">
				<div style="clear:both;"></div>
            </div>
            <div style="clear:both;"></div>
            <div id="newNewVendor">
                <span class="statusdaw">Status: <input type="text" value="<?= $liquidation->status == '' ? 'OPEN' : strtoupper($liquidation->status) ?>" class="statusinput" readonly /></span>
            </div>
            <div>
                <table class="liquidationtableheader">
                    <tr>
                        <td style="width: 117px;">Employee Name:</td>
                        <td>
                            <?php
                            $employee = DAOFactory::getTblSupplierDAO()->load($cashAdvance->supplierId);
                            ?>
                            <input type="text" value="<?= $employee->name ?>" readonly />
                        </td>
                    </tr>
                    <tr>
                        <td>Tin:</td>
                        <td>
                            <input type="text" value="<?= $employee->tin ?>" readonly />
                        </td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td>
                            <textarea class="liquidationadd" readonly ><?= $employee->address ?></textarea>
                        </td>
                    </tr>
                </table>
                <table class="liquidationtableheader2">
                    <tr>
                        <td style="width:117px;">Liquidation No:</td>
                        <td><input type="text" name="liquidationNum" value="<?= $liquidation->liquidationNum ?>" readonly /></td>
                    </tr>
                    <tr>
                        <td>Date Issued:</td>
                        <td><input type="text" name="dateIssued" id="di" value="<?= date('m/d/Y', strtotime(in_array($liquidation->status,array('open','rejected')) ? $liquidation->dateIssued : $cashAdvance->dateIssued )) ?>" readonly></td>
                    </tr>
                </table>
                <div style="clear:both;"></div>
            </div>

            <div>
                <table class="liquidationmainTable">
                    <tr>	
                        <th></th>
                        <th width="35%">Account Name</th>
                        <th width="25%">Particulars</th>
                        <th width="25%">VAT</th>
                        <th width="20%" style="text-align:right;">Amount</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="padding-left:5px;"><input type="text" value="<?= $cashAdvanceLine[0]->accountName ?>" readonly /></td>
                        <td><input type="text" value="<?= $cashAdvanceLine[0]->particular ?>" readonly /></td>
                        <td></td>
                        <td><input name="caNetAmount" type="text" value="<?= Controller::getFloat($cashAdvanceLine[0]->netAmount * -1) ?>" style="text-align:right;" readonly /></td>
                        <td></td>
                    </tr>
                    <?php
					$vats = DAOFactory::getTblTaxDAO()->queryAll();
                    if (!$this->getLiquidationLine) {
                        // foreach($this->getLiquidationLine as $each){
                        ?>
                        <tr>
                            <td class="neg">
                                <input type="button" name="delete"  class="del delitem">
                            </td>
                            <td class=""  style="padding-left:5px;">
                                <select name="coaId[]" class="selectNewExp" required  style="padding:0!important;">
                                    <option value="">--Select--</option>
                                    <?php
                                    $userCoa = $this->userCoa;
                                    if (isset($userCoa) && !empty($userCoa)) {
                                        foreach ($userCoa as $each) {
                                            echo '<option value="' . $each->id . '"
											 accountNum="' . $each->accountNum . '" 
											 title="' . $each->description . '" >
											' . $each->accontName . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </td>
                            <td>
                                <input type="text" name="particular[]" required/>
                            </td>
                            <td>
                                <select name="vatId[]">
									<?php
										foreach($vats as $vat){
									?>
										<option value="<?= $vat->id ?>"  rate="<?= $vat->rate / 100 ?>" ><?= $vat->description ?></option>
									<?php
										}
									?>
                                </select> 
                            </td>
                            <td>
                                <input type="text" name="netAmount[]" value="" class="isNumeric" required/>
                            </td>
                            <td class="neg">
                                <div class="adel"> 
                                    <input type="button" name="add"  class="a addtask" id="addtask" value="">
                                </div>
                            </td>
                        </tr>
                        <?php
                        // }
                    } else {

                        foreach ($this->getLiquidationLine as $lqLine) {
                            ?>
                            <tr>
                                <td class="neg">
                                    <input type="button" name="delete"  class="del delitem" value="">
                                </td>
                                <td class="" style="padding-left:5px;">
                                    <select name="coaId[]" class="selectNewExp" required style="padding:0!important;">
                                        <option value="">--Select--</option>
                                        <?php
                                        $userCoa = $this->userCoa;
                                        if (isset($userCoa) && !empty($userCoa)) {
                                            foreach ($userCoa as $each) {
                                                echo '<option value="' . $each->id . '"
											 accountNum="' . $each->accountNum . '" 
											  ' . ($lqLine->glPosting == $each->id ? 'selected' : '' ) . ' 
											 title="' . $each->description . '" >' . $each->accontName . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="particular[]" value="<?= $lqLine->particular ?>" required/>
                                </td>
								<td>
									<select name="vatId[]">
										<?php
											foreach($vats as $vat){
										?>
											<option value="<?= $vat->id ?>" <?= $vat->id == $lqLine->vatId ? 'selected' : '' ?>  rate="<?= $vat->rate / 100 ?>"><?= $vat->description ?></option>
										<?php
											}
										?>
									</select> 
								</td>
                                <td>
                                    <input type="text" name="netAmount[]" value="<?= Controller::getFloat($lqLine->netAmount) ?>" class="isNumeric" required/>
                                </td>
                                <td class="neg">
                                    <div class="adel"> 
                                        <input type="button" name="add"  class="a addtask" id="addtask" value="">
                                    </div>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </table>

                <div class="addlinediv" style="float:left;">
                    <input type="button" name="size" class="inputAddline addsavebutton" id="addtask" value="ADD LINE" <?php //echo $invoicestat2                      ?> value=""> 
                </div>

                <table class="tblTotalFooter" style="float:right;margin-top:20px;">
                    <tr class="liquidationAmount">
                        <td>Return:</td>
                        <td><input type="text" name="grandTotal" value="<?= Controller::getFloat($liquidationAmount->grandTotal) ?>" readonly /></td>
                    </tr>
                    <tr class="liquidationAmount">
                        <td>Reimbursement:</td>
                        <td><input type="text" name="refundAmount" value="<?= Controller::getFloat($liquidationAmount->refundAmount) ?>" readonly /></td>
                    </tr>
                    <tr class="liquidationAmount">
                        <td style="padding-left:20px;">
                            <input type="checkbox" id="waiveRef" class="waive" value="yes" name="waive" <?= $liquidation->waive == 'yes' ? 'checked' : '' ?> >
                            <label for="waiveRef">Waive refund:</label></td>
                        <td></td>
                    </tr>
                    <tr class="liquidationAmount">
                        <td>AR No:</td>
                        <td><input type="text" name="prNum" value="<?= $liquidation->prNum ?>"  ></td>
                    </tr>
                    <tr class="liquidationAmount">
                        <td>CV No:</td>
                        <td><input type="text" name="referenceNumber" value="<?= $liquidation->referenceNumber ?>"  >
                            <span style="color:red">*</span>
                        </td>
                    </tr>
                    <tr class="liquidationAmount">
                        <td>Check No:</td>
                        <td>
                            <input type="text" name="particularAmount" value="<?= $liquidation->particular ?>">
                            <span style="color:red">*</span>
                        </td>
                    </tr>
					<!--
                </table>
				<table class="tblTotalFooter" style="float:right;margin-right:12px;margin-top:20px;">
						-->
                    <tr class="liquidationAmount">
                        <td>Total Expenses:</td>
                        <td><input type="text" name="totalExpenses" value="<?= Controller::getFloat($liquidationAmount->totalExpenses) ?>" readonly /></td>
                    </tr>
                    <tr class="liquidationAmount">
                        <td>Input VAT:</td>
                        <td><input type="text" name="inputVat" value="<?= Controller::getFloat($liquidationAmount->inputVat) ?>" readonly /></td>
                    </tr>
                    <tr class="liquidationAmount">
                        <td>Total Amount:</td>
                        <td><input type="text" name="totalAmount" value="<?= Controller::getFloat($liquidationAmount->totalAmount) ?>" readonly /></td>
                    </tr>
				</table>
                <div style="clear:both;"></div>
            </div>	

            <div class="glPostingGldiv">
                <div class="glPostingGldiv2">GL Posting: 
                    <select class="item-text2NewItem item-textNewItem classGl" name="glPosting" id="glPosting2" required style="width:229px;height:27px;">
                        <?php
                        $coas = DAOFactory::getTblCoaDAO()->queryByOrgId(Session::getSession('orgid'));
                        $coas2 = TblCoaMySqlExtDAO::getCoaByCoaNum(Session::getSession('orgid'), '%1000-003-%');
                        $coaArray = array('1000-002', '1000-003');
                        if ($coas2) {
                            $coaArray = array('1000-002');
                        }
                        foreach ($coas as $coa) {
                            if (in_array($coa->accountNum, $coaArray)) {
                                ?>
                                <option value="<?php echo $coa->id ?>" <?php echo ($coa->id == $liquidation->glPosting) ? 'selected' : ''          ?>><?php echo $coa->accountNum ?> - <?php echo $coa->accontName ?></option>

                                <?php
                            }
                        }
                        if ($coas2) {
                            foreach ($coas2 as $coa) {
                                ?>
                                <option value="<?php echo $coa->id ?>" <?php echo ($coa->id == $liquidation->glPosting) ? 'selected' : ''          ?>><?php echo $coa->accountNum ?> - <?php echo $coa->accontName ?></option>
                                <?php
                            }
                        }
                        ?>
                        <!-- <option value="addBank">[Add Bank]</option> -->
                    </select>
                </div>

                <div>
                    <?php if (!empty($liquidation->rejectedRemarks)) { ?>

                        <fieldset>
                            <legend>Rejected Remarks</legend>
                            <?php echo $liquidation->rejectedRemarks ?>
                        </fieldset>

                    <?php } ?>

                    <?php if (!empty($liquidation->reversedRemarks)) { ?>
                        <fieldset>
                            <legend>Reversed Remarks</legend>
                            <?php echo $liquidation->reversedRemarks ?>
                        </fieldset>

                    <?php } ?>
                </div>

                <input type="hidden" name="status" value="<?= $liquidation->status == '' ? 'open' : $liquidation->status ?>"/>
                <div style="text-align:right;margin-right:15px;">
                    <?php if (($useraccess->Add == 'yes' || $useraccess->Edit == 'yes') && !isset($_POST['approvalstat'])) { ?>
                        <?php if ($liquidation->status == 'open' || $liquidation->status == 'rejected' || $liquidation->status == '') { ?>
                            <input type="submit" class="sendliq addsavebutton" value="SAVE">
                            <input type="button" name="send" class="sendliq addsavebutton" value="POST">
                        <?php } elseif ($liquidation->status == 'approved' && $useraccess->post == 'yes') { ?>
                            <input class="bnP postExpense sendliq addsavebutton" type="button" name="post" value="POST">
                        <?php } ?>
                    <?php } else { ?>
                        <div>
                            <?php if ($useraccess->preApproved == 'yes' && $liquidation->status == 'pending') { ?>
                                <input type="button" name="preapproved" class="sendliq bnpreApproved addsavebutton" value="PRE-APPROVE">
                                <input type="button" name="reject" class="sendliq addsavebutton" value="REJECT">
                            <?php } elseif ($useraccess->approved == 'yes' && $liquidation->status == 'preapproved') { ?>
                                <input type="button" name="approved" class="sendliq bnApprove addsavebutton" value="APPROVE">
                                <input type="button" name="reject" class="sendliq addsavebutton" value="REJECT">
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <?php // if ($liquidation->status == 'posted' && ($user->type == 'office manager' || $user->type == 'admin')) { ?>
            <!--                <div class="buttonReverse">
                                <input type="button" name="reverse" value="REVERSE" class="sendliq">
                            </div>-->
            <?php // } ?>
        </div>

    </div>
</form>
<table class="hidden additionalTable">
    <tr>
        <td class="neg">
            <input type="button" name="delete"  class="del delitem" value="">
        </td>
        <td class="" style="padding-left:5px;">
            <select name="coaId[]" class="selectNewExp" required style="padding:0!important;">
                <option value="">--Select--</option>
                <?php
                $userCoa = $this->userCoa;
                if (isset($userCoa) && !empty($userCoa)) {
                    foreach ($userCoa as $each) {
                        echo '<option value="' . $each->id . '"
								 accountNum="' . $each->accountNum . '" 
								 title="' . $each->description . '" >
								' . $each->accontName . '</option>';
                    }
                }
                ?>
            </select>
        </td>
        <td>
            <input type="text" name="particular[]" required />
        </td>
		<td>
			<select name="vatId[]">
				<?php
					foreach($vats as $vat){
				?>
					<option value="<?= $vat->id ?>" rate="<?= $vat->rate / 100 ?>"><?= $vat->description ?></option>
				<?php
					}
				?>
			</select> 
		</td>
        <td>
            <input type="text" name="netAmount[]" value="" class="isNumeric" required />
        </td>
        <td class="neg">
            <input type="button" name="add" value="" class="a addtask" id="addtask">
        </td>
    </tr>
</table>
<?php if (in_array($liquidation->status, array('', 'open', 'rejected'))) { ?>
    <script src="<?php echo URL; ?>public/js/custom.js"></script>
    <script>

    $(function () {
        $('.delitem:first').remove();

/*
        $(document).on('change', 'select[name="coaId[]"]', function () {
            var myArray = new Array();
            $('select[name="coaId[]"]').each(function () {
                if ($(this).val() != '') {
                    if (jQuery.inArray($(this).val(), myArray) == -1) {
                        myArray.push($(this).val());
                    } else {
                        alert('Unable to select duplicate account');
                        $(this).val('');
                        return false;
                    }
                }
            });
        });
        */
        $(document).on('keyup', 'input[name="netAmount[]"]', function () {
            computeLiquidation();
        });
        $(document).on('change', 'input[name="netAmount[]"]', function () {
            computeLiquidation();
            $('.waive').change();
        });
        $(document).on('change', 'select[name="vatId[]"]', function () {
            computeLiquidation();
            $('.waive').change();
        });
        $(document).on("click", ".addtask, .inputAddline", function () {
            htmls = $('.additionalTable').html();
            $('.liquidationmainTable').append(htmls);
        });
        $(document).on("click", ".delitem", function () {
            $(this).parent('td').parent('tr').remove();
            computeLiquidation();
        });

        $('.liquidationForm').submit(function () {
            confirmSubmit = confirm('Record liquidation?');
            if (confirmSubmit) {
                saveLiquidation();
            }

            return false;
        });

        $('input[name="send"]').click(function () {
            myObj = false;
            $('.liquidationForm input[type="text"][required]').each(function () {
                if ($(this).val() == '') {
                    myObj = this;
                    return false;

                }
            });
            $('.liquidationForm select[required]').each(function () {
                if ($(this).val() == '') {
                    myObj = this;
                    return false;
                }
            });

            if (myObj) {
                alert('Please fill-up the required field.');
                $(myObj).focus();
                return false;
            }

            confirmSubmit = confirm('Post liquidation?');
            if (confirmSubmit) {
                $('input[name="status"]').val('posted');
                saveLiquidation();
            }
        });

        $('.waive').change(function () {
            $('input[name="netAmount[]"]').css('color', '#000');
            $('input[name="netAmount[]"]').css('border', 'none !important');
            if ($(this).is(':checked')) {
                if (getInt($('input[name="refundAmount"]').val()) != 0) {
                    $('input[name="netAmount[]"]').css('color', 'red');
                    $('input[name="netAmount[]"]').css('border', 'red !important');
                    $('input[name="netAmount[]"]:first').focus();
                }
            }
            computeLiquidation();
        });
    });
    function saveLiquidation() {
        obj = false;
        $('.liquidationForm input[required]').each(function () {
            if ($(this).val() == '') {
                obj = this;
                return false;
            }
        });
        $('.liquidationForm select[required]').each(function () {
            if ($(this).val() == '') {
                obj = this;
                return false;
            }
        });
        if (obj) {
            alert('Please fill the field');
            $(obj).focus();
            return false;
        }
        liq = computeLiquidation();
        if (liq > 0 && $('.waive').is(':checked')) {
            alert('Unable to save please check your net amount(s)');
            $('input[name="netAmount[]"]:first').focus();
            return false;
        }

        $.post(URL + 'expenses/setLiquidation?id=<?= $cashAdvance->id ?>', $('.liquidationForm').serialize())
                .done(function (returnData) {
                    if (returnData != '') {
                        alert(returnData);
                    }
                    location.reload();
                });
        return false;
    }
    function computeLiquidation() {
        cashAdvance = getInt($('input[name="caNetAmount"]').val());
        total = 0;
        
		vats = 0;
		totalExpenses = 0;
        
        $('input[name="netAmount[]"]').each(function () {
            total += getInt($(this).val());
			rate = getInt($(this).parent('td').parent('tr').find('select[name="vatId[]"] option:selected').attr('rate'));
			totalExpenses += getInt($(this).val()) / (1 + rate);
			vats += getInt($(this).val()) - (getInt($(this).val()) / (1 + rate));
        });
        dif = cashAdvance + total;
        if ($('.waive').is(':checked') && getInt($('input[name="refundAmount"]').val())) {
            $('input[name="netAmount[]"]').css('color', '#000');
            if (dif != 0) {
                $('input[name="netAmount[]"]').css('color', 'red');
            }

            $('input[name="refundAmount"]').val(roundFloat(dif));
        } else if (!$('.waive').is(':checked')) {
            $('.glPostingGldiv2').removeClass('hidden');
            $('input[name="referenceNumber"]').prop('required', false);
            $('.liquidationAmount').addClass('hidden');
            $('input[name="grandTotal"]').css('color', '#000000');
            refund = granTotal = 0;

            // dif = cashAdvance - total;

            $('input[name="grandTotal"]').val('0.00');
            $('input[name="refundAmount"]').val('0.00');
            if (dif <= 0) {
                $('input[name="grandTotal"]').val(roundFloat(dif));

                $('input[name="grandTotal"]').parent('td').parent('tr').removeClass('hidden');
                $('input[name="prNum"]').parent('td').parent('tr').removeClass('hidden');
                
            } else {
                $('input[name="refundAmount"]').val(roundFloat(dif));

                $('input[name="refundAmount"]').parent('td').parent('tr').removeClass('hidden');
                $('.waive').parent('td').parent('tr').removeClass('hidden');
                $('input[name="referenceNumber"]').parent('td').parent('tr').removeClass('hidden');
                $('input[name="particularAmount"]').parent('td').parent('tr').removeClass('hidden');
                $('input[name="referenceNumber"]').prop('required', true);
            }

            if (dif == 0) {
                $('.glPostingGldiv2').addClass('hidden');
            }            
        }
        
		$('input[name="totalExpenses"]').val(roundFloat(totalExpenses));
		$('input[name="inputVat"]').val(roundFloat(vats));
		$('input[name="totalAmount"]').val(roundFloat(vats + totalExpenses));
		
		$('input[name="totalExpenses"]').parent('td').parent('tr').removeClass('hidden');
        $('input[name="inputVat"]').parent('td').parent('tr').removeClass('hidden');
        $('input[name="totalAmount"]').parent('td').parent('tr').removeClass('hidden');
		
        dif < 0 ? $('input[name="prNum"]').prop('required','true') : $('input[name="prNum"]').removeAttr('required');
        
        return dif;

    }
    </script>
<?php } else { ?>
    <script>
        $('.liquidationForm input[type="text"],.liquidationForm input[type="checkbox"], .liquidationForm select, .liquidationForm textarea').prop('disabled', true);
        $('input[name="add"],input[name="delete"],.inputAddline').remove();
        $('input[name="post"]').click(function () {
            confirmSubmit = confirm('Are you sure you want to post this liquidation?');
            if (confirmSubmit) {
                $('body').css('overflow', 'hidden');
                $('.popBack').html('<div class="loadingevent2"><img src="' + URL + 'public/images/processing.gif" class="loadingimg"/></div>');
                $('.popBack').removeClass('hidden');
                $('.popBack').css('z-index', '11');

                $.post(URL + 'expenses/setLiquidationApprove', {'id': '<?= $liquidation->id ?>', 'status': 'posted'})
                        .done(function (returnData) {
                            if (returnData != '') {
                                alert(returnData);
                            }
                            location.reload();
                        });
                return false;
            }
        });
        $('input[name="reject"]').click(function () {

            confirmReverse = confirm('Are you sure you want to reject this liquidation?');
            if (confirmReverse) {
                $('.popup').removeClass('hidden');
                $('.remarksPopout').removeClass('hidden');
                $('body').css('overflow', 'hidden');
                $('textarea').prop('readonly', false);
                $('.closeCNTsexp').click(function () {
                    $('.popup').addClass('hidden');
                    $('body').css('overflow', 'auto');
                });
                $('.okButton').click(function () {

                    remarks = $('.remarksText').val().trim();
                    $('body').css('overflow', 'hidden');
                    $('.popBack').html('<div class="loadingevent2"><img src="' + URL + 'public/images/processing.gif" class="loadingimg"/></div>');
                    $('.popBack').removeClass('hidden');
                    $('.popBack').css('z-index', '11');

                    //setLiquidationReverse
                    $.post(URL + 'expenses/setLiquidationApprove', {'id': '<?= $liquidation->id ?>', 'remarks': remarks, 'status': 'rejected'})
                            .done(function (returnData) {
                                if (returnData != '') {
                                    alert(returnData);
                                }
                                location.reload();
                            });
                    return false;
                });
                return false;
            }
            return false;

        });

        $('.bnpreApproved').click(function () {
            if (confirm('Are you sure you want pre-approve this transaction?')) {
                setLiquidationStatus('preapproved');
            }
        });

        $('.bnApprove').click(function () {
            if (confirm('Are you sure you want approve this transaction?')) {
                setLiquidationStatus('approved');
            }
        });

        $('.bnpreview').click(function () {
            $.post(URL + 'expenses/printPreviewLiquidation', {'id': '<?= $liquidation->id ?>'})
                    .done(function (returnData) {
                        $('.popBack').removeClass('hidden');
                        $('.PopBack').html(returnData);
                        //                                location.reload();

                        $('.liquidateButton').click(function () {
                            if (confirm('Are you sure you want to leave this page?')) {
                                $('.popBack').addClass('hidden');
                                $('.popBack').html('');
                                $('body').css('overflow', 'auto');
                                window.location.reload();

                            }
                        });

                    });
            return false;
        });

        //        $('.input[name="reject"]').click(function(){
        //            setLiquidationStatus('rejected');
        //        });

        function setLiquidationStatus(status) {
            $.post(URL + 'expenses/setLiquidationApprove', {'id': '<?= $liquidation->id ?>', 'status': status})
                    .done(function (returnData) {
                        if (returnData != '') {
                            alert(returnData);
                        }
                        location.reload();
                    });
            return false;
        }
    </script>
<?php } ?>
<script>

    $('.liquidationAmount').addClass('hidden');
<?php
if ($liquidationAmount->grandTotal == 0 && $liquidationAmount->refundAmount == 0) {
    ?>
        $('.glPostingGldiv2').addClass('hidden');
<?php } ?>
<?php if ($liquidationAmount->refundAmount != 0) { ?>
        $('input[name="refundAmount"]').parent('td').parent('tr').removeClass('hidden');
        $('.waive').parent('td').parent('tr').removeClass('hidden');
        $('input[name="referenceNumber"]').parent('td').parent('tr').removeClass('hidden');
        $('input[name="particularAmount"]').parent('td').parent('tr').removeClass('hidden');
<?php } else { ?>
        $('input[name="grandTotal"]').parent('td').parent('tr').removeClass('hidden');
        $('input[name="prNum"]').parent('td').parent('tr').removeClass('hidden');
<?php } ?>

        $('input[name="totalExpenses"]').parent('td').parent('tr').removeClass('hidden');
        $('input[name="inputVat"]').parent('td').parent('tr').removeClass('hidden');
        $('input[name="totalAmount"]').parent('td').parent('tr').removeClass('hidden');
</script>
<div class="popup hidden">
    <div class="remarksPopout hidden">
        <?php include('views/invoice/remarks.php'); ?>
    </div>
</div>