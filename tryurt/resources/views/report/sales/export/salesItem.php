<?php
	header('Content-type: application/excel');
	header('Content-Disposition: attachment; filename="sales_per_item.xls"');
?>
<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->getSalesPerItem;

?>
<style>
.tblShowReport th{
	border: 1px solid gray;
	font-size: 12px;
	font-weight: bold;
	background-color:#BE3323;
	padding: 6px;
	color: #fff;
	text-align: left;
	font-family: Verdana;
}
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
.salesPerService_holder{
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
</style>
<div class="salesPerService_holder">
	<div class="reportHolderOR ">
		<div class="fromReg exportHolder">
			<div class="nameText" style="font-weight:bold;">
				<?= $org->orgName ?>
			</div>
			<div class="ORCompanyInfo inpAddressSPS" style="font-weight:bold;">
				<?= ucwords($info->address) ?>
			</div>
			<div class="ORCompanyInfo" style="font-weight:bold;">
				<?= $info->typeOfTax == 'vat' ? 'Vat' : 'Non-Vat'?> Reg. TIN: <?= $info->tinNum ?>
			</div>
			<br/>
			<div class="ORCompanyInfo" style="font-weight:bold;">
				SALES PER ITEM
			</div>
			<div class="ORCompanyInfo" style="font-weight:bold;">
				<?php echo (isset($_POST['startdate']))? date('F d,Y',strtotime($_POST['startdate'])) : date('F d,Y') ?> - 
				<?php echo (isset($_POST['enddate']))? date('F d,Y',strtotime($_POST['enddate'])) : date('F d,Y')?>
			</div>
		
			<br>
	<?php
		 if($report){ 
	?>
		<table class="tblmainsumlist">
			<tr>
				<th width="75px" style="text-align: left;" class="reportTh">Date</th>
				<th width="80px" style="text-align: left;" class="reportTh">CI/SI No.</th>
				<!--<th width="50px" style="text-align:center;">Service Code</th>-->
				<th width="90px" style="text-align: left;" class="reportTh">Item No.</th>
				<th width="100px" style="text-align: left;" class="reportTh">Item Description</th>
				<th width="30px" style="text-align: center;" class="reportTh">Qty</th>
				<th width="80px" style="text-align: right;" class="reportTh">Amount</th>
			</tr>

			<?php
				$totalAmount = '';
				foreach($report as $item){
					$totalAmount = (float)$totalAmount + (float)$item['net_amount'];
			?>
					<tr class="">
						<td style="text-align: left;" class="reportTd"><?= date('m/d/Y',strtotime($item['date_sales'])) ?></td>
						<td style="text-align: left;" class="reportTd"><?= $item['sales_invoice_no'] ?></td>
						<td style="text-align: left;" class="reportTd"><?= $item['item_code'] ?></td>
						<td style="text-align: left;" class="reportTd"><?= $item['description'] ?></td>
						<td style="text-align: right;" class="reportTd"><?= Controller::getFloat($item['unit_price'])?></td>
						<td style="text-align: right;" class="reportTd"><?= Controller::getFloat($item['net_amount'])?></td>
					</tr>
			<?php
				}
			?>
			<tr class="">
				<th class="tdTotal" style="border:solid 1px #000;background-color: #BE3323 !important;color:#fff;font-weight:bold" colspan="5">Total Amount</th>
				<th class="tdTotal2 reportTd" colspan="1" style="text-align: right;border:solid 1px #000;background-color: #BE3323 !important;color:#fff;font-weight:bold"><?= Controller::getFloat($totalAmount)?></th>
			</tr>
		</table>
		<?php
			 } else {
				echo'<div style="margin-top:80px;color:#183867;font-weight:bold;font-family:Verdana;font-size:14px;text-align: center;">';
				echo 'NO SALES PER ITEM.';
				echo '</div>';
			} 
		?>
		</div>
	</div>
</div>