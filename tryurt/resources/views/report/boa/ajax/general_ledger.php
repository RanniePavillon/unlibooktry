<?php
	$org = $this->org;
	$info = $this->info;
	$genGlBalance = $this->genGeneralLedger;
?>
<style>

</style>
<div class="summartJournal_holder">
	<div class="reportHolderOR holderJournal">
		<div class="fromReg formJournalNew">
			<div class="nameText orgNameNew">
				<?= $org->orgName ?>
			</div>
			<div class="ORCompanyInfo inpAddressJournal">
				<?= ucwords($info->address) ?>
			</div>
			<div class="ORCompanyInfo">
				<?= $info->typeOfTax == 'vat' ? 'Vat' : 'Non-Vat'?> Reg. TIN: <?= $info->tinNum ?>
			</div>
			<br/>
			<div class="ORCompanyInfo">
				GENERAL LEDGER
			</div>
			<div class="ORCompanyInfo">
				<?php echo (isset($_POST['startdate']))? date('F d,Y',strtotime($_POST['startdate'])) : date('F d,Y') ?> - 
				<?php echo (isset($_POST['enddate']))? date('F d,Y',strtotime($_POST['enddate'])) : date('F d,Y')?>
			</div>
			
			<table class="tblCRBjournal">
			<?php
			if($genGlBalance):
			?>
				<tr>
					<th>Issued Date</th>
						<th>Type</th>
						<th>Reference No.</th>
						<th>Account Code</th>
						<th>Title</th>
						<th>Client Name</th>
						<th>Status</th>
						<th style="text-align:right;">Debit</th>
						<th style="text-align:right;">Credit</th>
						<th style="text-align:right;">Amount</th>
				</tr>
				<?php if ($genGlBalance) { 
					$amount = 0;
					$total = 0;
					$debit = 0;
					$credit = 0;
					
					foreach ($genGlBalance as $item) {
						/*if($item['account_num'] == '1004-005' || $item['account_num'] == '1004-003' || $item['account_num'] == '1004-011' || $item['account_num'] == '1004-009' || 
									$item['account_num'] == '1004-013' || $item['account_num'] == '2000-001' || $item['account_num'] == '2000-002' || $item['account_num'] == '2000-006' || 
									$item['account_num'] == '2000-003' || $item['account_num'] == '2000-004 ' || $item['account_num'] == '2000-005' || $item['account_num'] == '2000-007 ' || 
									$item['account_num'] == '2000-008' || $item['account_num'] == '2000-009' || $item['account_num'] == '2000-010' || $item['account_num'] == '4000-001' || 
									$item['account_num'] == '4001-001' || $item['account_num'] == '4001-002' || $item['account_num'] == '4001-003' || $item['account_num'] == '4001-004' || 
									$item['type_of_transaction'] == 'income')
						{
							$amount = ($item['balance'] * -1);
						}else{
							
						}*/
						$amount = ($item['balance']);
						$total += $amount;
						$debit += $item['debit'];
						$credit += $item['credit'];
				?>
				<tr>
					<td style="text-align:left;"><?= date('m/d/Y',strtotime($item['date'])); ?></td>
					<td><?= ucwords($item['type_of_transaction']); ?></td>
					<td><?= $item['unique_number']; ?></td>
					<td><?= $item['account_num']; ?></td>
					<td><?= $item['accont_name']; ?></td>
					<td><?= $item['client_name']; ?></td>
					<td><?= ucwords($item['status']); ?></td>
					<td style="text-align:right;"><?= Controller::getFloat($item['debit']); ?></td>
					<td style="text-align:right;"><?= Controller::getFloat($item['credit']); ?></td>
					<td style="text-align:right;"><?= Controller::getFloat($amount); ?></td>
				</tr>
				<?php } ?>
				<tr>
					<th colspan="7" class="tdTotal">
					<b>Total</b>
					</th>
					<th style="text-align:right;" class="tdTotal">
						<?= Controller::getFloat($debit) ?>
					</th>
					<th style="text-align:right;" class="tdTotal">
						<?= Controller::getFloat($credit) ?>
					</th>
					<th style="text-align:right;" class="tdTotal">
						<?= Controller::getFloat($total) ?>
					</th>
				</tr>
				<?php } ?>
			</table>
			<?php 
			else:
			?>		
				<div class="TC noJournal" style="margin-top:80px;">
					No General Ledger.
				</div>
			<?php
			endif;
			?>
		</div>
	</div>
</div>
