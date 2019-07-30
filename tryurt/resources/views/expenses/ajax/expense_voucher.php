<style>
    body{
        overflow:hidden;
    }
    .popBack, .popup{
        background: black;
        position: fixed;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        background-color: rgba(1, 1, 1, 0.3);
        /* overflow:auto; */
    }
    .evCont{
        width:100%;
        margin:auto;
        padding:0;
    }
    .evHolder{
        width:800px;
        height:auto!important;
        margin:auto;
        font-family:Verdana;
        font-size:12px;
        background: #fff;
        margin-top: 30px;
        margin-bottom: 50px;
        padding-bottom: 50px;
    }
    li{
        list-style-type:none;
    }
    .companyInfo li{
        padding-top:5px;
    }
    .xButton{
        background: transparent;
        color: black;
        border: none;
        border-radius: 2px;
        font-family: Arial black;
        font-weight: bold;
        font-size: 18px;
    }
    .buttonRight{
        background: -webkit-linear-gradient(90deg, rgb(156, 26, 11) 30%, rgb(197, 56, 40) 78%);
        background: -o-linear-gradient(90deg, rgb(156, 26, 11) 30%, rgb(197, 56, 40) 78%);
        background: -ms-linear-gradient(90deg, rgb(156, 26, 11) 30%, rgb(197, 56, 40) 78%);
        background: linear-gradient(0deg, rgb(156, 26, 11) 30%, rgb(197, 56, 40) 78%);
        border: none;
        color: #fff;
        padding:4px 13px;
        border-radius: 3px;
        font-weight: bold;
        font-size: 12px;
    }
    .inpEV{
        border-bottom:1px solid #000!important;
        border:none;
        outline-style: none;
        width: 150px;
    }
    .inpEV2{
        width:300px;
        outline-style: none;
    }
    .particularsTA{
        width: 719px;
        height: 83px;
        padding: 7px;
        border: 1px solid #000;
        font-size:12px;
        font-family:Verdana;
        padding-left:5px;
    }
    .tblAcctExpense{
        border-collapse:collapse;
        font-size:12px;
        font-weight:Verdana;
        width:734px;
        margin-top:20px;
    }
    .tblAcctExpense tr,td{
        border-right:1px solid #000;
        border-left:1px solid #000;
        padding:10px;
    }
    .tblAcctExpense th{
        border:1px solid #000;
        padding:6px;
        font-size:13px;
        background:rgb(170, 169, 169);
    }
    .amountRight{
        text-align:right;
    }
    .totalTD{
        padding:10px;
        border:1px solid #000;
    }
    .ulSignatory{
        display:inline-block;
        margin-left: 0px;
        margin-top:30px;
    }
    @media print{
        #headerHead, #accpLiveChat, .mainbodyExpenses, .footerHolderNew, .invoiceHolderExpense, .voucher, .bodyJournalMain{
            display:none;
        }
        .evHolder{
            position:fixed !important;
            margin:0px!important;
        }
        .printPrev{
            overflow:hidden!important;
            overflow-x:hidden!important;
        }
        .particularsTA{
            width:663px;
        }
        .tblAcctExpense{
            width:675px;
        }
        .voucherforms{
            width:750px;
            margin-top:-50px;
        }
        .floatvoucher{
            margin-left:420px !important;
        }
        .compInfo{
            margin-left:180px !important;
        }
        .rightInfo{
            margin-right:88px !important;
        }
        .ulSignatory{
            margin-left:-13px !important;
        }
        .inpEV{
            border-bottom:1px solid #000 !important;
        }
        .tblAcctExpense th{
            color:#000;
        }
        .popBack{
            width:750px;
            overflow: hidden !important;
            position: static;
            background-color: #fff;
            margin:auto ;
        }
        .poRequest{
            display:none;
        }
        @page{
            size: portrait;
            margin:auto;
            margin: 5px;
            margin-top:30px;
            border:none;
        }
    }
    .table1NewExpensesNew, td{
        font-weight:normal !important;
    }
</style>
<?php
$expense = $this->getExpense;
$vendor = $this->getVendor;
$trialBalance = $this->getTrialBalance;
$orgInfo = $this->orgInfo;
$org = $this->org;
//print_r($expense);
?>
<div class="evCont">
    <div class="evHolder expense_holder">
        <div style="float:right;">
            <input type="button" class="xButton" value="X">
        </div>
        <div class="compInfo" style="float:left;text-align:center;margin-left:207px;margin-top:5px;">
            <input type="text" id="expense_id" class="hidden" value="<?= $_POST['id'] ?>">
            <ul class="companyInfo">
                <li><?= strtoupper($org->orgName) ?></li>
                <li>
                    <?php if ($orgInfo->typeOfTax == 'vat') { ?>
                        VAT
                    <?php } else { ?>
                        Non-VAT
                    <?php } ?>
                    Reg. TIN: <?= $orgInfo->tinNum ?>
                </li>
                <li style="width:300px;word-break:break-word;" class="compAdd"><?= ucfirst($orgInfo->address) ?></li>
                <li><?= $orgInfo->phoneNum ?></li>
            </ul>
            <ul class="cVoucher">
                <li style="font-size:22px;">
                    <?php
                    //echo ($expense->glPosting);
                    if ($expense->glPosting != 3) {
                        echo 'CHECK VOUCHER';
                    } else {
                        echo 'CASH VOUCHER';
                    }
                    ?>
                </li>
            </ul>
        </div>
        <div style="float:right;margin-top:25px;margin-right:20px;" class="voucher">
            <input type="button" value="PDF" class="buttonRight pdfButton">
            <input type="button" value="Print" class="buttonRight" onClick="window.print()">
        </div>
        <div style="clear:both;"></div>
        <div class="rightInfo" style="float:right;margin-right:30px;">
            <ul class="rightInfor">
                <li>Expense No.: <input type="text" class="inpEV" value="<?= $expense->expenseNumber ?>" readonly style="margin-left:3px;"></li>
                <li>Date Issued: <input type="text" class="inpEV" style="letter-spacing:1;margin-left:6px;" value="<?= date('m/d/Y', strtotime($expense->dateIssued)) ?>" readonly></li>
                <li>Ref No.: 
                    <input type="text" class="inpEV" style="margin-left:34px;" value="<?= $expense->referenceNumber ?>" readonly>
                </li>
            </ul>
        </div>
        <div style="clear:both;"></div>
        <div>
            <ul>
                <li>Payee Name: <input type="text" class="inpEV inpEV2" value="<?= ucfirst($vendor->name) ?>" readonly></li>
            </ul>
        </div>
        <div class="partDiv" style="margin-left:40px;margin-top:15px;">
            Particulars:
            <?php
            if ($this->getExpenseLines) {
                $lists = array();
                foreach ($this->getExpenseLines as $item) {
                    $lists[] = $item->descriptionMemo;
                }

                echo implode(', ', $lists);
            }
            ?>
            <p class="particularsTA">
                <?php echo $expense->particular ?>

            </p>
        </div>
        <div class="tblDiv" style="margin-left:40px;">
            <table class="tblAcctExpense">
                <tr>
                    <th style="text-align:left;">Account Code</th>
                    <th style="text-align:left;">Account Title</th>
                    <th class="amountRight">Debit</th>
                    <th class="amountRight">Credit</th>
                </tr>
                <?php
                $debit = 0;
                $credit = 0;

                if ($trialBalance) {
                    foreach ($trialBalance as $each) {
                        $debit += $each['debit'];
                        $credit += $each['credit'];
                        ?>

                        <tr>
                            <td><?= $each['account_num'] ?></td>
                            <td><?= $each['accont_name'] ?></td>
                            <td class="amountRight"><?= $each['debit'] == 0 ? '-' : Controller::getFloat($each['debit']) ?></td>
                            <td class="amountRight"><?= $each['credit'] == 0 ? '-' : Controller::getFloat($each['credit']) ?></td>
                        </tr>
                        <?php
                    }
                }
                ?>
                <tr>
                    <td class="totalTD" style="border-right:none!important;"></td>
                    <td class="totalTD amountRight" style="border-left:none!important;">Total</td>
                    <td class="totalTD amountRight" class="amountRight"><b><?= Controller::getFloat($debit) ?></b></td>
                    <td class="totalTD amountRight" class="amountRight"><b><?= Controller::getFloat($credit) ?></b></td>
                </tr>
            </table>
        </div>
        <div class="ulSignatory">
            <ul>
                <li><label>Prepared By:</label></li>
                <li><input type="text" class="inpEV" style="margin-top:10px;"></li>
            </ul>
        </div>	
        <div class="ulSignatory">	
            <ul>
                <li><label>Reviewed By:</label></li>
                <li><input type="text" class="inpEV" style="margin-top:10px;"></li>
            </ul>
        </div>
        <div class="ulSignatory">
            <ul>
                <li><label>Approved By:</label></li>
                <li><input type="text" class="inpEV" style="margin-top:10px;"></li>
            </ul>
        </div>
        <div class="ulSignatory">
            <ul>
                <li><label>Received By:</label></li>
                <li><input type="text" class="inpEV" style="margin-top:10px;"></li>
            </ul>
        </div>
    </div>
</div>
<script>
    $(function () {
        id = $('#expense_id').val();
        $('.pdfButton').click(function () {
            window.open(URL + 'expenses/printPDF?id=' + id);
        });

    });
</script>