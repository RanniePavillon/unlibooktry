<?php
if ($this->data) {
    $total = 0;
    foreach ($this->data as $item) {
        $total += $item['grand_total'];
        ?>
        <tr>
            <td><?php echo $item['date_created']; ?></td>
            <td><?php echo $item['date_issued']; ?></td>
            <td><?php echo $item['type']; ?></td>
            <td><?php echo $item['invoice_number']; ?></td>
            <td><?php echo $item['collection_number']; ?></td>
            <td><?php echo $item['ref_number']; ?></td>
            <td><?php echo $item['client_name']; ?></td>
            <td><?php echo $item['status']; ?></td>
            <td><?php echo Controller::getFloat($item['grand_total']); ?></td>
        </tr>
        <?php
    }
    ?>
    <tr>
        <th colspan="8">TOTAL</th>
        <th><?php echo Controller::getFloat($total) ?></th>
    </tr>
    <?php
}
?>

