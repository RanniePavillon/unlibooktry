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
		width:390px;
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
		width:362px;
        float:right;
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
        width: 100%;
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
		border-bottom:1px solid #c8c8c8;
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
        background: linear-gradient(0deg, rgb(11, 131, 47) 30%, rgb(13, 152, 54) 79%) !important;
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
        background: linear-gradient(0deg, rgb(11, 131, 47) 30%, rgb(13, 152, 54) 79%) !important;
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
        background: linear-gradient(0deg, rgb(11, 131, 47) 30%, rgb(13, 152, 54) 79%) !important;
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
        border: 1px solid #c8c8c8;
    }
    .popxliq{
        float: right;
        background: none;
        border: none;
        font-size: 20px;
        font-weight: bold;
        margin-top: -21px;
        margin-right: -9px;
    }
	.liquidationPrint{
		width:925px !important;
	}
    @media print{
        input[type="text"]{
            border:none;
        }
        
        input[type="button"], #header, .invoiceHolderAllExp, #accpClickToOpen{
            display: none;
        }
		liquidationmainTable{
			border-collapse:collapse !important
		}
		.liquidationmainTable th{
			color:#000 !important;
			font-weight:normal!important;
			border:1px solid #c8c8c8 !important;
		}
		
		.liquidationmainTable td{
			border:1px solid #c8c8c8 !important;
		}
		.liquidationadd{
			-webkit-border-style:none !important;
		}
		.liquidationPrint{
			width:100% !important;
		}
		.liquidationtableheader2{
			margin-right:-70px !important;
		}
		input[name="liquidationNum"], input[name="dateIssued"]{
			width:135px !important;
		}
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
                <input type="button" class="bnpreview addsavebutton printprev" value="Print" onclick="window.print()" style="float:left;">
                <input type="button" class="closeNewVendor popxliq" value="x" style="float:right;">
				<div style="clear:both;"></div>
            </div>
            <div style="clear:both;"></div>
<!--            <div id="newNewVendor">
                <span class="statusdaw">Status: <input type="text" value="<?= $liquidation->status == '' ? 'OPEN' : strtoupper($liquidation->status) ?>" class="statusinput" readonly /></span>
            </div>-->
            <div class="liquidationPrint">
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
                        <td><input type="text" name="dateIssued" id="di" value="<?= date('m/d/Y', strtotime(in_array($liquidation->status, array('open', 'rejected')) ? $liquidation->dateIssued : $cashAdvance->dateIssued )) ?>" readonly></td>
                    </tr>
                </table>
                <div style="clear:both;"></div>
            </div>

            <div>
                <table class="liquidationmainTable">
                    <tr>	
                        <th width="35%">Account Name</th>
                        <th width="25%">Particulars</th>
                        <th width="25%">VAT</th>
                        <th width="20%" style="text-align:right;">Amount</th>
                    </tr>
                    <tr>
                        <td><input type="text" value="<?= $cashAdvanceLine[0]->accountName ?>" readonly /></td>
                        <td style="padding-left:6px;"><input type="text" value="<?= $cashAdvanceLine[0]->particular ?>" readonly /></td>
                        <td></td>
                        <td><input name="caNetAmount" type="text" value="<?= Controller::getFloat($cashAdvanceLine[0]->netAmount * -1) ?>" style="text-align:right;" readonly /></td>
                    </tr>
                    <?php
                    foreach ($this->getLiquidationLine as $lqLine) {
                        ?>
                        <tr>
                            <td class="" style="padding-left:6px;">
                                <?php
                                echo DAOFactory::getTblCoaDAO()->load($lqLine->glPosting)->accontName
                                ?>
                            </td>
                            <td style="padding-left:6px;">
                                <?= $lqLine->particular ?>
                            </td>
                            <td>
                                <?php echo DAOFactory::getTblTaxDAO()->load($lqLine->vatId)->description ?>
                            </td>
                            <td>
                                <input type="text" value="<?= Controller::getFloat($lqLine->netAmount) ?>" class="isNumeric" readonly />
                            </td>

                        </tr>
                        <?php
                    }
                    ?>
                </table>

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
                            <input type="checkbox" class="waive" value="yes" name="waive" <?= $liquidation->waive == 'yes' ? 'checked' : '' ?> >
                            Waive refund:</td>
                        <td></td>
                    </tr>
                    <tr class="liquidationAmount">
                        <td>AR No:</td>
                        <td><input type="text" name="prNum" value="<?= $liquidation->prNum ?>"  readonly /></td>
                    </tr>
                    <tr class="liquidationAmount">
                        <td>CV No:</td>
                        <td><input type="text" name="referenceNumber" value="<?= $liquidation->referenceNumber ?>"  readonly>
                            <span style="color:red">*</span>
                        </td>
                    </tr>
                    <tr class="liquidationAmount">
                        <td>Check No:</td>
                        <td>
                            <input type="text" name="particularAmount" value="<?= $liquidation->particular ?>" readonly>
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
                    <?php echo DAOFactory::getTblCoaDAO()->load($liquidation->glPosting)->accontName ?>
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
            </div>

            <?php // if ($liquidation->status == 'posted' && ($user->type == 'office manager' || $user->type == 'admin')) {  ?>
            <!--                <div class="buttonReverse">
                                <input type="button" name="reverse" value="REVERSE" class="sendliq">
                            </div>-->
            <?php // }  ?>
        </div>

    </div>
</form>


<script>
    $('.closeNewVendor').click(function(){
        $('.popBack').addClass('hidden');
    });
    
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
