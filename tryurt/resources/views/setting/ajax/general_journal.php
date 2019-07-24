<table class="collect_tableUseP tblGenJournal">
    <!-- if OTHER ACCOUNTS -->
    <thead>
        <tr class="head_collectUseP">
            <th width="2%"></th>
            <th>General Journal No.</th>
            <th>Date</th>
            <th style="text-align:right;">Amount</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $total = 0;
        if ($this->data) {
            foreach ($this->data as $item) {
                $total += $item->amount;
                ?>
                <tr class="table_collectionUseP">
                    <td><!--<input type="checkbox"  name="chk[]" class="chk" value="<?php echo $item->id ?>">--></td>
                    <td><a onclick="editrec(<?php echo $item->id ?>)"><?php echo $item->generalJournalNumber ?></a></td>
                    <td><?php echo date('m/d/Y', strtotime($item->transDate)) ?></td>
                    <td style="text-align:right;"><?php echo Controller::getFloat($item->amount) ?></td>
                </tr>
                <?php
            }
        }
        ?>
    </tbody>
</table>
<table class="cnitableAllInvoice2" style="width:99%;margin-top:40px;margin-left:5px;">
        <tr class="cnitableAllInvoice2">
            <th style="text-align:right;padding:5px;" colspan="5"></th>
            <th style="text-align:right;padding:5px;width:200px;text-align:right;">Total:</th>
            <th style="text-align:right;padding:5px;width:200px;text-align:right;"><?php echo Controller::getFloat($total) ?></th>
        </tr>
</table>

<table class="tfootTable">
    <tfoot>
        <tr class="under">
            <td colspan="5" style="font-family:Verdana;font-size:11px;color:#fff;font-weight:bold;text-align: center" class="under">
                <?php
                echo "<span style=\"margin-left:25px\width:120px\"> " . $this->pages->display_jump_menu2()
                . $this->pages->display_items_per_page2() . "</span>";
                echo "Page " . $this->pages->current_page . " of " . $this->pages->num_pages;
                ?>
            </td>
        </tr>
    </tfoot>
</table>