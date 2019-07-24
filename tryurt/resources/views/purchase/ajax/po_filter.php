<?php
if ($this->purchaseOrder) {
    foreach ($this->purchaseOrder as $item) {
        $invoicelines = DAOFactory::getTblPurchaseOrderLinesDAO()->queryByPurchaseOrderId($item->id);
        ?>
        <tr>
            <td style="padding-left:0;"><input type="button" class="siDrop" value="<?php echo $item->purchaseOrderNo ?>">
                <input type="hidden" name="siId" value="<?php echo $item->id ?>" />
            </td>
            <td><?php echo date('m/d/Y', strtotime($item->dateIssued)) ?></td>
            <td style="text-align:right;"><?php echo Controller::getFloat($item->grandTotal) ?></td>
        </tr>
        <tr class="dataInvoice hidden" id="<?php echo $item->purchaseOrderNo ?>">
            <td colspan="3">	
                <table class="invoiceListTable">
                    <?php
                    foreach ($invoicelines as $line) {
                        $receive_num = TblReceivedOrderLinesMySqlExtDAO::itemRO($item->id, $line->id);
//                                    $return_num =  $receive_num < $purchaseorderline->qty ? $returnline : 0;
                        if ($line->qty < $receive_num || $receive_num == 0) {
                            ?>

                            <tr>
                                <th></th>
                                <th>Item No.</th>
                                <th>Item Description</th>
                                <th>Vat Type</th>
                                <th>Qty</th>
                                <th class="textaligncenter">UOM</th>
                                <th class="textalignright">Unit Price</th>
                                <th class="textalignright">Amount</th>
                                <th class="textalignright">Discount</th>
                                <th class="textalignright">Net Amount</th>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="<?php echo $line->id ?>" />
                                    <input type="hidden" class="itemId" value="<?php echo $line->itemId ?>" />
                                    <input type="hidden" class="vatId" value="<?php echo $line->vatId ?>" />
                                </td>
                                <td><?php echo DAOFactory::getTblItemDAO()->load($line->itemId)->itemCode ?></td>
                                <td><?php echo $line->itemDescription ?></td>
                                <td><?php echo DAOFactory::getTblTaxDAO()->load($line->vatId)->description ?></td>
                                <td><?php echo $line->qty ?></td>
                                <td class="textaligncenter"><?php echo DAOFactory::getTblUomDAO()->load($line->uomId)->abbreviation ?></td>
                                <td class="textalignright"><?php echo Controller::getFloat($line->unitPrice) ?></td>
                                <td class="textalignright"><?php echo Controller::getFloat($line->qty * $line->unitPrice) ?></td>
                                <td class="textalignright"><?php echo $line->discountLine ?>%</td>
                                <td class="textalignright"><?php echo Controller::getFloat($line->netAmount) ?></td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </table>
            </td>
        </tr>
        <?php
    }
}
?>
