<?php
$data = $this->getClientInvoice;
if ($data) {
    foreach ($data as $each) {   
        $each['id'] .= '_si';
        ?>
        <tr>
            <td width="3%">
                <input type="checkbox" class="chkcol" name="chkcol[]" value="<?= $each['id'] ?>"/>
                <input type="hidden" class="currentWht" value="<?= isset($each['wht_amount']) ? $each['wht_amount'] :'' ?>"/>
                <input type="hidden" class="whtpercent" value="<?= $each['wht_tax'] ?>"/>
                <input type="hidden" class="sub_total_amount" value="<?= $each['sub_total_amount'] ?>" />

                <input type="hidden"  class="appliedAmount" value="<?= $each['applied_amount'] ?>"/>
                <input type="hidden" name="appliedAmount2[<?= $each['id'] ?>]" class="appliedAmount2" value="<?= $each['applied_amount'] ?>"/>

                <input type="hidden" class="tempwht" value="<?= isset($each['wht_amount']) ? $each['wht_amount'] :'' ?>" />
                <input type="hidden" name="whtamount[<?= $each['id'] ?>]" class="whtamount" value="" />
                <input type="hidden" name="cmid[<?= $each['id'] ?>]" value="" class="cm" />
                <input type="hidden" name="srid[<?= $each['id'] ?>]" value="" class="sr" />
                <input type="hidden" name="cmamount[<?= $each['id'] ?>]" value="" class="cmamount" />
                
                <input type="hidden" name="vatableamount[<?= $each['id'] ?>]" class="vatableamount" value="<?= $each['vatableAmount'] ?>" />
                <input type="hidden" name="exemptamount[<?= $each['id'] ?>]" class="exemptamount" value="<?= $each['exemptAmount'] ?>" />

                <input type="hidden" name="transType[<?= $each['id'] ?>]" value="salesinvoice" />
            </td>
            <td>
                <?= $each['sales_invoice_no'] ?>
                <input type="hidden" value="<?= $each['amount_paid'] ?>" />
            </td>	
            <td class="hidden">
                <?= $each['ref_no'] ?>
                <input type="hidden" value="<?= $each['sub_total_amount'] - $each['discount_amount'] ?>" />
            </td>
            <td>
                <input type="text" class="refCode" readonly value="" />
            </td>
            <td><?= date('m/d/Y', strtotime($each['date_issued'])) ?></td>
            <td class="total"><input type="text" class="totalinvoice isNumeric" readonly value="<?= Controller::getFloat($each['grand_total']) ?>"/></td>
            <td class="whtAmountHolder"><input type="text" name="whtamount[<?php echo $each['id'] ?>]" class="whtax isNumeric" value="<?php echo Controller::getFloat($each['wht_amount']) ?>" readonly/></td>
            <td class="appliedAmount">
                <input type="text" name="appliedAmount" value="<?php echo Controller::getFloat($each['applied_amount']) ?>" class="amount"/>
            </td>
            <?php
//            $each['grand_total'] - $each['amount_paid'];
            $balance = $each['grand_total'] - ( $each['applied_amount'] + $each['wht_amount'] );
            ?>
            <td>
                <input type="text" readonly="readonly"  name="balance[<?= $each['id'] ?>]"
                       class="balance isNumeric" value="<?= number_format((float) $balance, 2) ?>" />
            </td>
        </tr>
        <?php
    }
}
?>
        
<?php
if ($this->getClientJournal) {
    foreach ($this->getClientJournal as $each) {       
        $each['id'] .= '_sj';
        ?>
        <tr>
            <td width="3%">
                <input type="checkbox" class="chkcol" name="chkcol[]" value="<?= $each['id'] ?>"/>
                <input type="hidden" class="currentWht" value="<?= isset($each['wht_amount']) ? $each['wht_amount'] :'' ?>"/>
                <input type="hidden" class="whtpercent" value="<?= $each['wht_tax'] ?>"/>
                <input type="hidden" class="sub_total_amount" value="<?= $each['grand_total'] ?>" />

                <input type="hidden"  class="appliedAmount" value="<?= $each['applied_amount'] ?>"/>
                <input type="hidden" name="appliedAmount2[<?= $each['id'] ?>]" class="appliedAmount2" value="<?= $each['applied_amount'] ?>"/>

                <input type="hidden" class="tempwht" value="<?= isset($each['wht_amount']) ? $each['wht_amount'] :'' ?>" />
                <input type="hidden" name="whtamount[<?= $each['id'] ?>]" class="whtamount" value="" />
                <input type="hidden" name="cmid[<?= $each['id'] ?>]" value="" class="cm" />
                <input type="hidden" name="srid[<?= $each['id'] ?>]" value="" class="sr" />
                <input type="hidden" name="cmamount[<?= $each['id'] ?>]" value="" class="cmamount" />
                
                <input type="hidden" name="vatableamount[<?= $each['id'] ?>]" class="vatableamount" value="<?= $each['vatableAmount'] ?>" />
                <input type="hidden" name="exemptamount[<?= $each['id'] ?>]" class="exemptamount" value="<?= $each['exemptAmount'] ?>" />

                <input type="hidden" name="transType[<?= $each['id'] ?>]" value="salesjournal" />
            </td>
            <td>
                <?= $each['sales_journal_number'] ?>
            </td>	
            <td class="hidden">
                <?= $each['ref_no'] ?>
            </td>
            <td>
                <input type="text"  readonly value="" />
            </td>
            <td><?= date('m/d/Y', strtotime($each['trans_date'])) ?></td>
            <td class="total"><input type="text" class="totalinvoice isNumeric" readonly value="<?= Controller::getFloat($each['grand_total']) ?>"/></td>
            <td class="whtAmountHolder"><input type="text" name="whtamount[<?php echo $each['id'] ?>]" class="whtax isNumeric" value="<?php echo Controller::getFloat($each['wht_amount']) ?>" readonly/></td>
            <td class="appliedAmount">
                <input type="text" name="appliedAmount" value="<?php echo Controller::getFloat($each['applied_amount']) ?>" class="amount"/>
            </td>
            <?php
//            $each['grand_total'] - $each['amount_paid'];
            $balance = $each['grand_total'] - ( $each['applied_amount'] + $each['wht_amount'] );
            ?>
            <td>
                <input type="text" readonly="readonly"  name="balance[<?= $each['id'] ?>]"
                       class="balance isNumeric" value="<?= number_format((float) $balance, 2) ?>" />
            </td>
        </tr>
        <?php
    }
}
?>