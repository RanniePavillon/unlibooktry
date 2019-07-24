<?php
	$org = $this->org;
	$info = $this->info;
	$salesview = $this->salesView;//TblInvoiceLinesMySqlExtDAO::gettaskreport();
	// echo '<pre>';
	// print_r($salesview);
	// echo '</pre>';
?>
<div class="fromReg">
	<div style="font-size:17px;">
		<?= $org->orgName ?>
	</div>
	<div>
		<?= $info->address ?>
	</div>
	<div>
		VAT Reg. TIN: <?= $info->tinNum ?>
	</div>
	<br/>
	<div>
		<i>Sales per Item</i>
	</div>
	<div>
		<?php echo (isset($_POST['startdate']))? date('F d,Y',strtotime($_POST['startdate'])) : date('F d,Y') ?> - 
		<?php echo (isset($_POST['enddate']))? date('F d,Y',strtotime($_POST['enddate'])) : date('F d,Y')?>
	</div>
</div>
<div class="scroll">
<?php
	if($salesview){
?>
	<table class="tblmainsumlist">
		<tr>
			<th width="80px">Date</th>
			<th width="80px">Invoice No.</th>
			<th width="90px">Item Code</th>
			<th width="141px">Service Description</th>
			<th width="80px" style="text-align: center;">Quantity</th>
			<th width="125px" style="text-align:center;">Unit Cost</th>
			<th width="125px" style="text-align: right;">Amount</th>
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
			<td><?php echo $item['date_created'] ?></td>
			<td><?php echo $item['invoice_number'] ?></td>
			<td><?php echo $item['item_code'] ?></td>
			<td><?php echo $item['description'] ?></td>
			<td><input class="isNumeric" style="text-align: center;" readonly type="text" value="<?php echo $item['quantity'] ?>"></td>
			<td style="text-align: center;"><?php echo number_format((float) $item['unit_cost'], 2) ?></td>
			<?php
			$amount = ($item['quantity'] * $item['unit_cost']);
			?>
			<td><input type="text" class="isNumeric" readonly value="<?php echo number_format((float) $amount,2) ?>"></td>
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