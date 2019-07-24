<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->report;
	
	// print_r($report);
?>
<style>

</style>
<div class="summartBilling_holder">
	<?php
	if($report){
	?>
	<div class="reportHolderOR">
		<div class="fromReg">
			<div class="nameText">
				<?= $org->orgName ?>
			</div>
			<div class="ORCompanyInfo inpAddress" readonly="readonly">
				<?= ucwords($info->address) ?>
			</div>
			<div class="ORCompanyInfo">
				VAT Reg. TIN: <?= $info->tinNum ?>
			</div>
			<br/>
			<div class="ORCompanyInfo">
				Monitoring of Filed and Unfiled Tax Returns
			</div>
			<table class="tblCRB">
			<tr>
				<th>Tax Return</th>
				<th>Final Form</th>
				<th>Submitted</th>
			</tr>
			<?php
			if(isset($report) && !empty($report)){
				foreach($report as $each){
			?>
					<tr>
						<td class="textCenter"><?= $each['itr_code']?></td>
						<td class="textCenter"><?= ucwords($each['final'])?></td>
						<td class="textCenter"><?= ucwords($each['submitted'])?></td>
					</tr>
			<?php
				}
			}
			?>
		</table>
			
		</div>
	</div>
	<?php
	}else{
	?>
		<div class="TC" style="margin-top:80px;font-family: Verdana;font-size:14px;color:#c51400;text-align:center;font-weight:bold;" >
			No Monitoring of Filed and Unfiled Tax Returns.
		</div>
	<?php	
	}
	?>
</div>