<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->cashReceiptsBook;
?>
<style>

</style>
<div class="cashReceipt_holder">
	<div class="reportHolderORcrb">
		<div class="fromReg crbForm">
			<div class="crbNew">
				<div class="nameText">
					<?= $org->orgName ?>
				</div>
				<div class="ORCompanyInfo inpAddressCrb" readonly="readonly">
					<?= ucwords($info->address) ?>
				</div>
				<div class="ORCompanyInfo">
					<?= $info->typeOfTax == 'vat' ? 'Vat' : 'Non-Vat'?> Reg. TIN: <?= $info->tinNum ?>
				</div>
				<br/>
				<div class="ORCompanyInfo">
					CASH RECEIPTS BOOK
				</div>
				<div class="ORCompanyInfo">
					<?php echo (isset($_POST['startdate']))? date('F d,Y',strtotime($_POST['startdate'])) : date('F d,Y') ?> - 
					<?php echo (isset($_POST['enddate']))? date('F d,Y',strtotime($_POST['enddate'])) : date('F d,Y')?>
				</div>
			</div>
			
			<table class="tblCRB tblCrbNew">
				<?php
				if($report):
				?>
				<!--<tr>
					<td colspan="10">
					</td>
				</tr>
				<tr>
					<td colspan="10">
					</td>
				</tr>-->
				<tr>
					<th width="10%">Date</th>
					<th width="11%">Ref No.</th>
					<th width="13%">Customer Name</th>
					<th width="12%">Particulars</th>
					<th width="10%">Cash on Hand</th>
					<th width="10%">Trade Receivable</th>
					<th width="10%">Output VAT</th>
					<th width="10%">Sales Discount</th>
					<th width="10%">Professional Service Income</th>
					<!--<th width="11%">Miscellaneous Income</th>-->
					<th width="10%">Balance</th>
				</tr>
				<?php
				$balance = '';
				$tempbal = '';
				$tr = '';
				$cohTotal = '';
				$trTotal = '';
				$ovTotal = '';
				$sdTotal = '';
				$psiTotal = '';
				$miTotal = '';
				$balanceTotal = '';
				if(isset($report) && !empty($report)){
					foreach($report as $each){
					
						$tempBal = ((round(floatval($each['output_vat']),2)) + (round(floatval($each['prof']),2))) - (round(floatval($each['disc']),2));
						$tr = (round(floatval($each['tr']),2)) + (round(floatval($each['ar']),2));
						$cohTotal = (float)$cohTotal + round((float)($each['tr']),2);
						$trTotal = (float)$trTotal + round((float)($each['ar']),2);
						$ovTotal = (float)$ovTotal + round((float)($each['output_vat']),2);
						$sdTotal = (float)$sdTotal + round((float)($each['disc']),2);
						$psiTotal = (float)$psiTotal + round((float)($each['prof']),2);
						$miTotal = (float)$miTotal + round((float)($each['mi']),2);
					
						if($tr == $tempBal || $tempBal == 0){
							$balance = '-';
						}else{
							$balance = Controller::getFloat($tempBal);
							$balanceTotal = (float)$balanceTotal + (float)$tempBal;
						}
				?>
					<tr>
						<td><?= date('m/d/Y',strtotime($each['trans_date']))?></td>
						<td><?= $each['invoice_number']?></td>
						<td><?= $each['client_name']?></td>
						<td><?= $each['particular']?></td>
						<td style="text-align:right"><?= Controller::getFloat($each['tr']) == 0 ? '-' : number_format($each['tr'],2)?></td>
						<td style="text-align:right"><?= Controller::getFloat($each['ar']) == 0 ? '-' : number_format($each['ar'],2)?></td>
						<td style="text-align:right"><?= Controller::getFloat($each['output_vat']) == 0 ? '-' : number_format($each['output_vat'],2)?></td>
						<td style="text-align:right"><?= Controller::getFloat($each['disc']) == 0 ? '-' : number_format($each['disc'],2)?></td>
						<td style="text-align:right"><?= Controller::getFloat($each['prof']) == 0 ? '-' : number_format($each['prof'],2)?></td>
						<!--<td style="text-align:right"><?= Controller::getFloat($each['mi']) == 0 ? '-' : number_format($each['mi'],2)?></td>-->
						<td style="text-align:right"><?= $balance?></td>
					</tr>
				<?php
					}
				}
				?>
				<tr>
					<td colspan="4" class="tdTotal">
						Total
					</td>
					<td style="text-align:right" class="tdTotal">
						<?= $cohTotal == 0 ? '-' : Controller::getFloat($cohTotal)?>
					</td>
					<td style="text-align:right" class="tdTotal">
						<?= $trTotal == 0 ? '-' : Controller::getFloat($trTotal)?>
					</td>
					<td style="text-align:right" class="tdTotal">
						<?= $ovTotal == 0 ? '-' : Controller::getFloat($ovTotal)?>
					</td>
					<td style="text-align:right" class="tdTotal">
						<?= $sdTotal == 0 ? '-' : Controller::getFloat($sdTotal)?>
					</td>
					<td style="text-align:right" class="tdTotal">
						<?= $psiTotal == 0 ? '-' : Controller::getFloat($psiTotal)?>
					</td>
					<!--<td style="text-align:right">
						<?= $miTotal == 0 ? '-' : Controller::getFloat($miTotal)?>
					</td>-->
					<td style="text-align:right" class="tdTotal">
						<b><?= $balanceTotal == 0 ? '-' : Controller::getFloat($balanceTotal)?></b>
					</td>
				</tr>
			</table>
			<?php else:?>		
				<div class="TC noReceipts" style="margin-top:80px;">
					No Cash Receipts Book.
				</div>
			<?php
			endif;
			?>
		</div>
	</div>
</div>
