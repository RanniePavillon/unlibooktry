<?php
if ($this->purchaseInvoice) {
    foreach ($this->purchaseInvoice as $item) {
        $invoicelines = DAOFactory::getTblPurchaseInvoiceLinesDAO()->queryByPurchaseInvoiceId($item->id);
        ?>
        <tr>
            <td><input type="button" class="siDrop" value="<?php echo $item->purchaseInvoiceNo ?>">
                <input type="hidden" name="siId" value="<?php echo $item->id ?>" />
            </td>
            <td><?php echo date('m/d/Y', strtotime($item->dateIssued)) ?></td>
            <td style="text-align:right;"><?php echo Controller::getFloat($item->grandTotal) ?></td>
        </tr>
        <tr class="dataInvoice hidden" id="<?php echo $item->purchaseInvoiceNo ?>">
            <td colspan="3">	
                <table class="invoiceListTable">
                    <?php
                    foreach ($invoicelines as $line) {
                        $returnline = TblPurchaseReturnLinesMySqlExtDAO::itemReturn($item->id, $line->id);
                        $return_num = $returnline ? $returnline : 0;
                        if ($line->receivedQty < $return_num || $return_num == 0) {
                            ?>

                            <tr>
                                <th></th>
                                <th>Item No.</th>
                                <th>Item Description</th>
                                <th>Vat Type</th>
                                <th class="textaligncenter">Warehouse</th>
                                <th>Qty</th>
                                <th >UOM</th>
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
                                <td class="textalignleft" style="text-align:left;"><?php echo DAOFactory::getTblWarehouseDAO()->load($line->warehouseId)->warehouseName ?></td>
                                <td><?php echo $line->receivedQty ?></td>
                                <td><?php echo DAOFactory::getTblUomDAO()->load($line->uomId)->abbreviation ?></td>
                                <td class="textalignright"><?php echo Controller::getFloat($line->unitPrice) ?></td>
                                <td class="textalignright"><?php echo Controller::getFloat($line->receivedQty * $line->unitPrice) ?></td>
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