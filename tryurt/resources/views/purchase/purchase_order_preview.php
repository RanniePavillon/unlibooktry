<style>
    .tbleInvoice{
        margin-top: 26px;
        margin-left: 20px!important;
        width: 100%!important;
    }
    .tbleInvoice2{
        margin-top: 26px;
        width: 100%!important;
    }
    .tbleInvoice td{
        font-weight:normal;
        padding:3px;
        font-size: 12px;
        font-family: Verdana!important;
    }
    .tbleInvoice2 td{
        font-size:12px;
    }
    .clogoup{
        margin-left: 14px;
        font-size: 12px;'
        font-weight:bold;
        font-family: Verdana!important;
        text-shadow: none;
        color: #000;
        }
        .RemarkText{
        border:none!important;
        margin-left:15px;
        width:460px;
        height:initial !important;
        padding:0px!important;
        margin-bottom: 20px;
        margin-top: 10px;
        font-family:tahoma;
        font-size:12px;
        padding:5px;
        word-break:break-all;
        white-space:pre-wrap;
        }
        .logo2a {
        width: 136px!important;
        height: 43px!important;
        }

        @media print{
			#headerHead, .everyFooter, #accpClickToOpen{
			display:none;
			}
			#newInvoice{
			width:720px !important;
			}
			#newInvoicePrint{
			width:718px !important;
			}
			.poRequest{
			display:none;
			}
			div.divFooter {
			position: fixed;
			bottom: 20px;
			right: 20px;
			background: #9FF;
			color: #000;
			text-align: right;
			}
        }

        @media screen {
        div.divFooter {
        display: none;
        }
        }
    </style>
    <?php
    $info = new TblOrganizationInfo();
    if (Session::getSession('user')) {
        $info = DAOFactory::getTblOrganizationInfoDAO()->load(DAOFactory::getTblUserDAO()->load(Session::getSession('user'))->orgInfoId);
        $org = DAOFactory::getTblOrganizationDAO()->load($info->orgId);
    }

    $invoice = new TblNewInvoice();
    $taskline = array();
    $itemline = array();
    $company = DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('infoid'));
    ?>
    <link href="<?= URL ?>views/purchase/css/print_invoice.css" rel="stylesheet" type="text/css">
    <script src="<?= URL ?>views/invoice/js/print_invoice.js"></script>
    <div class="invoiceHolderInvoicePrint">
        <form class="PaymentTypeFormInvoice" style="padding-bottom:20px;">
            <input type="button" class="closePrint" value="X">
            <input type="button" class="pdf hidden" value="PDF" onclick="viewpdf(<?php echo $invoice->id ?>)">
            <input type="button" class="pdf2" value="Print" onclick="window.print();" style="margin-left: 709px;margin-top:5px;width:72px;">

            <div class="clogo">
                <!--<div style="float:left;"><img class="scplogoclass"  src="<?= URL ?>public/companylogo/<?php echo Session::getSession('orgid') ?>"></div>-->
                <?php if ($company->logoName != '') { ?>
                    <div style="float:left;margin-top:9px;margin-left:17px;">
                        <img id="imgprev" src ="<?= URL ?>public/companylogo/<?= $info->logoName ?>" alt="your logo"/>		
                    </div>
                <?php } ?>
                <div style="margin-top:8px;float:left;margin-left:10px!important;" class="clogoup" >
                    <div style="font-weight:bold;text-transform:Capitalize;"><?php echo DAOFactory::getTblOrganizationDAO()->load(Session::getSession('orgid'))->orgName ?></div>
                    <div style="word-break:break-word;width:240px;"><?php echo ucwords($company->address) ?></div>
                    <div>
                        <?php
                        $info = DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('infoid'));

                        if ($info->typeOfTax == "vat") {
                            ?>
                            VAT

                        <?php } else {
                            ?>
                            Non-VAT
                            <?php
                        }
                        ?>
                        Reg. TIN: <?= $info->tinNum ?>

                        <!--TIN: <?php //echo $company->tinNum   ?>-->

                    </div>
                    <div>Phone No: <?php echo $company->phoneNum ?></div>
                    <div>Fax No: <?php echo $company->faxNum ?></div>
                </div>
                <div style="clear:both;"></div>
            </div>

            <div id="newInvoicePrint" style="margin-top:34px!important;">PURCHASE ORDER</div>
            <div style="float:left;">
                <table class="tbleInvoice">
                    <tr class="invoicetr">
                        <?php
                        $supplier = DAOFactory::getTblSupplierDAO()->load($this->purchaseorder->supplierId);
                        ?>
                        <td>Vendor Name:</td> 
                        <td><?php echo $supplier->name ?></td>

                    </tr>
                    <tr class="invoicetr">
                        <td><div style="">Address:</div>
                        <td><div style="width:300px;word-break:break-word;"><?php echo ucwords($supplier->address) ?></div></td>
                    </tr>
                </table>	
            </div>	
            <div style="float:right;margin-right:30px;">	
                <table class="tbleInvoice2">	
                    <tr class="invoicetr">
                        <td>PO No.:</td>
                        <td style="text-align:right;"><?php echo $this->purchaseorder->purchaseOrderNo ?></td>
                    </tr>	
                    <tr class="invoicetr">
                        <td>PO Date:</td> 
                        <td style="text-align:right;"><?php echo date('m/d/Y', strtotime($this->purchaseorder->dateIssued)) ?></td>
                    </tr>	
                    <tr class="invoicetr">	
                        <td>Ref. No.:</td>
                        <td style="text-align:right;"><?php echo $this->purchaseorder->refNo ?></td>
                    </tr>
                    <tr class="invoicetr">
                        <td >Discount <?php echo $this->purchaseorder->discount > 0 ? 'In percent' : 'In amount' ?>:</td>
                        <td>
                            <span style="padding-left:20px;">
                                <?php echo $this->purchaseorder->discount > 0 ? $this->purchaseorder->discount . '%' : Controller::getFloat($this->purchaseorderamount->discountPesoAmount) ?>
                            </span>
                        </td>
                    </tr>
                </table>
            </div>
            <div style="clear:both;"></div>

            <div style="margin-top:24px;">	
                <table class="tblInvoice2">
                    <thead>
                        <tr class="newTblInv">
                            <th style="width:17%;background:#c8c8c8!important;border:1px solid #000!important;">Item No</th>
                            <th style="width:30%;text-align:left;background:#c8c8c8!important;border:1px solid #000!important;">Item Description</th>
                            <th style="text-align:center;width:7%;background:#c8c8c8!important;border:1px solid #000!important;">UOM</th>
                            <th style="text-align:center;width:7%;background:#c8c8c8!important;border:1px solid #000!important;">Qty</th>
                            <th style="width:14%;background:#c8c8c8!important;border:1px solid #000!important;">Amount</th>
                            <th style="width:10%;background:#c8c8c8!important;border:1px solid #000!important;">Discount</th>
                            <th style="width:16%;text-align:right;background:#c8c8c8!important;border:1px solid #000!important;">Net Amount</th>
                        </tr>
                    </thead>
                    <?php foreach ($this->purchaseorderlines as $i => $item) { ?>
                        <tr class="<?php echo ($i == count($this->purchaseorderlines)) ? 'tblInvoicepaddingbottom' : '' ?>">
                            <td style="text-align:left;"><?php echo DAOFactory::getTblItemDAO()->load($item->itemId)->itemCode ?></td>
                            <td style="text-align:left;"><?php echo $item->itemDescription ?></td>
                            <td style="text-align:center;">
                                <?php
                                $task1 = DAOFactory::getTblUomDAO()->load($item->uomId);
                                echo ucwords($task1->abbreviation);
                                ?>
                            </td>
                            <td style="text-align:center;"><?php echo $item->qty ?></td>
                            <td class=""><input type="text" readonly="readonly" class="numeric rateinvoice" value="<?php echo Controller::getFloat($item->unitPrice) ?>" style="text-align: right;margin-right: -2;width: 100%; border:none;font-size:12px;font-family:tahoma"></td>
                            <td class=""><input type="text" readonly="readonly" class="rateinvoice" value="<?php echo $item->discountLine ?>%" style="text-align: right;margin-right: -2;width: 100%; border:none;font-size:12px;font-family:tahoma"></td>
                            <td class=""><input type="text" readonly="readonly" class="numeric rateinvoice" value="<?php echo Controller::getFloat($item->netAmount) ?>" style="text-align: right;margin-right: -2;width: 100%; border:none;font-size:12px;font-family:tahoma"></td>
                        </tr>
                    <?php } ?>
                </table>


            </div>


            <table class="tbl3Invoice2">
                <tr class="">
                    <td class="SAInvoice">Subtotal:</td>
                    <td>
                        <input type="text" readonly="readonly" value="<?php echo Controller::getFloat($this->purchaseorderamount->subTotalAmount); ?>"
                               class="inputTotalInvoice numeric"/>
                    </td>
                </tr>

                <tr class="trTotalInvoices">
                    <td class="SAInvoice2">Vat:</td>
                    <td class="">
                        <input type="text" readonly="readonly" value="<?php echo Controller::getFloat($this->purchaseorderamount->vatAmount) ?>" class="inputTotalInvoice2 numeric">
                    </td>
                </tr>

                <tr class="trTotalInvoices" style="border-bottom: 1px solid #000;">
                    <td class="SAInvoice2">Discount :</td>
                    <td class="">
                        <input type="text" readonly="readonly" value="<?php echo Controller::getFloat($this->purchaseorderamount->discountAmount) ?>" class="inputTotalInvoice2 numeric">
                    </td>
                </tr>

                <tr class="trTotalInvoicesGr">
                    <td class="SAInvoice3" style="padding: 5px;">Total Billing:</td>
                    <td class="" id="">
                        <input type="text" readonly="readonly" value="<?php echo Controller::getFloat($this->purchaseorderamount->grandTotal) ?>" class="inputTotalInvoice3 numeric">
                    </td>
                </tr>
            </table>

            <div style="clear:both;"></div>
            <div class="RemarksInvoice">REMARKS:</div>
            <div class="RemarkText" readonly ><?php echo $invoice->remarks ?></div>
            <div style="float:left;font-size:12px;font-family:Verdana;margin-left:15px;margin-top:47px;font-weight:bold;">"THIS DOCUMENT IS NOT VALID FOR CLAIM OF INPUT TAXES"</div>
            <div style="float:right;color:#183867;font-family:Verdana;font-size:9px;margin-top:20px;" class="everyFooter">
                <div style="float:left;margin-top:29px;"><b>POWERED BY:</b></div>
                <div style="float:right;margin:11px 10px 0px 10px;"><img class="logo2a"src="<?= URL ?>public/images/usv_logo_long.png"></div>
                <div style="clear:both;"></div>
            </div>
            <div style="clear:both;"></div>

            <div class="divFooter">
                <div style="float:right;color:#183867;font-family:Verdana;font-size:9px;margin-top:20px;">
                    <div style="float:left;margin-top:29px;"><b>POWERED BY:</b></div>
                    <div style="float:right;margin:11px 10px 0px 10px;"><img class="logo2a"src="<?= URL ?>public/images/usv_logo_long.png"></div>
                    <div style="clear:both;"></div>
                </div>
            </div>

        </form>
    </div>

