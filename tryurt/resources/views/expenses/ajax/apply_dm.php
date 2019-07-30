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
    .cmform{
        background-color: white;
        width:697px;
        margin: auto !important;
        margin-top: 70px !important;
        /*  border: 2px solid #24b6ef; */
        padding-bottom: 20px;
        /* box-shadow: 1px 1px 1px 1px rgb(7, 124, 7); */
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
        margin-top:15px;
    }
    .formCmtable{
        width:100%;
        margin:auto;
        font-family:verdana;
        font-size:12px;
    }
    .buttonContainer{
        margin-top:35px;
        text-align:right;
    }
    .buttonCm{
        /* background-color:#183867;
        color:#fff;
        font-family:agency fb2;
        font-size:18px;
        border:none;
        border-radius:5px;
        padding: 2px 15px 2px 15px; */
        width: 100px;
        height: 28px;
        pointer:cursor;
    }
    .amountline{
        text-align:right;
    }
    #newCNTs{
        font-family: agency fb2;
        color: #c51400;
        font-weight: bold;
        font-size: 30px;
        padding-left: 32px;
        padding-top: 25px;
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
<div class="container">
    <form method="post" action="<?php echo URL ?>invoice/collection" class="cmForm boxshadow" id="form">
        <input type="button" class="close1Client" value="x">
        <!--<div class="titleEnterPayment">ENTER PAYMENT</div>-->
        <div id="newCNTs">
            CM/SALES RETURN
        </div>
        <div class="formCm">
            <table class="formCmtable">
                <tr>
                    <th width="2%"></th>
                    <th width="30%">Date</th>
                    <th width="30%">Type</th>
                    <th width="35%">Ref. No</th>
                    <th width="35%">Amount</th>
                </tr>
                <?php
                $tax = DAOFactory::getTblTaxDAO()->queryByTaxCode('Vatable');
                if ($this->data) {
                    foreach ($this->data as $cm) {
                        $amount = $_POST['type'] == 'sales' ? $cm->grandTotal / ((100 + $tax[0]->rate)/100) : $cm->grandTotal;
                        ?>
                        <tr>
                            <td><input type="<?php echo $_POST['type'] == 'sales' ? 'radio' : 'checkbox' ?>" value="<?php echo $cm->id ?>" class="chkcm" name="chkcm"/>
                                <input type="hidden" class="chk_cmamount" value="<?php echo $amount ?>" />
                                <input type="hidden" class="type" value="cm" />
                            </td>
                            <td><?php echo date('m/d/Y', strtotime($cm->dateIssued)) ?></td>
                            <td>Purchase Return</td>
                            <td><?php echo $cm->purchaseReturnNo ?></td>
                            <td class="amountline"><?php echo Controller::getFloat($amount) ?></td>
                        </tr>
                        <?php
                    }
                }
                
                
                ?>
            </table>

            <div class="buttonContainer">
                <input type="button" value="CANCEL" class="buttonCm hidden">
                <input type="button" value="APPLY CM/SR" class="buttonCm addsavebuttonpop" id="buttonCm">
            </div>
        </div>

    </form>

</div>

