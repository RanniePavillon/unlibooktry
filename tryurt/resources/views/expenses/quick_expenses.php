<style>
.loadings{
	text-align: center;
	padding-top: 100px;
}
.quickExpenseHolder {
	background-color: white;
	padding-bottom: 70px;
	/* margin-top: -36px; */
}
.printPrev{
	padding-top: 20px;
}
.cnitableExp{
	border-collapse:collapse;
	width: 99%;
	margin:auto;
	margin-top: 5px;
}
.cnitableExp, th{
	padding: 2px 2px 2px 2px;
	font-size: 12px;
	color: white;
	font-family:Verdana;
	font-weight: bold;
	height: 37px;
}
.cnitableExp, td{
	font-size: 11px;
	color: black;
	padding:0px;
	font-family:Verdana;
	font-weight: normal;
	border: 1px solid #c8c8c8;
}
.cnitableExp a{
	color:blue;
	font-size: 11px;
	font-weight: normal;
	cursor: pointer;
	text-decoration: none;
	font-family:Verdana;
}
.cnitableExp a:hover{
	color:blue;
	font-size: 11px;
	font-weight: normal;
	cursor: pointer;
	text-decoration: underline;
}
.cnitableExp tr{
	border-bottom: #E8E8E8;
}	
.searchB{
	width: 35px;
	height: 33px;
	background-image: url('<?= URL ?>public/images/searchButton.png');
	background-repeat: no-repeat;
	border-radius: 2px 2px 2px 2px;
	font-size: 14px;
	font-family: Agency FB;
	cursor: pointer;
	border: none;
	color: #fff;
	background-color: rgb(230, 250, 222);
	background-position: 3px;
	position: absolute;
	margin-top: -33px;
	margin-left: 305px;
	background-size: 100%;
	opacity: -8;
}
.createAll {
	width: 210px;
	height: 32px;
	border: none;
	background-image:url('<?= URL ?>public/images/reButton.png');
	background-repeat:no-repeat;
	background-position:left;
	cursor: pointer;
	border-radius:5px;
}
.cnitableExpHolderPage{
	background-color:#183867;
	margin: auto;
	margin-top: 6px;
	width: 99%;
}
.invNoOption{
	background-color: #183867;
	color: #fff;
	font-weight: bold!important;
}
.qeTd{
	border-bottom:1px solid #c8c8c8;
	border-right:1px solid #c8c8c8;
}
.textTD{
	width: 100%;
	border: none;
	height: 30px;
	outline-style:none;
}
.checkboxTD{
	margin: 0 auto;
	border: none;
	height: 30px;
	outline-style:none;
	
}
.dateTD{
	width: 100px;
	border: none;
	height: 30px;
	outline-style:none;
	text-align: center;
}
.cnitableExp td select{
	border: none;
	height: 30px;
	outline-style:none;
	padding-left: 5px;
}

.selecttextTD{
	width: 70px;
	border: none;
	height: 30px;
	outline-style:none;
	padding-left: 5px;
}

.checkTD{
	margin-left:6px;
}
.textLeft{
	text-align:center;
}
.textRight{
	text-align:right;
}
.saveQuickExp{
	width: 87px;
    height: 28px;
    border-radius: 5px;
    border: none;
    background-color: #1439A5;
    color: #fff;
    font-family: agency fb2;
    font-size: 16px;
    outline-style: none;
    cursor: pointer;
    text-shadow: 1px 1px 2px #282927;
}
.postQuickExp{
	width: 87px;
	height: 28px;
	margin-left: 5px;
	border-radius: 5px;
	border: none;
	background-image: url('<?=URL?>public/images/post_payment.png');
	background-size: 100% 100%;
	background-repeat: no-repeat;
}
.qeButtons{
	float: right;
	margin-right:10px;
	margin-top:20px;
}
.addQuickExp{
	/* background-color: #1439A5; */
    border-radius: 5px;
    cursor: pointer;
    height: 28px;
    width: 87px;
    border: none;
    /* color: #fff;
    font-family: agency fb2;
    font-size: 16px; */
    outline-style: none;
    text-shadow: 1px 1px 2px #282927;
}
.deleteQuickExp{
	border-radius: 5px;
    cursor: pointer;
    height: 28px;
    width: 87px;
    border: none;
    background-color: #1439A5;
    color: #fff;
    font-family: agency fb2;
    font-size: 16px;
    outline-style: none;
    margin-left: 15px;
    text-shadow: 1px 1px 2px #282927;
}

.importQuickExp{
	border-radius: 5px;
	cursor: pointer;
	height: 28px;
	width: 87px;
	border: none;
	background: #144895;
	color: #fff;
	font-family: Agency FB;
	font-size: 16px;
	font-weight: bold;
}

select[name="account[]"]{
	width: 150px;
}
select[name="vendor[]"]{
	width: 190px;
	
}
.tc{
	text-align: center;
}
input[name="refNum[]"]{
	width: 100px;
}
input[name="amount[]"]{
	padding: 0 10px;
}
.ui-datepicker-month{
	color:#000;
}
.ui-datepicker-year{
	color:#000;
}
.imEx {
	width: 160px;
    height: 29px;
    border-radius: 5px;
    cursor: pointer;
    border: none;
    background-color: #1439A5;
    font-size: 16px;
    font-family: agency fb2;
    color: #fff;
    font-weight: bold;
    outline-style: none;
    text-shadow: 1px 1px 2px #282927;
}
.loadingHolder{
	margin-top:15%;
	margin-left:45%;
}
.loadingimg{
	width:140px;
	height:140px;
}
</style>
<?php
$vendor = TblSupplierMySqlExtDAO::getSupplierOrderList(Session::getSession('orgid'));
$info = $this->orgInfo;
?>
<title>
	QUICK EXPENSES
</title>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<div class="mainbodyExpenses dsply">
	<form class="quickExForm">
	<div class="quickExpenseHolder footerHeight">
		<div id="newAllExp" style="margin-bottom:5px;">
			<div class="allexp headings">QUICK EXPENSES</div>
			<div style="margin-left:10px;margin-top:10px;font-family:Calibri;font-weight:bold;">
				Record cash paid expenses without WHT here
			</div>
			<div style="margin-left:10px;margin-top:10px;float:left;margin-bottom:10px;">
				<label  class="textQE" style="font-family:Verdana;font-size:12px;">GL Posting:</label>
				<input type="hidden" name="token" value="<?=$this->token;?>">
				<select class="item-text2NewItem item-textNewItem" name="glPosting" id="glPosting2" required style="width: 225px;height:27px;">
					<?php
						$coas = DAOFactory::getTblCoaDAO()->queryByOrgId(Session::getSession('orgid'));
						$coas2 = TblCoaMySqlExtDAO::getCoaByCoaNum(Session::getSession('orgid'), '%1000-003-%');
						//$coaArray = array('1000-002', '1000-003');
						$coaArray = array('1000-002');
						if ($coas2) {
							$coaArray = array('1000-002');
						}

						foreach ($coas as $coa) {
							if (in_array($coa->accountNum, $coaArray)) {
								?>
								<option value="<?php echo $coa->id ?>"><?php echo $coa->accountNum ?> - <?php echo $coa->accontName ?></option>

								<?php
							}
						}
						if ($coas2) {
							foreach ($coas2 as $coa) {
								if($coa->activeAccount == 'yes'){
						?>
									<option value="<?php echo $coa->id ?>"><?php echo $coa->accountNum ?> - <?php echo $coa->accontName ?></option>
						<?php
								}
							}
						}
					?>
					<option value="addBank">[Add Bank]</option>
				</select>
				
			<?php if ($this->orgInfo->typeOfTax == "percentage" || $this->orgInfo->typeOfTax == "Percentage") {
				?>
				<div class="qeInputTax" style="margin-top:10px;margin-left:10px;">
					<input type="checkbox" name="includeInputTax" checked style="position:absolute;transform:scale(1.1);" id="qeITE">
					<label for="qeITE" class="qeIncInputTax" style="margin-left:24px;font-family:Verdana;font-size:12px;">
						Include input tax as expense
					</label>
				</div>
				<?php
			}
			?>
			</div>
		</div>
		<div style="float:right;margin-right:5px;margin-top:35px;" class="hidden">
			<a href="<?= URL ?>expenses/quickExpensesImEx"><input type="button" value="IMPORT/EXPORT" class="imEx hidden"></a>
		</div>
		<div  style="clear:both;"></div>
		<div style="margin-top:5px;" class="moduleHeight">
			<table class="cnitableExp">
				<tr class="headinvoice">
					<th><!-- <input type="checkbox" class="jsCheckAll"> --></th>
					<th class="textLeft">Status</th>
					<th class="textLeft">Date</th>
					<th class="textLeft">Vendor Name</th>
					<th class="textLeft">Particular</th>
					<th class="textLeft">Ref No.</th>
					<th class="textLeft">Account Name</th>
					<th title="Inclusive of VAT">INC</th>
					<th class="tc">VAT</th>
					<th class="tc">Amount</th>
					<!--<th class="textRight">EWT</th>
					<th class="textRight">Net Amount</th>-->
				</tr>
			<?php
			if(isset($this->data)){
				foreach($this->data as $each){
			?>
				<tr>
					<td class="qeTd">
						<input type="checkbox" class="checkTD jvCheckbox" name="qeCheck[]" value="checked">
					</td>
					<td class="qeTd">
						<select class="selecttextTD" name="status[]">
							<option value="open" <?= selected('open',$each['status']) ?>>Open</option>
							<option value="posted" <?= selected('posted',$each['status']) ?>>Post</option>
						</select>
					</td>
					<td class="qeTd">
						<input type="text" class="dateTD" name="issueddate[]" value="<?= date('Y-m-d',strtotime($each['date'])) ?>">
					</td>
					<td class="qeTd">
						<select name="vendor[]" class="vendor101"  >
							
							<option></option>
							<option value="addsupplier" class="addVendorOption">[Add Vendor]</option>
							<?php

                            foreach ($vendor as $item) {
                                if ($item->activeAccount == 'yes') {
                                    ?>
                                    <option currency="<?= $item->currencyId ?>" value="<?php echo $item->id ?>" address="<?= $item->address ?>"
										<?php
										if ($each['vendor'] == $item->supplierAccount) {
											echo ' selected="selected" ';
										}
										?>
												>
										<?php echo $item->name ?>
                                    </option>
                                <?php
                                }
                            }
                            ?>
                            
						</select>
					</td>
					<td class="qeTd">
						<input type="text" class="textTD" name="particular[]" value="<?= $each['particular'] ?>">
					</td>
					<td class="qeTd">
						<input type="text" class="textTD" name="refNum[]" value="<?= $each['refNum'] ?>">
					</td>
					<td class="qeTd">
						<select name="account[]" >
							<option></option>
							<?php
							$userCoa = $this->userCoa;
							if (isset($userCoa) && !empty($userCoa)) {
								foreach ($userCoa as $each1) {
									// if ($each->accountType == 'expense') {
										echo '<option value="' . $each1->id . '" 
								accountNum="' . $each1->accountNum . '" '. selected($each['account'] , $each1->accountNum) .'>
									' . $each1->accountNum . ' - ' . $each1->accontName . '</option>';
									// }
								}
							}
							?>
						</select>
					</td>
					<td class="qeTd tc">
						<input type="hidden" class="inclusiveOfVat" name="inclusiveOfVat[]" value="<?= $each['inc'] ?>" >
						<input type="checkbox" class="checkboxTD incVat" <?= checked('yes',$each['inc']) ?> >
					</td>
					<td class="qeTd">
						<select name="vat[]" >
							<?php
							$vat = $this->getVat;
							if (isset($vat) && !empty($vat)) {
								foreach ($vat as $each2) {
									echo '<option value="' . $each2->id . '" rate="' . $each2->rate . '" 
								 '. selected($each2->taxCode,$each['vatable']) .' 
								title="' . $each2->description . '"  >
								' . $each2->taxCode . '</option>';
								}
							}
							?>
						</select>
					</td>
					<td class="qeTd">
						<input type="text" name="amount[]" class="textTD textRight isNumeric" value="<?= Controller::getFloat($each['amount']) ?>">
					</td>
					<!--<td class="qeTd"><input type="text" class="textTD textRight"></td>
					<td class="qeTd">
						<input type="text" class="textTD textRight isNumeric" name="netAmount[]" >
					</td>-->
				</tr>
			<?php
				}
			} else {
				for($x = 1; $x <= 10; $x++){
			?>
				<tr>
					<td class="qeTd">
						<input type="checkbox" class="checkTD jvCheckbox" name="qeCheck[]" value="checked">
					</td>
					<td class="qeTd">
						<select class="selecttextTD" name="status[]">
							<option value="open">Open</option>
							<option value="posted" selected>Post</option>
						</select>
					</td>
					<td class="qeTd">
						<input type="text" class="dateTD" value="<?= date('m/d/Y') ?>" name="issueddate[]">
					</td>
					<td class="qeTd">
						<select name="vendor[]" class="vendor101"  >
							
							<option></option>
							<option value="addsupplier" class="addVendorOption">[Add Vendor]</option>
							<?php
							// $vendor = TblSupplierMySqlExtDAO::getSupplierOrderList(Session::getSession('orgid'));

                            foreach ($vendor as $item) {
                                if ($item->activeAccount == 'yes') {
                                    ?>
                                    <option currency="<?= $item->currencyId ?>" value="<?php echo $item->id ?>" address="<?= $item->address ?>"
										<?php
										if (Session::getSession('vendorSessionId') == $item->id) {
											echo ' selected="selected" ';
											Session::setSession('vendorSessionId', false);
										}
										?>
												>
										<?php echo $item->name ?>
                                    </option>
                                <?php
                                }
                            }
                            ?>
                            
						</select>
					</td>
					<td class="qeTd">
						<input type="text" class="textTD" name="particular[]">
					</td>
					<td class="qeTd">
						<input type="text" class="textTD" name="refNum[]">
					</td>
					<td class="qeTd">
						<select name="account[]" >
							<option></option>
							<?php
							$userCoa = $this->userCoa;
							if (isset($userCoa) && !empty($userCoa)) {
								foreach ($userCoa as $each) {
									// if ($each->accountType == 'expense') {
										echo '<option value="' . $each->id . '" 
								accountNum="' . $each->accountNum . '" >
									' . $each->accountNum . ' - ' . $each->accontName . '</option>';
									// }
								}
							}
							?>
						</select>
					</td>
					<td class="qeTd tc">
						<input type="hidden" class="inclusiveOfVat" name="inclusiveOfVat[]" value="yes">
						<input type="checkbox" class="checkboxTD incVat" checked>
					</td>
					<td class="qeTd">
						<select name="vat[]" >
							<?php
							$vat = $this->getVat;
							if (isset($vat) && !empty($vat)) {
								foreach ($vat as $each) {
									echo '<option value="' . $each->id . '" rate="' . $each->rate . '" 
								' . ($each->id == $ln->vatId ? 'selected="selected"' : '') . ' 
								title="' . $each->description . '" >
								' . $each->taxCode . '</option>';
								}
							}
							?>
						</select>
					</td>
					<td class="qeTd">
						<input type="text" name="amount[]" class="textTD textRight isNumeric" >
					</td>
					<!--<td class="qeTd"><input type="text" class="textTD textRight"></td>
					<td class="qeTd">
						<input type="text" class="textTD textRight isNumeric" name="netAmount[]" >
					</td>-->
				</tr>
			<?php
				}
			}
			?>
			</table>
			<div style="float:left;margin-top:20px;margin-left:10px;">
				<div style="float:left;"><input type="button" class="addQuickExp jsAddLine addsavebuttonbody" value="ADD LINE"></div>
				<div style="float:left;"><input type="button" class="deleteQuickExp jvDELETE addsavebuttonbody" value="DELETE"></div>
				<div style="clear:both;"></div>
			</div>
			<div class="qeButtons">
				<input type="submit" class="saveQuickExp addsavebuttonbody" value="SAVE">
			</div>
			
			
			
			
		</div>
		
		<div style="clear:both;"></div>
	</div>
	</form>
</div>
<div class="mainbodyExpenses loadings hidden">
	<img src="<?= URL ?>public/images/loading.gif"/>
</div>
			<table class="hidden jsnewTrHolder">
				<tr>
					<td class="qeTd">
						<input type="checkbox" class="checkTD jvCheckbox" name="qeCheck[]" value="checked">
					</td>
					<td class="qeTd">
						<select class="selecttextTD" name="status[]">
							<option value="open">Open</option>
							<option value="posted" selected >Post</option>
						</select>
					</td>
					<td class="qeTd">
						<input type="text" class="dateTD" value="<?= date('m/d/Y') ?>" name="issueddate[]">
					</td>
					<td class="qeTd">
						<select name="vendor[]" class="vendor101" >
							<option></option>
							<?php
                            // $vendor = DAOFactory::getTblSupplierDAO()->queryByOrgId(Session::getSession('orgid'));

                            foreach ($vendor as $item) {
                                if ($item->activeAccount == 'yes') {
                                    ?>
                                    <option currency="<?= $item->currencyId ?>" value="<?php echo $item->id ?>" address="<?= $item->address ?>"
										<?php
										if (Session::getSession('vendorSessionId') == $item->id) {
											echo ' selected="selected" ';
											Session::setSession('vendorSessionId', false);
										}
										?>
												>
										<?php echo $item->name ?>
                                    </option>
                                <?php
                                }
                            }
                            ?>
                            <option value="addsupplier" class="addVendorOption">[Add Vendor]</option>
						</select>
					</td>
					<td>
						<input type="text" class="textTD" name="particular[]">
					</td>
					<td class="qeTd">
						<input type="text" class="textTD" name="refNum[]">
					</td>
					<td class="qeTd">
						<select name="account[]" >
							<option></option>
							<?php
							$userCoa = $this->userCoa;
							if (isset($userCoa) && !empty($userCoa)) {
								foreach ($userCoa as $each) {
									// if ($each->accountType == 'expense') {
										echo '<option value="' . $each->id . '" 
								accountNum="' . $each->accountNum . '" >
									' . $each->accountNum . ' - ' . $each->accontName . '</option>';
									// }
								}
							}
							?>
						</select>
					</td>
					<td class="qeTd tc">
						<input type="hidden" class="inclusiveOfVat" name="inclusiveOfVat[]" value="yes">
						<input type="checkbox" class="checkboxTD incVat" checked>
					</td>
					<td class="qeTd">
						<select name="vat[]" >
							<?php
							$vat = $this->getVat;
							if (isset($vat) && !empty($vat)) {
								foreach ($vat as $each) {
									echo '<option value="' . $each->id . '" rate="' . $each->rate . '" 
								' . ($each->id == $ln->vatId ? 'selected="selected"' : '') . ' 
								title="' . $each->description . '" >
								' . $each->taxCode . '</option>';
								}
							}
							?>
						</select>
					</td>
					<td class="qeTd">
						<input type="text" name="amount[]" class="textTD textRight isNumeric"  >
					</td>
					<!--<td class="qeTd"><input type="text" class="textTD textRight"></td>
					<td class="qeTd">
						<input type="text" class="textTD textRight" name="netAmount[] isNumeric" >
					</td>-->
				</tr>
			</table>
	<div class="popBack hidden"></div>
<script>
	$(function(){
		$('.jvDELETE').click(function(){
			countDelete = $('.jvCheckbox:checked').length;
			if(countDelete > 0 ){
				$('.jvCheckbox:checked').each(function(){
					$(this).parent('td').parent('tr').remove();
				});
			} else {
				alert('Please check the item to delete.');
			}
		});
		$('.jsCheckAll').click(function(){
			if($(this).is(':checked')){
				$('.jvCheckbox').prop('checked',true);
				$('.jsnewTrHolder tr td input[type="checkbox"]').prop('checked', false);
			}else{
				$('.jvCheckbox').prop('checked',false);
			}	
			
		});
		$('.jvCheckbox').click(function(){
			$('.jsCheckAll').prop('checked',false);
			
		});
		$('.jsAddLine').click(function(){
			additionalTr = $('.jsnewTrHolder').html();
			$('.cnitableExp').append(additionalTr);
			$('.jsCheckAll').prop('checked',false);
			$('.incVat').change(function(){
				if($(this).is(':checked')){
					$(this).prev('input[type="hidden"]').val('yes');
				} else {
					$(this).prev('input[type="hidden"]').val('no');
				}
				computeNet(this);
			});
			
			$('.isNumeric').change(function(){
				computeNet(this);
			});
			newSupplier();
		});
		$('.isNumeric').change(function(){
			computeNet(this);
		});
		$('.quickExForm').submit(function(){
			returns = false;
			obj = '';
			$('input[name="qeCheck[]"]').each(function(){
				count = 0;
				if($(this).parent('td').parent('tr').find('select[name="vendor[]"]').val() != ''){
					count++;
				}
				if($(this).parent('td').parent('tr').find('select[name="account[]"]').val() != ''){
					count++;
				}
				if($(this).parent('td').parent('tr').find('input[name="amount[]"]').val() != ''){
					count++;
				}
				if(count != 3 && count != 0){
					returns = true;
					obj = this;
					return false;
				}
			});
			
			if(returns){
				alert('Unable to save! \nPlease complete line data.');
				$(obj).focus();
				return false;
			}
			
			confirmSubmit = confirm("Do you want to save this expense/s?");
			if(!confirmSubmit){
				return false;
			}
			// $('.loadings').removeClass('hidden');
			// $('.dsply').addClass('hidden');
			$('body').css('overflow', 'hidden');
			$('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
			$('.popBack').removeClass('hidden');
			
			$.post(URL + 'expenses/setQuickExpense', $('.quickExForm').serialize() )
				.done(function(returnData){
					if(returnData == 0){
						location = URL + "expenses";
					} else {
						alert(returnData);
					}
				})
				.fail(function(){
					location.reload;
				})
			return false;
		});
		$('.incVat').change(function(){
			if($(this).is(':checked')){
				$(this).prev('input[type="hidden"]').val('yes');
			} else {
				$(this).prev('input[type="hidden"]').val('no');
			}
			computeNet(this);
		});
		
		function computeNet(place){
			/* 
			amount = $(place).parent('td').parent('tr').find('td:nth-child(9) input').val();
			amount = getInt(amount);
			net = 0;
			if($(place).parent('td').parent('tr').find('td:nth-child(7) input[type="checkbox"]').is(':checked')){
				net = amount / 1.12;
			} else {
				net = amount;
			}
			$(place).parent('td').parent('tr').find('td:nth-child(10) input').val(roundFloat(net));
			// alert(net); */
		}
		
        function getInt(intVal) {
            if (intVal != '') {
                intVal = intVal.toString().replace(/,/g, '');
            }
            if (intVal[0] == '(') {
                intVal = intVal.toString().replace(/\(/g, '');
                intVal = intVal.toString().replace(/\)/g, '');
                intVal *= -1;
            }
            intVal = parseFloat(intVal);
            if (isNaN(intVal)) {
                return 0;
            }
            return intVal;
        }
		
        function roundFloat(intVal) {
            intVal = parseFloat(intVal);
            intVal = Number((intVal).toFixed(2));

            array = intVal.toString().split('.');

            if (array[1]) {
                if (array[1].length == 1) {
                    array[1] += '0';
                }
            } else {
                array[1] = '00';
            }

            intVal = array.join('.');

            hasComma = commafy(intVal);

            if (hasComma[0] == '-') {
                hasComma = hasComma.toString().replace(/-/g, '');
                hasComma = '(' + hasComma + ')';
            }
            return hasComma;
        }

        function commafy(num) {
            var n = num.toString().split(".");
            n[0] = n[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            return n.join(".");
        }
		newSupplier();
		function newSupplier(){
			$('select[name="vendor[]"]').change(function() {
				var place = this;
				$('.objSelected').removeClass('objSelected');
				$(this).addClass('objSelected');
				if ($(this).val() == 'addsupplier') {
					
					$.post(URL + 'expenses/newvendor', {returnurl: 'expense'})
						.done(function(returnData) {
							$('.popBack').html(returnData);
							$('.popBack').removeClass('hidden');
							$('.trig').val('ajaxLoad');
							$('.closeNewVendor1').click(function() {
								if (confirm('Are you sure you want to leave this page without saving?')) {
									$(place).val($(place).find('option').first().val());
									$(place).change();
									$('.popBack').addClass('hidden');
									$('.popBack').html('');
								}
							});
						})
						.fail(function() {
							alert('Connection Error!');
						});
				} else if ($(this).val() != '') {
					address = $('select[name="supplierId"] option:selected').attr('address');
					$('textarea[name="address"]').val(address);
				} else {
					 $('textarea[name="address"]').val('');
				}
			});
			
		}
		$('.dateTD').datepicker();
	});
</script>
<div class="scriptHolder hidden">

</div>
<?php
function selected($var1,$var2){
	if(strtolower($var1) == strtolower($var2)){
		return 'selected';
	}
}
function checked($var1,$var2){
	if(strtolower($var1) == strtolower($var2)){
		return 'checked';
	}
}