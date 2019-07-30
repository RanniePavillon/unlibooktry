<div>
    <?php if ($this->data) { ?>
        <ul>
            <?php foreach ($this->data as $item) { ?>
                <li><input type="checkbox" name="outlet[]" value="<?php echo $item->id ?>" /><?php echo $item->outletName ?></li>
            <?php }
            ?>
        </ul>
    <?php } ?>
</div>
