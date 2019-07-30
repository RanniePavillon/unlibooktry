<style>
    .popBack, .popBackN{
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
        padding-top:3px !important;
    }
    .enterpaymentForm{
        background-color: white;
        width: 900px;
        margin: auto !important;
        margin-top:30px !important;
        border: 2px solid #24b6ef;
        padding-bottom: 20px;
        margin-bottom:30px !important;
    }
    .titleEnterPayment{
    }
    .table1Enter{
        margin-left:20px;
        margin-top: 0px;
    }
    .table{
        border-spacing: 5px;
    }
    .table1Enter td{
        font-size:12px;
        font-family:Verdana;
        color: #000000;
        padding:5px;
    }
    .cnitableCollection tr th:nth-child(4)(5){
        text-align: right;
    }
    .table1Enter select{
        width:248px;
        height:27px;
        font-family:Verdana;
        font-size:12px;
    }
    table1Enter input[type=text]{
        width: 170px;
        height: 25px;
        padding-left: 5px;
        margin-top:-5px;
        font-family:calibri;
        font-size:17px;
    }	

    .table2Enter{

    }
    .table2Enter{
        border-spacing: 5px;
    }
    .table2Enter td{
        font-size:12px;
        font-family:Verdana;
        color: #000000;
    }

    .textEnterPaymentnew{
        height: 27px;
        width: 190px;
        padding-left: 5px;
        font-family:Verdana;
        font-size:12px;
    }
    .textarea{
        width: 248px;
        height: 90px;
        max-height: 90px;
        max-width: 270px;
        padding-left: 5px;
        font-family:Verdana;
        font-size:12px;
    }
    .note{
        position: relative;
        top: -28px;
    }
    .search{
        margin-left: 20px;
        margin-top: 0px;
    }
    .txtsearch2::-webkit-input-placeholder{
        color:gray;
        padding-left:7px;
    }
    .txtsearch2{
        width: 220px;
		height: 30px;
		border: 1px solid #c8c8c8;
		padding-left:3px !important;
		padding-right:24px;
		text-align: left;
		font-family: agency fb2;
		font-size: 16px;
		font-weight: bold;
		color: #000;
		outline-style: none;
		border-radius: 2px;
		background: #fff;
    }
    .mainTable{
        border-collapse: collapse;
        width: 97%;
        margin-top: 10px;
        margin:auto;
    }

    .mainTable th{
        /* background-color: #c51400; */
        color: white;
        font-weight: bold;
        font-size: 12px;
        font-family:Verdana;
        text-align: left;
        padding:5px;
    }
    .mainTable td{
        color: black;
        font-weight:normal;
        font-size:12px;
        font-family: Verdana;
        text-align: left;
        padding:5px !important;
    }

    .tableDiv{
        margin-top:10px;
        margin-left:8px;
    }
    .mainTable tr th:nth-child(6){
        text-align: right;
    }
    .mainTable tr th:nth-child(5){
        text-align: right;
    }
    .mainTable tr th:nth-child(7){
        text-align: right;
    }
    .mainTable tr td:nth-child(6){
        text-align: right;
    }
    .mainTable tr td:nth-child(5){
        text-align: right;
    }
    .mainTable tr td:nth-child(7){
        text-align: right;
    }
    .mainTable a{
        color: blue;
    }
    .mainTable input[type=text]{
        width: 120px;
        height: 25px;
        text-align: right;
        margin-top: 1px;
        font-family:Verdana;
        font-size:12px;
    }
    .hrclass{
        width: 99%;
        margin: auto;
        margin-top: 40px;
        border-top: none;
        border-bottom: 1px solid #c8c8c8;
    }

    .mainTable tr:hover{
        background-color: #c8c8c8;
    }
    .buttons1{
        width: 100px;
        height: 28px;
        border-radius: 4px;
        border: none;
        background-image:url('<?= URL ?>public/images/post_payment.png');
        background-repeat:no-repeat;
        cursor: pointer;
        font-family:Agency FB;
        font-size:17px;
        font-weight:bold;
        outline-style:none;
    }
    .buttons{
        width: 100px;
        height: 28px;
        border-radius: 4px;
        border: none;
        cursor: pointer;

    }
    .selectPay{
        width:248px;
        height:27px;
        font-family:Verdana;
        font-size:12px;
    }
    .mainTable input[type="text"]{
        background:none;
        border:none;
    }

    .close1Client{
        background: transparent;
        color: black;
        border: none;
        border-radius: 2px;
        font-family: Arial black;
        font-weight: bold;
        font-size: 24px;
        right: 205px;
        top: 70px;
        outline-style: none;
        cursor: pointer;
        float: right;
        margin-right: 5px;
    }
    .loadingHolder{
        margin-top:15%;
        margin-left:45%;
    }
    .loadingimg{
        width:140px;
        height:140px;
    }
    .partialtable{
        margin-top:5px;
        margin-left:20px;
    }
    .partialpayments{
        height: 27px;
        width: 248px;
        font-size: 12px;
        font-family: verdana;
        padding:5px;
        border:solid 1px #c8c8c8;
    }
    .scrolling{
        overflow:scroll;
        height:180px;
    }
    .cm{
        background: linear-gradient(0deg, rgb(156, 26, 11) 30%, rgb(197, 56, 40) 78%);
        color: #fff;
        padding: 5px;
        height: 30px;
        border: none;
        border-radius: 5px;
        width: 150px;
        font-weight: bold;
        font-family: AGENCY FB2;
        font-size: 17px;
        margin-left: 245px;
        margin-top: -30px;
    }
    .table1Enter td{
        padding-top:0px !important;
    }
    .table2Enter td{
        padding-top:0px !important;
    }
    .glpost{
        width: 248px;
        height:27px;
        font-family:verdana;
        font-size:12px;
    }
</style>

<title>
    Collection
</title>
<?php
$taxtype = DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('infoid'))->typeOfTax;
$whtTax = TblTrialBalanceMySqlExtDAO::getLastCollectionWht();
?>
<script>
    taxtype = "<?php echo $taxtype ?>";
</script>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<script src="<?php echo URL ?>views/sales/js/enter_payment.js"></script>

<div class="jsHolder"></div>
<div class="container">
    <form method="post" action="<?php echo URL ?>sales/collection" class="enterpaymentForm boxshadow" id="salesCollectionForm">
        <div class="titleEnterPayment headingspop">ENTER PAYMENT</div>
        <table class="table1Enter" style="float:left;">
            <tr>
                <td>Date Received:</td>
                <td>
                    <input type="hidden" name="token" value="<?=$this->token;?>">
                    <input type="text" id="di" name="dateReceived" required style="width:248px!important;" class="textEnterPaymentnew" value="<?php echo date('m/d/Y') ?>">
                </td>
            <input type="hidden" id="di" name="dateCreated" required style="width:248px!important;" class="textEnterPaymentnew dd" value="<?php echo date('m/d/Y') ?>">
            </tr> 

            <tr>
                <td>Received from Customer:</td>
                <td colspan="3">
                    <select class="table1Enterselect client" name="clientId" >
                        <option></option>
                        <?php
                        if ($this->client) {
                            foreach ($this->client as $item) {
                                ?>
                                <option value='<?php echo $item->id ?>'><?php echo $item->name ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Withholding Tax:</td>
                <td>
                    <select class="wtax" name="whtTax" id="whtax" required>
                        <option value="0" <?= $whtTax == '' ? 'selected' : '' ?>>--Select--</option>
                        <option value="0" <?= $whtTax == '0' ? 'selected' : '' ?>>0%</option>
                        <option value="1" <?= $whtTax == '1' ? 'selected' : '' ?>>1%</option>
                        <option value="2" <?= $whtTax == '2' ? 'selected' : '' ?>>2%</option>
                        <option value="5" <?= $whtTax == '5' ? 'selected' : '' ?>>5%</option>
                        <option value="10" <?= $whtTax == '10' ? 'selected' : '' ?>>10%</option>
                        <option value="15" <?= $whtTax == '15' ? 'selected' : '' ?>>15%</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:left;">
                    <label>Received 2307 form</label> 
                    <input type="radio" name="received2307" value="yes" class="2307form" style="margin-left:36px;" id="yes2307"><label for="yes2307">Yes</label>
                    <input type="radio" name="received2307" value="no" class="2307form" id="no2307"><label for="no2307">No</label>
                    <span style="color:red;">*</span>
                </td>
            </tr>
            <tr class="hidden">
                <td>Amount Received:</td>
                <td>
                    <input required type="text" name="amountReceived" id="amountReceived" class="textEnterPaymentnew isNumeric" id="amountReceived" style="border: 1px solid rgb(187, 185, 185);">
                </td>
            </tr>

            <tr class="hasClientSelected hidden">
                <td>
                    <input type="checkbox" id="useEnterPayment" name="overPayment"/>
                    <label for="useEnterPayment">
                        Apply Overpayment
                    </label>
                </td>
                <td>
                    <input type="text" class="op textEnterPaymentnew isNumeric" value="" readOnly />                 
                </td>
            </tr>

        </table>

        <table class="table2Enter" style="float:right;margin-right:20px;">
            <thead>
                <tr>
                    <td>Method of Payment:</td>
                    <td><select class="selectPay" name="mopId">
                            <?php
                            $mop = DAOFactory::getTblMopDAO()->queryAll();
                            foreach ($mop as $each) {
                                echo '<option value="' . $each->id . '" title="' . $each->description . '">' . $each->code . '</option>';
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Payment No.:</td>
                    <td>
                        <input type="text" name="refNum" style="width:248px!important;" class="textEnterPaymentnew" value="<?php echo $this->casNo != '' ? $this->casNo : $this->paymentNum ?>" required>
                        <span style="color:red;">*</span>
                    </td>
                </tr>
<!--                <tr>
                    <td>Ref No.:</td>
                    <td>
                        <input type="text" name="refNum" style="width:248px!important;" class="textEnterPaymentnew" value="">
                        <span style="color:red;">*</span>
                    </td>
                </tr>-->
                <tr>
                    <td class="note">Notes:</td>
                    <td colspan="3"><textarea name="notes" class="textarea"></textarea></td>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        <div style="clear:both"></div>
        <div class="search">
            <input type="search" placeholder="Search Delivery Receipt No." class="txtsearch2" name="search"> 
            <input type="button" class="searchbutton search2Colpay" value="" id="search" style="margin-top:0px !important;">
        </div>
        <input type="button" class="cm hidden" value="APPLY CM/SR">
        <div class="tableDiv">
            <div class="scrolling">
                <table class="mainTable">
                    <thead>
                        <tr>
                            <th width="1%"><input type="checkbox" id='toggle'></th>
                            <th width="13%">Transaction Number</th>
                            <th width="10%">CM/Ref. SR No.</th>
                            <th width="10%">Date</th>
                            <th width="10%">Total SI Amount</th>
                            <th width="10%" style="text-align:right;">WHT Amount</th>
                            <th width="10%" style="text-align:right;">Applied Amount</th>
                            <th width="10%" style="text-align:right">Amount Balance</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="buttonscontainer">
            <div class="partialpaymentforms" style="float:left;">
                <table class="partialtable">
                    <tr>
                        <td class="partials">If partial payment</td>
                        <td><input type="text" class="isNumeric partialpayments" ></td>
                    </tr>
                    <tr>
                        <td style="font-family:Verdana;font-size:12px;margin-left:0px;">GL Posting:</td>
                        <td>
                            <select class="item-text2NewItem item-textNewItem glpost" name="glPosting" id="glPosting2" required style="">
                                <option value=""></option>
                                <option value="addBank">[Add Bank]</option>
                                <?php
                                $coas = DAOFactory::getTblCoaDAO()->queryByOrgId(Session::getSession('orgid'));
                                $coas2 = TblCoaMySqlExtDAO::getCoaByCoaNum(Session::getSession('orgid'), '%1000-003-%');
                                //$coaArray = array('1000-002', '1000-003');
                                $coaArray = array('1000-002');
                                if ($coas2) {
                                    $coaArray = array('1000-002');
                                }

                                foreach ($coas as $coa) {
                                    if (in_array($coa->accountNum, $coaArray)) {
                                        ?>
                                        <option value="<?php echo $coa->id ?>" <?php //echo ($coa->id == $this->getExpense->glPosting) ? 'selected' : ''   ?>><?php echo $coa->accountNum ?> - <?php echo $coa->accontName ?></option>

                                        <?php
                                    }
                                }
                                if ($coas2) {
                                    foreach ($coas2 as $coa) {
                                        if ($coa->activeAccount == 'yes') {
                                            ?>
                                            <option value="<?php echo $coa->id ?>" <?php //echo ($coa->id == $this->getExpense->glPosting) ? 'selected' : ''   ?>><?php echo $coa->accountNum ?> - <?php echo $coa->accontName ?></option>
                                            <?php
                                        }
                                    }
                                }
                                ?>
                            </select>
                            <span style="color:red;">*</span>
                        </td>
                    </tr>
                </table>
            </div>
            <div style="float:right;margin-right:20px;margin-top:45px;">
                <input type="button" value="Cancel" class="buttons cancel close1Client2 addsavebuttonpop">
                <input type="submit" value="Post" class="buttons1 addsavebuttonpop" style="margin-right:5px;">
                <input type="hidden" name="task" value="payment" />
            </div>
            <div style="clear:both;"></div>
        </div>

    </form> 

    <div class="cm_content"></div>
</div>
<div class="popup2"></div>
<div class="popBackN hidden"></div>
