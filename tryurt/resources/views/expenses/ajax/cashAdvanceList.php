<?php

	$lists = $this->getData;
	if($lists){
		$total = 0;
	foreach($lists as $list){
		$total += Controller::removeComma(($list->status=='reversed') ? 0 : getData2($this->getExpenseAmount,$list->id));
?>
<tr class="tablecni">
	<td class=""><input type="checkbox" name="trig[]" value="<?= $list->id ?>" class="checktrig" caType="<?= $list->type ?>"  ></td>
	<td class="">
		<a href="#" class="edits" id="<?= $list->id ?>" ><?= $list->cashAdvanceNum ?></a>
	</td>
	<td class=""><?= ($list->dateIssued=='0000-00-00')? '' : date('m/d/Y',strtotime($list->dateIssued)) ?></td>
	<td class="fortd"><?= getData($this->getSuppliers,$list->supplierId) ?>
	</td>
	<td class="fortd"><?= $list->referenceNumber ?></td>
    <td class=""><?= ($list->status=='reversed')? '' . getData2($this->getExpenseAmount,$list->id) .'' : getData2($this->getExpenseAmount,$list->id) ;  ?></td>
	<td class=""><?php if($list->status=="pending_reverse"){
			echo "Pending Reverse";
		}else{
			echo ucwords($list->status =='preapproved' ? 'Pre-Approved' : ucwords($list->status));
		}
	?></td>
    <td><?= ($list->dateReversed=='0000-00-00')? '': date('m/d/Y', strtotime($list->dateReversed))?></td>
</tr>
<?php
	}
?>
	<tr style="display: none;background:#183867;">
		<td colspan="8">
			<script>
				$('.theTotalCashAd').html('<?= "Php " . Controller::getFloat($total) ?>');
			</script>
		</td>
	</tr>
	<!--<tr class="tablecni" style="background:#183867;">
		<td class=""></td>
		<td class=""></td>
		<td class=""></td>
		<td class="tr"></td>
		<td style="color:#fff;font-size:12px;font-family:Verdana;"><b>Total : </b></td>
		<td style="color:#fff;font-size:12px;font-family:Verdana;"><b><?= Controller::getFloat($total) ?></b></td>
	    <td></td>
	    <td></td>
	</tr>-->
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