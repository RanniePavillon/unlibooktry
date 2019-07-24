<?php
	header('Content-type: application/excel');
	header('Content-Disposition: attachment; filename="inventory_costing.xls"');
?>
<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->genInventoryCosting;
?>
<style>
.tdTotal{
	background-color:#BE3323;
	color:#fff;
	font-size:12px!important;
	font-weight:bold;
}
.inpAddress{
	width: 310px;
	word-break: break-word;
	border: none;
	text-align: center;
	font-weight: bold;
	padding-bottom: 5px;
	font-family:Verdana;
	font-size:12px;
	margin-left:185px;
}
.reportHolderOR{
	width: 50% !important;
	text-align:center !important;
	padding-left:30px !important;
}
.tblmainsumlist{
	width:50% !important;
	text-align:center !important;
}
.exportHolder{
	font-family: Verdana !important;
	margin-left: 15px !important;
	text-align: center !important;
	height:auto!important !important;
	margin-top:20px !important;
	font-size:12px !important;
	font-weight:bold !important;
}
.orgName{
	font-size:14px !important;
	font-family:Verdana !important;
	text-transform: uppercase !important;
	font-weight: bold !important;
}
.reportTh{
	background-color: #BE3323 !important;
	color: white !important;
	padding: 5px !important;
	height: 27px !important;
	border: solid 1px #000 !important;
}
.reportTd{
	color: #000 !important;
	padding: 5px !important;
	height: 27px !important;
	border: solid 1px #000 !important;
}
.titleUp{
	font-weight:bold !important;
}
.tdTotal{
	border: solid 1px #000 !important;
}
.tdTotal2{
	background-color:#BE3323;
	color:#fff;
	font-size:12px!important;
	font-weight:bold;
}
</style>

<div class="salesPerService_holder">
	<div class="reportHolderOR">
		<div class="fromReg exportHolder" >
			<div class="nameText" style="font-weight:bold;">
				<?= $org->orgName ?>
			</div>
			<div class="ORCompanyInfo inpAddressSPS" style="font-weight:bold;">
				<?= ucwords($info->address) ?>
			</div>
			<br/>
			<div class="ORCompanyInfo" style="font-weight:bold;">
				INVENTORY COSTING REPORT
			</div>
			<div class="ORCompanyInfo" style="font-weight:bold;">
				<?php echo (isset($_POST['startdate']))? date('F d,Y',strtotime($_POST['startdate'])) : date('F d,Y') ?> - 
				<?php echo (isset($_POST['enddate']))? date('F d,Y',strtotime($_POST['enddate'])) : date('F d,Y')?>
			</div>
		

	<?php
		 if($report){ 
	?>
		<table class="tblmainsumlist">
			<tr>
				<th style="text-align: left;" class="reportTh">Date</th>
				<th style="text-align: left;" class="reportTh">Item No.</th>
				<th style="text-align: left;" class="reportTh">Item Name</th>
				<th style="text-align: left;" class="reportTh">Type</th>
				<th style="text-align: center;" class="reportTh">Qty</th>
				<th style="text-align: right;" class="reportTh">Unit Cost</th>
				<th style="text-align: right;" class="reportTh">Total Cost</th>
				<th style="text-align: right;" class="reportTh">Average Cost</th>
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
					<tr>
						<td style="text-align: left;" class="reportTd"><?= date('m/d/Y', strtotime($each['date']))?></td>
						<td style="text-align: left;" class="reportTd"><?= $each['item_code']?></td>
						<td style="text-align: left;" class="reportTd"><?= $each['item_name']?></td>
						<td style="text-align: left;" class="reportTd"><?= $each['type']?></td>
						<td style="text-align: center;" class="reportTd"><?= $each['qty']?></td>
						<td style="text-align: right;" class="reportTd"><?= Controller::getFloat($each['unit_cost'])?></td>
						<td style="text-align: right;" class="reportTd"><?= Controller::getFloat($each['total_cost'])?></td>
						<td style="text-align: right;" class="reportTd"><?= Controller::getFloat($each['average_cost'])?></td>
					</tr>
			<?php
				}
			?>
			
					<tr>
						<th class="tdTotal2" colspan="4"><b>Total</b></th>
						<th class="tdTotal2"><?= $qty?></th>
						<th class="tdTotal2"><?= Controller::getFloat($uc)?></th>
						<th class="tdTotal2"><?= Controller::getFloat($tc)?></th>
						<th class="tdTotal2"><?= Controller::getFloat($ac)?></th>
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