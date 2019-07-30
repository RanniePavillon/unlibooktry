<style>
    @font-face {
        font-family: 'agency fb'!important;  /*a name to be used later*/
        src: url('<?= URL ?>public/fonts/AGENCYR.ttf'); /*URL to font*/
    }

    @font-face {
        font-family: 'agency fb2'!important; /*a name to be used later*/
        src: url('<?= URL ?>public/fonts/AGENCYB.ttf'); /*URL to font*/
    }
    .popup{
        overflow:hidden !important;
    }
    .hrClass2bottom {
        margin-top: -7px !important;
        width: 96% !important;
    }
    .tohide, .expTblHide{
        display:none !important;
    }
    .companySave {
        margin-left: 12px !important;
        background-image: url('<?= URL ?>public/images/save.png') !important;
        background-size: 100% 100% !important;
        border: none !important;
        background-repeat: no-repeat !important;
        border-radius: 2px !important;
        background-size: 100% 100% !important;
        width: 87px !important;
        height: 28px !important;
        cursor: pointer !important;
    }
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
        margin-left:25px;
        margin-top: 25px;
    }
    .buttonReverse{
        margin-left:15px;
        margin-top:10px;
    }

    .table1NewExpensesNew1{
        width: 98%;
        border-collapse: collapse;
        margin: auto;
        margin-top: 5px;
    }
    .table1NewExpensesNew1{
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        font-size: 13px;
        font-weight: bold;
        color: white;
        text-align: left;
    }
    .table1NewExpensesNew1, th{
        text-align: left;
        font-size: 13px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        font-weight: bold;
        color: white;
        padding-left: 10px;
    }
    .table1NewExpensesNew1,td{
        text-align: left;
        font-size: 12px;
        font-family:verdana;
        font-weight:normal;
        padding: 1px 1px 1px 1px;
        color: black;
    }
    .table1NewExpensesNew1 input[type="text"]{
        width:100%;
        height:25px;
        border:none;
        font-size: 12px;
        font-family:verdana;
    }
    .table1NewExpensesNew1,tr{
        border-bottom: solid 1px solid;
    }

    .table1NewExpensesNew1 tr th:nth-child(4){
        text-align: left;
    }

    .table1NewExpensesNew1 tr td:nth-child(4){
        text-align: left;
    }

    .table1NewExpensesNew1 tr td:nth-child(4){
        text-align: right;
    }
    .table1NewExpensesNew1 tr td:nth-child(5){
        text-align: right;
    }

    .table1NewExpensesNew1 tr th:nth-child(5){
        text-align: right;
    }
    .table1NewExpensesNew1 a{
        text-align: left;
        font-size: 12px;
        font-family: calibri;
        color: blue;
        font-weight: normal;
        text-decoration: none;
    }
    .table1NewExpensesNew1 a:hover{
        text-align: left;
        font-size: 12px;
        font-family: calibri;
        color: blue;
        font-weight: normal;
        text-decoration: underline;
    }
    .table1NewExpensesNew1 tr:HOVER{
        background-color:#E8E8E8;
    }   
    .no-bg{
        border-bottom: 1px solid #c8c8c8;
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
        font-family:verdana;
        font-weight:normal;
        font-size: 12px;
        color: #000000;
    }
    .particularBox{
        /* position: absolute; */
        width: 246px;
        height: 90px;
        margin-left: 15px;
        background-color: white;
        border-color: #C8C8C8;
        font-size: 12px;
        font-family: verdana;
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
        font-size:12px;
        font-family:verdana;
        margin-top:8px;
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
    .selectNewExp{
        width: 100%;
        border: none;
        height: 100%;
    }
    .neg{
    }
    .table1NewExpensesNew select{
        width:100%;
        font-family: verdana;
        font-style: normal;
        font-size: 12px;
        height:100%;
        border:none;
    }
    input[name="amount[]"]{
        text-align: right;
    }
    .reverseExpense{
        margin-left: 5px;
        color: white;
        font-family:agency fb2!important;
        font-size: 16px!important;
        text-decoration: none;
        background: linear-gradient(0deg, rgb(11, 131, 47) 30%, rgb(13, 152, 54) 79%) !important;
        border: none;
        border-radius:5px;
        width: 87px;
        height: 28px;
    }

    .addlinediv{
        margin-top: 18px;
        margin-left: 24px;
    }
    .inputAddline{
        padding: 5px 10px 5px 10px;
        cursor: pointer;
        border-radius: 5px;
        font-family: verdana;
        font-size: 12px;
        color: white;
        border: none;
        background-image: url('<?= URL ?>public/images/addline.png'); 
        background-size:100% 100%;
        width: 87px;
        height: 28px;
    }

    .bnexpense{
        width: 100px !important;
        height: 28px !important;
        font-family:agency fb2 ;
        font-size: 16px !important;
        text-decoration: none;
        border: none;
        color: white !important;
        background-size: 100% 100%;
        cursor:pointer;
        border-radius:5px;
        background-color: #C51400 !important;
    }
    .postExpense{
        width: 87px;
        height: 28px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        font-size: 14px;
        font-style: bold;
        text-decoration: none;
        border: none;
        color: white;
        background-image: url('<?= URL ?>public/images/post.png'); 
        background-size: 100% 100%;
        cursor:pointer;
    }
    .addsavebutton{
    }
    .table1NewExpensesNew tr{
        border-bottom:solid 1px #c8c8c8;
    }
    .expensecontainernew{
        margin-top:20px;
    }

    .companyHolderNew{
        padding-top:0px !important;
        padding-bottom: 10px !important;
        width:582px !important;
        margin-top:30px !important;
    }
    .statusExpense{
        font-size: 18px;
        color: #183867;
        font-weight: bold!important;
        font-family: agency fb2;
        font-style:normal!important;
    }
    .statExp{
        font-size: 17px;
        letter-spacing:1px;
        font-weight: bold;
        font-family: agency fb2;
        width: 125px;
        text-align: center;
        height: 25px;
    }
    .bnSend{
        background-color: #C51400 !important;
        border: none;
        border-radius:5px;
        color: #fff;
        width:100px;
        height:28px;
        font-family: agency fb2;
        font-size:16px;
        margin-top:10px;
        cursor:pointer;
        text-decoration:none!important;
    }
    .buttonNew{
        background-color: #6F992D;
        border: none;
        color: #fff;
        width: 87px;
        height: 28px;
        font-family: agency fb2;
        font-size: 16px;
        border-radius:5px;
        cursor:pointer;
    }
    .costCenter{
        width: 100%;
        border: none;
        height: 100%;
    }
    .selectCAType{
        font-family: Verdana;
        font-style: normal;
        font-size: 12px;
        width: 248px;
        height: 27px;
        margin-left: 10px;
        padding: 5px;
        margin-top: 5px;
    }
    .lineCashAdvance {
        background: #c8c8c8;
        height: 1px;
        width: 95%;
        margin:auto;
        margin-top: 30px;
        margin-bottom:25px;
    }
    .createAllcASH{
        background-color: #0b7a2c;
        width: 223px;
        height: 44px;
        border: none;
        background-image: url('<?= URL?>public/images/whitecross.png');
        background-repeat: no-repeat;
        background-position: 31px;
        background-size: 21px;
        cursor: pointer;
        border-radius: 5px;
        outline-style: none;
        font-family: agency fb2;
        font-size: 19px;
        padding: 0px 0px 0px 30px !important;
        color: #fff;
        text-shadow: 1px 1px 2px #282927;
        font-weight: bold;
        text-decoration: none;
        box-shadow: 0px -1px 1px rgb(111, 111, 111) inset;
    }
</style>

<?php
$task = "addexpense";
$getExpense = $this->getExpense;

$getCashAdv = DAOFactory::getTblNewCashAdvanceDAO()->queryAll();

$info = new TblOrganizationInfo();
$user = new TblUser();
// $org = new TblOrganization();
if (Session::getSession('user')) {
    $info = DAOFactory::getTblOrganizationInfoDAO()->load(DAOFactory::getTblUserDAO()->load(Session::getSession('user'))->orgInfoId);
    $org = DAOFactory::getTblOrganizationDAO()->load($info->orgId);
    $user = DAOFactory::getTblUserDAO()->load(Session::getSession('user'));
//    Session::setSession('medinfoid', $info->id);
}

if ($getExpense->status == 'open' && $getExpense->id != '') {
    $task = 'updateReceipt';
} elseif ($getExpense->status == 'posted') {
    $task = 'reverseReceipt';
} elseif ($getExpense->status == 'reversed') {
    $task = 'reversedReceipt';
} elseif ($getExpense->status == 'cancelled') {
    $task = 'cancelledReceipt';
} elseif ($getExpense->status == 'approved') {
    $task = 'approvedReceipt';
} elseif ($getExpense->status == 'preapproved') {
    $task = 'preApprovedReceipt';
} elseif ($getExpense->status == 'pending_reverse') {
    $task = 'pendingReverseReceipt';
}
?>
<?php if (!in_array($getExpense->status, array('reversed', 'posted')) || (isset($_POST['status']) && $_POST['status'] == 'copy')) { ?>
    <script>
        hasProfile = '<?= $this->orgInfo->tinNum == '' ? 0 : 1 ?>';
    </script>
    <script src="<?php echo URL; ?>views/expenses/js/newCashAdvance.js"></script>
    <script src="<?php echo URL; ?>public/js/custom.js"></script> 
<?php } ?>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/loading.css"/>

<script>
    newrecord = "new";
</script>


<div class="jsHolder">
    <!-- pls do not remove this -->
</div>

<div class="invoiceHolderExpense footerHeight footerHighlight">
    <div class="newInvoice formcontainernew">
        <div class="invoiceHolderCollection">
                <div class="headings">
        <span class="headTextExpense allexp fontall" style="float:left;">
            <?php
//echo ($getExpense->status);
            if ($task == 'updateReceipt') {
              echo 'UPDATE';
              } elseif ($task == 'reversedReceipt') {
              echo 'REVERSED';
              } elseif ($task == 'reverseReceipt') {
              echo 'POSTED';
              } elseif ($task == 'cancelledReceipt') {
              echo 'CANCELLED';
              }  elseif ($task == 'approvedReceipt') {
              echo 'APPROVED';
              } elseif ($task == 'preApprovedReceipt') {
              echo 'PRE-APPROVED';
              } elseif ($task == 'pendingReverseReceipt') {
              echo 'PENDING REVERSE';
              } else {
              echo 'NEW';
              }
// echo strtoupper($getExpense->status);
            ?> CASH ADVANCE
        </span>
    </div>
</div>
        <label style="float:right;padding-right:95px;">
            <?php if ($user->type == 'office manager' || $user->type == 'branch head') { ?>
                <a href="<?= URL ?>expenses/addCashAdvance" style="text-decoration:none;">    
                    <!-- <label class="largebuttonsconcash"> -->
                        <input type="button" class="createAllcASH buttonslargeSs" value="NEW CASH ADVANCE">
                    <!-- </label> -->
                </a>
            <?php } elseif ($this->getExpense->status == 'open' || $this->getExpense->status == 'posted') {
                ?>
                <a href="<?= URL ?>expenses/addCashAdvance" style="text-decoration:none;">    
                    <!-- <label class="largebuttonsconcashposted"> -->
                        <input type="button" class="createAllcASH buttonslargeSs" value="NEW CASH ADVANCE">
                    <!-- </label> -->
                </a>
                <?php
            }
            ?>
        </label>

        <?php
//}
        ?>
        <!-- <div style="float:right;margin-right:42px;margin-top:5px;">
             <label class="statusExpense">STATUS:</label>
             <input type="text" class="statExp"
                    value="<?php
        if ($this->getExpense->status == '') {
            echo 'OPEN';
        } else {
            echo strtoupper($this->getExpense->status);
        }
        ?>" readonly
                    >
 
         </div>-->
        <div style="clear:both;"></div>
    </div>  

    <form method="post" action="" class="form1NExpense expensecontainernew" id="form">
        <div id="containerNExp" style="float:left;">
            <table class="tbleExpense">
                <tr class="cus">
                    <td class = "vendor">Employee Name:</td>
                    <td>
                        <input type="hidden" name="token" value="<?=$this->token;?>">
                    <?php
                    
                            $vendor = TblSupplierMySqlExtDAO::getSupplierOrderList(Session::getSession('orgid'), 'Employee');
                    ?>
                        <select class="sc vendor101 " name="supplierId" id="supplierId" required>
                            <option  value="" address="" tin="" ></option>
                            <option value="addsupplier" class="addVendorOption">[Add vendor]</option>
                            <?php
                            $vendorselected = $this->getExpense->supplierId != '' ? DAOFactory::getTblSupplierDAO()->load($this->getExpense->supplierId) : new TblSupplier();

                            // $mission_volunteer = TblSupplierMySqlExtDAO::getSupplierOrderList(Session::getSession('orgid'), 'Mission Volunteer');

                            // foreach ($mission_volunteer as $item) {
                                // $vendor[] = $item;
                            // }

                            foreach ($vendor as $item) {
                                if ($item->activeAccount == 'yes') {
                                    ?>
                                    <option currency="<?= $item->currencyId ?>" value="<?php echo $item->id ?>" address="<?= $item->address ?>" tin="<?= $item->tin ?>"
                                    <?= $item->id == $this->getExpense->supplierId ? 'selected="selected"' : ''; ?> 
                                    <?php
                                    if (Session::getSession('vendorSessionId') == $item->id) {
                                        echo ' selected="selected" ';
                                        Session::setSession('vendorSessionId', false);
                                    }
                                    ?>
                                    supplierType="<?= $item->type ?>" grossIncome="<?= $item->grossIncome ?>" 

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
                    <td class="addSample">TIN:</td>
                    <td>
                        <input type="text" class="sc tinexp" style="margin-top:5px; padding:5px;" name="tin" id="tin" value="" readonly>
                    </td>
                </tr>
                <tr class="cus">
                    <td class="addSample"><div style="margin-top:-30px;">Address:</div></td>
                    <td>
                        <textarea class="add" name="address" id="address" readonly tabindex="-1"></textarea>
                    </td>
                </tr>
                <tr class="cus">
                    <td class="addSample">Type of CA:</td>
                    <td>
                        <select name="typeOfCA" class="selectCAType" required >
                            <option value="">--Select--</option>
                            <option value="Officer Employee" <?= $this->getExpense->typeOfCA == 'Officer Employee' ? 'selected' : '' ?>>For Liquidation</option>
                            <option value="For Liquidation" <?= $this->getExpense->typeOfCA == 'For Liquidation' ? 'selected' : '' ?>>Salary Deduction</option>
                        </select>
                        <span style="color:red">*</span>
                    </td>
                </tr>


            </table>

        </div>          
        <div style="float:right;margin-right:25px;">            
            <table class="expensetableNewNew">  
                <tr class="cus">
                    <td style="padding-top: 15px;">Status:</td> 
                    <td>
                        <input type="text" style="background:#c8c8c8;border:none;font-weight:bold;" class="expenseText" name="expenseNumber" required readonly
                               value="<?php
                               /* if ($this->getExpense->status == '') {
                                 echo 'OPEN';
                                 } else {
                                 echo strtoupper($this->getExpense->status);
                                 }
                                */
                               if ($this->getExpense->status == '') {
                                   echo 'OPEN';
                               } else if ($this->getExpense->status == 'pending_reverse') {
                                   echo 'PENDING REVERSE';
                               } else if ($this->getExpense->status == 'preapproved') {
                                   echo 'PRE-APPROVED';
                               } else if ($this->getExpense->status == 'approved_reverse') {
                                   echo 'APPROVED REVERSE';
                               } else if ($this->getExpense->status == 'preapproved_reverse') {
                                   echo 'PRE-APPROVED REVERSE';
                               } else {
                                   echo strtoupper($this->getExpense->status);
                               }
                               ?>">
                    </td>
                </tr>
                <tr class="cus">
                    <td style="padding-top: 15px;">CA No.:</td> 
                    <td>
                        <input type="text" style="background:#c8c8c8;border:none;" class="expenseText" name="expenseNumber" required readonly
                               value="<?= $getExpense->cashAdvanceNum ?>">
                    </td>
                </tr>
                <tr class="cus">
                    <td style="padding-top: 15px;">CV No.:</td> 
                    <td>
                        <input type="text"  class="expenseText" name="referenceNumber" required
                               value="<?= $this->getExpense->referenceNumber ?>">
                        <span style="color:red">*</span>
                    </td>
                </tr>

                <tr class="cus">
                    <td style="padding-top: 15px;">Date Issued:</td>
                    <td>
                        <input type="text" id="<?php echo in_array($this->getExpense->status, array('', 'open', 'rejected')) ? 'di' : '' ?>" class="expenseText" name="dateIssued"
                               value="<?= $this->getExpense->dateIssued == '' || $this->getExpense->id == '' ? date('m/d/Y') : date('m/d/Y', strtotime($this->getExpense->dateIssued)) ?>">
                        <span style="color:red">*</span>
                    </td>
                </tr>
                <tr class="cus">
                    <td style="padding-top: 15px;">Check No.:</td>
                    <td>
                        <input type="text" class="expenseText" name="particular" 
                               value="<?= $this->getExpense->particular ?>" >
                        <!-- <span style="color:red">*</span> -->
                    </td>
                </tr>

            </table>
        </div>  
        <div style="clear:both;"></div>
        <div style="height:30px;"></div>
        <table class="table1NewExpensesNew1">

            <tr class="tablet">
                <!--<th class="neg"></th>-->
                <th style="padding-left: 20px;">Account Name</th>
                <th>Particulars</th>
                <th width="20%" style="text-align:right;padding-right:25px!important;">Amount</th>
                <!--<th class="neg"></th>-->
            </tr>
            <tbody>
                <?php if (!$this->getExpenseLine) { ?>
                    <tr class="no-bg">
                        <!--<td class="neg">
                            <input type="button" name="delete"  class="del delitem" onclick="deleteRow(this)">
                        </td>-->
                        <td class="">
                            <input type="text" style="padding-left: 20px;" name="accountName[]" value="Cash Advance" readonly />
                        </td>
                        <td class="">
                            <input type="text" name="memo[]" value="" maxlength="100" required />
                        </td>
                        <td class="">
                            <input type="text" value="" name="amount[]" class="isNumeric" required maxlength="11" style="padding-right: 25px!important;">
                        </td>
                        <!--<td class="neg">
                            <div class="adel">
                                <input type="button" name="add"  class="a addtask" id="addtask">
                            </div>
                        </td>-->
                    </tr>
                    <?php
                } else {
                    foreach ($this->getExpenseLine as $each) {
                        ?>
                        <tr class="no-bg">
                            <!--<td class="neg">
                            </td>-->
                            <td class="">
                                <input type="text" style="padding-left: 20px;" name="accountName[]" value="<?= $each->accountName ?>" readonly />
                            </td>
                            <td class="">
                                <input type="text" name="memo[]" value="<?= $each->particular ?>" maxlength="100" required />
                            </td>
                            <td class="">
                                <input type="text" value="<?= Controller::getFloat($each->netAmount) ?>" name="amount[]" class="isNumeric" required maxlength="11" style="padding-right: 25px!important;">
                            </td>
                            <!--<td class="neg">
                                <div class="adel">
                                    <input type="button" name="add"  class="a addtask" id="addtask">
                                </div>
                            </td>-->
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
        <div style="float:left;">
            <div style="margin-left:25px;margin-top:35px;">
                <label style="font-family:Verdana;font-size:12px;">GL Posting:</label>
                <select class="item-text2NewItem item-textNewItem classGl" name="glPosting" id="glPosting2" required style="width:229px;height:27px;">
                    <option value=""></option>
                    <?php
                        $coas = DAOFactory::getTblCoaDAO()->queryByOrgId(Session::getSession('orgid'));
                        $coas2 = TblCoaMySqlExtDAO::getCoaByCoaNum(Session::getSession('orgid'), '%1000-003-%');
                        //$coaArray = array('1000-002', '1000-003');
                        $coaArray = array('1000-001', '1000-002');
                        if ($coas2) {
                            $coaArray = array('1000-001', '1000-002');
                        }
                        
                        foreach ($coas as $coa) {
                            if (in_array($coa->accountNum, $coaArray)) {
                                ?>
                                <option value="<?php echo $coa->id ?>" <?php echo ($coa->id == $this->getExpense->glPosting) ? 'selected' : '' ?>><?php echo $coa->accountNum ?> - <?php echo $coa->accontName ?></option>

                                <?php
                            }
                        }
                        if ($coas2) {
                            foreach ($coas2 as $coa) {
                                if($coa->activeAccount == 'yes'){
                        ?>
                                    <option value="<?php echo $coa->id ?>" <?php echo ($coa->id == $this->getExpense->glPosting) ? 'selected' : '' ?>><?php echo $coa->accountNum ?> - <?php echo $coa->accontName ?></option>
                        <?php
                                }
                            }
                        }
                    ?>
                    <option value="addBank">[Add Bank]</option>
                </select>
                <span style="color:red;">*</span>

                <?php
                if ($this->getExpense->status == 'approved') {
                    ?>
                    <input type="hidden" name="glPosting" value="<?php echo $this->getExpense->glPosting ?>"/>
                    <?php
                }
                ?>
            </div>
        </div>

        <div style="float:right;margin-top:35px;margin-right:10px;">
            <table class="table3Expense" style="width: 270px!important;margin-top:0px!important;float:none!important;margin-right:17px!important;">
                <tr class="gtotal">
                    <td style="padding:5px;" class="gt">Total CA Amount:</td>
                    <td class="amountNewExpense " id="gt">
                        <input type="text" class="isFloat vatTotalAmount" name="vatTotalAmount" readonly
                               value="<?= Controller::getFloat($this->getExpenseAmount->grandTotal) ?>" style="background:none;color:#fff; font-weight:bold;"/>
                    </td>
                </tr>
            </table>
        </div>
        <div class="clear"></div>
        <div class="lineCashAdvance"></div>
        <div style="text-align:right;padding-right:25px;">
            <div class="buttonsExpensesCFC" style="margin-left:25px;">
                <?php if (($useraccess->Add == 'yes' || $useraccess->Edit == 'yes') && !isset($_POST['approvalstat'])) { ?>
                    <?php if (in_array($this->getExpense->status, array('', 'open', 'rejected'))) { ?>
                        <input class="bn bnexpense addsavebutton" type="submit" name="save" value="SAVE" style="margin-top:10px;margin-left:5px;">
                        <input class="bn bnSend addsavebutton" type="button" name="send" value="POST">
                    <?php } elseif ($this->getExpense->status == 'approved' && $useraccess->post == 'yes') { ?>
                        <input class="bnP postExpense addsavebutton" type="button" name="post" value="POST">
                    <?php } ?>
                <?php } else { ?>
                    <div>
                        <?php if ($useraccess->preApproved == 'yes' && $this->getExpense->status == 'pending') { ?>
                            <input type="submit" class="buttonNew bnpreApproved addsavebutton" value="PRE-APPROVE">
                            <input type="submit" class="buttonNew bnReject addsavebutton" value="REJECT">
                        <?php } elseif ($useraccess->approved == 'yes' && $this->getExpense->status == 'preapproved') { ?>
                            <input type="submit" class="buttonNew bnApprove addsavebutton" value="APPROVE">
                            <input type="submit" class="buttonNew bnReject addsavebutton" value="REJECT">
                        <?php } elseif ($useraccess->preApproved == 'yes' && $this->getExpense->status == 'pending_reverse') { ?>
                            <input type="submit" class="buttonNew bnPreAppreverse addsavebutton" value="PRE APPROVE">
                            <input type="submit" class="buttonNew bnRejectreverse addsavebutton" value="REJECT" id="reject">
                        <?php } else { ?>
                            <input type="submit" class="buttonNew bnAppreverse addsavebutton" value="APPROVE">
                            <input type="submit" class="buttonNew bnRejectreverse addsavebutton" value="REJECT" id="reject">
                        <?php } ?>
                    </div>
                <?php } ?>
                <input type="hidden" name="task" value="<?php echo $task ?>" />
                <input type="hidden" name="approvalStatus" value="" />
            </div>
            <?php
//            if ($this->getExpense->status == 'posted' && ($user->type == 'office manager' || $user->type == 'admin') && ( $this->getLiquidation &&
                    if ($this->getExpense->status == 'posted'  && ( $this->getLiquidation &&
                    (
                    $this->getLiquidation->status == 'reversed' ||
                    $this->getLiquidation->status == 'cancelled' ||
                    $this->getLiquidation->status == ''
                    ) )
            ) {
                ?>
                <div class="buttonReverse">
                    <input type="button" name="reverse" value="REVERSE" class="reverseExpense addsavebutton">
                </div>
            <?php } ?>
        </div>
        <div>
            <?php if (!empty($this->getExpense->rejectedRemarks)) { ?>
                <fieldset>
                    <legend>Rejected Remarks</legend>
                    <?php echo $this->getExpense->rejectedRemarks ?>
                </fieldset>
            <?php } ?>
            <?php if (!empty($this->getExpense->reversedRemarks)) { ?>
                <fieldset>
                    <legend>Reversed Remarks</legend>
                    <?php echo $this->getExpense->reversedRemarks ?>
                </fieldset>
            <?php } ?>
        </div>
        <div style="clear:both;"></div>
    </form>
</div>
<div class="popBack hidden"></div>
<div class="popup hidden">
    <div class="remarksPopout hidden">
        <?php include('views/invoice/remarks.php'); ?>
    </div>
</div>
<script>
    status = 'new';
    $(function () {
		 $('#supplierId').change(function () {
            if ($(this).val() == 'addsupplier') {
                $.post(URL + 'expenses/newvendor', {returnurl: 'expense'})
                        .done(function (returnData) {
                            $('.popBack').html(returnData);
                            $('.popBack').removeClass('hidden');
                            $('body').css('overflow', 'auto');
                             $('input[name="trig"]').val('ajaxLoad');
                            $('.vendor101').addClass('objSelected');

                            $('.closeNewVendor').click(function () {
                                if (confirm('Are you sure you want to leave this page without saving?')) {
                                    $('#supplierId').val('');
                                    $('#supplierId').change();
                                    $('.popBack').addClass('hidden');
                                    $('.popBack').html('');
                                }
                            });
                        })
                        .fail(function () {
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
<?PHP
if (!in_array($this->getExpense->status, array('open', 'approved', 'rejected', ''))) {
    ?>
            $('form').submit(function () {
                alert('test');
                return false;
            });
            $('input[type="text"], input[type="date"], textarea').prop('readonly', true);
            $('input[type="checkbox"]').prop('disabled', true);
            $('select').prop('disabled', true);
            //            $('.buttonExpenses').remove();
            $('.buttonReverse').removeClass('hidden');
            $('.neg').remove();
            /* 
             $('.reverseExpense').click(function () {
             confirmReverse = confirm('Are you sure you want to reverse this cash advance?');
             if (confirmReverse) {
             $.post(URL + 'expenses/setCashAdvanceReverse', {'id': '<?= $this->getExpense->id ?>'})
             .done(function (returnData) {
             if (returnData == 0) {
             location.reload();
             } else {
             alert(returnData);
             }
             });
             }
             return false;
             });
             */
            $('.reverseExpense').click(function () {

                confirmReverse = confirm('Are you sure you want to reverse this expense?');
                if (confirmReverse) {
                    $('.popup').removeClass('hidden');
                    $('.remarksPopout').removeClass('hidden');
                    $('body').css('overflow', 'hidden');
                    $('textarea').prop('readonly', false);
                    $('.closeCNTsexp').click(function () {
                        $('.popup').addClass('hidden');
                        $('body').css('overflow', 'auto');
                    });
                    return false;
                }
                return false;

            });

            $('.okButton').click(function () {

                remarks = $('.remarksText').val().trim();
                let token = $('input[name="token"]').val();
                if (remarks == '') {
                    alert('Please input your remarks.');
                } else {
                    $('body').css('overflow', 'hidden');
                    $('.popup').html('<div class="loadingevent2"><img src="' + URL + 'public/images/processing.gif" class="loadingimg" /></div>');
                    $('.popup').removeClass('hidden');

                    current_status = '<?= $this->getExpense->status ?>';
                    // if ($('input[name="approvalStatus"]').val() == 'rejected' && jQuery.inArray(current_status,["pending","preapproved"]) > -1) {
                            // $.post(URL + 'expenses/setCashAdvance?id=' + <?= $this->getExpense->id ?> +'&remarks='+remarks, $('.form1NExpense').serialize())
                                    // .done(function (returnData) {
                                        // if (returnData == 0) {
                                            // location.reload();
                                        // } else {
                                            // alert(returnData);
                                        // }
                                    // });
                    // } else {
                        // $.post(URL + 'expenses/setCashAdvanceReverse', {'id': '<?= $this->getExpense->id ?>', 'remarks': remarks})
                        $.post(URL + 'expenses/setCashAdvanceReverse', {'id': '<?= $this->getExpense->id ?>', 'remarks': remarks, 'status': 'pending_reverse', 'token':token})
                                .done(function (returnData) {
                                    returnData = returnData.trim();
                                    if (returnData == 0) {
                                        location.reload();
                                    } else {
                                        alert(returnData);
                                    }
                                });
                    // }
                }
                return false;
            });

            $('.bnPreAppreverse').click(function () {
                if (confirm('Are you sure you want to pre approve this transaction?')) {
                    $('body').css('overflow', 'hidden');
                    $('.popBack').html('<div class="loadingevent2"><img src="' + URL + 'public/images/processing.gif" class="loadingimg" /></div>');
                    $('.popBack').removeClass('hidden');
                    $.post(URL + 'expenses/setCashAdvanceReverse', {'id': '<?= $this->getExpense->id ?>', 'status': 'preapproved'})
                            .done(function (returnData) {
                                if (returnData == 0) {
                                    location.reload();
                                } else {
                                    alert(returnData);
                                }
                            });
                }
                return false;
            });


            $('.bnAppreverse').click(function () {
                if (confirm('Are you sure you want to approve this transaction?')) {
                    $('body').css('overflow', 'hidden');
                    $('.popBack').html('<div class="loadingevent2"><img src="' + URL + 'public/images/processing.gif" class="loadingimg" /></div>');
                    $('.popBack').removeClass('hidden');
                    $.post(URL + 'expenses/setCashAdvanceReverse', {'id': '<?= $this->getExpense->id ?>'})
                            .done(function (returnData) {
                                if (returnData == 0) {
                                    location.reload();
                                } else {
                                    alert(returnData);
                                }
                            });
                }
                return false;
            });

            $('#reject').click(function () {
                if (confirm('Are you sure you want to reject this transaction?')) {
                    $('body').css('overflow', 'hidden');
                    $('.popBack').html('<div class="loadingevent2"><img src="' + URL + 'public/images/processing.gif" class="loadingimg" /></div>');
                    $('.popBack').removeClass('hidden');
                    $.post(URL + 'expenses/setCashAdvanceReverse', {'id': '<?= $this->getExpense->id ?>', 'status': 'reject', 'type': 'reject_pending_reverse'})
                            .done(function (returnData) {
                                if (returnData == 0) {
                                    location.reload();
                                } else {
                                    alert(returnData);
                                }
                            });
                }
                return false;
            });

<?php } ?>

<?PHP
if (!in_array($this->getExpense->status, array('open', 'approved', 'rejected', ''))) {
    ?>
            $('form').submit(function () {
                return false;
            });
            $('input[type="text"], input[type="date"], textarea').prop('readonly', true);
            $('input[type="checkbox"]').prop('disabled', true);
            $('select').prop('disabled', true);
            //            $('.buttonExpenses').remove();
            $('.neg').remove();
<?php } ?>

<?PHP
if ($this->getExpense->status == 'approved') {
    ?>
            $('input[type="text"], input[type="date"], textarea').prop('readonly', true);
            //            $('input[type="checkbox"]').prop('disabled', true);
            $('select').prop('disabled', true);
            //            $('.buttonExpenses').remove();
            $('.neg').remove();
<?php } ?>


    });
</script>
<script>
    $(function () {
        coa = $('select[name="coaId[]"]').val();
        coaNum = $('select[name="coaId[]"] option:selected').attr('accountnum');
        if (coaNum == '6001-015' || coaNum == '6001-019' || coaNum == '6001-020') {
            $('.wtHolder').removeClass('hidden');
        }
<?php if (!$this->getExpenseLine) { ?>
            // $('select[name="vat[]"]:last').val(2);
<?php } ?>
    });
</script>
<?php

function getCoaRate($accountNum, $getUserCoaTop5kRate) {
    if ($getUserCoaTop5kRate) {
        if (array_key_exists($accountNum, $getUserCoaTop5kRate)) {
            return $getUserCoaTop5kRate[$accountNum];
        }
    }
    return 0;
}
?>
<div class="scriptHolder">
</div>