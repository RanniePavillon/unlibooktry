<?php

	$lists = $this->getData;
	if($lists){
		$total = 0;
	foreach($lists as $list){
		$total += Controller::removeComma(($list->status=='reversed') ? 0 : getData2($this->getExpenseAmount,$list->id));
?>
<tr class="tablecni">
	<td class="lineExpense" style="border:none;border-bottom:1px solid #c8c8c8;"><input type="checkbox" name="trig[]" value="<?= $list->id ?>"></td>
	<td class="lineExpense" style="border:none;border-bottom:1px solid #c8c8c8;">
		<a href="#" class="edits" id="<?= $list->id ?>" ><?= $list->payableNumber ?></a>
	</td>
	<!--<td class=""><?= date('m / d / Y',strtotime($list->dateIssued)) ?></td>-->
	<td class="lineExpense" style="border:none;border-bottom:1px solid #c8c8c8;"><?= date('m/d/Y',strtotime($list->dateIssued)) ?></td>
	<td class="lineExpense" style="border-bottom:1px solid #c8c8c8;"><?= getData($this->getSuppliers,$list->supplierId) ?>
	</td>
	<td class="lineExpense" style="border:none;border-bottom:1px solid #c8c8c8;"><?= $list->remarks ?></td>
    <td class="lineExpense" style="border:none;border-bottom:1px solid #c8c8c8;"><?= ($list->status=='reversed')? '' . getData2($this->getExpenseAmount,$list->id) .'' : getData2($this->getExpenseAmount,$list->id);  ?></td>
	<td class="lineExpense" style="border:none;border-bottom:1px solid #c8c8c8;"><?= ucwords($list->status) ?></td>
        <!--<td><?= ($list->dateReversed=='0000-00-00')? '': date('m / d / Y', strtotime($list->dateReversed))?></td>-->
    <td class="lineExpense" style="border:none;border-bottom:1px solid #c8c8c8;"><?= ($list->dateReversed=='0000-00-00')? '': date('m/d/Y', strtotime($list->dateReversed))?></td>
</tr>
<?php
	}
?>
	<tr class="tablecni" style="background:#A70C0C;">
		<td class="" style="border:none;"></td>
		<td class="" style="border:none;"></td>
		<td class="" style="border:none;"></td>
		<td class="tr" style="border:none;"></td>
		<td style="border:none;color:#fff;font-size:12px;font-family:Verdana;"><b>Total : </b></td>
		<td style="border:none;color:#fff;font-size:12px;font-family:Verdana;"><b><?= Controller::getFloat($total) ?></b></td>
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