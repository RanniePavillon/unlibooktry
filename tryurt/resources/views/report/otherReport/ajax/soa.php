<?php
	$org = $this->org;
	$info = $this->info;
	// $report = $this->outstandingReceivable;
	// echo '<pre>';
	// print_R($report);
	// echo '</pre>';
?>
<style>
.tdTotal{
	background:#BE3323;
	color:#fff;
	font-size:12px!important;
	font-weight:bold;
}
.inpAddressSoa{
	width:310px;
	word-break: break-word;
	border: none;
	text-align: center;
	font-weight: bold;
	padding-bottom: 5px;
	font-family:Verdana;
	font-size:12px;
	margin-left:185px;
}
</style>
<?php
	$soa = $this->genClient_soa;
	
	
?>
<div class="outstanding_holder">
	<?php
		if($soa){
	?>
	<div class="reportHolderORsoa soaHolder">
		<div class="fromRegsoa">
			<div class="newSoa">
				<div class="nameText">
					<?= $org->orgName ?>
				</div>
				<div class="ORCompanyInfo inpAddressSoa" readonly="readonly">
					<?= ucwords($info->address) ?>
				</div>
				<div class="ORCompanyInfo infoNew">
					<?= $info->typeOfTax == 'vat' ? 'Vat' : 'Non-Vat'?> Reg. TIN: <?= $info->tinNum ?>
				</div>
				<br/>
				<div class="ORCompanyInfo infoNew">
					STATEMENT OF ACCOUNT
				</div>
				<div class="ORCompanyInfo infoNew">
					<?php
					if($_POST['clientId'] != '%%'){
						$clientName = DAOFactory::getTblClientDAO()->load($_POST['clientId']);
						echo 'For Client ' . $clientName->clientName;
					}else{
						echo 'For All Clients';
					}
					?>
				</div>
				<div class="ORCompanyInfo infoNew">
					<?php echo (isset($_POST['from']))? date('F d, Y',strtotime($_POST['from'])) : date('F d, Y') ?> - 
					<?php echo (isset($_POST['to']))? date('F d, Y',strtotime($_POST['to'])) : date('F d, Y')?>
				</div>
			</div>
		
		
		<table class="tblShowReportsoa">
			<tr>
				<th>
					Date
				</th>
				<th>
					Particulars
				</th>
				<th style="text-align:center;">
					Billing No.
				</th>
				<th>
					Customer Name
				</th>
				<th style="text-align:center!important;">
					Professional Fee
				</th>
				<th style="text-align:center!important;">
					VAT
				</th>
				<th class="hidden" style="text-align:center!important;">
					OPE
				</th>
				<th style="text-align:center!important;">
					Advance Payment
				</th>
				<th style="text-align:center!important;">
					Payment
				</th>
				<th style="text-align:center!important;">
					Date Collected
				</th>
				<th style="text-align:center!important;">
					Amount
				</th>
			</tr>
		<?php
		$totalProf = '';
		$totalVAT = '';
		$totalOPE = '';
		$totalAP = '';
		$totalP = '';
		$totalA = '';
		foreach($soa as $each){
			$totalProf = (float)$totalProf + (float)round($each['professional_fee']);
			$totalVAT = (float)$totalVAT + (float)round($each['vat_amount']);
			$totalOPE = (float)$totalOPE + (float)round($each['OPE']);
			$totalAP = (float)$totalAP + (float)round($each['advance_payment']);
			$totalP = (float)$totalP + (float)round($each['payment']);
			$totalA = (float)$totalA + (float)round($each['amount']);
		?>
		<tr>
			<td>
				<?= date('m/d/Y',strtotime($each['date_issued']))?>
			</td>
			<td>
				<?= $each['particular']?>
			</td>
			<td>
				<?= $each['invoice_number']?>
			</td>
			<td>
				<?= $each['client_name']?>
			</td>
			<td style="text-align:right!important;">
				<?= Controller::getFloat($each['professional_fee'])?>
			</td>
			<td style="text-align:right!important;">
				<?= Controller::getFloat($each['vat_amount'])?>
			</td>
			<td class="hidden" style="text-align:right!important;">
				<?= Controller::getFloat($each['OPE'])?>
			</td>
			<td style="text-align:right!important;">
				<?= Controller::getFloat($each['advance_payment'])?>
			</td>
			<td style="text-align:right!important;">
				<?= Controller::getFloat($each['payment'])?>
			</td>
			<td>
				<?= $each['date_received'] != '' ? date('m/d/Y',strtotime($each['date_received'])) : ''?>
			</td>
			<td style="text-align:right!important;">
				<?= Controller::getFloat($each['amount'])?>
			</td>
		</tr>
		<?php
		}
		?>
		<tr>
			<td colspan="4" style="text-align:left;" class="tdTotal">
				Total
			</td>
			<td style="text-align:right;" class="tdTotal">
				<?= Controller::getFloat($totalProf)?>
			</td>
			<td style="text-align:right;" class="tdTotal">
				<?= Controller::getFloat($totalVAT)?>
			</td>
			<td style="text-align:right;" class="hidden tdTotal">
				<?= Controller::getFloat($totalOPE)?>
			</td>
			<td style="text-align:right;" class="tdTotal">
				<?= Controller::getFloat($totalAP)?>
			</td>
			<td style="text-align:right;" class="tdTotal">
				<?= Controller::getFloat($totalP)?>
			</td>
			<td style="text-align:right;" class="tdTotal">
				
			</td>
			<td style="text-align:right;" class="tdTotal">
				<?= Controller::getFloat($totalA)?>
			</td>
		</tr>
		
		</table>
		
	</div>
	<?php
	}else{
	?>
		<div style="margin-top:80px;font-weight:bold;color: #183867;font-family: Verdana;font-size: 14px;text-align: center;">
			No Statement of Account.
		</div>
	<?php
	}
	?>
	</div>
</div>	