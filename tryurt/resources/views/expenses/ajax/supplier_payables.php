<?php
	$data = $this->getSupplierExpense;
	// echo '<pre>';
	// print_r($data);
	// echo '</pre>';
	// exit;
	if($data){
		foreach($data as $each){
?>
<tr>
	<td width="3%">
		<input type="checkbox" class="chkcol" name="chkcol[]" value="<?= $each['id'] ."-".$each['type'] ?>"/>
		<input type="hidden" name="trig[]" value="<?= $each['id'] ?>" />
		<input type="hidden" value="<?= $each['applied_amount'] ?>" class="prevAppliedAmount"/>
                <input type="hidden" name="type[]" value="<?= $each['type'] ?>" />
                <input type="hidden" name="cmid[]" class="cm" value="" />
                <input type="hidden" name="cmamount[]" class="cmamount" value="" />                
	</td>
	<td>
		<?= $each['payable_number'] ?>
		<input type="hidden" value="<?= $each['applied_amount'] ?>"/>
	</td>
	<td>
		<?= $each['ref_num'] ?>
		<input type="hidden" value="<?= $each['sub_total_amount'] - $each['discount_amount'] ?>"/>
	</td>
	<td>
		<?= date('m/d/Y', strtotime($each['date_issued'])) ?>
	</td>
	<td>
		<input type="text" class="totalinvoice isNumeric" readonly value="<?= number_format((float) $each['grand_total'],2) ?>"/>
	</td>
        <td class="appliedAmount">
		<?= number_format((float) $each['applied_amount'],2) ?>
	</td>
	<td>
		<input type="text" readonly="readonly"  name="balance[]"
		class="balance isNumeric" value="<?= number_format((float) $each['balance'],2) ?>" />
	</td>
</tr>
<?php
		}
	}
?>