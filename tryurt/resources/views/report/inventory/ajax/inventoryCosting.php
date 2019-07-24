<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->genInventoryCosting;
?>
<style>
.tdTotal th{
	background-color: #BE3323 !important;
	font-weight: bold !important;
	text-align: left !important;
	color: #fff !important;
	font-size:12px !important;
}
.tdTotal2{
	background-color: #BE3323 !important;
	font-weight: bold!important;
	text-align: right!important;
	color: #fff!important;
	font-size:12px!important;
}
.inpAddressSPS{
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
<div class="salesPerService_holder">
	<div class="reportHolderOR">
		<div class="fromReg">
			<div class="nameText">
				<?= $org->orgName ?>
			</div>
			<div class="ORCompanyInfo inpAddressSPS">
				<?= ucwords($info->address) ?>
			</div>
			<br/>
			<div class="ORCompanyInfo">
				INVENTORY COSTING REPORT
			</div>
			<div class="ORCompanyInfo">
				<?php echo (isset($_POST['startdate']))? date('F d,Y',strtotime($_POST['startdate'])) : date('F d,Y') ?> - 
				<?php echo (isset($_POST['enddate']))? date('F d,Y',strtotime($_POST['enddate'])) : date('F d,Y')?>
			</div>
		

	<?php
		 if($report){ 
	?>
		<table class="tblmainsumlist">
			<tr>
				<th width="">Date</th>
				<th width="">Item No.</th>
				<th width="">Item Name</th>
				<th width="">Type</th>
				<th width="" style="text-align: center;">Qty</th>
				<th width="" style="text-align: right;">Unit Cost</th>
				<th width="" style="text-align: right;">Total Cost</th>
				<th width="" style="text-align: right;">Average Cost</th>
			</tr>
			<?php
				$qty = 0;
				$uc = 0;
				$tc = 0;
				$ac = 0;
				foreach($report as $each){
					$qty += $each['qty'];
					$uc += $each['unit_cost'];
					$tc += $each['total_cost'];
					$ac += $each['average_cost'];
					
			?>

					<tr class="">
						<td><?= date('m/d/Y', strtotime($each['date']))?></td>
						<td><?= $each['item_code']?></td>
						<td><?= $each['item_name']?></td>
						<td><?= $each['type']?></td>
						<td style="text-align: center;"><?= Controller::getFloat($each['qty']) ?></td>
						<td style="text-align: right;"><?= Controller::getFloat($each['unit_cost'])?></td>
						<td style="text-align: right;"><?= Controller::getFloat($each['total_cost'])?></td>
						<td style="text-align: right;"><?= Controller::getFloat($each['average_cost'])?></td>
					</tr>
			<?php
				}
			?>
			
					<tr class="tdTotal">
						<th></th>
						<th></th>
						<th></th>
						<th><b>Total</b></th>
						<th style="text-align: center;"><?= $qty?></th>
						<th style="text-align: right;"><?= Controller::getFloat($uc)?></th>
						<th style="text-align: right;"><?= Controller::getFloat($tc)?></th>
						<?php 
							if ($tc!= 0 || $qty !=0) {
								$division=$tc/$qty;
							}
							else{
								$division = 0;
							}
						 ?>
						<th style="text-align: right;"><?= Controller::getFloat($division)?></th>
					</tr>
		</table>
		<?php
			 } else {
				echo'<div style="margin-top:80px;color:#183867;font-weight:bold;font-family:Verdana;font-size:14px;text-align: center;">';
				echo 'NO INVENTORY COSTING';
				echo '</div>';
			} 
		?>
		</div>
	</div>
</div>