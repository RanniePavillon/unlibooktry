<?php
if ($this->salesInvoice) {
    foreach ($this->salesInvoice as $item) {
        $invoicelines = DAOFactory::getTblSalesInvoiceLinesDAO()->queryBySalesInvoiceId($item->id);
        ?>
        <tr>
            <td><input type="button" class="siDrop" value="<?php echo $item->salesInvoiceNo ?>" transtype="salesinvoice">
                <input type="hidden" name="siId" value="<?php echo $item->id ?>" />
            </td>
            <td><?php echo date('m/d/Y', strtotime($item->dateIssued)) ?></td>
            <td><?php echo Controller::getFloat($item->grandTotal) ?></td>
        </tr>
        <tr class="dataInvoice hidden" id="<?php echo $item->salesInvoiceNo ?>">
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
                            <td><?php echo DAOFactory::getTblUomDAO()->load($line->uomId)->abbreviation ?></td>
                            <td class="textaligncenter"><?php echo Controller::getFloat($line->unitPrice) ?></td>
                            <td class="textalignright"><?php echo Controller::getFloat($line->qty * $line->unitPrice) ?></td>
                            <td class="textalignright"><?php echo $line->discountLine ?>%</td>
                            <td class="textalignright"><?php echo Controller::getFloat($line->netAmount) ?></td>
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

<?php
if ($this->cashSalesInvoice) {
    foreach ($this->cashSalesInvoice as $item) {
        $invoicelines = DAOFactory::getTblCashSalesInvoiceLinesDAO()->queryByCashSalesInvoiceId($item->id);
        ?>
        <tr>
            <td><input type="button" class="siDrop" value="<?php echo $item->cashSalesInvoiceNo ?>" transtype="cashinvoice">
                <input type="hidden" name="siId" value="<?php echo $item->id ?>" />
            </td>
            <td><?php echo date('m/d/Y', strtotime($item->dateIssued)) ?></td>
            <td><?php echo Controller::getFloat($item->grandTotal) ?></td>
        </tr>
        <tr class="dataInvoice hidden" id="<?php echo $item->cashSalesInvoiceNo ?>">
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
                            <td><?php echo DAOFactory::getTblUomDAO()->load($line->uomId)->abbreviation ?></td>
                            <td class="textaligncenter"><?php echo Controller::getFloat($line->unitPrice) ?></td>
                            <td class="textalignright"><?php echo Controller::getFloat($line->qty * $line->unitPrice) ?></td>
                            <td class="textalignright"><?php echo $line->discountLine ?>%</td>
                            <td class="textalignright"><?php echo Controller::getFloat($line->netAmount) ?></td>
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