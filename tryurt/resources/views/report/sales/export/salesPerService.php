<?php
	header('Content-type: application/excel');
	header('Content-Disposition: attachment; filename="sales_per_service.xls"');
?>
<?php
	$org = $this->org;
	$info = $this->info;
	$salesview = $this->salesView;//TblInvoiceLinesMySqlExtDAO::gettaskreport();
	// echo '<pre>';
	// print_r($salesview);
	// echo '</pre>';
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
</style>
<div class="reportHolderOR">
	<div class="exportHolder exportHolder">
		<div style="font-weight:bold;">
			<?= $org->orgName ?>
		</div>
		<div style="font-weight:bold;">
			<?= $info->address ?>
		</div>
		<div style="font-weight:bold;">
			<?= $info->typeOfTax == 'vat' ? 'Vat' : 'Non-Vat'?> Reg. TIN: <?= $info->tinNum ?>
		</div>
		<br/>
		<div style="font-weight:bold;">
			SALES PER SERVICE
		</div>
		<div style="font-weight:bold;">
			<?php echo (isset($_GET['from']))? date('F d,Y',strtotime($_GET['from'])) : date('F d,Y') ?> - 
			<?php echo (isset($_GET['to']))? date('F d,Y',strtotime($_GET['to'])) : date('F d,Y')?>
		</div>
	
	<table class="tblmainsumlist" style="font-size: 12px;font-family: Verdana;color: black;border-collapse: collapse;">
		<?php
	if($salesview){
	?>
		<tr>
			<td colspan="7">
			</td>
		</tr>
		<tr>
			<td colspan="7">
			</td>
		</tr>
		<tr>
			<th width="75px" style="text-align: left;" class="reportTh">Date</th>
			<th width="80px" style="text-align: left;" class="reportTh">Billing No.</th>
			<th width="50px" style="text-align: left;" class="reportTh">Service Item</th>
			<th width="141px" style="text-align: left;background-color: #BE3323;color: white;padding: 6px;height: 27px;border: 1px solid #000;">Service Description</th>
			<th width="30px" style="text-align: center;background-color: #BE3323;color: white;padding: 6px;height: 27px;border: 1px solid #000;">Qty</th>
			<th width="80px" style="text-align: right;background-color: #BE3323;color: white;padding: 6px;height: 27px;border: 1px solid #000;">Rate</th>
			<th width="125px" style="text-align: right;background-color: #BE3323;color: white;padding: 6px;height: 27px;border: 1px solid #000;">Amount</th>
		</tr>
		<?php

		
			// $quantitytotal = 0;  
			$totalunitcost = 0;
			$nettotal = 0;
			$amount = 0;
			
			if (count($salesview) > 0) {
				foreach ($salesview as $item) {
			?>
		<tr class="">
			<td style="text-align:left;color:black;padding:5px;height:27px;border:1px solid #000;"><?php echo $item['trans_date'] ?></td>
			<td style="text-align:left;color:black;padding:5px;height:27px;border:1px solid #000;"><?php echo $item['invoice_number'] ?></td>
			<!--<td style="text-align:center;color:black;padding:5px;height:27px;border:1px solid #000;"><?php echo $item['task_code'] ?></td>-->
			<td style="text-align:left;color:black;padding:5px;height:27px;border:1px solid #000;"><?php echo $item['service_item'] ?></td>
			<td style="text-align:left;color:black;padding:5px;height:27px;border:1px solid #000;"><?php echo $item['particular'] ?></td>
			<td style="text-align:center;color:black;padding:5px;height:27px;border:1px solid #000;"><?php echo $item['hour'] ?></td>
			<td style="text-align:right;color:black;padding:5px;height:27px;border:1px solid #000;"><?php echo number_format((float) $item['net_amount'], 2) ?></td>
			<?php
			$amount = ($item['hour'] * $item['net_amount']);
			?>
			<td class="isNumeric" style="text-align:right;color:black;padding:5px;height:27px;border:1px solid #000;">
				<?php echo number_format((float) $amount,2) ?>
			</td>
		</tr>
		 <?php
			   // $quantitytotal += $item['rate_per_hour'];
				 $totalunitcost += $item['hour'];
				 $nettotal += $item['net_amount'];
				 
			}
		}
		
		?>
		<tr class="tdTotal">
			<td style="border:1px solid #000;font-weight:bold;text-align:left;padding-right:40px;" colspan="6">Total Amount</td>
			<td style="border:1px solid #000;font-weight:bold;font-weight:bold;padding-left:0px;text-align:right;" colspan="1"><?php echo number_format((float) $nettotal ,2) ?></td>
		</tr>
		<?php
		}else {
		?>
			<div style="margin-top:-250px;margin-left: 100px; position:absolute;left:80%; text-align:center;" >';
				NO Report
			</div>';
		<?php
		}
		?>
	</table>
	
	</div>
</div>