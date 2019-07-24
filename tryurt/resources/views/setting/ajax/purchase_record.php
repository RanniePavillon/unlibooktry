<?php
if ($this->data) {
    foreach ($this->data as $item) {
        ?>
        <tr class="table_collectionUseP">
            <td><!--<input type="checkbox"  name="chk[]" class="chk" value="<?php echo $item->id ?>">--></td>
            <td><a onclick="editrec(<?php echo $item->id ?>)"><?php echo $item->purchaseJournalNumber ?></a></td>
            <td><?php echo date('m/d/Y', strtotime($item->transDate)) ?></td>            
            <td style="text-align:right;"><?php echo Controller::getFloat($item->amount) ?></td>
        </tr>
        <?php
    }
}
?>