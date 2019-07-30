<?php

	$lists = $this->getData;
	if($lists){
		$total = 0;
	foreach($lists as $list){
		$total += Controller::removeComma(($list->status=='reversed') ? 0 : getData2($this->getExpenseAmount,$list->id));
?>
<tr class="tablecni">
	<td class="lineExpense" style="border-right:none!important;border-left:none!important;"><input type="checkbox" name="trig[]" value="<?= $list->id ?>"></td>
	<td class="lineExpense" style="border-right:none!important;border-left:none!important;">
		<a href="#" class="edits" id="<?= $list->id ?>" ><?= $list->expenseNumber ?></a>
	</td>
	<!--<td class=""><?= date('m / d / Y',strtotime($list->dateIssued)) ?></td>-->
	<td class="lineExpense" style="border-right:none!important;border-left:none!important;"><?= date('m/d/Y',strtotime($list->dateIssued)) ?></td>
	<td class="lineExpense" style="border-right:none!important;border-left:none!important;"><?= getData($this->getSuppliers,$list->supplierId) ?>
	</td>
	<td class="lineExpense" style="border-right:none!important;border-left:none!important;"><?= $list->particular ?></td>
    <td class="lineExpense" style="border-right:none!important;border-left:none!important;"><?= ($list->status=='reversed')? '' . getData2($this->getExpenseAmount,$list->id) .'' : getData2($this->getExpenseAmount,$list->id);  ?></td>
	<td class="lineExpense" style="border-right:none!important;border-left:none!important;"><?= ucwords($list->status) ?></td>
        <!--<td><?= ($list->dateReversed=='0000-00-00')? '': date('m / d / Y', strtotime($list->dateReversed))?></td>-->
    <td class="lineExpense" style="border-right:none;!important;border-left:none!important;"><?= ($list->dateReversed=='0000-00-00')? '': date('m/d/Y', strtotime($list->dateReversed))?></td>
</tr>
<?php
	}
?>
	<tr class="tablecni" style="background:#C51400;">
		<td style="color:#fff;font-size:12px;font-family:Verdana;border:none;text-align:right;padding-right:50px;" colspan="5"><b>Total : </b></td>
		<td style="color:#fff;font-size:12px;font-family:Verdana;border:none;text-align:right;"><b><?= Controller::getFloat($total) ?></b></td>
		<td style="border:none;"></td>
		<td style="border:none;"></td>
	</tr
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
		if($id == $each->newExpenseId){
			$return = $each->grandTotal;
		}
	}
	return Controller::getFloat($return);
}

?>