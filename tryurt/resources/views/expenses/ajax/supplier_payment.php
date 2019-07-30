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
	<td>
		<?= $each['payable_number'] ?>
	</td>
	<td>
		<?= $each['ref_num'] ?>
	</td>
	<td>
		<?= date('m/d/Y', strtotime($each['date_issued'])) ?>
	</td>
	<td>
		<?= number_format((float) $each['grand_total'],2) ?>
	</td>
	<td class="appliedAmount">
		<?= number_format((float) $each['applied_amount'],2) ?>
	</td>
	<td>
		<?= number_format((float) $each['balance'],2) ?>
	</td>
</tr>
<?php
		}
	}
?>