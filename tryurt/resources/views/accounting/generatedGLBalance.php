<?php
 $genGlBalance = $this->genGlBalance;
?>
<div>
	<div style="overflow:auto;height:530px;">
	<table id="subdiarytable">
		<thead>
			<tr>
				<th>Date Issued</th>
				<th>Type</th>
				<th>Reference No.</th>
				<th>Client Name</th>
				<th>Status</th>
				<th style="text-align:right">Amount</th>
			</tr>
		</thead>
		<tbody>
			<?php if ($genGlBalance) { ?>
				<?php
				$amount = 0;
				$total = 0;
				foreach ($genGlBalance as $item) {
					if($item['account_num'] == '1004-005' || $item['account_num'] == '1004-003' || $item['account_num'] == '1004-011' || $item['account_num'] == '1004-009' || 
								$item['account_num'] == '1004-013' || $item['account_num'] == '2000-001' || $item['account_num'] == '2000-002' || $item['account_num'] == '2000-006' || 
								$item['account_num'] == '2000-003' || $item['account_num'] == '2000-004 ' || $item['account_num'] == '2000-005' || $item['account_num'] == '2000-007 ' || 
								$item['account_num'] == '2000-008' || $item['account_num'] == '2000-009' || $item['account_num'] == '2000-010' || $item['account_num'] == '4000-001' || 
								$item['account_num'] == '4001-001' || $item['account_num'] == '4001-002' || $item['account_num'] == '4001-003' || $item['account_num'] == '4001-004' || 
								$item['type_of_transaction'] == 'income')
					{
						$amount = ($item['balance'] * -1);
					}else{
						$amount = ($item['balance']);
					}
					$total += $amount;
					?>
					<tr class="customer_row">
						<td class="fontalltd"><?= date('m/d/Y',strtotime($item['date'])); ?></td>
						<td class="fontalltd"><?= ucwords($item['type_of_transaction']); ?></td>
						<td class="fontalltd"><?= $item['unique_number']; ?></td>
						<td class="fontalltd"><?= $item['client_name']; ?></td>
						<td class="fontalltd"><?= ucwords($item['status']); ?></td>
						<td class="fontalltd" style="text-align:right"><?= Controller::getFloat($amount); ?></td>
					</tr>
				<?php } ?>
				<tr>
					<td style="padding-top:10px;"></td>
				</tr>
				<tr style="background-color: #25b5ef;">
					<th colspan="5" style="font-weight:bold;color:#fff;">TOTAL</th>
					<th colspan="1" style="font-weight:bold;color:#fff;text-align:right"><?= Controller::getFloat($total) ?></th>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	</div>
</div>