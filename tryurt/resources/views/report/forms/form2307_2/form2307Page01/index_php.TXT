

<style>
.formInputHolder input{
	width: 100%;
	height: 100%;
	background: none;
	border: none;
	font-size: 20px;
	letter-spacing:16;
	padding-left:10px;
}
</style>

<?php
	$month = intVal(date('m',strtotime($_POST['date'])));
	$year = intVal(date('y',strtotime($_POST['date'])));
	$vendor = DAOFactory::getTblSupplierDAO()->load($_POST['vendor']);
	// print_r($this->form2307);
	// exit;
	$orgInfo = DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('medinfoid'));
	$org = DAOFactory::getTblOrganizationDAO()->load(Session::getSession('medorgid'));
	$tin = split('-',$vendor->tin);
	$tin2 = split('-',$orgInfo->tinNum);
	$m1 = 0;
	$m2 = 0;
	if($month <= 3){
		$m1 = '01';
		$m2 = '03';
	} elseif($month <= 6){
		$m1 = '04';
		$m2 = '06';
	} elseif($month <= 9){
		$m1 = '07';
		$m2 = '09';
	} else {
		$m1 = '10';
		$m2 = '12';
	}
?>

<link href="<?= $this->imageUrl ?>styles.css" rel="stylesheet" type="text/css">
<div id="background">
	<div id="Layer8"><img src="<?= $this->imageUrl ?>images/Layer8.png"></div>
	
	<div id="LayerFrom" class="formInputHolder">
		<input value="<?= $m1 ?>/01/<?= $year ?>"/>
	</div>
	<div id="LayerTo" class="formInputHolder">
		<input value="<?= date('m/d/t',strtotime($year.'-'.$m2.'-01')) ?>"/>
	</div>
	
	<div id="tin1" class="formInputHolder">
		<input value="<?= isset($tin[0]) ? $tin[0] : '' ?>"/>
	</div>
	
	<div id="tin2" class="formInputHolder">
		<input value="<?= isset($tin[1]) ? $tin[1] : '' ?>"/>
	</div>
	
	<div id="tin3" class="formInputHolder">
		<input value="<?= isset($tin[2]) ? $tin[2] : '' ?>"/>
	</div>
	
	<div id="tin4" class="formInputHolder">
		<input value="<?= isset($tin[3]) ? $tin[3] : '' ?>"/>
	</div>
	
	<div id="LayerName" class="formInputHolder">
		<input value="<?= $vendor->name ?>" style="letter-spacing:0;"/>
	</div>
	
	<div id="LayerRegAdd" class="formInputHolder">
		<input value="<?= $vendor->address ?>" style="letter-spacing:0;"/>
	</div>
	
	<div id="LayerRegAddZipCode" class="formInputHolder">
		<input value=""/>
	</div>
	
	<div id="LayerForiegnAdd" class="formInputHolder">
		<input value=""/>
	</div>
	
	<div id="LayerForiegnAddZipCode" class="formInputHolder">
		<input value=""/>
	</div>
	
	<div id="tin12" class="formInputHolder">
		<input value="<?= isset($tin2[0]) ? $tin2[0] : '' ?>"/>
	</div>
	
	<div id="tin22" class="formInputHolder">
		<input value="<?= isset($tin2[1]) ? $tin2[1] : '' ?>"/>
	</div>
	
	<div id="tin32" class="formInputHolder">
		<input value="<?= isset($tin2[2]) ? $tin2[2] : '' ?>"/>
	</div>
	
	<div id="tin42" class="formInputHolder">
		<input value="<?= isset($tin2[3]) ? $tin2[3] : '' ?>"/>
	</div>
	
	<div id="LayerName2" class="formInputHolder">
		<!--<input value="<?= $org->orgName ?>" style="letter-spacing:0;"/>-->
		<input value="<?= $clinicU->registeredName ?>" style="letter-spacing:0;"/>
	</div>
	
	<div id="LayerRegAdd2" class="formInputHolder">
		<!--<input value="<?= $orgInfo->address ?>" style="letter-spacing:0;"/>-->
		<input value="<?= $clinicU->address ?>" style="letter-spacing:0;"/>
	</div>
	
	<div id="LayerRegAddZipCode2" class="formInputHolder">
		<input value="<?= $orgInfo->zipCode ?>"/>
	</div>
	
	
	<?php
		$row1 = 9;
		$row2 = 10;
		$row3 = 11;
		$row4 = 12;
		$row5 = 13;
		$row6 = 14;
		$row7 = 15;
		$total1 = 0;
		$total2 = 0;
		$total3 = 0;
		$total4 = 0;
		$total5 = 0;
		for($x= 1; $x <= 15; $x++){
			$total1 += Controller::removeComma(checkPerQuarter($this->form2307,$x-1,1));
			$total2 += Controller::removeComma(checkPerQuarter($this->form2307,$x-1,2));
			$total3 += Controller::removeComma(checkPerQuarter($this->form2307,$x-1,3));
			$total4 += Controller::removeComma(checkAmount($this->form2307,$x-1));
			$total5 += Controller::removeComma(checkWht($this->form2307,$x-1));
	?>
	<div id="Layer<?= $row1 ?>">
		<input name="" class="tblRow1" value="<?= checkDescription($this->form2307,$x-1) ?>"/>
	</div>
	<div id="Layer<?= $row2 ?>">
		<input name="" class="tblRow2" value="<?= checkAtc($this->form2307,$x-1) ?>"/>
	</div>
	<div id="Layer<?= $row3 ?>">
		<input type="text" name="" class="tblRow3" value="<?= checkPerQuarter($this->form2307,$x-1,1) ?>"/>
	</div>
	<div id="Layer<?= $row4 ?>">
		<input type="text" name="" class="tblRow4" value="<?= checkPerQuarter($this->form2307,$x-1,2) ?>"/>
	</div>
	<div id="Layer<?= $row5 ?>">
		<input type="text" name="" class="tblRow5" value="<?= checkPerQuarter($this->form2307,$x-1,3) ?>"/>
	</div>
	<div id="Layer<?= $row6 ?>">
		<input type="text" name="" class="tblRow6" value="<?= checkAmount($this->form2307,$x-1) ?>"/>
	</div>
	<div id="Layer<?= $row7 ?>">
		<input type="text" name="" class="tblRow7" value="<?= checkWht($this->form2307,$x-1) ?>"/>
	</div>
	<?php
			$row1 += 7;
			$row2 += 7;
			$row3 += 7;
			$row4 += 7;
			$row5 += 7;
			$row6 += 7;
			$row7 += 7;
		}
	?>
	<div id="Layer115">
		<input name="" class="tblRow2" value=""/>
	</div>
	<div id="Layer116">
		<input type="text" name="" class="tblRow3" value="<?= Controller::getFloat($total1) ?>"/>
	</div>
	<div id="Layer117">
		<input type="text" name="" class="tblRow4" value="<?= Controller::getFloat($total2) ?>"/>
	</div>
	<div id="Layer118">
		<input type="text" name="" class="tblRow5" value="<?= Controller::getFloat($total3) ?>"/>
	</div>
	<div id="Layer119">
		<input type="text" name="" class="tblRow6" value="<?= Controller::getFloat($total4) ?>"/>
	</div>
	<div id="Layer120">
		<input type="text" name="" class="tblRow7" value="<?= Controller::getFloat($total5) ?>"/>
	</div>
	<?php
		$row1 = 128;
		$row2 = 129;
		$row3 = 130;
		$row4 = 131;
		$row5 = 132;
		$row6 = 133;
		$row7 = 134;
		for($x= 1; $x <= 15; $x++){
	?>
	<div id="Layer<?= $row1 ?>">
		<input name="" class="tblRow1" value=""/>
	</div>
	<div id="Layer<?= $row2 ?>">
		<input name="" class="tblRow2" value=""/>
	</div>
	<div id="Layer<?= $row3 ?>">
		<input type="text" name="" class="tblRow3" value=""/>
	</div>
	<div id="Layer<?= $row4 ?>">
		<input type="text" name="" class="tblRow4" value=""/>
	</div>
	<div id="Layer<?= $row5 ?>">
		<input type="text" name="" class="tblRow5" value=""/>
	</div>
	<div id="Layer<?= $row6 ?>">
		<input type="text" name="" class="tblRow6" value=""/>
	</div>
	<div id="Layer<?= $row7 ?>">
		<input type="text" name="" class="tblRow7" value=""/>
	</div>
	<?php
			$row1 += 7;
			$row2 += 7;
			$row3 += 7;
			$row4 += 7;
			$row5 += 7;
			$row6 += 7;
			$row7 += 7;
		}
	?>
	<div id="Layer234">
		<input name="" class="tblRow2" value=""/>
	</div>
	<div id="Layer235">
		<input type="text" name="" class="tblRow3" value=""/>
	</div>
	<div id="Layer236">
		<input type="text" name="" class="tblRow4" value=""/>
	</div>
	<div id="Layer237">
		<input type="text" name="" class="tblRow5" value=""/>
	</div>
	<div id="Layer238">
		<input type="text" name="" class="tblRow6" value=""/>
	</div>
	<div id="Layer239">
		<input type="text" name="" class="tblRow7" value=""/>
	</div>
</div>
<?php
function checkDescription($form2307,$index){
	if(!empty($form2307)){
		if(isset($form2307[$index])){
			return $form2307[$index]->accountName;
		}
	}
}
function checkAtc($form2307,$index){
	if(!empty($form2307)){
		if(isset($form2307[$index])){
			return $form2307[$index]->atcCode;
		}
	}
}
function checkPerQuarter($form2307,$index,$index2){
	if(!empty($form2307)){
		if(isset($form2307[$index])){
			return checkDateQ($form2307[$index]->amount, $index2);
		}
	}
}
function checkDateQ($amount, $index2){
	$month = intVal(date('m',strtotime($_POST['date'])));
	if($index2 % 3 == ($month) % 3){
		return Controller::getFloat($amount);
	}
	return '0.00';
}
function checkAmount($form2307, $index){
	if(!empty($form2307)){
		if(isset($form2307[$index])){
			return Controller::getFloat($form2307[$index]->amount);
		}
	}
}
function checkWht($form2307, $index){
	if(!empty($form2307)){
		if(isset($form2307[$index])){
			return Controller::getFloat($form2307[$index]->taxRequired);
		}
	}
}




