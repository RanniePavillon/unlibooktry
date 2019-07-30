<?php

	$lists = $this->getData;
	if($lists){
		$total = 0;
	foreach($lists as $list){
		$total += Controller::removeComma(($list->status=='reversed') ? 0 : getData2($this->getExpenseAmount,$list->id));
?>
<tr class="tablecni">
	<!--<td><input type="checkbox" value="<?php //echo $item->id?>" /></td>-->
	<td class="">
		<!--<a href="#" class="edits" id="<?= $list->id ?>" ><?= $list->cashAdvanceNum ?></a>-->
	</td>
        <td class="fortd"><a href="#" class="edits" id="<?= $list->id ?>" ><?= $list->cashAdvanceNum ?></a></td>
	<td class=""><?= ($list->dateIssued=='0000-00-00')? '' : date('m/d/Y',strtotime($list->dateIssued)) ?></td>
	<td class="fortd"><?= getData($this->getSuppliers,$list->supplierId) ?>
	</td>
        <td class="fortd"><?= $list->referenceNumber ?></td>
    <td style="text-align:right;padding-right:50px;"><?= ($list->status=='reversed')? '' . getData2($this->getExpenseAmount,$list->id) .'' : getData2($this->getExpenseAmount,$list->id);  ?></td>
    <td class="fortd"><?= $list->status == 'preapproved' ? 'Pre-Approved' : ucfirst($list->status) ?></td>
	
</tr>
<?php
	}
?>
	<tr class="tablecni" style="background:#183867;">
		<td class=""></td>
		<td class=""></td>
		<td class=""></td><td class=""></td>
		<td style="color:#fff;font-size:12px;font-family:Verdana;"><b>Total : </b></td>
		<td style="text-align:right;padding-right:50px;color:#fff;font-size:12px;font-family:Verdana;"><b><?= Controller::getFloat($total) ?></b></td>
               
                
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
		if($id == $each->newExpenseId){
			$return = $each->grandTotal;
		}
	}
	return Controller::getFloat($return);
}

?>