<?php
	$data = $this->getTrialBalance;
?>
<style>
	.category{
		background: #aaa;
		padding: 10px !important;
		font-size: 12px !important;
		font-weight: bold;
	}
	.subCategory{
		background: #ddd;
		padding-left: 25px !important;
	}
	.tl{
		text-align: left !important;
	}
	.tr{
		text-align: right;
	}
	.tb_table_holder{
		font-family: Verdana;
		border-collapse: collapse;
		border: 1px solid #000;
		font-size: 12px;
		margin-top: 20px;
		width:100%;
	}
	.tb_table_holder tr th{
		padding: 5px 10px;
		border: 1px solid gray;
		background:#c51400;
		color:#fff;
		padding:6px;
	}
	.tb_table_holder tbody tr td{
		font-size:11px;
		padding: 5px 10px;
		border: 1px solid #999;
	}
	.tb_table_holder tbody tr:HOVER{
		background: #ddd;
		border: 1px solid #fff;
	}
	.tblHolder{
		width: 720px;
		height: 517px;
		box-shadow: 2px 2px 15px #000;
		margin-top: 75px;
		margin-left: 15px;
		overflow: scroll;
		overflow-x: hidden;
		padding-bottom: 20px;
	}
	.tbScroll{
		width: 715px;
		height: 500px;
	}
	.inpAddress{
		width: 227px;
		height: 40px;
		word-break: break-word;
		border: none;
		text-align: center;
		font-weight: bold;
		padding-bottom: 5px;
	}
</style>
<?php
	$monthNum  = $_POST['month'];
	$dateObj   = DateTime::createFromFormat('!m', $monthNum);
	$monthName = $dateObj->format('F'); // March
	$type = $_POST['type'];
	if($_POST['type'] == 'annual'){
		$monthName = $_POST['year'];
	} else {
		$monthName = $monthName .' '.$_POST['year'];
	}
	
	$prevYear = $year = $_POST['year'];
	$prevMonth = $month = $type == 'monthly' ? $_POST['month'] : '%%';
	
	if($prevMonth == '1' || $prevMonth == '%%'){
		$prevMonth = '12';
		$prevYear = $year - 1;
	} else {
		$prevMonth = $prevMonth - 1;
	}
	$day = date('Y-m-d',strtotime($prevYear . '-'.$prevMonth.'-01'));
	$prevDate = date('Y-m-t',strtotime($day));
	
	$prevDate = date('F, Y',strtotime($prevDate));
	
	$org = $this->org;
	$info = $this->info;
?>

<div class="trialBalance_holder">
<div class="reportHolderOR">
		<div class="fromReg">
			<div class="nameText">
				<?= $org->orgName ?>
			</div>
			<div class="ORCompanyInfo">
				<input type="text" class="inpAddress" value="<?= ucwords($info->address) ?>" readonly="readonly"/>
			</div>
			<div class="ORCompanyInfo">
				<?= $info->typeOfTax == 'vat' ? 'Vat' : 'Non-Vat'?> Reg. TIN: <?= $info->tinNum ?>
			</div>
			<div class="ORCompanyInfo">As of <?= $monthName;?></div>
			<br/>
			<div class="ORCompanyInfo">
				TRIAL BALANCE
			</div>
			<!--<div class="ORCompanyInfo">
				<?php echo (isset($_POST['startdate']))? date('F d,Y',strtotime($_POST['startdate'])) : date('F d,Y') ?> - 
				<?php echo (isset($_POST['enddate']))? date('F d,Y',strtotime($_POST['enddate'])) : date('F d,Y')?>
			</div>-->
	<?php
		
	?>
			<table class="tb_table_holder">
				<thead>
					<th style="min-width:80px !important" colspan="2">Account Code</th>
					<th>Account Name</th>
					<th>
						As of : <br/>
						<?= $prevDate ?>
					</th>
					<th>Debit</th>
					<th>Credit</th>
					<th>
						As of: </br>
						<?= $monthName ?>
					</th>
					<th class="hidden">
						For : </br>
						<?= $monthName ?>
					</th>
				</thead>
				<tbody>
			<?php
				$totalCredit = 0;
				$totalDebit = 0;
				$totalBalance = 0;
				$category = '';
				$subCategory = '';
				$totalprev_balance = 0;
				$total_asOf = 0;
				$incomeTrigger = false;
				foreach($data as $var=>$each){
					if($category != $each['account_type']){
						$category = $each['account_type'];
						
			?>
				<!--<tr>
					<td colspan="7" class="tl category">
						<?= ucfirst($each['account_type']) ?>
					</td>
				</tr>-->
			<?php
					}
					$asOf = $each['balance'] + $each['prev_balance'];
					
					$totalCredit += $each['credit'];
					$totalDebit += $each['debit'];
					
					
					$total_asOf += $asOf;
					$totalprev_balance += ($each['prev_balance']);
					
					$mySub = $result = substr($each['account_num'], 0, 4);
					
					if($subCategory != $mySub){
						$subCategory = $mySub;
			?>
				

			<?php
					}
					
					if(strtolower($category) == 'income' || $category == 'expense'){
						// $balance = $each['balance'];
					} else {
						$each['balance'] = $asOf;
					}
					$totalBalance += $each['balance'];
			?>
				<tr>
					<?php
					if($each['sub_account'] == ''){
					?>
						<td colspan="2" style="text-align:left;"><?= $each['account_num'] ?></td>
						
						<td width="25%"><?= $each['accont_name'] ?></td>
						<td class="tr"><?= $each['prev_balance'] != 0 ? Controller::getFloat($each['prev_balance']) : '-' ?></td>
						<td class="tr"><?= $each['debit'] != 0 ? Controller::getFloat($each['debit']) : '-' ?></td>
						<td class="tr"><?= $each['credit'] != 0 ? Controller::getFloat($each['credit']) : '-' ?></td>
						<td class="tr"><?= $asOf != 0 ? Controller::getFloat($asOf) : '-' ?></td>
						<td class="tr hidden"><?= $each['balance'] != 0 ? Controller::getFloat($each['balance']) : '-' ?></td>
					<?php
					}elseif($each['sub_account'] != ''){	
					?>
						<td  colspan="2" style="text-align:right;"><?= $each['account_num'] ?></td>
						<td width="25%"><?= $each['accont_name'] ?></td>
						<td class="tr"><?= $each['prev_balance'] != 0 ? Controller::getFloat($each['prev_balance']) : '-' ?></td>
						<td class="tr"><?= $each['debit'] != 0 ? Controller::getFloat($each['debit']) : '-' ?></td>
						<td class="tr"><?= $each['credit'] != 0 ? Controller::getFloat($each['credit']) : '-' ?></td>
						<!-- <td class="tr"><?= $asOf != 0 ? number_format($asOf < 0 ? $asOf *-1 : $asOf, 2) : '-' ?></td> -->
						<td class="tr"><?= $asOf != 0 ? Controller::getFloat($asOf) : '-' ?></td>
						<td class="tr hidden"><?= $each['balance'] != 0 ? number_format($each['balance'] < 0 ? $each['balance'] *-1 : $asOf, 2) : '-' ?></td>
					<?php
					}
					?>
				</tr>
			<?php
				}
			?>
				</tbody>
				<thead>
					<th colspan="3">Total : </th>
					<th style="text-align:right;"><?= Controller::getFloat($totalprev_balance) ?></th>
					<th><?= Controller::getFloat($totalDebit) ?></th>
					<th><?= Controller::getFloat($totalCredit) ?></th>
					<th style="text-align:right;"><?= Controller::getFloat($total_asOf) ?></th>
					<th class="hidden" style="text-align:right;"><?= Controller::getFloat($totalBalance) ?></th>
				</thead>
			</table>
			<?php
				
			?>
		</div>
</div>
</div>