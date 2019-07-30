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
        padding-bottom: 20px;
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
        width: 100px;
        height: 28px;
        cursor: pointer;
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
                <tr>
                    <td><input type="checkbox"></td>
                    <td>4/05/2016</td>
                    <td>CM</td>
                    <td>CM-00001</td>
                    <td class="amountline">50</td>
                </tr>
            </table>

            <div class="buttonContainer">
                <input type="button" value="CANCEL" class="buttonCm hidden">
                <input type="button" value="APPLY CM/SR" class="buttonCm addsavebuttonpop">
            </div>
        </div>

    </form>

</div>

