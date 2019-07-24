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
.outstanding_holder{
	width: 50% !important;
	text-align:center !important;
	padding-left:30px !important;
}
.tblShowReport{
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
<div class="outstanding_holder">
	<div class="fromReg exportHolder">
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
			SALES PER ITEM
		</div>
		<div style="font-weight:bold;">
			<?php echo (isset($_POST['startdate']))? date('F d,Y',strtotime($_POST['startdate'])) : date('F d,Y') ?> - 
			<?php echo (isset($_POST['enddate']))? date('F d,Y',strtotime($_POST['enddate'])) : date('F d,Y')?>
		</div>
	</div>
	<br>
	<div class="scroll">
	<?php
		if($salesview){
	?>
		<table class="tblmainsumlist">
			<tr>
				<th width="80px" style="text-align: left;" class="reportTh">Date</th>
				<th width="80px" style="text-align: left;" class="reportTh">Invoice No.</th>
				<th width="90px" style="text-align: left;" class="reportTh">Item Code</th>
				<th width="141px" style="text-align: left;" class="reportTh">Service Description</th>
				<th width="80px" style="text-align: center;" class="reportTh">Quantity</th>
				<th width="125px" style="text-align: right;" class="reportTh">Unit Cost</th>
				<th width="125px" style="text-align: right;" class="reportTh">Amount</th>
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
				<td style="text-align: left;" class="reportTd"><?php echo $item['date_created'] ?></td>
				<td style="text-align: left;" class="reportTd"><?php echo $item['invoice_number'] ?></td>
				<td style="text-align: left;" class="reportTd"><?php echo $item['item_code'] ?></td>
				<td style="text-align: left;" class="reportTd"><?php echo $item['description'] ?></td>
				<td style="text-align: center;" class="reportTd"><input class="isNumeric" style="text-align: center;" readonly type="text" value="<?php echo $item['quantity'] ?>"></td>
				<td style="text-align: right;" class="reportTd"><?php echo number_format((float) $item['unit_cost'], 2) ?></td>
				<?php
				$amount = ($item['quantity'] * $item['unit_cost']);
				?>
				<td style="text-align: right;" class="reportTd"><input type="text" style="text-align: right;" class="isNumeric" readonly value="<?php echo number_format((float) $amount,2) ?>"></td>
			</tr>
			 <?php
				   // $quantitytotal += $item['rate_per_hour'];
					 $totalunitcost += $item['quantity'];
					 $nettotal += $item['unit_cost'];
					 
				}
			}
			?>
			<tr class="">
				<td style="background-color: #A9A8A8; font-weight:bold;text-align:right;padding-right:40px;" colspan="6">Total Amount</td>
				<td style="background-color: #A9A8A8;font-weight:bold;" colspan="1"><input class="isNumeric" style="font-weight:bold;padding-left:0px;" readonly type="text" value="<?php echo number_format((float) $nettotal ,2) ?>"></td>
			</tr>
		</table>
	<?php
		} else {
			echo 'No Report';
		}
	?>
	</div>
</div>