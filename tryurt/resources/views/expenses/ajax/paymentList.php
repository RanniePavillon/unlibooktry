<?php
	$lists = $this->getData;
	// print_r($lists);
	// exit;
	if($lists){
		$total = 0;
	foreach($lists as $list){
		$total += Controller::removeComma(($list['status']=='reversed') ?  : $list['amount_received']);
?>
<tr class="tablecni">
	<td class="lineExpense" style="border:none;"><input type="checkbox" name="trig[]" value="<?= $list['id'] ?>"></td>
	<td class="lineExpense" style="border:none; text-align: left;">
		<a href="#" class="edits" id="<?= $list['id'] ?>" ><?= $list['col_num'] ?></a>
	</td>
	<td class="lineExpense" style="border:none;"><?= date('m/d/Y',strtotime($list['date_received'])) ?></td>
	<td class="lineExpense"><?= ucfirst($list['name']) ?>
	</td>
	<td class="lineExpense" style="border:none; text-align: right;"><?= Controller::getFloat($list['amount_received']) ?></td>
	<td class="lineExpense" style="border:none; text-align: right;"><?= ucfirst($list['status']) ?></td>
    <td class="lineExpense" style="border:none; text-align: right;"><?= ($list['status']=='reversed') ? '' .date('m/d/Y',strtotime($list['date_reversed'])) : '';  ?></td>
</tr>
<?php
	}
?>
	<tr class="tablecni" style="background:#c51400;">
		<td></td>
		<td></td>
		<td></td>
		<td colspan="" style="border:1;color:#fff;font-size:12px;font-family:Verdana;text-align:right;"><b>Total : </b></td>
		<td style="border:1;color:#fff;font-size:12px;font-family:Verdana;text-align:right;"><b><?= Controller::getFloat($total) ?></b></td>
        <td></td>
        <td></td>
	</tr>
<?php
}

function getData($obj,$id){
	$return = '';
	foreach($obj as $each){
		if($id == $each->id){
			$return = $each->name;
		}
	}
	
	return $return;
}

function getData2($obj,$id){
	$return = '';
	foreach($obj as $each){
		if($id == $each->newPayableId){
			$return = $each->grandTotal;
		}
	}
	return Controller::getFloat($return);
}

?>