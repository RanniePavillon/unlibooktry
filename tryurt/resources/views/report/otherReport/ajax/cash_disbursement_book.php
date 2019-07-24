<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->cashDisbursementBook;
?>
<style>
.inpAddressCdbNew {
    width: 310px;
    margin: auto;
    word-break: break-word;
    border: none;
    text-align: center;
    font-weight: bold;
    padding-bottom: 5px;
    font-family: Verdana;
    font-size: 12px;
    margin-left: 190px;
}

</style>
<div class="cashDisbrsement_holder">
	<div class="reportHolderORcdb">
		<div class="fromReg">
			<div class="formCdbNew">
				<div class="nameText">
					<?= $org->orgName ?>
				</div>
				<div class="ORCompanyInfo inpAddressCdbNew">
					<?= ucwords($info->address) ?>
				</div>
				<div class="ORCompanyInfo">
					<?= $info->typeOfTax == 'vat' ? 'Vat' : 'Non-Vat'?> Reg. TIN: <?= $info->tinNum ?>
				</div>
				<br/>
				<div class="ORCompanyInfo">
					CASH DISBURSEMENT BOOK
				</div>
				<div class="ORCompanyInfo">
					<?php echo (isset($_POST['from']))? date('F d,Y',strtotime($_POST['from'])) : date('F d,Y') ?> - 
					<?php echo (isset($_POST['to']))? date('F d,Y',strtotime($_POST['to'])) : date('F d,Y')?>
				</div>
			</div>
			
			<table class="tblCRB">
				<?php
				if($report):
				?>
				<!--<tr>
					<td colspan="9">
					</td>
				</tr>
				<tr>
					<td colspan="9">
					</td>
				</tr>-->
				<tr>
					<th style="text-align:left;">Date</th>
					<th>Vendor Name</th>
					<th>Ref No.</th>
					<th>Particulars</th>
					<th style="text-align:left;">Account Name</th>
					<th>Amount</th>
					<th>Input VAT</th>
					<th>Cash on Hand</th>
					<!--<th width="15%">Balance</th>-->
				</tr>
				<?php
				$balance = '';
				$tempbal = '';
				$tr = '';
				$totalAmount = '';
				$ivTotal = '';
				$cohTotal = '';
				$balanceTotal = '';
				if($this->cashDisbursementBook){
					foreach($this->cashDisbursementBook as $each){
						$tempBal = (round(floatval($each['amount']),2) + round(floatval($each['input_vat']),2));
						$tr = (round(floatval($each['coh']),2));
						$totalAmount = (float)$totalAmount + round((float)($each['amount']),2);
						$ivTotal = (float)$ivTotal + round((float)($each['input_vat']),2);
						$cohTotal = (float)$cohTotal + round((float)($each['coh']),2);
						
						if($tr == $tempBal || $tempBal == 0){
							$balance = '-';
						}else{
							$balance = Controller::getFloat($tempBal);
							$balanceTotal = (float)$balanceTotal + (float)$tempBal; 
						}
					
				?>
					<tr>
						<td>
							<?= date('m/d/Y',strtotime($each['trans_date'])) ?>
						</td>
						<td>
							<?= $each['name'] ?>
						</td>
						<td>
							<?= $each['reference_number'] ?>
						</td>
						<td>
							<?= $each['particulars'] ?>
						</td>
						<td>
							<?= $each['accont_name'] ?>
						</td>
						<td style="text-align:right">
							<?= ($each['amount'] == 0 ? '-' : number_format($each['amount'], 2))?>
						</td>
						<td style="text-align:right">
							<?= ($each['input_vat'] == 0 ? '-' : number_format($each['input_vat'],2))?>
						</td>
						<td style="text-align:right">
							<?= ($each['coh'] == 0 ? '-' : number_format($each['coh'],2)) ?>
						</td>
						<!--<td style="text-align:right">
							<?= $balance?>
						</td>-->
					</tr>
				<?php
					}
				}
				
				?>
				<tr>
					<td colspan="5" class="tdTotal">
					Total
					</td>
					<td style="text-align:right" class="tdTotal">
						<?= $totalAmount == 0 ? '-' : Controller::getFloat($totalAmount)?>
					</td>
					<td style="text-align:right" class="tdTotal">
						<?= $ivTotal == 0 ? '-' : Controller::getFloat($ivTotal)?>
					</td>
					<td style="text-align:right" class="tdTotal">
						<?= $cohTotal == 0 ? '-' : Controller::getFloat($cohTotal)?>
					</td>
					<!--
					<td style="text-align:right" class="tdTotal">
						<?= $balanceTotal == 0 ? '-' : Controller::getFloat($balanceTotal)?>
					</td>-->
				</tr>
			</table>
			<?php else:?>		
				<div class="TC noCashDisburse" style="margin-top:80px;">
					No Cash Disbursement Book.
				</div>
			<?php
			endif;
			?>
		</div>
	</div>
</div>