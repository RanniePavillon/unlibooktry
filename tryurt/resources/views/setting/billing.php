<style>
    .tblInvoice2print{
        border-collapse: collapse;
    }
    .addressLogoNew{
        color:#000000;
        font-size:12px;
        font-family:Verdana;
        font-weight:normal;
        width: 250px;
        word-break: break-word;
        border:none;
    }
    .newInvoiceprintNew{
        font-family: agency fb2;
        margin-left: 15px;
        font-weight: bold;
        font-size: 24px;
        margin-top:130px;
        width: 773px;
        text-align: center;
        font-style:normal;
        padding-top:3px;
        padding-bottom:3px;
    }
    #imgprev{
        width: 161px;
        height:100px;
    }
    .clogoup2{
        float:left!important;
        padding-left: 5px;
        width: 300px !important;
        margin-top:30px!important;
        margin-left: 5px;
        font-size: 13px!important;
        font-family: Verdana;
        font-weight: bold;
        text-shadow: none;
        color: #000000;
    }
    .addressLogo{
        display: table-row;
        width: 200px;
    }
    .clogo{
        width:100%!important;
        margin-left: 10px;
        font-size: 12px;
        font-family: Tahoma;
        text-shadow: none;
    }
    .pdf2{
        border: none;
        border-radius: 3px;
        padding: 3px 10px 3px 10px;
        font-family: calibri;
        font-weight: bold;
        width: 62px;
        height: 25px;
        margin-right: 0px!important;
        margin-top:0px!important;
        color:#fff;
    }
    .pdf{
        color: white;
        border: none;
        border-radius: 3px;
        padding: 3px 10px 3px 10px;
        margin-left:0px!important;
        margin-top: 0px!important;
        font-family: calibri;
        font-weight: bold;
        width: 55px;
        height: 25px;
        margin-right:5px!important;
    }
    .buttonholder{
        display:inline-block;
        float:right;
        margin-top:33px;
    }
    .boxshadowprint {
        border: solid 1px #000 !important;
        box-shadow: 0px 1px 2px 2px gray;
    }
    .tbl3Invoice2{
        border: 1px solid rgb(116, 115, 115) !important;
    }
    @media print{
        .PaymentTypeFormInvoice, .invoiceHolderInvoicePrint{
            margin-top:0px!important;
        }
    }
    table tr td{
        padding: 10px 2px;
    }
    .tblInvoice2print td{
        padding: 10px 5px !important;
    }
</style>
<link rel="stylesheet" href="<?= URL ?>public/css/popup.css"/>
<link rel="stylesheet" href="<?= URL ?>views/setting/css/print_invoice.css"/>
<div class="invoiceHolderInvoicePrint">
    <form class="PaymentTypeFormInvoice boxshadowprint">
        <div style="float:left;"></div>
        <div class="buttonholder">
        </div>
        <div style="clear:both;"></div>
        <div class="clogo">
            <?php
            $hasLogo = true;
            if ($hasLogo) {
                ?>
                <div style="float:left;margin-top:9px;margin-right:5px;margin-left:6px;">
                    <img id="imgprev" src ="<?= URL ?>public/images/scp.png" alt="your logo"/>		
                </div>
            <?php } ?>

            <div class="clogoup2">
                <div class="addressLogoNew"></div>
                <div class="addressLogo">
                    <div>
                        <b>
                            AKTUS GLOBAL Management
                        </b>
                    </div>
                </div>
                <div class="addressLogo">
                    <div>
                        Unit 2003A, 20th Flr., West Tower,</br>
                        PSE Center, Ortigas Center, Pasig City, </br>
                        Tel no. : (02) 678-6649
                    </div>
                </div>
            </div>
        </div>

        <div id="newInvoice" class="newInvoiceprintNew"></div>
        <?php
        $modeOfPayment = false;
        if ($modeOfPayment) {
            ?>
            <div style="margin-left:245px;position:absolute;margin-top:124px;">
                <img src="<?= URL ?>public/images/paidimg.png" class="paidInvoice">
            </div>
            <?php
        } else if ($modeOfPayment == 'HMO') {

            $hmoPaid = 'Has hmo paid';

            if (!empty($hmoPaid)) {
                ?>
                <div style="margin-left:263px;position:absolute;margin-top:124px;">
                    <img src="<?= URL ?>public/images/paidimg.png" class="paidInvoice">
                </div>
                <?php
            }
        }
        ?>
        <table class="tbleInvoice">
            <tr class="invoicetr">
                <td>Client Name: <span class="clientName"><?= $this->info->s_name ?></span></td>
                <td style="width:25%">Billing No.: <span class="billingNo"><?= $this->info->s_invoice_no ?></span></td>
            </tr>
            <tr class="invoicetr">
                <td>Address: <span class="address"><?= $this->info->s_address ?></span></td>
                <td>Billing Date: <span class="billingDate"><?= date("F d, Y", strtotime($this->payment['expiration'])) ?></span></td>
            </tr>
        </table>

        <div style="margin-top:20px; width:805px;">	
            <table class="tblInvoice2print">
                <thead>
                    <tr class="newTblInv">
                        <th style="width:15%;">Service Item</th>
                        <th style="width:40%;text-align:left;">Particular</th>
                        <th style="width:4%;">Qty</th>
                        <th style="width:2%;">Amount</th>
                        <th style="width:15%;text-align:right;">Net Amount</th>
                    </tr>
                </thead>
                <tr class="">
                    <td class=""><?= $this->info->s_product ?></td>
                    <td style="text-align:left;">Unlibooks Service</td>
                    <td style="text-align:center;">1</td>
                    <td class=""><?= Controller::getFloat($this->result) ?></td>
                    <td class=""><?= Controller::getFloat($this->result) ?></td>
                </tr>
            </table>
        </div>

        <table class="tbl3Invoice2">
            <tr>
                <td class="SAInvoice">Subtotal:</td>
                <td><input type="text" readonly="readonly" value="<?= Controller::getFloat($this->result - ($this->result * 0.12)) ?>" class="inputTotalInvoice numeric"></td>
            </tr>
            <tr class="trTotalInvoices">
                <td class="SAInvoice2">Vat:</td>
                <td><input type="text" readonly="readonly" value="<?= Controller::getFloat($this->result * 0.12) ?>" class="inputTotalInvoice2 numeric"></td>
            </tr>
            <tr class="trTotalInvoicesGr">
                <td class="SAInvoice3">Total Billing:</td>
                <td><input type="text" readonly="readonly" value="<?= Controller::getFloat($this->result) ?>" class="inputTotalInvoice3 numeric"></td>
            </tr>
        </table>

        <div class="RemarksInvoice">Remarks</div>
        <div><textarea class="RemarkText" readonly ></textarea></div>
    </form>
</div>