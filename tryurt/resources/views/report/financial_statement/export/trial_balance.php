<?php
	header('Content-type: application/excel');
	header('Content-Disposition: attachment; filename="trial_balance.xls"');
	$data = $this->getTrialBalance;
?>
<style>
	.reportHolderOR{
		width: 50%;
		text-align:center;
	}
	.tb_table_holder{
		width:50%;
		text-align:center;
	}
	.hidden{
		display:none !important;
	}
	.tb_table_holder tr th{
		background:#BE3323 !important;
		color:#fff;
		padding:6px;
	}
</style>
<?php
	$monthNum  = $_GET['month'];
	$dateObj   = DateTime::createFromFormat('!m', $monthNum);
	$monthName = $dateObj->format('F'); // March
	$type = $_GET['type'];
	if($_GET['type'] == 'annual'){
		$monthName = $_GET['year'];
	} else {
		$monthName = $monthName .' '.$_GET['year'];
	}
	
	$prevYear = $year = $_GET['year'];
	$prevMonth = $month = $type == 'monthly' ? $_GET['month'] : '%%';
	
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


<div class="reportHolderOR">
	<div style="font-family: verdana;width:695px;margin-left: 15;text-align: center;height:auto!important;">
		<div style="font-size: 14px;text-transform: uppercase;font-weight: bold;letter-spacing: 1;">
			<?= $org->orgName ?>
		</div>
		<div style="letter-spacing:1;font-size: 13px;font-weight: bold;">
			<?= $info->address ?>
		</div>
		<div style="letter-spacing:1;font-size: 13px;font-weight: bold;">
			<?= $info->typeOfTax == 'vat' ? 'Vat' : 'Non-Vat'?> Reg. TIN: <?= $info->tinNum ?>
		</div>
		<div class="ORCompanyInfo">As of <?= $monthName;?></div>
		<br>
		<div style="letter-spacing:1;font-size: 13px;font-weight: bold;">
			TRIAL BALANCE
		</div>
		<!--<div class="ORCompanyInfo">
			<?php echo (isset($_POST['startdate']))? date('F d,Y',strtotime($_POST['startdate'])) : date('F d,Y') ?> - 
			<?php echo (isset($_POST['enddate']))? date('F d,Y',strtotime($_POST['enddate'])) : date('F d,Y')?>
		</div>-->
<?php
	
?>
		<table style="font-family: Verdana;border-collapse: collapse;border: 1px solid #000;font-size: 12px;margin-top: 20px;margin-left: 20px;">
			<thead>
				<th style="padding: 5px 10px; border: 1px solid #000;color:#fff;padding:6px;background:#BE3323;">
					Account Code
				</th>
				<th style="padding: 5px 10px; border: 1px solid #000;color:#fff;padding:6px;background:#BE3323;">
					Account Name
				</th>
				<th style="padding: 5px 10px; border: 1px solid #000;color:#fff;padding:6px;background:#BE3323;">
					As of : <br/>
					<?= $prevDate ?>
				</th>
				<th style="padding: 5px 10px; border: 1px solid #000;color:#fff;padding:6px;background:#BE3323;">
					Debit
				</th>
				<th style="padding: 5px 10px; border: 1px solid #000;padding:6px;background:#BE3323;color:#fff;">
					Credit
				</th>
				<th style="padding: 5px 10px; border: 1px solid #000;color:#fff;padding:6px;background:#BE3323;">
					As of: </br>
					<?= $monthName ?>
				</th>
				<!--<th class="hidden" style="padding: 5px 10px; border: 1px solid #000;background:#183867;color:#fff;padding:6px;">
					For : </br>
					<?= $monthName ?>
				</th>-->
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
				<td colspan="7" style="background: #aaa;padding: 10px !important;font-size: 15px !important;font-weight: bold; text-align: left !important;">
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
				
				$mySub = $result = htmlentities(utf8_encode($each['account_num'])); //mb_substr($each['account_num'], 0, 4);
				
				if($subCategory != $mySub){
					$subCategory = $mySub;
		?>
			<!--<tr>
				<td colspan="7" style="text-align: left !important;background: #ddd;padding-left: 25px !important;">
					<?= htmlentities(utf8_encode($each['accont_name'])) ?>
				</td>
			</tr>-->
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
						<td style="font-size: 12px;padding: 5px 10px;border: 1px solid #999;">
							<?= $each['account_num'] ?>
						</td>
						<td style="font-size: 12px;padding: 5px 10px;border: 1px solid #999;">
							<?= htmlentities(utf8_encode($each['accont_name'])) ?>
						</td>
						<td style="text-align: right; font-size: 12px;padding: 5px 10px;border: 1px solid #999;">
							<?= $each['prev_balance'] != 0 ? Controller::getFloat($each['prev_balance']) : '-' ?>
						</td>
						<td style="text-align: right; font-size: 12px;padding: 5px 10px;border: 1px solid #999;">
							<?= $each['debit'] != 0 ? Controller::getFloat($each['debit']) : '-' ?>
						</td>
						<td style="text-align: right;font-size: 12px;padding: 5px 10px;border: 1px solid #999;">
							<?= $each['credit'] != 0 ? Controller::getFloat($each['credit']) : '-' ?>
						</td>
						<td style="text-align: right;font-size: 12px;padding: 5px 10px;border: 1px solid #999;">
							<?= $asOf != 0 ? Controller::getFloat($asOf) : '-' ?>
						</td>
						<!--<td class="hidden" style="text-align: right;font-size: 12px;padding: 5px 10px;border: 1px solid #999;">
							<?= $each['balance'] != 0 ? Controller::getFloat($each['balance']) : '-' ?>
						</td>-->
				<?php
					}elseif($each['sub_account'] != ''){	
				?>
						<td style="font-size: 12px;padding: 5px 10px;border: 1px solid #999;">
							<?= $each['account_num'] ?>
						</td>
						<td style="font-size: 12px;padding: 5px 10px;border: 1px solid #999;">
							<?= htmlentities(utf8_encode($each['accont_name'])) ?>
						</td>
						<td style="text-align: right; font-size: 12px;padding: 5px 10px;border: 1px solid #999;">
							<?= $each['prev_balance'] != 0 ? Controller::getFloat($each['prev_balance']) : '-' ?>
						</td>
						<td style="text-align: right; font-size: 12px;padding: 5px 10px;border: 1px solid #999;">
							<?= $each['debit'] != 0 ? Controller::getFloat($each['debit']) : '-' ?>
						</td>
						<td style="text-align: right;font-size: 12px;padding: 5px 10px;border: 1px solid #999;">
							<?= $each['credit'] != 0 ? Controller::getFloat($each['credit']) : '-' ?>
						</td>
						<td style="text-align: right;font-size: 12px;padding: 5px 10px;border: 1px solid #999;">
							<?= $asOf != 0 ? Controller::getFloat($asOf) : '-' ?>
						</td>
						<!--<td class="hidden" style="text-align: right;font-size: 12px;padding: 5px 10px;border: 1px solid #999;">
							<?= $each['balance'] != 0 ? number_format($each['balance'] < 0 ? $each['balance'] *-1 : $asOf, 2) : '-' ?>
						</td>-->
				<?php
					}
				?>
			</tr>
		<?php
			}
		?>
			</tbody>
			<thead>
				<th colspan="2" style="padding: 5px 10px; border: 1px solid #000;;color:#fff;padding:6px;font-weight:bold;background:#BE3323;">Total : </th>
				<th style="text-align:right;padding: 5px 10px; border: 1px solid #000;font-weight:bold;color:#fff;padding:6px;background:#BE3323;"><?= Controller::getFloat($totalprev_balance) ?></th>
				<th style="padding: 5px 10px; border: 1px solid #000;color:#fff;padding:6px;font-weight:bold;background:#BE3323;"><?= Controller::getFloat($totalDebit) ?></th>
				<th style="padding: 5px 10px; border: 1px solid #000;color:#fff;padding:6px;font-weight:bold;background:#BE3323;"><?= Controller::getFloat($totalCredit) ?></th>
				<th style="text-align:right;padding: 5px 10px; border: 1px solid #000;color:#fff;padding:6px;font-weight:bold;background:#BE3323;"><?= Controller::getFloat($total_asOf) ?></th>
				<!--<th class="hidden" style="text-align:right;padding: 5px 10px; border: 1px solid #000;background:#183867;color:#fff;padding:6px;"><?= Controller::getFloat($totalBalance) ?></th>-->
			</thead>
		</table>
	</div>
</div>