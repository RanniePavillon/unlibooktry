<?php
foreach ($this->deliveryReceipt as $item) {
    ?>
    <tr>
        <td><input type="checkbox" value="<?php echo $item->id ?>" class="chkinvoice" />
            <span class="hidden soNo"><?php echo $item->deliveryReceiptNo ?></span>
        </td>
        <td><?php echo $item->deliveryReceiptNo ?></td>
        <td><?php echo date('m/d/Y', strtotime($item->dateIssued)) ?></td>
        <td><?php echo $item->clientName ?></td>
        <td style="text-align:right;"><?php echo Controller::getFloat($item->grandTotal) ?></td>
    </tr>
    <?php
}
?>