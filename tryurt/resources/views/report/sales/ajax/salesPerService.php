<?php
	$org = $this->org;
	$info = $this->info;
	$salesview = $this->salesView;//TblInvoiceLinesMySqlExtDAO::gettaskreport();
	// echo '<pre>';
	// print_r($salesview);
	// echo '</pre>';
?>
<style>

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
			<div class="ORCompanyInfo">
				<?= $info->typeOfTax == 'vat' ? 'Vat' : 'Non-Vat'?> Reg. TIN: <?= $info->tinNum ?>
			</div>
			<br/>
			<div class="ORCompanyInfo">
				SALES PER SERVICE
			</div>
			<div class="ORCompanyInfo">
				<?php echo (isset($_POST['startdate']))? date('F d,Y',strtotime($_POST['startdate'])) : date('F d,Y') ?> - 
				<?php echo (isset($_POST['enddate']))? date('F d,Y',strtotime($_POST['enddate'])) : date('F d,Y')?>
			</div>
		

	<?php
		if($salesview){
	?>
		<table class="tblmainsumlist">
			<tr>
				<th width="75px">Date</th>
				<th width="80px">Billing No.</th>
				<!--<th width="50px" style="text-align:center;">Service Code</th>-->
				<th width="90px">Service Item</th>
				<th width="100px">Particular</th>
				<th width="30px" style="text-align: center;">Qty</th>
				<th width="80px" style="text-align:right;">Rate</th>
				<th width="90px" style="text-align: right;">Amount</th>
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
				<td><?php echo date('m/d/Y',strtotime($item['trans_date'])) ?></td>
				<td><?php echo $item['invoice_number'] ?></td>
			<!--	<td style="text-align:center;"><?php echo $item['task_code'] ?></td>-->
				<td><?php echo $item['service_item'] ?></td>
				<td><?php echo $item['particular'] ?></td>
				<td><input class="isNumeric" style="text-align: center;" readonly type="text" value="<?php echo $item['hour'] ?>"></td>
				<td style="text-align:right;"><?php echo number_format((float) $item['net_amount'], 2) ?></td>
				<?php
				$amount = ($item['hour'] * $item['net_amount']);
				?>
				<td><input type="text" class="isNumeric" readonly value="<?php echo number_format((float) $amount,2) ?>"></td>
			</tr>
			 <?php
				   // $quantitytotal += $item['rate_per_hour'];
					 $totalunitcost += $item['hour'];
					 $nettotal += $item['net_amount'];
					 
				}
			}
			?>
			<tr class="">
				<th class="tdTotal" colspan="6">Total Amount</th>
				<th class="tdTotal2" colspan="1"><?php echo number_format((float) $nettotal ,2) ?></th>
			</tr>
		</table>
		<?php
			} else {
				echo'<div style="margin-top:80px;color:#183867;font-weight:bold;font-family:Verdana;font-size:14px;text-align: center;">';
				echo 'NO SALES PER SERVICE.';
				echo '</div>';
			}
		?>
		</div>
	</div>
</div>