<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->summaryBilling;
?>
<style>

</style>
<div class="summartBilling_holder">
	<div class="reportHolderORbilling">
		<div class="fromReg">
			<div class="newSumBilling">
				<div class="nameText">
					<?= $org->orgName ?>
				</div>
				<div class="ORCompanyInfo inpAddressSumBill">
					<?= ucwords($info->address) ?>
				</div>
				<div class="ORCompanyInfo">
					<?= $info->typeOfTax == 'vat' ? 'Vat' : 'Non-Vat'?> Reg. TIN: <?= $info->tinNum ?>
				</div>
				<br/>
				<div class="ORCompanyInfo">
					SUMMARY OF BILLING
				</div>
				<div class="ORCompanyInfo">
					<?php echo (isset($_POST['startdate']))? date('F d,Y',strtotime($_POST['startdate'])) : date('F d,Y') ?> - 
					<?php echo (isset($_POST['enddate']))? date('F d,Y',strtotime($_POST['enddate'])) : date('F d,Y')?>
				</div>
			</div>
			
			<table class="tblCRB tblsummBilling">
				<?php
				if($report):
				?>
				<tr>
					<th width="9%">Date</th>
					<th width="9%">Billing No.</th>
					<th width="15%">Customer Name</th>
					<th width="18%">Particulars</th>
					<th width="9%">Trade Receivable</th>
					<th width="9%">Output VAT</th>
					<th width="9%">Service Discount</th>
					<th width="9%">Professional Service Income</th>
					<th width="9%">Balance</th>
				</tr>
				<?php
				$balance = '';
				$tempbal = '';
				$tr = '';
				$trTotal = '';
				$OVTotal = '';
				$sdTotal = '';
				$psiTotal = '';
				$balanceTotal = '';
				if(isset($report) && !empty($report)){
					foreach($report as $each){
						$tempBal = (round(floatval($each['output_vat']),2) + round(floatval($each['prof']),2)) - (round(floatval($each['disc']),2));
						$tr = (float)round(($each['tr']),2);
						$trTotal = (float)$trTotal + (float)round(floatval($each['tr']),2);
						$OVTotal = (float)$OVTotal + (float)round(floatval($each['output_vat']),2);
						$sdTotal = (float)$sdTotal + (float)round(floatval($each['disc']),2);
						$psiTotal = (float)$psiTotal + (float)round(floatval($each['prof']),2);
						
						
						if($tr == $tempBal){
							$balance = '-';
						}else{
							$balance = $tempBal;
							$balanceTotal += $balance ;
						}
				?>		
					<tr>
						<td><?= date('m/d/Y',strtotime($each['trans_date']))?></td>
						<td><?= $each['billing_no']?></td>
						<td><?= $each['client_name']?></td>
						<td><?= $each['particular']?></td>
						<td class="textRight"><?= Controller::getFloat($each['tr']) == 0 ? '-' : number_format($each['tr'],2)?></td>
						<td class="textRight"><?= Controller::getFloat($each['output_vat']) == 0 ? '-' : number_format($each['output_vat'],2)?></td>
						<td class="textRight"><?= Controller::getFloat($each['disc']) == 0 ? '-' : number_format($each['disc'],2)?></td>
						<td class="textRight"><?= Controller::getFloat($each['prof']) == 0 ? '-' : number_format($each['prof'],2)?></td>
						<td class="textRight"><?= $balance?></td>
					</tr>
				<?php
					}
				}
				?>
					<tr>
						<th colspan="4" class="tdTotal">
							Total
						</th>
						<th class="textRight tdTotal">
							<?= $trTotal == 0 ? '-' : Controller::getFloat($trTotal) ?>
						</th>
						<th class="textRight tdTotal">
							<?= $OVTotal == 0 ? '-' : Controller::getFloat($OVTotal) ?>
						</th>
						<th class="textRight tdTotal">
							<?= $sdTotal == 0 ? '-' : Controller::getFloat($sdTotal) ?>
						</th>
						<th class="textRight tdTotal">
							<?= $psiTotal == 0 ? '-' : Controller::getFloat($psiTotal) ?>
						</th>
						<th class="textRight tdTotal">
							<?= $balanceTotal == 0 ? '-' : Controller::getFloat($balanceTotal) ?>
						</th>
					</tr>
			</table>
			<?php else:?>		
				<div class="TC noBilling" style="margin-top:80px;">
					No Summary of Billing.
				</div>
			<?php
			endif;
			?>
		</div>
	</div>
</div>