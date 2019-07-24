<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->summaryJournal;
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
				SUMMARY OF JOURNAL
			</div>
			<div class="ORCompanyInfo">
				<?php echo (isset($_POST['startdate']))? date('F d,Y',strtotime($_POST['startdate'])) : date('F d,Y') ?> - 
				<?php echo (isset($_POST['enddate']))? date('F d,Y',strtotime($_POST['enddate'])) : date('F d,Y')?>
			</div>
			
			<table class="tblCRBjournal">
			<?php
			if($report):
			?>
				<tr>
					<th style="text-align:left;" width="13%">Date</th>
					<th style="text-align:left;" width="13%">Journal No.</th>
					<th style="text-align:left;" width="20%">Particulars</th>
					<th style="text-align:left;" width="24%">Account Name</th>
					<th style="text-align:right!important;">Debit</th>
					<th style="text-align:right!important;">Credit</th>
				</tr>
				<?php
				$debitTotal = '';
				$creditTotal = '';
				if(isset($report) && !empty($report)){
					foreach($report as $each){
						$debitTotal = (float)$debitTotal + round((float)($each['debit']),2);
						$creditTotal = (float)$creditTotal + round((float)($each['credit']),2);
				?>
				<tr>
					<td style="text-align:left;"><?= date('m/d/Y',strtotime($each['trans_date']))?></td>
					<td><?= $each['journal_number']?></td>
					<td><?= $each['particulars']?></td>
					<td><?= $each['accont_name']?></td>
					<td style="text-align:right;"><?= $each['debit'] == 0 ? '-' : number_format($each['debit'],2)?></td>
					<td style="text-align:right;"><?= $each['credit'] == 0 ? '-' : number_format($each['credit'],2)?></td>
				</tr>
				<?php
					}
				}
				?>
				<tr>
					<th colspan="4" class="tdTotal">
					<b>Total</b>
					</th>
					<th style="text-align:right;" class="tdTotal">
						<?= $debitTotal == 0 ? '-' : Controller::getFloat($debitTotal);?>
					</th>
					<th style="text-align:right;" class="tdTotal">
						<?= $creditTotal == 0 ? '-' : Controller::getFloat($creditTotal);?>
					</th>
				</tr>
			</table>
			<?php else:?>		
				<div class="TC noJournal" style="margin-top:80px;">
					No Summary of Journal.
				</div>
			<?php
			endif;
			?>
		</div>
	</div>
</div>
