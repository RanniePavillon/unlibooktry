<table class="collect_tableUseP tblInvJournal">
    <!-- if INVENTORY -->
    <thead>
        <tr class="head_collectUseP">
            <th width="2%"></th>
            <th>Inventory Journal No.</th>
            <th>Date</th>
<!--            <th style="text-align:right;">Total Amount</th>-->
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
            <?php
            if ($this->data) {
                foreach ($this->data as $item) {
                    ?>
                <tr class="table_collectionUseP">
                    <td><!--<input type="checkbox"  name="chk[]" class="chk" value="<?php echo $item->id ?>">--></td>
                    <td><a onclick="editrec(<?php echo $item->id ?>)"><?php echo $item->inventoryJournalNumber ?></a></td>
                    <td><?php echo date('m/d/Y', strtotime($item->transDate)) ?></td>
                    <!--<td style="text-align:right;"><?php // echo Controller::getFloat($item->amount) ?></td>-->
                    <td><?php echo $item->status ?></td>
                </tr>
                <?php
            }
        }
        ?>
    </tbody>
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