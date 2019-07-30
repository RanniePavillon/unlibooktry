
<style>
    .invoiceHolderCNTs{
        width: 100%;
        margin-top: 70px;
    }

    .divCNTsBelowitem{
        text-align:right;
    }
    .cnt-formCNTs{
        width: 914px;
        margin: auto !important;
        font-family: verdana;
        font-size: 12px;
        background: #fff;
        padding: 30px;
    }
    .cnt-headCNTs{
        font-size:30px;
        font-family:verdana;
        margin-top: -7px;
    }

    .saveBCNTs2{
        margin-right:10px;
        width: 100px;
        height: 28px;
        border-radius: 4px;
        border: none;
        cursor: pointer;
        outline-style:none;
    }
    .saanBCNTs2{
        width: 123px;
        height: 28px;
        border-radius: 4px;
        border: none;
        cursor: pointer;
        outline-style:none;
    }	
    .isButton{
        height:27px;
        width:100px;
    }
    .dropButtonContainer{
        float:right;
        margin-top:15px;
        margin-right:35px;
    }
    .invoiceListTable{
        border:solid 1px #c8c8c8;
        width:100%;
        margin:auto;
        margin-top:7px;

    }
    .invoiceListTable td{
        font-size:10px;
        padding:5px;
    }
    .siDrop{
        background:none;
        text-decoration:underline;
        border:none;
        color:blue;
        cursor:pointer;
    }
    .dropdownTables td{
        font-family:verdana;
        font-size:12px;

    }
    .dropdownTables{
        margin-bottom:50px;
    }

    #newCNTs{
        font-family: agency fb2;
        color: #c51400;
        font-weight: bold;
        font-size: 30px;
    }
</style>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/loading.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<div class="jsHolder">
    <!-- pls do not remove this -->
</div>
<script>
    siId = '';
    code = '';
    $(function () {
        $('.siDrop').click(function () {
            $list = $(this).val();
            siId = $(this).parents('td').find('input[name="siId"]').val();
            code = $(this).val();
            $('input[type="checkbox"]').prop('checked', false);
            $('.dataInvoice').addClass('hidden');
            $('#' + $list).removeClass('hidden');

        });

        $('#btnsubmit').click(function () {
            var chks = new Array();

            $('input[type="checkbox"]:checked').each(function () {
                chks.push($(this).val());
            });

            if (siId != '') {
                $('.list').remove();
                $('option:last', $('#salesInvoiceSelect')).before($('<option/>', {
                    value: siId,
                    text: code,
                    selected: true,
                    'class': 'list'
                }));
            }

            $.post(URL + 'salesreturn/getSalesInvoiceTask', {salesinvoiceid: siId, itemIds: chks})
                    .done(function (returnData) {
                        $('.tablesalesnew > tbody').html(returnData);
                        $('.popBack').html('').addClass('hidden');
                        $('body').css('overflow', 'auto');
                    })
        });
    });
</script>
<div class="invoiceHolderCNTs">
    <form method="post" action="" class="cnt-formCNTs boxshadow" id="formtask">
        <div id="newCNTs">
            CASH INVOICE
        </div>
        <div class="center2">
            <div id="search3" style="float:left;margin-top:15px;">

            </div>
            <?php $searchby = isset($_POST['searchby']) ? $_POST['searchby'] : ''; ?>
            <div style="float:right;margin-right:30px;margin-top:4px;">
                <span class="filteredby">Filtered By:</span>
                <label class="labelclass">
                    <select class="inumber" name="searchby" id="searchby">
                        <option class="invNoOption" value="1" <?php echo ($searchby == 1) ? 'selected' : '' ?>>PAYMENT NO.</option>
                        <option class="invNoOption" value="2" <?php echo ($searchby == 2) ? 'selected' : '' ?>>CUSTOMER NAME</option>
                        <option class="invNoOption" value="3" <?php echo ($searchby == 3) ? 'selected' : '' ?>>PAYMENT DATE</option>
                        <option class="invNoOption" value="4" <?php echo ($searchby == 4) ? 'selected' : '' ?>>STATUS</option>
                    </select>
                </label>
                <input type="search" name="search" placeholder="SEARCH" class="searchindex
                       <?php echo ($searchby == 3) ? 'hidden' : '' ?>" value="<?= ISSET($_POST['search']) ? $_POST['search'] : '' ?>"> 

                <input type="text" name="startdate" value="<?= ISSET($_POST['startdate']) ? $_POST['startdate'] : '' ?>" 
                       placeholder="From Date" class="date dateInputText hasDate <?php echo ($searchby != 3) ? 'hidden' : '' ?>" style="width:104px;height: 29px;"/>

                <input type="text" name="enddate" value="<?= ISSET($_POST['enddate']) ? $_POST['enddate'] : '' ?>"
                       placeholder="To Date" class="date dateInputText hasDate <?php echo ($searchby != 3) ? 'hidden' : '' ?>" style="width:104px;height: 29px;"/>

                <input type="submit" name="search2" value="SEARCH" class="search2 <?php echo ($searchby != 3) ? 'hidden' : '' ?>">

                <div><input type="submit" name="search2" value="" class="search2Col <?php // echo ($searchby != 3) ? 'hidden' : ''       ?>" style="margin-left:331px;"></div>
            </div>
            <div style="clear:both;"></div>
        </div>
        <table class="dropdownTables">
            <tr>
                <th>SI No.</th>
                <th>Date</th>
                <th>Amount</th>
            </tr>
            <?php
            if ($this->deliveryReceipt) {
                foreach ($this->deliveryReceipt as $item) {
                    $invoicelines = DAOFactory::getTblDeliveryReceiptLinesDAO()->queryByDeliveryReceiptId($item->id);
                    ?>
                    <tr>
                        <td><input type="button" class="siDrop" value="<?php echo $item->deliveryReceiptNo ?>">
                            <input type="hidden" name="siId" value="<?php echo $item->id ?>" />
                        </td>
                        <td><?php echo $item->dateIssued ?></td>
                        <td><?php echo $item->grandTotal ?></td>
                    </tr>
                    <tr class="dataInvoice hidden" id="<?php echo $item->deliveryReceiptNo ?>">
                        <td colspan="3">	
                            <table class="invoiceListTable">
                                <tr>
                                    <th></th>
                                    <th>Item No.</th>
                                    <th>Item Description</th>
                                    <th>Vat Type</th>
                                    <th>Warehouse</th>
                                    <th class="textaligncenter">Qty</th>
                                    <th>UOM</th>
                                    <th class="textaligncenter">Unit Price</th>
                                    <th class="textalignright">Amount</th>
                                    <th class="textalignright">Discount</th>
                                    <th class="textalignright">Net Amount</th>
                                </tr>

                                <?php
                                foreach ($invoicelines as $line) {
                                    ?>
                                    <tr>
                                        <td><input type="checkbox" value="<?php echo $line->id ?>" />
                                            <input type="hidden" class="itemId" value="<?php echo $line->itemId ?>" />
                                            <input type="hidden" class="vatId" value="<?php echo $line->vatId ?>" />
                                            <input type="hidden" class="warehouseId" value=<?php echo $line->warehouseId ?> />
                                        </td>
                                        <td><?php echo DAOFactory::getTblItemDAO()->load($line->itemId)->itemCode ?></td>
                                        <td><?php echo $line->itemDescription ?></td>
                                        <td><?php echo DAOFactory::getTblTaxDAO()->load($line->vatId)->description ?></td>
                                        <td><?php echo DAOFactory::getTblWarehouseDAO()->load($line->warehouseId)->warehouseName ?></td>
                                        <td class="textaligncenter"><?php echo $line->qty ?></td>
                                        <td>boxes</td>
                                        <td class="textaligncenter"><?php echo $line->unitPrice ?></td>
                                        <td class="textalignright"><?php echo $line->qty * $line->unitPrice ?></td>
                                        <td class="textalignright"><?php echo $line->discountLine ?>%</td>
                                        <td class="textalignright"><?php echo $line->netAmount ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </table>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>

        <div class="divCNTsBelowitem">	
            <input type="button" class="addsavebuttonpop isButton closeCNTs saveButtonsPop" value="Cancel">
            <input type="button" class="addsavebuttonpop isButton saveAddButtonsPop" id="btnsubmit" value="Get Invoice Line">
        </div>
    </form>
</div>